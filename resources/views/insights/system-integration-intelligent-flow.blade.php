@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article2.jpg') }}" alt="System Integration" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge integration">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <circle cx="8" cy="8" r="3" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M8 1V2M8 14V15M2.22 2.22L2.93 2.93M13.07 13.07L13.78 13.78M1 8H2M14 8H15M2.22 13.78L2.93 13.07M13.07 2.93L13.78 2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                {{ __('insights.detail.categories.integration') }}
            </div>
            
            <h1 class="article-hero-title">
                @if(app()->getLocale() == 'id')
                    Integrasi Sistem: Menghubungkan Setiap Bagian Bisnis Anda Menjadi Satu Aliran Cerdas
                @else
                    System Integration: Connecting Every Part of Your Business Into One Intelligent Flow
                @endif
            </h1>
            
            <div class="article-hero-meta">
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 4v4l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    7 {{ __('insights.detail.min_read') }}
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
                    Dunia bergerak lebih cepat dari sebelumnya. Bisnis berkembang, pelanggan mengharapkan respons segera, dan operasi menuntut akurasi di setiap langkah. Namun seiring perusahaan tumbuh, sistem mereka sering tidak tumbuh bersamanya. Data menjadi tersebar, proses tetap manual, dan kesenjangan antara apa yang ingin dilakukan tim dan apa yang diizinkan sistem mereka menjadi lebih luas. Integrasi sistem adalah jembatan yang menutup kesenjangan itu—mengubah alat yang terputus menjadi jaringan tunggal yang cerdas.
                @else
                    The world is moving faster than ever. Businesses are expanding, customers expect immediate response, and operations demand accuracy across every step. But as companies grow, their systems often don't grow with them. Data becomes scattered, processes stay manual, and the gap between what teams want to do and what their systems allow them to do becomes wider. System integration is the bridge that closes that gap—turning disconnected tools into a single, intelligent network.
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
                        Mengapa Integrasi Sistem Lebih Penting Sekarang dari Sebelumnya
                    @else
                        Why System Integration Matters More Today Than Ever
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Perusahaan modern beroperasi di dunia yang global dan real-time. Rantai pasokan berubah setiap jam. Ekspektasi pelanggan berkembang setiap hari. Dan teknologi berakselerasi setiap menit.
                    @else
                        Modern companies operate in a global, real-time world. Supply chains shift by the hour. Customer expectations evolve by the day. And technology accelerates by the minute.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Namun meskipun bisnis berkembang, banyak sistem internal mereka tetap terisolasi—data tersimpan di satu platform, operasi berjalan di platform lain, dan tim menghabiskan waktu yang tidak perlu untuk menyatukan informasi secara manual. Fragmentasi ini secara diam-diam memperlambat pengambilan keputusan, menguras produktivitas, dan menciptakan inkonsistensi yang langsung mempengaruhi pengalaman pelanggan.
                    @else
                        But even as businesses scale, many of their internal systems remain siloed—data sits in one platform, operations run in another, and teams spend unnecessary hours trying to piece information together manually. This fragmentation quietly slows down decision-making, drains productivity, and creates inconsistencies that directly affect customer experience.
                    @endif
                </p>

                <div class="article-content-image" data-aos="fade-up">
                    <img src="{{ asset('images/insights/article2.jpg') }}" alt="System Integration Architecture">
                    <div class="article-image-caption">
                        @if(app()->getLocale() == 'id')
                            Integrasi sistem yang mulus menghubungkan perangkat telemetri, platform otomasi, dan sistem ERP menjadi satu alur kerja terpadu
                        @else
                            Seamless system integration connects telemetry devices, automation platforms, and ERP systems into one unified workflow
                        @endif
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Contoh Integrasi Nyata: Mengubah Data Telemetri Menjadi Alur Kerja ERP yang Dapat Ditindaklanjuti
                    @else
                        A Real Integration Example: Turning Telemetry Data Into Actionable ERP Workflows
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Salah satu proyek kami baru-baru ini melibatkan integrasi sistem telemetri dengan ERP klien untuk memungkinkan pemantauan real-time, penjadwalan yang lebih cerdas, dan pembuatan pesanan otomatis. Sebelumnya, level tangki diperiksa secara manual dan pesanan diajukan secara reaktif—menyebabkan penundaan, pengaturan menit terakhir, dan tekanan operasional yang tinggi.
                    @else
                        One of our recent projects involved integrating a telemetry system with the client's ERP to enable real-time monitoring, smarter scheduling, and automated order creation. Previously, tank levels were checked manually and orders were submitted reactively—causing delays, last-minute arrangements, and high operational pressure.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dengan menghubungkan data telemetri ke ERP melalui platform otomasi perantara, kami membangun alur yang mulus:
                    @else
                        By linking telemetry data to the ERP through an intermediate automation platform, we built a seamless flow:
                    @endif
                </p>

                <div class="article-highlight-box">
                    <h3>
                        @if(app()->getLocale() == 'id')
                            Proses Integrasi
                        @else
                            The Integration Process
                        @endif
                    </h3>
                    <ul>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Perangkat telemetri mengirim data level tangki secara real-time
                            @else
                                Telemetry devices send tank-level data in real time
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Data diproses dan disinkronkan ke ERP secara berkala
                            @else
                                Data is processed and synchronized into the ERP periodically
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Sistem menghitung tren konsumsi dan waktu pengisian ulang
                            @else
                                The system calculates consumption trends and refill timing
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Pesanan penjualan dibuat secara otomatis ketika level tangki mencapai ambang batas yang ditentukan
                            @else
                                Sales orders are generated automatically when tank levels reach a defined threshold
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                Bisnis mendapatkan wawasan prediktif alih-alih tergesa-gesa reaktif
                            @else
                                The business gains predictive insights instead of reactive scrambling
                            @endif
                        </li>
                    </ul>
                </div>

                <p>
                    @if(app()->getLocale() == 'id')
                        Integrasi ini mengubah cara perusahaan melayani pelanggannya. Operasi menjadi proaktif, logistik menjadi dapat diprediksi, dan pelanggan mengalami layanan yang lebih cepat dan lebih andal tanpa perlu memintanya secara manual.
                    @else
                        This integration transformed how the company served its customers. Operations became proactive, logistics became predictable, and customers experienced faster, more reliable service without needing to request it manually.
                    @endif
                </p>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">100%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pesanan Otomatis
                            @else
                                Automated Orders
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">Real-time</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Sinkronisasi Data
                            @else
                                Data Sync
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">
                            @if(app()->getLocale() == 'id')
                                Nol
                            @else
                                Zero
                            @endif
                        </span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pemeriksaan Manual
                            @else
                                Manual Checks
                            @endif
                        </span>
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Lebih dari Telemetri—SBI Mengintegrasikan Apa Pun yang Bisnis Anda Butuhkan
                    @else
                        Beyond Telemetry—SBI Integrates Whatever Your Business Needs
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Lanskap teknologi setiap perusahaan berbeda. Beberapa membutuhkan alat manajemen aset yang terhubung ke ERP. Beberapa membutuhkan platform HR yang disinkronkan dengan catatan kehadiran. Yang lain membutuhkan persetujuan WhatsApp yang terintegrasi ke dalam alur kerja. Dan banyak yang membutuhkan data dari berbagai sistem mengalir dengan lancar ke dasbor atau mesin keputusan otomatis.
                    @else
                        Every company's technology landscape is different. Some need asset management tools connected to ERP. Some need HR platforms synchronized with attendance records. Others need WhatsApp approvals integrated into workflows. And many need data from multiple systems flowing cleanly into dashboards or automated decision engines.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Peran SBI bukan untuk memaksakan alat tertentu. Tugas kami adalah memahami bagaimana bisnis Anda bekerja, mengidentifikasi di mana koneksi membawa nilai paling besar, dan merekomendasikan sistem yang sesuai dengan realitas operasional Anda.
                    @else
                        SBI's role is not to push a specific tool. Our job is to understand how your business works, identify where connection brings the most value, and recommend systems that fit your operational reality.
                    @endif
                </p>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Apakah Anda berpikir untuk mengintegrasikan platform baru ke ERP Anda, mengevaluasi apakah suatu sistem akan benar-benar bekerja untuk proses Anda, atau ingin mengotomatisasi alur kerja tetapi tidak yakin harus mulai dari mana—konsultan berpengalaman kami akan menilai kebutuhan Anda dan merancang strategi integrasi yang tepat.
                    @else
                        Whether you are thinking about integrating a new platform into your ERP, evaluating if a system will actually work for your processes, or wanting to automate a workflow but unsure where to begin—our experienced consultants will assess your needs and design the right integration strategy.
                    @endif
                </blockquote>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Integrasi sebagai Penggerak Pertumbuhan
                    @else
                        Integration as a Growth Enabler
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Integrasi sistem bukan hanya tentang menghubungkan alat—ini tentang memungkinkan bisnis Anda untuk berkembang tanpa hambatan. Ketika sistem berkomunikasi dengan mulus, tim dapat fokus pada pekerjaan strategis daripada koordinasi manual. Pengambil keputusan mendapatkan informasi yang akurat dan tepat waktu. Dan pelanggan mengalami konsistensi di setiap titik sentuh.
                    @else
                        System integration isn't just about connecting tools—it's about enabling your business to scale without friction. When systems communicate seamlessly, teams can focus on strategic work rather than manual coordination. Decision-makers get accurate, timely information. And customers experience consistency across every touchpoint.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Seiring teknologi terus berkembang, SBI memastikan bisnis Anda berkembang bersamanya—dengan cerdas, lancar, dan berkelanjutan. Kami menjembatani kesenjangan antara sistem yang terisolasi dan operasi terpadu, mengubah kompleksitas menjadi kejelasan dan ketidakterhubungan menjadi aliran cerdas.
                    @else
                        As technology continues to evolve, SBI ensures your business evolves with it—smartly, smoothly, and sustainably. We bridge the gap between isolated systems and unified operations, transforming complexity into clarity and disconnection into intelligent flow.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Perusahaan yang berkembang di ekonomi modern adalah mereka yang dapat beradaptasi dengan cepat, merespons dengan cerdas, dan beroperasi dengan efisien. Integrasi sistem adalah fondasi yang membuat semua itu mungkin.
                    @else
                        The companies that thrive in the modern economy are those that can adapt quickly, respond intelligently, and operate efficiently. System integration is the foundation that makes all of that possible.
                    @endif
                </p>
            </article>
        </div>
    </section>

    <!--Back Navigation -->
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
