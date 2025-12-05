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
                <span class="text-gradient">Transform</span> Today.
                <br/>
                <span class="typing-text">Lead Tomorrow.</span>
            </h1>
            
            <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                Samudera Biru Internasional (SBI) helps organizations modernize operations, strengthen digital capabilities, and compete with confidence—through practical transformation, integrated systems, and data-driven intelligence.
            </p>
            
            <div class="hero-ctas" data-aos="fade-up" data-aos-delay="300">
                <button onclick="openContactFormModal()" class="btn-primary">
                    <span>Talk to Our Experts</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 13L13 7M13 7H7M13 7V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
                <a href="#services" class="btn-secondary">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="2"/>
                        <path d="M10 6V10L13 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <span>Explore Our Services</span>
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
                <div class="card-icon-wrapper">
                    <svg class="card-icon-svg" width="40" height="40" viewBox="0 0 48 48" fill="none">
                        <defs>
                            <linearGradient id="stratGrad" x1="0" y1="0" x2="48" y2="48">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="100%" stop-color="#0099CC"/>
                            </linearGradient>
                            <filter id="glow1">
                                <feGaussianBlur stdDeviation="2" result="coloredBlur"/>
                                <feMerge>
                                    <feMergeNode in="coloredBlur"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>
                        </defs>
                        <circle cx="24" cy="24" r="18" stroke="url(#stratGrad)" stroke-width="2" opacity="0.3" class="pulse-ring"/>
                        <circle cx="24" cy="24" r="14" stroke="url(#stratGrad)" stroke-width="2" opacity="0.5"/>
                        <circle cx="24" cy="24" r="6" fill="url(#stratGrad)" filter="url(#glow1)"/>
                        <line x1="24" y1="6" x2="24" y2="12" stroke="url(#stratGrad)" stroke-width="2.5" stroke-linecap="round"/>
                        <line x1="24" y1="36" x2="24" y2="42" stroke="url(#stratGrad)" stroke-width="2.5" stroke-linecap="round"/>
                        <line x1="6" y1="24" x2="12" y2="24" stroke="url(#stratGrad)" stroke-width="2.5" stroke-linecap="round"/>
                        <line x1="36" y1="24" x2="42" y2="24" stroke="url(#stratGrad)" stroke-width="2.5" stroke-linecap="round"/>
                        <line x1="11" y1="11" x2="15" y2="15" stroke="url(#stratGrad)" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
                        <line x1="33" y1="33" x2="37" y2="37" stroke="url(#stratGrad)" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
                        <line x1="33" y1="11" x2="37" y2="15" stroke="url(#stratGrad)" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
                        <line x1="11" y1="33" x2="15" y2="37" stroke="url(#stratGrad)" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
                    </svg>
                </div>
                <div class="card-text">Strategic</div>
            </div>
            <div class="floating-card card-2">
                <div class="card-icon-wrapper">
                    <svg class="card-icon-svg" width="40" height="40" viewBox="0 0 48 48" fill="none">
                        <defs>
                            <linearGradient id="practGrad" x1="0" y1="0" x2="48" y2="48">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="50%" stop-color="#00BCD4"/>
                                <stop offset="100%" stop-color="#0099CC"/>
                            </linearGradient>
                        </defs>
                        <circle cx="24" cy="24" r="20" stroke="url(#practGrad)" stroke-width="1.5" opacity="0.2"/>
                        <path d="M24 8 C28 8 32 10 34 14" stroke="url(#practGrad)" stroke-width="2.5" stroke-linecap="round" class="rotate-gear"/>
                        <path d="M40 24 C40 28 38 32 34 34" stroke="url(#practGrad)" stroke-width="2.5" stroke-linecap="round" class="rotate-gear"/>
                        <path d="M24 40 C20 40 16 38 14 34" stroke="url(#practGrad)" stroke-width="2.5" stroke-linecap="round" class="rotate-gear"/>
                        <path d="M8 24 C8 20 10 16 14 14" stroke="url(#practGrad)" stroke-width="2.5" stroke-linecap="round" class="rotate-gear"/>
                        <circle cx="24" cy="24" r="8" stroke="url(#practGrad)" stroke-width="2" fill="rgba(0, 229, 255, 0.1)"/>
                        <path d="M24 20 L24 24 L27 27" stroke="url(#practGrad)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="18" cy="12" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="36" cy="18" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="36" cy="30" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="18" cy="36" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="12" cy="18" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="30" cy="12" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="30" cy="36" r="2" fill="url(#practGrad)" opacity="0.8"/>
                        <circle cx="12" cy="30" r="2" fill="url(#practGrad)" opacity="0.8"/>
                    </svg>
                </div>
                <div class="card-text">Practical</div>
            </div>
            <div class="floating-card card-3">
                <div class="card-icon-wrapper">
                    <svg class="card-icon-svg" width="40" height="40" viewBox="0 0 48 48" fill="none">
                        <defs>
                            <linearGradient id="humanGrad" x1="0" y1="0" x2="48" y2="48">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="100%" stop-color="#00B8D4"/>
                            </linearGradient>
                        </defs>
                        <circle cx="24" cy="14" r="6" stroke="url(#humanGrad)" stroke-width="2" fill="rgba(0, 229, 255, 0.1)"/>
                        <path d="M24 22 C24 22 16 24 14 28 C12 32 12 40 12 40" stroke="url(#humanGrad)" stroke-width="2.5" stroke-linecap="round" class="bounce-line"/>
                        <path d="M24 22 C24 22 32 24 34 28 C36 32 36 40 36 40" stroke="url(#humanGrad)" stroke-width="2.5" stroke-linecap="round" class="bounce-line"/>
                        <path d="M24 20 L24 28" stroke="url(#humanGrad)" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="24" cy="24" r="21" stroke="url(#humanGrad)" stroke-width="1.5" opacity="0.2" class="pulse-ring-2"/>
                        <circle cx="18" cy="13" r="1.5" fill="url(#humanGrad)"/>
                        <circle cx="30" cy="13" r="1.5" fill="url(#humanGrad)"/>
                        <path d="M19 16 Q24 18 29 16" stroke="url(#humanGrad)" stroke-width="1.5" stroke-linecap="round" fill="none" opacity="0.6"/>
                        <circle cx="10" cy="20" r="2" fill="url(#humanGrad)" opacity="0.5" class="float-dot"/>
                        <circle cx="38" cy="20" r="2" fill="url(#humanGrad)" opacity="0.5" class="float-dot"/>
                        <circle cx="14" cy="10" r="1.5" fill="url(#humanGrad)" opacity="0.4" class="float-dot"/>
                        <circle cx="34" cy="10" r="1.5" fill="url(#humanGrad)" opacity="0.4" class="float-dot"/>
                    </svg>
                </div>
                <div class="card-text">Human-Centered</div>
            </div>
        </div>
    </section>

    <!-- Why SBI Exists Section -->
    <section class="why-sbi-section">
        <div class="why-sbi-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
            <div class="grid-pattern"></div>
        </div>
        
        <div class="section-container">
            <div class="why-sbi-content">
                <div class="why-sbi-header" data-aos="fade-up">
                    <div class="header-line"></div>
                    <h2 class="why-sbi-title">
                        Why <span class="text-gradient-alt">SBI</span> Exists
                    </h2>
                    <div class="header-line"></div>
                </div>
                
                <div class="why-sbi-main" data-aos="fade-up" data-aos-delay="100">
                    <p class="why-sbi-statement">
                        Technology changes fast. Your business needs <span class="highlight-text">clarity</span>—not <span class="highlight-text">complexity</span>.
                    </p>
                    
                    <p class="why-sbi-description">
                        SBI partners with companies across industries to redesign processes, implement the right systems, 
                        and build data maturity that lasts.
                    </p>
                </div>
                
                <div class="why-sbi-approach" data-aos="fade-up" data-aos-delay="200">
                    <div class="approach-label">Our approach is simple:</div>
                    <div class="approach-grid">
                        <div class="approach-card" data-aos="flip-left" data-aos-delay="300">
                            <div class="approach-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M20 5L35 12.5V27.5L20 35L5 27.5V12.5L20 5Z" stroke="url(#gradient-cyan)" stroke-width="2"/>
                                    <circle cx="20" cy="20" r="8" fill="url(#gradient-cyan)" opacity="0.3"/>
                                </svg>
                            </div>
                            <h3 class="approach-title">Transform with Purpose</h3>
                            <div class="approach-accent"></div>
                        </div>
                        
                        <div class="approach-card" data-aos="flip-left" data-aos-delay="400">
                            <div class="approach-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M12 20L18 26L28 14" stroke="url(#gradient-cyan)" stroke-width="3" stroke-linecap="round"/>
                                    <rect x="5" y="5" width="30" height="30" rx="5" stroke="url(#gradient-cyan)" stroke-width="2"/>
                                </svg>
                            </div>
                            <h3 class="approach-title">Deliver Results</h3>
                            <div class="approach-accent"></div>
                        </div>
                        
                        <div class="approach-card" data-aos="flip-left" data-aos-delay="500">
                            <div class="approach-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path d="M20 10V20L26 26" stroke="url(#gradient-cyan)" stroke-width="3" stroke-linecap="round"/>
                                    <circle cx="20" cy="20" r="14" stroke="url(#gradient-cyan)" stroke-width="2"/>
                                    <path d="M20 5V8M20 32V35M35 20H32M8 20H5" stroke="url(#gradient-cyan)" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <h3 class="approach-title">Build Capabilities</h3>
                            <p class="approach-subtitle">—not dependence</p>
                            <div class="approach-accent"></div>
                        </div>
                    </div>
                </div>
                
                <div class="why-sbi-cta" data-aos="zoom-in" data-aos-delay="600">
                    <a href="{{ route('about') }}" class="btn-why-sbi">
                        <span>Discover Our Story</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7 13L13 7M13 7H7M13 7V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <svg width="0" height="0">
            <defs>
                <linearGradient id="gradient-purple" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#AA00FF"/>
                    <stop offset="100%" stop-color="#6200EA"/>
                </linearGradient>
                <linearGradient id="gradient-cyan" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#00E5FF"/>
                    <stop offset="100%" stop-color="#00B8D4"/>
                </linearGradient>
                <linearGradient id="gradient-green" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#76FF03"/>
                    <stop offset="100%" stop-color="#64DD17"/>
                </linearGradient>
            </defs>
        </svg>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-modern">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">WHAT WE DO</span>
                <h2 class="section-title"> <span class="text-gradient">Our Services</span></h2>
                <p class="section-subtitle">Comprehensive solutions tailored to accelerate your digital transformation journey</p>
            </div>

            <div class="services-grid">
                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="100" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/operational.jpg') }}') center/cover; position: relative;">
                    <h3 class="service-title" style="color: white; position: relative; z-index: 1;">Operational Efficiency & Process Redesign</h3>
                    <p class="service-desc" style="color: rgba(255, 255, 255, 0.9); position: relative; z-index: 1;">We streamline workflows, remove bottlenecks, and redesign processes so your teams can work faster and more consistently. </p>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="200" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/digital.jpg') }}') center/cover; position: relative;">
                    <h3 class="service-title" style="color: white; position: relative; z-index: 1;">Digital Transformation & System Integration</h3>
                    <p class="service-desc" style="color: rgba(255, 255, 255, 0.9); position: relative; z-index: 1;">We help you choose, implement, and integrate the right digital tools — from ERP to business platforms — into one connected ecosystem. </p>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="300" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/data.jpg') }}') center/cover; position: relative;">
                    <h3 class="service-title" style="color: white; position: relative; z-index: 1;">Data Architecture, Dashboards & Insights</h3>
                    <p class="service-desc" style="color: rgba(255, 255, 255, 0.9); position: relative; z-index: 1;">We organize scattered data into a trusted source of truth and deliver intuitive dashboards leaders can rely on. </p>
                </div>

                <div class="service-card" data-tilt data-aos="fade-up" data-aos-delay="400" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/capability.jpg') }}') center/cover; position: relative;">
                    <h3 class="service-title" style="color: white; position: relative; z-index: 1;">Capability Building & Organizational Alignment</h3>
                    <p class="service-desc" style="color: rgba(255, 255, 255, 0.9); position: relative; z-index: 1;">We equip your teams with the skills to adopt new systems and work effectively in a digital-first environment. </p>
                </div>
            </div>

            <div class="services-cta" data-aos="fade-up" data-aos-delay="500">
                <a href="{{ route('services') }}" class="btn-services">
                    <span>View All Services</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 13L13 7M13 7H7M13 7V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
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

    <!-- Why Companies Choose SBI Section -->
    <section class="why-choose-section">
        <div class="choose-background">
            <div class="animated-grid"></div>
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
            </div>
            <div class="gradient-overlay"></div>
        </div>

        <div class="section-container">
            <div class="choose-header" data-aos="fade-up">
                <h2 class="choose-title">
                    Why Companies Choose <span class="text-gradient">SBI</span>
                </h2>
                <div class="title-underline">
                    <div class="underline-animated"></div>
                </div>
            </div>

            <div class="choose-grid">
                <div class="choose-card" data-aos="fade-right" data-aos-delay="100">
                    <div class="card-glow"></div>
                    <div class="card-number">01</div>
                    <div class="card-icon-wrapper">
                        <div class="icon-bg icon-bg-1" style="background: linear-gradient(135deg, rgba(56, 189, 248, 0.2), rgba(14, 165, 233, 0.2));"></div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" class="card-main-icon" style="color: #38BDF8;">
                            <path d="M24 8L40 16L24 24L8 16L24 8Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M8 24L24 32L40 24" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M8 32L24 40L40 32" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="card-heading">Built for Impact</h3>
                    <p class="card-description">
                        Our work focuses on outcomes that improve speed, accuracy, and performance across your business.
                    </p>
                    <div class="card-shine"></div>
                </div>

                <div class="choose-card" data-aos="fade-left" data-aos-delay="200">
                    <div class="card-glow"></div>
                    <div class="card-number">02</div>
                    <div class="card-icon-wrapper">
                        <div class="icon-bg icon-bg-2" style="background: linear-gradient(135deg, rgba(56, 189, 248, 0.2), rgba(14, 165, 233, 0.2));"></div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" class="card-main-icon" style="color: #38BDF8;">
                            <circle cx="24" cy="14" r="6" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 38C12 31 17 26 24 26C31 26 36 31 36 38" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M16 20C16 20 14 22 14 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M32 20C32 20 34 22 34 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="card-heading">Human-Centered Transformation</h3>
                    <p class="card-description">
                        We align your people, processes, and technology—ensuring the change is practical, usable, and sustainable.
                    </p>
                    <div class="card-shine"></div>
                </div>

                <div class="choose-card" data-aos="fade-right" data-aos-delay="300">
                    <div class="card-glow"></div>
                    <div class="card-number">03</div>
                    <div class="card-icon-wrapper">
                        <div class="icon-bg icon-bg-3" style="background: linear-gradient(135deg, rgba(56, 189, 248, 0.2), rgba(14, 165, 233, 0.2));"></div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" class="card-main-icon" style="color: #38BDF8;">
                            <rect x="8" y="12" width="32" height="28" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 12V8C16 6 17 5 19 5H29C31 5 32 6 32 8V12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M16 22H32M16 28H28" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="24" cy="34" r="2" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="card-heading">End-to-End Expertise</h3>
                    <p class="card-description">
                        From advisory to execution, we support your organization at every stage of the transformation journey.
                    </p>
                    <div class="card-shine"></div>
                </div>

                <div class="choose-card" data-aos="fade-left" data-aos-delay="400">
                    <div class="card-glow"></div>
                    <div class="card-number">04</div>
                    <div class="card-icon-wrapper">
                        <div class="icon-bg icon-bg-4" style="background: linear-gradient(135deg, rgba(56, 189, 248, 0.2), rgba(14, 165, 233, 0.2));"></div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" class="card-main-icon" style="color: #38BDF8;">
                            <path d="M8 36L16 28L22 34L32 20L40 28" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="16" cy="28" r="3" fill="currentColor" opacity="0.5"/>
                            <circle cx="22" cy="34" r="3" fill="currentColor" opacity="0.5"/>
                            <circle cx="32" cy="20" r="3" fill="currentColor" opacity="0.5"/>
                            <rect x="6" y="10" width="36" height="30" rx="2" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="card-heading">Clear, Measurable Results</h3>
                    <p class="card-description">
                        Every workflow, dashboard, and integration we deliver is backed by KPIs and operational gains.
                    </p>
                    <div class="card-shine"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="industries-section">
        <div class="industries-background">
            <div class="hexagon-pattern"></div>
            <div class="light-beams">
                <div class="beam beam-1"></div>
                <div class="beam beam-2"></div>
                <div class="beam beam-3"></div>
            </div>
        </div>

        <div class="section-container">
            <div class="industries-header" data-aos="fade-up">
                <h2 class="industries-title">
                    Industries <span class="text-gradient">We Serve</span>
                </h2>
                <p class="industries-subtitle">Trusted by companies across:</p>
            </div>

            <div class="industries-grid">
                <div class="industry-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="industry-card" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/manufacturing.jpg') }}') center/cover; min-height: 300px;">
                        <h3 class="industry-name" style="color: white; position: relative; z-index: 2;">Manufacturing</h3>
                        <div class="industry-overlay"></div>
                    </div>
                </div>

                <div class="industry-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="industry-card" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/logistics.jpg') }}') center/cover; min-height: 300px;">
                        <h3 class="industry-name" style="color: white; position: relative; z-index: 2;">Logistics & Distribution</h3>
                        <div class="industry-overlay"></div>
                    </div>
                </div>

                <div class="industry-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="industry-card" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/fmcg.jpg') }}') center/cover; min-height: 300px;">
                        <h3 class="industry-name" style="color: white; position: relative; z-index: 2;">FMCG</h3>
                        <div class="industry-overlay"></div>
                    </div>
                </div>

                <div class="industry-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="industry-card" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/retail.jpg') }}') center/cover; min-height: 300px;">
                        <h3 class="industry-name" style="color: white; position: relative; z-index: 2;">Retail</h3>
                        <div class="industry-overlay"></div>
                    </div>
                </div>

                <div class="industry-item" data-aos="zoom-in" data-aos-delay="500">
                    <div class="industry-card" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/homepage/energy.jpg') }}') center/cover; min-height: 300px;">
                        <h3 class="industry-name" style="color: white; position: relative; z-index: 2;">Energy & Utilities</h3>
                        <div class="industry-overlay"></div>
                    </div>
                </div>
            </div>

            <div class="industries-cta" data-aos="fade-up" data-aos-delay="600">
                <a href="{{ route('insights') }}" class="btn-industries">
                    <span>Explore Industry Expertise</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 13L13 7M13 7H7M13 7V13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Real Results Section -->
    <section class="results-section">
        <div class="results-background">
            <div class="data-stream">
                <div class="stream-line line-1"></div>
                <div class="stream-line line-2"></div>
                <div class="stream-line line-3"></div>
                <div class="stream-line line-4"></div>
            </div>
            <div class="pulse-rings">
                <div class="pulse-ring ring-1"></div>
                <div class="pulse-ring ring-2"></div>
                <div class="pulse-ring ring-3"></div>
            </div>
        </div>

        <div class="section-container">
            <!-- Header -->
            <div class="results-header" data-aos="fade-up">
                <div class="header-tag">Insight Into Your Operations</div>
                <h2 class="results-title">
                    Real Results. <span class="text-gradient">Delivered</span>
                </h2>
                <p class="results-intro">
                    You can't improve what you can't see.<br/>
                    <strong>SBI gives leaders real-time visibility into performance</strong>—so decisions can be faster, smarter, and aligned with strategy.
                </p>
            </div>

            <!-- Results Grid -->
            <div class="results-grid">
                <!-- Left Side - Animated Dashboard Mockup -->
                <div class="dashboard-preview" data-aos="fade-right" data-aos-delay="100">
                    <div class="dashboard-wrapper">
                        <div class="dashboard-header">
                            <div class="dash-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="dash-title">Performance Dashboard</div>
                        </div>
                        
                        <div class="dashboard-content">
                            <!-- Animated Charts -->
                            <div class="chart-row">
                                <div class="chart-card">
                                    <div class="chart-label">Cycle Time Reduction</div>
                                    <div class="chart-value-large">
                                        <span class="percentage-number">45</span>
                                        <span class="percentage-symbol">%</span>
                                    </div>
                                    <div class="progress-ring">
                                        <svg width="120" height="120" viewBox="0 0 120 120">
                                            <circle cx="60" cy="60" r="50" stroke="rgba(255,255,255,0.1)" stroke-width="8" fill="none"/>
                                            <circle cx="60" cy="60" r="50" class="progress-circle" stroke="url(#progressGradient)" stroke-width="8" fill="none" 
                                                    stroke-linecap="round" stroke-dasharray="314" stroke-dashoffset="172"/>
                                            <defs>
                                                <linearGradient id="progressGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                                    <stop offset="0%" stop-color="#00E5FF"/>
                                                    <stop offset="100%" stop-color="#76FF03"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <div class="ring-icon">⚡</div>
                                    </div>
                                </div>
                                
                                <div class="chart-card">
                                    <div class="chart-label">Performance Trend</div>
                                    <div class="trend-indicator positive">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M7 17L12 12L17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            <path d="M17 13V7H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        </svg>
                                        <span>Improving</span>
                                    </div>
                                    <div class="mini-area-chart">
                                        <svg viewBox="0 0 200 80" class="area-svg">
                                            <defs>
                                                <linearGradient id="areaGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                    <stop offset="0%" stop-color="rgba(0, 229, 255, 0.3)"/>
                                                    <stop offset="100%" stop-color="rgba(0, 229, 255, 0)"/>
                                                </linearGradient>
                                            </defs>
                                            <path d="M 0 60 L 25 55 L 50 50 L 75 45 L 100 35 L 125 30 L 150 25 L 175 15 L 200 10 L 200 80 L 0 80 Z" 
                                                  fill="url(#areaGradient)" class="area-path"/>
                                            <polyline points="0,60 25,55 50,50 75,45 100,35 125,30 150,25 175,15 200,10" 
                                                      stroke="#00E5FF" stroke-width="2" fill="none" class="area-line"/>
                                            <circle cx="200" cy="10" r="4" fill="#00E5FF" class="pulse-dot"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="chart-row">
                                <div class="chart-card wide">
                                    <div class="chart-label">Key Performance Indicators</div>
                                    <div class="kpi-grid">
                                        <div class="kpi-item">
                                            <div class="kpi-icon">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                    <rect x="6" y="18" width="4" height="8" fill="white" rx="1"/>
                                                    <rect x="14" y="12" width="4" height="14" fill="white" rx="1"/>
                                                    <rect x="22" y="6" width="4" height="20" fill="white" rx="1"/>
                                                </svg>
                                            </div>
                                            <div class="kpi-value">Real-Time</div>
                                            <div class="kpi-label">Visibility</div>
                                        </div>
                                        <div class="kpi-item">
                                            <div class="kpi-icon">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                    <path d="M16 4L18 12L24 8L20 16L28 16L16 28L14 20L8 24L12 16L4 16L16 4Z" fill="white"/>
                                                </svg>
                                            </div>
                                            <div class="kpi-value">Faster</div>
                                            <div class="kpi-label">Decisions</div>
                                        </div>
                                        <div class="kpi-item">
                                            <div class="kpi-icon">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                                    <circle cx="16" cy="16" r="14" stroke="white" stroke-width="2"/>
                                                    <path d="M10 16L14 20L22 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="kpi-value">Higher</div>
                                            <div class="kpi-label">Accuracy</div>
                                        </div>
                                        <div class="kpi-item">
                                            <div class="kpi-icon">
                                                <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                                                    <path d="M3 17L9 11L13 15L21 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M21 12V7H16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="kpi-value">Measurable</div>
                                            <div class="kpi-label">Results</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dashboard-glow"></div>
                    </div>
                </div>

                <!-- Right Side - Results List -->
                <div class="results-list" data-aos="fade-left" data-aos-delay="200">
                    <div class="result-item" data-aos="fade-left" data-aos-delay="250">
                        <div class="result-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <circle cx="16" cy="16" r="14" stroke="currentColor" stroke-width="2"/>
                                <path d="M16 8V16L22 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="result-content">
                            <h3 class="result-title">Reduced operational cycle time</h3>
                        </div>
                        <div class="result-badge">✓</div>
                    </div>

                    <div class="result-item" data-aos="fade-left" data-aos-delay="300">
                        <div class="result-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M8 20C8 16 10 14 14 14C18 14 20 16 20 20" stroke="currentColor" stroke-width="2"/>
                                <path d="M16 20C16 16 18 14 22 14C26 14 28 16 28 20" stroke="currentColor" stroke-width="2"/>
                                <circle cx="14" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                <circle cx="22" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="result-content">
                            <h3 class="result-title">Improved teamwork efficiency across multiple branches</h3>
                        </div>
                        <div class="result-badge">✓</div>
                    </div>

                    <div class="result-item" data-aos="fade-left" data-aos-delay="350">
                        <div class="result-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <rect x="6" y="6" width="20" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                                <path d="M6 14H26M14 6V26" stroke="currentColor" stroke-width="2"/>
                                <circle cx="16" cy="16" r="4" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="result-content">
                            <h3 class="result-title">Enhanced visibility through custom dashboards</h3>
                        </div>
                        <div class="result-badge">✓</div>
                    </div>

                    <div class="result-item" data-aos="fade-left" data-aos-delay="400">
                        <div class="result-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M10 16L14 20L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <rect x="6" y="6" width="20" height="20" rx="2" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="result-content">
                            <h3 class="result-title">Faster, standardized approvals and workflows</h3>
                        </div>
                        <div class="result-badge">✓</div>
                    </div>

                    <div class="result-item" data-aos="fade-left" data-aos-delay="450">
                        <div class="result-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <circle cx="10" cy="16" r="4" stroke="currentColor" stroke-width="2"/>
                                <circle cx="22" cy="16" r="4" stroke="currentColor" stroke-width="2"/>
                                <path d="M14 16H18" stroke="currentColor" stroke-width="2"/>
                                <path d="M10 12V8H22V12M10 20V24H22V20" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="result-content">
                            <h3 class="result-title">Integrated systems across supply chain, HR, and finance</h3>
                        </div>
                        <div class="result-badge">✓</div>
                    </div>

                    <div class="result-item" data-aos="fade-left" data-aos-delay="500">
                        <div class="result-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M6 26L12 20L16 24L26 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="12" cy="20" r="2" fill="currentColor"/>
                                <circle cx="16" cy="24" r="2" fill="currentColor"/>
                                <circle cx="26" cy="10" r="2" fill="currentColor"/>
                            </svg>
                        </div>
                        <div class="result-content">
                            <h3 class="result-title">Stronger accuracy and traceability using real-time data</h3>
                        </div>
                        <div class="result-badge">✓</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Clients Section -->
    <section class="clients-section">
        <div class="clients-background">
            <div class="shine-overlay"></div>
        </div>

        <div class="section-container">
            <div class="clients-header" data-aos="fade-up">
                <h2 class="clients-title">
                    Trusted by businesses across <span class="text-gradient">Indonesia</span> and <span class="text-gradient">Southeast Asia</span>
                </h2>
            </div>

            <div class="clients-logos" data-aos="fade-up" data-aos-delay="100">
                <div class="logo-track">
                    <!-- First Set -->
                    <!-- <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/sgi.png" alt="Samator Gas Industri" class="company-logo">
                        </div>
                        <div class="company-name">Samator Gas Industri</div>
                    </div> -->
                    <!-- <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/sig.png" alt="Samator Indo Gas" class="company-logo">
                        </div>
                        <div class="company-name">Samator Indo Gas</div>
                    </div> -->
                    <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/ame.png" alt="Aneka Mega Energi" class="company-logo">
                        </div>
                        <div class="company-name">Aneka Mega Energi</div>
                    </div>
                    <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/sbm.jpeg" alt="Samabayu Mandala" class="company-logo">
                        </div>
                        <div class="company-name">Samabayu Mandala</div>
                    </div>
                    <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/smt.png" alt="Samator Group" class="company-logo">
                        </div>
                        <div class="company-name">Samator Group</div>
                    </div>
                    
                    <!-- Duplicate Set for Seamless Loop -->
                    <!-- <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/sgi.png" alt="Samator Gas Industri" class="company-logo">
                        </div>
                        <div class="company-name">Samator Gas Industri</div>
                    </div> -->
                    <!-- <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/sig.png" alt="Samator Indo Gas" class="company-logo">
                        </div>
                        <div class="company-name">Samator Indo Gas</div>
                    </div> -->
                    <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/ame.png" alt="Aneka Mega Energi" class="company-logo">
                        </div>
                        <div class="company-name">Aneka Mega Energi</div>
                    </div>
                    <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/sbm.jpeg" alt="Samabayu Mandala" class="company-logo">
                        </div>
                        <div class="company-name">Samabayu Mandala</div>
                    </div>
                    <div class="logo-item">
                        <div class="logo-card">
                            <img src="/images/partners/smt.png" alt="Samator Group" class="company-logo">
                        </div>
                        <div class="company-name">Samator Group</div>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="section-container">
            <div class="cta-content" data-aos="zoom-in">
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="cta-subtitle">Let's discuss how we can help you achieve your digital transformation goals</p>
            <div class="clients-cta" data-aos="fade-up" data-aos-delay="200">
                <button onclick="openContactFormModal()" class="btn-secondary">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M3 8L10 13L17 8M3 8L10 3L17 8M3 8V16L10 21L17 16V8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Contact Our Team</span>
                </button>
            </div>
            </div>
        </div>
    </section>

@endsection
