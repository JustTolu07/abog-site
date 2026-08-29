<section id="projects-section"
    class="relative z-40 min-h-screen w-full bg-[#f5f3ef] text-stone-900 flex flex-col justify-center px-6 md:px-16 lg:px-24 py-24 select-none">
    <!-- Floating Magnetic Cursor Hover Button -->
    <div id="project-cursor-btn"
        class="fixed pointer-events-none z-50 opacity-0 scale-50 -translate-x-1/2 -translate-y-1/2 bg-stone-900/90 text-stone-100 backdrop-blur-md px-6 py-3 rounded-full shadow-2xl flex items-center gap-2 text-xs md:text-sm font-sans font-medium tracking-wider uppercase border border-stone-700/50 transition-all duration-300 ease-out">
        <span>View Project</span>
        <span
            class="w-5 h-5 rounded-full bg-stone-700 text-stone-200 flex items-center justify-center text-xs ml-1">&rsaquo;</span>
    </div>

    <div class="max-w-7xl mx-auto w-full">
        <!-- Section Header -->
        <div class="mb-16 md:mb-24">
            <span
                class="text-[#8c7b6d] font-sans font-semibold text-xs md:text-sm tracking-[0.2em] uppercase block mb-4">
                4. Portfolio
            </span>
            <h2
                class="font-display font-extrabold text-4xl md:text-6xl lg:text-7xl tracking-tighter text-stone-900 uppercase">
                SELECTED PROJECTS.
            </h2>
        </div>

        <!-- 5 Projects Stacked Layout -->
        <div class="flex flex-col gap-24 md:gap-36">

            <!-- Project 1: Umaiha Home (2026) -->
            <div class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group"
                data-project="umaiha-home">
                <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                    <div>
                        <h3
                            class="font-display font-semibold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                            Umaiha home
                        </h3>
                        <p
                            class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                            Abia, Nigeria
                        </p>
                    </div>
                    <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                        2026
                    </span>
                </div>

                <div class="lg:col-span-6 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/conso2.jpg') }}"
                            alt="Umaiha Home Interior Living Area"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-6 lg:mt-16 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/kcn.png') }}" alt="Umaiha Home Custom Wall Console"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Project 2: Alpha Morgan Bank (2025) -->
            <div class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group"
                data-project="alpha-morgan-bank">
                <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                    <div>
                        <h3
                            class="font-display font-semibold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                            Alpha morgan Bank
                        </h3>
                        <p
                            class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                            Osogbo, Nigeria
                        </p>
                    </div>
                    <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                        2025
                    </span>
                </div>

                <div class="lg:col-span-6 lg:order-2 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/wallrob.jpg') }}"
                            alt="Alpha Morgan Bank Executive Lounge"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-6 lg:order-1 lg:mt-16 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-03.jpg') }}"
                            alt="Alpha Morgan Bank Architectural Armchair"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Project 3: Katsina Residence (2025) -->
            <div class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group"
                data-project="katsina-residence">
                <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                    <div>
                        <h3
                            class="font-display font-semibold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                            Katsina Residence
                        </h3>
                        <p
                            class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                            Katsina, Nigeria
                        </p>
                    </div>
                    <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                        2025
                    </span>
                </div>

                <div class="lg:col-span-6 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-05.jpg') }}"
                            alt="Katsina Residence Dining Suite"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-6 lg:mt-16 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-07.jpg') }}"
                            alt="Katsina Residence Living Detail"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Project 4: Eko Atlantic Villa (2024) -->
            <div class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group"
                data-project="eko-atlantic-villa">
                <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                    <div>
                        <h3
                            class="font-display font-semibold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                            Eko Atlantic Villa
                        </h3>
                        <p
                            class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                            Lagos, Nigeria
                        </p>
                    </div>
                    <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                        2024
                    </span>
                </div>

                <div class="lg:col-span-6 lg:order-2 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/cons3.jpg') }}"
                            alt="Eko Atlantic Villa Waterfront Living Suite"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-6 lg:order-1 lg:mt-16 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/kcn3.jpg') }}"
                            alt="Eko Atlantic Villa Fluted Cabinet Panel"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>
            </div>

            <!-- Project 5: Victoria Island Penthouse (2024) -->
            <div class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group"
                data-project="vi-penthouse">
                <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                    <div>
                        <h3
                            class="font-display font-semibold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                            Victoria Island Penthouse
                        </h3>
                        <p
                            class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                            Lagos, Nigeria
                        </p>
                    </div>
                    <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                        2024
                    </span>
                </div>

                <div class="lg:col-span-6 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/kc2.jpg') }}" alt="Victoria Island Penthouse Lounge"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>

                <div class="lg:col-span-6 lg:mt-16 project-card-wrap">
                    <a href="{{ route('projects') }}"
                        class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                        <img src="{{ asset('assets/projects/umaiha/cons4.jpg') }}"
                            alt="Victoria Island Penthouse Architectural Seating"
                            class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out"
                            loading="lazy">
                        <div
                            class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500">
                        </div>
                    </a>
                </div>
            </div>

        </div>

        <!-- View All Projects Callout -->
        <div class="mt-20 text-center">
            <a href="{{ route('projects') }}"
                class="inline-flex items-center gap-4 px-8 py-4 bg-stone-900 hover:bg-[#8c7b6d] text-stone-100 font-sans font-semibold text-xs md:text-sm uppercase tracking-widest rounded-full transition-all duration-300 shadow-xl group">
                <span>Explore Complete Portfolio</span>
                <span class="w-6 h-6 rounded-full bg-stone-800 group-hover:bg-white group-hover:text-stone-900 text-stone-200 flex items-center justify-center text-xs transition-colors duration-300">&rsaquo;</span>
            </a>
        </div>
    </div>
</section>