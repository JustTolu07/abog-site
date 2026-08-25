<div id="hero-pin-trigger" class="relative h-[250vh] w-full">
    <!-- Pinned Viewport Hero Content -->
    <section id="hero-section" class="sticky top-0 h-screen w-full bg-stone-950 overflow-hidden flex items-center select-none" aria-label="Welcome Hero">
        <!-- Background Image Container -->
        <div id="hero-bg-container" class="absolute inset-0 w-full h-full scale-[1.08] origin-center z-0 will-change-transform">
            <picture>
                <source srcset="{{ asset('assets/abog-hero.png') }}" type="image/png">
                <img 
                    src="{{ asset('assets/abog-hero.png') }}" 
                    alt="ABog Furniture Cinematic Interior Design" 
                    class="w-full h-full object-cover object-center select-none"
                    loading="eager"
                    fetchpriority="high"
                >
            </picture>
        </div>

        <!-- Architectural Grid Overlay -->
        <div class="absolute inset-0 grid grid-cols-4 gap-0 pointer-events-none z-10 opacity-[0.03]">
            <div class="border-r border-white h-full"></div>
            <div class="border-r border-white h-full"></div>
            <div class="border-r border-white h-full"></div>
            <div class="h-full"></div>
        </div>

        <!-- Vignette & Gradient Overlays for High Contrast -->
        <div class="absolute inset-0 bg-gradient-to-r from-stone-950/80 via-stone-950/30 to-stone-950/80 z-10 pointer-events-none"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-stone-950/90 via-transparent to-stone-950/60 z-10 pointer-events-none"></div>

        <!-- Hero Headline & Subtext Container -->
        <div id="hero-text-block" class="absolute left-6 md:left-12 lg:left-20 top-1/2 -translate-y-1/2 z-30 max-w-xs md:max-w-md lg:max-w-lg select-none will-change-transform">
            <!-- Headline: CRAFTED TO ENDURE. -->
            <h1 class="font-display font-extrabold text-4xl md:text-6xl lg:text-7xl text-white leading-[0.92] tracking-tighter uppercase mb-4" id="hero-headline">
                <span class="line-mask block overflow-hidden">
                    <span class="line-text inline-block">CRAFTED</span>
                </span>
                <span class="line-mask block overflow-hidden">
                    <span class="line-text inline-block">TO</span>
                </span>
                <span class="line-mask block overflow-hidden">
                    <span class="line-text inline-block">ENDURE.</span>
                </span>
            </h1>

            <!-- Supporting copy -->
            <p id="hero-subtext" class="text-stone-300 font-sans text-xs md:text-sm lg:text-base font-normal leading-relaxed tracking-wide will-change-[transform,opacity]">
                Furniture and interior solutions for homes, workplaces and institutions.
            </p>
        </div>

        <!-- Bottom Giant ABOG Display Title (As seen in design attached) -->
        <div id="hero-abog-watermark" class="absolute bottom-2 sm:bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 z-20 pointer-events-none text-center w-full px-4 will-change-[transform,opacity]">
            <h2 class="font-display font-black text-6xl sm:text-8xl md:text-9xl lg:text-[13rem] text-white tracking-tighter leading-none select-none opacity-95 drop-shadow-2xl">
                ABOG
            </h2>
        </div>
    </section>
</div>
