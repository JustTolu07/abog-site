import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initProcess() {
    const processPage = document.querySelector('#process-page');
    if (!processPage) return;

    const navItems = Array.from(document.querySelectorAll('.process-nav-item'));
    const stageBlocks = Array.from(document.querySelectorAll('.process-stage-block'));
    const stepDescription = document.getElementById('process-step-description');

    let activeStage = 'understand';

    // 1. Stage Activation Function
    function setActiveStage(stageKey) {
        if (activeStage === stageKey && navItems.some(item => item.classList.contains('active'))) return;
        activeStage = stageKey;

        navItems.forEach(item => {
            const btn = item.querySelector('.process-nav-btn');
            const matches = item.getAttribute('data-step') === stageKey;
            
            if (matches) {
                item.classList.add('active');
                btn?.classList.add('bg-stone-200/80', 'border-stone-300', 'text-[#8c7b6d]');
                btn?.classList.remove('border-transparent');
                
                const desc = item.getAttribute('data-description');
                if (stepDescription && desc) {
                    gsap.to(stepDescription, {
                        opacity: 0,
                        duration: 0.15,
                        onComplete: () => {
                            stepDescription.textContent = desc;
                            gsap.to(stepDescription, { opacity: 1, duration: 0.25 });
                        }
                    });
                }
            } else {
                item.classList.remove('active');
                btn?.classList.remove('bg-stone-200/80', 'border-stone-300', 'text-[#8c7b6d]');
                btn?.classList.add('border-transparent');
            }
        });
    }

    // Initialize initial active nav styling
    setActiveStage('understand');

    // Navigation click handlers
    navItems.forEach(item => {
        const btn = item.querySelector('.process-nav-btn');
        btn?.addEventListener('click', (e) => {
            e.preventDefault();
            const step = item.getAttribute('data-step');
            if (!step) return;

            const targetStage = document.querySelector(`.process-stage-block[data-stage="${step}"]`);
            if (targetStage) {
                setActiveStage(step);
                const targetY = targetStage.getBoundingClientRect().top + window.scrollY - 120;
                window.scrollTo({ top: targetY, behavior: 'smooth' });
            }
        });
    });

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    // 2. ScrollTrigger for 6 Stage Blocks
    stageBlocks.forEach((block) => {
        const stageKey = block.getAttribute('data-stage');
        
        ScrollTrigger.create({
            trigger: block,
            start: 'top 50%',
            end: 'bottom 50%',
            onEnter: () => setActiveStage(stageKey),
            onEnterBack: () => setActiveStage(stageKey)
        });

        // Stage enter animation
        gsap.fromTo(block,
            { y: 40, opacity: 0.8 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: block,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
                }
            }
        );
    });

    // 3. SIGNATURE PINNED GSAP TRANSFORMATION SEQUENCE
    const sigWrapper = document.getElementById('signature-sequence-wrapper');
    const sigPinnedContainer = document.getElementById('signature-pinned-container');
    const sigLayers = Array.from(document.querySelectorAll('.sig-layer'));
    const sigPills = Array.from(document.querySelectorAll('.sig-step-pill'));

    if (sigWrapper && sigPinnedContainer && sigLayers.length > 0) {
        function updateSigPills(activeIndex) {
            sigPills.forEach((pill, idx) => {
                if (idx === activeIndex) {
                    pill.className = 'sig-step-pill px-3 py-1 rounded-full transition-all duration-300 bg-[#8c7b6d] text-white font-bold shadow-md';
                } else {
                    pill.className = 'sig-step-pill px-3 py-1 rounded-full transition-all duration-300 text-stone-500 hover:text-stone-300';
                }
            });
        }

        const sigTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: sigWrapper,
                start: 'top top',
                end: '+=2000',
                pin: true,
                scrub: 0.8,
                onUpdate: (self) => {
                    const stepCount = sigLayers.length;
                    const stepIndex = Math.min(Math.floor(self.progress * stepCount), stepCount - 1);
                    updateSigPills(stepIndex);
                }
            }
        });

        // Crossfade layers sequentially
        sigLayers.forEach((layer, idx) => {
            if (idx === 0) {
                // Layer 0 is default visible
                sigTimeline.to(layer, { opacity: 1, duration: 1 }, 0);
            } else {
                const prevLayer = sigLayers[idx - 1];
                sigTimeline
                    .to(prevLayer, { opacity: 0, scale: 0.96, duration: 1 }, idx * 2)
                    .fromTo(layer, 
                        { opacity: 0, scale: 1.04 }, 
                        { opacity: 1, scale: 1, pointerEvents: 'auto', duration: 1 }, 
                        idx * 2
                    );
            }
        });
    }
}
