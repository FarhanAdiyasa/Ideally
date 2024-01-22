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
    <title>Showcase - Agrigard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('agrigard/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
    <link rel="stylesheet" href="{{ asset ('agrigard/assets/css/showcase/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('agrigard/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Header & search -->
    <section id="header">
=======
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

    <!-- Header & search -->
    <section id="header" class="mt-5">
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
        <div class="container">
            <div class="inner-container top-start bg-light">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset ('agrigard/assets/img/LOGO.png') }}" alt="" style="width: 105%;">
                    </div>
                    <div class="col-sm-6 d-flex search">
                        <input type="text" name="" id="search" class="form-control search-input top-start"
                            placeholder="Pencarian">
                        <a href="" class="btn top-start text-white bg-orange" id="searchBtn">Cari</a>
                    </div>
                    <div class="col-sm-3 sorting">
                        @php
                        $sortAZ = \App\Models\Agrigard::where('stok', '>', 0)
                        ->orderBy('nama_produk', 'asc')
                        ->first();
                        @endphp

                        @if($sortAZ)
                        <a href="{{ route('agrigard.detail', ['id_agrigard' => $sortAZ->id_agrigard]) }}"
                            class="btn top-end text-white bg-orange" id="sortAZBtn">Urutkan A-Z</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header & search -->

    <!-- Kategori -->
    <section id="kategori">
        <div class="container mt-4">
            <div class="inner-container top-end bg-orange">
                <div class="row">
<<<<<<< HEAD
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Pot Plastik</p>
=======
                <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <a href="{{ route('agrigard.kategori', ['kategori' => 'Pot Plastik']) }}">Pot Plastik</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Pot Plastik</p>
=======
                        <a href="{{ route('agrigard.kategori', ['kategori' => 'Pot Terracota']) }}">Pot Terracota</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Pot Terracota</p>
=======
                        <a href="{{ route('agrigard.kategori', ['kategori' => 'Bibit Tanaman']) }}">Bibit Tanaman</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Bibit Tanaman</p>
=======
                        <a href="{{ route('agrigard.kategori', ['kategori' => 'Media Tanam']) }}">Media Tanam</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Media Tanam</p>
=======
                        <a href="{{ route('agrigard.kategori', ['kategori' => 'Wadah Tanam']) }}">Wadah Tanam</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Wadah Tanam</p>
=======
                        <a href="{{ route('agrigard.kategori', ['kategori' => 'Obat dan Nutrisi']) }}">Obat dan Nutrisi</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Obat dan Nutrisi</p>
=======
                        <a href="{{ route('agrigard.kategori', ['kategori' => 'Alat Kerja']) }}">Alat Kerja</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
<<<<<<< HEAD
                            <p>Alat Kerja</p>
                        </div>
                    </div>
                    <div class="col wrapper">
                        <div class="bg-light rounded-circle" style="height: 25px; width: 25px;"></div>
                        <div class="text-white text-center m-0">
                            <p>Lain - lain</p>
=======
                            <a href="{{ route('agrigard.kategori', ['kategori' => 'Lain - lain']) }}">Lain - lain</a>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kategori -->

    <!-- Showcase -->
    <section id="showcase">
        <div class="container mt-4">
            <div class="inner-container top-start bg-light">
                <div class="row g-3 products">
                    @foreach ($agrigards as $agrigard)
                    <div class="col-sm-3">
                        <div class="card-product">
                            <a href="{{ route('agrigard.detail', ['id_agrigard' => $agrigard->id_agrigard]) }}"
                                class="card-link">
                                <div class="img-container">
                                    <img src="{{ $agrigard->gambar_1 }}" alt="{{ $agrigard->nama_produk }}">
                                </div>
                                <div class="card-body" style="width: inherit;">
                                    <div class="row g-0">
                                        <div class="col-sm-7">
                                            <p class="nama-produk">{{ $agrigard->nama_produk }} - {{ $agrigard->satuan }}</p>
                                            <p class="kategori">{{ $agrigard->kategori }}</p>
                                            <div class="d-flex justify-content-between mt-1">
                                                <a class="btn bg-grey text-center">-</a>
                                                <p class="bg-grey text-center">12</p>
                                                <a class="btn bg-grey text-center">+</a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                            <p class="harga">{{ $agrigard->harga_b2C_1_unit }}</p>
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
                <!-- Pagination -->
                <div class="mt-5 d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item page-item-prev"><a class="page-link" href="#"
                                    aria-label="Previous">-</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-item-next"><a class="page-link" href="#" aria-label="Next">+</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Pagination -->
            </div>
        </div>
    </section>
    <!-- End Showcase -->



    <script>
        $(document).ready(function () {
            // Simpan semua produk ke dalam variabel
            var allProducts = $('.products').children();

            // Fungsi untuk menambahkan kelas berdasarkan indeks
            function addImageClasses() {
                $(".card-product").each(function (index) {
                    var imgContainer = $(this).find(".img-container");
                    imgContainer.removeClass("img-top-start img-top-end");
                    if (index % 2 === 0) {
                        imgContainer.addClass("img-top-end");
                    } else {
                        imgContainer.addClass("img-top-start");
                    }
                });
            }

            // Panggil fungsi saat halaman dimuat
            addImageClasses();

            // Fungsi untuk mengurutkan produk dari A-Z
            $('#sortAZBtn').on('click', function (e) {
                e.preventDefault();
                var sortedProducts = Array.from(allProducts).sort(function (a, b) {
                    var nameA = $(a).find('.nama-produk').text().toUpperCase();
                    var nameB = $(b).find('.nama-produk').text().toUpperCase();
                    return (nameA < nameB) ? -1 : (nameA > nameB) ? 1 : 0;
                });
                $('.products').empty().append(sortedProducts);
                addImageClasses();
            });

            // Fungsi untuk melakukan pencarian produk
            $('#searchBtn').on('click', function (e) {
                e.preventDefault();
                var searchTerm = $('#search').val().toLowerCase().trim();

                if (searchTerm === '') {
                    $('.products').empty().append(allProducts);
                } else {
                    var filteredProducts = allProducts.filter(function () {
                        var productName = $(this).find('.nama-produk').text().toLowerCase();
                        return productName.includes(searchTerm);
                    });
                    $('.products').empty().append(filteredProducts);
                }
                addImageClasses();
            });

            // Fungsi untuk mengembalikan semua produk ke posisi semula saat input kosong
            $('#search').on('keyup', function () {
                if ($(this).val().trim() === '') {
                    $('.products').empty().append(allProducts);
                    addImageClasses();
                }
            });
        });
    </script>

<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
=======
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
>>>>>>> d5557992f1c905b8f774d6907a37c029ef4d4590
</body>

</html>