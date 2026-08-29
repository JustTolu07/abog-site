<header class="fixed top-0 left-0 w-full z-50 px-6 md:px-12 py-6 flex justify-between items-center bg-transparent pointer-events-none transition-colors duration-500" id="main-header">
    <!-- Top Left Header Brand Logo (Always Visible) -->
    <a href="{{ route('home') }}" class="pointer-events-auto flex items-center gap-2 group focus:outline-none" aria-label="ABog Home">
        <span class="font-display font-black text-2xl md:text-3xl tracking-tighter transition-colors duration-500 text-white" id="header-logo-text">
            ABOG
        </span>
    </a>

    <!-- Desktop Navigation Links (Center Align) -->
    <nav class="hidden md:flex items-center space-x-8 lg:space-x-10 text-sm font-medium tracking-wider font-sans pointer-events-auto" aria-label="Main Navigation" id="desktop-nav">
        <!-- Home -->
        <a href="{{ route('home') }}" 
           class="relative py-1 nav-link transition-colors duration-300 group {{ request()->routeIs('home') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" 
           aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">
            Home
            <span class="absolute bottom-0 left-0 w-full h-[2px] nav-line bg-[#8c7b6d] transition-transform duration-300 origin-left {{ request()->routeIs('home') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
        </a>

        <!-- About -->
        <a href="{{ route('about') }}" 
           class="relative py-1 nav-link transition-colors duration-300 group {{ request()->routeIs('about') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" 
           aria-current="{{ request()->routeIs('about') ? 'page' : 'false' }}">
            About
            <span class="absolute bottom-0 left-0 w-full h-[2px] nav-line bg-[#8c7b6d] transition-transform duration-300 origin-left {{ request()->routeIs('about') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
        </a>

        <!-- Processes -->
        <a href="{{ route('process') }}" 
           class="relative py-1 nav-link transition-colors duration-300 group {{ request()->routeIs('process') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" 
           aria-current="{{ request()->routeIs('process') ? 'page' : 'false' }}">
            Processes
            <span class="absolute bottom-0 left-0 w-full h-[2px] nav-line bg-[#8c7b6d] transition-transform duration-300 origin-left {{ request()->routeIs('process') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
        </a>

        <!-- Collections -->
        <a href="{{ route('collections') }}" 
           class="relative py-1 nav-link transition-colors duration-300 group {{ request()->routeIs('collections*') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" 
           aria-current="{{ request()->routeIs('collections*') ? 'page' : 'false' }}">
            Collections
            <span class="absolute bottom-0 left-0 w-full h-[2px] nav-line bg-[#8c7b6d] transition-transform duration-300 origin-left {{ request()->routeIs('collections*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
        </a>

        <!-- Projects -->
        <a href="{{ route('projects') }}" 
           class="relative py-1 nav-link transition-colors duration-300 group {{ request()->routeIs('projects*') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" 
           aria-current="{{ request()->routeIs('projects*') ? 'page' : 'false' }}">
            Projects
            <span class="absolute bottom-0 left-0 w-full h-[2px] nav-line bg-[#8c7b6d] transition-transform duration-300 origin-left {{ request()->routeIs('projects*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
        </a>
    </nav>

    <!-- Contact Button (Right Align) -->
    <div class="pointer-events-auto">
        <a href="#footer-section" class="group flex items-center pl-5 pr-2.5 py-2 bg-[#8C7B6D] hover:bg-[#9C8C7D] rounded-full text-white font-sans text-sm font-medium tracking-wide transition-all duration-300 shadow-lg shadow-black/10">
            <span class="flex items-center gap-2">
                <span class="text-stone-300 font-light group-hover:translate-x-[-2px] transition-transform duration-300">&rsaquo;</span>
                Contact
            </span>
            <span class="w-6 h-6 ml-4 rounded-full bg-white flex items-center justify-center transition-transform duration-500 ease-out group-hover:rotate-90">
                <span class="w-1.5 h-1.5 rounded-full bg-[#8C7B6D]"></span>
            </span>
        </a>
    </div>

    <!-- Hamburger Menu Button (Mobile Only) -->
    <button id="mobile-menu-toggle" aria-label="Toggle Menu" aria-expanded="false" aria-controls="mobile-overlay" class="md:hidden flex flex-col justify-between w-6 h-4 z-50 relative group focus:outline-none pointer-events-auto">
        <span class="w-full h-[1.5px] bg-white transition-transform duration-300 origin-center nav-hamburger-line" id="hamburger-line-1"></span>
        <span class="w-3/4 h-[1.5px] bg-white self-end transition-all duration-300 origin-center nav-hamburger-line" id="hamburger-line-2"></span>
    </button>

    <!-- Mobile Fullscreen Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 w-full h-screen bg-stone-950/98 backdrop-blur-xl z-40 flex flex-col justify-center px-8 translate-y-[-100%] opacity-0 pointer-events-none" aria-hidden="true">
        <nav class="flex flex-col space-y-6 font-display text-4xl font-light tracking-wide relative z-10" aria-label="Mobile Navigation">
            <div class="mobile-nav-item overflow-hidden">
                <a href="{{ route('home') }}" class="block py-2 focus:underline {{ request()->routeIs('home') ? 'text-[#8c7b6d] font-bold' : 'text-white' }}" aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}">Home</a>
            </div>
            <div class="mobile-nav-item overflow-hidden">
                <a href="{{ route('about') }}" class="block py-2 focus:underline {{ request()->routeIs('about') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" aria-current="{{ request()->routeIs('about') ? 'page' : 'false' }}">About</a>
            </div>
            <div class="mobile-nav-item overflow-hidden">
                <a href="{{ route('process') }}" class="block py-2 focus:underline {{ request()->routeIs('process') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" aria-current="{{ request()->routeIs('process') ? 'page' : 'false' }}">Processes</a>
            </div>
            <div class="mobile-nav-item overflow-hidden">
                <a href="{{ route('collections') }}" class="block py-2 focus:underline {{ request()->routeIs('collections*') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" aria-current="{{ request()->routeIs('collections*') ? 'page' : 'false' }}">Collections</a>
            </div>
            <div class="mobile-nav-item overflow-hidden">
                <a href="{{ route('projects') }}" class="block py-2 focus:underline {{ request()->routeIs('projects*') ? 'text-[#8c7b6d] font-bold' : 'text-stone-400 hover:text-white' }}" aria-current="{{ request()->routeIs('projects*') ? 'page' : 'false' }}">Projects</a>
            </div>
            
            <div class="mobile-nav-item overflow-hidden pt-6">
                <a href="#footer-section" class="inline-flex items-center pl-5 pr-2 py-2 bg-[#8C7B6D] rounded-full text-white font-sans text-base font-medium tracking-wide">
                    <span class="flex items-center gap-2">
                        <span class="text-stone-300 font-light">&rsaquo;</span>
                        Contact
                    </span>
                    <span class="w-8 h-8 ml-6 rounded-full bg-white flex items-center justify-center">
                        <span class="w-2 h-2 rounded-full bg-[#8C7B6D]"></span>
                    </span>
                </a>
            </div>
        </nav>
        
        <div class="absolute bottom-12 left-8 right-8 flex justify-between text-xs text-stone-500 font-sans tracking-widest relative z-10">
            <span>EST. 1990</span>
            <span>Refined African Manufacturing</span>
        </div>
    </div>
</header>
