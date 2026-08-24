@extends('layouts.app')

@section('title', 'About ABog — 36 Years of Building What Lasts')
@section('meta_description', 'Since 1990, ABog has been creating furniture and spaces shaped by craftsmanship, people, and an appreciation for things made to last.')

@section('content')
    <x-navbar />
    <article class="about-page overflow-hidden bg-stone-950" data-about-page>
        <section class="relative min-h-screen bg-stone-950 px-6 pb-20 pt-32 text-stone-100 md:px-16 md:pt-40 lg:px-24"
            aria-labelledby="about-hero-title">
            <div class="about-hero-grid pointer-events-none absolute inset-0 opacity-40"></div>
            <div class="relative mx-auto flex min-h-[calc(100vh-10rem)] max-w-7xl flex-col justify-between">
                <div>
                    <p class="about-kicker mb-8">THE ABOG STORY</p>
                    <h1 id="about-hero-title"
                        class="font-display text-[15vw] font-black leading-[.82] tracking-tighter sm:text-7xl md:text-8xl lg:text-[9.4rem] xl:text-[11rem]">
                        <span class="about-hero-line block overflow-hidden"><span class="about-hero-word inline-block">36
                                YEARS</span></span><span class="about-hero-line block overflow-hidden"><span
                                class="about-hero-word inline-block">OF BUILDING</span></span><span
                            class="about-hero-line block overflow-hidden text-[#8c7b6d]"><span
                                class="about-hero-word inline-block">WHAT LASTS.</span></span>
                    </h1>
                </div>
                <div class="mt-20 grid grid-cols-1 gap-8 border-t border-stone-800 pt-7 md:grid-cols-12">
                    <p class="about-hero-copy max-w-xl text-base leading-relaxed text-stone-300 md:col-span-7 md:text-lg">
                        Some things are built in a day. Others take years of learning, changing, making mistakes, getting
                        better, and showing up again. Abog is one of them.</p>
                    <p class="about-hero-copy max-w-md text-sm leading-relaxed text-stone-400 md:col-span-4 md:col-start-9">
                        Since 1990, we have been creating furniture and spaces shaped by craftsmanship, people, and an
                        appreciation for things made to last. <span class="text-stone-100">36 years later, we are still
                            building.</span></p>
                    <p
                        class="about-hero-meta text-xs font-semibold uppercase tracking-[.22em] text-stone-500 md:col-span-1 md:text-right">
                        Est. 1990</p>
                </div>
            </div>
        </section>

        <section class="relative bg-[#f5f3ef] px-6 py-24 text-stone-900 md:px-16 md:py-36 lg:px-24"
            data-header-theme="light">
            <div class="mx-auto grid max-w-7xl gap-16 lg:grid-cols-12">
                <p class="about-kicker lg:col-span-4">01 — THE NAME</p>
                <div class="lg:col-span-8">
                    <h2 class="about-section-title">IT STARTED<br>WITH A NAME.</h2>
                    <div
                        class="about-name-stage relative my-16 min-h-[20rem] overflow-hidden border-y border-stone-300 py-8 md:min-h-[28rem]">
                        <div class="about-name-grid absolute inset-0"></div>
                        <div class="relative flex min-h-[16rem] items-center justify-between md:min-h-[22rem]"><span
                                class="about-name-part">AB</span><span class="about-name-plus">+</span><span
                                class="about-name-part">OG</span></div>
                        <p class="about-name-lockup">ABOG</p>
                    </div>
                    <div class="grid max-w-3xl gap-8 text-base leading-relaxed text-stone-600 md:grid-cols-2 md:text-lg">
                        <p><strong class="text-stone-900">AB</strong> — Abidoun.<br><strong
                                class="text-stone-900">OG</strong> — Ogunleye.</p>
                        <p>ABOG began with the first two letters of our founder's name, Abidoun Ogunleye. What started as a
                            simple name in 1990 became the beginning of a much bigger story.</p>
                    </div>
                    <div class="mt-10 max-w-2xl space-y-5 text-base leading-relaxed text-stone-600 md:text-lg">
                        <p>A story built one piece at a time. One customer at a time. One relationship at a time.</p>
                        <p>And as the years passed, ABOG became more than a nickname, </p>
                        <p class="font-semibold text-stone-900">It became a Multi Technology brand.</p>

                    </div>
                </div>
        </section>

        <section class="bg-stone-950 px-6 py-24 text-stone-100 md:px-16 md:py-36 lg:px-24">
            <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-12">
                <div class="lg:col-span-4">
                    <p class="about-kicker">02 — MEET THE FOUNDER</p>
                    <figure
                        class="about-founder-image relative mt-10 aspect-[4/5] max-w-sm overflow-hidden bg-stone-900 md:mt-16">
                        <img src="{{ asset('assets/abog-boss.png') }}" alt="Abidoun Ogunleye, founder of ABog"
                            class="h-full w-full object-cover" loading="lazy">
                        <figcaption
                            class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-stone-950/90 p-5 pt-16 text-xs uppercase tracking-[.18em] text-stone-300">
                            A beginning that became shared work</figcaption>
                    </figure>
                </div>
                <div class="flex flex-col justify-end lg:col-span-7 lg:col-start-6">
                    <h2 class="about-section-title text-stone-100">MEET THE<br>FOUNDER.</h2>
                    <div class="mt-12 max-w-2xl space-y-6 text-base leading-relaxed text-stone-400 md:text-lg">
                        <p>In 1990, Abidoun Ogunleye started Abog with a simple idea: make something good, make it well, and
                            keep getting better.</p>
                        <p>What began with furniture became a journey of constant evolution. Over the years, he watched the
                            way people lived and worked change and understood that Abog would have to change with them.</p>
                        <p>That mindset took the business beyond furniture into manufacturing, interiors and complete
                            spatial solutions.</p>
                        <p>But perhaps the most important part of his journey isn't what Abog became.
                            It's the culture of</p>
                        <p class="font-display text-3xl font-bold leading-tight tracking-tight text-stone-100 md:text-5xl">
                            Never settling for “good enough.”</p>
                        <p>That belief has carried the business for 36 years, shaped the people around it, and continues
                            to influence the way Abog thinks about what comes next.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#f5f3ef] px-6 py-24 text-stone-900 md:px-16 md:py-36 lg:px-24" data-header-theme="light">
            <div class="mx-auto max-w-7xl">
                <div class="grid gap-12 lg:grid-cols-12">
                    <p class="about-kicker lg:col-span-4">03 — MORE THAN WHAT WE MAKE</p>
                    <h2 class="about-section-title max-w-5xl lg:col-span-8">WE BELIEVE THE THINGS AROUND US MATTER.</h2>
                </div>
                <div class="mt-16 grid gap-12 lg:grid-cols-12">
                    <figure class="about-project-image relative aspect-[4/3] overflow-hidden bg-stone-200 lg:col-span-6">
                        <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-00-45.jpg') }}"
                            alt="ABog-made interior space" class="h-[112%] w-full object-cover" loading="lazy">
                    </figure>
                    <div class="flex flex-col justify-center lg:col-span-5 lg:col-start-8">
                        <div class="space-y-5 text-lg leading-relaxed text-stone-600 md:text-xl">
                            <p class="about-belief-line">A chair is not just a chair.</p>
                            <p class="about-belief-line">A desk is not just a desk.</p>
                            <p class="about-belief-line">A room is not just four walls filled with things.</p>
                        </div>
                        <div class="mt-10 space-y-5 text-base leading-relaxed text-stone-600 md:text-lg">
                            <p>The spaces around us influence how we work, how we rest, how we connect, and how we feel.</p>
                            <p>That's why we care about more than making something that looks good. We think about how it
                                feels to use, how it fits into a space, how it holds up over time, and whether it still
                                feels right years after it was made.</p>
                            <p class="font-semibold text-stone-900">Because good design should live well.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-stone-900 px-6 py-24 text-stone-100 md:px-16 md:py-36 lg:px-24">
            <div class="mx-auto max-w-7xl">
                <div class="grid gap-12 lg:grid-cols-12">
                    <p class="about-kicker lg:col-span-4">04 — THE PEOPLE BEHIND IT</p>
                    <h2 class="about-section-title max-w-4xl text-stone-100 lg:col-span-8">NO LEGACY IS BUILT ALONE.</h2>
                    <div
                        class="about-team-grid grid gap-px overflow-hidden border border-stone-700 bg-stone-700 sm:grid-cols-2 lg:col-span-12 lg:grid-cols-4">
                        <article class="about-team-card relative min-h-[24rem] overflow-hidden bg-stone-950 p-6"><img
                                src="{{ asset('assets/abog-boss.png') }}" alt="Abidoun Ogunleye, founder of ABog"
                                class="absolute inset-0 h-full w-full object-cover opacity-60">
                            <div class="absolute inset-0 bg-gradient-to-t from-stone-950 to-transparent"></div>
                            <div class="relative flex h-full min-h-[19rem] flex-col justify-end">
                                <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#c7b6a7]">01 — Founder</p>
                                <h3 class="mt-3 font-display text-3xl font-black leading-none tracking-tighter">
                                    ABIDOUN<br>OGUNLEYE</h3>
                                <p class="mt-3 text-sm text-stone-300">The Founder and CEO of ABog Multi Technology
                                </p>
                            </div>
                        </article>
                        <article class="about-team-card bg-stone-900 p-6">
                            <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#8c7b6d]">02 — The makers</p>
                            <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-18.jpg') }}"
                                alt="ABog craftsmanship detail" class="mt-8 aspect-square w-full object-cover">
                            <p class="mt-6 text-sm leading-relaxed text-stone-400">The hands and care that turn material
                                into work made to live with.</p>
                        </article>
                        <article class="about-team-card bg-stone-900 p-6">
                            <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#8c7b6d]">03 — The design team
                            </p><img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-13.jpg') }}"
                                alt="ABog design detail" class="mt-8 aspect-square w-full object-cover">
                            <p class="mt-6 text-sm leading-relaxed text-stone-400">The minds that translate how people live
                                into spaces that work beautifully.</p>
                        </article>
                        <article class="about-team-card bg-stone-900 p-6">
                            <p class="text-xs font-semibold uppercase tracking-[.2em] text-[#8c7b6d]">04 — Project teams</p>
                            <img src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-07.jpg') }}"
                                alt="ABog project installation detail" class="mt-8 aspect-square w-full object-cover">
                            <p class="mt-6 text-sm leading-relaxed text-stone-400">The people who solve, coordinate and
                                bring the work into the world.</p>
                        </article>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-4 md:gap-8 lg:grid-cols-12">
                    <figure class="about-people-image col-span-1 overflow-hidden bg-stone-800 lg:col-span-4 lg:mt-20"><img
                            src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-13.jpg') }}"
                            alt="Detail from an ABog project" class="h-full w-full object-cover" loading="lazy"></figure>
                    <figure class="about-people-image col-span-1 overflow-hidden bg-stone-800 lg:col-span-4"><img
                            src="{{ asset('assets/projects/umaiha/photo_2026-08-21_08-01-18.jpg') }}"
                            alt="ABog project interior detail" class="h-full w-full object-cover" loading="lazy"></figure>
                    <div class="col-span-2 flex items-center lg:col-span-4">
                        <div class="space-y-5 pt-10 text-base leading-relaxed text-stone-400 md:text-lg lg:pt-0">
                            <p>For 36 years, Abog has been shaped by people: the hands that make, the minds that design, the
                                teams that solve problems, the partners who build alongside us, and the customers who trust
                                us with their spaces.</p>
                            <p>Every one of them has added something to the story.</p>
                            <p class="font-semibold text-stone-100">That is what makes Abog what it is today.</p>
                            <p>Not one person. Not one moment. But thousands of small contributions, gathered over time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-[#8c7b6d] px-6 py-24 text-stone-100 md:px-16 md:py-36 lg:px-24">
            <div class="about-reach-lines absolute inset-0 opacity-30"></div>
            <div class="relative mx-auto grid max-w-7xl gap-12 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <p class="about-kicker text-stone-200">05 — OUR REACH</p>
                    <h2 class="about-section-title mt-10">BUILT HERE.<br>MADE TO GO FURTHER.</h2>
                    <p class="mt-10 max-w-xl text-base leading-relaxed text-stone-200 md:text-lg">From our 10,000m²
                        industrial facility in Ogun State, we continue to build with the capacity to take on projects at
                        scale. Our work now reaches across Nigeria, serving homes, businesses, institutions and spaces of
                        many different kinds.</p>
                </div>
                <div class="flex flex-col justify-end lg:col-span-6 lg:col-start-7">
                    <p class="about-reach-number">36</p>
                    <div class="mt-8 border-t border-stone-100/30 pt-5">
                        <p class="font-display text-3xl font-black tracking-tighter md:text-5xl">STATES</p>
                        <p class="mt-2 text-xs font-semibold uppercase tracking-[.22em] text-stone-200">One standard. One
                            name.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden bg-stone-950 px-6 py-24 text-stone-100 md:px-16 md:py-36 lg:px-24">
            <div class="mx-auto max-w-7xl">
                <p class="about-kicker">06 — THE GRID &amp; THE GRAIN</p>
                <div class="mt-12 grid gap-12 lg:grid-cols-12">
                    <div class="lg:col-span-7">
                        <h2 class="about-section-title text-stone-100">TWO THINGS CAN BE TRUE AT ONCE.</h2>
                        <div class="mt-14 max-w-xl space-y-6 text-base leading-relaxed text-stone-400 md:text-lg">
                            <p><strong class="text-stone-100">The Grid</strong> is structure. Precision. Order. Function.
                            </p>
                            <p><strong class="text-stone-100">The Grain</strong> is character. Texture. Craft. Humanity.</p>
                            <p>Together, they represent how we see design. We believe great spaces need both — the
                                discipline to work beautifully and the character to feel alive.</p>
                            <p class="font-semibold text-stone-100">The Grid gives it structure.<br>The Grain gives it soul.
                            </p>
                        </div>
                    </div>
                    <div
                        class="relative min-h-[31rem] overflow-hidden border border-stone-800 bg-stone-900 lg:col-span-4 lg:col-start-9">
                        <div class="about-grain-image absolute inset-0"><img
                                src="{{ asset('assets/collections/living-room-sub1.png') }}"
                                alt="Detail of ABog furniture craftsmanship" class="h-[118%] w-full object-cover"
                                loading="lazy"></div>
                        <div class="about-grid-overlay absolute inset-0"></div>
                        <p class="about-grid-word">GRID</p>
                        <p class="about-grain-word">GRAIN</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative overflow-hidden bg-[#f5f3ef] px-6 py-24 text-stone-900 md:px-16 md:py-36 lg:px-24"
            data-header-theme="light">
            <div
                class="about-years-ring absolute left-1/2 top-1/2 h-[85vw] w-[85vw] -translate-x-1/2 -translate-y-1/2 rounded-full border border-stone-300 md:h-[55rem] md:w-[55rem]">
            </div>
            <div class="relative mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <p class="about-kicker">07 — 36 YEARS</p>
                    <p class="about-years-number">36</p>
                </div>
                <div class="lg:col-span-6 lg:col-start-7">
                    <h2 class="about-section-title text-4xl md:text-6xl">YEARS OF MAKING.<br>YEARS OF LEARNING.<br><span
                            class="text-[#8c7b6d]">YEARS OF PEOPLE, SPACES AND MEMORIES.</span></h2>
                    <div class="mt-12 max-w-xl space-y-5 text-base leading-relaxed text-stone-600 md:text-lg">
                        <p>We respect where we came from. But we don't want to simply preserve it.</p>
                        <p>The world is changing. So are the spaces we live and work in. We're continuing to learn,
                            experiment, improve and rethink what Abog can become.</p>
                        <p>Our experience gives us the foundation. Curiosity keeps us moving. And the next chapter is
                            already taking shape.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-stone-950 px-6 py-28 text-stone-100 md:px-16 md:py-40 lg:px-24">
            <div class="mx-auto max-w-7xl">
                <p class="about-kicker">08 — THE NEXT CHAPTER</p>
                <div class="mt-12 border-b border-stone-800 pb-16 md:mt-16 md:pb-24">
                    <h2 class="about-closing-line">WHAT STARTED<br>WITH ONE...</h2>
                    <h2 class="about-closing-line mt-4 text-[#8c7b6d] md:mt-8">...BECAME SOMETHING<br>WE ALL BUILT.</h2>
                </div>
                <div class="mt-16 grid gap-12 md:grid-cols-12">
                    <div class="md:col-span-6">
                        <div class="max-w-xl space-y-5 text-base leading-relaxed text-stone-400 md:text-lg">
                            <p>From a name created from two parts of one man's name, Abog has grown into a story shared by
                                many.</p>
                            <p>36 years of making. 36 years of learning. 36 years of people, spaces and memories.</p>
                            <p>And after all this time, one thing hasn't changed:</p>
                            <p class="font-semibold text-stone-100">We still believe in making things worth keeping.</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-end md:col-span-5 md:col-start-8">
                        <p class="font-display text-7xl font-black leading-none tracking-tighter md:text-9xl">ABOG</p>
                        <p class="mt-5 text-sm font-semibold uppercase tracking-[.2em] text-[#8c7b6d]">Since 1990.</p>
                        <p class="mt-3 max-w-xs text-sm leading-relaxed text-stone-400">Made with experience.<br>Built for
                            what comes next.</p><a href="{{ url('/#projects-section') }}"
                            class="mt-10 inline-flex w-fit items-center gap-5 rounded-full bg-[#8c7b6d] py-3 pl-6 pr-3 text-sm font-medium transition-colors hover:bg-[#9c8c7d]">See
                            our work <span
                                class="flex h-7 w-7 items-center justify-center rounded-full bg-white text-lg text-[#8c7b6d]">&rsaquo;</span></a>
                    </div>
                </div>
            </div>
        </section>
    </article>
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

    <x-footer />
@endsection
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