<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'ABog Furniture — Crafted to Endure')</title>
    <meta name="description" content="@yield('meta_description', 'Founded in 1990, ABog represents craftsmanship, longevity, and premium architectural furniture. Refined African manufacturing built to endure.')">
    
    <!-- Preconnect to Font Servers -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Google Fonts: Figtree (Headers/Logo) and Geist (Body) -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&family=Geist:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-stone-950 text-stone-100 selection:bg-stone-500 selection:text-white">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-stone-800 focus:text-white focus:outline-none focus:ring-2 focus:ring-stone-500 rounded-md">
        Skip to main content
    </a>

    <!-- Navigation Header -->
    @yield('navbar')

    <!-- Main Content Area -->
    <main id="main-content" tabindex="-1" class="outline-none">
        @yield('content')
    </main>

    <!-- Initial loading state/screen if needed (optional, keeping it minimal) -->
</body>
</html>
