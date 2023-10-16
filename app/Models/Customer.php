<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'firstname',
        'lastname',
        'email',
        'address_country',
        'address_street',
        'address_zipcode',
        'terms_accepted_at',
    ];
}
