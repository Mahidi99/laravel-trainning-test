<?php

namespace App\Http\Controllers;

use App\Models\CarInfo;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show()
    {
        $cars = CarInfo::all();
        return view('car-details', compact('cars'));
    }
}
