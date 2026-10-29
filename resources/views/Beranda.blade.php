<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- nav -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('picture/logo.png') }}"
                    alt="Logo" width="50" height="34" class="d-inline-block align-text-top">
                Jakarta Intercultural School
            </a>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('beranda') }}">Beranda</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Akademik
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Kesiswaan
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Berita
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Galeri</a>
                                <a class="nav-link active" aria-current="page" href="#">Kontak</a>
                            </div>
                        </div>
                    </div>
            </nav>
        </div>
    </nav>
    <!-- ikon cari -->
    <a class="nav-link ms-2" href="#">
        <i class="bi bi-search fs-5"></i>
    </a>

    </div>
    </nav>

    <!-- tampilan gambar -->
    <div id="carouselSekolah" class="carousel slide" data-bs-ride="carousel">

        <!-- TITIK-TITIK -->
        <div class="carousel-indicators">
            <button type="button"
                data-bs-target="#carouselSekolah"
                data-bs-slide-to="0"
                class="active"></button>

            <button type="button"
                data-bs-target="#carouselSekolah"
                data-bs-slide-to="1"></button>

            <button type="button"
                data-bs-target="#carouselSekolah"
                data-bs-slide-to="2"></button>
        </div>

        <!-- ISI SLIDE -->
        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">

                <img src="{{ asset('picture/tampilan1.jpg') }}"
                    class="d-block w-100"
                    alt="Banner Sekolah"
                    width="100" height="350">

                <div class="carousel-caption text-start">

                    <h5>Selamat Datang di Website Sekolah</h5>

                    <p>
                        Bersama kita wujudkan generasi yang cerdas,
                        berakhlak dan berprestasi
                    </p>

                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">

                <img src="{{ asset('picture/tampilan2.jpg') }}"
                    class="d-block w-100"
                    alt="Banner Sekolah"
                    width="100" height="350">

            </div>

            <!-- slide 3 -->
            <div class="carousel-item">

                <img src="{{ asset('picture/tampilan3.jpg') }}"
                    class="d-block w-100"
                    alt="Banner Sekolah"
                    width="100" height="350">

            </div>

        </div>

        <!-- TOMBOL KIRI -->
        <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselSekolah"
            data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>

        </button>

        <!-- TOMBOL KANAN -->
        <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselSekolah"
            data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>

        </button>
    </div>

    <!-- sambutan kepsek -->
    <!-- konten -->
    <div class="container">
        <div class="row mt-3">

            <!-- card hello -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                        <h5 class="border-start border-4 ps-3 mb-4">
                            Sambutan Kepala Sekolah
                        </h5>

                        <!-- foto -->
                        <img src="{{ asset('picture/kepalasekolah.jpg') }}"
                            class="rounded float-start me-3 mb-2"
                            style="width: 30%;"
                            alt="Foto profil">


                        <!-- tulisan -->

                        <p>
                            Pesan dari Kepala Sekolah Kami
                            Apa kabar! Halo dan selamat datang di Jakarta Intercultural School (JIS), tempat pembelajaran yang menyenangkan dan penuh tantangan berlangsung setiap hari, di mana kami berusaha untuk menjadi yang terbaik bagi dunia.
                        </p>

                        <p>
                            Perkenalan saya dengan JIS terjadi beberapa tahun yang lalu sebagai seorang mahasiswa yang baru saja tiba di Indonesia bersama keluarganya. Semangat saya untuk mempelajari neurodiversitas dan pendidikan inklusif berakar di sini melalui proyek-proyek pembelajaran layanan yang sangat berharga yang membuka mata saya terhadap kebutuhan orang lain. Bahkan setelah lulus, saya memiliki hak istimewa untuk menyaksikan sekolah ini berkembang sebagai alumni, dan kemudian, berkontribusi pada misi keunggulan akademis yang konsisten sebagai guru, orang tua, Sekolah Dasar Kepala Sekolah, Wakil Kepala Sekolah, dan sekarang, Kepala Sekolah.
                        </p>

                        <p>
                        <h5>Kepala Sekolah</h5>
                        </p>

                    </div>
                </div>
            </div>


            <!-- card link -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">

                        <div class="card shadow-sm border-0">

                            <!-- Header -->
                            <div class="card-header bg-white border-0">
                                <h5 class="fw-bold mb-0">
                                    Pengumuman Terbaru
                                </h5>
                            </div>

                            <!-- Daftar Pengumuman -->
                            <div class="list-group list-group-flush">

                                <!-- Pengumuman 1 -->
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <i class="bi bi-file-earmark-text fs-4"></i>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-1">
                                                Pendaftaran Peserta Didik Baru
                                            </h6>

                                            <p class="mb-1 small">
                                                Tahun Ajaran 2025/2026
                                            </p>

                                            <small class="text-muted">
                                                📅 15 Apr 2025
                                            </small>
                                        </div>

                                        <div>
                                            →
                                        </div>

                                    </div>
                                </a>

                                <!-- Pengumuman 2 -->
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <i class="bi bi-file-earmark-text fs-4"></i>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-1">
                                                Jadwal Ujian Semester Genap
                                            </h6>

                                            <p class="mb-1 small">
                                                Tahun Ajaran 2024/2025
                                            </p>

                                            <small class="text-muted">
                                                📅 10 Apr 2025
                                            </small>
                                        </div>

                                        <div>
                                            →
                                        </div>

                                    </div>
                                </a>

                                <!-- Pengumuman 3 -->
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex align-items-start">

                                        <div class="me-3">
                                            <i class="bi bi-file-earmark-text fs-4"></i>
                                        </div>

                                        <div class="flex-grow-1">
                                            <h6 class="fw-bold mb-1">
                                                Informasi Libur Idul Fitri 1446 H
                                            </h6>

                                            <small class="text-muted">
                                                📅 25 Mar 2025
                                            </small>
                                        </div>

                                        <div>
                                            →
                                        </div>

                                    </div>
                                </a>

                            </div>

                            <!-- Footer -->
                            <div class="card-footer bg-white border-0 text-center">
                                <a href="#" class="text-decoration-none fw-bold">
                                    Lihat Semua Pengumuman →
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- kegiatan terbaru -->
            <div class="col-md-9">
                <div class="card mt-2">
                    <div class="card text-dark fw-bold">
                        <div class="card-header" >
                            <h4 class="border-start border-4 ps-3 mb-4">
                            Kegiatan Terbaru
                            <a class="float-md-end" href="">
                                <h6>Lihat semua kegiatan -></h6>
                            </a>
                        </h4>
                           
                        </div>
                        <div class="container">
                            <div class="row mt-md-2">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://unair.ac.id/wp-content/uploads/2026/05/HARDIKNAS-2026-Cam-2-4-of-100-1024x683.jpg"
                                                alt="" width="150">
                                            <h6>Upacara Hari Pendidikan Nasional</h6>
                                            <small class="text-muted">
                                                📅 7 Sep 2025
                                            </small>
                                            <p>
                                                Peringatan Hari Pendidikan Nasional (Hardiknas) sebagai bentuk penghormatan terhadap jasa Ki Hadjar Dewantara serta untuk meningkatkan semangat belajar dan pentingnya pendidikan bagi generasi penerus bangsa.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgYdd_a0Dgwgt6J3CLR9COHTkogQKDCdp1Z3Ib_p6FAMwkI4qps5y05tW7&s=10"
                                                alt="" width="150">
                                            <h6>Kegiatan Ekstrakulikuler Pramuka</h6>
                                            <small class="text-muted">
                                                📅 25 Des 2025
                                            </small>
                                            Kegiatan ekstrakurikuler Pramuka adalah kegiatan di sekolah yang bertujuan untuk membentuk karakter, kedisiplinan, dan keterampilan siswa melalui kegiatan kepanduan
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcRm0sFZjIt8sWdMvKg_KZHDXRxC0_xtUO4E3JgVosqLAwERDOZ4KQLKE&s=10"
                                                alt="" width="150">
                                            <h6>Lomba Seni dan Olahraga Antar Kelas</h6>
                                            <small class="text-muted">
                                                📅 12 Mar 2025
                                            </small>
                                            Lomba seni dan olahraga antar kelas atau class meeting adalah kegiatan positif untuk menyalurkan bakat dan mempererat kebersamaan siswa.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyy0sTP6ys8zv3BpP517gY6n390Q8fA9lDHVRu3K3Fht-M_YqO1QHvvgw&s=10"
                                                alt="" width="150">
                                            <h6>Kunjungan Edukasi ke Museum</h6>
                                            <small class="text-muted">
                                                📅 02 Jun 2025
                                            </small>
                                            Kunjungan edukasi ke museum adalah kegiatan belajar di luar kelas yang mengajak siswa melihat langsung benda bersejarah dan budaya
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- FOOTER -->
            <footer class="bg-dark text-white mt-4 p-4">

                <div class="container">

                    <div class="row">

                        <!-- KIRI -->
                        <div class="col-md-4">
                            <h6 class="fw-bold mb-1">
                                Jakarta Intercultural School
                            </h6>


                        </div>

                        <!-- TENGAH -->
                        <div class="col-md-4 border-start border-end">

                            <div class="text-center">

                                <small class="text-secondary">
                                    Website ini dikembangkan oleh
                                </small>

                                <div class="fw-semibold small">
                                    Klinik Komputer dan Audio Blitar
                                </div>

                                <small class="text-secondary">
                                    Solusi Teknologi untuk Pendidikan
                                </small>

                            </div>

                        </div>

                        <!-- KANAN -->
                        <div class="col-md-4 text-end">

                            <small class="text-secondary">
                                Jakarta Intercultural School
                            </small>

                            <br>

                        </div>

                    </div>

                </div>

            </footer>

</body>

</html>