@extends('layouts.app')

@section('content')
    <!-- Hero Section with Video Background -->
    <section class="hero-modern" id="home">
        <!-- Video Background -->
        <div class="video-background">
            <video autoplay muted loop playsinline poster="/images/hero-poster.jpg">
                <source src="/videos/hero-bg.mp4" type="video/mp4">
                <source src="/videos/hero-bg.webm" type="video/webm">
            </video>
            <div class="video-overlay"></div>
        </div>
        
        <!-- Particles Overlay -->
        <div class="particles-bg"></div>
        <div class="hero-gradient"></div>
        
        <div class="hero-content">
            <div class="hero-badge" data-aos="fade-down">
                <span class="badge-dot"></span>
                Industry 4.0 Solutions
            </div>
            
            <h1 class="hero-heading" data-aos="fade-right" data-aos-delay="100">
                <span class="text-gradient">Transform</span> Your Business
                <br/>
                <span class="typing-text">Navigate Digital Excellence</span>
            </h1>
            
            <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                Empowering Indonesian industries with cutting-edge technology solutions,
                innovative process transformation, and sustainable growth strategies for the digital age.
            </p>
            
            <div class="hero-ctas" data-aos="fade-up" data-aos-delay="300">
                <a href="#services" class="btn-primary">
                    <span>Explore Solutions</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 13L13 7M13 7H7M13 7V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
                <a href="#contact" class="btn-secondary">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="2"/>
                        <path d="M10 6V10L13 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Book Consultation</span>
                </a>
            </div>

            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number" data-target="150">0</div>
                    <div class="stat-label">Projects Delivered</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-number" data-target="98">0</div>
                    <div class="stat-label">Client Satisfaction</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-number" data-target="15">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>

        <div class="hero-visual">
            <div class="floating-card card-1">
                <div class="card-icon">📊</div>
                <div class="card-text">Data Analytics</div>
            </div>
            <div class="floating-card card-2">
                <div class="card-icon">⚡</div>
                <div class="card-text">Fast Delivery</div>
            </div>
            <div class="floating-card card-3">
                <div class="card-icon">🔒</div>
                <div class="card-text">Secure Systems</div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-modern">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">What We Offer</span>
                <h2 class="section-title">Our <span class="text-gradient">Services</span></h2>
                <p class="section-subtitle">Comprehensive solutions tailored to accelerate your digital transformation journey</p>
            </div>

            <div class="services-grid">
                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="url(#gradient1)" stroke-width="2"/>
                            <path d="M16 24L22 30L32 18" stroke="url(#gradient1)" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Business Process Transformation</h3>
                    <p class="service-desc">Streamline operations with intelligent automation and optimized workflows</p>
                    <a href="#" class="service-link">Learn More →</a>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="url(#gradient2)" stroke-width="2"/>
                            <path d="M24 12V24L30 30" stroke="url(#gradient2)" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Renewable Energy Alternatives</h3>
                    <p class="service-desc">Sustainable energy solutions for a greener, more efficient future</p>
                    <a href="#" class="service-link">Learn More →</a>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 20C12 14.5 16.5 10 24 10C31.5 10 36 14.5 36 20C36 25.5 31.5 30 24 30" stroke="url(#gradient3)" stroke-width="2"/>
                            <circle cx="24" cy="36" r="6" stroke="url(#gradient3)" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Employee Talent Management</h3>
                    <p class="service-desc">Develop and retain top talent with modern HR solutions</p>
                    <a href="#" class="service-link">Learn More →</a>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="10" y="10" width="28" height="28" rx="4" stroke="url(#gradient4)" stroke-width="2"/>
                            <path d="M18 20L24 26L30 20" stroke="url(#gradient4)" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Business Process Optimization</h3>
                    <p class="service-desc">Maximize efficiency and reduce costs through smart optimization</p>
                    <a href="#" class="service-link">Learn More →</a>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 8L36 16V32L24 40L12 32V16L24 8Z" stroke="url(#gradient5)" stroke-width="2"/>
                            <circle cx="24" cy="24" r="6" stroke="url(#gradient5)" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Asset Management System</h3>
                    <p class="service-desc">Track, manage, and optimize your assets with intelligent systems</p>
                    <a href="#" class="service-link">Learn More →</a>
                </div>
            </div>

            <svg width="0" height="0">
                <defs>
                    <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#00E5FF"/>
                        <stop offset="100%" stop-color="#00B8D4"/>
                    </linearGradient>
                    <linearGradient id="gradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#76FF03"/>
                        <stop offset="100%" stop-color="#64DD17"/>
                    </linearGradient>
                    <linearGradient id="gradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#FF6D00"/>
                        <stop offset="100%" stop-color="#FF3D00"/>
                    </linearGradient>
                    <linearGradient id="gradient4" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#AA00FF"/>
                        <stop offset="100%" stop-color="#6200EA"/>
                    </linearGradient>
                    <linearGradient id="gradient5" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#FFD600"/>
                        <stop offset="100%" stop-color="#FFAB00"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-modern">
        <div class="section-container">
            <div class="about-content">
                <div class="about-left" data-aos="fade-right">
                    <span class="section-tag">Who We Are</span>
                    <h2 class="section-title">Leading Indonesia's <span class="text-gradient">Digital Revolution</span></h2>
                    <p class="about-text">
                        Samudera Biru Internasional stands at the forefront of technological innovation, 
                        partnering with Indonesian industries to navigate the complexities of Industry 4.0. 
                        Our expertise spans digital transformation, sustainable solutions, and strategic 
                        process optimization.
                    </p>
                    <p class="about-text">
                        We believe in creating lasting impact through technology that empowers businesses 
                        to thrive in an ever-evolving digital landscape.
                    </p>
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <span>Certified Excellence</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <span>24/7 Support</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">✓</div>
                            <span>Proven Track Record</span>
                        </div>
                    </div>
                </div>
                <div class="about-right" data-aos="fade-left" data-aos-delay="200">
                    <div class="about-image-wrapper">
                        <div class="about-image-bg"></div>
                        <div class="stats-overlay">
                            <div class="overlay-stat">
                                <div class="overlay-number">15+</div>
                                <div class="overlay-label">Years</div>
                            </div>
                            <div class="overlay-stat">
                                <div class="overlay-number">150+</div>
                                <div class="overlay-label">Projects</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="section-container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="cta-subtitle">Let's discuss how we can help you achieve your digital transformation goals</p>
                <a href="#contact" class="btn-primary large">
                    <span>Start Your Journey</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

@endsection
