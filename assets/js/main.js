/**
 * Suraj Mane Portfolio - Main JavaScript
 * Handles sticky navbar scrollspy and smooth navigation
 */

document.addEventListener('DOMContentLoaded', () => {
    initScrollSpy();
    initTypewriter();
    initExpertiseScroll();
    initTimelineScroll();
    initTimelineFilters();
    initProjectFilters();
    initContactForm();
    initFlipCard();
    initMobileNav();
});

/**
 * Initializes automatic active menu switching based on current scroll position
 */
function initScrollSpy() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    if (sections.length === 0 || navLinks.length === 0) return;

    let lastActiveId = '';

    function onScroll() {
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        const offset = 140; // Offset for sticky navbar header

        let currentActiveId = '';

        sections.forEach(section => {
            const top = section.offsetTop - offset;
            const height = section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPosition >= top && scrollPosition < top + height) {
                currentActiveId = id;
            }
        });

        // Edge case: when user reaches the very bottom of the page, activate the last section
        if ((window.innerHeight + window.scrollY) >= document.documentElement.scrollHeight - 20) {
            const lastSection = sections[sections.length - 1];
            if (lastSection) {
                currentActiveId = lastSection.getAttribute('id');
            }
        }

        // Default to first section if at the top
        if (!currentActiveId && sections.length > 0 && scrollPosition < sections[0].offsetTop) {
            currentActiveId = sections[0].getAttribute('id');
        }

        if (currentActiveId && currentActiveId !== lastActiveId) {
            lastActiveId = currentActiveId;
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === '#' + currentActiveId) {
                    link.classList.add('active');
                    if (window.innerWidth <= 768 && typeof link.scrollIntoView === 'function') {
                        link.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                    }
                } else {
                    link.classList.remove('active');
                }
            });
        }
    }

    // Attach scroll listener with smooth passive performance
    window.addEventListener('scroll', onScroll, { passive: true });
    
    // Trigger once on page load to set initial state
    onScroll();

    // Smooth scroll for nav link clicks
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    const targetTop = targetEl.offsetTop - 90;
                    window.scrollTo({
                        top: targetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
}

/**
 * Typewriter effect for hero background title ("DEVELOPER")
 */
function initTypewriter() {
    const title = document.querySelector('.hero-bg-title');
    if (!title) return;

    const fullText = title.textContent.trim();
    title.textContent = '';
    let index = 0;
    const speed = 130; // speed in ms per character

    function typeChar() {
        if (index < fullText.length) {
            title.textContent += fullText.charAt(index);
            index++;
            setTimeout(typeChar, speed);
        }
    }

    // Start typing smoothly after page load
    setTimeout(typeChar, 300);
}

/**
 * Sticky Expertise Section — updates sticky number, title and dots as items scroll
 */
function initExpertiseScroll() {
    const items = document.querySelectorAll('.expertise-item');
    const stickyNum = document.getElementById('stickyNum');
    const stickyTitle = document.getElementById('stickyTitle');

    if (!items.length || !stickyNum || !stickyTitle) return;

    let currentIndex = -1;

    function checkActiveItem() {
        const triggerPoint = window.innerHeight * 0.45;

        let activeIndex = 0;

        items.forEach((item, index) => {
            const rect = item.getBoundingClientRect();
            if (rect.top <= triggerPoint) {
                activeIndex = index;
            }
        });

        if (activeIndex !== currentIndex) {
            currentIndex = activeIndex;
            const targetItem = items[currentIndex];
            const newStep = targetItem.getAttribute('data-step') || '01';
            const newTitle = targetItem.getAttribute('data-title') || '';

            // Smooth fade transition
            stickyNum.style.opacity = '0.3';
            stickyTitle.style.opacity = '0.3';

            setTimeout(() => {
                stickyNum.textContent = newStep;
                stickyTitle.textContent = newTitle;
                stickyNum.style.opacity = '1';
                stickyTitle.style.opacity = '1';
            }, 80);
        }
    }

    window.addEventListener('scroll', checkActiveItem, { passive: true });
    window.addEventListener('resize', checkActiveItem, { passive: true });
    checkActiveItem();
}

/**
 * Timeline Scroll Reveal — reveals items smoothly as user scrolls down
 */
function initTimelineScroll() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    if (!timelineItems.length) return;

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -40px 0px'
        });

        timelineItems.forEach(item => observer.observe(item));
    } else {
        // Fallback for older browsers
        timelineItems.forEach(item => item.classList.add('revealed'));
    }
}

/**
 * Timeline Filter Tabs — filter between All, Work, and Education
 */
function initTimelineFilters() {
    const section = document.getElementById('experience');
    if (!section) return;

    const filterBtns = section.querySelectorAll('.t-filter-btn');
    const items = section.querySelectorAll('.timeline-item');

    if (!filterBtns.length || !items.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            items.forEach(item => {
                const itemType = item.getAttribute('data-type');
                if (filter === 'all' || itemType === filter) {
                    item.classList.remove('filtered-out');
                    // re-trigger reveal smoothly
                    setTimeout(() => item.classList.add('revealed'), 50);
                } else {
                    item.classList.add('filtered-out');
                }
            });
        });
    });
}

/**
 * Project Filter Tabs — filter project cards by data-category
 */
function initProjectFilters() {
    const section = document.getElementById('projects');
    if (!section) return;

    const filterBtns = section.querySelectorAll('.proj-filter-btn');
    const cards = section.querySelectorAll('.proj-card');

    if (!filterBtns.length || !cards.length) return;

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // Update active tab only within projects section
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Show / hide cards based on their data-category attribute
            cards.forEach(card => {
                const cats = card.getAttribute('data-category') || '';
                if (filter === 'all' || cats.split(' ').includes(filter)) {
                    card.classList.remove('proj-hidden');
                } else {
                    card.classList.add('proj-hidden');
                }
            });
        });
    });
}

/**
 * Contact Form AJAX Submission Handler
 */
/**
 * Global Contact Form Handler (works both inline and via event listener)
 */
async function handleContactFormSubmit(e) {
    if (e && e.preventDefault) e.preventDefault();

    const form = document.getElementById('portfolioContactForm');
    if (!form) return false;

    // Check HTML5 validity (required fields) before doing anything
    if (!form.checkValidity()) {
        form.reportValidity();
        return false;
    }

    // Prevent double submission while in flight
    if (form.dataset.submitting === 'true') {
        return false;
    }
    form.dataset.submitting = 'true';

    const submitBtn = document.getElementById('formSubmitBtn');
    const statusMsg = document.getElementById('formStatusMsg');

    // UI Loading State
    if (submitBtn) {
        submitBtn.disabled = true;
        const btnText = submitBtn.querySelector('.btn-text');
        if (btnText) btnText.textContent = 'Sending...';
    }

    if (statusMsg) {
        statusMsg.style.display = 'none';
        statusMsg.className = 'c-status-msg';
        statusMsg.textContent = '';
    }

    const formData = new FormData(form);
    formData.append('is_ajax', '1');

    try {
        const response = await fetch(form.action || 'send-mail.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json'
            },
            body: formData
        });

        const result = await response.json();

        if (statusMsg) {
            statusMsg.style.display = 'block';
            const isSuccess = (result.status === 'success') || (result.success === 'true') || (result.success === true);
            if (isSuccess) {
                statusMsg.className = 'c-status-msg c-status-success';
                statusMsg.textContent = result.message || 'Thank you! Your message has been sent successfully.';
                form.reset();
            } else {
                statusMsg.className = 'c-status-msg c-status-error';
                statusMsg.textContent = result.message || 'Something went wrong. Please try again.';
            }
        }
    } catch (err) {
        if (statusMsg) {
            statusMsg.style.display = 'block';
            statusMsg.className = 'c-status-msg c-status-error';
            statusMsg.textContent = 'Unable to send message right now. Please email directly at surajrmane45@gmail.com.';
        }
    } finally {
        form.dataset.submitting = 'false';
        if (submitBtn) {
            submitBtn.disabled = false;
            const btnText = submitBtn.querySelector('.btn-text');
            if (btnText) btnText.textContent = 'Send Message';
        }
    }

    return false;
}

window.handleContactFormSubmit = handleContactFormSubmit;

function initContactForm() {
    const form = document.getElementById('portfolioContactForm');
    if (form) form.addEventListener('submit', handleContactFormSubmit);
}

/**
 * Mobile tap toggle for profile flip card
 */
function initFlipCard() {
    const flipCard = document.querySelector('.flip-card');
    if (!flipCard) return;
    flipCard.addEventListener('click', () => {
        flipCard.classList.toggle('flipped');
    });
}

/**
 * Mobile Hamburger Nav Drawer — open/close with scroll-spy active link sync
 */
function initMobileNav() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobNavOverlay = document.getElementById('mobNavOverlay');
    const mobNavClose = document.getElementById('mobNavClose');
    const mobNavLinks = document.querySelectorAll('.mob-nav-link');

    if (!hamburgerBtn || !mobNavOverlay) return;

    function openMenu() {
        mobNavOverlay.classList.add('is-open');
        hamburgerBtn.classList.add('is-open');
        hamburgerBtn.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        mobNavOverlay.classList.remove('is-open');
        hamburgerBtn.classList.remove('is-open');
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    hamburgerBtn.addEventListener('click', () => {
        if (mobNavOverlay.classList.contains('is-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    if (mobNavClose) {
        mobNavClose.addEventListener('click', closeMenu);
    }

    // Close when clicking backdrop (outside drawer)
    mobNavOverlay.addEventListener('click', (e) => {
        if (e.target === mobNavOverlay) closeMenu();
    });

    // Close on nav link click and smooth scroll
    mobNavLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                e.preventDefault();
                closeMenu();
                setTimeout(() => {
                    const targetEl = document.querySelector(targetId);
                    if (targetEl) {
                        const targetTop = targetEl.offsetTop - 90;
                        window.scrollTo({ top: targetTop, behavior: 'smooth' });
                    }
                }, 80);
            }
        });
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
    });

    // Sync active state between desktop scrollspy and mobile drawer links
    const desktopLinks = document.querySelectorAll('.nav-link');
    const observer = new MutationObserver(() => {
        desktopLinks.forEach(dl => {
            if (dl.classList.contains('active')) {
                const href = dl.getAttribute('href');
                mobNavLinks.forEach(ml => {
                    if (ml.getAttribute('href') === href) {
                        ml.classList.add('active');
                    } else {
                        ml.classList.remove('active');
                    }
                });
            }
        });
    });

    desktopLinks.forEach(dl => {
        observer.observe(dl, { attributes: true, attributeFilter: ['class'] });
    });
}
