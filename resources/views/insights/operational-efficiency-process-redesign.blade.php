@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article3.jpg') }}" alt="Operational Efficiency" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge operational">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M2 8l4 4 8-8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ __('insights.detail.categories.operational') }}
            </div>
            
            <h1 class="article-hero-title">
                @if(app()->getLocale() == 'id')
                    Mendorong Efisiensi Operasional: Bagaimana Redesain Proses Cerdas Mempercepat Pekerjaan, Mengurangi Biaya, dan Memungkinkan Pertumbuhan
                @else
                    Driving Operational Efficiency: How Smart Process Redesign Speeds Up Work, Reduces Costs, and Enables Growth
                @endif
            </h1>
            
            <div class="article-hero-meta">
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 4v4l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    9 {{ __('insights.detail.min_read') }}
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
                    Efisiensi operasional adalah tulang punggung dari setiap bisnis yang dapat diskalakan. Seiring operasi tumbuh, bahkan ketidakefisienan kecil—langkah persetujuan tambahan, entri data manual, rekonsiliasi berulang—dapat menggelinding menjadi penundaan, kehilangan pendapatan, dan kelelahan karyawan. Artikel ini menunjukkan bagaimana SBI membantu perusahaan mengidentifikasi hambatan, merampingkan proses, mengotomatisasi tugas rutin, dan memastikan bahwa operasi tetap cepat, akurat, dan tangguh.
                @else
                    Operational efficiency is the backbone of any scalable business. As operations grow, even small inefficiencies—extra approval steps, manual data entry, repetitive reconciliation—can snowball into delays, lost revenue, and employee burnout. This article shows how SBI helps companies identify bottlenecks, streamline processes, automate routine tasks, and ensure that operations stay fast, accurate, and resilient.
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
                        Mengapa Efisiensi Operasional Lebih Penting Saat Bisnis Anda Berkembang
                    @else
                        Why Operational Efficiency Matters More as Your Business Expands
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Setiap perusahaan mengandalkan proses—apakah itu penagihan, pemenuhan pesanan, persetujuan, atau pelaporan. Pada tahap awal, ketidakefisienan dapat dikelola, terkadang bahkan tidak terlihat. Tetapi begitu bisnis Anda berkembang, ketidakefisienan ini mulai menyakitkan: faktur macet, uang datang terlambat, pelanggan menunggu lebih lama, karyawan menjadi kelebihan beban, dan risiko operasional menumpuk.
                    @else
                        Every company relies on processes—whether it's billing, order fulfillment, approvals, or reporting. In the early stages, inefficiencies are manageable, sometimes even invisible. But once your business scales, these inefficiencies start to hurt: invoices get stuck, money comes in late, customers wait longer, employees become overloaded, and operational risks pile up.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Kenyataannya, sebagian besar ketidakefisienan tidak disebabkan oleh orang. Mereka berasal dari alur kerja yang ketinggalan zaman: langkah-langkah yang tidak lagi masuk akal, tugas manual yang seharusnya diotomatisasi, atau persyaratan yang menciptakan lebih banyak gesekan daripada nilai. Ketika proses Anda tertahan, seluruh operasi Anda merasakannya.
                    @else
                        The truth is, most inefficiencies aren't caused by people. They come from outdated workflows: steps that no longer make sense, manual tasks that should be automated, or requirements that create more friction than value. When your process drags, your entire operation feels it.
                    @endif
                </p>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Contoh Nyata: Ketika Satu Langkah Kecil Memperlambat Seluruh Bisnis
                    @else
                        A Real Example: When One Small Step Slows Down an Entire Business
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Mari kita ambil contoh yang disederhanakan dan dianonimkan yang terinspirasi dari kasus nyata yang ditangani SBI.
                    @else
                        Let's take a simplified and anonymized example inspired by a real case SBI handled.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Sebuah perusahaan berjuang dengan masalah harian dalam proses penagihan mereka. Setiap faktur di atas ambang batas tertentu memerlukan langkah tambahan—memeriksa persyaratan bea meterai, menambahkan persetujuan manual, dan mengetik informasi berulang kali ke dalam berbagai sistem. Apa yang tampak seperti langkah administratif kecil sebenarnya menciptakan efek riak.
                    @else
                        A company struggled with a daily issue in its invoicing process. Every invoice above a certain threshold required additional steps—checking stamp duty requirements, adding manual approvals, and typing information repeatedly into multiple systems. What looked like a small administrative step actually created a ripple effect.
                    @endif
                </p>

                <div class="article-highlight-box">
                    <h3>
                        @if(app()->getLocale() == 'id')
                            Efek Riak Ketidakefisienan
                        @else
                            The Ripple Effect of Inefficiency
                        @endif
                    </h3>
                    <ul>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Karena penagihan memakan waktu lebih lama, tim penagihan memiliki lebih sedikit waktu untuk fokus pada penagihan
                            @else
                                Because invoicing took longer, billing teams had less time to focus on collections
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Faktur yang tertunda berarti penundaan dalam pembayaran
                            @else
                                Delayed invoices meant delays in payments
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Pembayaran yang tertunda mempengaruhi operasi penjualan dan batas kredit
                            @else
                                Delayed payments affected sales operations and credit limits
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Dan akhirnya, arus kas melambat—setiap hari
                            @else
                                And ultimately, cash flow slowed down—every single day
                            @endif
                        </li>
                    </ul>
                </div>

                <p>
                    @if(app()->getLocale() == 'id')
                        Semakin lama perusahaan menunda memperbaiki masalah ini, semakin mahal dan berisiko prosesnya menjadi. Kehilangan waktu, peningkatan biaya administratif, kesalahan manusia yang lebih tinggi, dan realisasi pendapatan yang lebih lambat adalah konsekuensi yang menumpuk secara diam-diam tetapi konsisten.
                    @else
                        The longer the company postponed fixing this issue, the more expensive and risky the process became. Lost time, increased administrative cost, higher human error, and slower revenue realization were consequences that piled up silently but consistently.
                    @endif
                </p>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Ini adalah jenis hambatan operasional yang dialami banyak perusahaan tanpa menyadarinya.
                    @else
                        This is the kind of operational drag many companies experience without realizing it.
                    @endif
                </blockquote>

                <div class="article-content-image" data-aos="fade-up">
                    <img src="{{ asset('images/insights/article3.jpg') }}" alt="Process Optimization Workflow">
                    <div class="article-image-caption">
                        @if(app()->getLocale() == 'id')
                            Redesain proses cerdas menghilangkan hambatan, mengotomatisasi tugas berulang, dan menciptakan alur kerja efisien yang mendukung pertumbuhan bisnis
                        @else
                            Smart process redesign eliminates bottlenecks, automates repetitive tasks, and creates streamlined workflows that support business growth
                        @endif
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Bagaimana SBI Mendekati Efisiensi Operasional
                    @else
                        How SBI Approaches Operational Efficiency
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        SBI masuk untuk menganalisis proses dari ujung ke ujung dan mengungkap hambatan yang mungkin tampak kecil tetapi memiliki dampak organisasi yang besar. Kami melihat:
                    @else
                        SBI steps in to analyze processes end-to-end and uncover bottlenecks that may seem small but have large organizational impact. We look at:
                    @endif
                </p>
                
                <ul>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Langkah mana yang tidak perlu
                        @else
                            Which steps are unnecessary
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Tugas mana yang dapat diotomatisasi
                        @else
                            Which tasks can be automated
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Di mana kesalahan sering terjadi
                        @else
                            Where errors frequently occur
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Di mana persetujuan memperlambat segalanya
                        @else
                            Where approvals slow things down
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Bagaimana informasi mengalir antara departemen
                        @else
                            How information flows between departments
                        @endif
                    </li>
                </ul>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Tetapi alih-alih sekadar memetakan masalah, kami merancang ulang alur kerja sepenuhnya—fokus pada kecepatan, kesederhanaan, akurasi, dan pengurangan risiko. Tujuannya adalah untuk mempersingkat waktu siklus, mengurangi pekerjaan manual, dan memastikan proses mendukung bisnis, bukan sebaliknya.
                    @else
                        But instead of simply mapping the problem, we redesign the workflow entirely—focusing on speed, simplicity, accuracy, and risk reduction. The goal is to shorten cycle times, reduce manual work, and make sure the process supports the business, not the other way around.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dalam kasus penagihan, ini berarti mendefinisikan ulang aturan klasifikasi, mengotomatisasi pemeriksaan berulang, menyederhanakan jalur persetujuan, dan mengganti pembuatan dokumen manual dengan sistem otomatis. Setelah dioptimalkan, faktur diproses lebih cepat, uang datang lebih awal, dan tim operasional dapat fokus pada tugas yang menambah nilai alih-alih pekerjaan berulang.
                    @else
                        In the invoicing case, this meant redefining classification rules, automating repetitive checks, simplifying approval paths, and replacing manual document creation with an automatic system. Once optimized, invoices were processed faster, money came in earlier, and operational teams could focus on value-added tasks instead of repetitive work.
                    @endif
                </p>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">60%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pemrosesan Lebih Cepat
                            @else
                                Faster Processing
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">90%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Lebih Sedikit Pekerjaan Manual
                            @else
                                Less Manual Work
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">0</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Hambatan Persetujuan
                            @else
                                Approval Bottlenecks
                            @endif
                        </span>
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Biaya Tidak Melakukan Perbaikan
                    @else
                        The Cost of Not Improving
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Risiko terbesar yang dihadapi perusahaan adalah mengasumsikan bahwa "begini cara proses bekerja."
                    @else
                        The biggest risk companies face is assuming that "this is just how the process works."
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Ketika proses melambat, orang-orang juga melambat. Dan ketika orang-orang melambat, pertumbuhan juga melambat.
                    @else
                        When processes slow down, so do people. And when people slow down, growth slows too.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Tanpa merancang ulang alur kerja yang tidak efisien, perusahaan terus menghadapi:
                    @else
                        Without redesigning inefficient workflows, companies continue to face:
                    @endif
                </p>
                
                <ul>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Waktu siklus yang lebih lama
                        @else
                            Longer cycle times
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Biaya operasional yang lebih tinggi
                        @else
                            Higher operational costs
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Akurasi yang lebih rendah dan peningkatan pekerjaan ulang
                        @else
                            Lower accuracy and increased rework
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Peningkatan risiko kredit
                        @else
                            Increased credit risk
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Penurunan kepuasan pelanggan
                        @else
                            Reduced customer satisfaction
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Kehilangan pendapatan karena penagihan lambat atau pengiriman layanan lambat
                        @else
                            Loss of revenue due to slow billing or slow service delivery
                        @endif
                    </li>
                </ul>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Di industri yang bergerak cepat, ketidakefisienan adalah kerugian strategis.
                    @else
                        In fast-moving industries, inefficiency is a strategic disadvantage.
                    @endif
                </blockquote>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Terbukti oleh Pengalaman, Disesuaikan untuk Setiap Klien
                    @else
                        Proven by Experience, Tailored for Every Client
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Contoh di atas hanyalah satu ilustrasi bagaimana SBI membantu organisasi mengoptimalkan operasi mereka. Setiap klien memiliki alur kerja yang unik, sistem yang berbeda, dan tekanan operasional yang bervariasi. Itulah mengapa pendekatan kami tidak pernah berbasis templat—kami menganalisis lingkungan, mempelajari perilaku, dan merancang ulang proses agar sesuai dengan model bisnis Anda.
                    @else
                        The example above is only one illustration of how SBI helps organizations optimize their operations. Every client has unique workflows, different systems, and varying operational pressures. That's why our approach is never template-based—we analyze the environment, study the behavior, and redesign processes to fit your business model.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Apakah itu mengotomatisasi penagihan, merampingkan persetujuan, meningkatkan alur pengadaan, atau meningkatkan koordinasi antar departemen, fokus kami tetap sama: membantu perusahaan Anda bekerja lebih cepat, lebih cerdas, dan dengan lebih sedikit hambatan.
                    @else
                        Whether it's automating billing, streamlining approvals, improving procurement flow, or enhancing inter-department coordination, our focus remains the same: helping your company work faster, smarter, and with less friction.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Karena efisiensi operasional bukan hanya tentang memotong biaya—ini tentang membuka kapasitas, memungkinkan pertumbuhan, dan membangun fondasi yang dapat berkembang secara berkelanjutan seiring bisnis Anda berkembang.
                    @else
                        Because operational efficiency isn't just about cutting costs—it's about unlocking capacity, enabling growth, and building a foundation that can scale sustainably as your business evolves.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Ketika operasi Anda dioptimalkan, tim Anda dapat bernapas. Pelanggan Anda lebih bahagia. Arus kas Anda lebih sehat. Dan bisnis Anda siap untuk tumbuh tanpa rusak.
                    @else
                        When your operations are optimized, your teams can breathe. Your customers are happier. Your cash flow is healthier. And your business is ready to grow without breaking.
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
