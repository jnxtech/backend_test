<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cryptocurrency extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
    ];

    /**
     * Get the wallets associated with this cryptocurrency.
     */
    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'CryptoID');
    }

    /**
     * Get the transactions associated with this cryptocurrency.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'CryptoID');
    }

    /**
     * Get the transfers associated with this cryptocurrency.
     */
    public function transfers()
    {
        return $this->hasMany(Transfer::class, 'CryptoID');
    }
}

