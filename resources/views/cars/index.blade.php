@extends('layouts.app')

@section('title', 'Our Fleet - EliteDrive')

@section('content')

<!-- Page Header -->
<div class="bg-zinc-900 py-16">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white uppercase tracking-widest mb-4">Our Fleet</h1>
        <div class="w-16 h-1 bg-amber-500 mx-auto"></div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-16">

    <!-- Filter Top Bar -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-12 border border-zinc-200 flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="flex items-center gap-4 w-full md:w-auto">
            <i class="fas fa-filter text-amber-500 text-xl"></i>
            <span class="text-zinc-900 font-bold uppercase tracking-wider">Filter By:</span>
        </div>

        <form action="{{ route('cars.index') }}" method="GET" class="flex flex-col sm:flex-row w-full md:w-auto gap-4 flex-grow justify-end">
            <select name="category" onchange="this.form.submit()" class="bg-zinc-100 text-zinc-800 border-none px-6 py-3 rounded focus:ring-2 focus:ring-amber-500 outline-none uppercase text-sm tracking-wider font-semibold">
                <option value="">All Categories</option>
                @foreach ($categories as $category)
                <option value="{{ $category }}" @selected($selectedCategory === $category)>{{ $category }}</option>
                @endforeach
            </select>

            <button type="submit" class="bg-zinc-900 text-white px-8 py-3 rounded hover:bg-amber-500 hover:text-zinc-950 transition-colors duration-300 font-bold uppercase tracking-widest">
                Search
            </button>
        </form>
    </div>

    <!-- Vehicle Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse ($cars as $car)
        <div class="bg-white rounded-lg shadow border border-zinc-100 overflow-hidden flex flex-col group">
            <div class="h-56 overflow-hidden relative">
                <img src="{{ $car->image }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" alt="{{ $car->name }}">
                <div class="absolute bottom-0 left-0 bg-amber-500 text-zinc-950 px-4 py-2 font-bold uppercase tracking-wider text-sm">
                    {{ $car->status }}
                </div>
            </div>

            <div class="p-6 flex-grow flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-2xl font-bold text-zinc-900 uppercase">{{ $car->name }}</h3>
                        <p class="text-zinc-500 text-sm uppercase tracking-wider mt-1">{{ $car->category }}</p>
                    </div>
                    <span class="text-xl font-extrabold text-zinc-900">${{ $car->price_per_day }}<span class="text-sm text-zinc-400 font-normal">/day</span></span>
                </div>

                <div class="grid grid-cols-2 gap-y-4 mb-8 mt-4">
                    <div class="flex items-center text-zinc-600 text-sm"><i class="fas fa-tachometer-alt w-6 text-amber-500"></i> {{ $car->horsepower }}</div>
                    <div class="flex items-center text-zinc-600 text-sm"><i class="fas fa-cogs w-6 text-amber-500"></i> {{ $car->transmission }}</div>
                    <div class="flex items-center text-zinc-600 text-sm"><i class="fas fa-chair w-6 text-amber-500"></i> {{ $car->seats }} Seats</div>
                    <div class="flex items-center text-zinc-600 text-sm"><i class="fas fa-gas-pump w-6 text-amber-500"></i> {{ $car->fuel_type }}</div>
                </div>

                <div class="mt-auto">
                    <a href="{{ route('cars.show', $car->id) }}" class="block text-center w-full bg-zinc-900 text-white font-bold uppercase tracking-widest py-4 rounded hover:bg-amber-500 hover:text-zinc-950 transition-colors duration-300">
                        Reserve Now
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection