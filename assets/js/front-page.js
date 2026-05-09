(function () {
    'use strict';

    var heroVideo = document.querySelector('.hero-video');
    if (heroVideo) {
        heroVideo.addEventListener('canplay', function handler() {
            heroVideo.classList.add('is-ready');
            heroVideo.removeEventListener('canplay', handler);
        });
        // Fallback: si el vídeo ya estaba cacheado y canplay no vuelve a disparar
        if (heroVideo.readyState >= 3) {
            heroVideo.classList.add('is-ready');
        }
    }

    var rotator = document.getElementById('heroRotator');
    if (!rotator) return;

    var rots  = rotator.querySelectorAll('.rot');
    var progs = document.querySelectorAll('.hero-progress .prog');
    var current = 0;
    var INTERVAL = 6000;

    function advance() {
        rots[current].classList.remove('is-active');
        if (progs[current]) progs[current].classList.remove('is-active');
        current = (current + 1) % rots.length;
        rots[current].classList.add('is-active');
        if (progs[current]) progs[current].classList.add('is-active');
    }

    setInterval(advance, INTERVAL);
})();
