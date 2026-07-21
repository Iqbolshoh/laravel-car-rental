<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    public function show(int $id)
    {
        $car = Car::find($id);
        return view('cars.show', [
            'car' => $car
        ]);
    }
}
