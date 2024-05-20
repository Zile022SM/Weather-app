<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityTemperature extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'temperature',
        'created_at',
    ];

    protected $table = "weather";
}
