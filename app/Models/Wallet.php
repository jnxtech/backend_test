<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID',
        'CryptoID',
        'Balance',
    ];

    /**
     * Get the user that owns the wallet.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }

    /**
     * Get the cryptocurrency associated with this wallet.
     */
    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'CryptoID');
    }
}

