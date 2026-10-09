<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Services\ForgeLayerService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    public function __construct(protected ForgeLayerService $forgeLayer) {}

    /**
     * Handle bank transfer donation (existing flow) — just saves the record.
     */
    public function storeBankTransfer(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'donor_email' => 'required|email',
            'donor_phone' => 'nullable|string|max:30',
            'amount' => 'required|numeric|min:100',
            'cause' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        try {
            DB::transaction(function () use ($validated) {
                Donation::create([
                    'donor_name' => $validated['donor_name'],
                    'donor_email' => $validated['donor_email'],
                    'donor_phone' => $validated['donor_phone'] ?? null,
                    'amount_ngn' => $validated['amount'],
                    'cause' => $validated['cause'] ?? null,
                    'message' => $validated['message'] ?? null,
                    'method' => 'bank_transfer',
                    'status' => 'pending',
                ]);
            });
        } catch (\Throwable $e) {
            Log::error('Bank transfer donation save failed', [
                'error' => $e->getMessage(),
                'donor_email' => $validated['donor_email'],
            ]);

            return redirect()
                ->route('donate')
                ->withInput()
                ->with('error', 'Something went wrong saving your donation. Please try again or contact us directly.');
        }

        return redirect()
            ->route('donate')
            ->with('success', 'Thank you! Please send your bank transfer confirmation to us.');
    }

    /**
     * Handle crypto donation: create the donation record, request a deposit
     * address from ForgeLayer (sandbox for now), and show it to the donor.
     */
    public function storeCrypto(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'donor_email' => 'required|email',
            'donor_phone' => 'nullable|string|max:30',
            'chain' => 'required|in:btc,eth,bsc,tron',
            'cause' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        // Step 1: create the donation record first, inside its own transaction.
        // We do NOT want the external API call inside this DB transaction —
        // an external HTTP call can hang, and you never want to hold a DB
        // transaction open while waiting on a third-party network request.
        try {
            $donation = DB::transaction(function () use ($validated) {
                return Donation::create([
                    'donor_name' => $validated['donor_name'],
                    'donor_email' => $validated['donor_email'],
                    'donor_phone' => $validated['donor_phone'] ?? null,
                    'cause' => $validated['cause'] ?? null,
                    'message' => $validated['message'] ?? null,
                    'method' => 'crypto',
                    'chain' => $validated['chain'],
                    'status' => 'pending',
                ]);
            });
        } catch (\Throwable $e) {
            Log::error('Crypto donation record creation failed', [
                'error' => $e->getMessage(),
                'donor_email' => $validated['donor_email'],
            ]);

            return redirect()
                ->route('donate')
                ->withInput()
                ->with('error', 'Something went wrong starting your donation. Please try again.');
        }

        // Step 2: call ForgeLayer to get a deposit address.
        try {
         
            $result = config('forgelayer.live')
                ? $this->forgeLayer->createAddress(chain: $validated['chain'], userRef: (string) $donation->id, label: 'donation-' . $donation->id)
                : $this->forgeLayer->createSandboxAddress(chain: $validated['chain'], userRef: (string) $donation->id, label: 'donation-' . $donation->id);

            $address = $result['address'] ?? $result['data']['address'] ?? null;

            if (! $address) {
                throw new \RuntimeException('ForgeLayer response did not contain an address. Raw: ' . json_encode($result));
            }

            $donation->update(['crypto_address' => $address]);
        } catch (\Throwable $e) {
            Log::error('ForgeLayer address generation failed', [
                'donation_id' => $donation->id,
                'error' => $e->getMessage(),
            ]);

            // Mark the donation as failed rather than leaving it stuck
            // pending with no address for the donor to pay to.
            $donation->update(['status' => 'failed']);

            return redirect()
                ->route('donate')
                ->with('error', 'We could not generate a crypto deposit address right now. Please try again shortly, or use bank transfer instead.');
        }

        return redirect()->route('donate.crypto.show', $donation->id);
    }

    /**
     * Show the crypto donation page with the address/QR to pay to.
     */
    public function showCrypto(Donation $donation)
    {
        // Guard: don't show this page for a donation that failed or isn't crypto.
        if ($donation->method !== 'crypto' || ! $donation->crypto_address) {
            abort(404);
        }

        return view('pages.donate-crypto', compact('donation'));
    }
}
