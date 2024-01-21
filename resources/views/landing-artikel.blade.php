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
  <title>Ideally - Portal Edukasi</title>

  <!--Stylesheet -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js']);
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('/css/landing-artikel-style.css')}}"/>
  <link rel="stylesheet" href="{{asset('/css/artikel-pagination-style.css')}}"/>
  <link rel="stylesheet" href="{{asset('/css/navbar-style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/header-artikel-style.css')}}">
  <link rel="stylesheet" href="{{asset('/css/footer-artikel-style.css')}}">


  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Quicksand:wght@600&display=swap"
    rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>


<body>
    {{-- Navbar Section --}}
    @include('partials.navbar')
    {{-- End of Navbar Section --}}
    
    {{-- Page Header --}}
      @include('partials.artikel-header-noButton')
    {{-- End of Page Header --}}

  <!-- Main Content -->
  <div class="main-content-container">

    <!-- Category Bar -->
    <p class="mt-4" style="color: black; font-size: 20px; font-weight: 700;">Kategori Artikel</p>
    <p style="color: #727272">Pengetahuan lanskap terbaik: pilih dari kategori artikel Ideally untuk transformasi luar ruangan yang mengagumkan.</p>

    <div class="d-flex" style="white-space: nowrap;">
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn" onclick="show('Desain-Taman')">Desain</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn" onclick="show('Konstruksi-Taman')">Konstruksi</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn" onclick="show('Pemeliharaan-Taman')">Pemeliharaan</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn" onclick="show('Tanaman')">Tanaman</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn" onclick="show('Material')">Material</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn" onclick="show('Desain-Taman')">Bahan Pelengkap</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Lainnya</button>
    </div>

    <div class="category-content" id="category-content">
      
    </div>
    <!-- End of Category Bar -->

    <!-- New Article -->
    <div class="artikel-baru">
      <p style="color: black; font-size: 20px; font-weight: 700;">Artikel Terkini: Menggali Informasi Terbaru</p>
      <p style="color: #727272; margin-bottom: -20px; margin-top:-5px;">Pengaplikasian prinsip arsitektur lanskap dalam pembangunan ruang terbuka.</p>
      <div id="carousel-artikel-baru" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($articles_terbaru->chunk(4) as $key => $chunk)
              <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                  <div class="cards-wrapper">
                      @foreach ($chunk as $article)
                          <div class="card border-0 article-card" style="width: 18rem;" >
                            <div class="gambar-card-artikel-baru">
                              <!-- <img src="{{asset('storage/' .$article->gambar_artikel)}}" -->
                              <img src="https://via.placeholder.com/362x185"
                                class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; ">
                            </div>
                            <div class="card-body">
                              <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><h5 class="card-title" style="font-weight: 700;">{{$article->judul_artikel}}
                              </h5></a>
                              <p class="card-text" style="font-size: small; color: #999999;">{{$article->penulis_artikel}}</p>
            
                              <div class="d-flex">
                                <div class="additional-text-container rounded-pill d-inline-block" >
                                  <div class="keterangan-additional-text-container">
                                    <img class="info-card-category-icon" src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                      style="width: 12px; height: 12px;">
                                    <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                                  </div>
                                </div>
                                <div class="additional-text-container rounded-pill d-inline-block"
                                  style="background-color: #06C195; color: white;">
                                  <div class="keterangan-additional-text-container">
                                    <img class="info-card-category-icon" src="{{asset('icons/comment-category.svg')}}" alt="Rate Icon"
                                      style="width: 12px; height: 12px;">
                                    <span class="info-card-category" style="font-size: 12px; font-weight: 700;">{{$article->pengunjung}}</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      @endforeach
                  </div>
              </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-artikel-baru"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-artikel-baru"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End of New Article -->

    <!-- Komentar -->
    <p style="color: black; font-size: 20px; font-weight: 700; padding-top: 4%; padding-bottom:1%">Suarakan Perspektif Anda: Komentar yang Terpilih</p>
    <div class="komentar">
      <div id="carousel-komentar" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($komentars->chunk(3) as $key => $chunk)
              <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                  <div class="cards-wrapper">
                      @foreach ($chunk as $komentar)
                      <div class="card card-komentar-pilihan border-0" style="width: 25rem; margin-right: 5px; " >
                        <div class="card-body komentar-text-container" >
                          <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                          <span class="komentar-text" style="font-size: 14px; margin-bottom: 10px; height:33%;">{{$komentar->isi_komentar}}</span>
                          <div style="padding-bottom: 40px;"></div>
                          <div id="popover-{{$komentar->id_komentar}}" data-popover-id="{{$komentar->id_komentar}}" class="rounded-pill d-inline-block" style="color: white; background-color: black;" data-popover-content-komentar-pilihan="1">
                              <div class="keterangan-additional-text-container">
                                  <img class="info-card-category-icon" src="{{asset('icons/comment-category.svg')}}" alt="Rate Icon" style="width: 12px; height: 12px;">
                                  <span class="info-card-category" style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">
                                      {{ $komentar->createdBy->firstname }} {{ $komentar->createdBy->lastname }}
                                  </span>
                              </div>
                          </div>
                          <div id="popover-{{$komentar->id_komentar}}-content" hidden data-name="popover-content-komentar-pilihan" data-popover-id="{{$komentar->id_komentar}}">
                              <div class="card-body popover-nama-komentar" style="">
                                  <div class="d-flex align-items-center">
                                      <div class="rounded-circle mr-3 gambar-popover" style="width: 75px; height: 75px; overflow: hidden; ">
                                          <img src="https://via.placeholder.com/75" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;" alt="...">
                                      </div>
                                      <div>
                                          <span class="card-title nama-penulis-custom">{{ $komentar->createdBy->firstname }} {{ $komentar->createdBy->lastname }}</span>
                                          <p class="card-text nama-kerja-custom">Drafter Lanskap</p>
                                      </div>
                                  </div>
                                  <p class="biografi-penulis-custom">Laki-laki; asal Kota Jakarta Barat, DKI Jakarta; bergabung sejak 04 Juni 2023; sebanyak 120 artikel telah ditulis.</p>
                              </div>
                          </div>

                          <!-- Separator -->
                          <hr style="border-top: 3px solid grey; ">
                          <a href="/portal-edukasi/baca/{{optional($komentar->artikel)->slug}}" class="hpLink"><span style="font-size: 14px; font-weight: 700; color: #06C195;">{{ optional($komentar->artikel)->judul_artikel }}</span></a>
                        </div>
                      </div>
                      @endforeach
                  </div>
              </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-komentar" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-komentar" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End of Komentar -->

    <!-- Most Visited Article -->
    <div class="most-visited-artikel">
      <p style="color: black; font-size: 20px; font-weight: 700;">Terfavorit dan Terbukti: Artikel Paling Banyak Diklik</p>
      <p style="color: #727272; margin-bottom: -25px; margin-top:-10px;">Top Hits: maksimalkan wawasan dengan artikel paling banyak dikunjungi. </p>
      <div id="carousel-most-visited-artikel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($articles_terpopuler->chunk(4) as $key => $chunk)
          <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
              <div class="cards-wrapper">
                  @foreach ($chunk as $article)
                      <div class="card border-0 article-card" style="width: 18rem;">
                        <div class="gambar-card-artikel-baru">
                          <!-- <img src="{{asset('storage/' .$article->gambar_artikel)}}" -->
                          <img src="https://via.placeholder.com/362x185"
                            class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                          <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><h5 class="card-title" style="font-weight: 700;">{{$article->judul_artikel}}
                          </h5></a>
                          <p class="card-text" style="font-size: small; color: #999999;">{{$article->penulis_artikel}}</p>
        
                          <div class="d-flex">
                            <div class="additional-text-container rounded-pill d-inline-block">
                              <div class="keterangan-additional-text-container">
                                <img class="info-card-category-icon" src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                  style="width: 12px; height: 12px;">
                                <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                              </div>
                            </div>
                            <div class="additional-text-container rounded-pill d-inline-block"
                              style="background-color: #06C195; color: white;">
                              <div class="keterangan-additional-text-container">
                                <img class="info-card-category-icon" src="{{asset('icons/comment-category.svg')}}" alt="Rate Icon"
                                  style="width: 12px; height: 12px;">
                                <span class="info-card-category" style="font-size: 12px; font-weight: 700;">{{$article->pengunjung}}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endforeach
              </div>
          </div>
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-most-visited-artikel"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-most-visited-artikel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End of Most Visited Article -->

    <!-- Dukungan Beliau -->
    <p style="color: black; font-size: 20px; font-weight: 700; padding-top: 4%;">Dukungan Beliau</p>
    <div class="komentar">
      <div id="carousel-dukungan-beliau" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper" style="padding-bottom: 2%;">
              <div class="card border-0" style="width: 65%; margin-right: 1%; margin-left: 7%;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <p style="text-align:justify;"><span style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit.
                      Morbi non risus at nibh fringilla dapibus. Orci varius natoque penatibus et magnis dis parturient
                      montes, nascetur
                      ridiculus mus. Etiam consequat urna et lacus scelerisque, a elementum felis convallis. Aenean
                      lobortis velit ac
                      maximus fermentum. Vivamus enim risus, tincidunt at cursus id, fringilla at nunc. Donec ultrices
                      elit scelerisque
                      urna bibendum fermentum. Sed vehicula ante eget efficitur convallis. Pellentesque habitant morbi
                      tristique senectus
                      et netus et malesuada fames ac turpis egestas.</span></p>
                  <div style="padding-bottom: 30px;"></div>
                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; width: 50%;">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Simak Artikel Selengkapnya</span>


                </div>
              </div>
              <div class="card border-0" style="width: 35%; margin-right: 7%;">

                <div class="card-body text-center">

                  <div class="position-relative" style="margin-top: 25%;">

                    <img src="{{asset('/img/img_dukungan_beliau.png')}}" class="rounded-circle" style="width: 220px; height: 220px;"
                      alt="Foto Dukungan Beliau">

                    <div class="position-relative top-0 start-50 translate-middle-x mt-4" style="padding-top: 5%;">
                      <div class="h5 mb-2" style="font-weight: 700;">Frederick Law Olmsted</div>
                      <div class="text-muted">Bapak Lanskap Dunia</div>
                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper" style="padding-bottom: 2%;">
              <div class="card border-0" style="width: 65%; margin-right: 1%; margin-left: 7%;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <p style="text-align:justify;"><span style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit.
                      Morbi non risus at nibh fringilla dapibus. Orci varius natoque penatibus et magnis dis parturient
                      montes, nascetur
                      ridiculus mus. Etiam consequat urna et lacus scelerisque, a elementum felis convallis. Aenean
                      lobortis velit ac
                      maximus fermentum. Vivamus enim risus, tincidunt at cursus id, fringilla at nunc. Donec ultrices
                      elit scelerisque
                      urna bibendum fermentum. Sed vehicula ante eget efficitur convallis. Pellentesque habitant morbi
                      tristique senectus
                      et netus et malesuada fames ac turpis egestas.</span></p>
                  <div style="padding-bottom: 30px;"></div>
                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; width: 50%;">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Simak Artikel Selengkapnya</span>


                </div>
              </div>
              <div class="card border-0" style="width: 35%; margin-right: 7%;">

                <div class="card-body text-center">

                  <div class="position-relative" style="margin-top: 25%;">

                    <img src="{{asset('img/img_dukungan_beliau.png')}}" class="rounded-circle" style="width: 220px; height: 220px;"
                      alt="Foto Dukungan Beliau">

                    <div class="position-relative top-0 start-50 translate-middle-x mt-4" style="padding-top: 5%;">
                      <div class="h5 mb-2" style="font-weight: 700;">Frederick Law Olmsted</div>
                      <div class="text-muted">Bapak Lanskap Dunia</div>
                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper" style="padding-bottom: 2%;">
              <div class="card border-0" style="width: 65%; margin-right: 1%; margin-left: 7%;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <p style="text-align:justify;"><span style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit.
                      Morbi non risus at nibh fringilla dapibus. Orci varius natoque penatibus et magnis dis parturient
                      montes, nascetur
                      ridiculus mus. Etiam consequat urna et lacus scelerisque, a elementum felis convallis. Aenean
                      lobortis velit ac
                      maximus fermentum. Vivamus enim risus, tincidunt at cursus id, fringilla at nunc. Donec ultrices
                      elit scelerisque
                      urna bibendum fermentum. Sed vehicula ante eget efficitur convallis. Pellentesque habitant morbi
                      tristique senectus
                      et netus et malesuada fames ac turpis egestas.</span></p>
                  <div style="padding-bottom: 30px;"></div>
                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; width: 50%;">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Simak Artikel Selengkapnya</span>


                </div>
              </div>
              <div class="card border-0" style="width: 35%; margin-right: 7%;">

                <div class="card-body text-center">

                  <div class="position-relative" style="margin-top: 25%;">

                    <img src="{{asset('img/img_dukungan_beliau.png')}}" class="rounded-circle" style="width: 220px; height: 220px;"
                      alt="Foto Dukungan Beliau">

                    <div class="position-relative top-0 start-50 translate-middle-x mt-4" style="padding-top: 5%;">
                      <div class="h5 mb-2" style="font-weight: 700;">Frederick Law Olmsted</div>
                      <div class="text-muted">Bapak Lanskap Dunia</div>
                    </div>

                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-dukungan-beliau"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-dukungan-beliau"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End of Dukungan Beliau -->

    <!-- Call To Action -->
    <div class="container CTA" style="padding-top: 10%;">

      <div class="row align-items-center">
        <div class="col-md-5">
          <img src="{{asset('/img/img_cta.png')}}" class="img-fluid rounded-4" alt="Foto CTA">
        </div>

        <div class="col-md-7 text-center text-md-start">

          <h2 style="font-weight: 700;">Ayo Bergabung <span style="color: #06C195;">Menjadi Penulis</span> di Portal
            Edukasi Ideally Indonesia!</h2>

          <p style="font-size: 16px; color: #727272;">
            Peran Penulis di Portal Edukasi Ideally Indonesia memiliki beberapa kelebihan
          </p>

          <ul class="list-unstyled" style="font-size: 16px; color: #727272;">
            <li style="margin-bottom: 15px;">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg " style="color: #727272;">
                <circle cx="5" cy="5" r="5" />
              </svg>
              Artikel berpotensi dibaca oleh akademisi, komunitas, media, pengusaha, dan pemerintah.
            </li>
            <li style="margin-bottom: 15px;">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg " style="color: #727272;">
                <circle cx="5" cy="5" r="5" />
              </svg>
              Menjadi media untuk menyimpan dan menampilkan hasil pemikiran dan penulisan pribadi.
            </li>
            <li style="margin-bottom: 15px;">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg " style="color: #727272;">
                <circle cx="5" cy="5" r="5" />
              </svg>
              Berpotensi mendapat komisi pemasaran dari Ideally untuk artikel dengan performa sangat baik.
            </li>
          </ul>


          <a href="https://api.whatsapp.com/send?phone=6282113704008" target="_blank" class="btn btn-lg rounded-pill"
            style="background-color: #06C195; color: white; font-size: 16px; font-weight: 700;  white-space:nowrap;">Informasi
            Lebih Lanjut</a>



        </div>

      </div>

    </div>
    <!-- End of Call To Action -->

  </div>
  <!-- End of Main Content -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"setActiveButton
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>    
    <script>

    function show(kategori) {
        $.get("{{ url('/home/show') }}/" + kategori, {}, function(data, status) {
            $("#category-content").html(data);
            setActiveButton(); // Ensure setActiveButton is called after content is updated
        });
    }
      show('Desain-Taman')


    function getKategori() {
        let htmlContent = $('.category-portaledukasi-btn-jelajahi').html();
        let modifiedContent = htmlContent.replace('Jelajahi Artikel ', '').replace(' !','').replace(/\s+/g, '').replace('Taman', '');
        return modifiedContent;
    }

    function setActiveButton() {
        let kategori = getKategori();
        $('.category-portaledukasi-btn').removeClass('clicked');
        $(`.category-portaledukasi-btn:contains('${kategori}')`).addClass('clicked');
    }
    </script>
    <script>
        $(document).ready(function() {
              $('.card-komentar-pilihan').each(function() {
                var $this = $(this);
                var popoverContent = $this.find('[data-name="popover-content-komentar-pilihan"]').html();
                
                var options = {
                    trigger: 'manual',
                    html: true,
                    content: popoverContent
                };

                $this.popover(options)
                    .on("mouseenter", function () {
                        var _this = this;
                        $this.popover("show");
                        $(".popover").on("mouseleave", function () {
                            $(_this).popover('hide');
                        });
                    }).on("mouseleave", function () {
                        var _this = this;
                        setTimeout(function () {
                            if (!$(".popover:hover").length) {
                                $(_this).popover("hide");
                            }
                        }, 300);
                    });
            });
        });
    </script>
  <!-- Footer -->
    @include('partials.artikel-footer')
</body>

</html>