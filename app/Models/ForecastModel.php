<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForecastModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'forecast_date',
        'temperature',
    ];

    protected $table = 'forecasts';
}
