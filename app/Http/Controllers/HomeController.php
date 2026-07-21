<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $featuredCars = Car::query()
            ->where('status', 'available')
            ->orderByDesc('price_per_day')
            ->take(3)
            ->get();

        return view('home', [
            'featuredCars' => $featuredCars,
        ]);
    }
}
