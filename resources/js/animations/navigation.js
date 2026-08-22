import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initNavigation() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const overlay = document.getElementById('mobile-overlay');
    const line1 = document.getElementById('hamburger-line-1');
    const line2 = document.getElementById('hamburger-line-2');
    const links = document.querySelectorAll('.mobile-nav-item');

    const logoText = document.getElementById('header-logo-text');
    const navLinks = document.querySelectorAll('.nav-link');
    const navLines = document.querySelectorAll('.nav-line');
    const hamburgerLines = document.querySelectorAll('.nav-hamburger-line');
    
    if (toggleBtn && overlay) {
        let isOpen = false;
        let tl = gsap.timeline({ paused: true });

        tl.to(overlay, {
            y: '0%',
            opacity: 1,
            pointerEvents: 'auto',
            duration: 0.5,
            ease: 'power3.inOut'
        })
        .to(line1, {
            y: 4,
            rotate: 45,
            transformOrigin: 'center',
            duration: 0.3,
            ease: 'power2.inOut'
        }, 0)
        .to(line2, {
            y: -4,
            width: '100%',
            rotate: -45,
            transformOrigin: 'center',
            duration: 0.3,
            ease: 'power2.inOut'
        }, 0)
        .fromTo(links, 
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.4, stagger: 0.05, ease: 'power2.out' },
            '-=0.15'
        );

        toggleBtn.addEventListener('click', () => {
            isOpen = !isOpen;
            toggleBtn.setAttribute('aria-expanded', isOpen);
            overlay.setAttribute('aria-hidden', !isOpen);

            if (isOpen) {
                tl.play();
            } else {
                tl.reverse();
            }
        });

        links.forEach(linkContainer => {
            const link = linkContainer.querySelector('a');
            if (link) {
                link.addEventListener('click', () => {
                    isOpen = false;
                    toggleBtn.setAttribute('aria-expanded', 'false');
                    overlay.setAttribute('aria-hidden', 'true');
                    tl.reverse();
                });
            }
        });

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isOpen) {
                isOpen = false;
                toggleBtn.setAttribute('aria-expanded', 'false');
                overlay.setAttribute('aria-hidden', 'true');
                tl.reverse();
            }
        });
    }

    // ScrollTrigger dynamic color switching based on light vs dark section background
    // Escaped IDs avoid an invalid Tailwind arbitrary-value selector that stopped all later animation initialisers.
    const lightSections = document.querySelectorAll('#about-section, #collections-section, #projects-section, [data-header-theme="light"]');

    lightSections.forEach(section => {
        ScrollTrigger.create({
            trigger: section,
            start: 'top 80px',
            end: 'bottom 80px',
            onEnter: () => setHeaderTheme('dark'),
            onLeave: () => setHeaderTheme('light'),
            onEnterBack: () => setHeaderTheme('dark'),
            onLeaveBack: () => setHeaderTheme('light')
        });
    });

    function setHeaderTheme(theme) {
        if (theme === 'dark') {
            if (logoText) logoText.className = 'font-display font-black text-2xl md:text-3xl tracking-tighter transition-colors duration-500 text-stone-900';
            navLinks.forEach(l => {
                if (l.getAttribute('aria-current') === 'page') {
                    l.classList.remove('text-white', 'text-stone-400');
                    l.classList.add('text-stone-900');
                } else {
                    l.classList.remove('text-white');
                    l.classList.add('text-stone-600', 'hover:text-stone-900');
                }
            });
            navLines.forEach(line => {
                line.classList.remove('bg-white');
                line.classList.add('bg-stone-900');
            });
            hamburgerLines.forEach(hb => {
                hb.classList.remove('bg-white');
                hb.classList.add('bg-stone-900');
            });
        } else {
            if (logoText) logoText.className = 'font-display font-black text-2xl md:text-3xl tracking-tighter transition-colors duration-500 text-white';
            navLinks.forEach(l => {
                if (l.getAttribute('aria-current') === 'page') {
                    l.classList.remove('text-stone-900', 'text-stone-600');
                    l.classList.add('text-white');
                } else {
                    l.classList.remove('text-stone-900', 'text-stone-600');
                    l.classList.add('text-stone-400', 'hover:text-white');
                }
            });
            navLines.forEach(line => {
                line.classList.remove('bg-stone-900');
                line.classList.add('bg-white');
            });
            hamburgerLines.forEach(hb => {
                hb.classList.remove('bg-stone-900');
                hb.classList.add('bg-white');
            });
        }
    }
}
