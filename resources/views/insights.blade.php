@extends('layouts.app')

@section('content')
    <!-- Insights Hero Section -->
    <section class="insights-hero-modern">
        <div class="hero-video-background">
            <video autoplay muted loop playsinline class="hero-bg-video">
                <source src="{{ asset('videos/insight-hero.mp4') }}" type="video/mp4">
            </video>
            <div class="video-overlay"></div>
        </div>
        
        <div class="insights-hero-content" data-aos="fade-up">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                LATEST UPDATES
            </div>
            <h1 class="hero-heading">
                <span class="text-gradient typing-text" data-text="Industry Insights"></span>
                <br>
                <span class="typing-text-second" data-text="& Innovation"></span>
            </h1>
            <p class="hero-description" style="opacity: 0;">
                Stay ahead with our latest perspectives on technology, sustainability, and business transformation
            </p>
        </div>
    </section>

    <!-- Search & Articles Section -->
    <section class="insights-articles-section">
        <div class="insights-section-container">
            <!-- Search Bar -->
            <div class="insights-search-wrapper" data-aos="fade-up">
                <div class="insights-search-box">
                    <svg class="insights-search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/>
                        <path d="M16 16L21 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                    <input 
                        type="text" 
                        class="insights-search-input" 
                        placeholder="Search articles by title or content..."
                        id="insightsArticleSearch"
                    >
                    <button class="insights-search-clear" id="insightsClearSearch" style="display: none;">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M5 5L15 15M15 5L5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="insights-articles-grid" id="insightsArticlesGrid">
                <!-- Article Card 1 -->
                <article class="insights-article-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article1.jpg') }}" alt="ERP Digital Systems">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag digital">ERP & Digital Systems</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">ERP & Digital Systems: Building Smarter Workflows That Protect Revenue</h3>
                        <p class="insights-article-summary">
                            Payments are the lifeblood of every business, yet billing processes are often overlooked. When your ERP isn't optimized, cash flow slows and teams work harder than necessary.
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'erp-digital-systems-smarter-workflows']) }}" class="insights-read-more-link">
                            <span>Read More</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 2 -->
                <article class="insights-article-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article2.jpg') }}" alt="System Integration">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag integration">System Integration</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">System Integration: Connecting Every Part of Your Business Into One Flow</h3>
                        <p class="insights-article-summary">
                            As companies grow, systems often don't grow with them. Data becomes scattered and processes stay manual. System integration closes that gap.
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'system-integration-intelligent-flow']) }}" class="insights-read-more-link">
                            <span>Read More</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 3 -->
                <article class="insights-article-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article3.jpg') }}" alt="Operational Efficiency">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag operational">Operational Efficiency</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">Driving Operational Efficiency: How Smart Process Redesign Speeds Up Work</h3>
                        <p class="insights-article-summary">
                            Even small inefficiencies snowball into delays, lost revenue, and burnout. Learn how SBI helps companies streamline processes and reduce costs.
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'operational-efficiency-process-redesign']) }}" class="insights-read-more-link">
                            <span>Read More</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 4 -->
                <article class="insights-article-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article4.jpg') }}" alt="Data Analytics Dashboards">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag data">Data & Analytics</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">Empowering Smarter Decisions Through Clear, Actionable Dashboards</h3>
                        <p class="insights-article-summary">
                            Scattered data and delayed insights slow companies down. Learn how SBI transforms information into real-time dashboards that drive decisions.
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'actionable-dashboards-analytics']) }}" class="insights-read-more-link">
                            <span>Read More</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 5 -->
                <article class="insights-article-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article5.jpg') }}" alt="Digital Learning">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag capability">Capability Building</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">How Scalable Digital Learning Transforms Enterprise Operations</h3>
                        <p class="insights-article-summary">
                            Traditional training can't keep up with growth. See how SBI built SamatorEdu, a digital learning ecosystem for nationwide capability building.
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'samatoredu-digital-learning']) }}" class="insights-read-more-link">
                            <span>Read More</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>

            <!-- No Results Message -->
            <div class="insights-no-results" id="insightsNoResults" style="display: none; text-align: center; margin: 4rem auto; max-width: 400px;">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" style="margin: 0 auto 1.5rem;">
                    <circle cx="40" cy="40" r="35" stroke="#E2E8F0" stroke-width="2"/>
                    <path d="M40 25V45M40 55V55.5" stroke="#94A3B8" stroke-width="3" stroke-linecap="round"/>
                </svg>
                <h3 style="margin-bottom: 0.5rem;">No articles found</h3>
                <p style="color: #64748B;">Try adjusting your search terms</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="insights-cta-section">
        <div class="insights-cta-container">
            <div class="insights-cta-background">
                <div class="insights-cta-gradient-orb orb-1"></div>
                <div class="insights-cta-gradient-orb orb-2"></div>
            </div>
            
            <div class="insights-cta-content" data-aos="fade-up">
                <h2 class="insights-cta-heading">
                    Ready to bring your operations into <span class="text-gradient">the future?</span>
                </h2>
                <p class="insights-cta-description">
                    Our team helps businesses streamline processes, modernize systems, and build reliable data foundations.
                </p>
                <button onclick="openContactFormModal()" class="insights-cta-button">
                    <span>Book Consultation</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Insights Section (OLD - KEPT FOR REFERENCE) -->
    <section class="featured-insights-section" style="display:none;">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">Featured</span>
                <h2 class="section-title">Spotlight <span class="text-gradient">Insights</span></h2>
            </div>

            <!-- Featured Article 1 -->
            <article class="featured-article" data-aos="fade-up">
                <div class="featured-grid">
                    <div class="featured-image-wrapper">
                        <div class="featured-image">
                            <img src="{{ asset('images/dummy.jpg') }}" alt="Floating Solar Plant">
                            <div class="image-gradient-overlay"></div>
                        </div>
                        <div class="category-badge renewable">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M8 1V2M8 14V15M2.22 2.22L2.93 2.93M13.07 13.07L13.78 13.78M1 8H2M14 8H15M2.22 13.78L2.93 13.07M13.07 2.93L13.78 2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            Renewable Energy
                        </div>
                    </div>
                    
                    <div class="featured-content">
                        <div class="article-meta">
                            <span class="meta-date">January 2019</span>
                            <span class="meta-divider">•</span>
                            <span class="meta-read">5 min read</span>
                        </div>
                        <h3 class="article-title">Work Starts On 145mw Floating Solar Plant In Indonesia</h3>
                        <p class="article-excerpt">
                            The Cirata Floating Photovoltaic Power Plant project is set to be the largest of its kind in Southeast Asia and one of the largest in the world. This groundbreaking initiative represents a significant leap forward in renewable energy adoption.
                        </p>
                        <a href="#" class="read-more-btn">
                            <span>Read Full Article</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Featured Article 2 -->
            <article class="featured-article reverse" data-aos="fade-up">
                <div class="featured-grid">
                    <div class="featured-image-wrapper">
                        <div class="featured-image">
                            <img src="{{ asset('images/dummy.jpg') }}" alt="Medical Innovation">
                            <div class="image-gradient-overlay"></div>
                        </div>
                        <div class="category-badge healthcare">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 1L9.5 6H15L10.5 9.5L12 15L8 11.5L4 15L5.5 9.5L1 6H6.5L8 1Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>
                            Healthcare Innovation
                        </div>
                    </div>
                    
                    <div class="featured-content">
                        <div class="article-meta">
                            <span class="meta-date">March 2019</span>
                            <span class="meta-divider">•</span>
                            <span class="meta-read">4 min read</span>
                        </div>
                        <h3 class="article-title">Life-Saving Innovation For Infants</h3>
                        <p class="article-excerpt">
                            Miniaturized wireless oxygen sensor for sick infants is being developed, marking a revolutionary advancement in neonatal care. This cutting-edge technology promises to transform how we monitor and care for vulnerable newborns.
                        </p>
                        <a href="#" class="read-more-btn">
                            <span>Read Full Article</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <!-- SVG Gradients -->
    <svg width="0" height="0">
        <defs>
            <linearGradient id="newsletterGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#00E5FF"/>
                <stop offset="100%" stop-color="#0EA5E9"/>
            </linearGradient>
        </defs>
    </svg>

@endsection
