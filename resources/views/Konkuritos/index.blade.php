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
    <title>Konkurito</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    <link rel="stylesheet" href="assets/css/index/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
=======
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->
    
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    <div class="container">
        <!-- Hero & Navigation Bar -->
        <section id="hero-navbar">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-6 bg-white">
                            <div class="hero-logo">
                                <img src="assets/img/LOGO.png" alt="" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-6 bg-yellow">
                            <div class="action">
                                <div class="title">
<<<<<<< HEAD
                                    <p>Produk Beton Produk</p>
                                </div>
                                <div class="deskripsi">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa illo assumenda hic.
                                        Exercitationem, ut minus?</p>
=======
                                    <p>Penyedia Produk Beton</p>
                                </div>
                                <div class="deskripsi">
                                    <p>Solusi beton untuk konstruksi, developer, dan konsumen, dengan produk berkualitas tinggi dan pelayanan terpercaya.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                </div>
                                <a href="{{ route('konkurito.showcase') }}" class="btn">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 right-side">
                    <div class="row">
                        <div class="col-6 bg-blue">
                            <nav class="navbar navbar-dark">
                                <div class="container-fluid">
                                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button> -->
                                    <div class="navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <!-- <li class="nav-item">
                                                <a class="nav-link active" href="#">Beranda</a>
                                            </li> -->
                                            <li class="nav-item dropdown custom-dropdwon">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="text-icon">
                                                        <span class="text">Paving</span><i
                                                            class="bi bi-caret-right-fill icon"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu first">
                                                    <li><a class="dropdown-item" href="#">GRASS BLOCK</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING BATA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING HEXAGON</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING TRIHEX</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">LAINNYA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown custom-dropdwon">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="text-icon">
<<<<<<< HEAD
                                                        <span class="text">Paving</span><i
=======
                                                        <span class="text">Kansteen</span><i
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                                            class="bi bi-caret-right-fill icon"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu second">
                                                    <li><a class="dropdown-item" href="#">GRASS BLOCK</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING BATA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING HEXAGON</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING TRIHEX</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">LAINNYA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown custom-dropdwon">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="text-icon">
<<<<<<< HEAD
                                                        <span class="text">Paving</span><i
=======
                                                        <span class="text">Roster</span><i
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                                            class="bi bi-caret-right-fill icon"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu third">
                                                    <li><a class="dropdown-item" href="#">GRASS BLOCK</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING BATA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING HEXAGON</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING TRIHEX</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">LAINNYA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown custom-dropdwon">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="text-icon">
<<<<<<< HEAD
                                                        <span class="text">Paving</span><i
=======
                                                        <span class="text">Lainnya</span><i
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                                            class="bi bi-caret-right-fill icon"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu last">
                                                    <li><a class="dropdown-item" href="#">GRASS BLOCK</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING BATA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING HEXAGON</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">PAVING TRIHEX</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">LAINNYA</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
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
        </section>
        <!-- End Hero & Navigation Bar -->

        <!-- Overview -->
        <section id="overview">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div id="carouselOne" class="carousel slide carousel-fade p-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!-- Item one must be 01/05-->
                                    <div class="row">
                                        <div class="col-6 description-box">
                                            <div class="title">
<<<<<<< HEAD
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
=======
                                                <p>Roster</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Melangkah nyaman, melintas aman, begitulah ketika Anda bergerak di atas paving block Konkurito.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box geser-kiri">
                                            <div class="title">
<<<<<<< HEAD
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
=======
                                                <p>Sumber Estetika</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Sebagian besar bangunan memanfaatkan dinding sebagai sumber estetika. Pemakaian roster adalah pilihan utama.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item two must be 02/05 -->
                                    <div class="row">
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER2-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box geser-kiri">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item three must be 03/05 -->
                                    <div class="row">
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box geser-kiri">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item four must be 04/06 -->
                                    <div class="row">
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box geser-kiri">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item five must be 05/05 -->
                                    <div class="row">
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box geser-kiri">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne"
                                data-bs-slide="prev">
                                <span class="text-dark">
                                    <h3>
                                        <i class="bi bi-caret-left-fill"></i>
                                    </h3>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselOne"
                                data-bs-slide="next">
                                <span class="text-dark">
                                    <h3>
                                        <i class="bi bi-caret-right-fill"></i>
                                    </h3>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-6 description-box">
                            <div class="title">
<<<<<<< HEAD
                                <p>Title</p>
                                <hr class="title-line">
                            </div>
                            <div class="deskripsi">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                    voluptate corporis placeat explicabo debitis ex.</p>
=======
                                <p>Roster</p>
                                <hr class="title-line">
                            </div>
                            <div class="deskripsi">
                                <p>Cocok digunakan untuk pagar rumah, dinding pembatas, sekat ruangan, dan lubang ventilasi. Desain estetik dan ciamik.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                        <div class="col-6 p-0">
                            <img src="assets/img/ILUSTRASI1_1-1.png" alt="" style="width: 100%; max-height: 100%;">
                        </div>
                        <div class="col-6 p-0">
                            <img src="assets/img/ILUSTRASI2_1-1.png" alt="" style="width: 100%; max-height: 100%;">
                        </div>
                        <div class="col-6 description-box">
                            <div class="title">
<<<<<<< HEAD
                                <p>Title</p>
                                <hr class="title-line">
                            </div>
                            <div class="deskripsi">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                    voluptate corporis placeat explicabo debitis ex.</p>
=======
                                <p>Grass Block</p>
                                <hr class="title-line">
                            </div>
                            <div class="deskripsi">
                                <p>Perkerasan unik, desain yang memungkinkan media tanam dan rerumputan hadir. Perkerasan dan hijauan hadir bersama.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Overview -->

        <!-- Orientation -->
        <section id="orientation">
            <div class="row">
                <!-- Keunggulan -->
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-6 bg-yellow d-flex flex-column justify-content-center align-items-center">
                            <div class="bg-dark rounded-circle" style="width: 50px; height: 50px;"></div>
                            <div class="title">
<<<<<<< HEAD
                                <h6>Lorem ipsum</h6>
=======
                                <h6>Produk Beragam</h6>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                        <div class="col-6 bg-blue d-flex flex-column justify-content-center align-items-center">
                            <div class="bg-light rounded-circle" style="width: 50px; height: 50px;"></div>
                            <div class="title text-white">
<<<<<<< HEAD
                                <h6>Lorem ipsum</h6>
=======
                                <h6>Kualitas Terjamin</h6>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Keunggulan -->

                <!-- Search Bar -->
                <div class="col-sm-6 search-bar">
                    <div class="bg-img-cari">
                        <img src="assets/img/SEARCHING.png" alt="" style="width: 630px; height: 210px;">
                    </div>
                    <div class="search-input d-flex align-items-center justify-content-center">
                        <input type="text" name="" id="" class="form-control" placeholder="type to search..">
                    </div>
                </div>
                <!-- End Search Bar -->

                <!-- Testimoni 1 -->
                <div class="col-sm-6 col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card-profile" style="max-width: 200px;">
                        <div class="row g-0">
                            <div class="col-sm-3">
                                <img src="assets/img/ILUSTRASI1_1-1.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <p class="card-title">Card title</p>
                                    <p class="card-text">Lorem, ipsum dolor.</p>
                                    <p class="card-text"><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimoni">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, autem.Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit. Distinctio deserunt consequatur adipisci minima expedita
                            voluptatibus aspernatur animi ex pariatur, assumenda quod quo, sit nisi qui!</p>
                    </div>
                </div>
                <!-- End Testimoni 1 -->

                <!-- Ilustrasi 2:1 -->
                <div class="col-sm-6 col-6 p-0">
                    <img src="assets/img/ILUSTRASI3_2-1.png" alt="" style="width: 100%; max-height: 100%;">
                </div>
                <!-- End Ilustrasi -->

                <!-- Testimoni 2 -->
                <div class="col-sm-6 col-6 bg-grey d-flex flex-column justify-content-center align-items-center"
                    style="height: 420px;">
                    <div class="card-profile" style="max-width: 200px;">
                        <div class="row g-0">
                            <div class="col-sm-3">
                                <img src="assets/img/ILUSTRASI1_1-1.png" class="img-fluid" alt="...">
                            </div>
                            <div class="col-sm-9">
                                <div class="card-body">
                                    <p class="card-title">Card title</p>
                                    <p class="card-text">Lorem, ipsum dolor.</p>
                                    <p class="card-text"><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimoni">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, autem.Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit. Distinctio deserunt consequatur adipisci minima expedita
                            voluptatibus aspernatur animi ex pariatur, assumenda quod quo, sit nisi qui!</p>
                    </div>
                    <img src="assets/img/ILUSTRASI4_3-1.png" alt=""
                        style="margin-right: 14.6rem; margin-bottom: -2.6rem; margin-top: 2rem; height: 210px; width: auto;">
                </div>
                <!-- End Testimoni 2 -->

                <!-- Carousel 2 -->
                <div class="col-sm-6">
                    <div class="row">
                        <div id="carouselTwo" class="carousel slide carousel-fade p-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!-- Item one must be 01/05-->
                                    <div class="row">
                                        <div class="col-6 description-box geser-kanan">
                                            <div class="title">
<<<<<<< HEAD
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
=======
                                                <p>Aneka Warna</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Tersedia aneka warna: natural, hijau, kuning, merah. Jelas untuk beraneka fungsi dan tujuan pemasangan.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box">
                                            <div class="title">
<<<<<<< HEAD
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
=======
                                                <p>Paduan Desain</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Sangat cocok untuk desain perkerasan yang mengedepankan warna elemen. Warna tidak akan meluntur.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item two must be 02/05 -->
                                    <div class="row">
                                        <div class="col-6 description-box geser-kanan">
                                            <div class="title">
<<<<<<< HEAD
                                                <p>Title</p>
=======
                                                <p>Tittle</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER2-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item three must be 03/05 -->
                                    <div class="row">
                                        <div class="col-6 description-box geser-kanan">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item four must be 04/06 -->
                                    <div class="row">
                                        <div class="col-6 description-box geser-kanan">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!-- Item five must be 05/05 -->
                                    <div class="row">
                                        <div class="col-6 description-box geser-kanan">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                        <div class="col-6 p-0">
                                            <img src="assets/img/SLIDER1-1.png" alt=""
                                                style="width: 100%; max-height: 100%;">
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-6 description-box">
                                            <div class="title">
                                                <p>Title</p>
                                                <hr class="title-line">
                                            </div>
                                            <div class="deskripsi">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                                    voluptate corporis placeat explicabo debitis ex.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo"
                                data-bs-slide="prev">
                                <span class="text-dark">
                                    <h3>
                                        <i class="bi bi-caret-left-fill"></i>
                                    </h3>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo"
                                data-bs-slide="next">
                                <span class="text-dark">
                                    <h3>
                                        <i class="bi bi-caret-right-fill"></i>
                                    </h3>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Carousel 2 -->
            </div>
        </section>
        <!-- End Orientation -->

        <!-- Keunggulan & Carousel -->
        <section id="keunggulan">
            <div class="row">
                <div class="col-sm-3 p-0">
                    <div class="long-description-box">
                        <div class="title">
<<<<<<< HEAD
                            <p>Title</p>
                            <hr class="title-line">
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quibusdam veniam
                                inventore. Sint, dignissimos porro ipsum officiis accusantium earum, ducimus deleniti ea
                                illo magnam eaque omnis non minus dolorem odio illum. Dolore, nobis id ducimus, cumque
                                magnam et voluptatum quis totam praesentium corporis voluptate facilis. Id atque culpa
                                dignissimos corrupti!</p>
=======
                            <p>Bagian Dari Proyek Anda</p>
                            <hr class="title-line">
                        </div>
                        <div class="deskripsi">
                            <p>Pilih Konkurito sebagai mitra utama proyek Anda! Dengan produk beton berkualitas tinggi, kami bukan hanya menyediakan bahan konstruksi, 
                                    tetapi juga menjadi elemen kunci keberhasilan. Kami hadir untuk mewujudkan visi Anda, membangun proyek dengan kehandalan dan keindahan 
                                    yang tahan lama. Konkurito menawarkan solusi beton terbaik untuk menghadirkan kualitas dan daya tahan yang tak tertandingi.
                                    Percayakan impian Anda kepada kami, karena kami adalah kontributor penting dalam setiap rincian proyek Anda.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-0">
                    <div id="carouselBig" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/ILUSTRASI5_1-1.png" alt="" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/ILUSTRASI2_1-1.png" alt="" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/ILUSTRASI5_1-1.png" alt="" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBig"
                            data-bs-slide="prev">
                            <span class="text-dark">
                                <h3>
                                    <i class="bi bi-caret-left-fill"></i>
                                </h3>
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselBig"
                            data-bs-slide="next">
                            <span class="text-dark">
                                <h3>
                                    <i class="bi bi-caret-right-fill"></i>
                                </h3>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-3 p-0 bg-secondary">
                    <div class="bg-yellow d-flex flex-column justify-content-center align-items-center"
                        style="height: 50%;">
                        <div class="bg-dark rounded-circle" style="width: 50px; height: 50px;"></div>
                        <div class="title">
<<<<<<< HEAD
                            <h6>Lorem ipsum</h6>
=======
                            <h6>Siap Menjadi Mitra Jangka Panjang</h6>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="assets/img/SLIDER3-1.png" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </section>
        <!-- EndKeunggulan & Carousel -->

        <!-- Call to action -->
        <section id="cta">
            <div class="row">
                <div class="col-sm-6 p-0">
                    <img src="assets/img/CTA1-1.png" alt="" style="width: 100%; max-height: 100%;">
                </div>
                <div class="col-sm-6 p-0">
                    <div class="action">
                        <div class="title">
                            <p>Produk Beton</p>
                        </div>
                        <div class="deskripsi">
<<<<<<< HEAD
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, beatae quo
                                similique sapiente error provident eius molestias soluta. Ipsum, earum?</p>
=======
                            <p>Jelajahi lebih banyak tentang produk kami. Lihat seluruh kategori dan tentukan yang produk yang tepat untuk proyek Anda.</p>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                        <a href="{{ route('konkurito.showcase') }}" class="btn">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA -->

        <div class="row latar-carousel">
            <div class="col-sm-6"></div>
            <div class="col-sm-3 bg-light" style="height: 210px;"></div>
        </div>
    </div>
</body>

</html>