import './bootstrap';
import './home';
import './insights';
import './career';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Function to initialize AOS
function initializeAOS() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: false,
            offset: 100,
            delay: 0,
            disable: false,
            throttleDelay: 99,
            anchorPlacement: 'top-bottom'
        });
    }
}

// Wait for DOM to be ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            initializeAOS();
        }, 50);
    });
} else {
    // DOM is already ready
    setTimeout(() => {
        initializeAOS();
    }, 50);
}

// Refresh AOS when window loads (images, fonts loaded)
window.addEventListener('load', () => {
    if (typeof AOS !== 'undefined' && AOS.refresh) {
        AOS.refresh();
    }
});

// Also refresh on resize
window.addEventListener('resize', () => {
    if (typeof AOS !== 'undefined' && AOS.refresh) {
        AOS.refresh();
    }
});
