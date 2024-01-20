<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Shineage</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('shineage/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
    <link rel="stylesheet" href="{{ asset ('shineage/assets/css/index/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('shineage/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

    <!-- Logo -->
    <section id="logo" class="mt-5">
        <div class="container">
            <div class="logo-container bg-yellow">
                <div class="row g-0">
                    <div class="col-sm-4">
                        <div class="img-logo">
                            <img src="{{ asset ('shineage/assets/img/01-SEC01-LOGO 1.png') }}" alt="">
                        </div>
                        <div class="text-white mt-3">
                            <p class="noto-sans m-0">Produsen signage pilihan dengan desain kreatif dan kualitas unggul.
                                Menawarkan solusi inovatif untuk meningkatkan visibilitas dan citra merek. Keunggulan
                                dalam ketepatan waktu dan layanan pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-secondary">
                        <img src="{{ asset ('shineage/assets/img/10A-SEC01-LATAR 1.png') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo -->

    <!-- Main Content -->
    <div class="container">
        <div class="row g-3">
            <div class="col-sm-4 aside">
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
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER1 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER1 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER1 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Produk Terlaris -->
                    <div class="section-title mt-4 pt-1">
                        <p class="red fw-bold">PRODUK TERLARIS</p>
                    </div>
                    <div class="produk-terlaris px-2">
                        <div class="border-red">
                            <div class="ps-3">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line red-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line red-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line red-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line red-line">
                            </div>
                        </div>
                    </div>
                    <!-- Produk Pilihan -->
                    <div class="section-title mt-4 pt-1">
                        <p class="tosca fw-bold">PRODUK PILIHAN</p>
                    </div>
                    <div class="produk-pilihan px-2">
                        <div class="border-tosca">
                            <div class="ps-3">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line tosca-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line tosca-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line tosca-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line tosca-line">
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
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER2A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER2A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER2A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Artikel -->
                    <div class="section-title mt-4 pt-1">
                        <p class="yellow fw-bold">ARTIKEL TERKAIT</p>
                    </div>
                    <div class="artikel px-2">
                        <div class="border-yellow">
                            <div class="ps-3">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line yellow-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line yellow-line">
                                <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem non
                                    impedit mollitia unde?</p>
                                <hr class="line yellow-line">
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
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER3A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER3A 1.png') }}"
                                    class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10A-SEC02-SLIDER3A 1.png') }}"
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
                    $totalItems = count($shineages);
                    $thirdItems = ceil($totalItems / 3);
                    @endphp
                    <div class="d-flex h-100">
                        <div class="col-sm-4" style="padding-right: 10px;">
                            <!-- Red Section -->
                            <section id="red" class="search-bar">
                                <div class="bg-red pt-5 p-2">
                                    <div class="text-white">
                                        <h5 class="fw-bold">Cari Produk</h5>
                                    </div>
                                    <input type="text" name="" id="search" class="form-control search-input"
                                        placeholder="Pencarian">
                                    <button class="btn bg-light mt-2" id="searchBtn">Cari</button>
                                    <button class="btn bg-light mt-2" id="sortBtn">Urutkan Produk</button>
                                </div>
                                @foreach($shineages->take(5) as $merah)
                                <div class="card-product mt-3">
                                    <a href="{{ route('shineage.detail', ['id_shineage' => $merah->id_shineage]) }}"
                                        class="card-link">
                                        <div class="img-container">
                                            <img src="{{ $merah->gambar_1 }}" alt="{{ $merah->nama_produk }}">
                                        </div>
                                        <div class="card-body bg-red text-white">
                                            <div class="kategori">
                                                <p>{{ $merah->nama_produk }}</p>
                                            </div>
                                            <div class="nama-produk">
                                                <p>{{ substr($merah->deskripsi_singkat, 0, 10) }}</p>
                                            </div>
                                            <div class="harga">
                                                <p>Rp {{ $merah->harga_b2C_1_unit }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                <div class="bg-red mt-3 p-2" style="min-height: 10%;">
                                    <div class="text-white">
                                        <div class="ps-3 mb-1">
                                            <div class="border-start border-4 border-light" style="height: 18px;"></div>
                                        </div>
                                        <p class="deskripsi-bawah text-white fw-bold m-0">Belum menemukan produk yang
                                            Anda cari?</p>
                                    </div>
                                </div>
                            </section>
                            <!-- End Red Section -->
                        </div>
                        <div class="col-sm-4" style="padding: 0 5px;">
                            <!-- Tosca Section -->
                            <section id="tosca" class="keunggulan">
                                <div class="bg-tosca pt-5 p-2 pe-4">
                                    <div class="text-white">
                                        <h5 class="fw-bold">Keunggulan</h5>
                                        <div class="ps-3">
                                            <div class="border-start border-5 border-light" style="height: 35px;"></div>
                                        </div>
                                        <p>Pengerjaan cepat dan tepat waktu. Sesuai jadwal bisnis Anda.</p>
                                        <div class="ps-3">
                                            <div class="border-start border-5 border-light" style="height: 35px;"></div>
                                        </div>
                                        <p>Harga terjangkau dan sesuai dengan anggaran Anda.</p>
                                        <div class="ps-3">
                                            <div class="border-start border-5 border-light" style="height: 35px;"></div>
                                        </div>
                                        <p>Konsultasi gratis dan tanya - jawab agar Anda memahami aset Anda.</p>
                                    </div>
                                </div>
                                @foreach($shineages->slice(5, 4) as $hijau)
                                <div class="card-product mt-3">
                                    <a href="{{ route('shineage.detail', ['id_shineage' => $hijau->id_shineage]) }}"
                                        class="card-link">
                                        <div class="img-container">
                                            <img src="{{ $hijau->gambar_1 }}" alt="{{ $hijau->nama_produk }}">
                                        </div>
                                        <div class="card-body bg-tosca text-white">
                                            <div class="kategori">
                                                <p>{{ $hijau->nama_produk }}</p>
                                            </div>
                                            <div class="nama-produk">
                                                <p>{{ substr($hijau->deskripsi_singkat, 0, 10) }}</p>
                                            </div>
                                            <div class="harga">
                                                <p>Rp {{ $hijau->harga_b2C_1_unit }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                <div class="bg-tosca mt-3 p-2" style="height: 15%;">
                                    <div class="text-white">
                                        <div class="ps-3 mb-1">
                                            <div class="border-start border-4 border-light" style="height: 40%;"></div>
                                        </div>
                                        <a href="{{ route('shineage.showcase') }}" class="btn btn-showcase mt-1">Lihat
                                            Produk Lainnya</a>
                                    </div>
                                </div>
                            </section>
                            <!-- End Tosca Section -->
                        </div>
                        <div class="col-sm-4" style="padding-left: 10px;">
                            <!-- Yellow Section -->
                            <section id="yellow" class="kategori">
                                <div class="bg-yellow pt-5 p-2">
                                    <div class="text-white">
                                        <h5 class="fw-bold">Kategori</h5>
                                    </div>
                                    <div class="kategori-list ms-1 border-start border-5 border-light">
                                        <p><a href="" class="item-link">Neon Box Lingkaran</a></p>
                                        <p><a href="" class="item-link">Neon Box Persegi</a></p>
                                        <p><a href="" class="item-link">Neon Box Persegi Panjang</a></p>
                                        <p><a href="" class="item-link">Letter Sign</a></p>
                                        <p><a href="" class="item-link">Produk Akrilik</a></p>
                                        <p><a href="" class="item-link">Kelistrikan</a></p>
                                        <p><a href="" class="item-link">Neon Flex</a></p>
                                        <p><a href="" class="item-link">Info Sign</a></p>
                                    </div>
                                </div>
                                @foreach($shineages->slice(9, 5) as $kuning)
                                <div class="card-product mt-3">
                                    <a href="{{ route('shineage.detail', ['id_shineage' => $kuning->id_shineage]) }}"
                                        class="card-link">
                                        <div class="img-container">
                                            <img src="{{ $kuning->gambar_1 }}" alt="{{ $kuning->nama_produk }}">
                                        </div>
                                        <div class="card-body bg-yellow text-white">
                                            <div class="kategori">
                                                <p>{{ $kuning->nama_produk }}</p>
                                            </div>
                                            <div class="nama-produk">
                                                <p>{{ substr($kuning->deskripsi_singkat, 0, 10) }}</p>
                                            </div>
                                            <div class="harga">
                                                <p>Rp {{ $kuning->harga_b2C_1_unit }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                <div class="bg-yellow mt-3" style="height: 10%;"></div>
                            </section>
                            <!-- End Yellow Section -->
                        </div>
                    </div>
                </section>
                <!-- End Product -->
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- CTA -->
    <section id="cta">
        <div class="container mt-4">
            <div class="row g-0">
                <div class="col-sm-7">
                    <div class="img-cta">
                        <img src="{{ asset ('shineage/assets/img/10A-SEC05-LATAR 1.png') }}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-sm-5 bg-yellow">
                    <div class="d-flex flex-column justify-content-between" style="height: 100%;">
                        <div class="title text-white">
                            <p class="fw-bold">Konsultasi <br> Untuk Kebutuhan Custom!</p>
                        </div>
                        <div class="action">
                            <div class="deskripsi-cta text-white">
                                <p>Setiap mitra kami pasti memiliki kebutuhan yang berbeda. Begitu juga Anda. Konsultasi
                                    lebih lanjut untuk mendapatkan kebutuhan bisnis Anda.</p>
                            </div>
                            <div class="action-btn">
                                <a href="https://wa.link/lccn22" class="btn btn-light">Konsultasi Sekarang</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End CTA -->

</body>

</html>