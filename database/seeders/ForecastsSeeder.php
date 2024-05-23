<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CitiesModel;
use App\Models\ForecastModel;

class ForecastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = CitiesModel::all();

        foreach($cities as $city){
            for($i = 0; $i < 5; $i++){
                ForecastModel::create([
                    'city_id' => $city->id,
                    'tempeature' => rand(15, 30),
                    'forecast_date'=> now()->addDays(rand(1, 30)),
                ]);
            }
        }
    }
}
