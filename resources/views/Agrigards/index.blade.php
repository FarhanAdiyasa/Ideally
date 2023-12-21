<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Agrigard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('agrigard/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('agrigard/assets/css/index/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('agrigard/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Header & search -->
    <section id="header">
        <div class="container">
            <div class="inner-container top-start bg-light">
                <div class="row">
                    <div class="col-sm-5 branding">
                        <div class="img-logo">
                            <img src="{{ asset ('agrigard/assets/img/LOGO.png') }}" alt=""
                                style="width: 100%; margin-top: 25px;">
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sed fugiat nulla earum
                                asperiores! Quos voluptatum corporis eaque!</p>
                        </div>
                        <div class="d-flex search">
                            <input type="text" name="" id="search" class="form-control search-input top-start"
                                placeholder="Pencarian">
                            <a href="" class="btn top-start text-white bg-orange">Cari</a>
                        </div>
                    </div>
                    <div class="col-sm-7 d-flex justify-content-center">
                        <div class="img-container">
                            <img src="{{ asset ('agrigard/assets/img/LOGO_ICON.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header & search -->

    <!-- Kategori -->
    <section id="kategori">
        <div class="container mt-2">
            <div class="inner-container top-end bg-orange">
                <div class="row">
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Pot Plastik</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Pot Plastik</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Pot Terracota</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Bibit Tanaman</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Media Tanam</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Wadah Tanam</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Obat dan Nutrisi</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Alat Kerja</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Lain - lain</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kategori -->

    <!-- Produk Pilihan -->
    <section id="produk-pilihan">
        <div class="container mt-4">
            <div class="inner-container top-start bg-light">
                <div class="title text-end">
                    <h5>Produk Pilihan</h5>
                </div>
                <div class="row g-3">
                    @foreach ($agrigards as $agrigardPilihan)
                    <div class="col-sm-3">
                        <div class="card-product">
                            <a href="{{ route('agrigard.detail', ['id_agrigard' => $agrigardPilihan->id_agrigard]) }}"
                                class="card-link">
                                <div class="img-container">
                                    <img src="{{ $agrigardPilihan->gambar_1 }}"
                                        alt="{{ $agrigardPilihan->nama_produk }}">
                                </div>
                                <div class="card-body" style="width: inherit;">
                                    <div class="row g-0">
                                        <div class="col-sm-7">
                                            <p class="nama-produk">{{ substr($agrigardPilihan->nama_produk, 0, 15) }} 10
                                                - {{ $agrigardPilihan->satuan }}</p>
                                            <p class="kategori">{{ $agrigardPilihan->kategori }}</p>
                                            <div class="d-flex justify-content-between mt-1">
                                                <a class="btn bg-grey text-center">-</a>
                                                <p class="bg-grey text-center">12</p>
                                                <a class="btn bg-grey text-center">+</a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                            <p class="harga">3,427,000</p>
                                            <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                            <a class="btn cart bg-green text-center text-white"><i
                                                    class="bi bi-cart-fill"></i></a>
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
    </section>
    <!-- End Produk Pilihan -->

    <!-- Produk Baru Ditambahkan -->
    <section id="produk-baru">
        <div class="container mt-4">
            <div class="inner-container top-end bg-light">
                <div class="title text-start">
                    <h5>Produk Baru Ditambahkan</h5>
                </div>
                <div class="row g-3">
                    @foreach ($agrigardbaru as $agrigardBaru)
                    <div class="col-sm-3">
                        <div class="card-product">
                            <a href="{{ route('agrigard.detail', ['id_agrigard' => $agrigardBaru->id_agrigard]) }}"
                                class="card-link">
                                <div class="img-container">
                                    <img src="{{ $agrigardBaru->gambar_1 }}"
                                        alt="{{ $agrigardBaru->nama_produk }}">
                                </div>
                                <div class="card-body" style="width: inherit;">
                                    <div class="row g-0">
                                        <div class="col-sm-7">
                                            <p class="nama-produk">{{ substr($agrigardBaru->nama_produk, 0, 15) }} 10
                                                - {{ $agrigardBaru->satuan }}</p>
                                            <p class="kategori">{{ $agrigardBaru->kategori }}</p>
                                            <div class="d-flex justify-content-between mt-1">
                                                <a class="btn bg-grey text-center">-</a>
                                                <p class="bg-grey text-center">12</p>
                                                <a class="btn bg-grey text-center">+</a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                            <p class="harga">3,427,000</p>
                                            <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                            <a class="btn cart bg-green text-center text-white"><i
                                                    class="bi bi-cart-fill"></i></a>
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
    </section>
    <!-- End Produk Baru Ditambahkan -->

    <!-- Testimoni -->
    <section id="testimoni">
        <div class="container mt-4">
            <div class="inner-container top-start bg-light">
                <div class="row g-0">
                    <div class="col-sm-6">
                        <div class="img-container">
                            <img src="{{ asset ('agrigard/assets/img/LOGO_ICON.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="content">
                            <div class="title text-end">
                                <h5>Testimoni Pilihan</h5>
                            </div>
                            <div class="testimoni">
                                <div class="row g-0">
                                    <div class="col-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90%" height="100%"
                                            viewBox="0 0 127 177" fill="none">
                                            <path
                                                d="M109.4 45.9564C132.867 69.4526 132.867 107.547 109.4 131.044L63.5 177L17.6003 131.044C-5.86678 107.547 -5.86678 69.4526 17.6003 45.9564L63.5 0L109.4 45.9564Z"
                                                fill="#FCCE5B" />
                                        </svg>
                                    </div>
                                    <div class="col-9 py-2 ps-3">
                                        <div class="deskripsi">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam excepturi
                                                perspiciatis vel officiis incidunt, doloremque sit nobis dolore optio,
                                                magni voluptates error nostrum atque tenetur.</p>
                                        </div>
                                        <div class="sender">
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <div class="additional">
                                            <p>consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimoni mt-2">
                                <div class="row g-0">
                                    <div class="col-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90%" height="100%"
                                            viewBox="0 0 127 177" fill="none">
                                            <path
                                                d="M109.4 45.9564C132.867 69.4526 132.867 107.547 109.4 131.044L63.5 177L17.6003 131.044C-5.86678 107.547 -5.86678 69.4526 17.6003 45.9564L63.5 0L109.4 45.9564Z"
                                                fill="#ED7845" />
                                        </svg>
                                    </div>
                                    <div class="col-9 py-2 ps-3">
                                        <div class="deskripsi">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam excepturi
                                                perspiciatis vel officiis incidunt, doloremque sit nobis dolore optio,
                                                magni voluptates error nostrum atque tenetur.</p>
                                        </div>
                                        <div class="sender">
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                        <div class="additional">
                                            <p>consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimoni -->

    <!-- Produk Banyak Dicari -->
    <section id="produk-dicari">
        <div class="container mt-4">
            <div class="inner-container top-end bg-light">
                <div class="title text-start">
                    <h5>Paling Banyak Dicari</h5>
                </div>
                <div class="row g-3">
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Produk Banyak Dicari -->

    <!-- Produk Pilihan -->
    <section id="produk-pilihan">
        <div class="container mt-4">
            <div class="inner-container top-start bg-light">
                <div class="title text-end">
                    <h5>Produk Pilihan</h5>
                </div>
                <div class="row g-3">
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-product">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh.jpg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <div class="row g-0">
                                    <div class="col-sm-7">
                                        <p class="nama-produk">Polybag Hitam 10 - Lusin</p>
                                        <p class="kategori">Kategori</p>
                                        <div class="d-flex justify-content-between mt-1">
                                            <a class="btn bg-grey text-center">-</a>
                                            <p class="bg-grey text-center">12</p>
                                            <a class="btn bg-grey text-center">+</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                        <p class="harga">3,427,000</p>
                                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                                        <a class="btn cart bg-green text-center text-white"><i
                                                class="bi bi-cart-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Produk Pilihan -->

    <!-- Artikel Terkait -->
    <section id="artikel">
        <div class="container mt-4">
            <div class="inner-container top-end bg-light">
                <div class="title text-start">
                    <h5>Artikel Terkait</h5>
                </div>
                <div class="row g-3">
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-artikel">
                            <div class="img-container">
                                <img src="{{ asset ('agrigard/assets/img/contoh2.jpeg') }}" alt="">
                            </div>
                            <div class="card-body" style="width: inherit;">
                                <p class="judul">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                <p class="tanggal">22 November 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Artikel Terkait -->

    <!-- Call to action -->
    <section id="cta">
        <div class="container mt-4">
            <div class="inner-container top-start bg-orange">
                <div class="row g-5">
                    <div class="col-sm-5">
                        <div class="img-container img-top-start">
                            <img src="{{ asset ('agrigard/assets/img/contoh3.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 branding">
                        <div class="text-white">
                            <div class="title">
                                <p>Jelajahi koleksi produk kami! Temukan solusi dari permasalahan kebun Anda di Agrigard!</p>
                            </div>
                            <div class="deskripsi">
                                <p>Telusuri keajaiban dan kualitas produk di Agrigard. Setiap produk mencerminkan solusi dan fungsi luar biasa. Temukan lebih banyak di koleksi kami sekarang!</p>
                            </div>
                        </div>
                        <div class="action">
                            <a href="{{ route('agrigard.showcase') }}" class="btn top-end">Konsultasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to action -->

    <script>
        $(document).ready(function () {
            // Loop melalui setiap elemen dengan kelas "card-product"
            $(".card-product").each(function (index) {
                // Pilih elemen img-container di dalam card-product
                var imgContainer = $(this).find(".img-container");

                // Tambahkan kelas "top-start" atau "top-end" berdasarkan indeks
                if (index % 2 === 0) {
                    imgContainer.addClass("img-top-end");
                } else {
                    imgContainer.addClass("img-top-start");
                }
            });
        });

        $(document).ready(function () {
            // Loop melalui setiap elemen dengan kelas "card-product"
            $(".card-artikel").each(function (index) {
                // Pilih elemen img-container di dalam card-product
                var imgContainer = $(this).find(".img-container");

                // Tambahkan kelas "top-start" atau "top-end" berdasarkan indeks
                if (index % 2 === 0) {
                    imgContainer.addClass("img-top-end");
                } else {
                    imgContainer.addClass("img-top-start");
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>