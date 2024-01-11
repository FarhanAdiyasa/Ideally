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
    <link rel="stylesheet" href="{{ asset('dedikasi-flora/assets/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/navbar-style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dedikasi-flora/assets/css/details/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset('dedikasi-flora/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->
    
    <!-- Hero & Navigation Bar -->
    <header id="hero-navbar">
        <div class="hero-img d-flex justify-content-center mt-5">
            <img src="{{ asset('dedikasi-flora/assets/img/showcase/06B-SEC01-LATAR.jpg') }}" alt="">
        </div>
        <div class="content z-1 position-absolute" style="width: 100%;">
            <div class="hero">
                <div class="hero-logo d-flex justify-content-center">
                    <img src="{{ asset('dedikasi-flora/assets/img/logo.png') }}" alt="" style="width: 25%;">
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
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Rumput']) }}">Rumput</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Penutup Tanah']) }}">Penutup
                                            Tanah</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Semak']) }}">Semak</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Pohon Kecil']) }}">Pohon
                                            Kecil</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Pohon Sedang']) }}">Pohon
                                            Sedang</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Pohon Besar']) }}">Pohon
                                            Besar</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Tanaman Air']) }}">Tanaman
                                            Air</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['strata' => 'Merambat Menjuntai']) }}">Merambat
                                            Menjuntai</a></li>
                                    <hr>
                                </ul>
                            </li>
                            <li class="nav-item dropdown custom-dropdown">
                                <button class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Warna Daun <i class="bi bi-caret-down-square-fill custom-down"></i>
                                </button>
                                <ul class="dropdown-menu margin-start">
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Merah']) }}">Merah</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Merah Muda']) }}">Merah
                                            Muda</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Jingga']) }}">Jingga</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Kuning']) }}">Kuning</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Hijau']) }}">Hijau</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Biru']) }}">Biru</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Ungu']) }}">Ungu</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Putih']) }}">Putih</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_daun' => 'Hitam']) }}">Hitam</a>
                                    </li>
                                    <hr>
                                </ul>
                            </li>
                            <li class="nav-item dropdown custom-dropdown">
                                <button class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Warna Bunga <i class="bi bi-caret-down-square-fill custom-down"></i>
                                </button>
                                <ul class="dropdown-menu margin-start">
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Merah']) }}">Merah</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Merah Muda']) }}">Merah
                                            Muda</a></li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Jingga']) }}">Jingga</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Kuning']) }}">Kuning</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Hijau']) }}">Hijau</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Biru']) }}">Biru</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Ungu']) }}">Ungu</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Putih']) }}">Putih</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item"
                                            href="{{ route('deflo.kategori', ['warna_bunga' => 'Hitam']) }}">Hitam</a>
                                    </li>
                                    <hr>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header><br>
    <!-- End Hero & Navigation Bar -->

    <!-- Details -->
    <section id="details">
        <div class="container">
            <div class="border p-5">
                <div class="row">
                    <div id="text-details" class="col-sm-4">
                        <a class="page-before" href="{{ route('deflo.showcase') }}"><i
                                class="bi bi-chevron-left"></i></a>
                        <div class="d-flex atribute text-white py-2">
                            <div class="rating"><i class="bi bi-star-fill"></i><span> 4,5</span></div>
                            <div class="seen"><i class="bi bi-eye-fill"></i><span>
                                    {{ $defloDetail->item_terjual }}</span></div>
                        </div>
                        <div class="title py-3">
                            <h1>{{ $defloDetail->nama_latin }}</h1>
                        </div>
                        <table class="table table-borderless table-text-details">
                            <tr>
                                <th class="space-bottom">Nama Lokal</th>
                                <th>{{ $defloDetail->nama_lokal }}</th>
                            </tr>
                            <tr>
                                <th>Tinggi</th>
                                <th>{{ $defloDetail->tinggi }} cm</th>
                            </tr>
                            <tr>
                                <th class="space-bottom">Diameter Tajuk</th>
                                <th>{{ $defloDetail->diameter_tajuk }} cm</th>
                            </tr>
                            <tr>
                                <th>Strata</th>
                                <th>{{ $defloDetail->strata }}</th>
                            </tr>
                            <tr>
                                <th>Warna Daun</th>
                                <th>{{ $defloDetail->warna_daun }}</th>
                            </tr>
                            <tr>
                                <th class="space-bottom">Warna Bunga</th>
                                <th>{{ $defloDetail->warna_bunga }}</th>
                            </tr>
                            <tr>
                                <th>Penyiraman</th>
                                <th>{{ $defloDetail->penyiraman }}</th>
                            </tr>
                            <tr>
                                <th>Penyinaran</th>
                                <th>{{ $defloDetail->penyinaran }}</th>
                            </tr>
                            <tr>
                                <th>Pemupukan</th>
                                <th>{{ $defloDetail->pemupukan }}</th>
                            </tr>
                        </table>
                        <p class="m-0">{{ $defloDetail->deskripsi_singkat }}</p>
                    </div>
                    <div id="img-details" class="col-sm-4 d-flex justify-content-center align-items-center">
                        <div id="carousel-img-details" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="3000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel-img-details" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel-img-details" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel-img-details" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ $defloDetail->gambar_1 }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ $defloDetail->gambar_2 }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ $defloDetail->gambar_3 }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="harga-details" class="col-sm-4">
                        <div class="controls text-end mt-5">
                            @php
                            $prevProduct = \App\Models\Dedikasi_Flora::where('nama_latin', '<', $defloDetail->
                                nama_latin)
                                ->where('stok', '>', 0)
                                ->orderBy('nama_latin', 'desc')
                                ->first();

                                $nextProduct = \App\Models\Dedikasi_Flora::where('nama_latin', '>',
                                $defloDetail->nama_latin)
                                ->where('stok', '>', 0)
                                ->orderBy('nama_latin', 'asc')
                                ->first();
                                @endphp

                                @if($prevProduct)
                                <a href="{{ route('deflo.detail', ['id_nurseri' => $prevProduct->id_nurseri]) }}"
                                    class="btn py-0 text-white px-1">
                                    <span><i class="bi bi-chevron-left"></i></span>
                                </a>
                                @endif

                                @if($nextProduct)
                                <a href="{{ route('deflo.detail', ['id_nurseri' => $nextProduct->id_nurseri]) }}"
                                    class="btn py-0 text-white px-1">
                                    <span><i class="bi bi-chevron-right"></i></span>
                                </a>
                                @endif
                        </div>
                        <p class="fw-bold m-0 my-1 text-abu">Daftar Harga</p>
                        <div class="row">
                            <div class="col-sm-6 p-0 ps-2">
                                <table class="table table-borderless table-harga-details">
                                    <tr>
                                        <th>
                                            <p>Rp</p>
                                        </th>
                                        <th style="text-align: right;">
                                            <p>{{ $defloDetail->harga_b2C_1_unit }}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Rp</p>
                                        </th>
                                        <th style="text-align: right;">
                                            <p>{{ $defloDetail->harga_b2C_11_unit }}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Rp</p>
                                        </th>
                                        <th style="text-align: right;">
                                            <p>{{ $defloDetail->harga_b2C_31_unit }}</p>
                                        </th>
                                    </tr>
                                </table>
                                <div class="add-to-cart py-4" style="margin-top: 60px;">
                                    <a href="#" onclick="addToCart(event)" class="btn py-0">
                                        <div class="d-flex align-items-center text-white">
                                            <p style="font-size: 30px; font-weight: 700; margin: 0;">+</p>
                                            <p style="font-size: 12px; font-weight: 700; margin: 0;">Tambah Ke Keranjang
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3 p-1 py-0">
                                <table class="table table-borderless table-harga-details" style="text-align: center;">
                                    <tr>
                                        <th>
                                            <p>1</p>
                                        </th>
                                        <th>-</th>
                                        <th>
                                            <p>10</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>11</p>
                                        </th>
                                        <th>-</th>
                                        <th>
                                            <p>30</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>31</p>
                                        </th>
                                        <th>-</th>
                                        <th>
                                            <p>+</p>
                                        </th>
                                    </tr>
                                </table>
                                <div class="total-item d-flex align-items-center justify-content-center flex-column"
                                    style="margin-top: 50px;">
                                    <button class="btn py-0 text-white px-3" onclick="increase()">
                                        <span><i class="bi bi-chevron-up"></i></span>
                                    </button>
                                    <div class="my-2 px-2">
                                        <input type="text" class="form-control form-control-lg w-100" id="quantity"
                                            value="1" onchange="calculateTotal()">
                                    </div>
                                    <button class="btn py-0 text-white px-3" onclick="decrease()">
                                        <span><i class="bi bi-chevron-down"></i></span>
                                    </button>
                                    <script>
                                    function addToCart(event) {
                                        event
                                            .preventDefault(); // Prevent the default behavior of the 'a' tag (page redirection)

                                        var quantity = document.getElementById('quantity').value;
                                        var defloId = "{{ $defloDetail->id_nurseri }}";

                                        // Creating the URL with the quantity and deflo id
                                        var url = "{{ route('addcart.deflo', ['id' => ':id', 'qty' => ':qty']) }}"
                                            .replace(':id', defloId)
                                            .replace(':qty', quantity);

                                        // Handling action when the "Tambah Ke Keranjang" link is clicked
                                        window.location.href = url;
                                    }
                                    </script>
                                </div>
                            </div>
                            <div class="col-sm-3 p-0">
                                <table class="table table-borderless table-harga-details" style="text-align: center;">
                                    <tr>
                                        <th>
                                            <p style="font-weight: 500;">Polybag</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="font-weight: 500;">Polybag</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p style="font-weight: 500;">Polybag</p>
                                        </th>
                                    </tr>
                                </table>
                                <div class="add-to-cart py-4" style="margin-top: 60px;">
                                    <div class="d-flex align-items-center justify-content-center"
                                        style="background-color: #F1F1F1F1;">
                                        <p
                                            style="font-size: 12px; font-weight: 500; margin: 0; padding: 15px 0; color: rgb(67, 67, 67);">
                                            Polybag</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 pt-5">
                            <p class="fw-bold m-0 mb-1 text-abu">Total Harga</p>
                            <input type="text" class="form-control form-control-lg fw-bold text-abu text-end"
                                id="summaryPrice" value="{{ $defloDetail->harga_b2C_1_unit }}" readonly>
                            <div class="z-1 position-relative" style="margin-top: -12%;">
                                <h5 class="fw-bold m-0 ms-2 text-abu">Rp</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details -->

    <!-- Produk Terkait
    Produk Random, kalo bisa ambil yg kategori nya sama (terkait) -->
    <section id="produk-terkait" class="mt-5">
        <div class="container">
            <div class="title">
                <h5 class="fw-bold" style="color: #FE7338;">Produk Terkait</h5>
            </div>
            <!-- Carousel Produk -->
            <div id="carousel-produk-terkait" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="row g-3">
                                @foreach ($defloterkait as $defloterkait1)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $defloterkait1->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $defloterkait1->gambar_1 }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $defloterkait1->nama_latin }} - Panjang {{
                                                        $defloterkait1->tinggi }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                                $defloterkait1->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                                $defloterkait1->item_terjual }}</span></div>
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
                                @foreach ($defloterkait2 as $defloterkaits2)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $defloterkaits2->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $defloterkaits2->gambar_1 }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $defloterkaits2->nama_latin }} - Panjang {{
                                                        $defloterkaits2->tinggi }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                                $defloterkaits2->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                                $defloterkaits2->item_terjual }}</span></div>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-produk-terkait"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-produk-terkait"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Produk Terkait -->

    <!-- Rekomendasi Produk
    Produck dengan rating tinggi -->
    <section id="rekomendasi" class="mt-5">
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
                                @foreach ($deflorekomendasi as $deflorekomendasis)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $deflorekomendasis->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $deflorekomendasis->gambar_1 }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $deflorekomendasis->nama_latin }} - Panjang
                                                        {{ $deflorekomendasis->tinggi }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                                $deflorekomendasis->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                                $deflorekomendasis->item_terjual }}</span></div>
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
                                @foreach ($deflorekomendasi2 as $deflorekomendasis2)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $deflorekomendasis2->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $deflorekomendasis2->gambar_1 }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $deflorekomendasis2->nama_latin }} - Panjang
                                                        {{ $deflorekomendasis2->tinggi }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>{{
                                                                $deflorekomendasis2->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>{{
                                                                $deflorekomendasis2->item_terjual }}</span></div>
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
        </div>
    </section>
    <!-- End Rekomendasi Produk -->

    <!-- Produk Banyak Dicari -->
    <section id="produk-banyak-dicari" class="mt-5">
        <div class="container">
            <div class="title">
                <h5 class="fw-bold" style="color: #FE7338;">Produk Banyak Dicari</h5>
            </div>
            <!-- Carousel Produk -->
            <div id="carousel-banyak-dicari" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="row g-3">
                                @foreach ($deflodicari as $deflodicaris)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $deflodicaris->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $deflodicaris->gambar_1 }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $deflodicaris->nama_latin }} - Panjang
                                                        {{ $deflodicaris->tinggi }} cm</p>
                                                    <p class="text-harga text-white">Harga Tersembunyi</p>
                                                    <hr>
                                                    <div class="d-flex card-atribute text-white">
                                                        <div class="rating"><i class="bi bi-star-fill"></i><span>
                                                                {{ $deflodicaris->rating }}</span></div>
                                                        <div class="seen"><i class="bi bi-eye-fill"></i><span>
                                                                {{ $deflodicaris->item_terjual }}</span></div>
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
                                @foreach ($deflodicari2 as $deflo2)
                                <div class="col">
                                    <div class="card-product">
                                        <a href="{{ route('deflo.detail', ['id_nurseri' => $deflo2->id_nurseri]) }}"
                                            class="card-link">
                                            <div class="card border-0">
                                                <img src="{{ $deflo2->gambar_1 }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $deflo2->nama_latin }} - Panjang {{
                                                        $deflo2->tinggi }} cm</p>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-banyak-dicari"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel-banyak-dicari"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Rekomendasi Produk -->

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
            price = {
                {
                    $defloDetail - > harga_b2C_1_unit
                }
            };
        } else if (quantity >= 11 && quantity <= 30) {
            price = {
                {
                    $defloDetail - > harga_b2C_11_unit
                }
            };
        } else if (quantity > 30) {
            price = {
                {
                    $defloDetail - > harga_b2C_31_unit
                }
            };
        }

        const totalPrice = price * quantity;
        summaryPriceInput.value = numeral(totalPrice).format('0,0');;
    }
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>