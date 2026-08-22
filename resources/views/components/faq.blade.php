<section id="faq-section"
    class="relative z-40 w-full bg-[#121212] text-stone-100 py-24 px-6 md:px-16 lg:px-24 border-t border-stone-800 select-none">
    <div class="max-w-5xl mx-auto">
        <!-- Section Header -->
        <div class="mb-16 md:mb-20">
            <span
                class="text-[#8c7b6d] font-sans font-semibold text-xs md:text-sm tracking-[0.25em] uppercase block mb-4">
                5. Inquiries & Clarity
            </span>
            <h2 class="font-display font-black text-4xl md:text-6xl lg:text-7xl tracking-tighter text-white uppercase">
                FREQUENTLY ASKED QUESTIONS.
            </h2>
        </div>

        <!-- Accordion Items Container -->
        <div class="space-y-4">

            <!-- FAQ Item 1 -->
            <div
                class="faq-item border border-stone-800 rounded-2xl bg-stone-950/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-trigger w-full px-6 md:px-8 py-6 flex justify-between items-center text-left focus:outline-none group">
                    <span
                        class="font-display font-semibold text-lg md:text-2xl text-stone-200 group-hover:text-white transition-colors">
                        What bespoke furniture and architectural woodworking services does ABog provide?
                    </span>
                    <span
                        class="faq-icon-wrap w-8 h-8 rounded-full bg-stone-800 flex items-center justify-center shrink-0 ml-4 transition-transform duration-300">
                        <span class="text-stone-300 text-lg leading-none">+</span>
                    </span>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 md:px-8">
                    <p class="pb-6 text-stone-400 font-sans text-sm md:text-base leading-relaxed">
                        ABog specializes in full-spectrum architectural furniture design, custom residential millwork,
                        executive corporate fittings, wall panelling, tailored cabinetry, and grand institutional
                        interior solutions tailored to withstand generations.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div
                class="faq-item border border-stone-800 rounded-2xl bg-stone-950/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-trigger w-full px-6 md:px-8 py-6 flex justify-between items-center text-left focus:outline-none group">
                    <span
                        class="font-display font-semibold text-lg md:text-2xl text-stone-200 group-hover:text-white transition-colors">
                        How does ABog manage turn-key projects from concept to final site installation?
                    </span>
                    <span
                        class="faq-icon-wrap w-8 h-8 rounded-full bg-stone-800 flex items-center justify-center shrink-0 ml-4 transition-transform duration-300">
                        <span class="text-stone-300 text-lg leading-none">+</span>
                    </span>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 md:px-8">
                    <p class="pb-6 text-stone-400 font-sans text-sm md:text-base leading-relaxed">
                        Our integrated process begins with architectural consultation and 3D modeling, followed by
                        precision factory manufacturing in Nigeria using premium hardwoods, metals, and imported
                        fittings, culminating in seamless on-site assembly by master craftsmen.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div
                class="faq-item border border-stone-800 rounded-2xl bg-stone-950/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-trigger w-full px-6 md:px-8 py-6 flex justify-between items-center text-left focus:outline-none group">
                    <span
                        class="font-display font-semibold text-lg md:text-2xl text-stone-200 group-hover:text-white transition-colors">
                        Can ABog fulfill large-scale institutional and commercial development orders?
                    </span>
                    <span
                        class="faq-icon-wrap w-8 h-8 rounded-full bg-stone-800 flex items-center justify-center shrink-0 ml-4 transition-transform duration-300">
                        <span class="text-stone-300 text-lg leading-none">+</span>
                    </span>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 md:px-8">
                    <p class="pb-6 text-stone-400 font-sans text-sm md:text-base leading-relaxed">
                        Yes. With over 36 years of heritage, our production plant is equipped for high-volume
                        commercial, banking, educational, and multi-unit residential projects across Nigeria with
                        uncompromised quality assurance.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div
                class="faq-item border border-stone-800 rounded-2xl bg-stone-950/60 overflow-hidden transition-all duration-300">
                <button
                    class="faq-trigger w-full px-6 md:px-8 py-6 flex justify-between items-center text-left focus:outline-none group">
                    <span
                        class="font-display font-semibold text-lg md:text-2xl text-stone-200 group-hover:text-white transition-colors">
                        How can clients initiate a custom design commission or request a quotation?
                    </span>
                    <span
                        class="faq-icon-wrap w-8 h-8 rounded-full bg-stone-800 flex items-center justify-center shrink-0 ml-4 transition-transform duration-300">
                        <span class="text-stone-300 text-lg leading-none">+</span>
                    </span>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out px-6 md:px-8">
                    <p class="pb-6 text-stone-400 font-sans text-sm md:text-base leading-relaxed">
                        You can contact our design studio through the contact button or send your project drawings to
                        info@abog.com. Our design team will review your specifications and schedule a consultation
                        within 24 hours.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const trigger = item.querySelector('.faq-trigger');
            const content = item.querySelector('.faq-content');
            const iconWrap = item.querySelector('.faq-icon-wrap span');

            trigger.addEventListener('click', () => {
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                // Close all items
                faqItems.forEach(i => {
                    const c = i.querySelector('.faq-content');
                    const ic = i.querySelector('.faq-icon-wrap span');
                    c.style.maxHeight = '0px';
                    ic.textContent = '+';
                    i.classList.remove('border-stone-600', 'bg-stone-900/80');
                });

                // If not open, open clicked item
                if (!isOpen) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    iconWrap.textContent = '−';
                    item.classList.add('border-stone-600', 'bg-stone-900/80');
                }
            });
        });
    });
</script>