@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article4.jpg') }}" alt="Data Analytics Dashboards" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge data">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <rect x="2" y="10" width="3" height="4" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="6.5" y="6" width="3" height="8" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="11" y="2" width="3" height="12" stroke="currentColor" stroke-width="1.5"/>
                </svg>
                {{ __('insights.detail.categories.data') }}
            </div>
            
            <h1 class="article-hero-title">
                @if(app()->getLocale() == 'id')
                    Memberdayakan Keputusan Lebih Cerdas Melalui Dashboard yang Jelas dan Dapat Ditindaklanjuti
                @else
                    Empowering Smarter Decisions Through Clear, Actionable Dashboards
                @endif
            </h1>
            
            <div class="article-hero-meta">
                <div class="article-meta-item">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" stroke="currentColor" stroke-width="1.5"/>
                        <path d="M8 4v4l2 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    10 {{ __('insights.detail.min_read') }}
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
                    Seiring bisnis berkembang, volume data tumbuh secara eksponensial—namun wawasan yang dapat ditindaklanjuti sering menyusut. Banyak organisasi masih berjuang dengan pelaporan yang tidak konsisten, informasi yang tertunda, dan dashboard yang gagal mendorong keputusan yang bermakna. Melalui layanan Data & Analytics kami, SBI mengubah data yang tersebar menjadi dashboard real-time yang dikurasi sesuai dengan kebutuhan operasional setiap klien.
                @else
                    As businesses scale, the volume of data grows exponentially—yet actionable insights often shrink. Many organizations still struggle with inconsistent reporting, delayed information, and dashboards that fail to drive meaningful decisions. Through our Data & Analytics service, SBI transforms scattered data into curated, real-time dashboards tailored to each client's operational needs.
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
                        Dari Kelebihan Data ke Kejelasan Strategis
                    @else
                        From Data Overload to Strategic Clarity
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Di lanskap bisnis saat ini, data bukan lagi aset back-office—ini adalah fondasi dari setiap langkah strategis. Namun banyak organisasi masih berjuang dengan laporan yang tersebar, template yang tidak konsisten, dan wawasan yang tiba terlambat untuk memandu keputusan nyata. Layanan Data & Analytics kami membantu perusahaan memutus siklus ini dengan mengubah informasi mentah menjadi dashboard yang akurat, real-time, dan benar-benar berguna bagi tim yang mengandalkannya setiap hari.
                    @else
                        In today's business landscape, data is no longer a back-office asset—it is the foundation of every strategic move. Yet many organizations still struggle with scattered reports, inconsistent templates, and insights that arrive too late to guide real decisions. Our Data & Analytics service helps companies break this cycle by converting raw information into dashboards that are accurate, real-time, and truly useful for the teams who rely on them every day.
                    @endif
                </p>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Dashboard yang dirancang dengan baik bukan hanya alat pelaporan—ini menjadi pusat kontrol untuk seluruh operasi.
                    @else
                        A well-designed dashboard is not just a reporting tool—it becomes the control center for the entire operation.
                    @endif
                </blockquote>

                <div class="article-content-image" data-aos="fade-up">
                    <img src="{{ asset('images/insights/article4.jpg') }}" alt="Power BI Dashboard Analytics">
                    <div class="article-image-caption">
                        @if(app()->getLocale() == 'id')
                            Dashboard real-time memusatkan metrik kunci seperti kinerja pemasok, pelacakan pengeluaran, dan KPI operasional menjadi satu antarmuka yang dapat ditindaklanjuti
                        @else
                            Real-time dashboards centralize key metrics like supplier performance, spend tracking, and operational KPIs into one actionable interface
                        @endif
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Studi Kasus: Dashboard Ikhtisar Pengadaan Terintegrasi
                    @else
                        Case Study: Integrated Procurement Overview Dashboard
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Selama proyek-proyek kami, pekerjaan kami telah menunjukkan bahwa dashboard yang dirancang dengan baik bukan hanya alat pelaporan—ini menjadi pusat kontrol untuk seluruh operasi. Misalnya, ketika mengembangkan Dashboard Ikhtisar Pengadaan Terintegrasi, kami memusatkan semuanya dari peringkat pemasok hingga distribusi biaya dalam satu antarmuka Power BI.
                    @else
                        Over the past projects, our work has shown that a well-designed dashboard is not just a reporting tool—it becomes the control center for the entire operation. For example, when developing an integrated Procurement Overview Dashboard, we centralized everything from supplier ratings to cost distribution in one Power BI interface.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Ini segera mengurangi waktu persiapan laporan, menghilangkan kesalahan konsolidasi manual, dan memberi manajemen gambaran yang lebih jelas tentang di mana kinerja meningkat—atau menurun—kapan saja.
                    @else
                        This immediately reduced report preparation time, eliminated manual consolidation errors, and gave management a clearer picture of where performance was improving—or slipping—at any moment.
                    @endif
                </p>

                <div class="article-highlight-box">
                    <h3>
                        @if(app()->getLocale() == 'id')
                            Indikator Pengadaan Esensial
                        @else
                            Essential Procurement Indicators
                        @endif
                    </h3>
                    <p>
                        @if(app()->getLocale() == 'id')
                            Untuk membuat wawasan lebih mudah dipahami dan ditindaklanjuti, kami menyusun dashboard di sekitar beberapa indikator pengadaan esensial:
                        @else
                            To make insights easier to understand and act on, we structured the dashboard around a few essential procurement indicators:
                        @endif
                    </p>
                    <ul>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Visibilitas Kinerja Pemasok</strong> – memungkinkan keterlibatan yang ditargetkan dengan pemasok berdampak tinggi
                            @else
                                <strong>Supplier Performance Visibility</strong> – enabling targeted engagement with high-impact suppliers
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Pelacakan Pengeluaran berdasarkan Jenis PO & Wilayah</strong> – mendukung kontrol biaya yang lebih ketat dan keselarasan anggaran
                            @else
                                <strong>Spend Tracking by PO Type & Region</strong> – supporting tighter cost control and budget alignment
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Pemantauan Pengeluaran Tingkat Pembeli</strong> – meningkatkan akuntabilitas dan disiplin pembelian
                            @else
                                <strong>Buyer-Level Spend Monitoring</strong> – improving accountability and purchasing discipline
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Wawasan Pengembalian-ke-Pemasok</strong> – secara jelas menunjukkan masalah kualitas dan hambatan operasional
                            @else
                                <strong>Return-to-Supplier Insights</strong> – clearly showing quality issues and operational bottlenecks
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Pelacakan Faktur Terlambat</strong> – membantu keuangan mengantisipasi penundaan dan menjaga kepercayaan pemasok yang kuat
                            @else
                                <strong>Late Invoice Tracking</strong> – helping finance anticipate delays and maintain strong supplier trust
                            @endif
                        </li>
                    </ul>
                </div>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">70%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pelaporan Lebih Cepat
                            @else
                                Faster Reporting
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">100%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Akurasi Data
                            @else
                                Data Accuracy
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">Real-time</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pembaruan
                            @else
                                Updates
                            @endif
                        </span>
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Membangun Konsistensi di Seluruh Organisasi
                    @else
                        Building Consistency Across the Organization
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Konsistensi juga memainkan peran penting dalam membangun budaya analitik yang matang. Banyak perusahaan menghadapi kebingungan hanya karena dashboard sangat bervariasi dari departemen ke departemen. Untuk mengatasi ini, kami membuat template Power BI standar—sistem desain yang dapat digunakan kembali yang mencakup warna perusahaan, aturan tipografi, penempatan logo, dan prinsip tata letak.
                    @else
                        Consistency also plays an important role in building a mature analytics culture. Many companies face confusion simply because dashboards vary widely from department to department. To address this, we created a standardized Power BI template—a reusable design system that included company colors, typography rules, logo placement, and layout principles.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dengan template ini, setiap dashboard masa depan di seluruh organisasi mengikuti identitas visual dan struktur analitis yang sama, membuat pelaporan lintas departemen lebih mudah dan jauh lebih profesional.
                    @else
                        With this template, every future dashboard across the organization followed the same visual identity and analytical structure, making cross-department reporting easier and significantly more professional.
                    @endif
                </p>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Dari Pengembangan ke Kepemilikan
                    @else
                        From Development to Ownership
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Tetapi nilai sebenarnya dari dashboard tergantung pada penggunanya. Itulah mengapa layanan kami tidak berhenti pada pengembangan. Kami menyediakan pelatihan terstruktur dan sesi serah terima untuk memastikan bahwa tim Anda dapat memperbarui, memelihara, dan memperluas dashboard dengan percaya diri sendiri.
                    @else
                        But a dashboard's true value depends on its users. That is why our service doesn't stop at development. We provide structured training and handover sessions to ensure that your team can update, maintain, and expand the dashboards confidently on their own.
                    @endif
                </p>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Komponen peningkatan keterampilan ini sering menjadi salah satu manfaat jangka panjang terkuat bagi klien, mengubah dashboard dari proyek satu kali menjadi kemampuan analitis yang berkelanjutan.
                    @else
                        This upskilling component often becomes one of the strongest long-term benefits for clients, transforming dashboards from a one-time project into a sustainable analytical capability.
                    @endif
                </blockquote>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Lebih dari Pengadaan: Analitik untuk Setiap Fungsi
                    @else
                        Beyond Procurement: Analytics for Every Function
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Meskipun dashboard pengadaan menunjukkan kekuatan analitik terstruktur, kemampuan SBI meluas ke semua fungsi bisnis. Kami telah membangun dashboard untuk:
                    @else
                        While procurement dashboards demonstrate the power of structured analytics, SBI's capability extends across all business functions. We've built dashboards for:
                    @endif
                </p>
                
                <ul>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Keuangan:</strong> Proyeksi arus kas, varians anggaran, penuaan AR/AP
                        @else
                            <strong>Finance:</strong> Cash flow projections, budget variance, AR/AP aging
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Operasi:</strong> Efisiensi produksi, utilisasi aset, analisis downtime
                        @else
                            <strong>Operations:</strong> Production efficiency, asset utilization, downtime analysis
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Penjualan:</strong> Visibilitas pipeline, tingkat konversi, segmentasi pelanggan
                        @else
                            <strong>Sales:</strong> Pipeline visibility, conversion rates, customer segmentation
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Rantai Pasokan:</strong> Perputaran inventaris, kinerja pengiriman, biaya logistik
                        @else
                            <strong>Supply Chain:</strong> Inventory turnover, delivery performance, logistics costs
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>SDM:</strong> Analitik tenaga kerja, penyelesaian pelatihan, tren turnover
                        @else
                            <strong>HR:</strong> Workforce analytics, training completion, turnover trends
                        @endif
                    </li>
                </ul>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Pendekatan SBI terhadap Data & Analytics
                    @else
                        The SBI Approach to Data & Analytics
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Pendekatan kami selalu dimulai dengan memahami kebutuhan spesifik Anda—bukan memaksakan template. Kami bekerja sama dengan tim Anda untuk:
                    @else
                        Our approach always starts with understanding your specific needs—not imposing a template. We work closely with your team to:
                    @endif
                </p>
                
                <ol>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Mengidentifikasi keputusan kunci yang perlu Anda buat
                        @else
                            Identify the key decisions you need to make
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Menentukan data apa yang akan mendukung keputusan tersebut
                        @else
                            Determine what data would support those decisions
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Merancang dashboard yang intuitif dan dapat ditindaklanjuti
                        @else
                            Design dashboards that are intuitive and actionable
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Menetapkan tata kelola data dan jadwal pembaruan
                        @else
                            Establish data governance and refresh schedules
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            Melatih tim Anda untuk memelihara dan mengembangkan solusi
                        @else
                            Train your team to maintain and evolve the solution
                        @endif
                    </li>
                </ol>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Hasilnya bukan hanya dashboard—ini adalah fondasi untuk pengambilan keputusan berbasis data yang tumbuh dengan bisnis Anda. Ketika dijalankan dengan benar, analitik menjadi keunggulan kompetitif Anda, membantu Anda menemukan peluang lebih cepat, merespons tantangan lebih awal, dan beroperasi dengan keyakinan yang didukung oleh fakta.
                    @else
                        The result is not just a dashboard—it's a foundation for data-driven decision-making that grows with your business. When executed properly, analytics becomes your competitive advantage, helping you spot opportunities faster, respond to challenges earlier, and operate with confidence backed by facts.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dalam dunia di mana setiap perusahaan memiliki akses ke data, pemenangnya adalah mereka yang dapat mengubah data itu menjadi tindakan. Di situlah SBI membuat perbedaan.
                    @else
                        In a world where every company has access to data, the winners are those who can turn that data into action. That's where SBI makes the difference.
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
