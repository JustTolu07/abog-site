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

    const aboutSection = document.querySelector('#about-section');
    const aboutWords = document.querySelectorAll('#about-text .about-word');
    const aboutBtnContainer = document.querySelector('#about-btn-container');

    if (!heroSection || !pinTrigger) return;

    if (isReducedMotion) {
        gsap.set(heroBg, { scale: 1 });
        gsap.set(headlineLines, { y: '0%', opacity: 1 });
        gsap.set(subtext, { opacity: 1, y: 0 });
        if (aboutWords.length) gsap.set(aboutWords, { opacity: 1 });
        if (aboutBtnContainer) gsap.set(aboutBtnContainer, { opacity: 1, y: 0 });
        return;
    }

    // --- 1. INITIAL ENTRANCE ANIMATION (Ensure immediate text visibility) ---
    gsap.set(headlineLines, { y: '0%', opacity: 1 });
    gsap.set(subtext, { y: 0, opacity: 1 });

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

    // --- 2. PINNED SCRUBBED SCROLL TIMELINE ---
    const scrollTl = gsap.timeline({
        scrollTrigger: {
            trigger: pinTrigger,
            start: 'top top',
            end: 'bottom bottom',
            scrub: 1.5,
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
        scale: 1.12,
        ease: 'none',
        duration: 2
    }, 0);

    scrollTl.to(textBlock, {
        x: () => getHeadlineShiftX(),
        ease: 'power3.inOut',
        duration: 3
    }, 0.5);

    if (aboutSection) {
        gsap.set(aboutSection, { yPercent: 40, opacity: 0 });

        scrollTl.to(aboutSection, {
            yPercent: 0,
            opacity: 1,
            ease: 'power2.out',
            duration: 3
        }, 3);
    }

    if (aboutWords.length) {
        gsap.set(aboutWords, { opacity: 0.25, color: '#a8a29e' });

        scrollTl.to(aboutWords, {
            opacity: 1,
            color: '#1c1917',
            stagger: 0.15,
            ease: 'power1.out',
            duration: 3
        }, 4);
    }

    if (aboutBtnContainer) {
        scrollTl.to(aboutBtnContainer, {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: 'power2.out'
        }, 6);
    }
}
