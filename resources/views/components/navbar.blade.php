<nav class="navbar-glass" id="mainNav">
    <div class="nav-container">
        <a class="nav-brand" href="/"> 
            <div class="brand-icon">
                @if(file_exists(public_path('sbi.webp')))
                    <img src="{{ asset('sbi.png') }}" alt="SBI Logo" style="width: 100%; height: 100%; object-fit: contain;" />
                @else
                    <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="18" stroke="url(#brandGradient)" stroke-width="2"/>
                        <path d="M12 20 L18 14 L24 20 L30 14" stroke="url(#brandGradient)" stroke-width="2" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="brandGradient" x1="0" y1="0" x2="40" y2="40">
                                <stop offset="0%" stop-color="#00E5FF"/>
                                <stop offset="100%" stop-color="#00B8D4"/>
                            </linearGradient>
                        </defs>
                    </svg>
                @endif
            </div>
        </a>

        <ul class="nav-links">
            <li><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="/services" class="nav-link {{ Request::is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="/insights" class="nav-link {{ Request::is('insights') ? 'active' : '' }}">Insights</a></li>
            <li><a href="/career" class="nav-link {{ Request::is('career') ? 'active' : '' }}">Career</a></li>
            {{-- <li><a href="/contact" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a></li> --}}
            
            <!-- Language Switcher -->
            <li class="language-switcher">
                <a href="{{ route('language.switch', 'en') }}" class="lang-link {{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
                <span class="lang-divider">|</span>
                <a href="{{ route('language.switch', 'id') }}" class="lang-link {{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
            </li>
        </ul>

        <button class="mobile-toggle" id="mobileToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>
