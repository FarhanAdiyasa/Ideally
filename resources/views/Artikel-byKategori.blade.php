<p style="color: black; font-size: 20px; font-weight: 700;">{{$kategori->judul_kategori_artikel}}</p>
      <p style="color: #727272">{{$kategori->deskripsi_kategori_artikel}}</p>
        <a href="{{ route('landing-artikel.kategori', ['kategori' => $kategori->nama_kategori_artikel]) }}"><button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn-jelajahi">Jelajahi Artikel {{ str_replace('-', ' ', $kategori->nama_kategori_artikel) }}
            !</button></a>
      <div id="carousel-category-content" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($data->chunk(3) as $key => $chunk)
          <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
              <div class="cards-wrapper">
                  @foreach ($chunk as $article)
                      <div class="card border-0" style="width: 18rem;">
                        <div class="gambar-card-artikel-baru">
                          <img src="{{$article->gambar_artikel}}"
                            class="card-img-top rounded-5 gambar-only-card-artikel-baru" alt="..."
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body">
                          <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><h5 class="card-title" style="font-weight: 700;">{{$article->judul_artikel}}
                          </h5></a>
                          <p class="card-text" style="font-size: small; color: #999999;">{{ $article->createdBy->firstname }} {{ $article->createdBy->lastname }}</p>
        
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