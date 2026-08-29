<section id="collections-section" class="relative z-40 min-h-screen w-full bg-[#f5f3ef] text-stone-900 flex flex-col justify-center px-6 md:px-16 lg:px-24 py-24 select-none shadow-[0_-20px_50px_rgba(0,0,0,0.5)] rounded-t-3xl md:rounded-t-[3rem]">
    <div class="max-w-7xl mx-auto w-full">
        <!-- Top Section Header: Category Tag & Main Heading -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16 items-start">
            <div class="lg:col-span-4">
                <span class="text-[#8c7b6d] font-sans font-semibold text-xs md:text-sm tracking-[0.2em] uppercase">
                    3. Collections (II)
                </span>
            </div>
            <div class="lg:col-span-8 flex justify-start lg:justify-end">
                <h2 class="font-sans font-semibold text-3xl md:text-5xl lg:text-6xl text-stone-900 leading-[1.15] tracking-tight max-w-xl">
                    Designed around the way people live.
                </h2>
            </div>
        </div>

        <!-- Collections Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left Column: Interactive Collections Navigation & Description -->
            <div class="lg:col-span-5 flex flex-col justify-between min-h-[350px] lg:min-h-[450px] pt-4">
                <div class="collection-nav-block">
                    <ul class="flex flex-col gap-4 md:gap-5 collection-nav mb-8">
                        <li class="collection-nav-item active" data-collection="living-room" data-description="Curated architectural furniture engineered for quiet luxury and everyday comfort.">
                            <button type="button" class="collection-nav-btn focus:outline-none" aria-pressed="true">
                                Living Room
                            </button>
                        </li>
                        <li class="collection-nav-item" data-collection="kitchen" data-description="Precision craftsmanship and structural purity for the heart of the modern home.">
                            <button type="button" class="collection-nav-btn focus:outline-none" aria-pressed="false">
                                Kitchen
                            </button>
                        </li>
                        <li class="collection-nav-item" data-collection="bedroom" data-description="Serene sanctuary elements designed with soft geometry and tactile natural materials.">
                            <button type="button" class="collection-nav-btn focus:outline-none" aria-pressed="false">
                                Bedroom
                            </button>
                        </li>
                        <li class="collection-nav-item" data-collection="office" data-description="Architectural work environments crafted to inspire focus, clarity, and enduring productivity.">
                            <button type="button" class="collection-nav-btn focus:outline-none" aria-pressed="false">
                                Office
                            </button>
                        </li>
                    </ul>
                    <p id="collection-description" class="text-stone-600 font-sans text-base md:text-lg max-w-xs leading-relaxed transition-opacity duration-300">
                        Curated architectural furniture engineered for quiet luxury and everyday comfort.
                    </p>
                </div>
            </div>

            <!-- Right Column: Grid Stacked Showcase Grids -->
            <div class="lg:col-span-7 grid grid-cols-1 grid-rows-1 w-full" id="collection-images-container">
                
                <!-- Living Room Set -->
                <div class="collection-image-set col-start-1 row-start-1 grid grid-cols-1 md:grid-cols-2 gap-8 w-full opacity-100 pointer-events-auto z-10" data-set="living-room">
                    <!-- Top Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card lg:col-start-2 lg:col-span-1 md:col-span-2 rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/living-room-main.png') }}" 
                            alt="Living Room Yellow Architectural Armchair" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Living Room &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Left Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/living-room-sub1.png') }}" 
                            alt="Minimalist Wooden Fluted Credenza" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Sideboards &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/living-room-sub2.png') }}" 
                            alt="Modular Wooden Wall Shelving Unit" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Shelving &rsaquo;
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Kitchen Set -->
                <div class="collection-image-set col-start-1 row-start-1 grid grid-cols-1 md:grid-cols-2 gap-8 w-full opacity-0 pointer-events-none z-0" data-set="kitchen">
                    <!-- Top Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card lg:col-start-2 lg:col-span-1 md:col-span-2 rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/kitchen-main.png') }}" 
                            alt="Modern Minimalist Kitchen Island" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Kitchens &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Left Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/kitchen-sub1.png') }}" 
                            alt="Sleek kitchen counters and stools details" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Stools &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/kitchen-sub2.png') }}" 
                            alt="Minimalist wooden floating kitchen shelves" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Shelving &rsaquo;
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Bedroom Set -->
                <div class="collection-image-set col-start-1 row-start-1 grid grid-cols-1 md:grid-cols-2 gap-8 w-full opacity-0 pointer-events-none z-0" data-set="bedroom">
                    <!-- Top Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card lg:col-start-2 lg:col-span-1 md:col-span-2 rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/bedroom-main.png') }}" 
                            alt="Architectural oak platform bed" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Bedrooms &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Left Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/bedroom-sub1.png') }}" 
                            alt="Minimalist bedside table and designer lamp" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Nightstands &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/bedroom-sub2.png') }}" 
                            alt="Boucle lounge chair in bedroom corner" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Armchairs &rsaquo;
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Office Set -->
                <div class="collection-image-set col-start-1 row-start-1 grid grid-cols-1 md:grid-cols-2 gap-8 w-full opacity-0 pointer-events-none z-0" data-set="office">
                    <!-- Top Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card lg:col-start-2 lg:col-span-1 md:col-span-2 rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/office-main.png') }}" 
                            alt="Premium home office setup with oak desk" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Workspaces &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Left Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/office-sub1.png') }}" 
                            alt="Desk details and executive chair" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Desks &rsaquo;
                            </span>
                        </div>
                    </a>

                    <!-- Bottom Right Image -->
                    <a href="{{ route('collections') }}" class="collection-card rounded-2xl overflow-hidden shadow-xl aspect-square relative group bg-stone-200 cursor-pointer block">
                        <img 
                            src="{{ asset('assets/collections/office-sub2.png') }}" 
                            alt="Minimalist wooden storage credenza" 
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <span class="text-white font-sans text-sm font-medium tracking-wide bg-black/60 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-1 group-hover:bg-stone-900 transition-colors">
                                Explore Cabinets &rsaquo;
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>