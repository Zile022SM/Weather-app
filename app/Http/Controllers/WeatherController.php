<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){

        $gradovi = [
            'Beograd'=>22,
            'Nis' => 18,
            'Kragujevac' => 20,
            'Smederevo' => 19,
            'Kraljevo' => 21

        ];
        
        return view('prognoza', compact('gradovi'));
    }
}
