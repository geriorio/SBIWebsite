@extends('layouts.app')

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
                Our Solutions
            </div>
            <h1 class="hero-heading">
                <span class="text-gradient">What Can We</span> Do For You?
            </h1>
            <p class="hero-description">
                Comprehensive solutions tailored to drive your business forward in the digital age
            </p>
        </div>

        <!-- Floating Navigation -->
        <div class="services-nav-floating" data-aos="fade-up" data-aos-delay="400">
            <div class="service-nav-wrapper">
                <a href="#business-process" class="service-nav-item" data-index="0">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span>Business Process</span>
                </a>
                <a href="#renewable-energy" class="service-nav-item" data-index="1">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2"/>
                            <path d="M12 1V3M12 21V23M4.22 4.22L5.64 5.64M18.36 18.36L19.78 19.78M1 12H3M21 12H23M4.22 19.78L5.64 18.36M18.36 5.64L19.78 4.22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span>Renewable Energy</span>
                </a>
                <a href="#talent-management" class="service-nav-item" data-index="2">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                            <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span>Talent Management</span>
                </a>
                <a href="#supply-chain" class="service-nav-item" data-index="3">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="1" y="3" width="15" height="13" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 8H20L23 11V16H16V8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="5.5" cy="18.5" r="2.5" stroke="currentColor" stroke-width="2"/>
                            <circle cx="18.5" cy="18.5" r="2.5" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <span>Supply Chain</span>
                </a>
                <a href="#asset-management" class="service-nav-item" data-index="4">
                    <div class="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
                            <path d="M3 9H21" stroke="currentColor" stroke-width="2"/>
                            <path d="M9 21V9" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <span>Asset Management</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Business Process Transformation - White Section -->
    <section id="business-process" class="service-detail-section white-section">
        <div class="section-container">
            <div class="service-detail-grid">
                <div class="service-content" data-aos="fade-right">
                    <span class="section-tag">Transformation</span>
                    <h2 class="section-title">Business Process <span class="text-gradient">Transformation</span></h2>
                    <p class="section-description">
                        Here at Samudera Biru Internasional, we are focusing our resources and attempts on increasing the competitiveness of Indonesian companies across all industries. Ranging from the likes of Finance, Manufacturing, and Design, we strive to create a stronger business ecosystem.
                    </p>
                    <p class="section-description">
                        Working together with our client in each and every transformation process, we implement digital analytics and modern technological instruments to achieve operational excellence and stronger executional capabilities.
                    </p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="14" stroke="url(#featureGradient1)" stroke-width="2"/>
                                    <path d="M16 8V16L20 20" stroke="url(#featureGradient1)" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>Efficiency</h4>
                                <p>Enable you to conduct a more efficient business process</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 4L4 10L16 16L28 10L16 4Z" stroke="url(#featureGradient1)" stroke-width="2"/>
                                    <path d="M4 22L16 28L28 22" stroke="url(#featureGradient1)" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>Smarter Operations</h4>
                                <p>The usage of big data will enable a smarter working environment</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="4" stroke="url(#featureGradient1)" stroke-width="2"/>
                                    <path d="M16 2V6M16 26V30M28 16H24M8 16H4M24.5 7.5L21.5 10.5M10.5 21.5L7.5 24.5M24.5 24.5L21.5 21.5M10.5 10.5L7.5 7.5" stroke="url(#featureGradient1)" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>Visibility</h4>
                                <p>Enable you to better identify potential risks and key problem points</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="ERP System Diagram">
                        <div class="visual-caption">
                            <p>A suitable ERP system is able to give you a better competitive edge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Renewable Energy - Dark Section -->
    <section id="renewable-energy" class="service-detail-section dark-section">
        <div class="section-container">
            <div class="service-detail-grid reverse">
                <div class="service-visual" data-aos="fade-right">
                    <div class="visual-card dark">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Solar Energy">
                    </div>
                </div>

                <div class="service-content" data-aos="fade-left">
                    <span class="section-tag dark">Green Energy</span>
                    <h2 class="section-title light">Renewable Energy <span class="text-gradient">Alternatives</span></h2>
                    <p class="section-description light">
                        Capturing opportunities, creating brighter future through sustainable solar energy solutions. We facilitate wide-scale adoption of solar projects throughout Indonesia.
                    </p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <h3 class="stat-number" data-target="500">0</h3>
                            <p class="stat-label">MW Solar Capacity</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="stat-number" data-target="150">0</h3>
                            <p class="stat-label">Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <h3 class="stat-number" data-target="85">0</h3>
                            <p class="stat-label">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Employee Talent Management - White Section -->
    <section id="talent-management" class="service-detail-section white-section">
        <div class="section-container">
            <div class="service-detail-grid">
                <div class="service-content" data-aos="fade-right">
                    <span class="section-tag">Development</span>
                    <h2 class="section-title">Employee Talent <span class="text-gradient">Management</span></h2>
                    <p class="section-description">
                        Enhance Indonesia's human capital for knowledge-based economy transition. We provide comprehensive talent development programs and modern learning platforms.
                    </p>
                    
                    <div class="service-list">
                        <div class="list-item">
                            <div class="list-icon">✓</div>
                            <div class="list-content">
                                <h4>Skills Assessment</h4>
                                <p>Comprehensive evaluation of workforce capabilities</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="list-icon">✓</div>
                            <div class="list-content">
                                <h4>Training Programs</h4>
                                <p>Customized learning paths for career development</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="list-icon">✓</div>
                            <div class="list-content">
                                <h4>Performance Management</h4>
                                <p>Data-driven insights for continuous improvement</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Talent Management">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Supply Chain Optimization - Dark Section -->
    <section id="supply-chain" class="service-detail-section dark-section">
        <div class="section-container">
            <div class="service-detail-grid reverse">
                <div class="service-visual" data-aos="fade-right">
                    <div class="visual-card dark">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Supply Chain">
                    </div>
                </div>

                <div class="service-content" data-aos="fade-left">
                    <span class="section-tag dark">Optimization</span>
                    <h2 class="section-title light">Supply Chain <span class="text-gradient">Optimization</span></h2>
                    <p class="section-description light">
                        Streamline your supply chain with cutting-edge technology and data analytics. Reduce costs, improve efficiency, and gain real-time visibility across your entire supply network.
                    </p>
                    
                    <div class="benefits-grid">
                        <div class="benefit-card">
                            <h4>Cost Reduction</h4>
                            <p>Up to 30% reduction in operational costs</p>
                        </div>
                        <div class="benefit-card">
                            <h4>Real-time Tracking</h4>
                            <p>Complete visibility of inventory and shipments</p>
                        </div>
                        <div class="benefit-card">
                            <h4>Predictive Analytics</h4>
                            <p>AI-powered demand forecasting</p>
                        </div>
                        <div class="benefit-card">
                            <h4>Vendor Management</h4>
                            <p>Streamlined procurement processes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Asset Management System - White Section -->
    <section id="asset-management" class="service-detail-section white-section">
        <div class="section-container">
            <div class="service-detail-grid">
                <div class="service-content" data-aos="fade-right">
                    <span class="section-tag">Management</span>
                    <h2 class="section-title">Asset Management <span class="text-gradient">System</span></h2>
                    <p class="section-description">
                        Assist business ecosystem creation with ERP and critical systems consultancy. Comprehensive asset tracking and management solutions for optimal resource utilization.
                    </p>
                    
                    <div class="service-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect x="4" y="4" width="24" height="24" rx="2" stroke="url(#featureGradient1)" stroke-width="2"/>
                                    <path d="M4 12H28M12 28V12" stroke="url(#featureGradient1)" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>Digital Asset Registry</h4>
                                <p>Centralized database of all company assets</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M6 16L12 22L26 8" stroke="url(#featureGradient1)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>Maintenance Scheduling</h4>
                                <p>Automated preventive maintenance alerts</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <rect x="4" y="8" width="24" height="16" rx="2" stroke="url(#featureGradient1)" stroke-width="2"/>
                                    <path d="M8 4V8M24 4V8M4 12H28" stroke="url(#featureGradient1)" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>Lifecycle Management</h4>
                                <p>Track assets from acquisition to disposal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-visual" data-aos="fade-left">
                    <div class="visual-card">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Asset Management">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SVG Gradients -->
    <svg width="0" height="0">
        <defs>
            <linearGradient id="featureGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#0EA5E9"/>
                <stop offset="100%" stop-color="#0284C7"/>
            </linearGradient>
        </defs>
    </svg>

@endsection
