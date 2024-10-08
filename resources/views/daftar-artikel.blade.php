<!DOCTYPE html>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6990JVL0LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6990JVL0LN');
</script>
  
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Ideally</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand%3A700"/>
  @vite(['resources/sass/app.scss', 'resources/js/app.js']);

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <link rel="stylesheet" href="/css/daftar-artikel-style.css"/>
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/landing-artikel-style.css"/>
  <link rel="stylesheet" href="/css/artikel-pagination-style.css"/>
  <link rel="stylesheet" href="/css/navbar-style.css">
  <link rel="stylesheet" href="/css/header-artikel-style.css">
  <link rel="stylesheet" href="/css/footer-artikel-style.css">
</head>
<body>
    {{-- Navbar Section --}}
    @include('partials.navbar')
    <!-- End of Navbar -->

    <!-- Headline  -->
    @include('partials.artikel-header')
    {{-- End of Page Header --}}
      <section class="main-content">
        <div class="centre">
            <div class="container">
              <div class="row">
              <div class="col-8">
                <form id="search-article" role="search" method="get" action="{{ route('landing-artikel.kategori', ['kategori' => $active]) }}">
                    @if (request('sort'))
                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                    @endif
                    <input class="search-bar"type="search" placeholder="Pencarian" name="search" value="{{ request('search') }}" aria-label="Search">
                  </form>
                  <label class="lbl-search" for="search-article">Tersedia sekitar {{$jumlah}} artikel.</label>
              </div>
              <div class="col-4">
                <form role="search" method="get" action="{{ route('landing-artikel.kategori', ['kategori' => $active]) }}" id="sortForm">
                  @if (request('search'))
                  <input type="hidden" name="search" value="{{ request('search') }}">
                  @endif
                  <select class="card-filter" name="sort" onchange="document.getElementById('sortForm').submit()">
                      <option value="desc" {{ $sort == 'desc' ? 'selected' : '' }}>Urutkan dari yang terbaru</option>
                      <option value="asc" {{ $sort == 'asc' ? 'selected' : '' }}>Urutkan dari yang terlama</option>
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
                    <div class="artikel-samping">
                      <p class="div-title">Artikel Terbaru</p>
                      @if($articles_terbaru->count())
                        @foreach($articles_terbaru as $article)
                        <div class="article-group">
                          <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><p class="desk-article">{{$article->judul_artikel}}</p></a>
                          <div class="info-article">
                            <img class="icon-star" src="/icons/Star.png"/>
                            <p class="tgl-article">{{ date('d M Y', strtotime($article->tanggal_publikasi));}} </p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        @endforeach
                      @else
                      <p class="text-center fs-4">No Posts Found</p>
                      @endif
                    </div>
                    <div class="artikel-samping">
                      <p class="div-title">Artikel Acak</p>
                      @if($articles_acak->count())
                      @foreach($articles_acak as $article)
                      <div class="article-group">
                        <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><p class="desk-article">{{$article->judul_artikel}}</p></a>
                        <div class="info-article">
                          <img class="icon-star" src="/icons/Star.png"/>
                          <p class="tgl-article">{{ date('d M Y', strtotime($article->tanggal_publikasi));}} </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      @endforeach
                    @else
                    <p class="text-center fs-4">No Posts Found</p>
                    @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12 main-article">
                <div class="container">
                  <div class="row">
                    @if ($articles->count())
                    @foreach($articles as $article)
                    <div class="col-lg-6 col-sm-12 mb-4">
                      <div class="container" >
                        <div class="row">
                          <div class="col-5" >
                            <img src="{{asset('storage/' .$article->gambar_artikel)}}"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><p class="title-main-article">
                                {{$article->judul_artikel}}
                              </p></a>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  {{$article->penulis_artikel}}
                                </div>
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  {{ date('d M Y', strtotime($article->tanggal_publikasi));}}
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
                                      {{ number_format($article->pengunjung ?? 0) }}
                                    </div>
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      <div class="container">
                        <div class="row" style="display: flex; justify-content: center;">
                            <div class="main-artikel-pagination">
                              {{ $articles->appends(['sort' => $sort])->links('partials.artikel-pagination') }}
                          </div>
                        </div>
                    </div>
                    @else
                    <p class="text-center fs-4">No Posts Found</p>
                    @endif
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12">
                  <div class="container">
                    <div class="row side-widget">
                      <div class="artikel-samping">
                        <p class="div-title">Artikel Terpopuler</p>
                        @if($articles_terpopuler->count())
                      @foreach($articles_terpopuler as $article)
                      <div class="article-group">
                        <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><p class="desk-article">{{$article->judul_artikel}}</p>
                        <div class="info-article"></a>
                          <img class="icon-star" src="/icons/Star.png"/>
                          <p class="tgl-article">{{ date('d M Y', strtotime($article->tanggal_publikasi));}} </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                          <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                      </div>
                      @endforeach
                    @else
                    <p class="text-center fs-4">No Posts Found</p>
                    @endif
                      </div>
                      <div class="artikel-samping">
                        <p class="div-title">Artikel Acak</p>
                          @if($articles_acak2->count())
                        @foreach($articles_acak2 as $article)
                        <div class="article-group">
                          <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><p class="desk-article">{{$article->judul_artikel}}</p></a>
                          <div class="info-article">
                            <img class="icon-star" src="/icons/Star.png"/>
                            <p class="tgl-article">{{ date('d M Y', strtotime($article->tanggal_publikasi));}} </p>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" class="mt-2" width="215" height="4" viewBox="0 0 304 4" fill="none">
                            <path d="M2 2L302 2.00003" stroke="#F0F0F0" stroke-width="3" stroke-linecap="round"/>
                          </svg>
                        </div>
                        @endforeach
                      @else
                      <p class="text-center fs-4">No Posts Found</p>
                      @endif
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer -->
      @include('partials.artikel-footer')
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <script src="../js/portal-edukasi.js"></script>
      <script src="/js/navbar.js"></script>
</body>
