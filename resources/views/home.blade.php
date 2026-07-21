@extends('layouts.app')

@section('title', 'EliteDrive - Luxury Car Rentals')

@section('content')

<!-- Hero Banner Section -->
<div class="relative bg-zinc-950 min-h-[85vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?q=80&w=2000" alt="Luxury Car Background" class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/60 to-transparent"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto mt-20">
        <span class="text-amber-500 uppercase tracking-[0.3em] text-sm font-bold mb-4 block">Experience Perfection</span>
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-8 leading-tight">
            Redefine Your <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-amber-600">Journey</span>
        </h1>
        <p class="text-zinc-300 text-lg md:text-xl mb-12 max-w-2xl mx-auto font-light">
            Exclusive fleet of luxury and exotic vehicles available for your next unforgettable adventure.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="/cars" class="bg-amber-500 text-zinc-950 px-10 py-4 rounded-sm font-bold uppercase tracking-widest hover:bg-amber-400 transition-all duration-300 transform hover:-translate-y-1 shadow-[0_0_20px_rgba(245,158,11,0.3)]">
                Explore Fleet
            </a>
        </div>
    </div>
</div>

<!-- Featured Fleet Section -->
<div class="bg-zinc-100 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Heading -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-zinc-900 uppercase tracking-widest mb-4">Featured Models</h2>
            <div class="w-24 h-1 bg-amber-500 mx-auto"></div>
        </div>

        <!-- Car Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Vehicle Card 1 -->
            <div class="group bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?w=800" alt="Supercar" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-zinc-900 text-white px-4 py-1 rounded-full text-sm font-bold tracking-wider">
                        $850 / day
                    </div>
                </div>
                <div class="pt-6 pb-2 px-2 text-center">
                    <h3 class="text-2xl font-bold text-zinc-900 mb-2 uppercase tracking-wide">McLaren 720S</h3>
                    <p class="text-zinc-500 text-sm mb-6 uppercase tracking-widest">Exotic</p>
                    <a href="/cars/1" class="inline-block w-full border-2 border-zinc-900 text-zinc-900 hover:bg-zinc-900 hover:text-white font-bold uppercase tracking-widest py-3 transition-colors duration-300">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Vehicle Card 2 -->
            <div class="group bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1563720223185-11003d516935?w=800" alt="Luxury SUV" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-zinc-900 text-white px-4 py-1 rounded-full text-sm font-bold tracking-wider">
                        $500 / day
                    </div>
                </div>
                <div class="pt-6 pb-2 px-2 text-center">
                    <h3 class="text-2xl font-bold text-zinc-900 mb-2 uppercase tracking-wide">G-Wagon AMG</h3>
                    <p class="text-zinc-500 text-sm mb-6 uppercase tracking-widest">Luxury SUV</p>
                    <a href="/cars/2" class="inline-block w-full border-2 border-zinc-900 text-zinc-900 hover:bg-zinc-900 hover:text-white font-bold uppercase tracking-widest py-3 transition-colors duration-300">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Vehicle Card 3 -->
            <div class="group bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500">
                <div class="relative overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=800" alt="Luxury Sedan" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 right-4 bg-zinc-900 text-white px-4 py-1 rounded-full text-sm font-bold tracking-wider">
                        $400 / day
                    </div>
                </div>
                <div class="pt-6 pb-2 px-2 text-center">
                    <h3 class="text-2xl font-bold text-zinc-900 mb-2 uppercase tracking-wide">Audi RS7</h3>
                    <p class="text-zinc-500 text-sm mb-6 uppercase tracking-widest">Sport Sedan</p>
                    <a href="/cars/3" class="inline-block w-full border-2 border-zinc-900 text-zinc-900 hover:bg-zinc-900 hover:text-white font-bold uppercase tracking-widest py-3 transition-colors duration-300">
                        View Details
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection