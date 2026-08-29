@extends('layouts.app')

@section('title', 'Projects — ABog Architectural Portfolio & Works')
@section('meta_description', 'Explore selected architectural woodworking, custom millwork, residential suites, and executive corporate projects crafted by ABog over 36 years.')

@section('content')
    <x-navbar />

    <article class="projects-page overflow-hidden bg-stone-950 text-stone-100 min-h-screen pt-28 md:pt-36">
        <!-- Projects Page Hero Banner -->
        <section class="relative bg-stone-950 px-6 py-16 md:px-16 lg:px-24 border-b border-stone-800/80">
            <div class="max-w-7xl mx-auto flex flex-col justify-between min-h-[40vh]">
                <div>
                    <span class="text-[#8c7b6d] font-sans font-semibold text-xs md:text-sm tracking-[0.25em] uppercase block mb-4">
                        PORTFOLIO OF ARCHITECTURAL WORKS
                    </span>
                    <h1 class="font-display font-black text-5xl sm:text-7xl md:text-8xl lg:text-[8.5rem] tracking-tighter uppercase leading-[0.88] text-white">
                        SELECTED<br>
                        <span class="text-[#8c7b6d]">PROJECTS.</span>
                    </h1>
                </div>

                <div class="mt-12 md:mt-16 grid grid-cols-1 md:grid-cols-12 gap-8 border-t border-stone-800 pt-8 items-end">
                    <p class="md:col-span-7 font-sans text-stone-300 text-base md:text-xl leading-relaxed max-w-2xl">
                        Over thirty-six years of delivering custom interior millwork, luxury residential fit-outs, and institution-grade corporate installations across Nigeria.
                    </p>
                    <div class="md:col-span-5 md:text-right flex flex-col md:items-end justify-end">
                        <span class="text-xs font-sans font-semibold tracking-[0.2em] uppercase text-stone-500">
                            36 Years &bull; 36 States &bull; 10,000m² Plant
                        </span>
                        <a href="#projects-grid" class="mt-4 inline-flex items-center gap-3 text-xs md:text-sm font-sans font-semibold text-[#8c7b6d] uppercase tracking-wider hover:text-white transition-colors">
                            Explore Works <span>&darr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Filter & Showcase Section -->
        <section id="projects-grid" class="relative z-40 bg-[#f5f3ef] text-stone-900 px-6 py-20 md:px-16 md:py-32 lg:px-24" data-header-theme="light">
            <!-- Magnetic Mouse Cursor Hover Badge -->
            <div id="project-cursor-btn"
                class="fixed pointer-events-none z-50 opacity-0 scale-50 -translate-x-1/2 -translate-y-1/2 bg-stone-900/95 text-stone-100 backdrop-blur-md px-6 py-3 rounded-full shadow-2xl flex items-center gap-2 text-xs md:text-sm font-sans font-medium tracking-wider uppercase border border-stone-700/50 transition-all duration-300 ease-out">
                <span>View Project</span>
                <span class="w-5 h-5 rounded-full bg-stone-700 text-stone-200 flex items-center justify-center text-xs ml-1">&rsaquo;</span>
            </div>

            <div class="max-w-7xl mx-auto">
                <!-- Filter Category Controls -->
                <div class="flex flex-wrap items-center gap-3 md:gap-4 mb-16 md:mb-24 pb-6 border-b border-stone-300">
                    <span class="text-xs font-sans font-bold tracking-[0.2em] uppercase text-stone-500 mr-2 md:mr-4">Filter:</span>
                    <button class="project-filter-btn active px-5 py-2.5 rounded-full font-sans text-xs md:text-sm font-semibold uppercase tracking-wider transition-all duration-300 bg-stone-900 text-stone-100 shadow-md" data-filter="all">
                        All Projects (05)
                    </button>
                    <button class="project-filter-btn px-5 py-2.5 rounded-full font-sans text-xs md:text-sm font-semibold uppercase tracking-wider transition-all duration-300 bg-stone-200 text-stone-700 hover:bg-stone-300" data-filter="residential">
                        Residential Suites
                    </button>
                    <button class="project-filter-btn px-5 py-2.5 rounded-full font-sans text-xs md:text-sm font-semibold uppercase tracking-wider transition-all duration-300 bg-stone-200 text-stone-700 hover:bg-stone-300" data-filter="corporate">
                        Corporate & Banking
                    </button>
                    <button class="project-filter-btn px-5 py-2.5 rounded-full font-sans text-xs md:text-sm font-semibold uppercase tracking-wider transition-all duration-300 bg-stone-200 text-stone-700 hover:bg-stone-300" data-filter="millwork">
                        Architectural Millwork
                    </button>
                </div>

                <!-- Projects Stacked Showcase -->
                <div class="flex flex-col gap-24 md:gap-36">

                    <!-- Project 1: Umaiha Home -->
                    <article class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group" data-category="residential" data-project="umaiha-home">
                        <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                            <div>
                                <span class="text-[#8c7b6d] font-sans text-xs font-bold uppercase tracking-widest block mb-1">01 / Residential fit-out</span>
                                <h2 class="font-display font-bold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                                    Umaiha Home
                                </h2>
                                <p class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                                    Abia, Nigeria &bull; Complete Spatial Architecture
                                </p>
                            </div>
                            <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                                2026
                            </span>
                        </div>

                        <div class="lg:col-span-6 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/conso2.jpg') }}" alt="Umaiha Home Interior Living Area" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Custom mahogany media console and integrated ambient backlighting for main reception room.
                            </p>
                        </div>

                        <div class="lg:col-span-6 lg:mt-16 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/kcn.png') }}" alt="Umaiha Home Custom Wall Console" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Precision-engineered acoustic wall panelling and floating storage systems.
                            </p>
                        </div>
                    </article>

                    <!-- Project 2: Alpha Morgan Bank -->
                    <article class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group" data-category="corporate" data-project="alpha-morgan-bank">
                        <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                            <div>
                                <span class="text-[#8c7b6d] font-sans text-xs font-bold uppercase tracking-widest block mb-1">02 / Financial Headquarters</span>
                                <h2 class="font-display font-bold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                                    Alpha Morgan Bank
                                </h2>
                                <p class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                                    Osogbo, Nigeria &bull; Executive Lounges &amp; Millwork
                                </p>
                            </div>
                            <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                                2025
                            </span>
                        </div>

                        <div class="lg:col-span-6 lg:order-2 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/wallrob.jpg') }}" alt="Alpha Morgan Bank Executive Suite" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Executive office fluted timber wardrobe partitions and acoustic wall cladding.
                            </p>
                        </div>

                        <div class="lg:col-span-6 lg:order-1 lg:mt-16 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-03.jpg') }}" alt="Alpha Morgan Bank Executive Lounge" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Bespoke executive lounge seating and solid wood accent detailing.
                            </p>
                        </div>
                    </article>

                    <!-- Project 3: Katsina Residence -->
                    <article class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group" data-category="residential" data-project="katsina-residence">
                        <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                            <div>
                                <span class="text-[#8c7b6d] font-sans text-xs font-bold uppercase tracking-widest block mb-1">03 / Private Residence</span>
                                <h2 class="font-display font-bold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                                    Katsina Residence
                                </h2>
                                <p class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                                    Katsina, Nigeria &bull; Architectural Dining &amp; Living
                                </p>
                            </div>
                            <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                                2025
                            </span>
                        </div>

                        <div class="lg:col-span-6 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-05.jpg') }}" alt="Katsina Residence Dining Suite" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Hand-finished solid teak dining table and custom ergonomic seating.
                            </p>
                        </div>

                        <div class="lg:col-span-6 lg:mt-16 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-07.jpg') }}" alt="Katsina Residence Living Detail" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Custom architectural wall panelling with integrated lighting channels.
                            </p>
                        </div>
                    </article>

                    <!-- Project 4: Eko Atlantic Villa -->
                    <article class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group" data-category="millwork" data-project="eko-atlantic-villa">
                        <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                            <div>
                                <span class="text-[#8c7b6d] font-sans text-xs font-bold uppercase tracking-widest block mb-1">04 / Coastal Villa Fit-out</span>
                                <h2 class="font-display font-bold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                                    Eko Atlantic Villa
                                </h2>
                                <p class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                                    Lagos, Nigeria &bull; Waterproof Hardwood &amp; Cabinetry
                                </p>
                            </div>
                            <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                                2024
                            </span>
                        </div>

                        <div class="lg:col-span-6 lg:order-2 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/cons3.jpg') }}" alt="Eko Atlantic Villa Waterfront Suite" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Waterfront master suite built with climate-resistant kiln-dried hardwoods.
                            </p>
                        </div>

                        <div class="lg:col-span-6 lg:order-1 lg:mt-16 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/kcn3.jpg') }}" alt="Eko Atlantic Villa Cabinet Panel" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Fluted accent cabinet doors and precision brass hardware joinery.
                            </p>
                        </div>
                    </article>

                    <!-- Project 5: Victoria Island Penthouse -->
                    <article class="project-item grid grid-cols-1 lg:grid-cols-12 gap-8 items-start relative group" data-category="residential" data-project="vi-penthouse">
                        <div class="lg:col-span-12 flex justify-between items-end border-b border-stone-300 pb-4 mb-2">
                            <div>
                                <span class="text-[#8c7b6d] font-sans text-xs font-bold uppercase tracking-widest block mb-1">05 / Luxury Penthouse</span>
                                <h2 class="font-display font-bold text-3xl md:text-5xl text-stone-900 tracking-tight group-hover:text-[#8c7b6d] transition-colors duration-300">
                                    Victoria Island Penthouse
                                </h2>
                                <p class="text-stone-500 font-sans text-xs md:text-sm font-medium tracking-widest uppercase mt-1">
                                    Lagos, Nigeria &bull; Custom Furniture &amp; Finishes
                                </p>
                            </div>
                            <span class="font-display font-bold text-2xl md:text-4xl text-stone-900 tracking-tight">
                                2024
                            </span>
                        </div>

                        <div class="lg:col-span-6 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/kc2.jpg') }}" alt="Victoria Island Penthouse Lounge" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Panoramic lounge seating suite crafted to specification.
                            </p>
                        </div>

                        <div class="lg:col-span-6 lg:mt-16 project-card-wrap">
                            <a href="#footer-section" class="project-card block overflow-hidden rounded-2xl shadow-xl aspect-[4/3] relative bg-stone-200 group/img">
                                <img src="{{ asset('assets/projects/umaiha/cons4.jpg') }}" alt="Victoria Island Penthouse Seating" class="w-full h-full object-cover object-center group-hover/img:scale-105 transition-transform duration-700 ease-out" loading="lazy">
                                <div class="absolute inset-0 bg-stone-900/10 group-hover/img:bg-transparent transition-colors duration-500"></div>
                            </a>
                            <p class="mt-3 text-xs md:text-sm text-stone-600 font-sans leading-relaxed">
                                Modern architectural credenza and low-profile accent seating.
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Project Commission CTA Banner -->
        <section class="bg-stone-900 px-6 py-24 text-stone-100 md:px-16 md:py-32 lg:px-24 border-t border-stone-800">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-8">
                    <span class="text-[#8c7b6d] font-sans font-semibold text-xs md:text-sm tracking-[0.25em] uppercase block mb-4">
                        START A COMMISSION
                    </span>
                    <h2 class="font-display font-extrabold text-4xl md:text-6xl lg:text-7xl tracking-tighter text-white uppercase leading-[0.95]">
                        HAVE A PROJECT IN MIND?<br>
                        <span class="text-[#8c7b6d]">LET&rsquo;S BUILD TOGETHER.</span>
                    </h2>
                    <p class="mt-6 text-stone-400 font-sans text-base md:text-lg max-w-2xl leading-relaxed">
                        Whether you require architectural millwork for commercial developments or bespoke furniture for private residences, our team in Lagos and Abia is ready to consult.
                    </p>
                </div>
                <div class="lg:col-span-4 flex lg:justify-end">
                    <a href="#footer-section" class="inline-flex items-center pl-7 pr-3 py-4 bg-[#8C7B6D] hover:bg-[#9C8C7D] text-white font-sans font-semibold text-sm rounded-full tracking-wider uppercase transition-all duration-300 shadow-2xl group">
                        <span>Request Consultation</span>
                        <span class="w-8 h-8 ml-4 rounded-full bg-white text-[#8C7B6D] flex items-center justify-center transition-transform duration-300 group-hover:rotate-45">
                            &rarr;
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </article>

    <x-footer />
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.project-filter-btn');
        const projectItems = document.querySelectorAll('.project-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');

                filterBtns.forEach(b => {
                    b.classList.remove('bg-stone-900', 'text-stone-100', 'shadow-md', 'active');
                    b.classList.add('bg-stone-200', 'text-stone-700');
                });

                btn.classList.remove('bg-stone-200', 'text-stone-700');
                btn.classList.add('bg-stone-900', 'text-stone-100', 'shadow-md', 'active');

                projectItems.forEach(item => {
                    const cat = item.getAttribute('data-category');
                    if (filter === 'all' || cat === filter) {
                        item.style.display = 'grid';
                        item.style.opacity = '1';
                    } else {
                        item.style.display = 'none';
                        item.style.opacity = '0';
                    }
                });
            });
        });
    });
</script>
