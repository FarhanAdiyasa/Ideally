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
  
  <link rel="stylesheet" href="/css/daftar-artikel-style.css"/>
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/landing-artikel-style.css"/>
  <link rel="stylesheet" href="/css/artikel-pagination-style.css"/>
  <link rel="stylesheet" href="/css/navbar-style.css" rel="stylesheet">
</head>
<body>
    {{-- Navbar Section --}}
    @include('partials.navbar')
    {{-- End of Navbar Section --}}
    
    {{-- Page Header --}}
      @include('partials.artikel-header')
    {{-- End of Page Header --}}
      <section class="main-content">
        <div class="centre">
            <div class="container">
              <div class="row">
              <div class="col-8">
                  <form id="search-article" role="search" method="get" action="{{ route('daftar-artikel') }}">
                    @csrf
                    @if (request('filter_artikel_onKategori'))
                    <input type="hidden" name="filter_artikel_onKategori" value="{{ request('filter_artikel_onKategori') }}">
                    @endif
                    <input type="hidden" name="kategori" value="{{ $active }}">
                    <input class="search-bar"type="search" placeholder="Pencarian" name="cari_artikel_onKategori" value="{{ request('cari_artikel_onKategori') }}" aria-label="Search">
                  </form>
                  <label class="lbl-search" for="search-article">Tersedia sekitar {{$jumlah}} artikel.</label>
              </div>
              <div class="col-4">
                <form role="search" method="get" action="{{ route('daftar-artikel') }}" id="sortForm">
                  @csrf
                  @if (request('cari_artikel_onKategori'))
                  <input type="hidden" name="cari_artikel_onKategori" value="{{ request('cari_artikel_onKategori') }}">
                  @endif
                  <input type="hidden" name="kategori" value="{{ $active }}">
                  <select class="card-filter" name="filter_artikel_onKategori" onchange="document.getElementById('sortForm').submit()">
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
                          <p class="desk-article">{{$article->judul_artikel}}</p>
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
                        <p class="desk-article">{{$article->judul_artikel}}</p>
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
                            <img src="{{$article->gambar_artikel}}"/>
                          </div>
                          <div class="col-7">
                            <div class="info-main-article">
                              <p class="title-main-article">
                                {{$article->judul_artikel}}
                              </p>
                              <div class="desc-main-article">
                                <div class="desc-item">
                                  <div class="ellipse">
                                  </div>
                                  {{$article->createdBy->firstname}} {{$article->createdBy->lastname}}
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
                              {{ $articles->appends(['filter_artikel_onKategori' => $sort])->links('partials.artikel-pagination') }}
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
                        <p class="desk-article">{{$article->judul_artikel}}</p>
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
                          @if($articles_acak2->count())
                        @foreach($articles_acak2 as $article)
                        <div class="article-group">
                          <p class="desk-article">{{$article->judul_artikel}}</p>
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
      @include('partials.artikel-footer')
      <script src="js/portal-edukasi.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="/js/navbar.js"></script>
</body>
