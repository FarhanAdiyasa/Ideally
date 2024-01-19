<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Everlas Things</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/index/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        #galeri {
            position: relative;
            width: 450px;
            height: 350px;
            overflow: hidden;
        }
        .slider-container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .slider {
            width: 100%;
            height: 100%;
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #description {
            position: absolute;
            width: 499px;
            left: 8px;
            top: 483px;
            color: black;
            font-size: 14px;
            font-family: Poppins;
            font-weight: 400;
            text-transform: capitalize;
            word-wrap: break-word;
        }

        #prev {
            width: 40px;
            height: 40px;
            background: #382C20;
            position: absolute;
            top: -23px;
            left: 410px;
            cursor: pointer;
            border-right: 2px solid #fff;
            /* Garis vertikal */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #next {
            width: 40px;
            height: 40px;
            background: #382C20;
            position: absolute;
            left: 50px;
            top: 5px;
            right: 0;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #prev img,
        #next img {
            width: 20px;
            height: 20px;
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>

<body>
    {{-- Navbar Section --}}
    @include('partials.navbar')
    {{-- End of Navbar Section --}}

    <!-- Hero & Navigation Bar -->
    <header id="hero-navbar">
        <div class="black-opacity position-absolute"></div>
        <div class="container">
            <div class="hero-logo">
                <img src="../img/LOGO.png" alt="">
            </div>
            <div class="hero-content d-flex">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="deskripsi text-white">
                            <p>Lahir dari sentuhan artistik, menghadirkan keindahan
                                abadi dalam furniture berbahan logam. Desain unik dan
                                kualitas tinggi menciptakan keindahan yang abadi dan
                                fungsionalitas yang tahan lama.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 p-0">
                        <nav class="navbar navbar-dark">
                            <div class="container-fluid">
                                <div class="navbar-collapse" id="navbarNav">

                                    <script>
                                        $(document).ready(function () {
                                            $('.custom-dropdwon').hover(
                                                function () {
                                                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
                                                },
                                                function () {
                                                    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
                                                }
                                            );
                                        });
                                    </script>

                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Beranda</a>
                                        </li>
                                        <li class="nav-item dropdown custom-dropdwon">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Seri Desain <i class="bi bi-circle-fill custom-down"></i>
                                            </a>
                                            <ul class="dropdown-menu seri">
                                                <li><a class="dropdown-item" href="#">Industrial</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Konstru</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Brutalism</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Minimalis</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Jenggala</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown custom-dropdwon">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Jenis Furniture <i class="bi bi-circle-fill custom-down"></i>
                                            </a>
                                            <ul class="dropdown-menu jenis">
                                                <li><a class="dropdown-item" href="#">Bangku</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Kursi</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Meja</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Rak Serbaguna</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Rak Tanaman</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Tiang Lampu</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Ornamen</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown custom-dropdwon">
                                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Warna <i class="bi bi-circle-fill custom-down"></i>
                                            </a>
                                            <ul class="dropdown-menu warna">
                                                <li><a class="dropdown-item" href="#">Hitam</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Putih</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Abu-Abu</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Merah</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Kuning</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Jingga</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Hijau</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Hero &Navigation Bar -->

    <div class="container">
        <div class="container-utama">
            <div class="row">
                <div class="col-sm-6 col-left">
                    <!-- Random Produk -->
                    <section id="random-produk">
                        <div class="row">
                            <div class="col-sm-2">
                                <h4>01</h4>
                                <div class="vertical-hr">
                                    <svg @xmlns="http://www.w3.org/2000/svg" width="6" height="120" viewBox="0 0 6 186"
                                        fill="none">
                                        <path d="M3 3L3.00001 183" stroke="#DFDFDF" stroke-width="5"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h4>02</h4>
                                <div class="vertical-hr">
                                    <svg @xmlns="http://www.w3.org/2000/svg" width="6" height="120" viewBox="0 0 6 186"
                                        fill="none">
                                        <path d="M3 3L3.00001 183" stroke="#DFDFDF" stroke-width="5"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h4>03</h4>
                                <div class="vertical-hr">
                                    <svg @xmlns="http://www.w3.org/2000/svg" width="6" height="120" viewBox="0 0 6 186"
                                        fill="none">
                                        <path d="M3 3L3.00001 183" stroke="#DFDFDF" stroke-width="5"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h4>04</h4>
                                <div class="vertical-hr">
                                    <svg @xmlns="http://www.w3.org/2000/svg" width="6" height="120" viewBox="0 0 6 186"
                                        fill="none">
                                        <path d="M3 3L3.00001 183" stroke="#DFDFDF" stroke-width="5"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <h4>05</h4>
                            </div>
                            <div class="col-sm-10 overtop-card">
                                <div class="card mb-3 card-product-besar">
                                    <div class="row g-0">
                                        <div class="col-md-7">
                                            <img src="../img/CONTOH.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <p class="card-text seri">Seri Industri</p>
                                                <p class="card-text nama-produk">Nama Produk Spesifikasi</p>
                                                <p class="card-text harga">Rp 1,700,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 card-product-besar">
                                    <div class="row g-0">
                                        <div class="col-md-7">
                                            <img src="../img/CONTOH.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <p class="card-text seri">Seri Industri</p>
                                                <p class="card-text nama-produk">Nama Produk Spesifikasi</p>
                                                <p class="card-text harga">Rp 1,700,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 card-product-besar">
                                    <div class="row g-0">
                                        <div class="col-md-7">
                                            <img src="../img/CONTOH.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <p class="card-text seri">Seri Industri</p>
                                                <p class="card-text nama-produk">Nama Produk Spesifikasi</p>
                                                <p class="card-text harga">Rp 1,700,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 card-product-besar">
                                    <div class="row g-0">
                                        <div class="col-md-7">
                                            <img src="../img/CONTOH.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <p class="card-text seri">Seri Industri</p>
                                                <p class="card-text nama-produk">Nama Produk Spesifikasi</p>
                                                <p class="card-text harga">Rp 1,700,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 card-product-besar">
                                    <div class="row g-0">
                                        <div class="col-md-7">
                                            <img src="../img/CONTOH.png" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <p class="card-text seri">Seri Industri</p>
                                                <p class="card-text nama-produk">Nama Produk Spesifikasi</p>
                                                <p class="card-text harga">Rp 1,700,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><br>
                    <!-- End Random Produk -->

                    <!-- Seri Unggulan -->
                    <section id="seri-unggulan" class="padding-left-side">
                        <div class="section-title">
                            <h6>Seri Desain Unggulan</h6>
                        </div><br>
                        <div class="mb-3 card-seri-unggulan">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-seri1.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">MACHIFORGE</p>
                                        <p class="card-text deskripsi">Seri desain furniture industrial dengan material
                                            awet dan tahan lama.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-seri-unggulan">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-seri2.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">STRUCTURA</p>
                                        <p class="card-text deskripsi">Furniture Anda dengan nuansa desain unfinished
                                            looks. Kontemporer!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-seri-unggulan">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-seri3.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">STEELCRAZE</p>
                                        <p class="card-text deskripsi">Desain metal brutal untuk furniture Anda! Membuat
                                            pengguna begitu eksklusif.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><br>
                    <!-- End Seri Unggulan -->

                    <!-- Jaminan Kualitas -->
                    <section id="jaminan-kualitas" class="padding-left-side">
                        <div class="section-title">
                            <h6>Jaminan Kualitas</h6>
                        </div><br>
                        <div class="d-flex">
                            <div class="mb-3 card-jaminan">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="../img/everlas_things/icon-unggul1.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <p class="card-text deskripsi">Fungsionalitas tahan lama</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 card-jaminan">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="../img/everlas_things/icon-unggul2.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <p class="card-text deskripsi">Beragam seri dan kategori</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 card-jaminan">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="../img/everlas_things/icon-unggul3.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <p class="card-text deskripsi">Desain unik dan berbeda</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 card-jaminan">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="../img/everlas_things/icon-unggul4.jpg" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <p class="card-text deskripsi">Pelayanan pelanggan terbaik</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><br>
                    <!-- End Jaminan Kualitas -->

                    <!-- Jenis Populer -->
                    <section id="seri-unggulan" class="padding-left-side">
                        <div class="section-title">
                            <h6>JENIS FURNITRE TERPOPULER</h6>
                        </div><br>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis1.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Bangku</p>
                                        <p class="card-text deskripsi">Elegan dan nyaman, menciptakan suasana yang
                                            memesona dengan kualitas tahan lama.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis2.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Kursi</p>
                                        <p class="card-text deskripsi">Desain modern dan kenyamanan menyatu, memberikan
                                            sentuhan istimewa pada suasana ruang Anda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis3.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Meja</p>
                                        <p class="card-text deskripsi">Fungsional dan menawan, menciptakan titik fokus
                                            indah untuk pertemuan dan dinikmati di luar ruangan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis4.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Rak Serba Guna</p>
                                        <p class="card-text deskripsi">Optimalkan Ruang dengan menghadirkan keteraturan
                                            dan keindahan. Solusi untuk kebutuhan penyimpanan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis5.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Rak Tanaman</p>
                                        <p class="card-text deskripsi">Menonjolkan keindahan, memberikan suasana yang
                                            cantik untuk tanaman tumbuh teratur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis6.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Tiang Lampu</p>
                                        <p class="card-text deskripsi">Penerangan artistik saat malam hari. Desain kokoh
                                            elegan, menciptakan suasana hangat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card-populer">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="../img/everlas_things/icon-jenis7.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <p class="card-text title">Ornamen</p>
                                        <p class="card-text deskripsi">Sentuhan magis untuk mempercantik suasana ruang.
                                            Detail artistik yang menambahkan karakter unik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><br>

                    <section id="kebutuhan-custom">
                        <div style="width: 557px; height: 256px;  left: 20px; position: relative">
                            <div
                                style="left: 0px; top: 0px; position: absolute; color: #FF6412; font-size: 25px; font-family: Rubik; font-weight: 400; word-wrap: break-word">
                                KEBUTUHAN CUSTOM</div>
                            <div style="width: 557px; height: 200px; left: 0px; top: 56px; position: absolute">
                                <div style="width: 557px; height: 200px; left: 0px; top: 0px; position: absolute">
                                    <div
                                        style="width: 150px; height: 200px; left: 0px; top: 0px; position: absolute; background: #A79494">
                                        <img src="../img/LOGO MojaPisun.png" alt="Logo MojaPisun"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div
                                        style="width: 383px; height: 49px; left: 174px; top: 0px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                        Wujudkan Keinginan Anda. Pesan Produk Custom Everlas Sekarang Juga!</div>
                                    <div
                                        style="width: 337px; height: 74px; left: 220px; top: 58px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                        Konsultasi sesuai kebutuhan<br />Proses desain profesional<br />Garansi produk
                                    </div>
                                    <a href="https://wa.link/5m2hiz"
                                        style="position: absolute;background-color: #FF6412; color: white; padding: 10px 20px; text-decoration: none;">Bicarakan
                                        Sekarang</a>

                                    <div
                                        style="width: 15px; height: 15px; left: 188px; top: 61px; position: absolute; background: #FF6412; border-radius: 9999px">
                                    </div>
                                    <div
                                        style="width: 15px; height: 15px; left: 188px; top: 109px; position: absolute; background: #FF6412; border-radius: 9999px">
                                    </div>
                                    <div
                                        style="width: 15px; height: 15px; left: 188px; top: 85px; position: absolute; background: #FF6412; border-radius: 9999px">
                                    </div>

                                </div>
                            </div>
                    </section>

                    <!-- End Jenis Populer -->
                </div>
                <div class="col-sm-6 col-right">
                    <!-- Overview -->
                    <section id="overview">
                        <div class="overview">
                            <div class="title">
                                <p>Overview</p>
                            </div>
                            <div class="deskripsi">
                                <p>Everlas Things, perintis keanggunan dalam furniture logam. Dengan fokus pada material
                                    logam,
                                    kami hadirkan desain unik dan kualitas terbaik untuk suasana ruang Anda. Setiap
                                    produk
                                    mencerminkan keabadian, menggabungkan keindahan seni dan fungsionalitas yang tahan
                                    lama.
                                    Dari bangku hingga ornamen, Everlas Things menciptakan suasana ruang yang memukau
                                    dan memenuhi
                                    keinginan estetika dan kenyamanan.</p>
                            </div>
                            <a href="{{ route('everlasthings.showcase') }}" class="btn">Lihat Produk</a>
                        </div>
                    </section>

                    <!-- End Overview -->
                    <section id="galeri">
                        <div
                            style="left: 5px; top: 0px;  color: #804F27; font-size: 25px; font-family: Rubik; font-weight: 400; word-wrap: break-word">
                            GALERI</div>
                        <div class="slider-container">
                            <div class="slider">
                                <div class="slide"><img src="../img/everlas_things/galeri1.jpg" alt="Image 1"></div>
                                <div class="slide"><img src="../img/everlas_things/galeri2.jpg" alt="Image 2"></div>
                                <div class="slide"><img src="../img/everlas_things/galeri3.jpg" alt="Image 3"></div>
                                <div class="slide"><img src="../img/everlas_things/galeri4.jpg" alt="Image 4"></div>
                                <div class="slide"><img src="../img/everlas_things/galeri5.jpg" alt="Image 5"></div>
                            </div>
                            <div id="prev" onclick="prevSlide()"><img src="../img/Vector 6.png"></div>
                            <div id="next" onclick="nextSlide()"><img src="../img/Vector 7.png"></div>
                        </div>
                    </section>
                    <div style="width: 499px; left: 8px; top: 483px; color: black; font-size: 14px; 
                    font-family: Poppins; font-weight: 400; text-transform:
                    capitalize; word-wrap: break-word">Furniture elegan dari besi dan logam. Desain abadi,
                        keindahan yang tahan lama untuk ruang taman Anda.</div>

                    <script>
                        let currentSlide = 0;

                        function showSlide() {
                            const slider = document.querySelector('.slider');
                            const slides = document.querySelectorAll('.slide');
                            slider.style.transform = `translateX(${-currentSlide * 100}%)`;
                        }

                        function nextSlide() {
                            const slides = document.querySelectorAll('.slide');
                            currentSlide = (currentSlide + 1) % slides.length;
                            showSlide();
                        }


                        function prevSlide() {
                            const slides = document.querySelectorAll('.slide');
                            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                            showSlide();
                        }
                    </script>

                    <section id="produk-terbaru">
                        <div style="width: 636px; height: 1098px; left: -65px; position: relative">
                            <div style="width: 501px; height: 125px; left: 69px; top: 53px; position: absolute">
                                <div
                                    style="width: 125px; height: 125px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                </div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 13px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Industrial Style</div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 83px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Rilis 30 September 2023</div>
                                <div
                                    style="width: 345px; height: 57px; left: 156px; top: 34px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">
                                    FOREVENGE - Bangku Kotak Single Seat Outdoor</div>
                            </div>
                            <div style="width: 501px; height: 125px; left: 69px; top: 200px; position: absolute">
                                <div
                                    style="width: 125px; height: 125px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                </div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 13px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Industrial Style</div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 83px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Rilis 30 September 2023</div>
                                <div
                                    style="width: 345px; height: 57px; left: 156px; top: 34px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">
                                    FOREVENGE - Bangku Kotak Single Seat Outdoor</div>
                            </div>
                            <div style="width: 501px; height: 125px; left: 69px; top: 347px; position: absolute">
                                <div
                                    style="width: 125px; height: 125px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                </div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 13px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Industrial Style</div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 83px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Rilis 30 September 2023</div>
                                <div
                                    style="width: 345px; height: 57px; left: 156px; top: 34px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">
                                    FOREVENGE - Bangku Kotak Single Seat Outdoor</div>
                            </div>
                            <div style="width: 501px; height: 125px; left: 69px; top: 494px; position: absolute">
                                <div
                                    style="width: 125px; height: 125px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                </div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 13px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Industrial Style</div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 83px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Rilis 30 September 2023</div>
                                <div
                                    style="width: 345px; height: 57px; left: 156px; top: 34px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">
                                    FOREVENGE - Bangku Kotak Single Seat Outdoor</div>
                            </div>
                            <div style="width: 501px; height: 125px; left: 69px; top: 641px; position: absolute">
                                <div
                                    style="width: 125px; height: 125px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                </div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 13px; position: absolute; color: #382C20; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Industrial Style</div>
                                <div
                                    style="width: 171px; height: 21px; left: 156px; top: 83px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Rilis 30 September 2023</div>
                                <div
                                    style="width: 345px; height: 57px; left: 156px; top: 34px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: capitalize; word-wrap: break-word">
                                    FOREVENGE - Bangku Kotak Single Seat Outdoor</div>
                            </div>
                            <div
                                style="left: 69px; top: 0px; position: absolute; color: #804F27; font-size: 25px; font-family: Rubik; font-weight: 400; word-wrap: break-word">
                                PRODUK TERBARU</div>
                            <div
                                style="width: 470px; height: 250px; left: 69px; top: 798px; position: absolute; background: #BDAB93">
                            </div>
                            <div style="width: 80px; height: 40px; left: 459px; top: 778px; position: absolute">
                                <div
                                    style="width: 80px; height: 40px; left: 0px; top: 0px; position: absolute; background: #382C20">
                                </div>
                                <div
                                    style="width: 20px; height: 0px; left: 40px; top: 30px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px white solid">
                                </div>
                                <div
                                    style="width: 13.55px; height: 13.55px; left: 15px; top: 20px; position: absolute; transform: rotate(-45deg); transform-origin: 0 0; background: white">
                                </div>
                                <div
                                    style="width: 13.55px; height: 13.55px; left: 65px; top: 19.58px; position: absolute; transform: rotate(135deg); transform-origin: 0 0; background: white">
                                </div>

                            </div>
                    </section>

                    <script>
                        let currentSlideProd = 0;

                        function showSlideProd() {
                            const sliderProd = document.querySelector('#produk-terbaru .slider');
                            const slidesProd = document.querySelectorAll('#produk-terbaru .slide');
                            sliderProd.style.transform = `translateX(${-currentSlideProd * 100}%)`;
                        }

                        function nextSlideProd() {
                            const slidesProd = document.querySelectorAll('#produk-terbaru .slide');
                            currentSlideProd = (currentSlideProd + 1) % slidesProd.length;
                            showSlideProd();
                        }

                        function prevSlideProd() {
                            const slidesProd = document.querySelectorAll('#produk-terbaru .slide');
                            currentSlideProd = (currentSlideProd - 1 + slidesProd.length) % slidesProd.length;
                            showSlideProd();
                        }
                    </script>


                    <section id="artikel">
                        <div style="width: 500px; height: 719px; position: relative">
                            <div
                                style="left: 0px; top: 0px; position: absolute; color: #804F27; font-size: 25px; font-family: Rubik; font-weight: 400; word-wrap: break-word">
                                ARTIKEL TERKAIT</div>
                            <div style="width: 200px; height: 200px; left: 0px; top: 69px; position: absolute">
                                <div
                                    style="width: 200px; height: 200px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                    <img src="../img/LOGO MojaPisun.png" alt="Logo MojaPisun"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div
                                    style="width: 250px; height: 200px; left: 250px; top: 0px; position: absolute; background: white">
                                </div>
                                <div
                                    style="width: 159.06px; height: 21px; left: 268px; top: 153px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Mila Cornelia</div>
                                <div
                                    style="width: 200px; height: 123px; left: 268px; top: 17px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas.</div>
                                <div style="width: 69.76px; height: 15px; left: 268px; top: 174px; position: absolute">
                                </div>
                            </div>
                            <div style="width: 500px; height: 200px; left: 0px; top: 519px; position: absolute">
                                <div
                                    style="width: 250px; height: 200px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                    <img src="../img/LOGO MojaPisun.png" alt="Logo MojaPisun"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div
                                    style="width: 250px; height: 200px; left: 250px; top: 0px; position: absolute; background: white">
                                </div>
                                <div
                                    style="width: 159.06px; height: 21px; left: 268px; top: 153px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Mila Cornelia</div>
                                <div
                                    style="width: 200px; height: 123px; left: 268px; top: 17px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas.</div>
                                <div style="width: 69.76px; height: 15px; left: 268px; top: 174px; position: absolute">
                                </div>
                            </div>
                            <div style="width: 500px; height: 200px; left: -0px; top: 294px; position: absolute">
                                <div
                                    style="width: 250px; height: 200px; left: 0px; top: 0px; position: absolute; background: #BDAB93">
                                    <img src="../img/LOGO MojaPisun.png" alt="Logo MojaPisun"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div
                                    style="width: 250px; height: 200px; left: 250px; top: 0px; position: absolute; background: white">
                                </div>
                                <div
                                    style="width: 159.06px; height: 21px; left: 268px; top: 153px; position: absolute; color: #7C7C7C; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                                    Mila Cornelia</div>
                                <div
                                    style="width: 200px; height: 123px; left: 268px; top: 17px; position: absolute; color: #5E6462; font-size: 16px; font-family: Poppins; font-weight: 700; text-transform: uppercase; word-wrap: break-word">
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                    egestas.</div>
                                <div style="width: 69.76px; height: 15px; left: 268px; top: 174px; position: absolute">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>

    <!-- Call To Action -->
    <section id="cta" class="mt-4">
        <div class="cta-content d-flex justify-content-center align-items-center flex-column">
            <img style="backgroundImage" src="../../img/everlas_things/index-header-bg.jpg" alt="Background Image">
            <p>Temukan keindahan susana ruangan Anda dengan Everlas Things! Lihat koleksi furniture kami, dari bangku
                elegan hingga ornamen menakjubkan. Ciptakan ruang dengan berbagai seri yang memukau sekarang!</p>
            <a class="btn" href="{{ route('everlasthings.showcase') }}">Lihat Etalase</a>
        </div>
        <div class="bg-img-cta">
            <img src="dedikasi-flora/assets/img/06A-SEC01-LATAR.jpg" alt="" style="width: 100%;">
        </div>
    </section>
    <!-- End CTA -->



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>