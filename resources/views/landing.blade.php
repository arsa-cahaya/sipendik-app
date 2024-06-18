@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center py-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Sistem Informasi Pendidikan Inklusif</h1>
        <p class="lead">Misi dan tujuan kami adalah untuk menyediakan akses pendidikan inklusif yang berkualitas bagi semua anak.</p>
    </div>
</section>

<!-- Tentang Kami -->
<section class="about-us py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Tentang Kami</h2>
        <p>Sistem Informasi Pendidikan Inklusif adalah platform yang menyediakan informasi, materi, dan dukungan untuk pendidikan inklusif di Indonesia.</p>
        <h3>Visi dan Misi</h3>
        <p>Visi kami adalah menciptakan lingkungan pendidikan yang inklusif bagi semua anak. Misi kami adalah memberikan akses ke kurikulum, materi belajar, dan dukungan yang diperlukan.</p>
        <h3>Sejarah Singkat</h3>
        <p>Sistem ini didirikan pada tahun 2023 dengan tujuan untuk mendukung pendidikan inklusif di seluruh Indonesia.</p>
        <h3>Tim Kami</h3>
        <div class="row">
            <div class="col-md-4">
                <img src="path/to/team1.jpg" class="img-fluid rounded-circle" alt="Team Member 1">
                <h4>Nama Anggota 1</h4>
                <p>Deskripsi singkat anggota tim.</p>
            </div>
            <div class="col-md-4">
                <img src="path/to/team2.jpg" class="img-fluid rounded-circle" alt="Team Member 2">
                <h4>Nama Anggota 2</h4>
                <p>Deskripsi singkat anggota tim.</p>
            </div>
            <div class="col-md-4">
                <img src="path/to/team3.jpg" class="img-fluid rounded-circle" alt="Team Member 3">
                <h4>Nama Anggota 3</h4>
                <p>Deskripsi singkat anggota tim.</p>
            </div>
        </div>
    </div>
</section>

<!-- Fitur Utama -->
<section class="features py-5">
    <div class="container">
        <h2 class="text-center">Fitur Utama</h2>
        <div class="row">
            <div class="col-md-3">
                <img src="path/to/icon1.png" class="img-fluid" alt="Kurikulum Inklusif">
                <h4>Kurikulum Inklusif</h4>
                <p>Deskripsi tentang kurikulum inklusif.</p>
            </div>
            <div class="col-md-3">
                <img src="path/to/icon2.png" class="img-fluid" alt="Materi Belajar">
                <h4>Materi Belajar</h4>
                <p>Deskripsi tentang materi belajar.</p>
            </div>
            <div class="col-md-3">
                <img src="path/to/icon3.png" class="img-fluid" alt="Forum Diskusi">
                <h4>Forum Diskusi</h4>
                <p>Deskripsi tentang forum diskusi.</p>
            </div>
            <div class="col-md-3">
                <img src="path/to/icon4.png" class="img-fluid" alt="Alat Bantu Pembelajaran">
                <h4>Alat Bantu Pembelajaran</h4>
                <p>Deskripsi tentang alat bantu pembelajaran.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni -->
<section class="testimonials py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Testimoni</h2>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">"Sistem ini sangat membantu anak saya dalam belajar."</p>
                    <footer class="blockquote-footer">Orang Tua 1 <img src="path/to/parent1.jpg" class="img-fluid rounded-circle" alt="Parent 1"></footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p class="mb-0">"Sebagai guru, sistem ini memudahkan saya dalam menyampaikan materi."</p>
                    <footer class="blockquote-footer">Guru 1 <img src="path/to/teacher1.jpg" class="img-fluid rounded-circle" alt="Teacher 1"></footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Program dan Layanan -->
<section class="programs py-5">
    <div class="container">
        <h2 class="text-center">Program dan Layanan</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Dukungan</h4>
                <p>Deskripsi tentang dukungan yang diberikan.</p>
            </div>
            <div class="col-md-4">
                <h4>Pelatihan Guru</h4>
                <p>Deskripsi tentang pelatihan guru.</p>
            </div>
            <div class="col-md-4">
                <h4>Kegiatan Ekstrakurikuler</h4>
                <p>Deskripsi tentang kegiatan ekstrakurikuler.</p>
            </div>
        </div>
    </div>
</section>

<!-- Berita dan Artikel -->
<section class="news py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Berita dan Artikel</h2>
        <ul>
            <li><a href="link/to/article1">Artikel atau Berita 1</a></li>
            <li><a href="link/to/article2">Artikel atau Berita 2</a></li>
            <li><a href="link/to/article3">Artikel atau Berita 3</a></li>
        </ul>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white">
    <div class="container text-center">
        <p>Follow us on:</p>
        <a href="link/to/facebook" class="text-white me-2"><i class="fab fa-facebook"></i></a>
        <a href="link/to/twitter" class="text-white me-2"><i class="fab fa-twitter"></i></a>
        <a href="link/to/instagram" class="text-white"><i class="fab fa-instagram"></i></a>
        <p class="mt-3"><a href="link/to/privacy-policy" class="text-white">Kebijakan Privasi</a> | <a href="link/to/terms" class="text-white">Syarat Penggunaan</a></p>
    </div>
</footer>
@endsection
