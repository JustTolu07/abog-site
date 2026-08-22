<section id="heritage-section" class="relative z-40 min-h-screen w-full bg-[#121212] text-stone-100 flex flex-col justify-between py-24 select-none overflow-hidden border-t border-stone-800">
    <!-- Header Text Block -->
    <div class="max-w-5xl mx-auto text-center px-6 mb-12 md:mb-16 relative z-20">
        <h2 class="font-display font-extrabold text-2xl sm:text-4xl md:text-5xl lg:text-6xl tracking-tight text-stone-100 uppercase leading-[1.25]">
            OVER THIRTY SIX YEARS OF CHANGING TASTES, EVOLVING SPACES AND COUNTLESS PIECES MADE FOR EVERYDAY LIFE.
        </h2>
    </div>

    <!-- Infinite Auto-Slideshow Marquee Container -->
    <div class="w-full overflow-hidden relative my-auto py-6">
        <!-- Dual Row / Continuous Infinite Loop Track -->
        <div class="flex items-center gap-8 w-max animate-heritage-marquee">

            <!-- Card 1 (Horizontal 16:9) -->
            <div class="w-[320px] sm:w-[480px] md:w-[600px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-42.jpg') }}" alt="Crafted Space 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- Card 2 (Horizontal 16:9) -->
            <div class="w-[300px] sm:w-[450px] md:w-[550px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-45.jpg') }}" alt="Crafted Space 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- Card 3 (Horizontal 16:9) -->
            <div class="w-[340px] sm:w-[500px] md:w-[620px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-49.jpg') }}" alt="Crafted Space 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- Card 4 (Horizontal 16:9) -->
            <div class="w-[310px] sm:w-[460px] md:w-[580px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-50.jpg') }}" alt="Crafted Space 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- Card 5 (Horizontal 16:9) -->
            <div class="w-[330px] sm:w-[490px] md:w-[600px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-05.jpg') }}" alt="Crafted Space 5" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- Card 6 (Horizontal 16:9) -->
            <div class="w-[320px] sm:w-[470px] md:w-[560px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-07.jpg') }}" alt="Crafted Space 6" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- DUPLICATED CARDS FOR SEAMLESS CONTINUOUS INFINITE LOOP ANIMATION -->
            <div class="w-[320px] sm:w-[480px] md:w-[600px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-42.jpg') }}" alt="Crafted Space 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <div class="w-[300px] sm:w-[450px] md:w-[550px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-45.jpg') }}" alt="Crafted Space 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <div class="w-[340px] sm:w-[500px] md:w-[620px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-49.jpg') }}" alt="Crafted Space 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

            <div class="w-[310px] sm:w-[460px] md:w-[580px] aspect-[16/10] rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-stone-900 shrink-0 group hover:scale-[1.02] transition-transform duration-500">
                <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-50.jpg') }}" alt="Crafted Space 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
            </div>

        </div>
    </div>
</section>

<style>
@keyframes heritage-marquee {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}

.animate-heritage-marquee {
    animation: heritage-marquee 35s linear infinite;
}

.animate-heritage-marquee:hover {
    animation-play-state: paused;
}
</style>
