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
        <div class="centre d-flex">
          <div class="top-main d-flex mx-0">
              <div class="row mx-0">
              <div class="search-card col-9 col-md-4">
                <form class="top-bar" id="search-top" role="search">
                  <input class="search-bar"type="search" placeholder="Pencarian" aria-label="Search">
                </form>
                <label for="search-top">Tersedia sekitar </label>
              </div>
              <div class="filter-card col-3 col-md-2">
                <form class="top-bar" role="search">
                  <select id="cars" class="card-filter">
                    <option value="">Urutkan dari yang terbaru</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                  </select>
                </form>
              </div>
            </div>
          </div>
          <div class="main-main d-flex mx-0">
              <div class="row mx-0">
              <div class="left-widget">
                <div class="row">
                  <div class="artikel-terbaru">
                    <p class="div-title">Artikel Terbaru</p>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                  </div>
                  <div class="artikel-terbaru">
                    <p class="div-title">Artikel Terbaru</p>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                    <div class="larticle-group">
                      <p class="desk-larticle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. </p>
                      <div class="info-article">
                        <img class="icon-star" src="/icon/Star.png"/>
                        <p class="tgl-larticle">20 Okt 2023</p>
                      </div>
                      <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                        <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="artikel-acak ">
                    <p>Artikel Terbaru</p>
                  </div>
                </div>
              </div>
              <div class="cnt">
                  <div class="group-list">
                      <div class="main-article">
                        <img class="mask-group-G4G" src="/img/example-article.png"/>
                        <div class="auto-group-dmbn-zW4">
                          <p class="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-ipsum-dolor-sit-amet-XVz">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                          <br/>
                          ipsum dolor sit amet, 
                          </p>
                          <div class="auto-group-egcx-pzt">
                            <div class="group-31-ZBn">
                              <div class="ellipse-3-5R2">
                              </div>
                              <div class="fabian-khalaf-s-beG">Fabian Khalaf S</div>
                            </div>
                            <div class="group-32-7sW">
                              <div class="ellipse-3-qYc">
                              </div>
                              <p class="oktober-2023-B6g">20 Oktober 2023</p>
                            </div>
                            <div class="auto-group-sfny-uHa">
                              <div class="group-29-2NC">
                                <img class="star-1-YbS" src="REPLACE_IMAGE:104:2241"/>
                                <p class="item-47-sdi">4.7</p>
                              </div>
                              <div class="group-30-b3v">
                                <div class="ellipse-3-83r">
                                </div>
                                <p class="item-1586-GQx">1,586</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="dummy-artikel-aAk">
                        <div class="rectangle-17-Xbn">
                        </div>
                        <div class="auto-group-krbz-fT6">
                          <p class="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-ipsum-dolor-sit-amet-QvU">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit
                          <br/>
                          ipsum dolor sit amet, 
                          </p>
                          <div class="auto-group-hq72-XEQ">
                            <div class="group-31-rGg">
                              <div class="ellipse-3-yMJ">
                              </div>
                              <div class="fabian-khalaf-s-tjA">Fabian Khalaf S</div>
                            </div>
                            <div class="group-32-DFe">
                              <div class="ellipse-3-L5N">
                              </div>
                              <p class="oktober-2023-4n4">20 Oktober 2023</p>
                            </div>
                            <div class="auto-group-jzmj-z9v">
                              <div class="group-29-KCC">
                                <img class="star-1-dya" src="REPLACE_IMAGE:104:2450"/>
                                <p class="item-47-ZMS">4.7</p>
                              </div>
                              <div class="group-30-t8p">
                                <div class="ellipse-3-DRz">
                                </div>
                                <p class="item-1586-kwi">1,586</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="right-widget"></div>
              
            </div>
          </div>
        </div>
      </section>
</body>
