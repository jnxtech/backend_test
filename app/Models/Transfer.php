<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'SenderUserID',
        'ReceiverUserID',
        'CryptoID',
        'Amount',
        'Date',
        'Time',
    ];

    /**
     * Get the sender user associated with the transfer.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'SenderUserID');
    }

    /**
     * Get the receiver user associated with the transfer.
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'ReceiverUserID');
    }

    /**
     * Get the cryptocurrency associated with the transfer.
     */
    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'CryptoID');
    }
}


