import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initAbout() {
    const page = document.querySelector('[data-about-page]');
    if (!page) return;

    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const ctx = gsap.context(() => {
        const heroWords = page.querySelectorAll('.about-hero-word');
        const heroCopy = page.querySelectorAll('.about-hero-copy, .about-hero-meta, .about-kicker');

        if (reduced) {
            gsap.set([heroWords, heroCopy], { clearProps: 'all' });
            return;
        }

        gsap.timeline({ defaults: { ease: 'power3.out' } })
            .from(heroWords, { yPercent: 110, duration: 1.15, stagger: 0.12 })
            .from(heroCopy, { autoAlpha: 0, y: 18, duration: 0.7, stagger: 0.08 }, '-=0.45');

        gsap.from(page.querySelectorAll('.about-section-title'), {
            scrollTrigger: { trigger: page, start: 'top top', end: 'bottom bottom' },
            autoAlpha: 0,
            y: 35,
            duration: 0.8,
            stagger: 0.08,
            ease: 'power3.out'
        });

        const nameStage = page.querySelector('.about-name-stage');
        if (nameStage) {
            gsap.from(nameStage.querySelectorAll('.about-name-part'), {
                scrollTrigger: { trigger: nameStage, start: 'top 75%' },
                xPercent: (i) => i === 0 ? -22 : 22,
                autoAlpha: 0,
                duration: 1,
                stagger: 0.08,
                ease: 'power3.out'
            });
            gsap.from(nameStage.querySelector('.about-name-lockup'), {
                scrollTrigger: { trigger: nameStage, start: 'top 60%' },
                autoAlpha: 0,
                y: 24,
                duration: 0.9,
                ease: 'power3.out'
            });
        }

        page.querySelectorAll('.about-founder-image, .about-project-image, .about-people-image').forEach((image) => {
            gsap.from(image, { scrollTrigger: { trigger: image, start: 'top 82%' }, clipPath: 'inset(12% 0 12% 0)', autoAlpha: 0, duration: 1, ease: 'power3.out' });
        });

        const beliefs = page.querySelectorAll('.about-belief-line');
        if (beliefs.length) gsap.from(beliefs, { scrollTrigger: { trigger: beliefs[0].parentElement, start: 'top 75%' }, autoAlpha: 0, x: 24, duration: 0.65, stagger: 0.14, ease: 'power3.out' });

        const grain = page.querySelector('.about-grain-image');
        if (grain) gsap.to(grain, { scrollTrigger: { trigger: grain, start: 'top bottom', end: 'bottom top', scrub: 0.7 }, yPercent: -9, ease: 'none' });

        const years = page.querySelector('.about-years-number');
        if (years) gsap.from(years, { scrollTrigger: { trigger: years, start: 'top 78%' }, scale: 1.22, autoAlpha: 0, duration: 1.2, ease: 'power3.out' });

        gsap.from(page.querySelectorAll('.about-closing-line'), { scrollTrigger: { trigger: '.about-closing-line', start: 'top 75%' }, autoAlpha: 0, y: 40, duration: 0.8, stagger: 0.14, ease: 'power3.out' });
    }, page);

    window.addEventListener('pagehide', () => ctx.revert(), { once: true });
}
