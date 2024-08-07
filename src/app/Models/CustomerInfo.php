<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    protected $table = 'customer_info';

    protected $fillable = [
        'nic',
        'name',
        'email',
        'phone',
    ];

    public function cars()
    {
        return $this->hasMany(CarInfo::class, 'customer_id');
    }
}
