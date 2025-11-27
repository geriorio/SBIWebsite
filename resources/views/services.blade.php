@extends('layouts.app')

@push('styles')
@vite(['resources/css/services.css'])
@endpush

@section('content')
    <!-- Services Hero Section -->
    <section class="services-hero-modern">
        <div class="hero-video-background">
            <video autoplay muted loop playsinline class="hero-bg-video">
                <source src="{{ asset('videos/service hero.mp4') }}" type="video/mp4">
            </video>
            <div class="video-overlay"></div>
        </div>
        
        <div class="services-hero-content" data-aos="fade-up">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                OUR SERVICES
            </div>
            <h1 class="hero-heading">
                <span class="text-gradient">Enabling Real Transformation</span>
            </h1>
            <p class="hero-description">
                We help organizations simplify operations, unlock efficiency, and build long-term digital capability. Our services are designed to remove complexity—not add new layers—so your teams can work faster, smarter, and with absolute clarity.
            </p>
        </div>

        <!-- Floating Navigation -->
        <div class="services-nav-floating" data-aos="fade-up" data-aos-delay="400">
            <div class="service-nav-wrapper">
                <a href="#operational-detail" class="service-nav-item" data-index="0">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 7V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span>Operational</span>
                </a>
                <a href="#digital-detail" class="service-nav-item" data-index="1">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M4 10H20M10 4V20" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <span>Digital</span>
                </a>
                <a href="#data-detail" class="service-nav-item" data-index="2">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6 18L10 14L14 18L20 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="10" cy="14" r="2" fill="currentColor"/>
                        </svg>
                    </div>
                    <span>Data</span>
                </a>
                <a href="#capability-detail" class="service-nav-item" data-index="3">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 4L20 8L12 12L4 8L12 4Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M4 12L12 16L20 12" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span>Capability</span>
                </a>
            </div>
        </div>
    </section>

    <!-- What We Help You Solve Section -->
    <section id="services-intro" class="services-intro-section">
        <div class="intro-background">
            <div class="animated-grid-pattern"></div>
            <div class="floating-particles">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
            </div>
        </div>

        <div class="section-container">
            <div class="intro-header" data-aos="fade-up">
                <span class="section-tag-modern">Our Approach</span>
                <h2 class="intro-title">
                    What We Help You <span class="text-gradient">Solve</span>
                </h2>
                <p class="intro-subtitle">
                    Clear solutions for real operational challenges.
                </p>
            </div>

            <div class="intro-content" data-aos="fade-up" data-aos-delay="200">
                <p class="intro-description">
                    Every service is built on <strong>simplification</strong>, <strong>measurable results</strong>, and <strong>sustainable capability building</strong>. No jargon. No unnecessary tools. Just clarity and impact.
                </p>
            </div>
        </div>
    </section>

    <!-- Service Pillars Preview Section -->
    <section class="service-pillars-section">
        <div class="pillars-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
        </div>

        <div class="section-container">
            <!-- Pillar 1: Operational Efficiency & Process Redesign -->
            <div id="operational-detail" class="pillar-card pillar-white" data-aos="fade-right" data-aos-delay="100">
                <div class="pillar-number">01</div>
                <div class="pillar-grid">
                    <div class="pillar-visual">
                        <div class="pillar-image-wrapper">
                            <img src="{{ asset('images/service1.jpg') }}" alt="Operational Efficiency" class="pillar-image">
                            <div class="image-overlay"></div>
                            <div class="pillar-icon-badge">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <circle cx="24" cy="24" r="20" stroke="url(#gradient-op)" stroke-width="2"/>
                                    <path d="M24 14V24L30 30" stroke="url(#gradient-op)" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M14 24H18M30 24H34" stroke="url(#gradient-op)" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pillar-content">
                        <h3 class="pillar-title">Operational Efficiency & Process Redesign</h3>
                        <p class="pillar-description">
                            We help companies work smarter by eliminating bottlenecks, simplifying workflows, and redesigning processes for speed and accuracy. If your team feels overloaded, inconsistent, or slowed down by manual work, this service helps you build a structure that actually supports high performance. From mapping your operations to optimizing every step, we make your business run cleaner, faster, and more reliably.
                        </p>
                        <button onclick="openServiceModal('operational')" class="pillar-cta">
                            <span>Explore Operational Efficiency</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pillar 2: Digital Transformation & System Integration -->
            <div id="digital-detail" class="pillar-card pillar-dark" data-aos="fade-left" data-aos-delay="200">
                <div class="pillar-number dark">02</div>
                <div class="pillar-grid reverse">
                    <div class="pillar-content">
                        <h3 class="pillar-title light">Digital Transformation & System Integration</h3>
                        <p class="pillar-description light">
                            Guiding organizations in choosing the right digital tools—ERP, operational platforms, and business applications—based on their real needs, not vendor pressure. Whether you're selecting an ERP or integrating multiple systems into one ecosystem, we help you build a seamless, efficient digital backbone that reduces manual work and improves decision-making. This includes ERP advisory, Epicor end-to-end implementation, and integrations across HR, supply chain, asset management, call centers, and more.
                        </p>
                        <button onclick="openServiceModal('digital')" class="pillar-cta light">
                            <span>See Digital Transformation Services</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="pillar-visual">
                        <div class="pillar-image-wrapper">
                            <img src="{{ asset('images/service2.jpg') }}" alt="Digital Transformation" class="pillar-image">
                            <div class="image-overlay"></div>
                            <div class="pillar-icon-badge">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <rect x="8" y="8" width="32" height="32" rx="4" stroke="url(#gradient-digital)" stroke-width="2"/>
                                    <path d="M8 16H40M16 8V40" stroke="url(#gradient-digital)" stroke-width="2"/>
                                    <circle cx="24" cy="24" r="6" stroke="url(#gradient-digital)" stroke-width="2"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pillar 3: Data Architecture, Dashboards & Insights -->
            <div id="data-detail" class="pillar-card pillar-white" data-aos="fade-right" data-aos-delay="300">
                <div class="pillar-number">03</div>
                <div class="pillar-grid">
                    <div class="pillar-visual">
                        <div class="pillar-image-wrapper">
                            <img src="{{ asset('images/service3.jpg') }}" alt="Data Architecture" class="pillar-image">
                            <div class="image-overlay"></div>
                            <div class="pillar-icon-badge">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M8 32L16 24L22 30L32 16L40 24" stroke="url(#gradient-data)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="16" cy="24" r="3" fill="url(#gradient-data)"/>
                                    <circle cx="22" cy="30" r="3" fill="url(#gradient-data)"/>
                                    <circle cx="32" cy="16" r="3" fill="url(#gradient-data)"/>
                                    <rect x="6" y="10" width="36" height="30" rx="2" stroke="url(#gradient-data)" stroke-width="2"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="pillar-content">
                        <h3 class="pillar-title">Data Architecture, Dashboards & Insights</h3>
                        <p class="pillar-description">
                            We turn scattered data into a reliable foundation for decision-making through strong data architecture, governance, and intuitive dashboards. If you struggle with inconsistent reports or slow insights, we help you create a single source of truth that leaders can trust. From Power BI dashboards to enterprise data strategy, we make your business more intelligent and data-driven.
                        </p>
                        <button onclick="openServiceModal('data')" class="pillar-cta">
                            <span>Learn About Data Solutions</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pillar 4: Capability Building & Organizational Alignment -->
            <div id="capability-detail" class="pillar-card pillar-dark" data-aos="fade-left" data-aos-delay="400">
                <div class="pillar-number dark">04</div>
                <div class="pillar-grid reverse">
                    <div class="pillar-content">
                        <h3 class="pillar-title light">Capability Building & Organizational Alignment</h3>
                        <p class="pillar-description light">
                            We equip your teams with the skills needed to adopt new systems and work effectively in a digital-first environment. Whether it's ERP usage, analytics, or Power BI, our training programs are customized to your company and delivered through modern learning platforms. This ensures your transformation is sustainable because your people grow alongside the technology.
                        </p>
                        <button onclick="openServiceModal('capability')" class="pillar-cta light">
                            <span>Go to Capability Building</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <div class="pillar-visual">
                        <div class="pillar-image-wrapper">
                            <img src="{{ asset('images/service4.jpg') }}" alt="Capability Building" class="pillar-image">
                            <div class="image-overlay"></div>
                            <div class="pillar-icon-badge">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M24 8L40 16L24 24L8 16L24 8Z" stroke="url(#gradient-cap)" stroke-width="2" stroke-linejoin="round"/>
                                    <path d="M8 24L24 32L40 24M8 32L24 40L40 32" stroke="url(#gradient-cap)" stroke-width="2" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Companies Choose SBI Section -->
    <section class="why-choose-sbi-section">
        <div class="choose-background">
            <div class="radial-gradient-1"></div>
            <div class="radial-gradient-2"></div>
            <div class="mesh-pattern"></div>
        </div>

        <div class="section-container">
            <div class="choose-header" data-aos="fade-up">
                <h2 class="choose-main-title">
                    Why Companies Choose <span class="text-gradient">SBI</span>
                </h2>
            </div>

            <div class="choose-grid">
                <!-- Value Point 1 -->
                <div class="choose-value-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="value-icon-wrapper">
                        <div class="icon-glow glow-1"></div>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" class="value-icon">
                            <path d="M32 12L52 22L32 32L12 22L32 12Z" stroke="url(#gradient-impact)" stroke-width="2.5" stroke-linejoin="round"/>
                            <path d="M12 32L32 42L52 32M12 42L32 52L52 42" stroke="url(#gradient-impact)" stroke-width="2.5" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="value-title">Measurable Impact</h3>
                    <p class="value-description">
                        We design solutions that deliver real improvements in speed, clarity, and cost efficiency.
                    </p>
                    <div class="value-accent-line"></div>
                </div>

                <!-- Value Point 2 -->
                <div class="choose-value-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="value-icon-wrapper">
                        <div class="icon-glow glow-2"></div>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" class="value-icon">
                            <path d="M32 8L32 56M20 20L32 32L44 20M20 44L32 32L44 44" stroke="url(#gradient-scale)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="32" cy="32" r="24" stroke="url(#gradient-scale)" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="value-title">Built to Scale</h3>
                    <p class="value-description">
                        Your systems and processes will grow with your business—not hold it back.
                    </p>
                    <div class="value-accent-line"></div>
                </div>

                <!-- Value Point 3 -->
                <div class="choose-value-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="value-icon-wrapper">
                        <div class="icon-glow glow-3"></div>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" class="value-icon">
                            <circle cx="32" cy="20" r="8" stroke="url(#gradient-human)" stroke-width="2.5"/>
                            <path d="M16 52C16 42 22 36 32 36C42 36 48 42 48 52" stroke="url(#gradient-human)" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M24 28C24 28 22 30 22 32M40 28C40 28 42 30 42 32" stroke="url(#gradient-human)" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="value-title">Practical, Human-Centered Approach</h3>
                    <p class="value-description">
                        Every recommendation is based on how people actually work, not theoretical frameworks.
                    </p>
                    <div class="value-accent-line"></div>
                </div>

                <!-- Value Point 4 -->
                <div class="choose-value-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="value-icon-wrapper">
                        <div class="icon-glow glow-4"></div>
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" class="value-icon">
                            <circle cx="32" cy="32" r="24" stroke="url(#gradient-root)" stroke-width="2"/>
                            <path d="M32 16L32 48M24 32L32 24L40 32" stroke="url(#gradient-root)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="32" cy="32" r="4" fill="url(#gradient-root)"/>
                        </svg>
                    </div>
                    <h3 class="value-title">Deep Root-Cause Fixing</h3>
                    <p class="value-description">
                        We don't patch symptoms. We fix what slows your company down at its core.
                    </p>
                    <div class="value-accent-line"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="services-cta-section">
        <div class="cta-background">
            <div class="animated-waves">
                <div class="wave wave-1"></div>
                <div class="wave wave-2"></div>
                <div class="wave wave-3"></div>
            </div>
            <div class="particles-overlay"></div>
        </div>

        <div class="section-container">
            <div class="cta-content" data-aos="zoom-in">
                <div class="cta-icon-wrapper">
                    <svg width="120" height="120" viewBox="0 0 120 120" fill="none">
                        <circle cx="60" cy="60" r="50" stroke="url(#ctaGradient)" stroke-width="3" opacity="0.3"/>
                        <circle cx="60" cy="60" r="40" stroke="url(#ctaGradient)" stroke-width="3" opacity="0.6"/>
                        <path d="M40 60L55 75L80 45" stroke="url(#ctaGradient)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="ctaGradient" x1="0" y1="0" x2="120" y2="120">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="100%" stop-color="#0EA5E9"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <h2 class="cta-title">Ready to <span class="text-gradient">Transform?</span></h2>
                <p class="cta-subtitle">Let's discuss your goals and see how we can help.</p>
                <button onclick="openContactFormModal()" class="cta-button">
                    <span>Contact Us</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- SVG Gradients -->
    <svg width="0" height="0" style="position: absolute;">
        <defs>
            <linearGradient id="gradient-op" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#0EA5E9"/>
                <stop offset="100%" stop-color="#0284C7"/>
            </linearGradient>
            <linearGradient id="gradient-digital" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#00E5FF"/>
                <stop offset="100%" stop-color="#00B8D4"/>
            </linearGradient>
            <linearGradient id="gradient-data" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#76FF03"/>
                <stop offset="100%" stop-color="#64DD17"/>
            </linearGradient>
            <linearGradient id="gradient-cap" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#AA00FF"/>
                <stop offset="100%" stop-color="#6200EA"/>
            </linearGradient>
            <linearGradient id="gradient-impact" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#0EA5E9"/>
                <stop offset="100%" stop-color="#0284C7"/>
            </linearGradient>
            <linearGradient id="gradient-scale" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#0EA5E9"/>
                <stop offset="100%" stop-color="#0284C7"/>
            </linearGradient>
            <linearGradient id="gradient-human" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#0EA5E9"/>
                <stop offset="100%" stop-color="#0284C7"/>
            </linearGradient>
            <linearGradient id="gradient-root" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#0EA5E9"/>
                <stop offset="100%" stop-color="#0284C7"/>
            </linearGradient>
        </defs>
    </svg>

    <!-- Service Modal persis homepage -->
    @include('components.service-modal')
    @include('components.service-contact-modal')

@endsection

@push('scripts')
@vite(['resources/js/services.js'])
@endpush
