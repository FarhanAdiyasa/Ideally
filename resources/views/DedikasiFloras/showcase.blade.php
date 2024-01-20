<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dedikasi Flora</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('dedikasi-flora/assets/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/navbar-style.css') }}">
    <link rel="stylesheet" href="{{ asset ('dedikasi-flora/assets/css/showcase/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('dedikasi-flora/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

    <!-- Hero & Navigation Bar -->
    <header id="hero-navbar">
        <div class="hero-img d-flex justify-content-center mt-5">
            <img src="{{ asset ('dedikasi-flora/assets/img/showcase/06B-SEC01-LATAR.jpg') }}" alt="">
        </div>
        <div class="content z-1 position-absolute" style="width: 100%;">
            <div class="hero">
                <div class="hero-logo d-flex justify-content-center">
                    <img src="{{ asset ('dedikasi-flora/assets/img/logo.png') }}" alt="" style="width: 25%;">
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
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('deflo.showcase') }}">Beranda</a>
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

    <!-- Showcase Start -->
    <section id="showcase">
        <div class="container">
            <div class="row row-utama">
                <div class="col-sm-3 p-0 padding-end">
                    <div class="p-3">
                        <h5 class="fw-bold mb-4" style="color: #FE7338;">Kategori</h5>
                        <h6 class="fw-bold">Strata</h6>
                        <table class="table table-borderless">
                            <tr>
                                <th class="left-align"><a class="left-align"
                                        href="{{ route('deflo.kategori', ['strata' => 'Rumput']) }}">Rumput</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Rumput') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['strata' => 'Penutup Tanah']) }}">Penutup
                                        Tanah</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Penutup Tanah') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['strata' => 'Semak']) }}">Semak</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Semak') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['strata' => 'Pohon Kecil']) }}">Pohon
                                        Kecil</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Pohon Kecil') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['strata' => 'Pohon Sedang']) }}">Pohon
                                        Sedang</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Pohon Sedang') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['strata' => 'Pohon Besar']) }}">Pohon
                                        Besar</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Pohon Besar') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['strata' => 'Tanaman Air']) }}">Tanaman
                                        Air</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Tanaman Air') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align">
                                    <a href="{{ route('deflo.kategori', ['strata' => 'Merambat Menjuntai']) }}">Merambat
                                        Menjuntai</a>
                                </th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->strata, 'Merambat Menjuntai') === 0; })->count()
                                        }}</span></th>
                            </tr>
                        </table>
                        <h6 class="fw-bold">Warna Daun</h6>
                        <table class="table table-borderless">
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Merah']) }}">Merah</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Merah') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Merah Muda']) }}">Merah
                                        Muda</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Merah Muda') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Jingga']) }}">Jingga</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Jingga') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Kuning']) }}">Kuning</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Kuning') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Hijau']) }}">Hijau</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Hijau') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Biru']) }}">Biru</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Biru') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Ungu']) }}">Ungu</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Ungu') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Putih']) }}">Putih</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Putih') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_daun' => 'Hitam']) }}">Hitam</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_daun, 'Hitam') === 0; })->count() }}</span></th>
                            </tr>
                        </table>
                        <h6 class="fw-bold">Warna Bunga</h6>
                        <table class="table table-borderless">
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Merah']) }}">Merah</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Merah') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Merah Muda']) }}">Merah
                                        Muda</a></th>
                                <th class="right-align">
                                    <span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Merah Muda') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Jingga']) }}">Jingga</a>
                                </th>
                                <th class="right-align"><span>{{ $defloShowcase->where('warna_bunga', 'Jingga')->count()
                                        }}</span></th>
                            </tr>

                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Kuning']) }}">Kuning</a>
                                </th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Kuning') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Hijau']) }}">Hijau</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Hijau') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Biru']) }}">Biru</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Biru') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Ungu']) }}">Ungu</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Ungu') === 0; })->count() }}</span></th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Putih']) }}">Putih</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Putih') === 0; })->count() }}</span>
                                </th>
                            </tr>
                            <tr>
                                <th class="left-align"><a
                                        href="{{ route('deflo.kategori', ['warna_bunga' => 'Hitam']) }}">Hitam</a></th>
                                <th class="right-align"><span>{{ $defloShowcase->filter(function ($item) {
                                        return strcasecmp($item->warna_bunga, 'Hitam') === 0; })->count() }}</span>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <img src="{{ asset ('dedikasi-flora/assets/img/showcase/06B-SEC03-ILUSTRASI.jpg') }}" alt=""
                        style="width: 100%;">
                </div>
                <div class="col-sm-9">
                    <div class="row pb-2">
                        <!-- Search Bar -->
                        <div class="col-sm-9 col-12">
                            <div class="input-group">
                                <input class="form-control border-end-0 border" type="search" placeholder="search"
                                    id="example-search-input">
                                <span class="input-group-append">
                                    <button class="btn btn-outline-secondary bg-white border-start-0 border ms-n5"
                                        type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- Sorting -->
                        <div class="col-sm-3 col-6">
                            @php
                            $hargaTinggi = \App\Models\Agrigard::where('stok', '>', 0)
                            ->orderBy('harga_b2C_1_unit', 'asc')
                            ->first();

                            $hargaRendah = \App\Models\Agrigard::where('stok', '>', 0)
                            ->orderBy('harga_b2C_1_unit', 'desc')
                            ->first();
                            @endphp
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="1">Harga Terendah</option>
                                <option value="2">Harga Tertinggi</option>
                            </select>
                        </div>
                    </div>
                    <div class="row p-1">
                        @foreach($defloShowcase as $dedikasiFlora)
                        <div class="col-sm-3 col-6 p-2">
                            <div class="card-product">
                                <a href="{{ route('deflo.detail', ['id_nurseri' => $dedikasiFlora->id_nurseri]) }}"
                                    class="card-link">
                                    <div class="card border-0">
                                        <img src="{{ $dedikasiFlora->gambar_1 }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text">{{ $dedikasiFlora->nama_latin }} - Panjang {{
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


                    {{ $defloShowcase->links('partials.deflo-pagination') }}
                </div>
            </div>
        </div>
    </section>
    <!-- End Showcase -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function () {
            // Simpan produk awal untuk digunakan kembali saat input dikosongkan
            var initialProducts = $('.row.p-1').children('.col-sm-3').get();
    
            $('#example-search-input').on('input', function () {
                var searchText = $(this).val().toLowerCase().trim();
                var productsContainer = $('.row.p-1');
                var products = initialProducts.slice(); // Gunakan salinan produk awal
    
                products.sort(function (a, b) {
                    var textA = $(a).find('.card-text').text().toLowerCase();
                    var textB = $(b).find('.card-text').text().toLowerCase();
                    
                    // Jika pencarian kosong, atur ulang urutan produk berdasarkan posisi aslinya
                    if (searchText === '') {
                        return initialProducts.indexOf(a) - initialProducts.indexOf(b);
                    } else {
                        return textA.localeCompare(textB);
                    }
                });
    
                productsContainer.empty();
    
                if (searchText === '') {
                    // Tampilkan kembali semua produk jika input pencarian kosong
                    products.forEach(function (product) {
                        productsContainer.append(product);
                    });
                } else {
                    products.forEach(function (product) {
                        var cardText = $(product).find('.card-text').text().toLowerCase();
                        if (cardText.includes(searchText)) {
                            productsContainer.append(product);
                        }
                    });
                }
            });
        });
    </script>



</body>

</html>