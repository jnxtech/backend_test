<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'seller_id',
        'crypto_id',
        'amount',
        'price',
        'date',
        'time'
    ];

    /**
     * Get the buyer associated with the transaction.
     */
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    /**
     * Get the seller associated with the transaction.
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    /**
     * Get the cryptocurrency associated with the transaction.
     */
    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'crypto_id');
    }
}

