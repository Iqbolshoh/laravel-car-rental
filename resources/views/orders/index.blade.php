@extends('layouts.app')

@section('title', 'My Orders - EliteDrive')

@section('content')

<!-- Page Header Section -->
<div class="bg-zinc-900 py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white uppercase tracking-widest mb-4">My Orders</h1>
        <div class="w-16 h-1 bg-amber-500 mx-auto"></div>
        <p class="text-zinc-400 mt-6 max-w-2xl mx-auto uppercase tracking-wider text-sm">
            Manage your premium vehicle reservations and booking history
        </p>
    </div>
</div>

<!-- Orders Content Section -->
<div class="max-w-7xl mx-auto px-4 py-16 min-h-[50vh]">

    @php
        $statusStyles = [
            'pending' => 'bg-amber-500 text-zinc-950',
            'confirmed' => 'bg-emerald-500 text-white',
            'completed' => 'bg-zinc-600 text-white',
            'cancelled' => 'bg-red-500 text-white',
        ];
    @endphp

    <!-- Active Orders Container -->
    <div class="space-y-8">

        @forelse ($orders as $order)
        <div class="bg-white rounded-lg shadow-lg border border-zinc-200 overflow-hidden flex flex-col md:flex-row group @if($order->status === 'cancelled' || $order->status === 'completed') opacity-75 @endif">

            <!-- Car Image -->
            <div class="w-full md:w-1/3 h-56 md:h-auto relative overflow-hidden @if($order->status === 'cancelled' || $order->status === 'completed') grayscale @endif">
                <img src="{{ $order->car->image }}" alt="{{ $order->car->name }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                <!-- Status Badge -->
                <div class="absolute top-4 left-4 {{ $statusStyles[$order->status] ?? 'bg-zinc-600 text-white' }} px-3 py-1 font-bold uppercase tracking-wider text-xs rounded-sm shadow-md">
                    {{ $order->status }}
                </div>
            </div>

            <!-- Order Details -->
            <div class="w-full md:w-2/3 p-6 md:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-4">
                        <div>
                            <p class="text-zinc-400 text-xs uppercase tracking-widest mb-1">Order #ORD-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</p>
                            <h3 class="text-2xl font-bold text-zinc-900 uppercase">{{ $order->car->name }}</h3>
                            <p class="text-zinc-400 text-sm mt-1">{{ $order->full_name }} &middot; {{ $order->email }}</p>
                        </div>
                        <div class="text-left md:text-right">
                            <p class="text-zinc-400 text-xs uppercase tracking-widest mb-1">Total Amount</p>
                            <span class="text-2xl font-extrabold text-amber-500">${{ number_format($order->total_price, 2) }}</span>
                        </div>
                    </div>

                    <hr class="border-zinc-100 my-4">

                    <!-- Booking Dates -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div class="bg-zinc-50 p-4 rounded border border-zinc-100">
                            <span class="block text-zinc-400 text-xs uppercase tracking-widest mb-1">Pick-up Date</span>
                            <span class="block text-zinc-800 font-bold"><i class="far fa-calendar-alt text-amber-500 mr-2"></i>{{ $order->start_date->format('M d, Y') }}</span>
                        </div>
                        <div class="bg-zinc-50 p-4 rounded border border-zinc-100">
                            <span class="block text-zinc-400 text-xs uppercase tracking-widest mb-1">Return Date</span>
                            <span class="block text-zinc-800 font-bold"><i class="far fa-calendar-check text-amber-500 mr-2"></i>{{ $order->end_date->format('M d, Y') }}</span>
                        </div>
                    </div>
                    <p class="text-zinc-400 text-xs uppercase tracking-widest mt-4">{{ $order->total_days }} {{ Str::plural('day', $order->total_days) }} rental</p>
                </div>

                <!-- Action Buttons -->
                @if (in_array($order->status, ['pending', 'confirmed']))
                <div class="mt-6 flex gap-4">
                    <form action="{{ route('orders.cancel', $order) }}" method="POST" onsubmit="return confirm('Cancel this reservation?');">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="border border-zinc-300 text-zinc-600 px-6 py-3 rounded text-sm font-bold uppercase tracking-widest hover:bg-red-50 hover:text-red-600 hover:border-red-300 transition-colors duration-300">
                            Cancel Order
                        </button>
                    </form>
                </div>
                @endif
            </div>
        </div>
        @empty
        <div class="text-center py-20">
            <i class="fas fa-car-side text-5xl text-zinc-300 mb-6"></i>
            <p class="text-zinc-500 uppercase tracking-widest mb-6">You have no reservations yet</p>
            <a href="{{ route('cars.index') }}" class="inline-block bg-zinc-900 text-white px-8 py-3 rounded hover:bg-amber-500 hover:text-zinc-950 transition-colors duration-300 font-bold uppercase tracking-widest">
                Browse Our Fleet
            </a>
        </div>
        @endforelse

    </div>
</div>

@endsection