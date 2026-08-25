import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initHero() {
    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Target elements
    const pinTrigger = document.querySelector('#hero-pin-trigger');
    const heroSection = document.querySelector('#hero-section');
    const heroBg = document.querySelector('#hero-bg-container');
    const headlineLines = document.querySelectorAll('#hero-headline .line-text');
    const subtext = document.querySelector('#hero-subtext');
    const textBlock = document.querySelector('#hero-text-block');
    const abogWatermark = document.querySelector('#hero-abog-watermark');

    if (!heroSection || !pinTrigger) return;

    if (isReducedMotion) {
        gsap.set(heroBg, { scale: 1 });
        gsap.set(headlineLines, { y: '0%', opacity: 1 });
        gsap.set(subtext, { opacity: 1, y: 0 });
        if (abogWatermark) gsap.set(abogWatermark, { opacity: 0.95, y: 0 });
        return;
    }

    // --- 1. INITIAL ENTRANCE ANIMATION ---
    gsap.set(headlineLines, { y: '0%', opacity: 1 });
    gsap.set(subtext, { y: 0, opacity: 1 });
    if (abogWatermark) gsap.set(abogWatermark, { opacity: 0, y: 30 });

    const entryTl = gsap.timeline({
        defaults: { ease: 'power4.out', duration: 1.4 }
    });

    entryTl.fromTo(heroBg, 
        { scale: 1.08 },
        { scale: 1.0, duration: 2.2, ease: 'power3.out' }
    , 0);

    entryTl.fromTo(headlineLines, 
        { y: '30%', opacity: 0 },
        { y: '0%', opacity: 1, stagger: 0.1, duration: 1.2, ease: 'power3.out' },
        0.2
    );

    entryTl.fromTo(subtext,
        { y: 15, opacity: 0 },
        { y: 0, opacity: 1, duration: 1.0, ease: 'power3.out' },
        0.5
    );

    if (abogWatermark) {
        entryTl.fromTo(abogWatermark,
            { y: 40, opacity: 0 },
            { y: 0, opacity: 0.95, duration: 1.4, ease: 'power3.out' },
            0.4
        );
    }

    // --- 2. PINNED SCRUBBED SCROLL TIMELINE ---
    const scrollTl = gsap.timeline({
        scrollTrigger: {
            trigger: pinTrigger,
            start: 'top top',
            end: 'bottom bottom',
            scrub: 1.2,
            invalidateOnRefresh: true
        }
    });

    const getHeadlineShiftX = () => {
        if (!textBlock) return 0;
        const windowWidth = window.innerWidth;
        const textWidth = textBlock.offsetWidth;
        if (windowWidth < 768) {
            return 0;
        }
        return windowWidth - textWidth - (windowWidth > 1024 ? 160 : 96);
    };

    scrollTl.to(heroBg, {
        scale: 1.1,
        ease: 'none',
        duration: 2
    }, 0);

    scrollTl.to(textBlock, {
        x: () => getHeadlineShiftX(),
        ease: 'power3.inOut',
        duration: 2.5
    }, 0.3);

    if (abogWatermark) {
        scrollTl.to(abogWatermark, {
            opacity: 0.3,
            y: -20,
            ease: 'power1.out',
            duration: 2.5
        }, 0.3);
    }
}
