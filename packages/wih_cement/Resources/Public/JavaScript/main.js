/**
 * WIH Cement — Main JavaScript
 */

(function () {
    'use strict';

    // ── Mobile Navigation ──────────────────────────────────────────
    const navToggle = document.querySelector('.nav-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', () => {
            const isOpen = mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', String(isOpen));
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!mainNav.contains(e.target) && !navToggle.contains(e.target)) {
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close on Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mainNav.classList.contains('open')) {
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.focus();
            }
        });
    }

    // ── Product Filter ─────────────────────────────────────────────
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card-wrap');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            filterBtns.forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-pressed', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-pressed', 'true');

            productCards.forEach(card => {
                const show = filter === 'all' || card.dataset.category === filter;
                card.style.display = show ? '' : 'none';
            });
        });
    });

    // ── Job Department Filter ──────────────────────────────────────
    window.filterJobs = function (department) {
        const jobCards = document.querySelectorAll('.job-card');
        jobCards.forEach(card => {
            const show = department === 'all' || card.dataset.department === department;
            card.style.display = show ? '' : 'none';
        });
    };

    // ── Product Tabs ───────────────────────────────────────────────
    const tabBtns = document.querySelectorAll('.tab-btn');
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('aria-controls');
            const panel = document.getElementById(targetId);
            if (!panel) return;

            // Deactivate all
            tabBtns.forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            document.querySelectorAll('.tab-panel').forEach(p => {
                p.hidden = true;
            });

            // Activate selected
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
            panel.hidden = false;
        });
    });

    // ── Dealer Map ─────────────────────────────────────────────────
    window.initDealerMap = function () {
        const mapEl = document.getElementById('dealer-map');
        if (!mapEl || typeof google === 'undefined') return;

        const map = new google.maps.Map(mapEl, {
            zoom: 5,
            center: { lat: -1.9403, lng: 29.8739 }, // Rwanda center
        });

        fetch('/?type=1001')
            .then(r => r.json())
            .then(data => {
                data.dealers.forEach(dealer => {
                    if (!dealer.lat || !dealer.lng) return;
                    const marker = new google.maps.Marker({
                        position: { lat: parseFloat(dealer.lat), lng: parseFloat(dealer.lng) },
                        map,
                        title: dealer.name,
                    });
                    const info = new google.maps.InfoWindow({
                        content: `<div class="map-info">
                            <strong>${dealer.name}</strong><br>
                            ${dealer.region}, ${dealer.country}<br>
                            <a href="tel:${dealer.phone}">${dealer.phone}</a>
                        </div>`,
                    });
                    marker.addListener('click', () => info.open(map, marker));
                });
            })
            .catch(console.error);
    };

    // ── Sticky Header Shadow ───────────────────────────────────────
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.style.boxShadow = window.scrollY > 10
                ? '0 4px 20px rgba(0,0,0,0.12)'
                : '0 2px 8px rgba(0,0,0,0.08)';
        }, { passive: true });
    }

    // ── Smooth Scroll for anchor links ────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const target = document.querySelector(anchor.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ── Form Validation ────────────────────────────────────────────
    document.querySelectorAll('.needs-validation').forEach(form => {
        form.addEventListener('submit', (e) => {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });

})();
