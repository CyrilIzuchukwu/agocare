<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('donor_name');
            $table->string('donor_email');
            $table->string('donor_phone')->nullable();
            $table->string('cause')->nullable();
            $table->text('message')->nullable();

            $table->enum('method', ['bank_transfer', 'crypto'])->default('bank_transfer');

            // Fiat amount (Naira), for bank transfer donations
            $table->decimal('amount_ngn', 15, 2)->nullable();

            // Crypto-specific fields
            $table->string('chain')->nullable();          // btc, eth, bsc, tron
            $table->string('crypto_address')->nullable();
            $table->string('crypto_amount')->nullable();   // amount expected, as string (crypto precision)
            $table->string('forgelayer_tx_id')->nullable(); // transaction id once a deposit is simulated/detected

            $table->enum('status', ['pending', 'confirmed', 'failed'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
