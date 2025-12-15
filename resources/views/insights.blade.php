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
        
        <div class="insights-hero-content">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                {{ __('insights.hero.badge') }}
            </div>
            <h1 class="hero-heading">
                <span class="text-gradient typing-text" data-text="{{ __('insights.hero.title') }}"></span>
                <br>
                <span class="typing-text-second" data-text="{{ __('insights.hero.title_second') }}"></span>
            </h1>
            <p class="hero-description" style="opacity: 0;">
                {{ __('insights.hero.description') }}
            </p>
        </div>
    </section>

    <!-- Search & Articles Section -->
    <section class="insights-articles-section">
        <div class="insights-section-container">
            <!-- Search & Filter Bar -->
            <div class="insights-search-filter-wrapper">
                <div class="insights-controls-row">
                    <!-- Search Box -->
                    <div class="insights-search-box">
                        <svg class="insights-search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 16L21 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <input 
                            type="text" 
                            class="insights-search-input" 
                            placeholder="{{ __('insights.search.placeholder') }}"
                            id="insightsArticleSearch"
                        >
                        <button class="insights-search-clear" id="insightsClearSearch" style="display: none;">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M5 5L15 15M15 5L5 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Filter Dropdown -->
                    <div class="insights-dropdown">
                        <button class="insights-dropdown-btn" id="filterDropdownBtn" type="button">
                            <span id="currentFilter">{{ __('insights.search.filters.all') }}</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="insights-dropdown-menu" id="filterDropdownMenu">
                            <button type="button" class="insights-dropdown-option active" data-filter="all">{{ __('insights.search.filters.all') }}</button>
                            <button type="button" class="insights-dropdown-option" data-filter="digital">{{ __('insights.search.filters.digital') }}</button>
                            <button type="button" class="insights-dropdown-option" data-filter="integration">{{ __('insights.search.filters.integration') }}</button>
                            <button type="button" class="insights-dropdown-option" data-filter="operational">{{ __('insights.search.filters.operational') }}</button>
                            <button type="button" class="insights-dropdown-option" data-filter="data">{{ __('insights.search.filters.data') }}</button>
                            <button type="button" class="insights-dropdown-option" data-filter="capability">{{ __('insights.search.filters.capability') }}</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="insights-articles-grid" id="insightsArticlesGrid">
                <!-- Article Card 1 -->
                <article class="insights-article-card" data-tag="digital">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article1.jpg') }}" alt="ERP Digital Systems">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag digital">{{ __('insights.articles.article_1.category') }}</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">{{ __('insights.articles.article_1.title') }}</h3>
                        <p class="insights-article-summary">
                            {{ __('insights.articles.article_1.summary') }}
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'erp-digital-systems-smarter-workflows']) }}" class="insights-read-more-link">
                            <span>{{ __('insights.articles.read_more') }}</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 2 -->
                <article class="insights-article-card" data-tag="integration">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article2.jpg') }}" alt="System Integration">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag integration">{{ __('insights.articles.article_2.category') }}</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">{{ __('insights.articles.article_2.title') }}</h3>
                        <p class="insights-article-summary">
                            {{ __('insights.articles.article_2.summary') }}
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'system-integration-intelligent-flow']) }}" class="insights-read-more-link">
                            <span>{{ __('insights.articles.read_more') }}</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 3 -->
                <article class="insights-article-card" data-tag="operational">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article3.jpg') }}" alt="Operational Efficiency">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag operational">{{ __('insights.articles.article_3.category') }}</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">{{ __('insights.articles.article_3.title') }}</h3>
                        <p class="insights-article-summary">
                            {{ __('insights.articles.article_3.summary') }}
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'operational-efficiency-process-redesign']) }}" class="insights-read-more-link">
                            <span>{{ __('insights.articles.read_more') }}</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 4 -->
                <article class="insights-article-card" data-tag="data">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article4.jpg') }}" alt="Data Analytics Dashboards">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag data">{{ __('insights.articles.article_4.category') }}</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">{{ __('insights.articles.article_4.title') }}</h3>
                        <p class="insights-article-summary">
                            {{ __('insights.articles.article_4.summary') }}
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'actionable-dashboards-analytics']) }}" class="insights-read-more-link">
                            <span>{{ __('insights.articles.read_more') }}</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M4 10H16M16 10L11 5M16 10L11 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Article Card 5 -->
                <article class="insights-article-card" data-tag="capability">
                    <div class="insights-article-thumbnail">
                        <img src="{{ asset('images/insights/article5.jpg') }}" alt="Digital Learning">
                        <div class="insights-thumbnail-overlay"></div>
                        <div class="insights-category-tag capability">{{ __('insights.articles.article_5.category') }}</div>
                    </div>
                    <div class="insights-article-body">
                        <h3 class="insights-article-title-card">{{ __('insights.articles.article_5.title') }}</h3>
                        <p class="insights-article-summary">
                            {{ __('insights.articles.article_5.summary') }}
                        </p>
                        <a href="{{ route('insights.detail', ['slug' => 'samatoredu-digital-learning']) }}" class="insights-read-more-link">
                            <span>{{ __('insights.articles.read_more') }}</span>
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
                <h3 style="margin-bottom: 0.5rem;">{{ __('insights.articles.no_results') }}</h3>
                <p style="color: #64748B;">{{ __('insights.articles.no_results_desc') }}</p>
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
            
            <div class="insights-cta-content">
                <h2 class="insights-cta-heading">
                    {!! __('insights.cta.heading') !!}
                </h2>
                <p class="insights-cta-description">
                    {{ __('insights.cta.description') }}
                </p>
                <button onclick="openContactFormModal()" class="insights-cta-button">
                    <span>{{ __('insights.cta.button') }}</span>
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
            <div class="section-header">
                <span class="section-tag">Featured</span>
                <h2 class="section-title">Spotlight <span class="text-gradient">Insights</span></h2>
            </div>

            <!-- Featured Article 1 -->
            <article class="featured-article">
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
            <article class="featured-article reverse">
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

    <!-- Contact Form Modal -->
    @include('components.service-contact-modal')

@endsection

@push('scripts')
<script>
    // Inject service translations for contact form modal
    window.serviceTranslations = {
        contactForm: @json(__('services.contact_form')),
        notifications: @json(__('services.notifications'))
    };
</script>
@endpush
