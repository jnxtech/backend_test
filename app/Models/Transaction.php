<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'BuyerUID',
        'SellerUID',
        'CryptoID',
        'Amount',
        'Price',
        'Date',
        'Time'
    ];

    /**
     * Get the buyer associated with the transaction.
     */
    public function buyer()
    {
        return $this->belongsTo(User::class, 'BuyerUID');
    }

    /**
     * Get the seller associated with the transaction.
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'SellerUID');
    }

    /**
     * Get the cryptocurrency associated with the transaction.
     */
    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'CryptoID');
    }
}
