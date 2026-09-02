import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initAbout() {
    // 1. Homepage Pinned About Word-by-Word Scroll Reveal
    const aboutPinTrigger = document.querySelector('#about-pin-trigger');
    const aboutSection = document.querySelector('#about-section');
    const aboutWords = document.querySelectorAll('#about-text .about-word');
    const aboutBtnContainer = document.querySelector('#about-btn-container');

    if (aboutSection && aboutWords.length) {
        const isReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (isReduced) {
            gsap.set(aboutWords, { opacity: 1, color: '#1c1917' });
            if (aboutBtnContainer) gsap.set(aboutBtnContainer, { opacity: 1, y: 0 });
            gsap.set(aboutSection, { borderTopLeftRadius: 0, borderTopRightRadius: 0 });
        } else {
            // Initial state: Words faded
            gsap.set(aboutWords, { opacity: 0.25, color: '#a8a29e' });
            if (aboutBtnContainer) gsap.set(aboutBtnContainer, { opacity: 0, y: 20 });

            const triggerEl = aboutPinTrigger || aboutSection;

            // 1A. Docking transition: Animate top border radius from rounded card (3rem) to 0px as card enters & pins at top:0
            const initialRadius = window.innerWidth >= 768 ? '48px' : '24px';
            gsap.fromTo(aboutSection,
                {
                    borderTopLeftRadius: initialRadius,
                    borderTopRightRadius: initialRadius,
                },
                {
                    borderTopLeftRadius: '0px',
                    borderTopRightRadius: '0px',
                    ease: 'none',
                    scrollTrigger: {
                        trigger: triggerEl,
                        start: 'top 95%',
                        end: 'top top',
                        scrub: true,
                        invalidateOnRefresh: true
                    }
                }
            );

            // 1B. Word-by-word reveal timeline while pinned
            const aboutTl = gsap.timeline({
                scrollTrigger: {
                    trigger: triggerEl,
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: 1.0,
                    invalidateOnRefresh: true
                }
            });

            // Reveal words one by one as user scrolls
            aboutTl.to(aboutWords, {
                opacity: 1,
                color: '#1c1917',
                stagger: 0.12,
                ease: 'power1.out',
                duration: 3
            }, 0);

            // Animate learn more button near end of reveal
            if (aboutBtnContainer) {
                aboutTl.to(aboutBtnContainer, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power2.out'
                }, 2.8);
            }

            // 1C. Gracefully fade and scale out About content near end of pin as Collections section enters
            const aboutContent = aboutSection.querySelector('.max-w-5xl');
            if (aboutContent) {
                aboutTl.to(aboutContent, {
                    opacity: 0,
                    scale: 0.96,
                    y: -30,
                    duration: 1.0,
                    ease: 'power1.in'
                }, 3.4);
            }
        }
    }

    // 2. Dedicated About Page (if present)
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
