<section id="process-page" class="process-section relative z-40 w-full bg-[#f5f3ef] text-stone-900 select-none overflow-hidden">
    <!-- 1. HERO SECTION -->
    <div data-header-theme="light" class="pt-32 pb-20 px-6 md:px-16 lg:px-24 border-b border-stone-300/60 relative">
        <!-- Subtle background grid lines for architectural art direction -->
        <div class="absolute inset-0 pointer-events-none opacity-40 bg-[linear-gradient(to_right,#e5e1da_1px,transparent_1px),linear-gradient(to_bottom,#e5e1da_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

        <div class="max-w-7xl mx-auto w-full relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-end">
                <div class="lg:col-span-7">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <span class="w-8 h-[2px] bg-[#8c7b6d]"></span>
                        <span class="text-[#8c7b6d] font-sans font-bold text-xs md:text-sm tracking-[0.25em] uppercase">8 The Processes</span>
                    </div>

                    <h1 class="font-display font-black text-5xl md:text-7xl lg:text-8xl tracking-tight leading-[0.92] text-stone-900">
                        THE PROCESS
                    </h1>
                    <h2 class="font-display font-bold text-2xl md:text-4xl leading-tight text-[#8c7b6d] mt-4 tracking-tight">
                        FROM AN IDEA<br class="hidden md:block" /> TO SOMETHING REAL.
                    </h2>
                    
                    <p class="text-stone-700 text-lg md:text-xl font-normal leading-relaxed mt-6 max-w-2xl">
                        Great work doesn't just happen. It begins with understanding, then ideas, then materials, then hands, then refinement — and finally, the finished space.
                    </p>
                </div>

                <!-- Hero Workshop Visual Card -->
                <div class="lg:col-span-5 flex justify-end">
                    <div class="relative w-full max-w-md group">
                        <div class="absolute -inset-2 bg-[#8c7b6d]/15 rounded-2xl blur-lg group-hover:bg-[#8c7b6d]/25 transition-all duration-500"></div>
                        <div class="relative overflow-hidden rounded-2xl border border-stone-300/80 bg-stone-200 shadow-2xl">
                            <img src="{{ asset('assets/process/hero-workshop.png') }}" 
                                 alt="ABOG Master Woodworking Workshop" 
                                 class="w-full h-[400px] md:h-[460px] object-cover transition-transform duration-700 ease-out group-hover:scale-105" />
                            <div class="absolute inset-0 bg-gradient-to-t from-stone-950/80 via-transparent to-transparent"></div>
                            
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <span class="text-xs font-mono tracking-widest uppercase text-[#d9c5b2] block mb-1">Workshop & Atelier</span>
                                <p class="font-display font-medium text-lg leading-snug">Where Nigerian craftsmanship meets contemporary spatial precision.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. PROCESS STORY (01 - 06) -->
    <div id="process-story-section" data-header-theme="light" class="py-24 px-6 md:px-16 lg:px-24 max-w-7xl mx-auto w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            
            <!-- LEFT COLUMN: Interactive Stage Navigation -->
            <div class="lg:col-span-5 flex flex-col justify-start pt-4">
                <div class="mb-8 pb-4 border-b border-stone-300/60">
                    <span class="text-xs font-mono text-[#8c7b6d] uppercase tracking-widest block mb-2">Journey Navigation</span>
                    <h2 class="font-display font-black text-3xl md:text-5xl text-stone-900 tracking-tight">Six Stages of Craft</h2>
                </div>

                <nav class="process-nav">
                    <ul class="flex flex-col process-nav-list">
                        <!-- Understand -->
                        <li class="process-nav-item active" data-stage="understand">
                            <button type="button" class="process-nav-btn focus:outline-none w-full text-left" aria-pressed="true">
                                <span class="process-nav-num">01</span>
                                <span class="process-nav-title">Understand</span>
                            </button>
                            <div class="process-nav-desc-wrapper overflow-hidden">
                                <p class="process-nav-desc text-stone-600 text-sm md:text-base leading-relaxed pt-3 pb-1 pl-8 pr-4">
                                    Before we make, we listen. Every detail begins in dialogue. We transform brief conversations into spatial possibilities and architectural clarity.
                                </p>
                            </div>
                        </li>

                        <!-- Design -->
                        <li class="process-nav-item" data-stage="design">
                            <button type="button" class="process-nav-btn focus:outline-none w-full text-left" aria-pressed="false">
                                <span class="process-nav-num">02</span>
                                <span class="process-nav-title">Design</span>
                            </button>
                            <div class="process-nav-desc-wrapper overflow-hidden h-0 opacity-0">
                                <p class="process-nav-desc text-stone-600 text-sm md:text-base leading-relaxed pt-3 pb-1 pl-8 pr-4">
                                    Ideas need a form. Sketches become architectural precision. We balance visual poise with load-bearing structural integrity.
                                </p>
                            </div>
                        </li>

                        <!-- Material -->
                        <li class="process-nav-item" data-stage="material">
                            <button type="button" class="process-nav-btn focus:outline-none w-full text-left" aria-pressed="false">
                                <span class="process-nav-num">03</span>
                                <span class="process-nav-title">Material</span>
                            </button>
                            <div class="process-nav-desc-wrapper overflow-hidden h-0 opacity-0">
                                <p class="process-nav-desc text-stone-600 text-sm md:text-base leading-relaxed pt-3 pb-1 pl-8 pr-4">
                                    What it's made of matters. Connecting to our Grid & Grain philosophy. African Teak, walnut, burnished solid brass, and rich textures.
                                </p>
                            </div>
                        </li>

                        <!-- Make -->
                        <li class="process-nav-item" data-stage="make">
                            <button type="button" class="process-nav-btn focus:outline-none w-full text-left" aria-pressed="false">
                                <span class="process-nav-num">04</span>
                                <span class="process-nav-title">Make</span>
                            </button>
                            <div class="process-nav-desc-wrapper overflow-hidden h-0 opacity-0">
                                <p class="process-nav-desc text-stone-600 text-sm md:text-base leading-relaxed pt-3 pb-1 pl-8 pr-4">
                                    This is where the idea gets hands. Decades of Nigerian woodworking expertise, hand chisels, and precision machinery merge.
                                </p>
                            </div>
                        </li>

                        <!-- Refine -->
                        <li class="process-nav-item" data-stage="refine">
                            <button type="button" class="process-nav-btn focus:outline-none w-full text-left" aria-pressed="false">
                                <span class="process-nav-num">05</span>
                                <span class="process-nav-title">Refine</span>
                            </button>
                            <div class="process-nav-desc-wrapper overflow-hidden h-0 opacity-0">
                                <p class="process-nav-desc text-stone-600 text-sm md:text-base leading-relaxed pt-3 pb-1 pl-8 pr-4">
                                    Good enough isn't the finish line. We hand-sand, hand-oil, inspect grain alignment, and perfect every subtle radius.
                                </p>
                            </div>
                        </li>

                        <!-- Deliver -->
                        <li class="process-nav-item" data-stage="deliver">
                            <button type="button" class="process-nav-btn focus:outline-none w-full text-left" aria-pressed="false">
                                <span class="process-nav-num">06</span>
                                <span class="process-nav-title">Deliver</span>
                            </button>
                            <div class="process-nav-desc-wrapper overflow-hidden h-0 opacity-0">
                                <p class="process-nav-desc text-stone-600 text-sm md:text-base leading-relaxed pt-3 pb-1 pl-8 pr-4">
                                    A piece isn't finished until it's where it belongs. White-glove transport, spatial positioning, and precise installation.
                                </p>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- RIGHT COLUMN: Stacked Stage Cards -->
            <div class="lg:col-span-7 grid grid-cols-1 grid-rows-1 w-full" id="process-cards-container">
                
                <!-- 01 UNDERSTAND -->
                <div class="process-stage-card col-start-1 row-start-1 w-full opacity-100 pointer-events-auto z-10" data-stage-card="understand">
                    <div class="rounded-2xl bg-white border border-stone-200 p-6 md:p-10 shadow-sm hover:shadow-xl transition-shadow duration-500">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-[#8c7b6d] font-mono font-bold text-sm tracking-widest uppercase">01 / DISCOVERY</span>
                            <span class="text-xs font-sans px-3 py-1 bg-stone-100 text-stone-600 rounded-full font-medium">Phase One</span>
                        </div>

                        <div class="relative overflow-hidden rounded-xl mb-8 group">
                            <img src="{{ asset('assets/process/01-understand.png') }}" 
                                 alt="Understand - Client Consultation & Spatial Briefing" 
                                 class="w-full h-[320px] md:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute bottom-4 right-4 bg-stone-950/80 backdrop-blur-md text-white text-xs font-mono px-3 py-1.5 rounded-md">
                                Spatial Analysis & Brief
                            </div>
                        </div>

                        <h3 class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 tracking-tight uppercase">
                            BEFORE WE MAKE, WE LISTEN.
                        </h3>
                        <p class="text-stone-600 text-base mt-4 leading-relaxed">
                            Every project begins with understanding the people, space, purpose, and ergonomic requirements behind it. We transform brief conversations into spatial possibilities and architectural clarity.
                        </p>

                        <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-stone-100">
                            <div>
                                <span class="block text-xs font-mono text-stone-400">INPUT</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Architectural Brief</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">METHOD</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Spatial Analysis</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">OUTCOME</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-[#8c7b6d]">Design Intent</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02 DESIGN -->
                <div class="process-stage-card col-start-1 row-start-1 w-full opacity-0 pointer-events-none z-0" data-stage-card="design">
                    <div class="rounded-2xl bg-white border border-stone-200 p-6 md:p-10 shadow-sm hover:shadow-xl transition-shadow duration-500">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-[#8c7b6d] font-mono font-bold text-sm tracking-widest uppercase">02 / ARCHITECTURE</span>
                            <span class="text-xs font-sans px-3 py-1 bg-stone-100 text-stone-600 rounded-full font-medium">Phase Two</span>
                        </div>

                        <div class="relative overflow-hidden rounded-xl mb-8 group">
                            <img src="{{ asset('assets/process/02-design.png') }}" 
                                 alt="Design - Architectural Drawings & Drafting" 
                                 class="w-full h-[320px] md:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute bottom-4 right-4 bg-stone-950/80 backdrop-blur-md text-white text-xs font-mono px-3 py-1.5 rounded-md">
                                Drafting & Millimeter Scale
                            </div>
                        </div>

                        <h3 class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 tracking-tight uppercase">
                            IDEAS NEED A FORM.
                        </h3>
                        <p class="text-stone-600 text-base mt-4 leading-relaxed">
                            Sketches, proportions, millimeter technical drawings, and structural CAD systems define the shape of an idea. We balance visual poise with load-bearing structural integrity.
                        </p>

                        <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-stone-100">
                            <div>
                                <span class="block text-xs font-mono text-stone-400">TOOLING</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">CAD & Hand Sketches</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">PRECISION</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">&plusmn;0.5mm Tolerance</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">OUTCOME</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-[#8c7b6d]">Working Blueprint</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03 MATERIAL -->
                <div class="process-stage-card col-start-1 row-start-1 w-full opacity-0 pointer-events-none z-0" data-stage-card="material">
                    <div class="rounded-2xl bg-white border border-stone-200 p-6 md:p-10 shadow-sm hover:shadow-xl transition-shadow duration-500">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-[#8c7b6d] font-mono font-bold text-sm tracking-widest uppercase">03 / SUBSTANCE</span>
                            <span class="text-xs font-sans px-3 py-1 bg-stone-100 text-stone-600 rounded-full font-medium">Phase Three</span>
                        </div>

                        <div class="relative overflow-hidden rounded-xl mb-8 group">
                            <img src="{{ asset('assets/process/03-material.png') }}" 
                                 alt="Material - Hardwoods, Metals & Textiles" 
                                 class="w-full h-[320px] md:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute bottom-4 right-4 bg-stone-950/80 backdrop-blur-md text-white text-xs font-mono px-3 py-1.5 rounded-md">
                                Grid & Grain Philosophy
                            </div>
                        </div>

                        <h3 class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 tracking-tight uppercase">
                            WHAT IT'S MADE OF MATTERS.
                        </h3>
                        <p class="text-stone-600 text-base mt-4 leading-relaxed">
                            Materials determine not only how something looks, but how it endures, patinates, and feels to human touch. Wood, brass, leather, and natural stone connect directly back to Abog's Grid & Grain philosophy.
                        </p>

                        <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-stone-100">
                            <div>
                                <span class="block text-xs font-mono text-stone-400">SPECIES</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">African Teak & Walnut</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">ACCENTS</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Solid Brass</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">OUTCOME</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-[#8c7b6d]">Organic Tactility</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 04 MAKE -->
                <div class="process-stage-card col-start-1 row-start-1 w-full opacity-0 pointer-events-none z-0" data-stage-card="make">
                    <div class="rounded-2xl bg-white border border-stone-200 p-6 md:p-10 shadow-sm hover:shadow-xl transition-shadow duration-500">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-[#8c7b6d] font-mono font-bold text-sm tracking-widest uppercase">04 / CRAFTSMANSHIP</span>
                            <span class="text-xs font-sans px-3 py-1 bg-stone-100 text-stone-600 rounded-full font-medium">Phase Four</span>
                        </div>

                        <div class="relative overflow-hidden rounded-xl mb-8 group">
                            <img src="{{ asset('assets/process/04-make.png') }}" 
                                 alt="Make - Artisan Woodworking Craftsman" 
                                 class="w-full h-[320px] md:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute bottom-4 right-4 bg-stone-950/80 backdrop-blur-md text-white text-xs font-mono px-3 py-1.5 rounded-md">
                                Hand Joinery & Atelier
                            </div>
                        </div>

                        <h3 class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 tracking-tight uppercase">
                            THE IDEA GETS HANDS.
                        </h3>
                        <p class="text-stone-600 text-base mt-4 leading-relaxed">
                            Cutting, shaping, joining, and assembling. This is where decades of Nigerian woodworking expertise, hand chisels, and precision machinery merge to transform raw lumber into structural art.
                        </p>

                        <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-stone-100">
                            <div>
                                <span class="block text-xs font-mono text-stone-400">JOINERY</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Mortise & Tenon</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">TECHNIQUE</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Hand Planing & CNC</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">OUTCOME</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-[#8c7b6d]">Solid Form</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 05 REFINE -->
                <div class="process-stage-card col-start-1 row-start-1 w-full opacity-0 pointer-events-none z-0" data-stage-card="refine">
                    <div class="rounded-2xl bg-white border border-stone-200 p-6 md:p-10 shadow-sm hover:shadow-xl transition-shadow duration-500">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-[#8c7b6d] font-mono font-bold text-sm tracking-widest uppercase">05 / PRECISION</span>
                            <span class="text-xs font-sans px-3 py-1 bg-stone-100 text-stone-600 rounded-full font-medium">Phase Five</span>
                        </div>

                        <div class="relative overflow-hidden rounded-xl mb-8 group">
                            <img src="{{ asset('assets/process/05-refine.png') }}" 
                                 alt="Refine - Micro Detail Sanding & Finishing" 
                                 class="w-full h-[320px] md:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute bottom-4 right-4 bg-stone-950/80 backdrop-blur-md text-white text-xs font-mono px-3 py-1.5 rounded-md">
                                Macro Finishing
                            </div>
                        </div>

                        <h3 class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 tracking-tight uppercase">
                            GOOD ENOUGH ISN'T FINISHED.
                        </h3>
                        <p class="text-stone-600 text-base mt-4 leading-relaxed">
                            Precision lives in the smallest decisions. We hand-sand, hand-oil, inspect grain alignment, and perfect every subtle radius until the piece feels flawless to human touch.
                        </p>

                        <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-stone-100">
                            <div>
                                <span class="block text-xs font-mono text-stone-400">FINISH</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Hardwax Oils</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">SANDING</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Ultra-Fine 400 Grit</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">OUTCOME</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-[#8c7b6d]">Tactile Perfection</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 06 DELIVER -->
                <div class="process-stage-card col-start-1 row-start-1 w-full opacity-0 pointer-events-none z-0" data-stage-card="deliver">
                    <div class="rounded-2xl bg-white border border-stone-200 p-6 md:p-10 shadow-sm hover:shadow-xl transition-shadow duration-500">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-[#8c7b6d] font-mono font-bold text-sm tracking-widest uppercase">06 / COMPLETION</span>
                            <span class="text-xs font-sans px-3 py-1 bg-stone-100 text-stone-600 rounded-full font-medium">Phase Six</span>
                        </div>

                        <div class="relative overflow-hidden rounded-xl mb-8 group">
                            <img src="{{ asset('assets/process/06-deliver.jpg') }}" 
                                 alt="Deliver - Installation in Modern Residence" 
                                 class="w-full h-[320px] md:h-[420px] object-cover transition-transform duration-700 group-hover:scale-105" />
                            <div class="absolute bottom-4 right-4 bg-stone-950/80 backdrop-blur-md text-white text-xs font-mono px-3 py-1.5 rounded-md">
                                White-Glove Installation
                            </div>
                        </div>

                        <h3 class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 tracking-tight uppercase">
                            PLACEMENT IN SPACE.
                        </h3>
                        <p class="text-stone-600 text-base mt-4 leading-relaxed">
                            From workshop to client sanctuary: white-glove transport, spatial positioning, and precise installation complete the creative arc.
                        </p>

                        <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-stone-100">
                            <div>
                                <span class="block text-xs font-mono text-stone-400">LOGISTICS</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">White-Glove Transport</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">PLACEMENT</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-stone-800">Spatial Alignment</span>
                            </div>
                            <div>
                                <span class="block text-xs font-mono text-stone-400">OUTCOME</span>
                                <span class="font-display font-semibold text-xs md:text-sm text-[#8c7b6d]">Living Space</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 3. THE SIGNATURE INTERACTION: PINNED GSAP SEQUENCE -->
    <div id="signature-sequence-wrapper" data-header-theme="dark" class="relative bg-stone-950 text-stone-100 py-24 select-none">
        <div id="signature-pinned-container" class="max-w-7xl mx-auto px-6 md:px-16 lg:px-24">
            
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-[#8c7b6d] font-mono text-xs md:text-sm tracking-[0.3em] uppercase block mb-3">Signature Interaction</span>
                <h2 class="font-display font-black text-4xl md:text-6xl tracking-tight text-white">
                    THE METAMORPHOSIS
                </h2>
                <p class="text-stone-400 text-base md:text-lg mt-4">
                    Scroll to watch an idea evolve into physical form and spatial reality.
                </p>
            </div>

            <!-- Sequence Progress Indicator Bar -->
            <div class="w-full max-w-xl mx-auto bg-stone-900 border border-stone-800 rounded-full p-1.5 mb-12 flex justify-between items-center text-xs font-mono">
                <div class="sig-step-pill px-3 py-1 rounded-full transition-all duration-300 bg-[#8c7b6d] text-white" data-sig-step="0">01 IDEA</div>
                <div class="sig-step-pill px-3 py-1 rounded-full transition-all duration-300 text-stone-500" data-sig-step="1">02 DRAWING</div>
                <div class="sig-step-pill px-3 py-1 rounded-full transition-all duration-300 text-stone-500" data-sig-step="2">03 MATERIAL</div>
                <div class="sig-step-pill px-3 py-1 rounded-full transition-all duration-300 text-stone-500" data-sig-step="3">04 OBJECT</div>
                <div class="sig-step-pill px-3 py-1 rounded-full transition-all duration-300 text-stone-500" data-sig-step="4">05 SPACE</div>
            </div>

            <!-- Morphing Stage Display -->
            <div class="relative w-full h-[450px] md:h-[580px] rounded-3xl overflow-hidden border border-stone-800 bg-stone-900 shadow-2xl">
                
                <!-- Layer 1: IDEA -->
                <div class="sig-layer absolute inset-0 flex flex-col items-center justify-center p-8 bg-[#181614] text-center transition-opacity duration-500 opacity-100 z-10" data-layer="0">
                    <div class="w-24 h-24 rounded-full border border-[#8c7b6d]/40 flex items-center justify-center mb-6 animate-pulse">
                        <svg class="w-10 h-10 text-[#8c7b6d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <span class="text-xs font-mono tracking-widest text-[#8c7b6d] uppercase mb-2">Stage 01 — Spark</span>
                    <h3 class="font-display font-extrabold text-3xl md:text-5xl text-white">"WHAT IF WE CREATED A FORM THAT FEELS BOTH ARCHITECTURAL AND ORGANIC?"</h3>
                    <p class="text-stone-400 max-w-lg mt-4 text-sm md:text-base">The initial brief starts as a thought, a desire to improve living experience.</p>
                </div>

                <!-- Layer 2: DRAWING -->
                <div class="sig-layer absolute inset-0 flex flex-col items-center justify-center p-8 bg-[#151719] text-center transition-opacity duration-500 opacity-0 pointer-events-none z-20" data-layer="1">
                    <img src="{{ asset('assets/process/02-design.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-overlay" />
                    <div class="relative z-10 max-w-xl">
                        <span class="text-xs font-mono tracking-widest text-[#8c7b6d] uppercase mb-2 block">Stage 02 — Precision Blueprint</span>
                        <h3 class="font-display font-extrabold text-3xl md:text-5xl text-white">MILLIMETER LINES & CAD TOLERANCES</h3>
                        <p class="text-stone-300 mt-4 text-sm md:text-base">Transforming abstract concepts into rigorous geometric schematics and joinery calculations.</p>
                    </div>
                </div>

                <!-- Layer 3: MATERIAL -->
                <div class="sig-layer absolute inset-0 flex flex-col items-center justify-center p-8 bg-[#1c1714] text-center transition-opacity duration-500 opacity-0 pointer-events-none z-30" data-layer="2">
                    <img src="{{ asset('assets/process/03-material.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-40 mix-blend-screen" />
                    <div class="relative z-10 max-w-xl">
                        <span class="text-xs font-mono tracking-widest text-[#8c7b6d] uppercase mb-2 block">Stage 03 — Grid & Grain</span>
                        <h3 class="font-display font-extrabold text-3xl md:text-5xl text-white">SOLID HARDWOOD & BURNISHED BRASS</h3>
                        <p class="text-stone-300 mt-4 text-sm md:text-base">Selecting rich African timber grains and tactile brass accents that age gracefully.</p>
                    </div>
                </div>

                <!-- Layer 4: OBJECT -->
                <div class="sig-layer absolute inset-0 flex flex-col items-center justify-center p-8 bg-[#121110] text-center transition-opacity duration-500 opacity-0 pointer-events-none z-40" data-layer="3">
                    <img src="{{ asset('assets/process/04-make.png') }}" class="absolute inset-0 w-full h-full object-cover opacity-50" />
                    <div class="relative z-10 max-w-xl">
                        <span class="text-xs font-mono tracking-widest text-[#8c7b6d] uppercase mb-2 block">Stage 04 — Workshop Form</span>
                        <h3 class="font-display font-extrabold text-3xl md:text-5xl text-white">HAND-PLANE & MORTISE JOINERY</h3>
                        <p class="text-stone-300 mt-4 text-sm md:text-base">Master craftsmen shaping raw timber into structural perfection on the workbench.</p>
                    </div>
                </div>

                <!-- Layer 5: SPACE -->
                <div class="sig-layer absolute inset-0 flex flex-col items-center justify-center p-8 bg-black text-center transition-opacity duration-500 opacity-0 pointer-events-none z-50" data-layer="4">
                    <img src="{{ asset('assets/process/06-deliver.jpg') }}" class="absolute inset-0 w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-stone-950/60 backdrop-blur-[2px]"></div>
                    <div class="relative z-10 max-w-2xl px-4">
                        <span class="text-xs font-mono tracking-widest text-[#d9c5b2] uppercase mb-2 block">Stage 05 — Architectural Belonging</span>
                        <h3 class="font-display font-black text-4xl md:text-6xl text-white tracking-tight">FINISHED & LIVED WITH</h3>
                        <p class="text-stone-200 mt-4 text-base md:text-lg">The completed furniture piece seamlessly elevates the architecture and becomes part of everyday human life.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 4. THE HUMAN ELEMENT -->
    <div data-header-theme="light" class="py-24 px-6 md:px-16 lg:px-24 bg-[#f5f3ef] border-t border-stone-300">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6">
                    <span class="text-[#8c7b6d] font-mono text-xs md:text-sm tracking-[0.25em] uppercase block mb-3">Human Collective</span>
                    <h2 class="font-display font-black text-4xl md:text-6xl tracking-tight text-stone-900">
                        NO LEGACY IS BUILT ALONE.
                    </h2>
                    <p class="text-stone-700 text-lg mt-6 leading-relaxed">
                        Behind every Abog creation is a dedicated community of designers, master woodworkers, joiners, metal smiths, project managers, and white-glove installers.
                    </p>
                    <p class="text-stone-600 text-base mt-4 leading-relaxed">
                        We blend generational African craftsmanship with contemporary digital spatial design — ensuring every piece carries human warmth, dignity, and absolute structural mastery.
                    </p>

                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="p-5 rounded-xl bg-white border border-stone-200 shadow-sm">
                            <span class="font-display font-extrabold text-2xl md:text-3xl text-stone-900 block">30+ Years</span>
                            <span class="text-xs font-mono text-stone-500 uppercase tracking-wider">Mastery & Experience</span>
                        </div>
                        <div class="p-5 rounded-xl bg-white border border-stone-200 shadow-sm">
                            <span class="font-display font-extrabold text-2xl md:text-3xl text-[#8c7b6d] block">100% Local</span>
                            <span class="text-xs font-mono text-stone-500 uppercase tracking-wider">Nigerian Craftsmanship</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="relative rounded-2xl overflow-hidden border border-stone-300 shadow-2xl group">
                        <img src="{{ asset('assets/process/human-craftsman.png') }}" 
                             alt="Abog Master Craftsman & Founder" 
                             class="w-full h-[480px] md:h-[540px] object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-stone-950/85 via-stone-950/20 to-transparent"></div>
                        <div class="absolute bottom-8 left-8 right-8 text-white">
                            <blockquote class="font-display font-medium text-lg md:text-xl italic leading-snug">
                                "Machine accuracy gives us structure. Human hands give us soul."
                            </blockquote>
                            <span class="block text-xs font-mono tracking-widest text-[#d9c5b2] uppercase mt-3">— Abog Atelier Leadership</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. THE RESULT -->
    <div data-header-theme="dark" class="py-24 px-6 md:px-16 lg:px-24 bg-stone-900 text-stone-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto w-full relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#8c7b6d] font-mono text-xs md:text-sm tracking-[0.25em] uppercase block mb-3">The Outcome</span>
                <h2 class="font-display font-black text-4xl md:text-6xl tracking-tight text-white">
                    AND THEN, IT BECOMES PART OF LIFE.
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <div class="p-8 rounded-2xl bg-stone-950/60 border border-stone-800 hover:border-[#8c7b6d] transition-all duration-300">
                    <span class="text-3xl font-display font-bold text-[#8c7b6d] block mb-3">01</span>
                    <p class="font-display font-semibold text-xl text-white">A chair becomes somewhere to sit.</p>
                </div>
                <div class="p-8 rounded-2xl bg-stone-950/60 border border-stone-800 hover:border-[#8c7b6d] transition-all duration-300">
                    <span class="text-3xl font-display font-bold text-[#8c7b6d] block mb-3">02</span>
                    <p class="font-display font-semibold text-xl text-white">A table becomes somewhere people gather.</p>
                </div>
                <div class="p-8 rounded-2xl bg-stone-950/60 border border-stone-800 hover:border-[#8c7b6d] transition-all duration-300">
                    <span class="text-3xl font-display font-bold text-[#8c7b6d] block mb-3">03</span>
                    <p class="font-display font-semibold text-xl text-white">A desk becomes somewhere ideas happen.</p>
                </div>
                <div class="p-8 rounded-2xl bg-stone-950/60 border border-stone-800 hover:border-[#8c7b6d] transition-all duration-300">
                    <span class="text-3xl font-display font-bold text-[#8c7b6d] block mb-3">04</span>
                    <p class="font-display font-semibold text-xl text-white">A room becomes somewhere people belong.</p>
                </div>
            </div>

            <div class="relative rounded-3xl overflow-hidden border border-stone-800 h-[400px] md:h-[500px]">
                <img src="{{ asset('assets/process/result-space.jpg') }}" 
                     alt="Completed Abog Architectural Living Space" 
                     class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-stone-950/40"></div>
                <div class="absolute bottom-8 left-8 right-8 text-center md:text-left md:left-12">
                    <span class="text-xs font-mono text-[#d9c5b2] uppercase tracking-widest block mb-1">Completed Environment</span>
                    <h3 class="font-display font-bold text-2xl md:text-3xl text-white">Designed for human life. Built to endure generations.</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. FINAL CTA -->
    <div data-header-theme="light" class="py-24 px-6 md:px-16 lg:px-24 bg-[#f5f3ef] border-t border-stone-300 text-center select-none">
        <div class="max-w-4xl mx-auto">
            <span class="text-[#8c7b6d] font-mono text-xs md:text-sm tracking-[0.25em] uppercase block mb-3">Next Steps</span>
            <h2 class="font-display font-black text-4xl md:text-6xl text-stone-900 tracking-tight mb-6">
                READY TO BUILD SOMETHING?
            </h2>
            <p class="text-stone-600 text-lg md:text-xl max-w-xl mx-auto mb-10 leading-relaxed">
                Whether you need a single custom furniture piece or a complete architectural interior solution, let's start the conversation.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('home') }}#collections-section" class="w-full sm:w-auto inline-flex items-center justify-center pl-8 pr-4 py-4 bg-[#8c7b6d] hover:bg-[#7a6a5c] text-white font-sans text-base font-medium rounded-full transition-all duration-300 shadow-lg group">
                    <span>EXPLORE OUR COLLECTIONS</span>
                    <span class="w-8 h-8 ml-6 rounded-full bg-white flex items-center justify-center text-[#8c7b6d] group-hover:translate-x-1 transition-transform duration-300">
                        &rsaquo;
                    </span>
                </a>

                <a href="#footer-section" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 bg-transparent hover:bg-stone-200 text-stone-900 font-sans text-base font-medium rounded-full border border-stone-400 transition-all duration-300">
                    <span>START A PROJECT</span>
                </a>
            </div>
        </div>
    </div>
</section>
