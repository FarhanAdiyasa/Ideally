<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Showcase - Batunesia</title>

    <!--Stylesheet -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js']);
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/style-batunesia.css"/>
  <link rel="stylesheet" href="/css/landing-artikel-style.css"/>
  <link rel="stylesheet" href="/css/artikel-pagination-style.css"/>
  <link rel="stylesheet" href="/css/navbar-style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Quicksand:wght@600&display=swap"
    rel="stylesheet">

<style>
        /* CSS */
.product-container {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}   



.product-card {
    width: calc(25% - 20px);
    height: 250px;
    background: #fff;         
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
           
}

.product-card .product-details {
            padding: 20px;
            box-sizing: border-box;
        }


.product-image img {
    width: 239.99px;
    height: 200px;
    position: absolute;
    top: -1.52px;
    left: -3.99px;
}

.rating {
    width: 60px;
    height: 25px;
    position: absolute;
    top: 216px;
    left: 150px;
}

.rating-border {
    width: 60px;
    height: 25px;
    position: absolute;
    border: 2px #101624 solid;
}

.rating-number {
    width: 27px;
    height: 16px;
    position: absolute;
    top: 5px;
    left: 23px;
    text-align: right;
    color: #101624;
    font-size: 12px;
    font-family: Poppins;
    font-weight: 700;
    word-wrap: break-word;
}

.product-title {
    width: 161px;
    height: 19px;
    position: absolute;
    top: 158px;
    left: 15px;
    color: #101624;
    font-size: 14px;
    font-family: Poppins;
    font-weight: 400;
    word-wrap: break-word;
}

.product-category {
    position: absolute;
    top: 179px;
    left: 15px;
    color: #101624;
    font-size: 12px;
    font-family: Poppins;
    font-weight: 700;
    word-wrap: break-word;
}

.hidden-price {
    width: 138px;
    height: 16px;
    position: absolute;
    top: 221px;
    left: 15px;
    color: #101624;
    font-size: 14px;
    font-family: Poppins;
    font-weight: 700;
    word-wrap: break-word;
}


    </style>
</head>
<body>

{{-- Navbar Section --}}
    @include('partials.navbar')
    {{-- End of Navbar Section --}}
    
    <div style="width: 100%; height: 100%; position: relative; background: #36369f">


        <!--hero-->
        <div style="height: 500px; left: 330px; top: 76px; position: absolute">
            <div style="width: 1260px; height: 400px; left: 0px; top: 100px; position: absolute">
                    <img style="width: 1260px; height: 400px; left: 0px; top: 0px; position: absolute" src="{{ asset('img/batunesia/hero-bg.png') }}" alt="Deskripsi alternatif gambar" />         
                <div style="width: 784px; height: 141px; left: 70px; top: 41px; position: absolute; color: white; font-size: 60px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Karena Mereka Bernilai.</div>
                <div style="width: 822px; height: 35px; left: 70px; top: 147px; position: absolute; color: white; font-size: 25px; font-family: Bison; font-weight: 300; word-wrap: break-word">nilai kebaikan ada pada cantik, rupawan, dan beragam.</div>
                <div style="width: 269px; height: 52px; left: 70px; top: 285px; position: absolute">
                    <div style="width: 269px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
                    <a href="/link_tujuan">
                        <div style="left: 35px; top: 13px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">BACA SELENGKAPNYA</div>
                    </a>
                </div>
                <div style="width: 242px; height: 27px; left: 74px; top: 250px; position: absolute; color: white; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">34 Artikel Tentang Batu</div>
            </div>
            <div style="width: 1260px; height: 75px; padding-right: 1px; left: 0px; top: 0px; position: absolute; justify-content: center; align-items: center; gap: 420px; display: inline-flex">
                <a href="/url_menu">
                    <img style="width: 35px; height: 35px" src="{{ asset('img/batunesia/icon_menu.png') }}" />
                </a>
                <a href="/batunesia/index">
                    <img style="width: 350px; height: 75px" src="{{ asset('img/batunesia/logo_brand.png') }}" />
                </a>
                <a href="/url_search">
                    <img style="width: 35px; height: 35px" src="{{ asset('img/batunesia/icon_search.png') }}" />
                </a>
            </div>
        </div>
        
        <!--end hero-->

        <!--kategori-->
        <div style="width: 236px; height: 526px; left: 330px; top: 602px; position: absolute">
            <img style="width: 236px; height: 526px; left: 0px; top: 0px; position: absolute" src="{{ asset('img/batunesia/kategori-bg.png') }}" />
            <div style="left: 32px; top: 357px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                <a href="/batunesia/index/showByBatuHampar" style="text-decoration: none; color: white;">Batu Hampar</a><br/>
                <a href="/batunesia/index/showByBatuTempel" style="text-decoration: none; color: white;">Batu Tempel</a><br/>
                <a href="/batunesia/index/showByBatuHias" style="text-decoration: none; color: white;">Batu Hias</a><br/>
                <a href="/batunesia/index/showByOrnamenBatu" style="text-decoration: none; color: white;">Ornamen Batu</a><br/>
                <a href="/batunesia/index/showByPotBatu" style="text-decoration: none; color: white;">Pot Batu</a>
            </div>
            <div style="left: 32px; top: 22px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Kategori</div>
        </div>
        <!--end Kategori-->

        <!--warna-->
        <div style="width: 236px; height: 802px; left: 330px; top: 1156px; position: absolute">
            <img style="width: 236px; height: 802px; left: 0px; top: 0px; position: absolute" src="{{ asset('img/batunesia/warna-bg.png') }}" />
            <div style="left: 32px; top: 606px; position: absolute; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                <a href="/batunesia/index/showByWhite" style="text-decoration: none; color: white;">Putih</a><br/>
                <a href="/batunesia/index/showByCream" style="text-decoration: none; color: white;">Krem</a><br/>
                <a href="/batunesia/index/showByGrey" style="text-decoration: none; color: white;">Abu-abu</a><br/>
                <a href="/batunesia/index/showByBrown" style="text-decoration: none; color: white;">Cokelat</a><br/>
                <a href="/batunesia/index/showByBlack" style="text-decoration: none; color: white;">Hitam</a><br/>
                <a href="/batunesia/index/showByPancawarna" style="text-decoration: none; color: white;">Pancawarna</a>
            </div>
            
            <div style="left: 32px; top: 22px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Warna</div>
        </div>
        <!--end warna-->

        <!--konsultasi-->
        <div style="width: 236px; height: 526px; left: 330px; top: 1986px; position: absolute">
            <img style="width: 236px; height: 526px; left: 0px; top: 0px; position: absolute" src="{{ asset('img/batunesia/konsultasi-bg.png') }}" />
            <div style="left: 32px; top: 22px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Konsultasi</div>
            <div style="left: 31px; top: 405px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Ada Pertanyaan?</div>
            <a href="/hubungi-kami" style="text-decoration: none; color: white;">
                <div style="width: 178px; height: 52px; left: 27px; top: 440px; position: absolute">
                    <div style="width: 178px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
                    <div style="left: 23px; top: 14px; position: absolute; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">HUBUNGI KAMI</div>
                </div>
            </a>
        </div>        
        <!--end konsultasi-->

        <!--content-->
        <div style="width: 1004px; height: 1910px; left: 586px; top: 602px; position: absolute">
            <!--quotes-->
            <div style="width: 492px; height: 250px; left: 256px; top: 1109px; position: absolute">
                <img style="width: 492px; height: 250px; left: 0px; top: 0px; position: absolute" src="{{ asset('img/batunesia/quotes-bg1.png') }}" />
                <div style="width: 477px; height: 161px; left: 5px; top: 15px; position: absolute; text-align: center; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">“Dia yang berbicara dengan baik, tidak akan mendengar kata-kata buruk dari siapapun.”</div>
                <div style="width: 303px; height: 58px; left: 92px; top: 184px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Al-Farabi</div>
            </div>
            <div style="width: 492px; height: 250px; left: 512px; top: 276px; position: absolute">
                <img style="width: 492px; height: 250px; left: 0px; top: 0px; position: absolute" src="{{ asset('img/batunesia/quotes-bg2.png') }}" />
                <div style="width: 448px; height: 166px; left: 24px; top: 13px; position: absolute; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">“Kehidupan yang tidak teruji adalah kehidupan yang tidak bernilai.”</div>
                <div style="width: 303px; height: 58px; left: 24px; top: 189px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Socrates</div>
            </div>
            <!--end quotes-->
            
            <!--card-product-->
            <div style="width: 100%; box-sizing: border-box; overflow: hidden; display: flex; flex-wrap: wrap; gap: 26.5px;">
                @forelse ($batunesias as $batunesia)
                    <a href="{{ route('Detail-Batunesia', ['id_batu' => $batunesia->id_batu]) }}" class="product-card" style="width: calc(25% - 20px);">
                        <!-- Konten Card Produk -->
                        <div class="product-details">
                            <div class="product-image">
                                <img src="{{ $batunesia->gambar_1 }}" alt="Product Image">
                            </div>
                            <div class="rating">
                                <div class="rating-border"></div>
                                <div class="rating-number">4.5</div>
                            </div>
                            <div class="product-title">{{ $batunesia->nama_produk }}</div>
                            <div class="product-category">{{ $batunesia->nama_produk }}</div>
                            <div class="hidden-price">{{ $batunesia->{'harga_b2I_31+_unit'} }}</div>
                        </div>
                    </a>
                @empty
                <p>Data not found, try again.</p>
                @endforelse
            </div>
            <!--end card product-->




        </div>
        <!--content-->

        <!--paginate-->
        <div style="width: 465px; height: 120px; left: 728px; top: 2556px; position: absolute">
            @if ($batunesias->lastPage() > 1)
                <div class="paginator">
                    @for ($i = 1; $i <= $batunesias->lastPage(); $i++)
                        <a href="{{ $batunesias->url($i) }}">
                            <div style="width: 45px; height: 60px; position: absolute; background: white; left: {{ ($i - 1) * 60 }}px; top: 60px;">
                                <div style="text-align: center; color: #211F1E; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word; position: absolute; left: 50%; transform: translateX(-50%); top: 18px;">{{ $i }}</div>
                            </div>
                        </a>
                    @endfor
                </div>
            @endif
        </div>
        
           
        <!--end paginate-->

        <!--footer-->
        <div style="width: 1920px; height: 243px; left: 0px; top: 2776px; position: absolute">
            <div style="width: 1920px; height: 243px; left: 0px; top: 0px; position: absolute; background: #303030"></div>
            <div style="width: 407px; height: 40px; left: 757px; top: 143px; position: absolute">
                <div style="width: 257px; height: 40px; left: 150px; top: 0px; position: absolute">
                    <div style="width: 257px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 30px"></div>
                    <div style="width: 213px; left: 44px; top: 9px; position: absolute; color: white; font-size: 18px; font-family: Arial; font-weight: 700; word-wrap: break-word">Informasi Lebih Lanjut</div>
                    <img style="width: 20px; height: 20px; left: 12px; top: 10px; position: absolute" src="https://via.placeholder.com/20x20" />
                </div>
                <div style="width: 40px; height: 40px; left: 100px; top: 0px; position: absolute">
                    <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 9999px"></div>
                    <img style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute" src="https://via.placeholder.com/20x20" />
                </div>
                <div style="width: 40px; height: 40px; left: 50px; top: 0px; position: absolute">
                    <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 9999px"></div>
                    <img style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute" src="https://via.placeholder.com/20x20" />
                </div>
                <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute">
                    <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 9999px"></div>
                    <img style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute" src="https://via.placeholder.com/20x20" />
                </div>
            </div>
            <div style="width: 612px; left: 654px; top: 70px; position: absolute; text-align: center"><span style="color: white; font-size: 20px; font-family: Montserrat; font-weight: 700; word-wrap: break-word">© PT Lanskap Indonesia Ideal </span><span style="color: white; font-size: 20px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">2023.</span></div>
        </div>
        <!--end footer-->
    </div>
</body>
</html>
