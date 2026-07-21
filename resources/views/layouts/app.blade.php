<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Premium Auto')</title>

    <!-- Tailwind CSS integration -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom configuration for Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-zinc-100 min-h-screen flex flex-col font-sans selection:bg-amber-500 selection:text-white">

    <!-- Top Navigation Bar -->
    <nav class="bg-zinc-950 text-white sticky top-0 z-50 border-b border-zinc-800 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- Brand Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-amber-500 rounded flex items-center justify-center text-zinc-900 transform group-hover:rotate-12 transition-transform duration-300">
                            <i class="fas fa-car-side text-xl"></i>
                        </div>
                        <span class="font-bold text-2xl tracking-wider uppercase">Elite<span class="text-amber-500">Drive</span></span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="/" class="px-3 py-2 text-sm font-medium hover:text-amber-500 transition-colors duration-300 uppercase tracking-widest border-b-2 border-transparent hover:border-amber-500">Home</a>
                        <a href="/cars" class="px-3 py-2 text-sm font-medium hover:text-amber-500 transition-colors duration-300 uppercase tracking-widest border-b-2 border-transparent hover:border-amber-500">Cars</a>
                        <a href="/orders" class="px-3 py-2 text-sm font-medium hover:text-amber-500 transition-colors duration-300 uppercase tracking-widest border-b-2 border-transparent hover:border-amber-500">Orders</a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="text-zinc-300 hover:text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow">
        @if (session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
            <div class="bg-emerald-50 border border-emerald-300 text-emerald-800 px-6 py-4 rounded-lg font-medium">
                <i class="fas fa-circle-check text-emerald-500 mr-2"></i>{{ session('success') }}
            </div>
        </div>
        @endif

        @if ($errors->any())
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
            <div class="bg-red-50 border border-red-300 text-red-800 px-6 py-4 rounded-lg font-medium">
                <i class="fas fa-triangle-exclamation text-red-500 mr-2"></i>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        </div>
        @endif

        @yield('content')
    </main>

    <!-- Minimalist Footer -->
    <footer class="bg-zinc-950 text-zinc-400 py-12 mt-auto border-t border-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center">

            <!-- Footer Logo -->
            <a href="/" class="text-2xl font-bold text-white mb-6 uppercase tracking-widest">
                Elite<span class="text-amber-500">Drive</span>
            </a>

            <!-- Footer Navigation -->
            <div class="flex space-x-8 mb-8">
                <a href="/" class="hover:text-amber-500 transition duration-300 uppercase text-xs tracking-widest">Home</a>
                <a href="/cars" class="hover:text-amber-500 transition duration-300 uppercase text-xs tracking-widest">Cars</a>
                <a href="/orders" class="hover:text-amber-500 transition duration-300 uppercase text-xs tracking-widest">Orders</a>
            </div>

            <!-- Copyright Notice -->
            <div class="text-sm text-zinc-600">
                &copy; {{ date('Y') }} EliteDrive. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>