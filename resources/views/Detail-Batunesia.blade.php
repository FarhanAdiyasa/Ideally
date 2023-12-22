<!DOCTYPE html>
<html lang="en">
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
    
    <style>
    .Group234 {
      width: 748px;
      height: 530px;
      position: relative;
      overflow: hidden;
    }

    .MaskGroup {
      width: 100%;
      height: 100%;
      position: absolute;
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .MaskGroup img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .Slider {
      width: 85.61px;
      height: 26.08px;
      left: 50%;
      transform: translateX(-50%);
      bottom: 10px;
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .Slider div {
      width: 13.52px;
      height: 13.04px;
      margin: 0 4px;
      background: white;
      transition: height 0.3s ease-in-out;
    }

    .Slider div:hover {
      height: 33.04px; /* Increase height on hover */
    }


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
            background: #fff; /* Add a background color for better visibility */            
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional: Add a shadow */
            overflow: hidden; /* Prevent image overflow */
            position: relative; /* Set position */
           
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


<Body>

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

<div class="Header" style="width: 1260px; height: 250px; position: relative">
  <img  style="width: 1260px; height: 250px; left: 0px; top: 0px; position: absolute" src="../img/headline.png" />
  <div  style="width: 775px; height: 141px; left: 70px; top: 41px; position: absolute; color: white; font-size: 60px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Pilih Yang Terbaik.</div>
  <div  style="width: 822px; height: 35px; left: 70px; top: 147px; position: absolute; color: white; font-size: 25px; font-family: Bison; font-weight: 300; word-wrap: break-word">KAMI TAWARKAN PRODUK TERBAIK DARI YANG TERBAIK UNTUK ANDA.</div>
</div>

<div class="Group234" style="left: -255px; top: 45px;">
  <div class="MaskGroup">
    <img class="SliderImage" src="{{ $selectedProduct['gambar_1'] }}" />
    <img class="SliderImage" src="{{ $selectedProduct['gambar_2'] }}" />
    <img class="SliderImage" src="{{ $selectedProduct['gambar_3'] }}" />
  </div>
  <div class="Slider">
    <div class="Rectangle81" onclick="changeSlide(0)"></div>
    <div class="Rectangle82" onclick="changeSlide(1)"></div>
    <div class="Rectangle83" onclick="changeSlide(2)"></div>
  </div>
</div>

<script>
  const maskGroup = document.querySelector('.MaskGroup');
  const sliderImages = document.querySelectorAll('.SliderImage');
  const sliderWidth = sliderImages[0].clientWidth;
  const sliderRectangles = document.querySelectorAll('.Slider div');

  let counter = 1;

  function changeSlide(index) {
    maskGroup.style.transform = `translateX(${-index * sliderWidth}px)`;
    counter = index + 1;
  }

  setInterval(() => {
    if (counter >= sliderImages.length) {
      counter = 0;
    }

    maskGroup.style.transform = `translateX(${-counter * sliderWidth}px)`;
    counter++;
  }, 6000); // Change slide every 6 seconds
</script>


<div class="Group235" style="width: 237px; height: 250px; position: relative">
  <div class="Rectangle75" style="width: 237px; height: 250px; left: 265px; top: -485px; position: absolute; background: #101624">
  <div  style="left: 30px; top: 30px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Deskripsi Produk</div>
  <div style="width: 177px; left: 30px; top: 77px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
            @if(isset($selectedProduct))
                {{ $selectedProduct->deskripsi_singkat }}
            @else
                Product details not found.
            @endif
        </div>
</div>


<div class="Group237" style="width: 237px; height: 250px; left: 265px;  top: -205px; position: relative ">
  <div class="Rectangle75" style="width: 237px; height: 250px; left: 0px; top: 0px; position: absolute; background: #101624"></div>
  <div class="Penempatan" style="left: 30px; top: 30px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Penempatan</div>
  <div  style="width: 177px; left: 30px; top: 77px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
       @if(isset($selectedProduct))
                {{ $selectedProduct->satuan }}
            @else
                Product details not found.
            @endif
          </div>
</div>

<div class="Group236" style="width: 237px; height: 530px; top : -735px; left: 530px; position: relative">
  <div class="Rectangle75" style="width: 237px; height: 530px; left: 0px; top: 0px; position: absolute; background: #101624"></div>
  <div class="DaftarHarga" style="left: 30px; top: 30px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Daftar Harga</div>
  <div class="Button" style="width: 188.81px; height: 71px; left: 30px; top: 246px; position: absolute">
    <div class="Rectangle80" style="width: 188.81px; height: 50px; left: 0px; top: 21px; position: absolute; border: 3px white solid"></div>
    <div class="Rp100000" style="width: 118.35px; height: 33.75px; left: 35px; top: 29px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rp 100,000</div>
    <div class="10Satuan" style="left: 0px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">1-10 satuan</div>
  </div>
  <div class="Button" style="width: 188.81px; height: 71px; left: 30px; top: 337px; position: absolute">
    <div class="Rectangle80" style="width: 188.81px; height: 50px; left: 0px; top: 21px; position: absolute; border: 3px white solid"></div>
    <div class="Rp90000" style="width: 118.35px; height: 33.75px; left: 35px; top: 29px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rp 90,000</div>
    <div class="30Satuan" style="left: 0px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">11-30 satuan</div>
  </div>
  <div class="Button" style="width: 188.81px; height: 71px; left: 30px; top: 428px; position: absolute">
    <div class="Rectangle80" style="width: 188.81px; height: 50px; left: 0px; top: 21px; position: absolute; border: 3px white solid"></div>
    <div class="Rp750000" style="width: 118.35px; height: 33.75px; left: 35px; top: 29px; position: absolute; text-align: center; color: white; font-size: 16px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Rp 750,000</div>
    <div class="Satuan" style="left: 0px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">31+ satuan</div>
  </div>
</div>



</div>

<div class="Group230" style="width: 492px; height: 250px; top: -170px; left: -385px; position: relative">
  <img class="CSec02Latar1" style="width: 492px; height: 250px; left: 0px; top: 0px; position: absolute" src="../img/back.png" />
  <div class="BatuKoralPutihEngkel" style="width: 432px; left: 30px; top: 29px; position: absolute; color: white; font-size: 30px; font-family: Poppins; font-weight: 700; word-wrap: break-word">
  @if(isset($selectedProduct))
                {{ $selectedProduct->nama_produk }}
            @else
                Product details not found.
            @endif</div>
  <div class="KategoriWarnaDimensi" style="left: 30px; top: 140px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Kategori<br/>Warna<br/>Dimensi</div>
  <div class="BatuHiasAbuAbuD30Cm" style="left: 126px; top: 140px; position: absolute; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word">            @if(isset($selectedProduct))
            {{ $selectedProduct->kategori }}
            @else
                Product details not found.
            @endif<br/>

            @if(isset($selectedProduct))
                {{ $selectedProduct->warna }}
            @else
                Product details not found.
            @endif<br/>    

            @if(isset($selectedProduct))
                {{ $selectedProduct->hpp }}
            @else
                Product details not found.
            @endif
</div>
</div>


<div class="Group231" style="width: 748px; height: 250px; left: 300px; top: -400px; position: relative">
  <div class="MaskGroup" style="width: 748px; height: 250px; left: 0px; top: 0px; position: absolute">
    <div class="Preview" style="width: 748px; height: 250px; left: 0px; top: 0px; position: absolute;"></div>
    <div class="Rectangle86" style="width: 800px; height: 260px; left: -34.25px; top: -27.50px; position: absolute; background: #F35453"></div>
  </div>
  
  <div class="TambahKeKeranjang" style="left: 37px; top: 30px; position: absolute; color: white; font-size: 30px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Tambah<br/>Ke Keranjang</div>
  <div class="Group481" style="width: 323.88px; height: 77.27px; left: 406px; top: 30px; position: absolute">
  
    <div class="Button" onclick="updateQuantity('-')" style="width: 56.27px; height: 56.27px; left: 0px; top: 21px; position: absolute; cursor: pointer;">
      <div class="Rectangle80" style="width: 56.27px; height: 56.27px; left: 0px; top: 0px; position: absolute; background: white"></div>
      <div style="left: 20.61px; top: 8px; position: absolute; text-align: center; color: #F35453; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">-</div>
    </div>

    <div class="Button" style="width: 112.54px; height: 56.27px; left: 69px; top: 21px; position: absolute">
        <div class="Rectangle80" style="width: 112.54px; height: 56.27px; left: 0px; top: 0px; position: absolute; border: 3px white solid"></div>
        <div id="quantity" style="left: 48px; top: 8px; position: absolute; text-align: center; color: white; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">1</div>
    </div>

      <div class="Button" onclick="updateQuantity('+')" style="width: 56.27px; height: 56.27px; left: 197px; top: 21px; position: absolute; cursor: pointer;">
      <div class="Rectangle80" style="width: 56.27px; height: 56.27px; left: 0px; top: 0px; position: absolute; background: white"></div>
      <div style="left: 20px; top: 8px; position: absolute; text-align: center; color: #F35453; font-size: 25px; font-family: Poppins; font-weight: 700; word-wrap: break-word">+</div>
    </div>
    <a href="{{ route('tambahKeKeranjang', ['id_batu' => $selectedProduct->id_batu]) }}">Tambah Ke Keranjang</a>
    {{-- <form action="{{ route('tambahKeKeranjang', ['id_batu' => $selectedProduct->id_batu]) }}" method="POST">
      @csrf 
      <button type="submit">
          <img src="{{ asset('path_to_your_cart_image.png') }}" alt="Keranjang" style="width: 20px; height: 20px;">
          Tambah ke Keranjang
      </button>gasaas
  </form> --}}
  
  </div>

    <div class="VolumePembelian" style="left: 0px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Volume Pembelian</div>
  </div>

  <div class="Button" style="width: 324px; height: 77px; left: 406px; top: 144px; position: absolute">
  <div class="Rectangle80" style="width: 323px; height: 56px; left: 1px; top: 21px; position: absolute; border: 3px white solid"></div>
  <div class="Rp1000000" id="totalPrice" style="left: 104px; top: 35px; position: absolute; text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 700; word-wrap: break-word"></div>
  <div class="TotalHarga" style="left: 0px; top: 0px; position: absolute; color: white; font-size: 14px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Total Harga</div>
</div>

</div>

<script>
// Assuming you have a variable 'productPrice' representing the price of the product
var productPrice = <?= $selectedProduct->{'harga_b2I_31+_unit'} ?? 0; ?>; // Replace this with your actual logic to fetch product price

// JavaScript function to update quantity
function updateQuantity(operation) {
  var quantityElement = document.getElementById('quantity');
  var currentQuantity = parseInt(quantityElement.innerText);

  if (operation === '-' && currentQuantity > 1) {
    quantityElement.innerText = currentQuantity - 1;
  } else if (operation === '+') {
    quantityElement.innerText = currentQuantity + 1;
  }

  updateTotalPrice();
}

// JavaScript function to update total price
function updateTotalPrice() {
  var quantity = parseInt(document.getElementById('quantity').innerText);
  var totalPriceElement = document.getElementById('totalPrice');

  // Calculate total price
  var totalPrice = productPrice * quantity;

  // Update the total price element
  totalPriceElement.innerText = 'Rp ' + totalPrice.toLocaleString(); // Format the price as needed
}

// Function to simulate adding to cart (replace this with actual cart logic)
function addToCart() {
  updateTotalPrice(); // Make sure the total price is up-to-date before adding to the cart
  // Add to cart logic here
}

</script>


<div class="Group474" style="width: 236px; height: 250px; left: -512px; top: -370px; position: relative">
  <div class="Rectangle101" style="width: 236px; height: 250px; left: 0px; top: 0px; position: absolute; background: #101624"></div>
  <div class="ProdukTerkait" style="width: 144px; height: 50.38px; left: 32px; top: 10.46px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Produk Terkait</div>

  <div class="Slider" style="width: 55px; height: 30px; left: 158px; top: 197px; position: absolute">
    <div class="Rectangle83" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
    <div class="Rectangle84" style="width: 15px; height: 30px; left: 20px; top: 0px; position: absolute; background: white"></div>
    <div class="Rectangle85" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
  </div>
</div>

<!--product card terkait-->
<div style="width: 1004px; height: 1910px; left: 600px; top: 1438px; position: absolute">
  <!--card-product-->
  <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap; gap: 26.5px;">
      @forelse ($batunesias1 as $batunesia)
      <a href="{{ route('Detail-Batunesia', ['id_batu' => $batunesia->id_batu]) }}" class="product-card" style="width: calc(25% - 20px);">
          <!-- Konten Card Produk -->
          <div class="product-details">
              <div class="product-image">
                  <img src="{{ $batunesia->gambar_1 }}" alt="Product Image">
              </div>
              <div class="rating">
                  <div class="rating-border"></div>
                  <div class="rating-number">0.0</div>
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
  <!--end card product terkait-->
</div>

<!--product card lainnya-->
<div style="width: 1004px; height: 1910px; left: 600px; top: 1723px; position: absolute">
  <!--card-product-->
  <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap; gap: 26.5px;">
      @forelse ($batunesias2 as $batunesia)
      <a href="{{ route('Detail-Batunesia', ['id_batu' => $batunesia->id_batu]) }}" class="product-card" style="width: calc(25% - 20px);">
          <!-- Konten Card Produk -->
          <div class="product-details">
              <div class="product-image">
                  <img src="{{ $batunesia->gambar_1 }}" alt="Product Image">
              </div>
              <div class="rating">
                  <div class="rating-border"></div>
                  <div class="rating-number">0.0</div>
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
  <!--end card product lainnya-->
</div>

<!--product card rekomendasi-->
<div style="width: 1004px; height: 1910px; left: 600px; top: 2007px; position: absolute">
  <!--card-product-->
  <div style="width: 100%; box-sizing: border-box; display: flex; flex-wrap: wrap; gap: 26.5px;">
      @forelse ($batunesias3 as $batunesia)
      <a href="{{ route('Detail-Batunesia', ['id_batu' => $batunesia->id_batu]) }}" class="product-card" style="width: calc(25% - 20px);">
          <!-- Konten Card Produk -->
          <div class="product-details">
              <div class="product-image">
                  <img src="{{ $batunesia->gambar_1 }}" alt="Product Image">
              </div>
              <div class="rating">
                  <div class="rating-border"></div>
                  <div class="rating-number">0.0</div>
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
  <!--end card product rekomendasi-->
</div>




<div class="Group474" style="width: 236px; height: 250px; left: -512px; top: -335px; position: relative">
  <div class="Rectangle101" style="width: 236px; height: 250px; left: 0px; top: 0px; position: absolute; background: #101624"></div>
  <div class="ProdukLainnya" style="width: 144px; height: 50.38px; left: 32px; top: 10.46px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Produk Lainnya</div>



  <div class="Slider" style="width: 55px; height: 30px; left: 158px; top: 197px; position: absolute">
    <div class="Rectangle83" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
    <div class="Rectangle84" style="width: 15px; height: 30px; left: 20px; top: 0px; position: absolute; background: white"></div>
    <div class="Rectangle85" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
  </div>
</div>

<div class="Group474" style="width: 236px; height: 250px; left: -512px; top: -300px; position: relative">
  <div class="Rectangle101" style="width: 236px; height: 250px; left: 0px; top: 0px; position: absolute; background: #101624"></div>
  <div class="ProdukRekomEndasi" style="width: 162px; height: 148px; left: 32px; top: 10px; position: absolute; color: white; font-size: 35px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Produk Rekom-endasi</div>



  <div class="Slider" style="width: 55px; height: 30px; left: 158px; top: 197px; position: absolute">
    <div class="Rectangle83" style="width: 15px; height: 15px; left: 0px; top: 15px; position: absolute; background: white"></div>
    <div class="Rectangle84" style="width: 15px; height: 30px; left: 20px; top: 0px; position: absolute; background: white"></div>
    <div class="Rectangle85" style="width: 15px; height: 15px; left: 40px; top: 15px; position: absolute; background: white"></div>
  </div>
</div>



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




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="../js/app.js"></script>
</Body>
<html>
  
