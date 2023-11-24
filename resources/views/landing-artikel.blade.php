<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ideally - Portal Edukasi</title>

  <!--Stylesheet -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/navbar-style.css" rel="stylesheet">

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
    @include('layouts.navbar')
    {{-- End of Navbar Section --}}
    
    {{-- Page Header --}}
      @include('layouts.artikel-header')
    {{-- End of Page Header --}}

  <!-- Main Content -->
  <div class="main-content-container">

    <!-- Category Bar -->
    <p style="color: black; font-size: 20px; font-weight: 700;">Lorem ipsum dolor sit amet</p>
    <p style="color: #727272">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
      consectetur adipiscing elit.</p>

    <div class="d-flex">
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Desain</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Konstruksi</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Pemeliharaan</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Tanaman</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Material</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Bahan Pelengkap</button>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn">Lainnya</button>
    </div>

    <div class="category-content">
      <p style="color: black; font-size: 20px; font-weight: 700;">Lorem ipsum dolor sit amet</p>
      <p style="color: #727272">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh
        fringilla dapibus. Orci varius natoque
        penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam consequat urna et lacus scelerisque, a
        elementum felis convallis. Aenean lobortis velit ac maximus fermentum. Vivamus enim risus, tincidunt at cursus
        id,
        fringilla at nunc.</p>
      <button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn-jelajahi">Jelajahi Artikel Desain
        Taman!</button>
      <div id="carousel-category-content" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-category">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-category" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-category-content"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-category-content"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End of Category Bar -->

    <!-- New Article -->
    <div class="artikel-baru">
      <p style="color: black; font-size: 20px; font-weight: 700;">Artikel Terbaru</p>
      <p style="color: #727272; margin-bottom: -15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <div id="carousel-artikel-baru" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
    <p style="color: black; font-size: 20px; font-weight: 700; padding-top: 4%;">Komentar Pilihan</p>
    <div class="komentar">
      <div id="carousel-komentar" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper" style="padding-bottom: 2%;">
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue <b>sed porta ullamcorper</b>, erat leo facilisis dolor, vel euismod
                    velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue <b>sed porta ullamcorper</b>, erat leo facilisis dolor, vel euismod
                    velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue <b>sed porta ullamcorper</b>, erat leo facilisis dolor, vel euismod
                    velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue <b>sed porta ullamcorper</b>, erat leo facilisis dolor, vel euismod
                    velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue sed porta ullamcorper, erat leo facilisis dolor, vel euismod velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue sed porta ullamcorper, erat leo facilisis dolor, vel euismod velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue sed porta ullamcorper, erat leo facilisis dolor, vel euismod velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue sed porta ullamcorper, erat leo facilisis dolor, vel euismod velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
              <div class="card border-0" style="width: 25rem; margin-right: 5px;">
                <div class="card-body">
                  <h6 style="color: black; font-size: 90px; font-family: Montserrat; font-weight: 700;">“</h6>
                  <span style="font-size: 14px; margin-bottom: 10px;">Nunc ut pharetra eros, quis cursus nulla.
                    Suspendisse ut vehicula
                    risus. Nulla hendrerit, augue sed porta ullamcorper, erat leo facilisis dolor, vel euismod velit
                    diam id nisi. Nunc
                    ut pharetra eros, quis cursus nulla. Suspendisse</span>

                  <div style="padding-bottom: 50px;"></div>
                  <div class="rounded-pill d-inline-block" style="color: white; background-color: black;">
                    <div class="keterangan-additional-text-container">
                      <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                        style="width: 12px; height: 12px;"> <span class="info-card-category"
                        style="font-size: 12px; font-weight: 700; padding-left: 5px; padding-right: 5px;">Azis
                        Machpudin</span>
                    </div>
                  </div>

                  <!-- Separator -->
                  <hr style="border-top: 3px solid grey; ">
                  <span style="font-size: 14px; font-weight: 700; color: #06C195;">Lorem ipsum dolor sit amet,
                    consectetur
                    adipiscing
                    elit. dolor sit
                    amet, consectetur adipiscing elit.</span>

                </div>
              </div>
            </div>
          </div>
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
      <p style="color: black; font-size: 20px; font-weight: 700;">Artikel Paling Banyak Dikunjungi</p>
      <p style="color: #727272; margin-bottom: -15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <div id="carousel-most-visited-artikel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border-0" style="width: 18rem;">
                <div class="gambar-card-artikel-baru">
                  <img src="./img/placeholder-category-card.png"
                    class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                  <h5 class="card-title" style="font-weight: 700;">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                  </h5>
                  <p class="card-text" style="font-size: small; color: #999999;">Fabian Khalaf S</p>

                  <div class="d-flex">
                    <div class="additional-text-container rounded-pill d-inline-block">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                      </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                      style="background-color: #06C195; color: white;">
                      <div class="keterangan-additional-text-container">
                        <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                          style="width: 12px; height: 12px;">
                        <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

                    <img src="./img/img_dukungan_beliau.png" class="rounded-circle" style="width: 220px; height: 220px;"
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

                    <img src="./img/img_dukungan_beliau.png" class="rounded-circle" style="width: 220px; height: 220px;"
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

                    <img src="./img/img_dukungan_beliau.png" class="rounded-circle" style="width: 220px; height: 220px;"
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
          <img src="./img/img_cta.png" class="img-fluid rounded-4" alt="Foto CTA">
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


          <a href="#" class="btn btn-lg rounded-pill"
            style="background-color: #06C195; color: white; font-size: 16px; font-weight: 700; width: 40%;">Informasi
            Lebih Lanjut</a>



        </div>

      </div>

    </div>
    <!-- End of Call To Action -->

  </div>
  <!-- End of Main Content -->

  @include('layouts.artikel-footer')

  <!-- Javascript -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('.dropdown-item').hover(function () {

      var imgSrc = $(this).data('img');

      $('#dropdown-img').attr('src', imgSrc);

    });
  </script>
</body>

</html>