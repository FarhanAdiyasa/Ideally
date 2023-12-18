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
    <link rel="stylesheet" href="{{ asset ('konkurito/assets/css/showcase/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('konkurito/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Hero & Search Bar -->
        <section id="hero-search">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-6 bg-light">
                            <div class="align-corner">
                                <div class="img-logo">
                                    <img src="{{ asset ('konkurito/assets/img/LOGO.png') }}" alt="">
                                </div>
                                <div class="deskripsi">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 bg-yellow">
                            <div class="description-box">
                                <div class="title">
                                    <p>Title</p>
                                    <hr class="title-line">
                                </div>
                                <div class="kategori">
                                    <a href="">
                                        <p>Paving</p>
                                    </a>
                                    <a href="">
                                        <p>U-Ditch</p>
                                    </a>
                                    <a href="">
                                        <p>Box Culvert</p>
                                    </a>
                                    <a href="">
                                        <p>Buis Beton</p>
                                    </a>
                                    <a href="">
                                        <p>Panel Pagar</p>
                                    </a>
                                    <a href="">
                                        <p>Tiang Pagar</p>
                                    </a>
                                    <a href="">
                                        <p>Sitecast</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 search">
                    <div class="img-search">
                        <img src="{{ asset ('konkurito/assets/img/SEARCHING.png') }}" alt="">
                    </div>
                    <input type="text" name="" id="search" class="form-control" placeholder="search">
                </div>
            </div>
        </section>
        <!-- End Hero & Search Bar -->

        <!-- Showcase -->
        <section id="showcase">
            <div class="row">
                <div class="col-sm-6">
                    @php
                    $totalItems = count($konkuritoshowcase);
                    $halfItems = ceil($totalItems / 2);
                    @endphp

                    @foreach($konkuritoshowcase as $index => $konkurito)
                    @if($index < $halfItems) 
                    
                    <div class="card-product">
                            <div class="row g-0">
                                <div class="col-sm-6 pe-2">
                                    <div class="img-container">
                                        <img src="{{ asset($konkurito->gambar) }}" alt="{{ $konkurito->nama_produk }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 ps-2">
                                    <div class="card-body">
                                        <div class="title">
                                            <p>{{ $konkurito->nama_produk }}</p>
                                        </div>
                                        <div class="deskripsi">
                                            <p>{{ $konkurito->deskripsi_singkat }} - {{ $konkurito->dimensi }}</p>
                                        </div>
                                        <div class="harga">
                                            <p>Rp {{ number_format($konkurito->harga_b2I_11, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                @endif
                @endforeach
            </div>

            <div class="col-sm-6">
                @foreach($konkuritoshowcase as $index => $konkurito)
                @if($index >= $halfItems)
                <div class="card-product">
                    <div class="row g-0">
                        <div class="col-sm-6 pe-2">
                            <div class="img-container">
                                <img src="{{ asset($konkurito->gambar) }}" alt="{{ $konkurito->nama_produk }}">
                            </div>
                        </div>
                        <div class="col-sm-6 ps-2">
                            <div class="card-body">
                                <div class="title">
                                    <p>{{ $konkurito->nama_produk }}</p>
                                </div>
                                <div class="deskripsi">
                                    <p>{{ $konkurito->deskripsi_singkat }} - {{ $konkurito->dimensi }}</p>
                                </div>
                                <div class="harga">
                                    <p>Rp {{ number_format($konkurito->harga_b2I_11, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
    </div>
    </section>
    <!-- End Showcase -->

    <section id="penawaran">
        <div class="row">
            <div class="col-sm-6">
                <div class="bg-img">
                    <img src="{{ asset ('konkurito/assets/img/ILUSTRASI4_3-1.png') }}" alt=""
                        style="width: 633px; height: 210px;">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-6 bg-light"></div>
                    <div class="col-6 bg-yellow">
                        <div id="carouselTwo" class="carousel slide p-0">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!-- Item one must be 01/05-->
                                    <div class="description-box">
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
                                <div class="carousel-item">
                                    <!-- Item one must be 01/05-->
                                    <div class="description-box">
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
                                <div class="carousel-item">
                                    <!-- Item one must be 01/05-->
                                    <div class="description-box">
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
                                <div class="carousel-item">
                                    <!-- Item one must be 01/05-->
                                    <div class="description-box">
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
                                <div class="carousel-item">
                                    <!-- Item one must be 01/05-->
                                    <div class="description-box">
                                        <div class="title">
                                            <p>Title</p>
                                            <hr class="title-line">
                                        </div>
                                        <div class="deskripsi">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                                                nulla!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo"
                                data-bs-slide="prev">
                                <span class="text-dark">
                                    <h2>
                                        <i class="bi bi-caret-left-fill"></i>
                                    </h2>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo"
                                data-bs-slide="next">
                                <span class="text-dark">
                                    <h2>
                                        <i class="bi bi-caret-right-fill"></i>
                                    </h2>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 bg-primary">
                <div class="row">
                    <div class="col-6 bg-blue d-flex flex-column justify-content-center align-items-center">
                        <div class="bg-light rounded-circle" style="width: 50px; height: 50px;"></div>
                        <div class="title text-white">
                            <h6>Lorem ipsum</h6>
                        </div>
                    </div>
                    <div class="col-6 bg-light">
                        <div class="description-box">
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
            <div class="col-sm-6 col-6 p-0">
                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}" alt=""
                    style="width: 100%; max-height: 100%;">
            </div>
        </div>
    </section>
    </div>

    <!-- Pastikan Anda telah memuat jQuery sebelum skrip ini -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // Fungsi untuk melakukan pencarian
            $('#search').on('keyup', function () {
                var value = $(this).val().til nilai dari input dan mengonversi ke huruf kecil
                $('.card-product').filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1); // Menampilkan/menyembunyikan card sesuai dengan hasil pencarian
                });
            });

            // Fungsi untuk mengembalikan tampilan semula saat input kosong
            $('#search').on('change', function () {
                if ($(this).val() === '') {
                    $('.card-product').show(); // Menampilkan semua card kembali jika input dikosongkan
                }
            });
        });
    </script>

</body>

</html>