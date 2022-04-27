<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'vehicle_name',
        'vehicle_model',
        'vehicle_brand',
        'vehicle_reg_no',
        'service_date',
        'delivery_type',
        'status',
    ];
}
