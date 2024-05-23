<?php

namespace Database\Seeders;

use App\Models\CityTemperature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gradovi = [
            'Beograd'=>22,
            'Nis' => 18,
            'Kragujevac' => 20,
            'Smederevo' => 19,
            'Kraljevo' => 21

        ];

        foreach ($gradovi as $grad => $temperatura) {
            CityTemperature::create([
                'city' => $grad,
                'temperature' => $temperatura
            ]);
        }
    }
}
