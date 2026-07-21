<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): View
    {
        $orders = Order::with('car')->latest()->get();

        return view('orders.index', [
            'orders' => $orders,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'car_id' => ['required', 'exists:cars,id'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'start_date' => ['required', 'date', 'after_or_equal:today'],
            'end_date' => ['required', 'date', 'after:start_date'],
        ]);

        $car = Car::findOrFail($validated['car_id']);

        if ($car->status !== 'available') {
            return back()
                ->withInput()
                ->withErrors(['car_id' => 'This car is not available for booking right now.']);
        }

        $startDate = $validated['start_date'];
        $endDate = $validated['end_date'];
        $totalDays = (int) Carbon::parse($startDate)->diffInDays($endDate);
        $totalPrice = $totalDays * $car->price_per_day;

        Order::create([
            'car_id' => $car->id,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_days' => $totalDays,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        $car->update(['status' => 'reserved']);

        return redirect()
            ->route('orders.index')
            ->with('success', "Your reservation for the {$car->name} has been submitted.");
    }

    public function cancel(Order $order): RedirectResponse
    {
        $order->update(['status' => 'cancelled']);

        if ($order->car->status === 'reserved') {
            $order->car->update(['status' => 'available']);
        }

        return redirect()
            ->route('orders.index')
            ->with('success', 'Your order has been cancelled.');
    }
}
