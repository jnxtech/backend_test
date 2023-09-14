<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'crypto_id',
        'balance',
    ];

    /**
     * Get the user that owns the wallet.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the cryptocurrency associated with this wallet.
     */
    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'crypto_id');
    }
}

