import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initExperience() {
    const experienceSection = document.querySelector('#experience-section');
    const floatingCards = document.querySelectorAll('.floating-card');
    const heritageTitle = document.querySelector('#heritage-title');
    const galleryMarquee = document.querySelector('#gallery-marquee');
    const logoMarquee = document.querySelector('#logo-marquee');

    if (!experienceSection) return;

    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // --- 1. CONTINUOUS MARQUEE ANIMATIONS ---
    if (!isReducedMotion && galleryMarquee) {
        gsap.to(galleryMarquee, {
            xPercent: -50,
            repeat: -1,
            duration: 25,
            ease: 'none'
        });
    }

    if (!isReducedMotion && logoMarquee) {
        gsap.to(logoMarquee, {
            xPercent: -50,
            repeat: -1,
            duration: 20,
            ease: 'none'
        });
    }

    if (isReducedMotion) return;

    // --- 2. FLOATING CARDS INTERACTIVE HOVER & ORBIT PHYSICS ---
    const initialRotations = [-12, -6, 12, -12, 15];

    floatingCards.forEach((card, index) => {
        const initialRotate = initialRotations[index % initialRotations.length];

        // Store initial rotation
        card.setAttribute('data-rotation', initialRotate);

        // Continuous subtle levitation float
        const floatTween = gsap.to(card, {
            y: (index % 2 === 0 ? '-=12' : '+=12'),
            rotation: initialRotate + (index % 2 === 0 ? 2 : -2),
            duration: 3 + index * 0.5,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut'
        });

        // Hover interaction: Straighten out, scale up, bring to top z-index
        card.addEventListener('mouseenter', () => {
            floatTween.pause();
            gsap.to(card, {
                rotate: 0,
                scale: 1.18,
                zIndex: 40,
                borderColor: '#8c7b6d',
                boxShadow: '0 25px 50px -12px rgba(0, 0, 0, 0.9), 0 0 30px rgba(140, 123, 109, 0.4)',
                duration: 0.4,
                ease: 'power3.out'
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                rotate: initialRotate,
                scale: 1.0,
                zIndex: 10,
                borderColor: 'rgba(168, 162, 158, 0.6)',
                boxShadow: '0 25px 50px -12px rgba(0, 0, 0, 0.5)',
                duration: 0.5,
                ease: 'power2.out',
                onComplete: () => floatTween.resume()
            });
        });
    });

    // --- 3. SCROLLTRIGGER ENTRANCE & PARALLAX REVEAL ---
    if (heritageTitle) {
        gsap.from(heritageTitle, {
            scrollTrigger: {
                trigger: experienceSection,
                start: 'top 75%',
                toggleActions: 'play none none reverse'
            },
            y: 50,
            opacity: 0,
            duration: 1.2,
            ease: 'power4.out'
        });
    }

    if (floatingCards.length) {
        gsap.from(floatingCards, {
            scrollTrigger: {
                trigger: experienceSection,
                start: 'top 70%',
                toggleActions: 'play none none reverse'
            },
            scale: 0.3,
            opacity: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: 'back.out(1.7)'
        });
    }
}
