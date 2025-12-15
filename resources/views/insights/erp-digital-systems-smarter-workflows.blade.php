@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article1.jpg') }}" alt="ERP Digital Systems" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge digital">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M8 1V2M8 14V15M2.22 2.22L2.93 2.93M13.07 13.07L13.78 13.78M1 8H2M14 8H15M2.22 13.78L2.93 13.07M13.07 2.93L13.78 2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                {{ __('insights.detail.categories.digital') }}
            </div>
            
            <h1 class="article-hero-title">
                @if(app()->getLocale() == 'id')
                    ERP & Sistem Digital: Membangun Alur Kerja Cerdas yang Melindungi Pendapatan dan Mempercepat Pertumbuhan
                @else
                    ERP & Digital Systems: Building Smarter Workflows That Protect Revenue and Accelerate Growth
                @endif
            </h1>
            
            <div class="article-hero-meta">
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 4v4l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    8 {{ __('insights.detail.min_read') }}
                </div>
                <div class="article-meta-divider"></div>
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <rect x="2" y="3" width="12" height="11" rx="2" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M2 6h12M5 1v2M11 1v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    November 2024
                </div>
            </div>
        </div>
    </section>

    <!-- Article Summary Section -->
    <section class="article-summary-section">
        <div class="article-summary-container" data-aos="fade-up">
            <p class="article-summary-text">
                @if(app()->getLocale() == 'id')
                    Pembayaran adalah urat nadi setiap bisnis, namun proses penagihan dan penagihan sering kali menjadi salah satu bagian yang paling diabaikan dari operasi harian. Ketika ERP dan sistem digital Anda tidak dirancang untuk mendukung alur kerja yang cepat, akurat, dan otomatis, dampaknya terasa di mana-mana: arus kas melambat, tim bekerja lebih keras dari yang diperlukan, pelaporan menjadi tidak konsisten, dan bisnis tanpa sadar kehilangan waktu setiap hari.
                @else
                    Payments are the lifeblood of every business, yet the billing and collection process is often one of the most overlooked parts of daily operations. When your ERP and digital systems aren't designed to support fast, accurate, and automated workflows, the impact is felt everywhere: cash flow slows, teams work harder than necessary, reporting becomes inconsistent, and the business unknowingly loses time every single day.
                @endif
            </p>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="article-content-section">
        <div class="article-content-container">
            <article class="article-content-body" data-aos="fade-up">
                <h2>
                    @if(app()->getLocale() == 'id')
                        Mengapa Sistem Pembayaran dan Penagihan Lebih Penting dari yang Disadari Sebagian Besar Perusahaan
                    @else
                        Why Payments and Billing Systems Matter More Than Most Companies Realize
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Di bisnis apa pun—tidak peduli industrinya—pembayaran sangat penting. Mereka menjaga organisasi tetap bergerak, memicu pertumbuhan, dan menentukan kesehatan arus kas. Namun ironisnya, sistem di balik pembayaran ini sering diabaikan.
                    @else
                        In any business—no matter the industry—payments are essential. They keep the organization moving, fuel growth, and determine cash flow health. Yet ironically, the systems behind these payments are often neglected.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Banyak perusahaan mengandalkan alur kerja lama, tanggung jawab yang tersebar, pembubuhan cap manual, pemeriksaan dokumen berulang, atau pengiriman faktur fisik. Kelemahan ini tersembunyi di tempat terbuka. Dan karena tugas-tugas ini terjadi berkali-kali sehari, ketidakefisienan secara diam-diam bertambah selama berbulan-bulan dan bertahun-tahun.
                    @else
                        Many companies rely on old workflows, scattered responsibilities, manual stamping, repeated document checks, or physical invoice delivery. These weaknesses hide in plain sight. And because these tasks occur many times a day, the inefficiency quietly compounds over months and years.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Apa yang tampak seperti penundaan 10 menit dalam satu faktur dapat menjadi jam yang hilang setiap minggu, hari yang hilang setiap bulan, dan dampak keuangan yang besar setiap tahun.
                    @else
                        What seems like a 10-minute delay in a single invoice can become hours lost each week, days lost each month, and massive financial impact annually.
                    @endif
                </p>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Hambatan operasional dalam proses pembayaran adalah salah satu biaya diam terbesar dalam bisnis.
                    @else
                        Operational drag in payment processes is one of the biggest silent costs in business.
                    @endif
                </blockquote>

                <div class="article-content-image" data-aos="fade-up">
                    <img src="{{ asset('images/insights/article1.jpg') }}" alt="ERP System Dashboard - Billing Optimization">
                    <div class="article-image-caption">
                        @if(app()->getLocale() == 'id')
                            Sistem ERP modern memungkinkan penagihan terpusat dan alur kerja otomatis, mengubah proses manual menjadi operasi yang efisien
                        @else
                            Modern ERP systems enable centralized billing and automated workflows, transforming manual processes into streamlined operations
                        @endif
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Mengubah Proses 67 Menit Menjadi 35 Menit
                    @else
                        Turning a 67-Minute Process Into 35 Minutes
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dalam salah satu proyek kami baru-baru ini, kami memeriksa proses penagihan dan penagihan perusahaan dan menemukan jumlah pekerjaan manual yang tidak perlu—pencetakan fisik, penyerahan dokumen kepada kolektor, persetujuan manual, pemeriksaan berulang, dan penundaan yang sering dalam menerima pembayaran.
                    @else
                        In one of our recent projects, we examined a company's billing and collection process and found an unnecessary amount of manual work—physical printing, handing documents to collectors, manual approvals, repeated checks, and frequent delays in receiving payments.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dengan merancang ulang alur kerja dan meningkatkan integrasi ERP, kami memusatkan penagihan, mengaktifkan tanda tangan elektronik, mendigitalkan persetujuan, dan menghapus langkah-langkah yang tidak menambah nilai nyata.
                    @else
                        By redesigning the workflow and upgrading the ERP integration, we centralized billing, enabled e-signatures, digitized approvals, and removed steps that added no real value.
                    @endif
                </p>

                <div class="article-highlight-box">
                    <h3>
                        @if(app()->getLocale() == 'id')
                            Hasilnya?
                        @else
                            The result?
                        @endif
                    </h3>
                    <ul>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Waktu proses keseluruhan turun dari <strong>67 menit menjadi 35 menit</strong>
                            @else
                                The overall process time dropped from <strong>67 minutes to 35 minutes</strong>
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Penyerahan dokumen fisik dihilangkan
                            @else
                                Physical handing-over of documents was eliminated
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Pembayaran dikenali lebih cepat
                            @else
                                Payments were recognized faster
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Tim penagihan dan penagihan mendapatkan jam produktivitas setiap hari
                            @else
                                Billing and collection teams gained hours of productivity every day
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Arus kas menjadi lebih dapat diprediksi dan lebih sehat
                            @else
                                Cash flow became more predictable and healthier
                            @endif
                        </li>
                    </ul>
                </div>

                <p>
                    @if(app()->getLocale() == 'id')
                        Peningkatan semacam ini bukan tentang menambahkan alat baru—ini tentang merancang sistem yang tepat, alur yang tepat, dan otomasi yang tepat.
                    @else
                        This kind of improvement is not about adding new tools—it's about designing the right system, the right flow, and the right automation.
                    @endif
                </p>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">48%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pengurangan Waktu
                            @else
                                Time Reduction
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">100%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Persetujuan Digital
                            @else
                                Digital Approval
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">0</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Dokumen Fisik
                            @else
                                Physical Documents
                            @endif
                        </span>
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Peningkatan Sistem Kecil Menciptakan Dampak Bisnis Besar
                    @else
                        Small System Improvements Create Big Business Impact
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Ketika alur kerja pembayaran menjadi terpusat, terdigitalisasi, dan otomatis, dampaknya menyebar ke seluruh bisnis. Waktu siklus turun drastis, memberi tim lebih banyak ruang untuk fokus pada pekerjaan yang bermakna alih-alih tugas administratif yang berulang. Keuangan mendapatkan visibilitas yang lebih cepat dan lebih jelas tentang pendapatan yang masuk, memungkinkan arus kas dipantau dan diproyeksikan dengan akurasi yang jauh lebih besar. Tim penjualan beroperasi dengan lebih percaya diri karena batas kredit diperbarui secara real-time, mengurangi kemungkinan penundaan pasokan atau miskomunikasi dengan pelanggan.
                    @else
                        When payment workflows become centralized, digitized, and automated, the impact ripples across the entire business. Cycle times drop dramatically, giving teams more room to focus on meaningful work instead of repetitive administrative tasks. Finance gains faster and clearer visibility into incoming revenue, allowing cash flow to be monitored and projected with far greater accuracy. Sales teams operate more confidently because credit limits are updated in real time, reducing the chances of supply delays or miscommunication with customers.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Pada saat yang sama, kasir dan kolektor dapat berkonsentrasi pada kasus-kasus luar biasa yang benar-benar membutuhkan perhatian daripada menghabiskan berjam-jam untuk langkah-langkah rutin yang dapat ditangani oleh teknologi. Pelanggan juga mendapat manfaat—dokumen penagihan tiba lebih cepat, lebih konsisten, dan dengan lebih sedikit kesalahan, meningkatkan pengalaman mereka dan memperkuat kepercayaan. Dan karena langkah manual berkurang secara signifikan, risiko kesalahan, penundaan, atau masalah kepatuhan secara keseluruhan menurun.
                    @else
                        At the same time, cashiers and collectors can concentrate on the exceptional cases that truly need attention rather than spending hours on routine steps that technology can handle. Customers benefit as well—billing documents arrive faster, more consistently, and with fewer errors, improving their experience and strengthening trust. And because manual steps are significantly reduced, the overall risk of mistakes, delays, or compliance issues decreases.
                    @endif
                </p>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Satu Contoh, Banyak Kemungkinan
                    @else
                        One Example, Many Possibilities
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Kasus optimasi penagihan hanyalah satu ilustrasi dari apa yang dapat dicapai oleh peningkatan ERP dan sistem digital. SBI bekerja di seluruh ekosistem—pengadaan, logistik, keuangan, pelaporan, orientasi pelanggan, manajemen aset, dan lainnya untuk menciptakan mesin operasional yang lebih sehat dan lebih tangguh.
                    @else
                        The billing optimization case is just one illustration of what ERP and digital system improvements can achieve. SBI works across the entire ecosystem—procurement, logistics, finance, reporting, customer onboarding, asset management, and more to create a healthier, more resilient operational engine.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Apakah Anda berjuang dengan siklus penagihan yang lambat, pelaporan yang tidak konsisten, atau sistem yang terputus, arsitektur digital yang tepat dapat mengubah cara bisnis Anda beroperasi—memungkinkan keputusan yang lebih cepat, kinerja yang lebih kuat, dan pertumbuhan yang berkelanjutan.
                    @else
                        Whether you're struggling with slow billing cycles, inconsistent reporting, or disconnected systems, the right digital architecture can transform how your business operates—enabling faster decisions, stronger performance, and sustainable growth.
                    @endif
                </p>
            </article>
        </div>
    </section>

    <!-- Back Navigation -->
    <section class="article-back-nav">
        <div class="article-back-container">
            <a href="{{ route('insights') }}" class="article-back-button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M16 10H4M4 10L9 5M4 10L9 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>{{ __('insights.detail.back_to_insights') }}</span>
            </a>
        </div>
    </section>
@endsection
