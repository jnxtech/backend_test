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
        return $this->hasMany(Transaction::class, 'BuyerUID');
    }

    public function transactionsAsSeller()
    {
        return $this->hasMany(Transaction::class, 'SellerUID');
    }

    public function transfersAsSender()
    {
        return $this->hasMany(Transfer::class, 'SenderUserID');
    }

    public function transfersAsReceiver()
    {
        return $this->hasMany(Transfer::class, 'ReceiverUserID');
    }
}
