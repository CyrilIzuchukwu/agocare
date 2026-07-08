<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donor_name',
        'donor_email',
        'donor_phone',
        'cause',
        'message',
        'method',
        'amount_ngn',
        'chain',
        'crypto_address',
        'crypto_amount',
        'forgelayer_tx_id',
        'status',
    ];
}
