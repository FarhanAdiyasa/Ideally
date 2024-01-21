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
    <title>Showcase - Shineage</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('shineage/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    <link rel="stylesheet" href="{{ asset ('shineage/assets/css/showcase/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('shineage/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Logo -->
    <section id="logo">
=======
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

    <!-- Logo -->
    <section id="logo" class="mt-5">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
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

    <div class="container">
        <div class="row g-3">
            <div class="col-sm-4">
                <!-- Aside -->
                <section id="aside" class="border border-3 border-secondary p-3 py-4">
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
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER1A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER1A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER1A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Kategori Produk -->
                    <div class="section-title mt-4">
                        <p class="red fw-bold">KATEGORI PRODUK</p>
                    </div>
                    <div class="kategori px-2">
                        <div class="border-red">
                            <div class="ps-3">
                                <a href="" class="deskripsi">Neon Box Lingkaran</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Neon Box Persegi</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Neon Box Persegi Panjang</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Neon Box Letter Sign</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Produk Akrilik</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Kelistrikan</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Neon Flex</a>
                                <hr class="line red-line">
                                <a href="" class="deskripsi">Info Sign</a>
                                <hr class="line red-line">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 2 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-2" data-bs-ride="carousel"
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
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER2A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER2A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER2A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 3 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-2" data-bs-ride="carousel"
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
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER3A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER3A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER3A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Warna Produk -->
                    <div class="section-title mt-4">
                        <p class="tosca fw-bold">WARNA PRODUK</p>
                    </div>
                    <div class="warna px-2">
                        <div class="border-tosca">
                            <div class="ps-3">
                                <a href="" class="deskripsi">Hitam</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Putih</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Merah</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Kuning</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Hijau</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Biru</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Silver</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Transparan</a>
                                <hr class="line tosca-line">
                                <a href="" class="deskripsi">Lainnya</a>
                                <hr class="line tosca-line">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 4 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-2" data-bs-ride="carousel"
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
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER4A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER4A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER4A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- Carousel 5 -->
                    <div id="carousel-image" class="carousel slide mt-4 pt-2" data-bs-ride="carousel"
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
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER5A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER5A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset ('shineage/assets/img/10B-SEC02-SLIDER5A 1.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Aside -->
            </div>
            <div class="col-sm-8">
                <!-- Product -->
                <section id="product">
                    @php
                    $totalItems = count($shineages);
                    $itemsPerSection = ceil($totalItems / 3);
                    @endphp
                    <div class="d-flex h-100 flex-column justify-content-between">
                        <div class="row g-3 mb-3" style="height: 100%; overflow: hidden;">
                            <div class="col-sm-4">
                                <!-- Red Section -->
                                <section id="red">
                                @foreach($shineages->take($itemsPerSection) as $merah)
                                    <div class="card-product">
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
                                    <div class="bg-red mt-3" style="height: 10%;"></div>
                                </section>
                                <!-- End Red Section -->
                            </div>
                            <div class="col-sm-4">
                                <!-- Tosca Section -->
                                <section id="tosca">
                                    <div class="bg-tosca mb-3 search-bar" style="padding: 3.7rem 8px 8px 8px;">
                                        <input type="text" name="" id="search" class="form-control search-input"
                                            placeholder="Pencarian">
                                        <button class="btn bg-light mt-2" id="searchBtn">Cari</button>
                                        <button class="btn bg-light mt-2" id="sortBtn">Urutkan Produk</button>
                                    </div>
                                    @foreach($shineages->slice($itemsPerSection, $itemsPerSection) as $hijau)
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
                                </section>
                                <!-- End Tosca Section -->
                            </div>
                            <div class="col-sm-4">
                                <!-- Yellow Section -->
                                <section id="yellow">
                                    <div class="bg-yellow mb-3" style="height: 3.7rem;">
                                    </div>
                                    @foreach($shineages->slice($itemsPerSection * 2, $itemsPerSection) as $kuning)
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
                                    <div class="bg-yellow mt-3" style="height: 10%;"></div>
                                </section>
                                <!-- End Yellow Section -->
                            </div>
                        </div>
                        <div class="flex-start bg-tosca" style="height: 20px;"></div>
                    </div>
                </section>
                <!-- End Product -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pilih section dengan ID red
            var redSection = document.getElementById("red");

            if (redSection) {
                // Dapatkan semua card di dalam section red
                var cards = redSection.querySelectorAll(".card-product");

                // Loop melalui setiap card, dimulai dari indeks 1
                for (var i = 1; i < cards.length; i++) {
                    cards[i].classList.add("mt-3");
                }
            }
        });
    </script>

</body>

</html>