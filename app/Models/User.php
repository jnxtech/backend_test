<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function transactionsAsBuyer()
    {
        return $this->hasMany(Transaction::class, 'buyer_id');
    }

    public function transactionsAsSeller()
    {
        return $this->hasMany(Transaction::class, 'seller_id');
    }

    public function transfersAsSender()
    {
        return $this->hasMany(Transfer::class, 'sender_id');
    }

    public function transfersAsReceiver()
    {
        return $this->hasMany(Transfer::class, 'receiver_id');
    }
}
