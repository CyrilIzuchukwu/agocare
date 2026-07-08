<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ForgeLayerService
{
    protected string $apiKey;
    protected string $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('forgelayer.api_key');
        $this->baseUrl = config('forgelayer.base_url');
    }

    protected function client()
    {
        return Http::withToken($this->apiKey)
            ->baseUrl($this->baseUrl)
            ->acceptJson();
    }

    /**
     * Create a fake sandbox address for testing.
     *
     * @param string $chain btc|eth|bsc|tron
     * @param string|null $userRef your internal reference (e.g. donation ID)
     * @param string|null $label human-readable label
     */
    public function createSandboxAddress(string $chain, ?string $userRef = null, ?string $label = null): array
    {
        $response = $this->client()->post('/v1/api/sandbox/addresses', array_filter([
            'chain' => $chain,
            'userRef' => $userRef,
            'label' => $label,
        ]));

        if ($response->failed()) {
            throw new \RuntimeException(
                'ForgeLayer sandbox address creation failed: ' . $response->body()
            );
        }

        return $response->json();
    }

    public function createAddress(string $chain, ?string $userRef = null, ?string $label = null): array
    {
        // Live endpoint uses full chain names, unlike sandbox's short codes.
        // Keep the rest of the app (validation, DB, forms) using short codes
        // consistently, and only translate right here at the live API boundary.
        $liveChainMap = [
            'btc' => 'bitcoin',
            'eth' => 'ethereum',
            'bsc' => 'bsc',
            'tron' => 'tron',
        ];

        $liveChain = $liveChainMap[$chain] ?? $chain;

        $response = $this->client()->post('/v1/addresses', array_filter([
            'chain' => $liveChain,
            'userRef' => $userRef,
            'label' => $label,
        ]));

        if ($response->failed()) {
            throw new \RuntimeException(
                'ForgeLayer live address creation failed: ' . $response->body()
            );
        }

        return $response->json();
    }

    /**
     * Simulate a deposit landing on a given sandbox address.
     * autoConfirm=true will auto-confirm after 15 seconds (handy for quick testing).
     */
    public function simulateDeposit(string $address, string $amount, bool $autoConfirm = false): array
    {
        $response = $this->client()->post('/v1/api/sandbox/simulate-deposit', [
            'address' => $address,
            'amount' => $amount,
            'autoConfirm' => $autoConfirm,
        ]);

        if ($response->failed()) {
            throw new \RuntimeException(
                'ForgeLayer simulate deposit failed: ' . $response->body()
            );
        }

        return $response->json();
    }

    /**
     * Manually advance/confirm a sandbox transaction.
     */
    public function simulateConfirmation(string $transactionId, ?int $confirmations = null): array
    {
        $response = $this->client()->post('/v1/api/sandbox/simulate-confirmation', array_filter([
            'transactionId' => $transactionId,
            'confirmations' => $confirmations,
        ]));

        if ($response->failed()) {
            throw new \RuntimeException(
                'ForgeLayer simulate confirmation failed: ' . $response->body()
            );
        }

        return $response->json();
    }
}
