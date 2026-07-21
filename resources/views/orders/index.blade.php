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

    <!-- Active Orders Container -->
    <div class="space-y-8">

        <!-- Single Order Card 1 -->
        <div class="bg-white rounded-lg shadow-lg border border-zinc-200 overflow-hidden flex flex-col md:flex-row group">

            <!-- Car Image -->
            <div class="w-full md:w-1/3 h-56 md:h-auto relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1614162692292-7ac56d7f7f1e?w=800" alt="McLaren 720S" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                <!-- Status Badge -->
                <div class="absolute top-4 left-4 bg-emerald-500 text-white px-3 py-1 font-bold uppercase tracking-wider text-xs rounded-sm shadow-md">
                    Confirmed
                </div>
            </div>

            <!-- Order Details -->
            <div class="w-full md:w-2/3 p-6 md:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-4">
                        <div>
                            <p class="text-zinc-400 text-xs uppercase tracking-widest mb-1">Order #ORD-84729</p>
                            <h3 class="text-2xl font-bold text-zinc-900 uppercase">McLaren 720S</h3>
                        </div>
                        <div class="text-left md:text-right">
                            <p class="text-zinc-400 text-xs uppercase tracking-widest mb-1">Total Amount</p>
                            <span class="text-2xl font-extrabold text-amber-500">$2,550</span>
                        </div>
                    </div>

                    <hr class="border-zinc-100 my-4">

                    <!-- Booking Dates -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div class="bg-zinc-50 p-4 rounded border border-zinc-100">
                            <span class="block text-zinc-400 text-xs uppercase tracking-widest mb-1">Pick-up Date</span>
                            <span class="block text-zinc-800 font-bold"><i class="far fa-calendar-alt text-amber-500 mr-2"></i> Oct 15, 2026</span>
                            <span class="block text-zinc-500 text-sm mt-1">10:00 AM</span>
                        </div>
                        <div class="bg-zinc-50 p-4 rounded border border-zinc-100">
                            <span class="block text-zinc-400 text-xs uppercase tracking-widest mb-1">Return Date</span>
                            <span class="block text-zinc-800 font-bold"><i class="far fa-calendar-check text-amber-500 mr-2"></i> Oct 18, 2026</span>
                            <span class="block text-zinc-500 text-sm mt-1">10:00 AM</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex gap-4">
                    <button class="bg-zinc-900 text-white px-6 py-3 rounded text-sm font-bold uppercase tracking-widest hover:bg-amber-500 hover:text-zinc-950 transition-colors duration-300">
                        View Receipt
                    </button>
                    <button class="border border-zinc-300 text-zinc-600 px-6 py-3 rounded text-sm font-bold uppercase tracking-widest hover:bg-zinc-100 transition-colors duration-300">
                        Cancel Order
                    </button>
                </div>
            </div>
        </div>

        <!-- Single Order Card 2 -->
        <div class="bg-white rounded-lg shadow-lg border border-zinc-200 overflow-hidden flex flex-col md:flex-row group opacity-75">

            <!-- Car Image -->
            <div class="w-full md:w-1/3 h-56 md:h-auto relative overflow-hidden grayscale">
                <img src="https://images.unsplash.com/photo-1563720223185-11003d516935?w=800" alt="G-Wagon AMG" class="w-full h-full object-cover">
                <!-- Status Badge -->
                <div class="absolute top-4 left-4 bg-zinc-600 text-white px-3 py-1 font-bold uppercase tracking-wider text-xs rounded-sm shadow-md">
                    Completed
                </div>
            </div>

            <!-- Order Details -->
            <div class="w-full md:w-2/3 p-6 md:p-8 flex flex-col justify-between">
                <div>
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 gap-4">
                        <div>
                            <p class="text-zinc-400 text-xs uppercase tracking-widest mb-1">Order #ORD-33912</p>
                            <h3 class="text-2xl font-bold text-zinc-900 uppercase">G-Wagon AMG</h3>
                        </div>
                        <div class="text-left md:text-right">
                            <p class="text-zinc-400 text-xs uppercase tracking-widest mb-1">Total Amount</p>
                            <span class="text-2xl font-extrabold text-zinc-700">$1,000</span>
                        </div>
                    </div>

                    <hr class="border-zinc-100 my-4">

                    <!-- Booking Dates -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div class="bg-zinc-50 p-4 rounded border border-zinc-100">
                            <span class="block text-zinc-400 text-xs uppercase tracking-widest mb-1">Pick-up Date</span>
                            <span class="block text-zinc-600 font-bold"><i class="far fa-calendar-alt text-zinc-400 mr-2"></i> Sep 01, 2026</span>
                        </div>
                        <div class="bg-zinc-50 p-4 rounded border border-zinc-100">
                            <span class="block text-zinc-400 text-xs uppercase tracking-widest mb-1">Return Date</span>
                            <span class="block text-zinc-600 font-bold"><i class="far fa-calendar-check text-zinc-400 mr-2"></i> Sep 03, 2026</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-6 flex gap-4">
                    <button class="border border-zinc-300 text-zinc-600 px-6 py-3 rounded text-sm font-bold uppercase tracking-widest hover:bg-zinc-100 transition-colors duration-300">
                        Book Again
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection