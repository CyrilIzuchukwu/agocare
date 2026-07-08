@extends('layouts.app')
@section('content')

@php
  $chainNames = ['btc' => 'Bitcoin', 'eth' => 'Ethereum', 'bsc' => 'BNB Smart Chain', 'tron' => 'Tron'];
  $chainLabel = $chainNames[$donation->chain] ?? ucfirst($donation->chain);
@endphp

<div class="ago-donate-page">
  <div class="breadcumb-wrapper">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Complete Your Crypto Donation</h1>
        <ul class="breadcumb-menu">
          <li><a href="/">Home</a></li>
          <li><a href="{{ route('donate') }}">Donate</a></li>
          <li>Crypto Checkout</li>
        </ul>
      </div>
    </div>
  </div>

  <section class="space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="ago-donate__form-wrap text-center">

            <h3 class="sec-title mb-20">Send your donation to this {{ $chainLabel }} address</h3>

            <div class="mb-25">
              <img
                src="https://api.qrserver.com/v1/create-qr-code/?size=220x220&data={{ urlencode($donation->crypto_address) }}"
                alt="QR code for deposit address"
                width="220" height="220">
            </div>

            <div class="ago-donate__bank-card justify-content-center mb-20">
              <div>
                <div class="ago-donate__bank-number">
                  <strong style="word-break:break-all;">{{ $donation->crypto_address }}</strong>
                  <button class="ago-donate__copy-btn" onclick="navigator.clipboard.writeText('{{ $donation->crypto_address }}')">
                    <i class="far fa-copy"></i> Copy
                  </button>
                </div>
              </div>
            </div>

            <p class="ago-donate__note">
              <i class="fas fa-info-circle text-theme me-1"></i>
              Send any supported asset on the <strong>{{ $chainLabel }}</strong> network to this address.
              We'll automatically detect your deposit and confirm it — this page updates once payment is received.
            </p>

            <p style="font-size:13px;color:#999;margin-top:15px;">
              Reference: DON-{{ $donation->id }} &middot; Status:
              <span id="ago-crypto-status" class="fw-bold">{{ ucfirst($donation->status) }}</span>
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection
