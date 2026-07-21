@extends('layouts.app')

@section('title', $car->name.' - EliteDrive')

@section('content')

<!-- Vehicle Title Section -->
<div class="bg-zinc-950 text-white pt-12 pb-24">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold uppercase tracking-wider mb-2">{{ $car->name }}</h1>
        <p class="text-amber-500 text-lg uppercase tracking-widest font-semibold">{{ $car->category }}</p>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 -mt-16 mb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        <!-- Main Content Area -->
        <div class="lg:col-span-2 space-y-10">
            <!-- Large Image -->
            <div class="rounded-xl overflow-hidden shadow-2xl">
                <img src="{{ $car->image }}" alt="McLaren 720S" class="w-full h-auto object-cover">
            </div>

            <!-- Vehicle Details -->
            <div class="bg-white p-8 rounded-xl shadow-lg border border-zinc-100">
                <h2 class="text-2xl font-bold text-zinc-900 uppercase tracking-widest mb-6 flex items-center">
                    <span class="w-8 h-1 bg-amber-500 mr-4"></span> Overview
                </h2>
                <p class="text-zinc-600 leading-relaxed mb-8 text-lg font-light">
                    {{ $car->description }}
                </p>

                <!-- Feature Grid -->
                <h3 class="text-xl font-bold text-zinc-900 uppercase tracking-wider mb-6">Features</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                    <div class="flex flex-col items-center p-4 bg-zinc-50 rounded-lg text-center">
                        <i class="fas fa-tachometer-alt text-3xl text-amber-500 mb-3"></i>
                        <span class="text-zinc-800 font-semibold text-sm uppercase">{{ $car->horsepower }}</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-zinc-50 rounded-lg text-center">
                        <i class="fas fa-stopwatch text-3xl text-amber-500 mb-3"></i>
                        <span class="text-zinc-800 font-semibold text-sm uppercase">{{ $car->seats }}s</span>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-zinc-50 rounded-lg text-center">
                        <i class="fas fa-fan text-3xl text-amber-500 mb-3"></i>
                        <span class="text-zinc-800 font-semibold text-sm uppercase">{{ $car->transmission }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservation Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-zinc-900 rounded-xl shadow-2xl p-8 sticky top-28 border-t-4 border-amber-500 text-white">
                <div class="text-center mb-8">
                    <div class="text-zinc-400 text-sm uppercase tracking-widest mb-2">Daily Rate</div>
                    <div class="text-5xl font-extrabold text-amber-500">${{ number_format($car->price_per_day, 0) }}</div>
                </div>

                @if ($car->status !== 'available')
                <div class="bg-red-500/10 border border-red-500/40 text-red-400 text-sm font-semibold uppercase tracking-widest text-center px-4 py-3 rounded mb-6">
                    This vehicle is currently {{ $car->status }}
                </div>
                @endif

                <!-- Booking Form -->
                <form action="{{ route('orders.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="car_id" value="{{ $car->id }}">

                    <div class="space-y-2">
                        <label class="block text-zinc-300 text-xs font-bold uppercase tracking-widest">Full Name</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" required class="w-full bg-zinc-800 border-none text-white px-4 py-3 rounded focus:ring-2 focus:ring-amber-500 outline-none">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-zinc-300 text-xs font-bold uppercase tracking-widest">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="w-full bg-zinc-800 border-none text-white px-4 py-3 rounded focus:ring-2 focus:ring-amber-500 outline-none">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-zinc-300 text-xs font-bold uppercase tracking-widest">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" required class="w-full bg-zinc-800 border-none text-white px-4 py-3 rounded focus:ring-2 focus:ring-amber-500 outline-none">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-zinc-300 text-xs font-bold uppercase tracking-widest">Start Date</label>
                        <input type="date" name="start_date" value="{{ old('start_date') }}" required class="w-full bg-zinc-800 border-none text-white px-4 py-3 rounded focus:ring-2 focus:ring-amber-500 outline-none">
                    </div>

                    <div class="space-y-2">
                        <label class="block text-zinc-300 text-xs font-bold uppercase tracking-widest">End Date</label>
                        <input type="date" name="end_date" value="{{ old('end_date') }}" required class="w-full bg-zinc-800 border-none text-white px-4 py-3 rounded focus:ring-2 focus:ring-amber-500 outline-none">
                    </div>

                    <div class="pt-6">
                        <button type="submit" @if($car->status !== 'available') disabled @endif class="w-full bg-amber-500 text-zinc-950 font-bold uppercase tracking-widest py-4 rounded hover:bg-amber-400 transition-colors duration-300 transform hover:scale-105 disabled:opacity-40 disabled:cursor-not-allowed disabled:hover:scale-100">
                            Confirm Order
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection