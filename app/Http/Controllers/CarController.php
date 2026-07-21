<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::query()
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->where('category', $request->input('category'));
            })
            ->orderBy('name')
            ->get();

        $categories = Car::query()->distinct()->orderBy('category')->pluck('category');

        return view('cars.index', [
            'cars' => $cars,
            'categories' => $categories,
            'selectedCategory' => $request->input('category', ''),
        ]);
    }

    public function show(int $id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', [
            'car' => $car
        ]);
    }
}
