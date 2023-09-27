<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start',
        'end',
        'available_seats',
        'categoryA_price',
        'categoryB_price',
        'categoryC_price',
        'categoryD_price',
        'tournament_id',
        'venue_id',
        'teamA_id',
        'teamB_id'
    ];
}
