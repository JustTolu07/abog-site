import { gsap } from 'gsap';

export function initCollections() {
    const navItems = document.querySelectorAll('.collection-nav-item');
    const descriptionEl = document.getElementById('collection-description');
    const imageContainer = document.getElementById('collection-images-container');
    
    if (!navItems.length || !descriptionEl || !imageContainer) return;

    let isTransitioning = false;
    let activeCollection = 'living-room';

    // Store references to all image sets and their cards
    const imageSets = {};
    document.querySelectorAll('.collection-image-set').forEach(set => {
        const slug = set.getAttribute('data-set');
        imageSets[slug] = {
            element: set,
            cards: set.querySelectorAll('.collection-card')
        };
    });

    // Explicitly initialize state for active vs inactive sets
    Object.keys(imageSets).forEach(slug => {
        const set = imageSets[slug];
        if (slug === activeCollection) {
            gsap.set(set.cards, { opacity: 1, scale: 1, y: 0 });
            gsap.set(set.element, { opacity: 1, zIndex: 10 });
            set.element.classList.remove('pointer-events-none');
            set.element.classList.add('pointer-events-auto');
        } else {
            gsap.set(set.cards, { opacity: 0, scale: 0.95, y: 15 });
            gsap.set(set.element, { opacity: 0, zIndex: 0 });
            set.element.classList.remove('pointer-events-auto');
            set.element.classList.add('pointer-events-none');
        }
    });

    navItems.forEach(item => {
        const button = item.querySelector('.collection-nav-btn');
        const targetContainer = button || item;

        const handleInteraction = (e) => {
            e.preventDefault();
            const collectionSlug = item.getAttribute('data-collection');
            if (collectionSlug === activeCollection || isTransitioning) return;

            isTransitioning = true;
            const prevCollection = activeCollection;
            activeCollection = collectionSlug;

            // 1. Update Navigation Active State
            document.querySelector('.collection-nav-item.active')?.classList.remove('active');
            item.classList.add('active');
            navItems.forEach((navItem) => {
                navItem.querySelector('.collection-nav-btn')?.setAttribute('aria-pressed', String(navItem === item));
            });

            // 2. Transition Description Text
            const newDesc = item.getAttribute('data-description');
            gsap.to(descriptionEl, {
                opacity: 0,
                y: 5,
                duration: 0.2,
                ease: 'power2.in',
                onComplete: () => {
                    descriptionEl.textContent = newDesc;
                    gsap.to(descriptionEl, {
                        opacity: 1,
                        y: 0,
                        duration: 0.35,
                        ease: 'power2.out'
                    });
                }
            });

            // 3. Transition Image Sets via Grid Stack
            const outgoing = imageSets[prevCollection];
            const incoming = imageSets[collectionSlug];

            if (outgoing && incoming) {
                outgoing.element.classList.remove('pointer-events-auto');
                outgoing.element.classList.add('pointer-events-none');
                gsap.set(outgoing.element, { zIndex: 0 });

                incoming.element.classList.remove('pointer-events-none');
                incoming.element.classList.add('pointer-events-auto');
                gsap.set(incoming.element, { zIndex: 10 });

                const tl = gsap.timeline({
                    onComplete: () => {
                        isTransitioning = false;
                    }
                });

                tl.to(outgoing.element, { opacity: 0, duration: 0.3 }, 0);
                tl.to(outgoing.cards, {
                    opacity: 0,
                    scale: 0.95,
                    y: 15,
                    duration: 0.3,
                    stagger: 0.03,
                    ease: 'power2.inOut'
                }, 0);

                gsap.killTweensOf(incoming.cards);
                gsap.set(incoming.element, { opacity: 1 });
                gsap.set(incoming.cards, {
                    opacity: 0,
                    scale: 1.05,
                    y: -20
                });

                tl.to(incoming.cards, {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 0.5,
                    stagger: 0.05,
                    ease: 'power3.out'
                }, 0.1);
            } else {
                isTransitioning = false;
            }
        };

        if (button) {
            button.addEventListener('click', handleInteraction);
        }
    });
}
