(function () {
    'use strict';

    var header  = document.getElementById('siteHeader');
    var toggle  = document.getElementById('navToggle');

    // Header: add .is-scrolled when user scrolls past 40px
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('is-scrolled', window.scrollY > 40);
        }, { passive: true });
    }

    // Hamburger: toggle mobile nav
    if (header && toggle) {
        toggle.addEventListener('click', function () {
            var isOpen = header.classList.toggle('nav-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            toggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
        });

        // Close when a nav link is clicked
        header.querySelectorAll('.site-nav a, .nav-cta').forEach(function (link) {
            link.addEventListener('click', function () {
                header.classList.remove('nav-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Open menu');
            });
        });
    }

    // Footer: auto-update copyright year
    var yearEl = document.querySelector('.js-year');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }
})();
