import './bootstrap';
import './home';
import './insights';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialize AOS after DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50,
        delay: 0,
        disable: false
    });
});
