<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
