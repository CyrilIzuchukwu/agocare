<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function forgelayer(Request $request): JsonResponse
    {
        // Use the raw request body for signature verification — NOT
        // $request->all() or json_decode-then-re-encode. Any re-serialization
        // can change whitespace/key order and break the HMAC comparison.
        $rawPayload = $request->getContent();
        $signature = $request->header('X-Webhook-Signature');
        $secret = config('forgelayer.webhook_secret');

        if (! $signature || ! $secret) {
            Log::warning('ForgeLayer webhook rejected: missing signature or secret not configured.');
            return response()->json(['error' => 'unauthorized'], 401);
        }

        $expectedSignature = hash_hmac('sha256', $rawPayload, $secret);

        // hash_equals() prevents timing attacks — never use === to compare signatures.
        if (! hash_equals($expectedSignature, $signature)) {
            Log::warning('ForgeLayer webhook rejected: signature mismatch.', [
                'received' => $signature,
            ]);
            return response()->json(['error' => 'invalid signature'], 401);
        }

        $payload = json_decode($rawPayload, true);

        if (! is_array($payload) || ! isset($payload['event'])) {
            Log::warning('ForgeLayer webhook rejected: malformed payload.', ['raw' => $rawPayload]);
            return response()->json(['error' => 'bad payload'], 400);
        }

        Log::info('ForgeLayer webhook received.', [
            'event' => $payload['event'],
            'data' => $payload['data'] ?? null,
        ]);

        match ($payload['event']) {
            'deposit_detected' => $this->handleDepositDetected($payload),
            'deposit_confirmed' => $this->handleDepositConfirmed($payload),
            'withdrawal_sent' => null, // not used in donation flow yet
            default => Log::info('ForgeLayer webhook: unhandled event type.', ['event' => $payload['event']]),
        };

        return response()->json(['received' => true]);
    }

    protected function findDonation(array $payload): ?Donation
    {
        $data = $payload['data'] ?? [];

        // Prefer matching by userRef (the donation ID we sent when creating
        // the address) since it's an exact match. Fall back to address
        // lookup in case userRef is missing for any reason.
        if (! empty($data['userRef'])) {
            $donation = Donation::find($data['userRef']);
            if ($donation) {
                return $donation;
            }
        }

        if (! empty($data['address'])) {
            return Donation::where('crypto_address', $data['address'])->first();
        }

        return null;
    }

    protected function handleDepositDetected(array $payload): void
    {
        $donation = $this->findDonation($payload);

        if (! $donation) {
            Log::warning('ForgeLayer webhook: no matching donation for deposit_detected.', ['payload' => $payload]);
            return;
        }

        $data = $payload['data'] ?? [];

        $donation->update([
            'forgelayer_tx_id' => $data['txid'] ?? $donation->forgelayer_tx_id,
            'crypto_amount' => $data['amount'] ?? $donation->crypto_amount,
            // Status stays 'pending' — we've only seen the deposit, not confirmed it yet.
        ]);
    }

    protected function handleDepositConfirmed(array $payload): void
    {
        $donation = $this->findDonation($payload);

        if (! $donation) {
            Log::warning('ForgeLayer webhook: no matching donation for deposit_confirmed.', ['payload' => $payload]);
            return;
        }

        // Guard against duplicate delivery (ForgeLayer's own docs mention
        // retries up to 4 times) — don't reprocess an already-confirmed donation.
        if ($donation->status === 'confirmed') {
            Log::info('ForgeLayer webhook: donation already confirmed, ignoring duplicate.', [
                'donation_id' => $donation->id,
            ]);
            return;
        }

        $data = $payload['data'] ?? [];

        $donation->update([
            'status' => 'confirmed',
            'forgelayer_tx_id' => $data['txid'] ?? $donation->forgelayer_tx_id,
            'crypto_amount' => $data['amount'] ?? $donation->crypto_amount,
        ]);

        // Future step: dispatch a thank-you email/notification here.
    }
}
