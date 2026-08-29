<footer id="footer-section"
    class="relative z-40 w-full min-h-screen bg-stone-950 text-stone-100 flex flex-col justify-between overflow-hidden select-none relative">

    <!-- Background Image Layer with Cinematic Overlay & Grain -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/foot.jpg') }}" alt="ABog Architectural Background"
            class="w-full h-full object-cover object-center filter brightness-40 contrast-125 scale-105">
        <!-- Gradients and Noise Overlay -->
        <div
            class="absolute inset-0 bg-gradient-to-b from-stone-950/90 via-stone-950/70 to-stone-950/95 backdrop-blur-[2px]">
        </div>
    </div>

    <!-- Top Navigation & Brand Pitch Bar -->
    <div
        class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-16 pt-20 pb-12 flex flex-col md:flex-row justify-between items-start gap-12">
        <!-- Left Column: Navigation Links -->
        <div class="space-y-6">
            <span class="text-xs font-sans font-semibold tracking-[0.25em] text-[#8c7b6d] uppercase block">
                Navigation
            </span>
            <ul class="space-y-3 font-sans text-sm md:text-base font-medium">
                <li><a href="{{ route('home') }}" class="text-stone-300 hover:text-white transition-colors">Home</a></li>
                <li><a href="{{ route('about') }}" class="text-stone-400 hover:text-white transition-colors">About us</a></li>
                <li><a href="{{ route('process') }}" class="text-stone-400 hover:text-white transition-colors">Processes</a></li>
                <li><a href="{{ route('collections') }}" class="text-stone-400 hover:text-white transition-colors">Collections</a></li>
                <li><a href="{{ route('projects') }}" class="text-stone-400 hover:text-white transition-colors">Projects</a></li>
            </ul>
        </div>

        <!-- Middle Column: Contact & Studio Info -->
        <div class="space-y-6">
            <span class="text-xs font-sans font-semibold tracking-[0.25em] text-[#8c7b6d] uppercase block">
                Studio
            </span>
            <div class="text-stone-400 font-sans text-sm md:text-base space-y-2">
                <p>Abia & Lagos, Nigeria</p>
                <p class="text-stone-200">abogmultitechnology@gmail.com</p>
                <p class="text-stone-200">+234 (0) 80 331 59 549</p>
            </div>
        </div>

        <!-- Right Column: Brand Manifesto & CTA Pill (Matching Reference Screenshot) -->
        <div class="max-w-md space-y-6 md:text-right">
            <p class="text-stone-300 font-sans text-xs md:text-sm leading-relaxed tracking-wide">
                ABog Multitechnology is a manufacturer of construction materials and provider of engineering solutions,
                crafting enduring spaces and bespoke
                pieces for over thirty-six years.
            </p>

            <div class="pt-2 flex md:justify-end">
                <a href="#footer-section"
                    class="inline-flex items-center pl-6 pr-3 py-3 bg-stone-100 hover:bg-white text-stone-900 font-sans font-semibold text-xs md:text-sm rounded-full tracking-wider uppercase transition-all duration-300 shadow-2xl group">
                    <span>Initiate Project</span>
                    <span
                        class="w-7 h-7 ml-4 rounded-full bg-stone-900 text-white flex items-center justify-center transition-transform duration-300 group-hover:translate-x-1">
                        &rarr;
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Massive Bold ABOG Display Typography at the Bottom (Matching Reference Screenshot) -->
    <div class="relative z-10 w-full px-4 sm:px-6 md:px-12 pb-4 pt-12 overflow-hidden flex items-end justify-center">
        <h1
            class="font-display font-black text-[22vw] sm:text-[24vw] md:text-[25vw] leading-none tracking-tighter text-stone-100/90 select-none uppercase pointer-events-none drop-shadow-2xl translate-y-3">
            ABOG<span class="text-[#8c7b6d] text-[10vw] inline-block leading-none align-top ml-[-2vw]">*</span>
        </h1>
    </div>

    <!-- Bottom Copyright Sub-Bar -->
    <div
        class="relative z-10 w-full border-t border-stone-800/80 py-4 px-6 md:px-16 flex flex-col sm:flex-row justify-between items-center text-[10px] md:text-xs text-stone-500 font-sans tracking-widest uppercase bg-stone-950/80 backdrop-blur-md">
        <span>&copy; {{ date('Y') }} ABOG MULTITECHNOLOGY. ALL RIGHTS RESERVED.</span>
        <span class="mt-2 sm:mt-0">WEB DESIGNED BY AUTHENTECH</span>
    </div>
</footer>