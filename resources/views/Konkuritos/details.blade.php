<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konkurito</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('konkurito/assets/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
    <link rel="stylesheet" href="{{ asset ('konkurito/assets/css/details/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('konkurito/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

    <div class="container">
        <!-- Logo -->
        <section id="logo">
            <div class="row">
                <div class="col-sm-3 p-0 bg-light">
                    <div class="align-corner">
                        <div class="img-logo">
                            <img src="{{ asset ('konkurito/assets/img/LOGO.png') }}" alt="" style="width: 55%;">
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo -->

        <!-- Details -->
        <section id="details">
            <div class="row">
                <div class="col-sm-9 p-0 bg-secondary">
                    <div class="img-details">
                        <img src="{{ $konkuritoDetail->gambar_1 }}" alt="">
                    </div>
                </div>
                <div class="col-sm-3 bg-light">
                    <div class="row">
                        <div class="col-12">
                            <div class="description-box">
                                <div class="title">
                                    <p>{{ $konkuritoDetail->nama_produk }}</p>
                                    <hr class="title-line">
                                </div>
                                <div class="deskripsi">
                                    <p>{{ $konkuritoDetail->deskripsi_singkat }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="description-box">
                                <div class="title">
                                    <p>Dimensi</p>
                                    <hr class="title-line">
                                </div>
                                <table class="table table-borderless table-details mt-3">
                                    <tr>
                                        <th>Satuan</th>
                                        <th class="bold">{{ $konkuritoDetail->satuan }}</th>
                                    </tr>
                                    <tr>
                                        <th>Lebar (cm)</th>
                                        <th class="bold">10.5</th>
                                    </tr>
                                    <tr>
                                        <th>Panjang (cm)</th>
                                        <th class="bold">12</th>
                                    </tr>
                                    <tr>
                                        <th>Diameter (cm)</th>
                                        <th class="bold">14</th>
                                    </tr>
                                    <tr>
                                        <th>Tinggi (cm)</th>
                                        <th class="bold">23</th>
                                    </tr>
                                    <tr>
                                        <th>Tebal (cm)</th>
                                        <th class="bold">10</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-secondary">
                    <div class="row">
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ $konkuritoDetail->gambar_1 }}" alt="">
                            </div>
                        </div>
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ $konkuritoDetail->gambar_2 }}" alt="">
                            </div>
                        </div>
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ $konkuritoDetail->gambar_3 }}" alt="">
                            </div>
                        </div>
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ $konkuritoDetail->gambar_1 }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-light">
                    <div class="row">
                        <div class="col-12">
                            <div class="description-box">
                                <div class="title">
                                    <p>Daftar Harga</p>
                                    <hr class="title-line">
                                </div>
                                <table class="table table-borderless table-harga mt-4">
                                    <tr>
                                        <th>1-10 satuan</th>
                                        <th class="bold">{{ $konkuritoDetail->harga_b2C_1_unit }}</th>
                                    </tr>
                                    <tr>
                                        <th>11-30 satuan</th>
                                        <th class="bold">{{ $konkuritoDetail->harga_b2C_11_unit }}</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-blue">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center px-4">
                            <div class="text-white text-start">
                                <p>pembelian</p>
                            </div>
                            <div class="total-item d-flex justify-content-center">
                                <button class="btn" onclick="decrease()" id="kurang">
                                    <span><i class="bi bi-caret-left-fill"></i></span>
                                </button>
                                <div class="input-qty">
                                    <input type="text" class="form-control text-center" id="quantity" value="1"
                                        onchange="calculateTotal()">
                                </div>
                                <button class="btn" onclick="increase()">
                                    <span><i class="bi bi-caret-right-fill"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-yellow">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center px-4">
                            <div class="text-start">
                                <p>total harga</p>
                            </div>
                            <div class="total-harga">
                                <input type="text" class="form-control fw-bold text-center text-white bg-dark"
                                    id="summaryPrice" value="{{ $konkuritoDetail->harga_b2C_1_unit }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details -->

        <!-- Produk Terkait -->
        <section id="produk-terkait">
            <div class="row mt-2">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-12 bg-light"></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-12 bg-yellow px-4 d-flex align-items-center">
                            <div class="text-dark section-title">
                                <p>Produk Terkait</p>
                                <hr class="title-line">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-0">
                    <div class="bg-img">
                        <img src="{{ asset ('konkurito/assets/img/ILUSTRASI4_3-1.png') }}" alt=""
                            style="width: 630px; height: 210px;">
                    </div>
                </div>
            </div>
            <!-- Carousel Produk 1 -->
            <div id="carouselOne" class="carousel slide carousel-fade p-0 mt-2">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="row">
                            @foreach($konkuritoterkait as $terkait)
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                <a href="{{ route('konkurito.detail', ['id_konkurito' => $terkait->id_konkurito]) }}"
                            class="card-product-link">
                                    <div class="row g-0">
                                    <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ $terkait->gambar_1 }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>{{ $terkait->nama_produk }}</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>{{ substr($terkait->deskripsi_singkat, 0, 20) }}</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp {{ number_format($terkait->harga_b2C_1_unit, 0, ',', '.') }}</p>
                                                </div>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne" data-bs-slide="prev">
                    <span class="text-dark">
                        <h3>
                            <i class="bi bi-caret-left-fill"></i>
                        </h3>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselOne" data-bs-slide="next">
                    <span class="text-dark">
                        <h3>
                            <i class="bi bi-caret-right-fill"></i>
                        </h3>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End Carousel 1 -->
            <div class="row">
                <div class="col-sm-6 p-0 bg-secondary">
                    <img src="{{ asset ('konkurito/assets/img/ILUSTRASI4_3-1.png') }}" alt=""
                        style="width: 100%; min-height: 210px; object-fit: cover; object-position: center;">
                </div>
                <div class="col-sm-3 bg-yellow"></div>
                <div class="col-sm-3 bg-blue">
                    <div class="description-box text-white">
                        <div class="title">
                            <p>Lorem, ipsum dolor.</p>
                            <hr class="title-line">
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                voluptate corporis placeat explicabo debitis ex.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Produk 2 -->
            <div id="carouselTwo" class="carousel slide carousel-fade p-0 mt-2">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo" data-bs-slide="prev">
                    <span class="text-dark">
                        <h3>
                            <i class="bi bi-caret-left-fill"></i>
                        </h3>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo" data-bs-slide="next">
                    <span class="text-dark">
                        <h3>
                            <i class="bi bi-caret-right-fill"></i>
                        </h3>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End Carousel 2 -->
            <div class="row">
                <div class="col-sm-3 bg-blue">
                    <div class="description-box text-white">
                        <div class="title">
                            <p>Lorem, ipsum dolor.</p>
                            <hr class="title-line">
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
                                voluptate corporis placeat explicabo debitis ex.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-0 bg-secondary">
                    <img src="{{ asset ('konkurito/assets/img/ILUSTRASI4_3-1.png') }}" alt=""
                        style="width: 100%; min-height: 210px; object-fit: cover; object-position: center;">
                </div>
                <div class="col-sm-3 bg-yellow"></div>
            </div>
            <!-- Carousel Produk 3 -->
            <div id="carouselThree" class="carousel slide carousel-fade p-0 mt-2">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p-0">
                                <div class="card-product">
                                    <div class="row g-0">
                                        <div class="col-sm-6">
                                            <div class="img-container">
                                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ps-4">
                                            <div class="card-body">
                                                <div class="title">
                                                    <p>Box Culrvet</p>
                                                </div>
                                                <div class="deskripsi">
                                                    <p>Deskripsi singkat dimensi</p>
                                                </div>
                                                <div class="harga">
                                                    <p>Rp 470,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselThree"
                    data-bs-slide="prev">
                    <span class="text-dark">
                        <h3>
                            <i class="bi bi-caret-left-fill"></i>
                        </h3>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselThree"
                    data-bs-slide="next">
                    <span class="text-dark">
                        <h3>
                            <i class="bi bi-caret-right-fill"></i>
                        </h3>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End Carousel 3 -->
        </section>

        <!-- Call to action -->
        <section id="cta">
            <div class="row">
                <div class="col-sm-6 p-0">
                    <img src="{{ asset ('konkurito/assets/img/CTA1-1.png') }}" alt=""
                        style="width: 100%; max-height: 100%;">
                </div>
                <div class="col-sm-6 p-0">
                    <div class="action">
                        <div class="title">
                            <p>Produk Beton</p>
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, beatae quo
                                similique sapiente error provident eius molestias soluta. Ipsum, earum?</p>
                        </div>
                        <a href="{{ route('konkurito.showcase') }}" class="btn">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End CTA -->
    </div>

    <script>
        const summaryPriceInput = document.getElementById('summaryPrice');
        let summaryPriceValue = summaryPriceInput.value;
        summaryPriceInput.value = numeral(summaryPriceValue).format('0,0');

        let count = parseInt(document.getElementById('quantity').value);
        const decreaseBtn = document.getElementById('kurang');

        function increase() {
            count++;
            document.getElementById('quantity').value = count;
            calculateTotal();
            checkCount();
        }

        function decrease() {
            if (count > 1) {
                count--;
                document.getElementById('quantity').value = count;
            }
            calculateTotal();
            checkCount();
        }

        function checkCount() {
            if (count === 1) {
                decreaseBtn.disabled = true;
            } else {
                decreaseBtn.disabled = false;
            }
        }

        function calculateTotal() {
            const quantityInput = document.getElementById('quantity');
            const summaryPriceInput = document.getElementById('summaryPrice');
            const quantity = parseInt(quantityInput.value);
            let price = 0;

            if (quantity >= 1 && quantity <= 10) {
                price = {{ $konkuritoDetail->harga_b2C_1_unit }};
            } else if (quantity >= 11 && quantity <= 30) {
                price = {{ $konkuritoDetail->harga_b2C_11_unit }};
            } 

            const totalPrice = price * quantity;
            summaryPriceInput.value = numeral(totalPrice).format('0,0');;
        }
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>