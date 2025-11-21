@extends('layouts.app')

@section('content')
    <!-- Career Hero Section -->
    <section class="career-hero-section">
        <div class="career-hero-bg">
            <img src="{{ asset('images/career-hero.jpg') }}" alt="Career at SBI" class="career-hero-bg-image">
            <div class="career-hero-overlay"></div>
        </div>
        
        <div class="career-hero-content" data-aos="fade-up" data-aos-delay="0">
            <div class="career-hero-badge" data-aos="fade-down" data-aos-delay="100">
                <span class="career-badge-pulse"></span>
                Join Our Team
            </div>
            <h1 class="career-hero-title" data-aos="fade-up" data-aos-delay="200">
                <span class="career-title-line">Join <span class="career-title-gradient">SBI</span></span>
            </h1>
            <p class="career-hero-subtitle" data-aos="fade-up" data-aos-delay="300">
                Grow, build, and shape the future of Intelligent Operations
            </p>
        </div>
    </section>

    <!-- About SBI Section -->
    <section class="career-about-section">
        <div class="career-section-container">
            <div class="career-about-grid">
                <div class="career-about-main" data-aos="fade-right">
                    <h2 class="career-about-title">
                        At SBI, we believe that <span class="career-gradient-text">great businesses</span> are built by people who never stop learning, improving, and pushing boundaries.
                    </h2>
                </div>
                <div class="career-about-content" data-aos="fade-left" data-aos-delay="200">
                    <p>
                        We work with organizations that want to evolve — and we're looking for individuals who share the same hunger for progress.
                    </p>
                    <p>
                        Whether you come from a <strong>technical background</strong> or a <strong>business discipline</strong>, if you are curious, analytical, adaptable, and excited about the future of intelligent automation, you can thrive here.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join SBI Section -->
    <section class="career-why-section">
        <div class="career-section-container">
            <div class="career-section-header" data-aos="fade-up">
                <span class="career-section-tag">Benefits</span>
                <h2 class="career-section-title">Why Join <span class="career-text-gradient">SBI?</span></h2>
            </div>

            <div class="career-why-grid">
                <!-- Benefit 1 -->
                <div class="career-why-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="career-why-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M24 4L30 18L44 20L34 30L37 44L24 36L11 44L14 30L4 20L18 18L24 4Z" stroke="url(#gradient1)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <defs>
                                <linearGradient id="gradient1" x1="4" y1="4" x2="44" y2="44">
                                    <stop offset="0%" stop-color="#0EA5E9"/>
                                    <stop offset="100%" stop-color="#0284C7"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="career-why-title">A Place to Grow Faster</h3>
                    <p class="career-why-text">
                        You'll work closely with industry experts, real clients, and real systems—from day one.
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="career-why-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="career-why-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="url(#gradient2)" stroke-width="2" fill="none"/>
                            <path d="M16 24L22 30L32 18" stroke="url(#gradient2)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                                <linearGradient id="gradient2" x1="8" y1="8" x2="40" y2="40">
                                    <stop offset="0%" stop-color="#0EA5E9"/>
                                    <stop offset="100%" stop-color="#0284C7"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="career-why-title">Learn Across Disciplines</h3>
                    <p class="career-why-text">
                        Our projects blend business, technology, data, and process optimization. Even if you come from a non-tech background, you'll learn how digital systems work, how data drives decisions, and how to design efficient workflows.
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="career-why-card" data-aos="fade-right" data-aos-delay="100">
                    <div class="career-why-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <circle cx="24" cy="24" r="16" stroke="url(#gradient3)" stroke-width="2" fill="none"/>
                            <path d="M24 14V24L30 30" stroke="url(#gradient3)" stroke-width="2" stroke-linecap="round"/>
                            <defs>
                                <linearGradient id="gradient3" x1="8" y1="8" x2="40" y2="40">
                                    <stop offset="0%" stop-color="#0EA5E9"/>
                                    <stop offset="100%" stop-color="#0284C7"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="career-why-title">Build the Future of Intelligent Operations</h3>
                    <p class="career-why-text">
                        You'll contribute directly to how companies modernize—designing better processes, improving digital tools, and supporting system transformations.
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="career-why-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="career-why-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 36L24 24L36 36M12 24L24 12L36 24" stroke="url(#gradient4)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs>
                                <linearGradient id="gradient4" x1="12" y1="12" x2="36" y2="36">
                                    <stop offset="0%" stop-color="#0EA5E9"/>
                                    <stop offset="100%" stop-color="#0284C7"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="career-why-title">A Culture Built on Curiosity & Collaboration</h3>
                    <p class="career-why-text">
                        We value people who observe deeply, think critically, experiment fearlessly, and communicate openly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Opportunities Section -->
    <section class="career-opportunities-section">
        <div class="career-section-container">
            <div class="career-section-header" data-aos="fade-up">
                <span class="career-section-tag">Open Positions</span>
                <h2 class="career-section-title">Our Current <span class="career-text-gradient">Opportunities</span></h2>
            </div>

            <div class="career-opportunities-grid">
                <!-- Business Analyst - Full Time -->
                <div class="career-opp-card" data-aos="zoom-in" data-aos-delay="100" onclick="openModal('fulltime')">
                    <div class="career-opp-image">
                        <img src="{{ asset('images/about-hero.jpg') }}" alt="Business Analyst Position">
                        <div class="career-opp-image-overlay"></div>
                    </div>
                    <div class="career-opp-content">
                        <div class="career-opp-badge">Full Time</div>
                        <div class="career-opp-number">01</div>
                        <h3 class="career-opp-title">Business Analyst</h3>
                        <p class="career-opp-summary">
                            Help clients rethink how their organizations - from operations and data to digital tools and integrated systems.
                        </p>
                        <div class="career-opp-tags">
                            <span class="career-opp-tag">IE</span>
                            <span class="career-opp-tag">IS</span>
                            <span class="career-opp-tag">IT</span>
                            <span class="career-opp-tag">Business</span>
                            <span class="career-opp-tag">+More</span>
                        </div>
                        <button class="career-opp-btn">
                            Learn More
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Business Analyst Internship -->
                <div class="career-opp-card" data-aos="zoom-in" data-aos-delay="200" onclick="openModal('internship')">
                    <div class="career-opp-image">
                        <img src="{{ asset('images/internship.jpg') }}" alt="Business Analyst Internship">
                        <div class="career-opp-image-overlay"></div>
                    </div>
                    <div class="career-opp-content">
                        <div class="career-opp-badge internship">6 Months Internship</div>
                        <div class="career-opp-number">02</div>
                        <h3 class="career-opp-title">Business Analyst Internship</h3>
                        <p class="career-opp-summary">
                            Meaningful, real-world experience. Learn business analysis, assist in digital projects, and support process mapping activities.
                        </p>
                        <div class="career-opp-tags">
                            <span class="career-opp-tag">Students</span>
                            <span class="career-opp-tag">Fresh Grads</span>
                            <span class="career-opp-tag">All Majors</span>
                        </div>
                        <button class="career-opp-btn">
                            Learn More
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Our Team Says Section -->
    <section class="career-testimonials-section" id="testimonials">
        <div class="career-section-container">
            <div class="career-section-header" data-aos="fade-up">
                <span class="career-testimonial-tag">Team Stories</span>
                <h2 class="career-testimonial-title">What Our <span class="career-testimonial-gradient">Team Says</span></h2>
                <p class="career-testimonial-subtitle">Real experiences from real people who are shaping the future</p>
            </div>

            <div class="career-testimonials-grid" data-aos="fade-up" data-aos-delay="100">
                <!-- Testimonial 1 -->
                <div class="career-testimonial-card">
                    <div class="career-testimonial-quote-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 28C12 24.686 14.686 22 18 22C21.314 22 24 24.686 24 28C24 31.314 21.314 34 18 34C14.686 34 12 31.314 12 28ZM12 28V18C12 14.686 14.686 12 18 12" stroke="#0284C7" stroke-width="2" stroke-linecap="round"/>
                            <path d="M28 28C28 24.686 30.686 22 34 22C37.314 22 40 24.686 40 28C40 31.314 37.314 34 34 34C30.686 34 28 31.314 28 28ZM28 28V18C28 14.686 30.686 12 34 12" stroke="#0284C7" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="career-testimonial-text">
                        SBI exposed me to many new things and continuously pushed me to grow. I learned to manage my time effectively, handle multiple projects at once, and constantly improve my skills. My experience at SBI has been invaluable to my professional development.
                    </p>
                    <div class="career-testimonial-author">
                        <div class="career-author-avatar">
                            <img src="{{ asset('images/team/imelda.jpg') }}" alt="Fiona Gabriela">
                            <div class="career-avatar-ring"></div>
                        </div>
                        <div class="career-author-info">
                            <h4 class="career-author-name">FIONA GABRIELA</h4>
                            <p class="career-author-role">Business Intelligence Analyst</p>
                            <p class="career-author-tenure">Since 2019</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="career-testimonial-card">
                    <div class="career-testimonial-quote-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 28C12 24.686 14.686 22 18 22C21.314 22 24 24.686 24 28C24 31.314 21.314 34 18 34C14.686 34 12 31.314 12 28ZM12 28V18C12 14.686 14.686 12 18 12" stroke="#0284C7" stroke-width="2" stroke-linecap="round"/>
                            <path d="M28 28C28 24.686 30.686 22 34 22C37.314 22 40 24.686 40 28C40 31.314 37.314 34 34 34C30.686 34 28 31.314 28 28ZM28 28V18C28 14.686 30.686 12 34 12" stroke="#0284C7" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="career-testimonial-text">
                        SBI is a place filled with brilliant and creative people that help me in my quest for personal development. Every day brings new challenges.
                    </p>
                    <div class="career-testimonial-author">
                        <div class="career-author-avatar">
                            <img src="{{ asset('images/team/rachmat.webp') }}" alt="Prilya Angel">
                            <div class="career-avatar-ring"></div>
                        </div>
                        <div class="career-author-info">
                            <h4 class="career-author-name">PRILYA ANGEL</h4>
                            <p class="career-author-role">Business Intelligence Analyst</p>
                            <p class="career-author-tenure">Since 2019</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="career-testimonial-card">
                    <div class="career-testimonial-quote-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M12 28C12 24.686 14.686 22 18 22C21.314 22 24 24.686 24 28C24 31.314 21.314 34 18 34C14.686 34 12 31.314 12 28ZM12 28V18C12 14.686 14.686 12 18 12" stroke="#0284C7" stroke-width="2" stroke-linecap="round"/>
                            <path d="M28 28C28 24.686 30.686 22 34 22C37.314 22 40 24.686 40 28C40 31.314 37.314 34 34 34C30.686 34 28 31.314 28 28ZM28 28V18C28 14.686 30.686 12 34 12" stroke="#0284C7" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <p class="career-testimonial-text">
                        The mission that SBI is trying to fulfill resonates deeply within me as a person and as a consultant; taking my talent into new heights.
                    </p>
                    <div class="career-testimonial-author">
                        <div class="career-author-avatar">
                            <img src="{{ asset('images/team/mario.jpg') }}" alt="Kevin Wijaya">
                            <div class="career-avatar-ring"></div>
                        </div>
                        <div class="career-author-info">
                            <h4 class="career-author-name">KEVIN WIJAYA</h4>
                            <p class="career-author-role">Business Intelligence Analyst</p>
                            <p class="career-author-tenure">Since 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="career-cta-section">
        <div class="career-section-container">
            <div class="career-cta-header" data-aos="fade-up">
                <div class="career-cta-icon">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
                        <circle cx="40" cy="40" r="38" stroke="url(#ctaGradient)" stroke-width="2"/>
                        <path d="M25 40L35 50L55 30" stroke="url(#ctaGradient)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="ctaGradient" x1="0" y1="0" x2="80" y2="80">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="100%" stop-color="#00B8D4"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <h2 class="career-cta-title">How to Apply</h2>
            </div>

            <div class="career-cta-grid" data-aos="fade-up" data-aos-delay="200">
                <!-- Left Side - Join Us -->
                <div class="career-cta-left">
                    <p class="career-cta-subtitle">Ready to grow with us?</p>
                    <p class="career-cta-text">Send your CV, portfolio (if any), or introduction to:</p>
                    <a href="mailto:hr@samuderabiru.net" class="career-cta-email">
                        hr@samuderabiru.net
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

                <!-- Right Side - Please Include -->
                <div class="career-cta-right">
                    <p class="career-cta-include-title">Please include:</p>
                    <div class="career-cta-include-list">
                        <div class="career-include-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Your name</span>
                        </div>
                        <div class="career-include-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>The position you're applying for</span>
                        </div>
                        <div class="career-include-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Short note about why you're interested</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Full Time -->
    <div id="modal-fulltime" class="career-modal">
        <div class="career-modal-overlay" onclick="closeModal('fulltime')"></div>
        <div class="career-modal-content" data-aos="zoom-in">
            <button class="career-modal-close" onclick="closeModal('fulltime')">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            
            <div class="career-modal-header">
                <div class="career-modal-badge">Full Time</div>
                <h3 class="career-modal-title">Business Analyst</h3>
            </div>

            <div class="career-modal-body">
                <div class="career-modal-section">
                    <h4>For Graduates From:</h4>
                    <div class="career-modal-majors">
                        <span>Industrial Engineering</span>
                        <span>Information Systems</span>
                        <span>IT</span>
                        <span>Data & Statistics</span>
                        <span>Business</span>
                        <span>Economics</span>
                        <span>Accounting</span>
                        <span>Related Fields</span>
                    </div>
                    <p class="career-modal-note">
                        Interested in business process optimization and digital transformation
                    </p>
                </div>

                <div class="career-modal-section">
                    <h4>What You'll Do:</h4>
                    <p>
                        As a Business Analyst at SBI, you will help clients rethink how their organizations - from operations and data to digital tools and integrated systems. You'll map processes, analyze pain points, design better workflows, and work with technical teams to bring those improvements to life.
                    </p>
                </div>

                <div class="career-modal-section">
                    <h4>This Role Suits Individuals Who:</h4>
                    <ul class="career-modal-list">
                        <li>Enjoy understanding how things work and how they can work better</li>
                        <li>Are comfortable learning new technologies, systems, and tools</li>
                        <li>Are detail-oriented, communicative, and thoughtful in problem-solving</li>
                        <li>Love turning complexity into clarity</li>
                        <li>Believe that automation and intelligence are at the core of future business</li>
                    </ul>
                    <p class="career-modal-highlight">
                        If you love connecting business needs with intelligent solutions, this role is for you.
                    </p>
                </div>
            </div>

            <div class="career-modal-footer">
                <a href="mailto:hr@samuderabiru.net?subject=Application: Business Analyst Full-time" class="career-modal-apply-btn">
                    Apply Now
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Internship -->
    <div id="modal-internship" class="career-modal">
        <div class="career-modal-overlay" onclick="closeModal('internship')"></div>
        <div class="career-modal-content" data-aos="zoom-in">
            <button class="career-modal-close" onclick="closeModal('internship')">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
            
            <div class="career-modal-header">
                <div class="career-modal-badge internship">6 Months Internship</div>
                <h3 class="career-modal-title">Business Analyst Internship</h3>
            </div>

            <div class="career-modal-body">
                <div class="career-modal-section">
                    <h4>Program Overview:</h4>
                    <p>
                        Our 6 months internship program is designed for students who want meaningful, real-world experience. Over six months, you'll learn how to conduct business analysis, assist in digital projects, and support process mapping and data structuring activities.
                    </p>
                    <p class="career-modal-note">
                        The internship can be converted into academic credit or practical work experience based on your university requirements.
                    </p>
                </div>

                <div class="career-modal-section">
                    <h4>This Internship is Ideal For:</h4>
                    <ul class="career-modal-list">
                        <li>Students who want hands-on exposure to digital transformation projects</li>
                        <li>Individuals who enjoy research, analysis, and understanding how businesses operate</li>
                        <li>Proactive, adaptable, and eager to learn people</li>
                        <li>Those who want to explore careers in operations, consulting, technology, or data</li>
                    </ul>
                </div>

                <div class="career-modal-section">
                    <p class="career-modal-highlight">
                        You won't be treated as "just an intern" - you'll be part of our team, contributing to real deliverables and learning skills that truly matter.
                    </p>
                </div>
            </div>

            <div class="career-modal-footer">
                <a href="mailto:hr@samuderabiru.net?subject=Application: Business Analyst Internship" class="career-modal-apply-btn">
                    Apply Now
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@vite(['resources/js/career.js'])
@endpush

