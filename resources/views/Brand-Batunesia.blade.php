<!DOCTYPE html>
<html lang="en">

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ideally - Brand Batunesia</title>

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
    


</head>

<body>

    {{-- Navbar Section --}}
    @include('partials.navbar')
    {{-- End of Navbar Section --}}
        
   

    <div style="width: 1260px; height: 250px; padding-right: 1px;  align-items: center; gap: 290px; display: inline-flex">
    
    <div id="burgerContainer">
    <button id="burgerButton">
    <img style="width: 35px; height: 28px; margin-top: 50px; margin-right: 200px;" src="../img/burger.png" />
    </button>
    <img style="width: 250px; height: 80px; margin-top: 30px; margin-right: 150px;" src="../img/Batunesia-Logo.png" />
    <div class="PopupSearch" id="popupSearch">
    <div class="Rectangle201"></div>
    <input type="text" class="Rectangle80" id="searchInput">
    <div class="Pencarian">Pencarian...</div>
    </div>

    <button class="SearchButton" onclick="showSearchPopup()">
        <img src="../img/search.png" alt="Search">
    </button>


    <script>
    function showSearchPopup() {
      var popup = document.getElementById("popupSearch");
      popup.classList.toggle("show");
    }

    // Event listener untuk mengatur ulang teks placeholder saat input diubah
    document.getElementById("searchInput").addEventListener("input", function() {
      var input = this;
      var placeholderText = document.querySelector(".Pencarian");

      if (input.value.trim() !== "") {
        placeholderText.style.display = "none";
      } else {
        placeholderText.style.display = "block";
      }
    });

    
  </script>

  
    </div>
    <div class="Overlay">
        <div class="OverlayContent">
            <div class="Group" style="left: 53px; top: 31px;">
            <div class="Button">
                <a href="halaman_batu_hampar.html" class="Button">
                <div class="BatuText BatuHampar">Batu Hampar</div>
                <div class="Rectangle"></div>
            </a>
            </div>
            </div>
            <div class="Group" style="left: 53px; top: 105px;">
            <div class="Button">
                <div class="BatuText BatuTempel">Batu Tempel</div>
                <div class="Rectangle"></div>
            </div>
            </div>
            <div class="Group" style="left: 53px; top: 179px;">
            <div class="Button">
                <div class="BatuText BatuHias">Batu Hias</div>
                <div class="Rectangle"></div>
            </div>
            </div>
            <div class="Group" style="left: 53px; top: 253px;">
            <div class="Button">
                <div class="BatuText OrnamenBatu">Ornamen Batu</div>
                <div class="Rectangle"></div>
            </div>
            </div>
            <div class="Group" style="left: 53px; top: 327px;">
            <div class="Button">
                <div class="BatuText PotBatu">Pot Batu</div>
                <div class="Rectangle"></div>
            </div>
            </div>
        </div>
        </div>
            </div>
        </div>

        <script>
    var burgerButton = document.getElementById('burgerButton');
    var overlay = document.querySelector('.Overlay');

    burgerButton.addEventListener('click', function() {
        overlay.style.display = 'block';
        setTimeout(function() {
            overlay.style.opacity = '1';
        }, 10);
    });

    overlay.addEventListener('click', function(event) {
        if (event.target.classList.contains('Button')) {
            // Tombol di dalam overlay diklik, lanjutkan ke URL yang ditentukan
            var link = event.target.querySelector('a');
            if (link) {
                window.location.href = link.href;
            }
        }

        overlay.style.opacity = '0';
        setTimeout(function() {
            overlay.style.display = 'none';
        }, 300);
    });
</script>


    <div style="width: 1260px; height: 500px; position: relative">
    <img style="width: 1260px; height: 500px; left: 0px; top: 0px; position: absolute" src="../img/Latar1.png" />
    <div style="width: 701px; height: 141px; left: 69px; top: 41px; position: absolute; color: white; font-size: 60px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Lebih Dari Dekorasi.</div>
    <div style="width: 822px; height: 35px; left: 69px; top: 147px; position: absolute; color: white; font-size: 25px; font-family: Bison; font-weight: 300; word-wrap: break-word">INI TENTANG MENGHADIRKAN ALAM di sekitar anda.</div>
    <div class="Button" style="width: 269px; height: 52px; left: 69px; top: 406px; position: absolute">
        <div class="Rectangle80" style="width: 269px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
        <div class="BacaSelengkapnya" style="left: 35px; top: 13px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">BACA SELENGKAPNYA</div>
    </div>
    <div style="width: 242px; height: 27px; left: 73px; top: 371px; position: absolute; color: white; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">34 Artikel Tentang Batu</div>
    </div>



    <section id="slider-latar2"> 
    <div id="mySlider" class="carousel Slider" data-ride="carousel" style="width: 849px; height: 465px; top: 30px; left: 225px; position: relative">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="ASec02Latar2d1" style="width: 100%; height: 100%;" src="../img/Latar2.png" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d2" style="width: 100%; height: 100%;" src="../img/Latar3.png" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d3" style="width: 100%; height: 100%;" src="../img/Latar4.png" alt="Slide 3">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d4" style="width: 100%; height: 100%;" src="../img/Latar5.png" alt="Slide 4">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d5" style="width: 100%; height: 100%;" src="../img/Latar6.png" alt="Slide 5">
        </div>
      </div>
            <div class="Populer" style="left: 27px; top: 35px; position: absolute; color: white; font-size: 40px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Populer</div>
        <div class="AyoPeriksaProdukYangPalingBanyakDicari" style="width: 822px; height: 35px; left: 27px; top: 95px; position: absolute; color: white; font-size: 20px; font-family: Bison; font-weight: 300; word-wrap: break-word">ayo Periksa produk yang paling banyak dicari!</div>
        <div class="Button" style="width: 209px; height: 52px; left: 27px; top: 313px; position: absolute">
            <div class="Rectangle80" style="width: 209px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
            <div class="LihatProduk" style="left: 39px; top: 13px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK</div>
        </div>
        <div class="ProdukTeratas" style="width: 242px; height: 27px; left: 31px; top: 282px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">10 Produk Teratas</div>
        
        <div  class="Slider Slider-hover" style="width: 95px; height: 30px; left: 686px; top: 335px; position: absolute">
        <div class="Rectangle81" data-target="#mySlider" data-slide-to="0" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle82" data-target="#mySlider" data-slide-to="1" style="width: 15px; height: 15px; left: 20px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle83" data-target="#mySlider" data-slide-to="2" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle84" data-target="#mySlider" data-slide-to="3" style="width: 15px; height: 15px; left: 60px; top: 15px; position: absolute; background: white"></div>
         <div class="Rectangle85" data-target="#mySlider" data-slide-to="4" style="width: 15px; height: 15px; left: 80px; top: 15px; position: absolute; background: white"></div>
    </div>

    </div>

    

  </section>


</div>

  

</div>



</div>
    

<div class="Latar3" style="width: 400px; height: 400px; left: -430px; top: -420px; position: relative">
  <img  style="width: 400px; height: 400px; left: 0px; top: 0px; position: absolute" src="../img/Latar3.png" />
  <div  style="width: 303px; height: 248px; left: 49px; top: 43px; position: absolute; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">“Segala sesuatu memiliki keindahan, tapi tidak semua orang melihatnya.”</div>
  <div  style="width: 303px; height: 58px; left: 49px; top: 320px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Confucius</div>
</div>

<section id="slider-latar3">
<div id="Slider2" class="carousel Slider" data-ride="carousel" class="slider2" style="width: 830px; height: 400px; left: -245px; top: -400px; margin-right: -25px; position: relative">
<div class="carousel-inner">
        <div class="carousel-item active">
          <img class="ASec02Latar2d6" style="width: 100%; height: 100%;" src="../img/Latar2.png" alt="1">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d7" style="width: 100%; height: 100%;" src="../img/Latar3.png" alt="2">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d8" style="width: 100%; height: 100%;" src="../img/Latar4.png" alt="3">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d9" style="width: 100%; height: 100%;" src="../img/Latar5.png" alt="4">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d10" style="width: 100%; height: 100%;" src="../img/Latar6.png" alt="5">
        </div>
      </div>
        <div class="Estetika" style="left: 27px; top: 39px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Estetika</div>
        <div class="LihatLebihBanyakProdukBatuHias" style="left: 27px; top: 96px; position: absolute; color: white; font-size: 20px; font-family: Bison; font-weight: 300; word-wrap: break-word">Lihat lebih banyak produk batu hias</div>
        <div class="ProdukTerkait" style="width: 242px; height: 27px; left: 31px; top: 278px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">14 Produk Terkait</div>
        <div class="Button" style="width: 252px; height: 52px; left: 27px; top: 313px; position: absolute">
            <div class="Rectangle80" style="width: 252px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
            <div class="LihatProdukBatuHias" style="left: 23px; top: 14px; position: absolute; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK BATU HIAS</div>
        </div>
  <div  class="Slider Slider-hover" style="width: 95px; height: 30px; left: 686px; top: 335px; position: absolute">
        <div class="Rectangle81" data-target="#Slider2" data-slide-to="0" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle82" data-target="#Slider2" data-slide-to="1" style="width: 15px; height: 15px; left: 20px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle83" data-target="#Slider2" data-slide-to="2" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle84" data-target="#Slider2" data-slide-to="3" style="width: 15px; height: 15px; left: 60px; top: 15px; position: absolute; background: white"></div>
         <div class="Rectangle85" data-target="#Slider2" data-slide-to="4" style="width: 15px; height: 15px; left: 80px; top: 15px; position: absolute; background: white"></div>
    </div>
</div>
</section>

<section id="slider-latar5">
<div id="Slider2" class="carousel Slider" data-ride="carousel" style="width: 400px; height: 826px; left: 430px; top:-800px; position: relative">
  <img class="ASec03Latar61" style="width: 400px; height: 826px; left: 0px; top: 0px; position: absolute" src="../img/Latar5.png" />
  <div class="Beragam" style="left: 116px; top: 39px; position: absolute; text-align: center; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Beragam</div>
  <div class="LihatLebihBanyakProdukBatuTempel" style="left: 70px; top: 96px; position: absolute; text-align: center; color: white; font-size: 20px; font-family: Bison; font-weight: 300; word-wrap: break-word">Lihat lebih banyak produk batu TEMPEL</div>
  <div class="ProdukTerkait" style="width: 242px; height: 27px; left: 79px; top: 691px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">20 Produk Terkait</div>
  <div class="Button" style="width: 270px; height: 52px; left: 65px; top: 726px; position: absolute">
    <div class="Rectangle80" style="width: 270px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
    <div class="LihatProdukBatuTempel" style="left: 23px; top: 14px; position: absolute; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK BATU TEMPEL</div>
  </div>
</div>
</section>

<div class="Group234" style="width: 400px; height: 400px; top: -1200px; left: -430px; position: relative">
  <img class="ASec03Latar41" style="width: 400px; height: 400px; left: 0px; top: 0px; position: absolute" src="../img/Latar6.png" />
  <div class="Alternatif" style="left: 27px; top: 39px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Alternatif</div>
  <div class="UntukDihamparDiTempatTinggalAnda" style="left: 27px; top: 96px; position: absolute; color: white; font-size: 20px; font-family: Bison; font-weight: 300; word-wrap: break-word">untuk dihampar di tempat tinggal anda</div>
  <div class="ProdukTerkait" style="width: 242px; height: 27px; left: 31px; top: 265px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">37 Produk Terkait</div>
  <div class="Group235" style="width: 285px; height: 52px; left: 27px; top: 300px; position: absolute">
    <div class="Rectangle80" style="width: 285px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
    <div class="LihatProdukBatuHampar" style="left: 24px; top: 13px; position: absolute; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK BATU HAMPAR</div>
  </div>
</div>

<div class="Group538" style="width: 400px; height: 400px; top: -1600px; position: relative">
  <img style="width: 400px; height: 400px; left: 0px; top: 0px; position: absolute" src="../img/Latar7.png" />
  <div style="width: 303px; height: 248px; left: 49px; top: 43px; position: absolute; text-align: center; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">“Keindahan<br/>pada suatu hal ada dalam pikiran yang merenungkannya.”</div>
  <div style="width: 303px; height: 58px; left: 49px; top: 320px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">David Hume</div>
</div>

<section id="slider-latar6">
<div class="carousel Slider" data-ride="carousel" id="Latar7" style="width: 615px; height: 400px; top: -1570px; left: -339px; position: relative">
<div class="carousel-inner">
        <div class="carousel-item active">
          <img class="ASec02Latar2d16" style="width: 100%; height: 100%;" src="../img/Latar8.png" alt="1">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d17" style="width: 100%; height: 100%;" src="../img/Latar3.png" alt="2">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d18" style="width: 100%; height: 100%;" src="../img/Latar9.png" alt="3">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d19" style="width: 100%; height: 100%;" src="../img/Latar5.png" alt="4">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d20" style="width: 100%; height: 100%;" src="../img/Latar6.png" alt="5">
        </div>
      </div>
  <div class="Terkini" style="left: 27px; top: 39px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Terkini</div>
  <div class="PeriksaProdukProdukTerbaru" style="left: 27px; top: 96px; position: absolute; color: white; font-size: 20px; font-family: Bison; font-weight: 300; word-wrap: break-word">PERIKSA PRODUK-PRODUK TERBARU</div>
  <div class="ProdukTerkait" style="width: 242px; height: 27px; left: 31px; top: 278px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">10 Produk Terkait</div>
  <div class="Button" style="width: 252px; height: 52px; left: 27px; top: 313px; position: absolute">
    <div class="Rectangle80" style="width: 252px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
    <div class="LihatProdukTerbaru" style="left: 23px; top: 14px; position: absolute; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK TERBARU</div>
  </div>
  <div class="Slider Slider-hover" style="width: 95px; height: 30px; left: 487px; top: 335px; position: absolute">
        <div class="Rectangle81" data-target="#Latar7" data-slide-to="0" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle82" data-target="#Latar7" data-slide-to="1" style="width: 15px; height: 15px; left: 20px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle83" data-target="#Latar7" data-slide-to="2" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle84" data-target="#Latar7" data-slide-to="3" style="width: 15px; height: 15px; left: 60px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle85" data-target="#Latar7" data-slide-to="4" style="width: 15px; height: 15px; left: 80px; top: 15px; position: absolute; background: white"></div>
  </div>
</div>

<section id="slider-latar8">
<div class="carousel Slider" data-ride="carousel" id="Latar8" style="width: 615px; height: 400px; top: -1969px; left: 330px; position: relative">
<div class="carousel-inner">
        <div class="carousel-item active">
          <img class="ASec02Latar2d11" style="width: 100%; height: 100%;" src="../img/Latar9.png" alt="1">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d12" style="width: 100%; height: 100%;" src="../img/Latar3.png" alt="2">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d13" style="width: 100%; height: 100%;" src="../img/Latar9.png" alt="3">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d14" style="width: 100%; height: 100%;" src="../img/Latar5.png" alt="4">
        </div>
        <div class="carousel-item">
          <img class="ASec02Latar2d15" style="width: 100%; height: 100%;" src="../img/Latar6.png" alt="5">
        </div>
      </div>
  <div class="SerbaBatu" style="left: 27px; top: 39px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Serba Batu</div>
  <div class="ProdukOrnamenBatuUntukKesanBerbeda" style="width: 541px; height: 35px; left: 27px; top: 101px; position: absolute; color: white; font-size: 20px; font-family: Bison; font-weight: 300; word-wrap: break-word">Produk ornamen batu untuk kesan berbeda</div>
  <div class="Button" style="width: 317px; height: 52px; left: 27px; top: 313px; position: absolute">
    <div class="Rectangle80" style="width: 317px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
    <div class="LihatProdukOrnamenBatu" style="left: 19px; top: 13px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK ORNAMEN BATU</div>
  </div>
  <div class="ProdukTerkait" style="width: 242px; height: 27px; left: 31px; top: 278px; position: absolute; color: white; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">31 Produk Terkait</div>
  <div class="Slider Slider-hover" style="width: 95px; height: 30px; left: 487px; top: 335px; position: absolute">
        <div class="Rectangle81" data-target="#Latar8" data-slide-to="0" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle82" data-target="#Latar8" data-slide-to="1" style="width: 15px; height: 15px; left: 20px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle83" data-target="#Latar8" data-slide-to="2" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
        <div class="Rectangle84" data-target="#Latar8" data-slide-to="3" style="width: 15px; height: 15px; left: 60px; top: 15px; position: absolute; background: white"></div>
         <div class="Rectangle85" data-target="#Latar8" data-slide-to="4" style="width: 15px; height: 15px; left: 80px; top: 15px; position: absolute; background: white"></div>
  </div>
</div>

</section>

</section>

<section id="penutup">
<div class="Sec05Cta" style="width: 1260px; height: 500px; left: 5px; top: -1945px; position: relative">
  <img class="ASec05Latar921" style="width: 1260px; height: 500px; left: 0px; top: 0px; position: absolute" src="../img/Latar10.png" />
  <div style="width: 1090px; left: 70px; top: 66px; position: absolute; text-align: center; color: white; font-size: 60px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Lihat Lebih Banyak Batu</div>
  <div style="width: 822px; height: 35px; left: 204px; top: 147px; position: absolute; text-align: center; color: white; font-size: 25px; font-family: Bison; font-weight: 300; word-wrap: break-word">AYO Jelajahi sekarang bersama batunesia!</div>
  <div class="Button" style="width: 174px; height: 52px; left: 519px; top: 383px; position: absolute">
    <div class="Rectangle80" style="width: 174px; height: 52px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
    <div class="LihatProduk" style="left: 24px; top: 14px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">LIHAT PRODUK</div>
  </div>
</div>
</section>


<footer>
<div class="Footer" style="width: 1920px; height: 243px; position: relative">
  <div class="Rectangle8" style="width: 1920px; height: 243px; left: 0px; top: 0px; position: absolute; background: #303030"></div>
  <div class="Group576" style="width: 407px; height: 40px; left: 757px; top: 143px; position: absolute">
    <a href="https://web.whatsapp.com/" class="ButtonWA clickable" style="width: 257px; height: 40px; left: 150px; top: 0px; position: absolute">
        <div class="Rectangle16" style="width: 257px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 30px"></div>
        <div class="InformasiLebihLanjut" style="width: 213px; left: 44px; top: 9px; position: absolute; color: white; font-size: 18px; font-family: Arial; font-weight: 700; word-wrap: break-word">Informasi Lebih Lanjut</div>
        <img class="LogoWa1" style="width: 20px; height: 20px; left: 12px; top: 10px; position: absolute" src="../img/LogoWA.png" />
    </a>
    
    <a href="https://www.linkedin.com/" class="ButtonLinkedin clickable" style="width: 40px; height: 40px; left: 100px; top: 0px; position: absolute">
        <div class="Ellipse33" style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 9999px"></div>
        <img class="LogoLinkedin1" style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute" src="../img/LinkedinLogo.png" />
    </a>

    <a href="https://www.tiktok.com/" class="ButtonTiktok clickable" style="width: 40px; height: 40px; left: 50px; top: 0px; position: absolute">
        <div class="Ellipse34" style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 9999px"></div>
        <img class="LogoTiktok1" style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute" src="../img/LogoTiktok.png" />
    </a>

    <a href="https://www.instagram.com/" class="ButtonIG clickable" style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute">
        <div class="Ellipse35" style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute; background: #06C195; border-radius: 9999px"></div>
        <img class="LogoIg1" style="width: 20px; height: 20px; left: 10px; top: 10px; position: absolute" src="../img/LogoIG.png" />
    </a>
</div>
  <div  style="width: 612px; left: 654px; top: 70px; position: absolute; text-align: center"><span style="color: white; font-size: 20px; font-family: Montserrat; font-weight: 700; word-wrap: break-word">© PT Lanskap Indonesia Ideal </span><span style="color: white; font-size: 20px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">2023.</span></div>
</div>      
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="../js/app.js"></script>

</body>
</html>




