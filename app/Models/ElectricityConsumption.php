<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricityConsumption extends Model
{
    use HasFactory;

    protected $table = 'electricity_consumption';

    protected $fillable = [
        'date',
        'consumption_kwh',
        
    ];
}
