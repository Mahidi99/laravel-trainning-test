<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInfo extends Model
{
    use HasFactory;

    protected $table = 'car_info';

    protected $fillable = [
        'registration_number',
        'model',
        'fuel_type',
        'transmission',
        'customer_name',
    ];
}

