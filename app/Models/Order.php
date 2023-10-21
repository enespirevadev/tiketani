<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'customer_id',
        'order_number',
        'order_date',
        'seats',
        'category',
        'category_price',
        'total_price',
    ];

    /**
     * Get the customer associated with the order.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Get the event associated with the order.
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
