@extends('layouts.app')

@section('title', 'The Collections — ABog Furniture')
@section('meta_description', 'Explore ABog Collections — Architectural furniture, seating, tables, bedrooms, kitchens, offices, and bespoke hospitality spaces crafted to endure.')

@section('content')
    <x-navbar />

    <section id="collections-page" data-header-theme="light"
        class="relative z-40 w-full bg-[#f5f3ef] text-stone-900 select-none pt-28 pb-24 px-6 md:px-16 lg:px-24 overflow-hidden">
        <!-- Subtle architectural grid background -->
        <div
            class="absolute inset-0 pointer-events-none opacity-30 bg-[linear-gradient(to_right,#e5e1da_1px,transparent_1px),linear-gradient(to_bottom,#e5e1da_1px,transparent_1px)] bg-[size:4rem_4rem]">
        </div>

        <div class="max-w-7xl mx-auto relative z-10">

            <!-- 1. EDITORIAL HERO -->
            <div class="mb-16 border-b border-stone-300/80 pb-12">
                <div class="inline-flex items-center gap-3 mb-6">
                    <span class="w-8 h-[2px] bg-[#8c7b6d]"></span>
                    <span class="text-[#8c7b6d] font-sans font-bold text-xs md:text-sm tracking-[0.25em] uppercase">03 The
                        Collections</span>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                    <div class="lg:col-span-8">
                        <h1
                            class="font-display font-black text-5xl md:text-7xl lg:text-8xl tracking-tight leading-[0.92] text-stone-900">
                            THE COLLECTIONS
                        </h1>
                        <h2
                            class="font-display font-bold text-2xl md:text-4xl leading-tight text-[#8c7b6d] mt-4 tracking-tight">
                            MADE FOR THE WAY YOU LIVE.
                        </h2>
                    </div>
                    <div class="lg:col-span-4">
                        <p class="text-stone-700 text-base md:text-lg font-normal leading-relaxed">
                            A digital showroom and archive of objects made with intention. Guided by our <strong
                                class="text-stone-900 font-semibold">Grid & Grain</strong> philosophy — marrying structural
                            architectural discipline with tactile wood soul.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 2. GALLERY INDEX CATEGORY NAVIGATION -->
            <div class="mb-16">
                <div class="flex items-center justify-between border-b border-stone-300/60 pb-4 mb-8">
                    <span class="text-xs font-mono tracking-widest uppercase text-stone-500">Curated Gallery Index</span>
                    <span id="gallery-count-indicator" class="text-xs font-mono text-[#8c7b6d] font-bold">Showing All 12
                        Works</span>
                </div>

                <nav aria-label="Collections Categories" class="collections-gallery-nav">
                    <div class="flex items-center gap-2 md:gap-3 overflow-x-auto pb-4 hide-scrollbar">
                        <button type="button" data-filter="all"
                            class="cat-filter-btn active px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-[#8c7b6d] bg-[#8c7b6d] text-white shadow-sm">
                            ALL <span class="ml-1 opacity-75 font-mono text-[10px]">[12]</span>
                        </button>
                        <button type="button" data-filter="seating"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            SEATING <span class="ml-1 opacity-60 font-mono text-[10px]">[3]</span>
                        </button>
                        <button type="button" data-filter="tables"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            TABLES <span class="ml-1 opacity-60 font-mono text-[10px]">[2]</span>
                        </button>
                        <button type="button" data-filter="bedroom"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            BEDROOM <span class="ml-1 opacity-60 font-mono text-[10px]">[2]</span>
                        </button>
                        <button type="button" data-filter="kitchen"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            KITCHEN <span class="ml-1 opacity-60 font-mono text-[10px]">[2]</span>
                        </button>
                        <button type="button" data-filter="office"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            OFFICE <span class="ml-1 opacity-60 font-mono text-[10px]">[2]</span>
                        </button>
                        <button type="button" data-filter="living-room"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            LIVING ROOM <span class="ml-1 opacity-60 font-mono text-[10px]">[3]</span>
                        </button>
                        <button type="button" data-filter="dining"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            DINING <span class="ml-1 opacity-60 font-mono text-[10px]">[2]</span>
                        </button>
                        <button type="button" data-filter="hospitality"
                            class="cat-filter-btn px-5 py-2.5 rounded-full text-xs md:text-sm font-sans font-semibold tracking-wider transition-all duration-300 border border-stone-300 bg-white/70 text-stone-700 hover:border-stone-500">
                            HOSPITALITY <span class="ml-1 opacity-60 font-mono text-[10px]">[1]</span>
                        </button>
                    </div>
                </nav>
            </div>

            <!-- 3. ASYMMETRIC EDITORIAL PRODUCT GALLERY GRID -->
            <div id="collections-gallery-grid" class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-10 items-start">

                <!-- ITEM 1: FEATURE HERO (Span 8) -->
                <div class="product-gallery-card md:col-span-8 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="living-room seating">
                    <div class="relative overflow-hidden aspect-[16/10] bg-stone-200">
                        <img src="{{ asset('assets/collections/living-room-main.png') }}"
                            alt="Yaba Sculptural Architectural Armchair"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Living Room &bull; Seating
                        </div>
                    </div>
                    <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 01</span>
                            <h3 class="font-display font-bold text-2xl md:text-3xl text-stone-900">Yaba Sculptural Armchair
                            </h3>
                        </div>
                        <button type="button" data-product-title="Yaba Sculptural Armchair"
                            data-product-category="Living Room / Seating"
                            data-product-img="{{ asset('assets/collections/living-room-main.png') }}"
                            class="open-quote-modal inline-flex items-center justify-center px-6 py-3 bg-stone-900 hover:bg-[#8c7b6d] text-white font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300 shadow-md">
                            <span>Request Quote</span>
                            <span class="ml-2 font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 2: PORTRAIT CARD (Span 4) -->
                <div class="product-gallery-card md:col-span-4 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="living-room">
                    <div class="relative overflow-hidden aspect-[4/5] bg-stone-200">
                        <img src="{{ asset('assets/collections/living-room-sub1.png') }}" alt="Akoka Fluted Wooden Credenza"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Living Room
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 02</span>
                            <h3 class="font-display font-bold text-xl md:text-2xl text-stone-900">Akoka Fluted Credenza</h3>
                        </div>
                        <button type="button" data-product-title="Akoka Fluted Credenza"
                            data-product-category="Living Room / Credenza"
                            data-product-img="{{ asset('assets/collections/living-room-sub1.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 3: TALL PORTRAIT CARD (Span 4) -->
                <div class="product-gallery-card md:col-span-4 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="bedroom">
                    <div class="relative overflow-hidden aspect-[4/5] bg-stone-200">
                        <img src="{{ asset('assets/collections/bedroom-main.png') }}"
                            alt="Abeokuta Architectural Platform Bed"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Bedroom
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 03</span>
                            <h3 class="font-display font-bold text-xl md:text-2xl text-stone-900">Abeokuta Platform Bed</h3>
                        </div>
                        <button type="button" data-product-title="Abeokuta Architectural Platform Bed"
                            data-product-category="Bedroom"
                            data-product-img="{{ asset('assets/collections/bedroom-main.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 4: FEATURE PANORAMA (Span 8) -->
                <div class="product-gallery-card md:col-span-8 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="kitchen tables">
                    <div class="relative overflow-hidden aspect-[16/9] bg-stone-200">
                        <img src="{{ asset('assets/collections/kitchen-main.png') }}"
                            alt="Akoka Integrated Kitchen Island & Dining Table"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Kitchen &bull; Tables
                        </div>
                    </div>
                    <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 04</span>
                            <h3 class="font-display font-bold text-2xl md:text-3xl text-stone-900">Akoka Integrated Kitchen
                                Island</h3>
                        </div>
                        <button type="button" data-product-title="Akoka Integrated Kitchen Island"
                            data-product-category="Kitchen / Tables"
                            data-product-img="{{ asset('assets/collections/kitchen-main.png') }}"
                            class="open-quote-modal inline-flex items-center justify-center px-6 py-3 bg-stone-900 hover:bg-[#8c7b6d] text-white font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300 shadow-md">
                            <span>Request Quote</span>
                            <span class="ml-2 font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 5: OFFICE FEATURE (Span 6) -->
                <div class="product-gallery-card md:col-span-6 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="office tables">
                    <div class="relative overflow-hidden aspect-[4/3] bg-stone-200">
                        <img src="{{ asset('assets/collections/office-main.png') }}"
                            alt="Ikoyi Executive Architectural Desk"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Office &bull; Tables
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 05</span>
                            <h3 class="font-display font-bold text-xl md:text-2xl text-stone-900">Ikoyi Executive Desk</h3>
                        </div>
                        <button type="button" data-product-title="Ikoyi Executive Desk"
                            data-product-category="Office / Desk"
                            data-product-img="{{ asset('assets/collections/office-main.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 6: DINING FEATURE (Span 6) -->
                <div class="product-gallery-card md:col-span-6 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="dining tables">
                    <div class="relative overflow-hidden aspect-[4/3] bg-stone-200">
                        <img src="{{ asset('assets/projects/umaiha/kc2.jpg') }}"
                            alt="Ogun Solid Teak 10-Seater Dining Table"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Dining &bull; Tables
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 06</span>
                            <h3 class="font-display font-bold text-xl md:text-2xl text-stone-900">Ogun Solid Teak Dining
                                Table</h3>
                        </div>
                        <button type="button" data-product-title="Ogun Solid Teak Dining Table"
                            data-product-category="Dining / Tables"
                            data-product-img="{{ asset('assets/projects/umaiha/kcn.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 7: SEATING BAR STOOL (Span 4) -->
                <div class="product-gallery-card md:col-span-4 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="kitchen seating">
                    <div class="relative overflow-hidden aspect-square bg-stone-200">
                        <img src="{{ asset('assets/collections/kitchen-sub1.png') }}" alt="Surulere Brass & Oak Bar Stool"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Kitchen &bull; Seating
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 07</span>
                            <h3 class="font-display font-bold text-xl text-stone-900">Surulere Bar Stool</h3>
                        </div>
                        <button type="button" data-product-title="Surulere Bar Stool"
                            data-product-category="Kitchen / Seating"
                            data-product-img="{{ asset('assets/collections/kitchen-sub1.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 8: BEDROOM NIGHTSTAND (Span 4) -->
                <div class="product-gallery-card md:col-span-4 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="bedroom">
                    <div class="relative overflow-hidden aspect-square bg-stone-200">
                        <img src="{{ asset('assets/collections/bedroom-sub1.png') }}" alt="Marina Floating Oak Nightstand"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Bedroom
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 08</span>
                            <h3 class="font-display font-bold text-xl text-stone-900">Marina Floating Nightstand</h3>
                        </div>
                        <button type="button" data-product-title="Marina Floating Nightstand"
                            data-product-category="Bedroom"
                            data-product-img="{{ asset('assets/collections/bedroom-sub1.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 9: HOSPITALITY RECEPTION (Span 4) -->
                <div class="product-gallery-card md:col-span-4 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="hospitality seating">
                    <div class="relative overflow-hidden aspect-square bg-stone-200">
                        <img src="{{ asset('assets/projects/umaiha/wallrob.jpg') }}"
                            alt="Eko Lounge Hospitality Counter & Banquette"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Hospitality
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 09</span>
                            <h3 class="font-display font-bold text-xl text-stone-900">Eko Hospitality Lounge</h3>
                        </div>
                        <button type="button" data-product-title="Eko Hospitality Lounge"
                            data-product-category="Hospitality"
                            data-product-img="{{ asset('assets/projects/umaiha/conso2.jpg') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 10: OFFICE CREDENZA (Span 6) -->
                <div class="product-gallery-card md:col-span-6 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="office living-room">
                    <div class="relative overflow-hidden aspect-[4/3] bg-stone-200">
                        <img src="{{ asset('assets/collections/office-sub2.png') }}" alt="Ajao Storage Credenza"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Office &bull; Living Room
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 10</span>
                            <h3 class="font-display font-bold text-xl md:text-2xl text-stone-900">Ajao Architectural
                                Credenza</h3>
                        </div>
                        <button type="button" data-product-title="Ajao Architectural Credenza"
                            data-product-category="Office / Living Room"
                            data-product-img="{{ asset('assets/collections/office-sub2.png') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 11: DINING CANE CHAIR (Span 6) -->
                <div class="product-gallery-card md:col-span-6 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="dining seating">
                    <div class="relative overflow-hidden aspect-[4/3] bg-stone-200">
                        <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-18.jpg') }}"
                            alt="Lekki Cane-Back Dining Chair"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Dining &bull; Seating
                        </div>
                    </div>
                    <div class="p-6 flex flex-col justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 11</span>
                            <h3 class="font-display font-bold text-xl md:text-2xl text-stone-900">Lekki Cane-Back Dining
                                Chair</h3>
                        </div>
                        <button type="button" data-product-title="Lekki Cane-Back Dining Chair"
                            data-product-category="Dining / Seating"
                            data-product-img="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-18.jpg') }}"
                            class="open-quote-modal w-full inline-flex items-center justify-between px-5 py-2.5 bg-stone-100 hover:bg-[#8c7b6d] hover:text-white text-stone-900 font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300">
                            <span>Request Quote</span>
                            <span class="font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

                <!-- ITEM 12: LIVING ROOM SHELVING (Span 12) -->
                <div class="product-gallery-card md:col-span-12 group bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500"
                    data-category="living-room">
                    <div class="relative overflow-hidden aspect-[21/9] bg-stone-200">
                        <img src="{{ asset('assets/collections/living-room-sub2.png') }}"
                            alt="Victoria Fluted Modular Shelving Unit"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                            loading="lazy" />
                        <div
                            class="absolute top-4 left-4 bg-stone-950/80 backdrop-blur-md text-white text-[11px] font-mono px-3 py-1 rounded-full uppercase tracking-wider">
                            Living Room
                        </div>
                    </div>
                    <div class="p-6 md:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-1">Collection
                                N&deg; 12</span>
                            <h3 class="font-display font-bold text-2xl md:text-3xl text-stone-900">Victoria Modular Shelving
                                System</h3>
                        </div>
                        <button type="button" data-product-title="Victoria Modular Shelving System"
                            data-product-category="Living Room"
                            data-product-img="{{ asset('assets/collections/living-room-sub2.png') }}"
                            class="open-quote-modal inline-flex items-center justify-center px-6 py-3 bg-stone-900 hover:bg-[#8c7b6d] text-white font-sans text-xs font-semibold rounded-full tracking-wider uppercase transition-all duration-300 shadow-md">
                            <span>Request Quote</span>
                            <span class="ml-2 font-light text-base">&rsaquo;</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- REQUEST QUOTE CONCIERGE MODAL DIALOG -->
    <div id="quote-modal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-stone-950/80 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-400">
        <div
            class="bg-white text-stone-900 w-full max-w-xl rounded-3xl border border-stone-200 shadow-2xl overflow-hidden relative transform translate-y-6 transition-transform duration-400">

            <button type="button" id="close-quote-modal"
                class="absolute top-5 right-5 w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 flex items-center justify-center text-stone-600 transition-colors z-10"
                aria-label="Close dialog">
                &times;
            </button>

            <div class="p-8">
                <div class="flex items-center gap-4 pb-6 border-b border-stone-200 mb-6">
                    <img id="modal-product-img" src="" alt=""
                        class="w-16 h-16 rounded-xl object-cover border border-stone-200" />
                    <div>
                        <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-wider">Bespoke Inquiry</span>
                        <h3 id="modal-product-title" class="font-display font-bold text-xl text-stone-900"></h3>
                        <p id="modal-product-category" class="text-xs text-stone-500 font-mono"></p>
                    </div>
                </div>

                <form id="quote-modal-form" class="space-y-4">
                    <div>
                        <label class="block text-xs font-mono uppercase tracking-wider text-stone-600 mb-1">Selected
                            Material / Timber Finish</label>
                        <select
                            class="w-full px-4 py-2.5 rounded-xl border border-stone-300 text-sm font-sans focus:outline-none focus:border-[#8c7b6d]">
                            <option>Natural African Teak (Solid)</option>
                            <option>Ebonized Hardwood</option>
                            <option>Brushed Solid Brass Accents</option>
                            <option>Tactile Bouclé Fabric Upholstery</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-mono uppercase tracking-wider text-stone-600 mb-1">Your
                                Name</label>
                            <input type="text" required placeholder="Abidoun Ogunleye"
                                class="w-full px-4 py-2.5 rounded-xl border border-stone-300 text-sm font-sans focus:outline-none focus:border-[#8c7b6d]">
                        </div>
                        <div>
                            <label class="block text-xs font-mono uppercase tracking-wider text-stone-600 mb-1">Email /
                                Contact</label>
                            <input type="email" required placeholder="client@abog.com"
                                class="w-full px-4 py-2.5 rounded-xl border border-stone-300 text-sm font-sans focus:outline-none focus:border-[#8c7b6d]">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-mono uppercase tracking-wider text-stone-600 mb-1">Project Notes /
                            Dimensions</label>
                        <textarea rows="3" placeholder="Tell us about your space or custom dimensions..."
                            class="w-full px-4 py-2.5 rounded-xl border border-stone-300 text-sm font-sans focus:outline-none focus:border-[#8c7b6d]"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full py-3.5 bg-[#8c7b6d] hover:bg-[#7a6a5c] text-white font-sans text-sm font-semibold rounded-full uppercase tracking-wider transition-colors shadow-md">
                        Submit Quote Request
                    </button>
                </form>

                <div id="quote-success-notice" class="hidden p-6 text-center">
                    <div
                        class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mx-auto mb-3 text-xl font-bold">
                        &check;</div>
                    <h4 class="font-display font-bold text-lg text-stone-900">Inquiry Received</h4>
                    <p class="text-xs text-stone-600 mt-1">Our atelier team will contact you within 24 hours with custom
                        specifications.</p>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
@endsection