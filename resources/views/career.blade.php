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
                {{ __('career.hero.badge') }}
            </div>
            <h1 class="career-hero-title" data-aos="fade-up" data-aos-delay="200">
                <span class="career-title-line">{!! __('career.hero.title') !!}</span>
            </h1>
            <p class="career-hero-subtitle" data-aos="fade-up" data-aos-delay="300">
                {{ __('career.hero.subtitle') }}
            </p>
        </div>
    </section>

    <!-- About SBI Section -->
    <section class="career-about-section">
        <div class="career-section-container">
            <div class="career-about-grid">
                <div class="career-about-main" data-aos="fade-right">
                    <h2 class="career-about-title">
                        {!! __('career.about.title') !!}
                    </h2>
                </div>
                <div class="career-about-content" data-aos="fade-left" data-aos-delay="200">
                    <p>
                        {{ __('career.about.paragraph_1') }}
                    </p>
                    <p>
                        {!! __('career.about.paragraph_2') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Join SBI Section -->
    <section class="career-why-section">
        <div class="career-section-container">
            <div class="career-section-header" data-aos="fade-up">
                <span class="career-section-tag">{{ __('career.why.tag') }}</span>
                <h2 class="career-section-title">{!! __('career.why.title') !!}</h2>
            </div>

            <div class="career-why-grid">
                @php
                    $benefits = ['growth', 'learning', 'future', 'culture'];
                    $delays = [100, 200, 100, 400];
                    $animations = ['fade-up', 'fade-up', 'fade-right', 'fade-up'];
                    $gradientIds = ['gradient1', 'gradient2', 'gradient3', 'gradient4'];
                @endphp
                
                @foreach($benefits as $index => $benefit)
                <!-- Benefit {{ $index + 1 }} -->
                <div class="career-why-card" data-aos="{{ $animations[$index] }}" data-aos-delay="{{ $delays[$index] }}">
                    <div class="career-why-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                            @if($benefit == 'growth')
                            <path d="M24 4L30 18L44 20L34 30L37 44L24 36L11 44L14 30L4 20L18 18L24 4Z" stroke="url(#{{ $gradientIds[$index] }})" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            @elseif($benefit == 'learning')
                            <rect x="8" y="8" width="32" height="32" rx="4" stroke="url(#{{ $gradientIds[$index] }})" stroke-width="2" fill="none"/>
                            <path d="M16 24L22 30L32 18" stroke="url(#{{ $gradientIds[$index] }})" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            @elseif($benefit == 'future')
                            <circle cx="24" cy="24" r="16" stroke="url(#{{ $gradientIds[$index] }})" stroke-width="2" fill="none"/>
                            <path d="M24 14V24L30 30" stroke="url(#{{ $gradientIds[$index] }})" stroke-width="2" stroke-linecap="round"/>
                            @else
                            <path d="M12 36L24 24L36 36M12 24L24 12L36 24" stroke="url(#{{ $gradientIds[$index] }})" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            @endif
                            <defs>
                                <linearGradient id="{{ $gradientIds[$index] }}" x1="{{ $benefit == 'culture' ? '12' : ($benefit == 'future' ? '8' : '4') }}" y1="{{ $benefit == 'culture' ? '12' : ($benefit == 'future' ? '8' : '4') }}" x2="{{ $benefit == 'culture' ? '36' : ($benefit == 'future' ? '40' : '44') }}" y2="{{ $benefit == 'culture' ? '36' : ($benefit == 'future' ? '40' : '44') }}">
                                    <stop offset="0%" stop-color="#0EA5E9"/>
                                    <stop offset="100%" stop-color="#0284C7"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="career-why-title">{{ __('career.why.benefits.' . $benefit . '.title') }}</h3>
                    <p class="career-why-text">
                        {{ __('career.why.benefits.' . $benefit . '.description') }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Opportunities Section -->
    <section class="career-opportunities-section">
        <div class="career-section-container">
            <div class="career-section-header" data-aos="fade-up">
                <span class="career-section-tag">{{ __('career.opportunities.tag') }}</span>
                <h2 class="career-section-title">{!! __('career.opportunities.title') !!}</h2>
            </div>

            <div class="career-opportunities-grid">
                <!-- Business Analyst - Full Time -->
                <div class="career-opp-card" data-aos="zoom-in" data-aos-delay="100" onclick="openModal('fulltime')">
                    <div class="career-opp-image">
                        <img src="{{ asset('images/about-hero.jpg') }}" alt="Business Analyst Position">
                        <div class="career-opp-image-overlay"></div>
                    </div>
                    <div class="career-opp-content">
                        <div class="career-opp-badge">{{ __('career.opportunities.fulltime.badge') }}</div>
                        <div class="career-opp-number">{{ __('career.opportunities.fulltime.number') }}</div>
                        <h3 class="career-opp-title">{{ __('career.opportunities.fulltime.title') }}</h3>
                        <p class="career-opp-summary">
                            {{ __('career.opportunities.fulltime.summary') }}
                        </p>
                        <div class="career-opp-tags">
                            @foreach(__('career.opportunities.fulltime.tags') as $tag)
                            <span class="career-opp-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <button class="career-opp-btn">
                            {{ __('career.opportunities.fulltime.button') }}
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
                        <div class="career-opp-badge internship">{{ __('career.opportunities.internship.badge') }}</div>
                        <div class="career-opp-number">{{ __('career.opportunities.internship.number') }}</div>
                        <h3 class="career-opp-title">{{ __('career.opportunities.internship.title') }}</h3>
                        <p class="career-opp-summary">
                            {{ __('career.opportunities.internship.summary') }}
                        </p>
                        <div class="career-opp-tags">
                            @foreach(__('career.opportunities.internship.tags') as $tag)
                            <span class="career-opp-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <button class="career-opp-btn">
                            {{ __('career.opportunities.internship.button') }}
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
                <span class="career-testimonial-tag">{{ __('career.testimonials.tag') }}</span>
                <h2 class="career-testimonial-title">{!! __('career.testimonials.title') !!}</h2>
                <p class="career-testimonial-subtitle">{{ __('career.testimonials.subtitle') }}</p>
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
                    {{ __('career.testimonials.items.0.text') }}                   </p>
                    <div class="career-testimonial-author">
                        <div class="career-author-avatar">
                            <img src="{{ asset('images/team/' . __('career.testimonials.items.0.image')) }}" alt="{{ __('career.testimonials.items.0.name') }}">
                            <div class="career-avatar-ring"></div>
                        </div>
                        <div class="career-author-info">
                            <h4 class="career-author-name">{{ __('career.testimonials.items.0.name') }}</h4>
                            <p class="career-author-role">{!! __('career.testimonials.items.0.role') !!}</p>
                            <p class="career-author-tenure">{{ __('career.testimonials.items.0.tenure') }}</p>
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
                    {{ __('career.testimonials.items.1.text') }}                    </p>
                    <div class="career-testimonial-author">
                        <div class="career-author-avatar">
                            <img src="{{ asset('images/team/' . __('career.testimonials.items.1.image')) }}" alt="{{ __('career.testimonials.items.1.name') }}">
                            <div class="career-avatar-ring"></div>
                        </div>
                        <div class="career-author-info">
                            <h4 class="career-author-name">{{ __('career.testimonials.items.1.name') }}</h4>
                            <p class="career-author-role">{!! __('career.testimonials.items.1.role') !!}</p>
                            <p class="career-author-tenure">{{ __('career.testimonials.items.1.tenure') }}</p>
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
                        {{ __('career.testimonials.items.2.text') }}
                    </p>
                    <div class="career-testimonial-author">
                        <div class="career-author-avatar">
                            <img src="{{ asset('images/team/' . __('career.testimonials.items.2.image')) }}" alt="{{ __('career.testimonials.items.2.name') }}">
                            <div class="career-avatar-ring"></div>
                        </div>
                        <div class="career-author-info">
                            <h4 class="career-author-name">{{ __('career.testimonials.items.2.name') }}</h4>
                            <p class="career-author-role">{!! __('career.testimonials.items.2.role') !!}</p>
                            <p class="career-author-tenure">{{ __('career.testimonials.items.2.tenure') }}</p>
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
                <h2 class="career-cta-title">{{ __('career.cta.title') }}</h2>
            </div>

            <div class="career-cta-grid" data-aos="fade-up" data-aos-delay="200">
                <!-- Left Side - Join Us -->
                <div class="career-cta-left">
                    <p class="career-cta-subtitle">{{ __('career.cta.subtitle') }}</p>
                    <p class="career-cta-text">{{ __('career.cta.text') }}</p>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ __('career.cta.email') }}&su=Application:%20Career%20at%20SBI&body=Hello%20SBI%20Team,%0D%0A%0D%0AI%20am%20interested%20in%20joining%20your%20team.%0D%0A%0D%0A" target="_blank" class="career-cta-email">
                        {{ __('career.cta.email') }}
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

                <!-- Right Side - Please Include -->
                <div class="career-cta-right">
                    <p class="career-cta-include-title">{{ __('career.cta.include_title') }}</p>
                    <div class="career-cta-include-list">
                        @foreach(__('career.cta.include_items') as $item)
                        <div class="career-include-item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>{{ $item }}</span>
                        </div>
                        @endforeach
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
                <div class="career-modal-badge">{{ __('career.modal.fulltime.badge') }}</div>
                <h3 class="career-modal-title">{{ __('career.modal.fulltime.title') }}</h3>
            </div>

            <div class="career-modal-body">
                <div class="career-modal-section">
                    <h4>{{ __('career.modal.fulltime.majors_title') }}</h4>
                    <div class="career-modal-majors">
                        @foreach(__('career.modal.fulltime.majors_list') as $major)
                        <span>{{ $major }}</span>
                        @endforeach
                    </div>
                    <p class="career-modal-note">
                        {{ __('career.modal.fulltime.majors_note') }}
                    </p>
                </div>

                <div class="career-modal-section">
                    <h4>{{ __('career.modal.fulltime.role_title') }}</h4>
                    <p>
                        {{ __('career.modal.fulltime.role_description') }}
                    </p>
                </div>

                <div class="career-modal-section">
                    <h4>{{ __('career.modal.fulltime.requirements_title') }}</h4>
                    <ul class="career-modal-list">
                        @foreach(__('career.modal.fulltime.requirements_list') as $requirement)
                        <li>{{ $requirement }}</li>
                        @endforeach
                    </ul>
                    <p class="career-modal-highlight">
                        {{ __('career.modal.fulltime.highlight') }}
                    </p>
                </div>
            </div>

            <div class="career-modal-footer">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hr@samuderabiru.net&su=Application:%20Business%20Analyst%20Full-time&body=Hello%20SBI%20Team,%0D%0A%0D%0AI%20am%20interested%20in%20applying%20for%20the%20Business%20Analyst%20Full-time%20position.%0D%0A%0D%0A" target="_blank" class="career-modal-apply-btn">
                    {{ __('career.modal.fulltime.apply_button') }}
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
                <div class="career-modal-badge internship">{{ __('career.modal.internship.badge') }}</div>
                <h3 class="career-modal-title">{{ __('career.modal.internship.title') }}</h3>
            </div>

            <div class="career-modal-body">
                <div class="career-modal-section">
                    <h4>{{ __('career.modal.internship.overview_title') }}</h4>
                    <p>
                        {{ __('career.modal.internship.overview_description') }}
                    </p>
                    <p class="career-modal-note">
                        {{ __('career.modal.internship.overview_note') }}
                    </p>
                </div>

                <div class="career-modal-section">
                    <h4>{{ __('career.modal.internship.ideal_title') }}</h4>
                    <ul class="career-modal-list">
                        @foreach(__('career.modal.internship.ideal_list') as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="career-modal-section">
                    <p class="career-modal-highlight">
                        {{ __('career.modal.internship.highlight') }}
                    </p>
                </div>
            </div>

            <div class="career-modal-footer">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hr@samuderabiru.net&su=Application:%20Business%20Analyst%20Internship&body=Hello%20SBI%20Team,%0D%0A%0D%0AI%20am%20interested%20in%20applying%20for%20the%20Business%20Analyst%20Internship%20position.%0D%0A%0D%0A" target="_blank" class="career-modal-apply-btn">
                    {{ __('career.modal.internship.apply_button') }}
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

