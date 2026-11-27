/* SARL brand interactions: header, logo motion, reveals, counters, case-study lightbox. */
(function () {
    'use strict';

    var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }

    ready(function () {
        var header = document.querySelector('.sarl-header');
        var logos = document.querySelectorAll('.sarl-logo');

        /* Header turns solid once the page scrolls; logo ribbons turn with the scroll */
        var ticking = false;
        function onScroll() {
            var y = window.scrollY || window.pageYOffset;
            if (header) {
                header.classList.toggle('is-scrolled', y > 30);
            }
            if (!reduceMotion) {
                var spin = (y * 0.12).toFixed(2);
                for (var i = 0; i < logos.length; i++) {
                    logos[i].style.setProperty('--spin', spin);
                }
            }
            ticking = false;
        }
        window.addEventListener('scroll', function () {
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(onScroll);
            }
        }, { passive: true });
        onScroll();

        /* Logo intro: once per visit, on the header logo */
        var headerLogo = header && header.querySelector('.navbar-brand .sarl-logo');
        var seen = false;
        try {
            seen = sessionStorage.getItem('sarl-logo-intro') === '1';
            sessionStorage.setItem('sarl-logo-intro', '1');
        } catch (e) { /* storage unavailable: just play it */ }
        if (headerLogo && !seen && !reduceMotion) {
            headerLogo.classList.add('is-intro');
            setTimeout(function () { headerLogo.classList.remove('is-intro'); }, 1700);
        }

        /* Reveal on scroll */
        var reveals = document.querySelectorAll('.sarl-reveal');
        if ('IntersectionObserver' in window && !reduceMotion) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        io.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '0px 0px -10% 0px' });
            reveals.forEach(function (el) { io.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add('is-visible'); });
        }

        /* Count-up numbers: <span data-count-to="300" data-suffix="+">300+</span> */
        var counters = document.querySelectorAll('[data-count-to]');
        function runCounter(el) {
            var target = parseInt(el.getAttribute('data-count-to'), 10) || 0;
            var suffix = el.getAttribute('data-suffix') || '';
            var start = null;
            var duration = 1600;
            function step(ts) {
                if (!start) { start = ts; }
                var p = Math.min((ts - start) / duration, 1);
                var eased = 1 - Math.pow(1 - p, 3);
                el.textContent = Math.round(target * eased) + suffix;
                if (p < 1) { window.requestAnimationFrame(step); }
            }
            window.requestAnimationFrame(step);
        }
        if ('IntersectionObserver' in window && !reduceMotion) {
            var co = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        runCounter(entry.target);
                        co.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.6 });
            counters.forEach(function (el) { co.observe(el); });
        }

        /* Case-study lightbox */
        var links = Array.prototype.slice.call(document.querySelectorAll('[data-cs-lightbox]'));
        if (links.length) {
            var box = document.createElement('div');
            box.className = 'cs-lightbox';
            box.setAttribute('role', 'dialog');
            box.setAttribute('aria-modal', 'true');
            box.setAttribute('aria-label', 'Project image viewer');
            box.innerHTML =
                '<img alt="">' +
                '<button type="button" class="cs-lightbox__close" aria-label="Close"><i class="bi bi-x-lg"></i></button>' +
                '<button type="button" class="cs-lightbox__prev" aria-label="Previous image"><i class="bi bi-arrow-left"></i></button>' +
                '<button type="button" class="cs-lightbox__next" aria-label="Next image"><i class="bi bi-arrow-right"></i></button>' +
                '<div class="cs-lightbox__count"></div>';
            document.body.appendChild(box);
            var img = box.querySelector('img');
            var count = box.querySelector('.cs-lightbox__count');
            var current = 0;
            var lastFocus = null;

            var show = function (i) {
                current = (i + links.length) % links.length;
                var link = links[current];
                img.src = link.getAttribute('href');
                var thumb = link.querySelector('img');
                img.alt = thumb ? thumb.alt : '';
                count.textContent = (current + 1) + ' / ' + links.length;
            };
            var open = function (i) {
                lastFocus = document.activeElement;
                show(i);
                box.classList.add('is-open');
                document.body.style.overflow = 'hidden';
                box.querySelector('.cs-lightbox__close').focus();
            };
            var close = function () {
                box.classList.remove('is-open');
                document.body.style.overflow = '';
                if (lastFocus) { lastFocus.focus(); }
            };

            links.forEach(function (link, i) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    open(i);
                });
            });
            box.querySelector('.cs-lightbox__close').addEventListener('click', close);
            box.querySelector('.cs-lightbox__prev').addEventListener('click', function () { show(current - 1); });
            box.querySelector('.cs-lightbox__next').addEventListener('click', function () { show(current + 1); });
            box.addEventListener('click', function (e) {
                if (e.target === box) { close(); }
            });
            document.addEventListener('keydown', function (e) {
                if (!box.classList.contains('is-open')) { return; }
                if (e.key === 'Escape') { close(); }
                if (e.key === 'ArrowLeft') { show(current - 1); }
                if (e.key === 'ArrowRight') { show(current + 1); }
            });
            var touchX = null;
            box.addEventListener('touchstart', function (e) { touchX = e.touches[0].clientX; }, { passive: true });
            box.addEventListener('touchend', function (e) {
                if (touchX === null) { return; }
                var dx = e.changedTouches[0].clientX - touchX;
                if (Math.abs(dx) > 50) { show(current + (dx < 0 ? 1 : -1)); }
                touchX = null;
            });
        }
    });
})();
