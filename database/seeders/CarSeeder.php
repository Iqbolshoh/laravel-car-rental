<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cars = [
            [
                'name' => 'McLaren 720S',
                'category' => 'Exotic',
                'image' => 'https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?w=800',
                'price_per_day' => 850,
                'horsepower' => 710,
                'transmission' => 'Automatic',
                'seats' => 2,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'The McLaren 720S delivers breathtaking performance with lightweight engineering and twin-turbo V8 power.',
            ],
            [
                'name' => 'Mercedes G-Class AMG',
                'category' => 'Luxury SUV',
                'image' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?w=800',
                'price_per_day' => 500,
                'horsepower' => 577,
                'transmission' => 'Automatic',
                'seats' => 5,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'Luxury SUV with premium comfort, powerful AMG performance, and iconic styling.',
            ],
            [
                'name' => 'Lamborghini Huracan EVO',
                'category' => 'Supercar',
                'image' => 'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=800',
                'price_per_day' => 950,
                'horsepower' => 631,
                'transmission' => 'Automatic',
                'seats' => 2,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'A naturally aspirated V10 supercar built for pure driving excitement.',
            ],
            [
                'name' => 'Rolls-Royce Cullinan',
                'category' => 'Luxury',
                'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=800',
                'price_per_day' => 1200,
                'horsepower' => 563,
                'transmission' => 'Automatic',
                'seats' => 5,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'The ultimate luxury SUV offering unmatched comfort and prestige.',
            ],
            [
                'name' => 'BMW M4 Competition',
                'category' => 'Sports',
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=800',
                'price_per_day' => 320,
                'horsepower' => 503,
                'transmission' => 'Automatic',
                'seats' => 4,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'High-performance coupe combining everyday usability with track-ready power.',
            ],
            [
                'name' => 'Audi RS7 Sportback',
                'category' => 'Luxury Sport',
                'image' => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=800',
                'price_per_day' => 400,
                'horsepower' => 591,
                'transmission' => 'Automatic',
                'seats' => 5,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'Elegant design with quattro all-wheel drive and incredible acceleration.',
            ],
            [
                'name' => 'Porsche 911 Turbo S',
                'category' => 'Sports',
                'image' => 'https://images.unsplash.com/photo-1502877338535-766e1452684a?w=800',
                'price_per_day' => 780,
                'horsepower' => 640,
                'transmission' => 'Automatic',
                'seats' => 2,
                'fuel_type' => 'Petrol',
                'status' => 'available',
                'description' => 'Legendary sports car delivering outstanding speed, luxury, and precision.',
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
