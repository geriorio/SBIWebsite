@extends('layouts.app')

@section('content')
    <!-- Article Hero Section -->
    <section class="article-detail-hero">
        <div class="article-hero-background">
            <img src="{{ asset('images/insights/article5.jpg') }}" alt="Digital Learning SamatorEdu" class="article-hero-image">
            <div class="article-hero-overlay"></div>
        </div>
        
        <div class="article-hero-content" data-aos="fade-up">
            <div class="article-category-badge capability">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 1l2 4 4 1-3 3 1 4-4-2-4 2 1-4-3-3 4-1z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                </svg>
                {{ __('insights.detail.categories.capability') }}
            </div>
            
            <h1 class="article-hero-title">
                @if(app()->getLocale() == 'id')
                    Bagaimana Pembelajaran Digital Terukur Mengubah Operasi Perusahaan: Studi Kasus SamatorEdu
                @else
                    How Scalable Digital Learning Transforms Enterprise Operations: A Case Study of SamatorEdu
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
                    Seiring perusahaan tumbuh, pelatihan menjadi salah satu bagian paling menantang dalam menjaga keunggulan operasional. Sesi kelas tradisional berjuang untuk mengikuti—biaya meningkat, kualitas menjadi tidak konsisten, dan perjalanan pelatih ke seluruh negeri menjadi tidak praktis. Untuk organisasi seperti Samator Group, yang operasinya tersebar di seluruh Indonesia dengan proses bisnis end-to-end yang kompleks, pendekatan baru sangat penting.
                @else
                    As companies grow, training becomes one of the most challenging parts of maintaining operational excellence. Traditional classroom sessions struggle to keep up—costs increase, quality becomes inconsistent, and traveling trainers across the country becomes impractical. For organizations like Samator Group, whose operations span Indonesia with complex end-to-end business processes, a new approach is essential.
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
                        Tantangan Pelatihan dalam Skala Besar
                    @else
                        The Challenge of Training at Scale
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Pelatihan selalu menjadi landasan keunggulan operasional. Ketika orang memahami proses, sistem, dan tanggung jawab dengan jelas, perusahaan berjalan lebih cepat, lebih bersih, dan lebih cerdas.
                    @else
                        Training has always been a cornerstone of operational excellence. When people understand processes, systems, and responsibilities clearly, companies run faster, cleaner, and smarter.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Tetapi seiring bisnis tumbuh—terutama mereka yang memiliki banyak cabang, peran yang beragam, dan operasi end-to-end—pelatihan menjadi salah satu aktivitas yang paling sulit untuk diskalakan.
                    @else
                        But as businesses grow—especially those with multiple branches, diverse roles, and end-to-end operations—training becomes one of the hardest activities to scale.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Sebagian besar perusahaan menghadapi masalah-masalah ini:
                    @else
                        Most companies face these problems:
                    @endif
                </p>
                
                <ul>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Biaya pelatihan tinggi:</strong> penerbangan pelatih lintas wilayah, penjadwalan kelas, pencetakan manual
                        @else
                            <strong>High training costs:</strong> flying trainers across regions, scheduling classes, printing manuals
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Kualitas tidak konsisten:</strong> pelatih berbeda → pesan berbeda → eksekusi tidak konsisten
                        @else
                            <strong>Inconsistent quality:</strong> different trainers → different messages → inconsistent execution
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Fleksibilitas terbatas:</strong> karyawan kesulitan menghadiri sesi karena pekerjaan shift dan tuntutan operasional
                        @else
                            <strong>Limited flexibility:</strong> employees struggle to attend sessions due to shift work and operational demands
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Pelacakan sulit:</strong> tidak ada visibilitas tentang siapa yang telah menyelesaikan pelatihan—atau seberapa baik mereka memahami materi
                        @else
                            <strong>Difficult tracking:</strong> no visibility on who has completed training—or how well they understood the material
                        @endif
                    </li>
                    <li>
                        @if(app()->getLocale() == 'id')
                            <strong>Pembaruan lambat:</strong> perubahan SOP dan pembaruan sistem tidak dapat dikomunikasikan dengan cepat di semua situs
                        @else
                            <strong>Slow updates:</strong> SOP changes and system updates cannot be communicated quickly across all sites
                        @endif
                    </li>
                </ul>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Ketika bisnis Anda tersebar di seluruh negara, tantangan ini bertambah dengan cepat.
                    @else
                        When your business spans across the country, these challenges compound rapidly.
                    @endif
                </blockquote>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dan inilah yang terjadi pada salah satu klien kami: Samator Group, penyedia gas industri nasional dengan operasi kompleks dan ribuan karyawan yang bekerja di seluruh Indonesia.
                    @else
                        And this is exactly what happened for one of our clients: Samator Group, a nationwide industrial gas provider with complex operations and thousands of employees working across Indonesia.
                    @endif
                </p>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Memperkenalkan SamatorEdu — Platform Pembelajaran Modern Berbasis Peran
                    @else
                        Introducing SamatorEdu — A Modern, Role-Based Learning Platform
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        SBI bermitra dengan Samator Group untuk membangun <strong>SamatorEdu</strong>, platform pembelajaran digital yang disesuaikan khusus untuk struktur organisasi dan kebutuhan operasional mereka. Alih-alih mengandalkan sesi kelas berulang, SamatorEdu memungkinkan karyawan di seluruh Indonesia untuk belajar kapan saja, di mana saja, dengan konten yang dikurasi untuk mencocokkan tanggung jawab mereka yang tepat.
                    @else
                        SBI partnered with Samator Group to build <strong>SamatorEdu</strong>, a customized digital learning platform designed specifically for their organizational structure and operational needs. Instead of relying on repeated classroom sessions, SamatorEdu allows employees across Indonesia to learn anytime, anywhere, with content curated to match their exact responsibilities.
                    @endif
                </p>

                <div class="article-content-image">
                    <img src="{{ asset('images/insights/article5.jpg') }}" alt="SamatorEdu Learning Platform Dashboard">

                </div>

                <p>
                    @if(app()->getLocale() == 'id')
                        Pengetahuan proses bisnis umum, Prosedur Pengguna Akhir (EUP) untuk penggunaan ERP, alur kerja operasional harian, dan bahkan persyaratan sertifikasi—seperti penguasaan TrackAbout—disampaikan langsung melalui platform. Beberapa kursus terbuka untuk semua karyawan, sementara yang lain ditugaskan secara otomatis berdasarkan peran pekerjaan, memastikan relevansi dan kejelasan untuk setiap pelajar.
                    @else
                        General business process knowledge, End User Procedures (EUP) for ERP usage, daily operational workflows, and even certification requirements—such as mastery of TrackAbout—are delivered directly through the platform. Some courses are open to all employees, while others are assigned automatically based on job roles, ensuring relevance and clarity for every learner.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Dengan SamatorEdu, setiap pembaruan SOP atau metode input sistem menjadi dapat diakses segera. Tidak ada penantian. Tidak ada koordinasi manual. Tidak ada penjelasan yang tidak konsisten. Setiap karyawan sekarang menerima informasi terstruktur yang sama saat dirilis.
                    @else
                        With SamatorEdu, every update to an SOP or system input method becomes immediately accessible. No waiting. No manual coordination. No inconsistent explanations. Every employee now receives the same structured information the moment it is released.
                    @endif
                </p>

                <div class="article-highlight-box">
                    <h3>
                        @if(app()->getLocale() == 'id')
                            Fitur Platform Utama
                        @else
                            Key Platform Features
                        @endif
                    </h3>
                    <ul>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Jalur Pembelajaran Berbasis Peran:</strong> Konten ditugaskan secara otomatis berdasarkan fungsi pekerjaan
                            @else
                                <strong>Role-Based Learning Paths:</strong> Content automatically assigned based on job function
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Prosedur Pengguna Akhir ERP:</strong> Pelatihan langkah demi langkah tentang penggunaan sistem
                            @else
                                <strong>ERP End User Procedures:</strong> Step-by-step training on system usage
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Pelacakan Sertifikasi:</strong> Memantau penyelesaian dan penguasaan keterampilan
                            @else
                                <strong>Certification Tracking:</strong> Monitor completion and skill mastery
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Pembaruan Konten Real-Time:</strong> Akses instan ke SOP dan prosedur baru
                            @else
                                <strong>Real-Time Content Updates:</strong> Instant access to new SOPs and procedures
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Penyebaran Multi-Situs:</strong> Dapat diakses di semua lokasi nasional
                            @else
                                <strong>Multi-Site Deployment:</strong> Accessible across all locations nationwide
                            @endif
                        </li>
                        <li>
                            @if(app()->getLocale() == 'id')
                                <strong>Analitik Kemajuan:</strong> Visibilitas manajemen tentang penyelesaian pelatihan
                            @else
                                <strong>Progress Analytics:</strong> Management visibility into training completion
                            @endif
                        </li>
                    </ul>
                </div>

                <div class="article-stats-grid">
                    <div class="article-stat-card">
                        <span class="article-stat-number">100%</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pengiriman Digital
                            @else
                                Digital Delivery
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">24/7</span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Aksesibilitas
                            @else
                                Accessibility
                            @endif
                        </span>
                    </div>
                    <div class="article-stat-card">
                        <span class="article-stat-number">
                            @if(app()->getLocale() == 'id')
                                Instan
                            @else
                                Instant
                            @endif
                        </span>
                        <span class="article-stat-label">
                            @if(app()->getLocale() == 'id')
                                Pembaruan SOP
                            @else
                                SOP Updates
                            @endif
                        </span>
                    </div>
                </div>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Apa Artinya untuk Tenaga Kerja Modern
                    @else
                        What This Means for a Modern Workforce
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Pembangunan kemampuan digital bukan hanya tentang kenyamanan. Ini memastikan bahwa karyawan memahami tugas mereka secara mendalam dan seragam, yang sangat penting untuk perusahaan besar seperti Samator Group. Dengan SamatorEdu, pembelajaran menjadi fleksibel, dapat diulang, dan selaras dengan operasi harian.
                    @else
                        Digital capability building is not just about convenience. It ensures that employees understand their tasks deeply and uniformly, which is crucial for a large enterprise like Samator Group. With SamatorEdu, learning becomes flexible, repeatable, and aligned with daily operations.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        <strong>Manajer mendapatkan visibilitas tentang kemajuan.</strong> Mereka dapat melihat siapa yang telah menyelesaikan pelatihan, mengidentifikasi kesenjangan pengetahuan, dan memastikan persyaratan sertifikasi terpenuhi sebelum karyawan mengambil tanggung jawab kritis.
                    @else
                        <strong>Managers gain visibility into progress.</strong> They can see who has completed training, identify knowledge gaps, and ensure certification requirements are met before employees take on critical responsibilities.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        <strong>Karyawan mendapatkan kepercayaan dalam keterampilan mereka.</strong> Mereka dapat mengunjungi kembali materi pelatihan sesuai kebutuhan, belajar dengan kecepatan mereka sendiri, dan mengakses prosedur yang tepat yang mereka butuhkan saat mereka membutuhkannya.
                    @else
                        <strong>Employees gain confidence in their skills.</strong> They can revisit training materials as needed, learn at their own pace, and access the exact procedures they need when they need them.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        <strong>Perusahaan mendapatkan tenaga kerja yang dapat mengikuti perubahan teknologi dan prosedural.</strong> Seiring sistem berkembang dan proses meningkat, platform pembelajaran berkembang bersamanya—memastikan seluruh organisasi tetap selaras.
                    @else
                        <strong>The company gains a workforce that can keep up with technological and procedural change.</strong> As systems evolve and processes improve, the learning platform evolves with them—ensuring the entire organization stays aligned.
                    @endif
                </p>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Lebih dari SamatorEdu: Membangun Ekosistem Pembelajaran Anda Sendiri
                    @else
                        Beyond SamatorEdu: Building Your Own Learning Ecosystem
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        SamatorEdu hanyalah satu contoh dari jenis solusi pembangunan kemampuan yang dikembangkan SBI. Setiap proyek dibangun di sekitar tujuan, sistem, dan budaya klien—memastikan platform menjadi ekstensi alami dari cara mereka beroperasi.
                    @else
                        SamatorEdu is only one example of the kind of capability-building solutions SBI develops. Every project is built around the client's goals, systems, and culture—ensuring the platform becomes a natural extension of how they operate.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Peran kami termasuk merancang alur pembelajaran, membangun platform, menyusun konten, membuat jalur berbasis peran, menerapkan sertifikasi, dan mengintegrasikan sistem dengan operasi yang ada. Hasilnya adalah ekosistem pembelajaran yang tidak hanya digital—tetapi cerdas.
                    @else
                        Our role includes designing the learning flow, building the platform, structuring content, creating role-based paths, implementing certification, and integrating the system with existing operations. The result is a learning ecosystem that isn't just digital—it's intelligent.
                    @endif
                </p>
                
                <blockquote>
                    @if(app()->getLocale() == 'id')
                        Dan meskipun kasus ini menunjukkan satu pendekatan, ini tidak mewakili lingkup penuh dari apa yang dapat kami ciptakan. Setiap organisasi memiliki kebutuhan unik, dan solusi kami disesuaikan.
                    @else
                        And while this case demonstrates one approach, it does not represent the full scope of what we can create. Every organization has unique needs, and our solutions are tailored accordingly.
                    @endif
                </blockquote>

                <h2>
                    @if(app()->getLocale() == 'id')
                        Masa Depan Pembelajaran Perusahaan
                    @else
                        The Future of Enterprise Learning
                    @endif
                </h2>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Di dunia di mana teknologi berubah dengan cepat dan kompleksitas operasional meningkat, perusahaan tidak dapat lagi mengandalkan sesi pelatihan tahunan atau manual cetak. Organisasi yang berkembang adalah mereka yang membangun pembelajaran berkelanjutan ke dalam operasi mereka—membuat pengetahuan dapat diakses, konsisten, dan segera dapat ditindaklanjuti.
                    @else
                        In a world where technology changes rapidly and operational complexity increases, companies can no longer rely on annual training sessions or printed manuals. The organizations that thrive are those that build continuous learning into their operations—making knowledge accessible, consistent, and immediately actionable.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Platform pembelajaran digital seperti SamatorEdu mewakili lebih dari sekadar alat pelatihan. Mereka menjadi fondasi kemampuan organisasi—memastikan bahwa setiap karyawan, terlepas dari lokasi atau jadwal shift, memiliki pengetahuan dan keterampilan untuk melakukan peran mereka dengan kepercayaan dan presisi.
                    @else
                        Digital learning platforms like SamatorEdu represent more than just a training tool. They become the foundation of organizational capability—ensuring that every employee, regardless of location or shift schedule, has the knowledge and skills to perform their role with confidence and precision.
                    @endif
                </p>
                
                <p>
                    @if(app()->getLocale() == 'id')
                        Itu bukan hanya pelatihan. Itu transformasi.
                    @else
                        That's not just training. That's transformation.
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
