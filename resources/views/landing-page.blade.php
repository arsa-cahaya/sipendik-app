@extends('layouts.app')

@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Selamat Datang di Sistem Informasi Pendidikan Inklusif</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Misi dan tujuan kami adalah untuk menyediakan akses pendidikan inklusif yang berkualitas bagi semua anak</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="#about" class="btn-get-started">Mulai Sekarang <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets/img/hero-pic.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Apasih SIPENDIK itu?</h3>
                        <h2>Sistem Informasi Pendidikan Inklusif adalah platform yang menyediakan informasi, materi, dan dukungan untuk pendidikan inklusif di Indonesia.</h2>
                        <p>
                            Visi kami adalah menciptakan lingkungan pendidikan yang inklusif bagi semua anak. Misi kami adalah memberikan akses ke kurikulum, materi belajar, dan dukungan yang diperlukan.
                        </p>
                            <div class="text-center text-lg-start">
                                <a href="#values" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Baca Lebih Lanjut</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/img/logo-sipendik.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Grafik</h2>
            <p>Sebaran Peserta Didik Berkebutuhan Khusus Kota Surabaya<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <!-- Bar Chart -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-6 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-6 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div><!-- End Stats Item --> --}}
            </div>
        </div>
    </section><!-- /Stats Section -->

    <!-- Values Section -->
    <section id="values" class="values section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Fitur</h2>
            <p>Apa saja fitur utama kami<br></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="{{ asset('assets/img/values-2.png') }}" class="img-fluid" alt="">
                        <h3>Kurikulum Inklusif</h3>
                        <p>Kurikulum inklusif adalah sebuah kurikulum yang dirancang untuk mengakomodasi kebutuhan semua siswa, termasuk siswa dengan kebutuhan khusus. Kurikulum ini berfokus pada penyediaan pengalaman belajar yang bermakna dan setara bagi semua siswa, dengan mengintegrasikan berbagai strategi pengajaran yang fleksibel dan adaptif. Tujuannya adalah memastikan setiap siswa dapat mencapai potensi penuh mereka, tanpa memandang kemampuan fisik, intelektual, sosial, atau emosional mereka.</p>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="">
                        <h3>Materi Belajar</h3>
                        <p>Materi belajar dalam kurikulum inklusif mencakup berbagai sumber belajar yang dirancang untuk memenuhi kebutuhan beragam siswa. Materi ini dapat berupa buku teks, modul digital, video pembelajaran, alat bantu visual, dan banyak lagi. Setiap materi disusun sedemikian rupa untuk mendukung gaya belajar yang berbeda dan tingkat kemampuan yang bervariasi.</p>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{ asset('assets/img/values-3.png') }}" class="img-fluid" alt="">
                        <h3>Laporan Pembelajaran</h3>
                        <p>Laporan Pembelajaran adalah dokumen yang mencatat kemajuan akademis dan perkembangan pribadi siswa selama periode tertentu. Laporan ini memberikan umpan balik yang komprehensif kepada siswa, orang tua, dan guru mengenai pencapaian dan area yang perlu ditingkatkan. Dalam kurikulum inklusif, laporan ini dirancang untuk mencerminkan pendekatan holistik terhadap penilaian, yang mencakup aspek akademis, sosial, dan emosional.</p>
                    </div>
                </div><!-- End Card Item -->
            </div>
        </div>

    </section><!-- /Values Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimoni</h2>
            <p>Apa yang mereka katakan tentang kita<br></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                    },
                    "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 1
                    }
                }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Sistem informasi pendidikan inklusif ini sangat membantu kami sebagai orang tua dalam memantau perkembangan belajar anak kami. Fitur laporan harian dan komunikasi langsung dengan guru sangat memudahkan kami untuk memberikan dukungan yang diperlukan di rumah.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('assets/img/testimonials/ortu-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Agus Santoso</h3>
                            <h4>Wali Murid</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Sebagai guru, saya sangat terbantu dengan adanya sistem ini. Fitur manajemen kelas dan penilaian yang terintegrasi memungkinkan saya untuk lebih fokus pada pengajaran daripada administrasi. Selain itu, saya bisa dengan mudah menyesuaikan materi sesuai kebutuhan masing-masing siswa.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('assets/img/testimonials/guru-1.jpg') }}" class="testimonial-img" alt="">
                            <h3>Dewi Lestari</h3>
                            <h4>Guru</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Saya sangat berterima kasih atas adanya fitur konsultasi langsung dengan para ahli melalui platform ini. Anak saya mendapatkan dukungan yang lebih baik, dan kami bisa dengan mudah berdiskusi tentang strategi pendidikan yang paling sesuai untuknya.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('assets/img/testimonials/ortu-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Andi Pratama</h3>
                            <h4>Wali Murid</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Platform ini sangat intuitif dan mudah digunakan. Anak saya yang memiliki kebutuhan khusus merasa lebih percaya diri dengan adanya materi belajar yang disesuaikan dan alat bantu yang tersedia. Terima kasih untuk upaya luar biasa ini!
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('assets/img/testimonials/ortu-3.jpg') }}" class="testimonial-img" alt="">
                            <h3>Budi Setiawan</h3>
                            <h4>Wali Murid</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            Sistem informasi pendidikan inklusif ini benar-benar revolusioner. Saya bisa berkolaborasi dengan orang tua dan spesialis secara lebih efektif. Data dan laporan yang lengkap membantu kami merancang strategi pembelajaran yang lebih baik untuk setiap siswa, terutama yang memiliki kebutuhan khusus.
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{ asset('assets/img/testimonials/guru-2.jpg') }}" class="testimonial-img" alt="">
                            <h3>Yudi Hermawan</h3>
                            <h4>Guru</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Tim</h2>
            <p>Tim terbaik kami</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/nabila.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-github"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Nabila Ahlisya</h4>
                            <span>Data Analyst</span>
                            <p>Jangan mengulangi kesalahan yang sama. Masih banyak kesalahan-kesalahan lain yang perlu dicoba.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/arsa.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-github"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Arsa Cahaya Pradipta</h4>
                            <span>Project Manager</span>
                            <p>Tertawa bisa jadi obat terbaik. Tapi kalau kamu tertawa tanpa alasan yang jelas, mungkin kamu butuh obat.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/ransi.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-whatsapp"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-github"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Paloma Ransi</h4>
                            <span>UI/UX Designer</span>
                            <p>Kejujuran adalah kunci dalam suatu hubungan. Kalau kamu bisa memalsukannya, berarti aman.</p>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            </div>
        </div>
    </section><!-- /Team Section -->

</main>
<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-8 col-md-12 footer-about">
                <a href="index.html" class="d-flex align-items-center">
                    <span class="sitename">SIPENDIK</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>UPN "Veteran" Jawa Timur</p>
                    <p>Surabaya, Jawa Timur 60294</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+62 891 2345 6789</span></p>
                    <p><strong>Email:</strong> <span>sipendik@mail.com</span></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Ikuti Kami</h4>
                <p>Beberapa sosial media yang kami miliki</p>
                <div class="social-links d-flex">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-github"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        Copyright &copy; {{ now()->year }} Develop By Kelompok 3</a>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection