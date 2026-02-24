import './bootstrap';

import Alpine from 'alpinejs';

import '@fortawesome/fontawesome-free/css/all.min.css';

window.Alpine = Alpine;

Alpine.start();

function initScrollVideos() {
    const videos = document.querySelectorAll(".scroll-video");

    if (videos.length === 0) return;

    const options = {
        root: null, // use the viewport
        rootMargin: '0px',
        threshold: 0.5 // trigger when 50% of the video is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.play().catch(err => {
                    console.log('Video play error:', err);
                }); // Play when in view
            } else {
                entry.target.pause(); // Pause when out of view
            }
        });
    }, options);

    videos.forEach(video => {
        observer.observe(video);
    });
}

// Run when DOM is ready and also on page load
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollVideos);
} else {
    initScrollVideos();
}
