<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'crypto_id',
        'amount',
        'date',
        'time',
    ];

    /**
     * Get the sender user associated with the transfer.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Get the receiver user associated with the transfer.
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    /**
     * Get the cryptocurrency associated with the transfer.
     */
    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'crypto_id');
    }
}

