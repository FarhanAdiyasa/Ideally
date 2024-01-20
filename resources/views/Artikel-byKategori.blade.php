<style>

  .popover {
    box-shadow: 5px 5px 15px 3px rgba(0, 0, 0, 0.25);
    border: none;
  }

  
  .hover-tanggal-terbit{
    color: #999999; 
    font-size: 12px; 
    font-family: Montserrat; 
    font-weight: 400; 
    word-wrap: break-word
  }

  .hover-judul{
    color: black;
    font-size: 18px;
    font-family: Montserrat;
    font-weight: 700;
    word-wrap: break-word;
  }

  .hover-btn-selengkapnya{
    background: #06C195; 
    border-radius: 30px;
    width: 100%;
    border: none;
    color: white;
    font-size: 14px;
    font-family: Arial;
    font-weight: 700;
    word-wrap: break-word;
  }

  .hover-isi{
    color: black;
    font-size: 12px;
    font-family: Montserrat;
    font-weight: 400;
    word-wrap: break-word;
  }
</style>
<p style="color: black; font-size: 20px; font-weight: 700;">{{$kategori->judul_kategori_artikel}}</p>
        <p style="color: #727272">{{$kategori->deskripsi_kategori_artikel}}</p>
          <a href="{{ route('landing-artikel.kategori', ['kategori' => $kategori->nama_kategori_artikel]) }}"><button type="button" class="btn rounded-pill mx-1 category-portaledukasi-btn-jelajahi">Jelajahi Artikel {{ str_replace('-', ' ', $kategori->nama_kategori_artikel) }}
              !</button></a>
        <div id="carousel-category-content" class="carousel slide " data-ride="carousel">
          <div class="carousel-inner">
              @foreach ($data->chunk(4) as $key => $chunk)
            <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                <div class="cards-wrapper wrapper-card-kategori">
                    @foreach ($chunk as $article)
                      <div class="card border-0 article-card" data-popover-content-kategori="{{$article->slug}}"  style="width: 18rem;">
                      <div class="gambar-card-artikel-baru">
                          <!-- <img src="{{asset('storage/' .$article->gambar_artikel)}}" -->
                          <img src="https://via.placeholder.com/362x185"
                            class="card-img-top rounded-4 gambar-only-card-artikel-baru" alt="..."
                            style="position: absolute; top: 0; left: 0; width: 225px; height: 120px; object-fit: cover;">
                        </div>
                        <div class="card-body" style="margin-top: -75px;">
                          <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><h5 class="card-title" style="font-weight: 700; font-size: 20px;">{{$article->judul_artikel}}
                          </h5></a>
                          <p class="card-text" style="font-size: small; color: #999999;">{{$article->penulis_artikel}}</p>
        
                          <div class="d-flex">
                            <div class="additional-text-container rounded-pill d-inline-block">
                              <div class="keterangan-additional-text-container">
                                <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                                  style="width: 10px; height: 10px;">
                                <span class="info-card-category" style="font-size: 10px; font-weight: 700;">4.7</span>
                              </div>
                            </div>
                            <div class="additional-text-container rounded-pill d-inline-block"
                              style="background-color: #06C195; color: white;">
                              <div class="keterangan-additional-text-container">
                                <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                                  style="width: 10px; height: 10px;">
                                <span class="info-card-category" style="font-size: 10px; font-weight: 700;">{{$article->pengunjung}}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    @foreach ($chunk as $article)
                        <div hidden data-name="popover-content-kategori" data-popover-id="{{$article->slug}}" class="popover-container">
                            <div class="container-custom">
                              <div class="row">
                                <div class="col-md-16">
                                  <h3 class="mt-3 hover-judul">{{$article->judul_artikel}}</h3>
                                  <p class="hover-tanggal-terbit" >Terbit 20 Oktober 2023</p>
                                  <p class="hover-isi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus at nibh fringilla dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam consequat urna et lacus scelerisque, a elementum felis convallis. Aenean lobortis velit ac maximus fermentum.</p>
                                  <a href="#" class="btn btn-success rounded-pill hover-btn-selengkapnya">Baca Selengkapnya</a>
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
<script>
    $(document).ready(function() {
        $('.card').each(function() {
            var popoverContent = $('[data-name="popover-content-kategori"][data-popover-id="' + $(this).data('popover-content-kategori') + '"]').html();

            var options = {
                trigger: 'manual',
                html: true,
                content: popoverContent
            }

            var $this = $(this);

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