import './bootstrap';
import { initNavigation } from './animations/navigation';
import { initHero } from './animations/hero';
import { initCollections } from './animations/collections';
import { initProjects } from './animations/projects';
import { initExperience } from './animations/experience';
import { initAbout } from './animations/about';
import Lenis from 'lenis';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

function initSmoothScroll() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return null;

    const lenis = new Lenis({
        duration: 1.1,
        easing: (t) => 1 - Math.pow(1 - t, 4),
        smoothWheel: true,
        syncTouch: false,
        anchors: false,
    });

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);

    document.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener('click', (event) => {
            const hash = link.getAttribute('href');
            const target = hash && document.querySelector(hash);
            if (!target) return;

            event.preventDefault();
            lenis.scrollTo(target, { offset: -24 });
            window.history.pushState(null, '', hash);
        });
    });

    window.addEventListener('load', () => ScrollTrigger.refresh(), { once: true });
    return lenis;
}

document.addEventListener('DOMContentLoaded', () => {
    initSmoothScroll();
    initNavigation();
    initHero();
    initCollections();
    initProjects();
    initExperience();
    initAbout();
});


