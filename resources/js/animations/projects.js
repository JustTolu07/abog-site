import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initProjects() {
    const projectsSection = document.querySelector('#projects-section');
    const cursorBtn = document.querySelector('#project-cursor-btn');
    const projectItems = document.querySelectorAll('.project-item');
    const projectCards = document.querySelectorAll('.project-card');

    if (!projectsSection || !projectItems.length) return;

    // --- 1. MAGNETIC MOUSE CURSOR HOVER BUTTON LOGIC ---
    if (cursorBtn && projectCards.length) {
        let mouseX = 0;
        let mouseY = 0;
        let isHovered = false;

        const updateCursor = (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;

            if (isHovered) {
                gsap.to(cursorBtn, {
                    x: mouseX,
                    y: mouseY,
                    duration: 0.2,
                    ease: 'power2.out'
                });
            }
        };

        window.addEventListener('mousemove', updateCursor, { passive: true });

        projectCards.forEach(card => {
            card.addEventListener('mouseenter', (e) => {
                isHovered = true;
                mouseX = e.clientX;
                mouseY = e.clientY;

                gsap.set(cursorBtn, { x: mouseX, y: mouseY, xPercent: -50, yPercent: -50 });
                gsap.to(cursorBtn, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.3,
                    ease: 'back.out(1.7)'
                });
            });

            card.addEventListener('mouseleave', () => {
                isHovered = false;
                gsap.to(cursorBtn, {
                    opacity: 0,
                    scale: 0.5,
                    duration: 0.25,
                    ease: 'power2.in'
                });
            });
        });
    }

    // --- 2. GSAP SCROLLTRIGGER ENTRANCE & PARALLAX ANIMATIONS ---
    const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (isReducedMotion) return;

    projectItems.forEach(item => {
        const header = item.querySelector('.border-b');
        const cards = item.querySelectorAll('.project-card-wrap');

        if (header) {
            gsap.from(header, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                y: 30,
                opacity: 0,
                duration: 0.8,
                ease: 'power3.out'
            });
        }

        if (cards.length) {
            gsap.from(cards, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top 70%',
                    toggleActions: 'play none none reverse'
                },
                y: 50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: 'power3.out'
            });

            // Parallax shift for offset sub-image card
            if (cards.length > 1) {
                gsap.to(cards[1], {
                    scrollTrigger: {
                        trigger: item,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 1
                    },
                    y: -40,
                    ease: 'none'
                });
            }
        }
    });
}
