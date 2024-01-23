<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6990JVL0LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6990JVL0LN');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dedikasi Flora</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dedikasi-flora/assets/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{ asset('/css/navbar-style.css') }}">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    <link rel="stylesheet" href="dedikasi-flora/assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="dedikasi-flora/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<<<<<<< HEAD
=======
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    <!-- Hero & Navigation Bar -->
    <header id="hero-navbar">
        <div class="hero-img">
            <img src="dedikasi-flora/assets/img/06A-SEC01-LATAR.jpg" alt="" style="max-width: 100%; max-height: auto;">
        </div>
        <div class="content z-1 position-absolute" style="width: 100%;">
            <div class="hero">
                <div class="hero-logo d-flex justify-content-center align-items-center flex-column">
                    <img src="dedikasi-flora/assets/img/logo.png" alt="" style="width: 30%;">
                    <p class="text-white text-center">Pemasok tanaman yang berdedikasi
                        untuk memperindah lingkungan dengan<br> menyediakan berbagai tanaman untuk sesuai dengan
                        kebutuhan Anda.</p>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid d-flex justify-content-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                            </li>
                            <li class="nav-item dropdown custom-dropdown">
                                <button class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Strata <i class="bi bi-caret-down-square-fill custom-down"></i>
                                </button>
                                <ul class="dropdown-menu margin-end">
                                    <li><a class="dropdown-item" href="#">Rumput</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Penutup Tanah</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Semak</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Pohon Kecil</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Pohon Sedang</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Pohon Besar</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Tanaman Air</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Merambat Menjuntai</a></li>
                                    <hr>
                                </ul>
                            </li>
                            <li class="nav-item dropdown custom-dropdown">
                                <button class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Warna Daun <i class="bi bi-caret-down-square-fill custom-down"></i>
                                </button>
                                <ul class="dropdown-menu margin-start">
                                    <li><a class="dropdown-item" href="#">Merah</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Merah Muda</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Jingga</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Kuning</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Hijau</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Biru</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Ungu</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Putih</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Hitam</a></li>
                                    <hr>
                                </ul>
                            </li>
                            <li class="nav-item dropdown custom-dropdown">
                                <button class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Warna Bunga <i class="bi bi-caret-down-square-fill custom-down"></i>
                                </button>
                                <ul class="dropdown-menu margin-start">
                                    <li><a class="dropdown-item" href="#">Merah</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Merah Muda</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Jingga</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Kuning</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Hijau</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Biru</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Ungu</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Putih</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">Hitam</a></li>
                                    <hr>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Hero & Navigation Bar -->

    <!-- Keunggulan -->
    <section id="keunggulan" class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card-keunggulan">
                        <div class="row g-0">
                            <div class="col-sm-2 col-2 d-flex align-items-center justify-content-center m-0">
                                <img src="dedikasi-flora/assets/img/06A-SEC02-ICON-1.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-sm-10 col-10">
                                <div class="card-body">
                                    <p class="card-text"><small class="text-body-secondary">Seluruh produk Kami adalah
                                            tanaman dengan kualitas terbaik kebutuhan pekerjaan proyek.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-keunggulan">
                        <div class="row g-0">
                            <div class="col-sm-2 col-2 d-flex align-items-center justify-content-center m-0">
                                <img src="dedikasi-flora/assets/img/06A-SEC02-ICON-2.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-sm-10 col-10">
                                <div class="card-body">
                                    <p class="card-text"><small class="text-body-secondary">Produk tanaman yang kami
                                            sediakan hadir dalam berbagai spesifikasi yang seluruhnya siap untuk
                                            penanaman.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-keunggulan">
                        <div class="row g-0">
                            <div class="col-sm-2 col-2 d-flex align-items-center justify-content-center m-0">
                                <img src="dedikasi-flora/assets/img/06A-SEC02-ICON-3.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-sm-10 col-10">
                                <div class="card-body">
                                    <p class="card-text"><small class="text-body-secondary">Standar Pengawasan kualitas
                                            kami hadir saat sebelum dan selama pengiriman produk.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Keunggulan -->

    <!-- Penawaran Produk -->
    <section id="penawaran" class="mt-4">
        <div class="container">
            <div class="title">
                <h5 class="fw-bold" style="color: #FE7338;">Penawaran Produk</h5>
            </div>
            <div class="d-flex content">
                <img src="dedikasi-flora/assets/img/06A-SEC03-ILUSTRASI.jpg" alt="" class="img-penawaran">
                <div class="row product">
                    <div class="row">
                        @foreach($dedikasiFloras as $dedikasiFlora)
                        <div class="col-sm-3 col-6">
                            <div class="card-product">
                                <a href="{{ route('deflo.detail', ['id_nurseri' => $dedikasiFlora->id_nurseri]) }}"
                                    class="card-link">
                                    <div class="card border-0">
                                        <img src="{{ asset($dedikasiFlora->gambar_1) }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">{{ $dedikasiFlora->nama_lokal }} - Panjang {{
                                                $dedikasiFlora->tinggi }} cm</p>
                                            <p class="text-harga text-white">Harga Tersembunyi</p>
                                            <hr>
                                            <div class="d-flex card-atribute text-white">
                                                <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                        $dedikasiFlora->rating }}</span></div>
                                                <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                        $dedikasiFlora->item_terjual }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div><br>
            <!-- Banner Slider -->
            <div class="row">
                <div class="col-sm-6">
                    <div id="carousel-banner-1" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-banner-1" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-banner-1" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-banner-1" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
<<<<<<< HEAD
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER1A.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER1B.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER1C.jpg" class="d-block w-100" alt="...">
=======
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER1A.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER1B.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER1C.jpg" class="d-block w-100"
                                    alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="carousel-banner-2" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-banner-2" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
<<<<<<< HEAD
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER2A.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER2B.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER2C.jpg" class="d-block w-100" alt="...">
=======
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER2A.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER2B.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER2C.jpg" class="d-block w-100"
                                    alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Penawaran Produk -->

    <!-- Rekomendasi Produk -->
    <section id="rekomendasi" class="mt-4">
        <div class="container">
            <div class="title">
                <h5 class="fw-bold" style="color: #FE7338;">Rekomendasi Produk</h5>
            </div>
            <!-- Carousel Produk -->
            <div id="carousel-rekomendasi" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="row g-3">
                                @foreach ($deflos as $deflo1)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $deflo1->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $deflo1->gambar_1 }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $deflo1->nama_lokal }} - Panjang {{
                                                        $deflo1->panjang }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                                $deflo1->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                                $deflo1->item_terjual }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="row g-3">
                                @foreach ($deflos2 as $deflo2)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $deflo2->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $deflo2->gambar_1 }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $deflo2->nama_lokal }} - Panjang {{
                                                        $deflo2->panjang }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                                $deflo2->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                                $deflo2->item_terjual }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-rekomendasi"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-rekomendasi"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Banner Slider -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div id="carousel-banner-3" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-banner-3" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-banner-3" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-banner-3" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
<<<<<<< HEAD
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER3A.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER3B.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER3C.jpg" class="d-block w-100" alt="...">
=======
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER3A.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER3B.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER3C.jpg" class="d-block w-100"
                                    alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="carousel-banner-4" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-banner-4" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-banner-4" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-banner-4" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
<<<<<<< HEAD
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER4A.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER4B.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER4C.jpg" class="d-block w-100" alt="...">
=======
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER4A.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER4B.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER4C.jpg" class="d-block w-100"
                                    alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Rekomendasi Produk -->

    <!-- Rekomendasi Produk -->
    <section id="edukasi" class="mt-4">
        <div class="container">
            <div class="title">
                <h5 class="fw-bold" style="color: #FE7338;">Edukasi Tanaman</h5>
            </div>
            <!-- Carousel Produk -->
            <div id="carousel-edukasi" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="row g-3">
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i></i><span>
                                                            1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="row g-3">
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-artikel">
                                        <div class="card border-0">
<<<<<<< HEAD
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top" alt="...">
=======
                                            <img src="dedikasi-flora/assets/img/contoh2.png" class="card-img-top"
                                                alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            <div class="card-body">
                                                <p class="card-text">Cantik Menjuntai, Inilah 5 Fakta Tentang Tanaman
                                                    Lee Kuan Yew!</p>
                                                <p class="card-text"><small>Fabian Khalaf S</small></p>
                                                <hr>
                                                <div class="d-flex card-atribute text-white">
                                                    <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span>
                                                    </div>
                                                    <div class="seen"><i class="bi bi-eye-fill"></i><span> 1.456</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-edukasi"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-edukasi"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Banner Slider -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <div id="carousel-banner-5" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-banner-5" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-banner-5" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-banner-5" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
<<<<<<< HEAD
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER5A.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER5B.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER5C.jpg" class="d-block w-100" alt="...">
=======
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER5A.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER5B.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER5C.jpg" class="d-block w-100"
                                    alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="carousel-banner-6" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-banner-6" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-banner-6" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-banner-6" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
<<<<<<< HEAD
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER6A.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER6B.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER6C.jpg" class="d-block w-100" alt="...">
=======
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER6A.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER6B.jpg" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="dedikasi-flora/assets/img/06A-SEC03-SLIDER6C.jpg" class="d-block w-100"
                                    alt="...">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Rekomendasi Produk -->

    <!-- Call To Action -->
    <section id="cta" class="mt-4">
        <div class="cta-content d-flex justify-content-center align-items-center flex-column">
            <img src="dedikasi-flora/assets/img/logo.png" alt="" style="width: 30%;">
            <p class="text-white text-center">Pemasok tanaman yang berdedikasi untuk
                memperindah lingkungan
                dengan<br> menyediakan berbagai tanaman untuk sesuai dengan kebutuhan Anda.</p>
            <a class="mt-4" href="{{ route('deflo.showcase') }}">Lihat Semua Produk</a>
        </div>
        <div class="bg-img-cta">
            <img src="dedikasi-flora/assets/img/06A-SEC01-LATAR.jpg" alt="" style="width: 100%;">
        </div>
    </section>
    <!-- End CTA -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>