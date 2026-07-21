<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Cars listing page route
Route::get('/cars', function () {
    return view('cars.index');
});

// Car details page route
Route::get('/cars/{id}', function ($id) {
    // In a real application, you would fetch the car data by $id here
    return view('cars.show');
});

// Orders listing page route
Route::get('/orders', function () {
    return view('orders.index');
});

// Post route for form submission (Booking)
Route::post('/orders', function () {
    // Handle the order submission logic here
    return redirect('/orders');
});
