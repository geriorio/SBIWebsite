@extends('layouts.app')

@section('content')
    <!-- Contact Hero Section -->
    <section class="contact-hero-modern">
        <div class="contact-hero-bg">
            <img src="{{ asset('images/contact-hero.jpg') }}" alt="Contact Us" class="hero-bg-img">
            <div class="hero-overlay"></div>
        </div>
        
        <div class="hero-content" data-aos="fade-up">
            <h1 class="hero-title">
                <span>Let's Connect & Build</span><br><span class="text-gradient">Together</span>
            </h1>
            <p class="hero-subtitle">
                Digital transformation doesn't have to be overwhelming. Whether you want to explore a partnership, discuss a specific project, or simply ask a question, our team is here to support you.
            </p>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="contact-methods-section">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Choose Your <span class="text-gradient">Preferred Way</span> to Connect</h2>
                <p class="section-description">
                    We respond quickly, clearly, and with the intention to help. Pick the method that works best for you.
                </p>
            </div>

            <div class="methods-grid">
                <!-- WhatsApp -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="method-icon-wrapper">
                        <img src="{{ asset('images/whatsapp.jpg') }}" alt="WhatsApp" class="method-icon-img">
                    </div>
                    <h3 class="method-title">WhatsApp</h3>
                    <p class="method-description">Fastest Response</p>
                    <p class="method-details">Get instant responses for quick questions and immediate support</p>
                    <a href="https://wa.me/62211234567" target="_blank" class="method-link">Message us →</a>
                </div>

                <!-- Email -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="method-icon-wrapper">
                        <img src="{{ asset('images/gmail.jpg') }}" alt="Email" class="method-icon-img">
                    </div>
                    <h3 class="method-title">Email Us</h3>
                    <p class="method-description">Detailed Inquiries</p>
                    <p class="method-details">Send us detailed information about your project or inquiry</p>
                    <a href="https://mail.google.com" target="_blank" class="method-link">Send email →</a>
                </div>

                <!-- Consultation -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="method-icon-wrapper">
                        <img src="{{ asset('images/calendar.jpg') }}" alt="Calendar" class="method-icon-img">
                    </div>
                    <h3 class="method-title">Book a 1:1 Consultation</h3>
                    <p class="method-description">Personalized Discussion</p>
                    <p class="method-details">Schedule a meeting with one of our expert consultants</p>
                    <a href="https://calendar.google.com" target="_blank" class="method-link">Schedule call →</a>
                </div>

                <!-- Visit Office -->
                <div class="method-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="method-icon-wrapper">
                        <img src="{{ asset('images/office.jpg') }}" alt="Office" class="method-icon-img">
                    </div>
                    <h3 class="method-title">Visit Our Office</h3>
                    <p class="method-description">In Person Meeting</p>
                    <p class="method-details">Come meet our team at our Jakarta headquarters</p>
                    <a href="#" onclick="openMapModal()" class="method-link">Get directions →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Information Section -->
    <section class="office-section" id="office-info">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Visit Our <span class="text-gradient">Jakarta Office</span></h2>
                <p class="section-description">
                    We're located in the heart of Jakarta and ready to welcome you
                </p>
            </div>

            <div class="office-grid">
                <!-- Address -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="office-icon">📍</div>
                    <h3 class="office-title">Address</h3>
                    <div class="office-content">
                        <p>Samudra Biru Indonesia<br/>Jakarta, Indonesia</p>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="office-icon">🕐</div>
                    <h3 class="office-title">Office Hours</h3>
                    <div class="office-content">
                        <p><strong>Monday – Friday:</strong><br/>09:00 – 18:00</p>
                        <p style="margin-top: 0.5rem;"><strong>Saturday – Sunday:</strong><br/>Closed</p>
                    </div>
                </div>

                <!-- Quick Contact -->
                <div class="office-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="office-icon">☎️</div>
                    <h3 class="office-title">Quick Contact</h3>
                    <div class="office-content">
                        <p><strong>Email:</strong><br/><a href="mailto:info@samuderabiru.com" class="office-link">info@samuderabiru.com</a></p>
                        <p style="margin-top: 0.5rem;"><strong>Phone:</strong><br/><a href="tel:+62211234567" class="office-link">+62 21 1234 5678</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Modal -->
        <div id="mapModal" class="map-modal">
            <div class="map-modal-content">
                <span class="map-modal-close">&times;</span>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30092.63233558573!2d112.73848657910152!3d-7.310317199999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fcbaa40b4931%3A0x38ae14627e145f4b!2sPT%20Samator%20Indo%20Gas%2C%20Tbk!5e1!3m2!1sen!2sid!4v1763545131000!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
<script>
// Map modal functionality
function openMapModal() {
    const modal = document.getElementById('mapModal');
    if (modal) {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function closeMapModal() {
    const modal = document.getElementById('mapModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

// Close modal when clicking the X
const closeBtn = document.querySelector('.map-modal-close');
if (closeBtn) {
    closeBtn.addEventListener('click', closeMapModal);
}

// Close modal when clicking outside
window.addEventListener('click', function(event) {
    const modal = document.getElementById('mapModal');
    if (event.target === modal) {
        closeMapModal();
    }
});

// Smooth scroll to office info
document.querySelectorAll('a[href="#office-info"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector('#office-info');
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>
@endpush
