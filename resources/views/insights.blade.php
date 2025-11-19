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
                Latest Updates
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

    <!-- Featured Insights Section -->
    <section class="featured-insights-section">
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

    <!-- More Insights Grid Section -->
    <section class="more-insights-section">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">More <span class="text-gradient">Insights</span></h2>
                <p class="section-subtitle">Explore our latest articles and industry perspectives</p>
            </div>

            <div class="insights-grid">
                <!-- Insight Card 1 -->
                <article class="insight-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-image">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Border Markets">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category infrastructure">Infrastructure</div>
                        <h4 class="card-title">Terminals and markets will be built on the border</h4>
                        <p class="card-excerpt">
                            <strong>January 2019</strong> – The government is planning a program to improve the economic conditions in the border region by building support facilities located at the cross-border post.
                        </p>
                        <div class="card-footer">
                            <a href="#" class="card-link">
                                Learn More
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Insight Card 2 -->
                <article class="insight-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-image">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="West Java Development">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category development">Development</div>
                        <h4 class="card-title">Development of the infrastructure in West Java</h4>
                        <p class="card-excerpt">
                            <strong>February 2019</strong> – The construction of highways and industrial areas in the east region of West Java shows a promising future for Indonesia's economic growth.
                        </p>
                        <div class="card-footer">
                            <a href="#" class="card-link">
                                Learn More
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Insight Card 3 -->
                <article class="insight-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-image">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Technology Innovation">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category technology">Technology</div>
                        <h4 class="card-title">Digital Transformation in Manufacturing</h4>
                        <p class="card-excerpt">
                            <strong>March 2019</strong> – Industry 4.0 implementation strategies and smart manufacturing solutions are reshaping the Indonesian industrial landscape.
                        </p>
                        <div class="card-footer">
                            <a href="#" class="card-link">
                                Learn More
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Insight Card 4 -->
                <article class="insight-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-image">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Supply Chain">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category logistics">Logistics</div>
                        <h4 class="card-title">Future of Supply Chain Management</h4>
                        <p class="card-excerpt">
                            <strong>April 2019</strong> – Advanced analytics and AI-driven logistics are transforming how businesses manage their supply chains in the digital era.
                        </p>
                        <div class="card-footer">
                            <a href="#" class="card-link">
                                Learn More
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Insight Card 5 -->
                <article class="insight-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-image">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Sustainability">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category sustainability">Sustainability</div>
                        <h4 class="card-title">Green Business Practices</h4>
                        <p class="card-excerpt">
                            <strong>May 2019</strong> – Implementing sustainable business practices and carbon-neutral operations for a greener future in Indonesia.
                        </p>
                        <div class="card-footer">
                            <a href="#" class="card-link">
                                Learn More
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Insight Card 6 -->
                <article class="insight-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-image">
                        <img src="{{ asset('images/dummy.jpg') }}" alt="Talent Development">
                        <div class="card-overlay"></div>
                    </div>
                    <div class="card-content">
                        <div class="card-category talent">Talent</div>
                        <h4 class="card-title">Building Future-Ready Workforce</h4>
                        <p class="card-excerpt">
                            <strong>June 2019</strong> – Upskilling and reskilling programs to prepare Indonesian workforce for the challenges of tomorrow.
                        </p>
                        <div class="card-footer">
                            <a href="#" class="card-link">
                                Learn More
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="load-more-wrapper" data-aos="fade-up">
                <button class="load-more-btn">
                    <span>Load More Insights</span>
                    <div class="btn-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10 4V16M10 16L15 11M10 16L5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="newsletter-container" data-aos="fade-up">
            <div class="newsletter-content">
                <div class="newsletter-icon">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                        <rect x="4" y="8" width="40" height="32" rx="4" stroke="url(#newsletterGradient)" stroke-width="2"/>
                        <path d="M4 12L24 26L44 12" stroke="url(#newsletterGradient)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="newsletter-title">Stay Updated</h3>
                <p class="newsletter-description">Subscribe to our newsletter for the latest insights and industry updates</p>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input type="email" placeholder="Enter your email address" class="newsletter-input" required>
                        <button type="submit" class="newsletter-submit">
                            <span>Subscribe</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
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
