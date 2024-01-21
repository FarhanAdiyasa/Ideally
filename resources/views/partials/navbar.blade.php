<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6990JVL0LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6990JVL0LN');
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('/js/navbar.js')}}"></script>
<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>


</head>
<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary shadow" aria-label="Thirteenth navbar example" style="height: 56px;">
    <div class="container-md">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0 flex-grow-1" href="#">
                <img src="{{asset('/img/logo-ideally.png')}}" alt="LogoIdeally" style="max-width: 40%;">
            </a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="font-family: Montserrat;">Beranda</a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false" style="font-family: Montserrat;">Portal
                        Edukasi</a>
                    <ul class="dropdown-menu dropdown-menu-center">

                        <div class="custom-shape-1"></div>
                        <div class="dropdown-list">
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' => 'Desain-Taman']) }}" class="dropdown-item">Belajar Desain Taman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' => 'Konstruksi-Taman']) }}" class="dropdown-item">Belajar Konstruksi Taman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' => 'Pemeliharan-Taman']) }}" class="dropdown-item">Belajar Pemeliharaan Taman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' => 'Tanaman']) }}" class="dropdown-item">Belajar Tanaman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' =>'Material']) }}" class="dropdown-item">Belajar Material</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' => 'Desain-Taman']) }}" class="dropdown-item">Belajar Bahan Pelengkap</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="{{ route('landing-artikel.kategori', ['kategori' =>'Lainnya']) }}" class="dropdown-item">Belajar Hal Lainnya</a></li>
                        </div>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false" style="font-family: Montserrat;">Layanan</a>
                    <ul class="dropdown-menu dropdown-menu-center">
                        <div class="custom-shape-2"></div>
                        <div class="dropdown-list">
                            <li><a href="#" class="dropdown-item">Desain Taman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="dropdown-item">Konstruksi Taman</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="dropdown-item">Pemeliharaan Taman</a></li>
                        </div>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false" style="font-family: Montserrat;">Produk</a>
                    <ul class="dropdown-menu-produk dropdown-menu dropdown-menu-center">
                        <div class="popup-produk">
                            <img id="dropdown-img" src="{{asset('/img/dropdownlist-img_default.png')}}" alt="Gambar Produk">
                            <div class="custom-shape-3"></div>
                            <div class="produk-list">
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_default.png')}}">Beranda Produk</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_tanaman.png')}}">Produk Tanaman</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_everlasthings.png')}}">Produk Besi dan
                                        Las</a></li>
                                <li>
                                    <hr class=" dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_batu.png')}}">Produk Batu</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_default.png')}}">Produk Beton</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_agrigard.png')}}">Produk Bahan
                                        Pertanian</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item"
                                        data-img="{{asset('/img/dropdownlist-img_shineage.png')}}/img/dropdownlist-img_shineage.png">Produk <i>Signage
                                            System</i></a></li>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" style="font-family: Montserrat;">Tentang Kami</a>
                </li>

                
            </ul>
                @if (session()->has('user_info'))
                <div class="d-flex justify-content-end align-items-center col-lg-3 text-end">
                    <a href="{{ route('transaksi.index') }}" class="me-2">
                        <img src="{{asset('icons/LOGO-CART 1.png')}}" alt="Keranjang" width="35" height="35">
                    </a>
                    <img src="{{asset('img/FOTO-PROFIL 1.png')}}" alt="User" width="35" height="35" 
                    class="rounded-circle">
                    <div class="nav-item dropdown">
                        <div class="ms-2">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false" style="font-family: Montserrat;">{{ session('user_info')->firstname }}</a>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-center profil-dropdown" >
                            <div class="custom-shape-2"></div>
                            <div class="dropdown-list">
                                <li><a class="dropdown-item" href="#">Lihat Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Daftar Pesanan</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
                @else
                <div class="col-lg-3 text-end">
                    <a href="{{url('auth/register')}}" class="link-body-emphasis px-3" style="font-family: Montserrat;">Daftar Akun</a>
                    <span class="vertical-divider"></span>

                    <a href="{{url('auth/login')}}" class="link-body-emphasis px-3" style="font-family: Montserrat;">Masuk</a>
                </div>
                @endif
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        $('.dropdown-item').hover(function () {

            var imgSrc = $(this).data('img');

            $('#dropdown-img').attr('src', imgSrc);

        });
    });
</script>