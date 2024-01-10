<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details - Shineage</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('shineage/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('shineage/assets/css/details/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('shineage/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Logo -->
    <section id="logo">
        <div class="container">
            <div class="logo-container bg-yellow">
                <div class="row g-0">
                    <div class="col-sm-4 p-4 mt-5">
                        <div class="img-logo d-flex justify-content-center">
                            <img src="{{ asset ('shineage/assets/img/01-SEC01-LOGO 1.png') }}" alt="" class="w-50">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="img-logo">
                            <img src="{{ asset ('shineage/assets/img/10B-SEC01-LATAR 1.png') }}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo -->

    <!-- Details -->
    <section id="details">
        <div class="container">
            <div class="row g-3">
                <div class="col-sm-4 text-details" style="width: 35%;">
                    <div class="bg-red text-white py-3 px-4" style="height: 100%;">
                        <p class="kategori">{{ $shineages->seri }}</p>
                        <p class="nama-produk">{{ $shineages->nama_produk }}</p>
                        <div class="ps-2" style="height: 80%;">
                            <div
                                class="border-start border-light border-5 ps-3 d-flex flex-column justify-content-between align-content-between h-100">
                                <table class="table-details text-white">
                                    <tr>
                                        <td class="fw-bold">Dimensi (Cm)</td>
                                        <td>{{ $shineages->dimensi }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Warna</td>
                                        <td>{{ $shineages->warna }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Garansi</td>
                                        <td>{{ $shineages->garansi }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Material Lain</td>
                                        <td>{{ $shineages->material_pendukung }}</td>
                                    </tr>
                                </table>
                                <div class="deskripsi border-top border-bottom border-light border-2">
                                    <p>{{ $shineages->deskripsi_singkat }}</p>
                                </div>
                                <div class="deskripsi border-bottom border-light border-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos a
                                        corporis quasi? Quo, eaque?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8" style="width: 65%;">
                    <div class="bg-tosca">
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
                                    <div class="img-details">
                                        <img src="{{ $shineages->gambar_1 }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-details">
                                        <img src="{{ $shineages->gambar_2 }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-details">
                                        <img src="{{ $shineages->gambar_3 }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="harga-details d-flex justify-content-center align-items-center">
                            <div class="harga text-white p-4">
                                <p class="fw-bold mb-1">Harga Produk</p>
                                <div class="border-start border-light border-3 ps-3 ms-3">
                                    <table class="table-harga">
                                        <tr>
                                            <td>Rp {{ $shineages->harga_b2C_1_unit }}</td>
                                            <td class="text-end">1-10 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>Rp {{ $shineages->harga_b2C_11_unit }}</td>
                                            <td class="text-end">11+ Unit</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="total-item p-4">
                                <div class="qty d-flex align-items-center bg-light mb-2">
                                    <a href="" class="m-1 p-1 bg-tosca text-white"><span><i
                                                class="bi bi-dash"></i></span></a>
                                    <input class="form-control" type="text" placeholder="" aria-label="quantity"
                                        readonly value="1">
                                    <a href=""><span class="m-1 px-1 bg-tosca text-white"><i
                                                class="bi bi-plus"></i></span></a>
                                </div>
                                <input class="form-control mb-2 total-price" type="text" placeholder=""
                                    aria-label="total price" readonly value="Rp {{ $shineages->harga_b2C_11_unit }}">
                                <a href="" class="btn btn-light">Tambah Ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details -->

    <!-- Additional Content -->
    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-sm-4 aside" style="height: fit-content;">
                <!-- Aside -->
                <section id="aside" class="border border-3 border-secondary p-4">
                    <!-- Carousel 1 -->
                    <div id="carousel-image" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER1A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER1A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER1A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 2 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-1" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER2A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER2A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER2A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 3 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-1" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER3A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER3A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER3A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 4 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-1" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-image" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER4A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER4A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10C-SEC03-SLIDER4A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Aside -->
            </div>
            <div class="col-sm-8 content">
                <!-- Product -->
                <section id="product">
                    @php
                    $totalItems = count($shineageterkait);
                    $itemsPerSection = ceil($totalItems / 3);
                    @endphp
                    <div class="d-flex h-100">
                        <div class="col-sm-4" style="padding-right: 10px;">
                            <!-- Red Section -->
                            <section id="red">
                                <div class="bg-red p-3">
                                    <div class="text-white">
                                        <p class="fw-bold mb-2" style="font-size: 13px;">Produk-produk Terkait</p>
                                    </div>
                                    <div class="ps-2">
                                        <div class="border-start border-light border-4" style="height: 30px;"></div>
                                    </div>
                                </div>
                                @foreach($shineageterkait->take($itemsPerSection) as $merah)
                                <div class="card-product mt-3">
                                <a href="{{ route('shineage.detail', ['id_shineage' => $merah->id_shineage]) }}"
                                        class="card-link">
                                        <div class="img-container">
                                            <img src="{{ $merah->gambar_1 }}" alt="{{ $merah->nama_produk }}">
                                        </div>
                                        <div class="card-body bg-red text-white px-3 py-2">
                                            <div class="kategori">
                                                <p>{{ $merah->kategori }}</p>
                                            </div>
                                            <div class="nama-produk">
                                                <p>{{ $merah->nama_produk }}</p>
                                            </div>
                                            <div class="harga">
                                                <p>Rp {{ $merah->harga_b2C_1_unit }}</p>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                                @endforeach
                                <div class="bg-red mt-3 p-2" style="min-height: 15%;">
                                    <div class="text-white">
                                        <div class="ps-3 mb-1">
                                            <div class="border-start border-4 border-light" style="height: 50px;"></div>
                                        </div>
                                    </div>
                                    <a href="" class="btn btn-showcase mt-1">Lihat Produk Lainnya</a>
                                </div>
                            </section>
                            <!-- End Red Section -->
                        </div>
                        <div class="col-sm-4" style="padding: 0 5px;">
                            <!-- Tosca Section -->
                            <section id="tosca">
                                <div class="bg-tosca p-3">
                                    <div class="text-white">
                                        <p class="fw-bold mb-2" style="font-size: 13px;">Produk-produk Populer</p>
                                    </div>
                                    <div class="ps-2">
                                        <div class="border-start border-light border-4" style="height: 85px;"></div>
                                    </div>
                                </div>
                                @foreach($shineageterkait->slice($itemsPerSection, $itemsPerSection) as $hijau)
                                <div class="card-product mt-3">
                                <a href="{{ route('shineage.detail', ['id_shineage' => $hijau->id_shineage]) }}"
                                        class="card-link">
                                        <div class="img-container">
                                            <img src="{{ $hijau->gambar_1 }}" alt="{{ $hijau->nama_produk }}">
                                        </div>
                                        <div class="card-body bg-tosca text-white px-3 py-2">
                                            <div class="kategori">
                                                <p>{{ $hijau->kategori }}</p>
                                            </div>
                                            <div class="nama-produk">
                                                <p>{{ $hijau->nama_produk }}</p>
                                            </div>
                                            <div class="harga">
                                                <p>Rp {{ $hijau->harga_b2C_1_unit }}</p>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                                @endforeach
                                <div class="bg-tosca mt-3 p-2" style="height: 10%;">
                                    <a href="" class="btn btn-showcase mt-1">Lihat Produk Lainnya</a>
                                </div>
                            </section>
                            <!-- End Tosca Section -->
                        </div>
                        <div class="col-sm-4" style="padding-left: 10px;">
                            <!-- Yellow Section -->
                            <section id="yellow">
                                <div class="bg-yellow p-3">
                                    <div class="text-white">
                                        <p class="fw-bold mb-2" style="font-size: 13px;">Produk-produk Lainnya</p>
                                    </div>
                                </div>
                                @foreach($shineageterkait->slice($itemsPerSection * 2, $itemsPerSection) as $kuning)
                                <div class="card-product mt-3">
                                <a href="{{ route('shineage.detail', ['id_shineage' => $kuning->id_shineage]) }}"
                                        class="card-link">
                                        <div class="img-container">
                                            <img src="{{ $kuning->gambar_1 }}" alt="{{ $kuning->nama_produk }}">
                                        </div>
                                        <div class="card-body bg-yellow text-white px-3 py-2">
                                            <div class="kategori">
                                                <p>{{ $kuning->kategori }}</p>
                                            </div>
                                            <div class="nama-produk">
                                                <p>{{ $kuning->nama_produk }}</p>
                                            </div>
                                            <div class="harga">
                                                <p>Rp {{ $kuning->harga_b2C_1_unit }}</p>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                                @endforeach
                                <div class="bg-yellow mt-3 p-2" style="height: 15%;">
                                    <div class="text-white">
                                        <div class="ps-3 mb-1">
                                            <div class="border-start border-4 border-light" style="height: 80px;"></div>
                                        </div>
                                        <a href="" class="btn btn-showcase mt-1">Lihat Produk Lainnya</a>
                                    </div>
                                </div>
                            </section>
                            <!-- End Yellow Section -->
                        </div>
                    </div>
                </section>
                <!-- End Product -->
            </div>
        </div>
    </div>
    <!-- End Additional Content -->
</body>

</html>