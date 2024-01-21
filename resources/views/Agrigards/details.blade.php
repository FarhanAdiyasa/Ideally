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
    <title>Details - Agrigard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('agrigard/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
    <link rel="stylesheet" href="{{ asset ('agrigard/assets/css/details/style.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('agrigard/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
=======
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
>>>>>>> bb2ba97af27bea37022f6fdb57a723b9c9f2019b
</head>

<body>
    <!-- Navbar Utama -->
    @include('partials.navbar')
    <!-- End Navbar Utama -->

    <!-- Header & search -->
    <section id="header" class="mt-5">
        <div class="container">
            <div class="inner-container top-start bg-light">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset ('agrigard/assets/img/LOGO.png') }}" alt="" style="width: 105%;">
                    </div>
                    <div class="col-sm-6 d-flex search">
                        <input type="text" name="" id="search" class="form-control search-input top-start"
                            placeholder="Pencarian">
                        <a href="" class="btn top-start text-white bg-orange">Cari</a>
                    </div>
                    <div class="col-sm-3 sorting">
                        <a href="" class="btn top-end text-white bg-orange">Urutkan A-Z</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header & search -->

    <!-- Details -->
    <section id="details">
        <div class="container mt-4">
            <div class="inner-container top-end bg-light">
                <div class="row g-4">
                    <div class="col-sm-4 content">
                        <p class="rating"><span><i class="bi bi-star-fill"></i></span> 4,7</p>
                        <p class="nama-produk">{{ $agrigards->nama_produk }} - {{ $agrigards->satuan }}</p>
                        <p class="deskripsi">{{ $agrigards->deskripsi_singkat }}</p>
                        <table class="table table-borderless table-details">
                            <tr>
                                <th>Kategori</th>
                                <th>{{ $agrigards->kategori }}</th>
                            </tr>
                            <tr>
                                <th>Satuan</th>
                                <th>{{ $agrigards->satuan }}</th>
                            </tr>
                            <tr>
                                <th>Spesifikasi</th>
                                <th>{{ $agrigards->spesifikasi }}</th>
                            </tr>
                        </table>
                        <p class="title-harga">Daftar Harga</p>
                        <table class="table table-borderless table-harga">
                            <tr>
                                <th>1-10 satuan</th>
                                <th>Rp {{ $agrigards->harga_b2C_1_unit }}</th>
                            </tr>
                            <tr>
                                <th>11-30 satuan</th>
                                <th>Rp {{ $agrigards->harga_b2C_11_unit }}</th>
                            </tr>
                            <tr>
                                <th>31+ satuan</th>
                                <th>Rp {{ $agrigards->harga_b2C_31_unit }}</th>
                            </tr>
                        </table>
                        <div class="total-item d-flex justify-content-between mb-2">
                            <button class="item btn bg-grey" onclick="decrease()">
                                <span>-</span>
                            </button>
                            <input type="text" class="item form-control bg-grey" id="quantity" value="1">
                            <button class="item btn bg-grey" onclick="increase()">
                                <span>+</span>
                            </button>
                            <a href="#" onclick="addToCart(event)" class="item btn bg-green text-white"
                                id="addToCartLink"><i class="bi bi-cart-fill"></i></a>
                            <script>
                            function addToCart(event) {
                                event.preventDefault(); // Mencegah perilaku default dari tag 'a' (pemindahan halaman)

                                var quantity = document.getElementById('quantity').value;
                                var agrigardId = "{{ $agrigards->id_agrigard }}";

                                // Membuat URL dengan nilai qty dan id_agrigard
                                var url = "{{ route('addcart.agrigard', ['id' => ':id', 'qty' => ':qty']) }}"
                                    .replace(':id', agrigardId)
                                    .replace(':qty', quantity);

                                // Menangani aksi ketika tombol 'Add to Cart' diklik
                                window.location.href = url;
                            }
                            </script>
                        </div>
                        <input type="text" class="total-harga form-control bg-grey" id="summaryPrice"
                            value="{{ $agrigards->harga_b2C_1_unit }}" readonly>
                    </div>
                    <div class="col-sm-5">
                        <div class="img-utama img-top-start">
                            <img src="{{ $agrigards->gambar_1 }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="img-detail d-flex flex-column justify-content-between">
                            <div class="img-container card-img-top-end">
                                <img src="{{ $agrigards->gambar_1 }}" alt="">
                            </div>
                            <div class="img-container card-img-top-start">
                                <img src="{{ $agrigards->gambar_2 }}" alt="">
                            </div>
                            <div class="img-container card-img-top-end">
                                <img src="{{ $agrigards->gambar_3 }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details -->

    <!-- Produk Terkait -->
    <section id="produk-terkait">
        <div class="container mt-4">
            <div class="inner-container top-start bg-light">
                <div class="title text-end">
                    <h5>Produk Terkait</h5>
                </div>
                <div class="row g-3">
                    @foreach ($agrigardterkait as $terkait)
                    <div class="col-sm-3">
                        <div class="card-product">
                            <a href="{{ route('agrigard.detail', ['id_agrigard' => $terkait->id_agrigard]) }}"
                                class="card-link">
                                <div class="img-container">
                                    <img src="{{ $terkait->gambar_1 }}" alt="{{ $terkait->nama_produk }}">
                                </div>
                                <div class="card-body" style="width: inherit;">
                                    <div class="row g-0">
                                        <div class="col-sm-7">
                                            <p class="nama-produk">{{ $terkait->nama_produk }} - {{ $terkait->satuan }}
                                            </p>
                                            <p class="kategori">{{ $terkait->kategori }}</p>
                                            <div class="d-flex justify-content-between mt-1">
                                                <a class="btn bg-grey text-center">-</a>
                                                <p class="bg-grey text-center">12</p>
                                                <a class="btn bg-grey text-center">+</a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                            <p class="harga">{{ $terkait->harga_b2C_1_unit }}</p>
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
    <!-- End Produk Terkait -->

    <!-- Produk Banyak Dicari -->
    <section id="produk-dicari">
        <div class="container mt-4">
            <div class="inner-container top-end bg-light">
                <div class="title text-start">
                    <h5>Produk Banyak Dicari</h5>
                </div>
                <div class="row g-3">
                    @foreach ($agrigardbaru as $baru)
                    <div class="col-sm-3">
                        <div class="card-product">
                            <a href="{{ route('agrigard.detail', ['id_agrigard' => $baru->id_agrigard]) }}"
                                class="card-link">
                                <div class="img-container">
                                    <img src="{{ $baru->gambar_1 }}" alt="{{ $baru->nama_produk }}">
                                </div>
                                <div class="card-body" style="width: inherit;">
                                    <div class="row g-0">
                                        <div class="col-sm-7">
                                            <p class="nama-produk">{{ $baru->nama_produk }} - {{ $baru->satuan }}</p>
                                            <p class="kategori">{{ $baru->kategori }}</p>
                                            <div class="d-flex justify-content-between mt-1">
                                                <a class="btn bg-grey text-center">-</a>
                                                <p class="bg-grey text-center">12</p>
                                                <a class="btn bg-grey text-center">+</a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                            <p class="harga">{{ $baru->harga_b2C_1_unit }}</p>
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
    <!-- End Produk Terkait -->

    <!-- Produk Terkait -->
    <section id="produk-pilihan">
        <div class="container mt-4">
            <div class="inner-container top-start bg-light">
                <div class="title text-end">
                    <h5>Produk Pilihan</h5>
                </div>
                <div class="row g-3">
                    @foreach ($agrigardpilihan as $pilihan)
                    <div class="col-sm-3">
                        <div class="card-product">
                            <a href="{{ route('agrigard.detail', ['id_agrigard' => $pilihan->id_agrigard]) }}"
                                class="card-link">
                                <div class="img-container">
                                    <img src="{{ $pilihan->gambar_1 }}" alt="{{ $pilihan->nama_produk }}">
                                </div>
                                <div class="card-body" style="width: inherit;">
                                    <div class="row g-0">
                                        <div class="col-sm-7">
                                            <p class="nama-produk">{{ $pilihan->nama_produk }} - {{ $pilihan->satuan }}
                                            </p>
                                            <p class="kategori">{{ $pilihan->kategori }}</p>
                                            <div class="d-flex justify-content-between mt-1">
                                                <a class="btn bg-grey text-center">-</a>
                                                <p class="bg-grey text-center">12</p>
                                                <a class="btn bg-grey text-center">+</a>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-5 d-flex flex-column align-items-end justify-content-between">
                                            <p class="harga">{{ $pilihan->harga_b2C_1_unit }}</p>
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
    <!-- End Produk Terkait -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
                    $agrigards - > harga_b2C_1_unit
                }
            };
        } else if (quantity >= 11 && quantity <= 30) {
            price = {
                {
                    $agrigards - > harga_b2C_11_unit
                }
            };
        } else if (quantity > 30) {
            price = {
                {
                    $agrigards - > harga_b2C_31_unit
                }
            };
        }

        const totalPrice = price * quantity;
        summaryPriceInput.value = numeral(totalPrice).format('0,0');;
    }
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>