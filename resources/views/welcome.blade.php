<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Ideally</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arial%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand%3A700"/>
  @vite(['resources/sass/app.scss', 'resources/js/app.js']);
  
  <link rel="stylesheet" href="/css/style.css"/>
</head>
<body>
    {{-- Navbar Section --}}
    <nav>
        <div class="nvr navbar-expand-lg">
          <div class="row">
            <div class="col">
              <div class="logo-navbar">
                <a href="#">
                    <img src="/assets/logo-ideally-bsN.png"/>
                </a>
              </div>
            </div>
            <div class="col-md-auto">
              <div class="navigation">
                <ul class="item">
                  <li>
                    <a class="nav-link" href="#">Beranda</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Portal Edukasi
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Produk
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col">
            </div>
          </div>
          </div>
        </nav>
    {{-- End of Navbar Section --}}
    {{-- Page Header --}}
    <section class="header">
      <div class="row">
      </div>
    </section>
    {{-- End of Page Header --}}
      <section class="main-content">
        <div class="centre">
            <div class="container">
              <div class="row">
              <div class="col-8">
                  <form id="search-article" role="search">
                    <input class="search-bar"type="search" placeholder="Pencarian" aria-label="Search">
                  </form>
                  <label class="lbl-search" for="search-article">Tersedia sekitar </label>
              </div>
              <div class="col-4">
                <form role="search">
                  <select class="card-filter">
                    <option value="">Urutkan dari yang terbaru</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                </form>
              </div>
            </div>
        </div>
          <div class="container article-view mt-4">
            <div class="row">
              <div class="col-lg-2 col-md-3 col-sm-12" style="place-items: center" >   
                <div class="container">
                  <div class="row side-widget">
                    <div class="artikel-terbaru">
                      <p class="div-title">Artikel Terbaru</p>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                    </div>
                    <div class="artikel-terbaru">
                      <p class="div-title">Artikel Terbaru</p>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="article-group">
                        <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                        <div class="info-article">
                          <img class="icon-star" src="/icon/Star.png"/>
                          <p class="tgl-article">20 Okt 2023</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12 main-article">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf S.
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 mb-4 col-sm-12">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="/img/example-article.png"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit
                              <br/>
                              ipsum dolor sit amet, 
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                 Fabian Khalaf
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  20 Oktober 2023
                                </div>
                                <div class="bottom">
                                  <div class="desc-item">
                                    <div class="ellipse">
                                    </div>
                                    5.0
                                    </div>
                                    <div class="desc-item">
                                      <div class="ellipse">
                                      </div>
                                      1,58
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="container">
                      <div class="row" style="display: flex;
    justify-content: center;">
                        <div class="main-artikel-pagination">
                          <div class="main-artikel-page">1</div>
                          <div class="main-artikel-page">2</div>
                          <div class="main-artikel-page">3</div>
                          <div class="main-artikel-page">4</div>
                          <div class="main-artikel-page">5</div>
                          <div class="main-artikel-page">6</div>
                          <div class="main-artikel-page">7</div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12">
                  <div class="container">
                    <div class="row side-widget">
                      <div class="artikel-terbaru">
                        <p class="div-title">Artikel Terbaru</p>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                      </div>
                      <div class="artikel-terbaru">
                        <p class="div-title">Artikel Terbaru</p>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        <div class="article-group">
                          <p class="desk-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                          <div class="info-article">
                            <img class="icon-star" src="/icon/Star.png"/>
                            <p class="tgl-article">20 Okt 2023</p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
