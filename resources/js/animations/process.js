import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initProcess() {
    const processPage = document.querySelector('#process-page');
    if (!processPage) return;

    const navItems = Array.from(document.querySelectorAll('.process-nav-item'));
    const cards = Array.from(document.querySelectorAll('.process-stage-card'));

    if (navItems.length === 0 || cards.length === 0) return;

    let activeStage = 'understand';
    let isTransitioning = false;

    // 1. Stage Activation Function
    function handleStageSwitch(targetStage) {
        if (targetStage === activeStage || isTransitioning) return;
        isTransitioning = true;

        const prevStage = activeStage;
        activeStage = targetStage;

        // Find active and target nav items/cards
        const prevItem = navItems.find(item => item.getAttribute('data-stage') === prevStage);
        const targetItem = navItems.find(item => item.getAttribute('data-stage') === targetStage);

        const prevCard = cards.find(card => card.getAttribute('data-stage-card') === prevStage);
        const targetCard = cards.find(card => card.getAttribute('data-stage-card') === targetStage);

        // Update nav items active states immediately
        if (prevItem) prevItem.classList.remove('active');
        if (targetItem) targetItem.classList.add('active');

        navItems.forEach(item => {
            const btn = item.querySelector('.process-nav-btn');
            btn?.setAttribute('aria-pressed', item === targetItem ? 'true' : 'false');
        });

        // Get description wrappers
        const prevWrapper = prevItem?.querySelector('.process-nav-desc-wrapper');
        const targetWrapper = targetItem?.querySelector('.process-nav-desc-wrapper');

        // Create transition timeline
        const tl = gsap.timeline({
            onComplete: () => {
                isTransitioning = false;
            }
        });

        // 1. Transition Navigation Accordion Description
        if (prevWrapper) {
            tl.to(prevWrapper, {
                height: 0,
                opacity: 0,
                duration: 0.4,
                ease: 'power3.inOut'
            }, 0);
        }

        if (targetWrapper) {
            tl.to(targetWrapper, {
                height: 'auto',
                opacity: 1,
                duration: 0.4,
                ease: 'power3.inOut'
            }, 0);
        }

        // 2. Transition Right Column stacked Cards
        if (prevCard) {
            prevCard.classList.remove('pointer-events-auto', 'z-10');
            prevCard.classList.add('pointer-events-none', 'z-0');

            // Fade and scale/move out
            tl.to(prevCard, {
                opacity: 0,
                scale: 0.96,
                y: -12,
                duration: 0.45,
                ease: 'power3.inOut'
            }, 0);
        }

        if (targetCard) {
            targetCard.classList.remove('pointer-events-none', 'z-0');
            targetCard.classList.add('pointer-events-auto', 'z-10');

            // Set initial state for incoming card
            gsap.set(targetCard, {
                opacity: 0,
                scale: 1.04,
                y: 12
            });

            // Fade and scale/move in
            tl.to(targetCard, {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 0.55,
                ease: 'power3.out'
            }, 0.1);

            // Stagger animate inner children elements of the incoming card
            const innerElements = targetCard.querySelectorAll('.rounded-2xl > *');
            if (innerElements.length > 0) {
                tl.fromTo(innerElements,
                    { opacity: 0, y: 10 },
                    { opacity: 1, y: 0, duration: 0.45, stagger: 0.08, ease: 'power2.out' },
                    0.2
                );
            }
        }
    }

    // Set up click handlers for nav item buttons
    navItems.forEach(item => {
        const btn = item.querySelector('.process-nav-btn');
        btn?.addEventListener('click', (e) => {
            e.preventDefault();
            const stage = item.getAttribute('data-stage');
            if (stage) {
                handleStageSwitch(stage);
            }
        });
    });

    // 2. SIGNATURE PINNED GSAP TRANSFORMATION SEQUENCE (UNCHANGED)
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
