<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    ////
    use HasFactory;

    protected $fillable = [
        'event_id',
        'order_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'total_price',
        'status',
        'snap_token',
    ];

    protected $casts = [
        'total_price' => 'integer',
    ];

    /**
     * Get the event for the transaction.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

