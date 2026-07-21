<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = Car::all();

        if ($cars->isEmpty()) {
            return;
        }

        $bookings = [
            [
                'car' => 'McLaren 720S',
                'full_name' => 'John Carter',
                'email' => 'john.carter@example.com',
                'phone' => '+1 555 010 2233',
                'start_date' => Carbon::now()->addDays(5),
                'end_date' => Carbon::now()->addDays(8),
                'status' => 'confirmed',
            ],
            [
                'car' => 'Mercedes G-Class AMG',
                'full_name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'phone' => '+1 555 010 7788',
                'start_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->subDays(7),
                'status' => 'completed',
            ],
            [
                'car' => 'BMW M4 Competition',
                'full_name' => 'Michael Lee',
                'email' => 'michael.lee@example.com',
                'phone' => '+1 555 010 4411',
                'start_date' => Carbon::now()->addDays(1),
                'end_date' => Carbon::now()->addDays(3),
                'status' => 'pending',
            ],
        ];

        foreach ($bookings as $booking) {
            $car = $cars->firstWhere('name', $booking['car']) ?? $cars->first();
            $totalDays = (int) $booking['start_date']->diffInDays($booking['end_date']);

            Order::create([
                'car_id' => $car->id,
                'full_name' => $booking['full_name'],
                'email' => $booking['email'],
                'phone' => $booking['phone'],
                'start_date' => $booking['start_date'],
                'end_date' => $booking['end_date'],
                'total_days' => $totalDays,
                'total_price' => $totalDays * $car->price_per_day,
                'status' => $booking['status'],
            ]);
        }
    }
}
