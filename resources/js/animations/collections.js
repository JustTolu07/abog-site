import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initCollections() {
    // 1. HOME SECTION COLLECTIONS OVERLAP TRANSITION (if on Homepage)
    const homeNavItems = Array.from(document.querySelectorAll('.collection-nav-item'));
    const homeDescriptionEl = document.getElementById('collection-description');
    const homeImageContainer = document.getElementById('collection-images-container');

    if (homeNavItems.length && homeDescriptionEl && homeImageContainer) {
        let isTransitioning = false;
        let activeCollection = 'living-room';

        const imageSets = {};
        document.querySelectorAll('.collection-image-set').forEach(set => {
            const slug = set.getAttribute('data-set');
            imageSets[slug] = {
                element: set,
                cards: set.querySelectorAll('.collection-card')
            };
        });

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

        homeNavItems.forEach(item => {
            const button = item.querySelector('.collection-nav-btn');
            const handleInteraction = (e) => {
                e.preventDefault();
                const collectionSlug = item.getAttribute('data-collection');
                if (collectionSlug === activeCollection || isTransitioning) return;

                isTransitioning = true;
                const prevCollection = activeCollection;
                activeCollection = collectionSlug;

                document.querySelector('.collection-nav-item.active')?.classList.remove('active');
                item.classList.add('active');
                homeNavItems.forEach((navItem) => {
                    navItem.querySelector('.collection-nav-btn')?.setAttribute('aria-pressed', String(navItem === item));
                });

                const newDesc = item.getAttribute('data-description');
                gsap.to(homeDescriptionEl, {
                    opacity: 0,
                    y: 5,
                    duration: 0.2,
                    ease: 'power2.in',
                    onComplete: () => {
                        homeDescriptionEl.textContent = newDesc;
                        gsap.to(homeDescriptionEl, { opacity: 1, y: 0, duration: 0.35, ease: 'power2.out' });
                    }
                });

                const outgoing = imageSets[prevCollection];
                const incoming = imageSets[collectionSlug];

                if (outgoing && incoming) {
                    outgoing.element.classList.remove('pointer-events-auto');
                    outgoing.element.classList.add('pointer-events-none');
                    gsap.set(outgoing.element, { zIndex: 0 });

                    incoming.element.classList.remove('pointer-events-none');
                    incoming.element.classList.add('pointer-events-auto');
                    gsap.set(incoming.element, { zIndex: 10 });

                    const tl = gsap.timeline({ onComplete: () => { isTransitioning = false; } });
                    tl.to(outgoing.element, { opacity: 0, duration: 0.3 }, 0);
                    tl.to(outgoing.cards, { opacity: 0, scale: 0.95, y: 15, duration: 0.3, stagger: 0.03, ease: 'power2.inOut' }, 0);

                    gsap.killTweensOf(incoming.cards);
                    gsap.set(incoming.element, { opacity: 1 });
                    gsap.set(incoming.cards, { opacity: 0, scale: 1.05, y: -20 });
                    tl.to(incoming.cards, { opacity: 1, scale: 1, y: 0, duration: 0.5, stagger: 0.05, ease: 'power3.out' }, 0.1);
                } else {
                    isTransitioning = false;
                }
            };

            button?.addEventListener('click', handleInteraction);
        });
    }

    // 2. DEDICATED COLLECTIONS PAGE CATEGORY FILTERING & MODAL INTERACTION
    const collectionsPage = document.getElementById('collections-page');
    if (!collectionsPage) return;

    const filterBtns = Array.from(document.querySelectorAll('.cat-filter-btn'));
    const galleryCards = Array.from(document.querySelectorAll('.product-gallery-card'));
    const countIndicator = document.getElementById('gallery-count-indicator');

    if (filterBtns.length && galleryCards.length) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetFilter = btn.getAttribute('data-filter');

                // Update nav button active states
                filterBtns.forEach(b => {
                    if (b === btn) {
                        b.classList.add('active', 'bg-[#8c7b6d]', 'text-white', 'border-[#8c7b6d]', 'shadow-sm');
                        b.classList.remove('bg-white/70', 'text-stone-700', 'border-stone-300');
                    } else {
                        b.classList.remove('active', 'bg-[#8c7b6d]', 'text-white', 'border-[#8c7b6d]', 'shadow-sm');
                        b.classList.add('bg-white/70', 'text-stone-700', 'border-stone-300');
                    }
                });

                // Filter items
                let visibleCount = 0;

                galleryCards.forEach(card => {
                    const cardCategories = (card.getAttribute('data-category') || '').split(' ');
                    const matches = targetFilter === 'all' || cardCategories.includes(targetFilter);

                    if (matches) {
                        visibleCount++;
                        card.style.display = 'block';
                        gsap.to(card, {
                            opacity: 1,
                            scale: 1,
                            y: 0,
                            duration: 0.4,
                            ease: 'power2.out'
                        });
                    } else {
                        gsap.to(card, {
                            opacity: 0,
                            scale: 0.95,
                            y: 15,
                            duration: 0.3,
                            ease: 'power2.in',
                            onComplete: () => {
                                card.style.display = 'none';
                            }
                        });
                    }
                });

                if (countIndicator) {
                    const label = targetFilter === 'all' ? 'All' : targetFilter.replace('-', ' ').toUpperCase();
                    countIndicator.textContent = `Showing ${visibleCount} ${label} ${visibleCount === 1 ? 'Work' : 'Works'}`;
                }
            });
        });

        // Staggered reveal on scroll for gallery cards
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            galleryCards.forEach(card => {
                gsap.fromTo(card,
                    { opacity: 0, y: 30 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.6,
                        ease: 'power2.out',
                        scrollTrigger: {
                            trigger: card,
                            start: 'top 88%',
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            });
        }
    }

    // 3. CONCIERGE REQUEST QUOTE MODAL DIALOG
    const modal = document.getElementById('quote-modal');
    const closeBtn = document.getElementById('close-quote-modal');
    const modalTitle = document.getElementById('modal-product-title');
    const modalCat = document.getElementById('modal-product-category');
    const modalImg = document.getElementById('modal-product-img');
    const modalForm = document.getElementById('quote-modal-form');
    const successNotice = document.getElementById('quote-success-notice');

    if (modal) {
        document.querySelectorAll('.open-quote-modal').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const title = btn.getAttribute('data-product-title') || 'Furniture Piece';
                const cat = btn.getAttribute('data-product-category') || 'Bespoke Collection';
                const imgSrc = btn.getAttribute('data-product-img') || '';

                if (modalTitle) modalTitle.textContent = title;
                if (modalCat) modalCat.textContent = cat;
                if (modalImg) modalImg.src = imgSrc;

                // Reset form visibility
                if (modalForm) modalForm.style.display = 'block';
                if (successNotice) successNotice.classList.add('hidden');

                // Show modal
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.classList.add('opacity-100', 'pointer-events-auto');
                const dialog = modal.firstElementChild;
                if (dialog) {
                    gsap.fromTo(dialog, { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: 0.3, ease: 'power2.out' });
                }
            });
        });

        function closeModal() {
            modal.classList.remove('opacity-100', 'pointer-events-auto');
            modal.classList.add('opacity-0', 'pointer-events-none');
        }

        closeBtn?.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('opacity-100')) {
                closeModal();
            }
        });

        modalForm?.addEventListener('submit', (e) => {
            e.preventDefault();
            modalForm.style.display = 'none';
            if (successNotice) successNotice.classList.remove('hidden');
            setTimeout(closeModal, 2500);
        });
    }
}
