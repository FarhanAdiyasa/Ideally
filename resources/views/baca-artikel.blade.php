<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideally - Portal Edukasi</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
    <!--Stylesheet -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/baca-artikel-style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/navbar-style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/header-artikel-style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/footer-artikel-style.css')}}" rel="stylesheet">
    
    <!-- Include jQuery from a CDN (Content Delivery Network) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Quicksand:wght@600&display=swap"
        rel="stylesheet">


</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- End of Navbar -->

    <!-- Headline  -->
    @include('partials.artikel-header')
    <!-- End of Headline  -->
    <div class="container">

        <div class="row">
            <!-- Main Content -->
            <div class="col-md-8 main-content-container">
                <!-- Title -->
                <div class="d-flex" style=" padding-bottom: 20px;">
                    {{-- <div class="additional-text-container rounded-pill d-inline-block"
                        style="background-color: #727272; color: white;">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon" src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                        </div>
                    </div> --}}
                    <div class="additional-text-container rounded-pill d-inline-block"
                        style="background-color: #727272; color: white;">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon" src="{{asset('icons/comment-category.svg')}}" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category" style="font-size: 12px; font-weight: 700;">{{$artikel->kategori_artikel->nama_kategori_artikel}}</span>
                        </div>
                    </div>
                </div>
                <h2 style="color: black; font-size: 28px; font-weight: 700;">{{$artikel->judul_artikel}}</h2>

                <div class="d-flex" style="padding-top: 20px;">
                    <div class="additional-text-container rounded-pill d-inline-block">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2" style="font-size: 14px; font-weight: 700;"> {{$artikel->createdBy->firstname}}{{$artikel->createdBy->lastname}}</span>
                        </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                        style="background-color: #06C195; color: white;">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2" style="font-size: 14px; font-weight: 700;"> {{ date('d M Y', strtotime($artikel->tanggal_publikasi));}}</span>
                        </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="{{asset('icons/comment-category.svg')}}"
                                alt="Rate Icon" style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2"
                                style="font-size: 14px; font-weight: 700;">{{ number_format($artikel->pengunjung ?? 0) }}</span>
                        </div>
                    </div>
                    @php
                        $averageRating = $artikel->ratingArtikel->avg('rating_artikel');
                        $averageRating = number_format($averageRating, 1) 
                    @endphp
                    <div class="additional-text-container rounded-pill d-inline-block">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2"
                                style="font-size: 14px; font-weight: 700;">{{$averageRating}}</span>
                        </div>
                    </div>
                </div>
                <!-- End of Title -->

                <!-- Body Article -->
                <div class="body-article">
                    <img src="{{asset($artikel->gambar_artikel)}}" alt="Gambar Artikel" width="100%">
                    @if ($artikel->keterangan_gambar_artikel)
                    <div class="keterangan-gambar-article">
                        {{$artikel->keterangan_gambar_artikel}}.</div>
                    @endif

                    <hr class="hr-body-article">

                    <div class="isi-article">
                        {!!$artikel->isi_artikel!!}
                    </div>
                    <div class="v-yt container mb-4" >
                        <!-- Use the full YouTube video URL or the embed URL -->
                        <iframe src="https://www.youtube.com/embed/8w_U6qEZat0" height="300" width="470"></iframe>
                    </div>
                </div>
                <!-- End of Body Article -->

                <!-- Source -->
                <div class="source">
                    <h5 style="font-weight: 700; color: #06C195;">Source</h5>
                    <ol style="font-style: italic; font-size: 14px;">
                        @foreach($artikel->sumberArtikel as $sumberArtikel)
                        <li>{{ $sumberArtikel->sumber_artikel}} </li>
                        @endforeach
                    </ol>

                </div>
                <!-- End of Source -->

                <!-- Penulis -->
                <div class="penulis">
                    <h4 style="color: black; font-size: 20px; font-weight: 700;">Penulis</h4>
                    <div class="container-lg-10" style="padding-top: 20px;">
                        <div class="row align-items-center">

                            <div class="col-2">
                                <div class="avatar">
                                    <img src="{{asset('img/img-penulis.png')}}" class="rounded-circle" alt="...">
                                </div>
                            </div>

                            <div class="col-4">
                                <h3 class="mb-0">Claudio Amaeda</h3>
                                <p class="text-muted">Drafter Lanskap</p>
                            </div>

                            <div class="col-6">
                                <p>Laki-laki; asal Kota Jakarta Barat, DKI Jakarta; bergabung sejak 04 Juni 2023;
                                    sebanyak 120 artikel telah
                                    ditulis.</p>
                            </div>
                            <div class="mb-4"></div>
                        </div>
                        <hr class="hr-body-article">
                    </div>
                </div>
                <!-- End of Penulis -->

                <!-- Rating -->
                <h4 style="color: black; font-size: 20px; font-weight: 700; padding-top: 20px;">Beri Penilaian</h4>
                <div class="additional-text-container rounded-pill d-inline-block"
                    style="background-color: #06C195; color: white; width: 100%;">
                    <form id="ratingForm" action="{{ route('rating-artikel', ['slug' => $artikel->slug]) }}" method="post">
                        @csrf
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5" @if ($rating && $rating->rating_artikel == 5) checked @endif>
                            <label for="5" onclick="submitForm(5,'{{$artikel->slug}}')">☆</label>
                            
                            <input type="radio" name="rating" value="4" id="4"  @if ($rating && $rating->rating_artikel == 4) checked @endif>
                            <label for="4" onclick="submitForm(4,'{{$artikel->slug}}')">☆</label>
                            
                            <input type="radio" name="rating" value="3" id="3"  @if ($rating && $rating->rating_artikel == 3) checked @endif>
                            <label for="3" onclick="submitForm(3,'{{$artikel->slug}}')">☆</label>
                            
                            <input type="radio" name="rating" value="2" id="2"  @if ($rating && $rating->rating_artikel == 2) checked @endif>
                            <label for="2" onclick="submitForm(2,'{{$artikel->slug}}')">☆</label>
                            
                            <input type="radio" name="rating" value="1" id="1"  @if ($rating && $rating->rating_artikel == 1) checked @endif>
                            <label for="1" onclick="submitForm(1,'{{$artikel->slug}}')">☆</label>
                            
                        </div>
                    </form>
                </div>
                <div class="success" id="suksesRate" style="visibility: hidden"><small>
                    Terimakasih !</small></div>
                <hr class="hr-custom">
                <!-- End of Rating -->

                <!-- Artikel Terkait -->
                <div class="artikel-terkait">
                    <h4
                        style="color: black; font-size: 20px; font-weight: 700; padding-top: 20px; margin-bottom: -35px;">
                        Artikel Terkait</h4>
                        

                    <div id="carousel-artikel-terkait" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @if($articles_terkait->count())
                            @foreach ($articles_terkait->chunk(2) as $key => $chunk)
                            <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                                <div class="cards-wrapper">
                                    @foreach ($chunk as $article)
                                    <div class="card border-0" style="width: 18rem;">
                                        <div class="gambar-card-artikel-terkait">
                                            <img src="{{asset($article->gambar_artikel)}}"
                                                class="card-img-top rounded-5 gambar-only-card-artikel-terkait"
                                                alt="..."
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><h5 class="card-title" style="font-weight: 700;">{{$article->judul_artikel}}</a>
                                            </h5>
                                            <p class="card-text">{{$article->createdBy->firstname}} {{$article->createdBy->lastname}}</p>
                                            @php
                                            $averageRating = $article->ratingArtikel->avg('rating_artikel');
                                            $averageRating = number_format($averageRating, 1) 
                                            @endphp
                                            <div class="d-flex">
                                                <div class="additional-text-container rounded-pill d-inline-block">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="{{asset('icons/rate-category.svg')}}" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">{{ $averageRating}}</span>
                                                    </div>
                                                </div>
                                                <div class="additional-text-container rounded-pill d-inline-block"
                                                    style="background-color: #06C195; color: white;">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="{{asset('icons/comment-category.svg')}}" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">{{$article->pengunjung}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                          @endforeach
                            @else
                            <p class="text-center fs-4">No Posts Found</p>
                            @endif
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-artikel-terkait"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-artikel-terkait"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- End of Artikel Terkait -->

                <hr class="hr-custom">

                <!-- Komentar -->
                <div class="komentar">
                    <h4 style="color: black; font-size: 20px; font-weight: 700; margin-bottom:2rem">Komentar</h4>
                    <div id="commentsSection">
                   
                    </div>
                    {{-- <div class="container-lg-10">
                        <div class="row align-items-center">

                            <div class="col-2">
                                <div class="avatar">
                                    <img src="{{asset('img/img-penulis.png')}}" class="rounded-circle" alt="...">
                                </div>
                            </div>

                            <div class="col-4">
                                <h3 class="mb-0">Ahsan Wildan</h3>
                                <p class="text-muted">Pengawas Pemeliharaan Lanskap</p>
                            </div>

                            <div class="col-6">
                                <p>Nam euismod finibus ante a venenatis. Donec iaculis ligula eros, at vestibulum tortor
                                    vestibulum id. Aliquam eget velit
                                    eget dolor tempus mollis. Vivamus quis luctus mi. Praesent nisl lacus, accumsan ac
                                    tristique at, sollicitudin</p>
                            </div>
                        </div>
                    </div>
                    <hr class="hr-custom-komentar">
                    <div class="container-lg-10" style="padding-top:20px;">
                        <div class="row align-items-center">

                            <div class="col-2">
                                <div class="avatar">
                                    <img src="{{asset('img/img-penulis.png')}}" class="rounded-circle" alt="...">
                                </div>
                            </div>

                            <div class="col-4">
                                <h3 class="mb-0">Azis Machpudin</h3>
                                <p class="text-muted">CPO Ideally Indonesia</p>
                            </div>

                            <div class="col-6">
                                <p>Nam euismod finibus ante a venenatis. Donec iaculis ligula eros, at vestibulum tortor
                                    vestibulum id.</p>
                            </div>
                            <div class="mb-4"></div>
                        </div>
                    </div> --}}

                    <div class="add-comment">
                        <h5 style="font-weight: 700; color: #06C195;">Tambahkan Komentar</h5>
                        <div class="row align-items-center" style="padding-top: 20px;">

                            <div class="col-3">
                                <div class="avatar">
                                    <img src="{{asset('img/img-penulis.png')}}" class="rounded-circle" alt="...">
                                </div>
                            </div>

                            <div class="col-5 nama-akun-komentar">
                                <h3 class="mb-0">Azis Machpudin</h3>
                                <p class="text-muted">CPO Ideally Indonesia</p>
                            </div>
                            <div class="mb-4"></div>

                        </div>
                        @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
                    @endif
                        <form id="komenForm" action="{{ route('komentar-artikel', ['slug' => $artikel->slug]) }}" method="post">
                            @csrf
                            <div class="textbox-komentar">
                                <textarea class="input-textbox-komentar" type="text" name="komentar" placeholder="Tambahkan Komentar Anda!"
                                    id="textarea-komentar"></textarea>
                                <div class="submit-btn">
                                    <button type="button" class="btn rounded-circle" style="background-color: #06C195; color: white;" onclick="submitKomentar('{{$artikel->slug}}')">
                                        <i class="fa fa-plus"></i>
                                    </button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End of Komentar -->


            </div>
            <!-- End of Main Content -->

            <!-- Floating Widget -->
            <div class="col-md-4 floating-widget" id="floatingWidget">
                <div class="card"
                    style="width: 350px; border-radius: 15px; box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.20);">

                    <div class="card-body" style="padding: 30px;">
                        <select class="floating-category" id="floating-category">
                            <option value="category-baru">Artikel Terbaru</option>
                            <option value="category-populer">Artikel Terpopuler
                            </option>
                            <option value="category-acak">Artikel Acak</option>
                        </select>
                        <div class="content-card-widget">
                            <div class="card-text" id="category-baru">
                                <!-- Konten floating widget -->
                                @if($articles_terbaru->count())
                                 @foreach($articles_terbaru as $article)
                                <div class="mb-3 content-widget-floating">
                                    <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><div style="padding-bottom: 13px;">
                                        {{$article->judul_artikel}}
                                    </div></a>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="{{asset('icons/rate-category.svg')}}"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">{{ date('d M Y', strtotime($article->tanggal_publikasi));}}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                @endforeach
                                @else
                                <p class="text-center fs-4">No Posts Found</p>
                                @endif
                            </div>
                            <div class="card-text" id="category-populer">
                                @if($articles_terpopuler->count())
                                @foreach($articles_terpopuler as $article)
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><div style="padding-bottom: 13px;">
                                        {{$article->judul_artikel}}
                                    </div></a>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="{{asset('icons/rate-category.svg')}}"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">{{ date('d M Y', strtotime($article->tanggal_publikasi));}}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                @endforeach
                                @else
                                <p class="text-center fs-4">No Posts Found</p>
                                @endif
                                <!-- Konten floating widget -->
                            </div>
                            <div class="card-text" id="category-acak">
                                <!-- Konten floating widget -->
                                @if($articles_acak->count())
                                @foreach($articles_acak as $article)
                                <div class="mb-3 content-widget-floating">
                                    <a href="/portal-edukasi/baca/{{$article->slug}}" class="hpLink"><div style="padding-bottom: 13px;">
                                        {{$article->judul_artikel}}
                                    </div></a>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="{{asset('icons/rate-category.svg')}}"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">{{ date('d M Y', strtotime($article->tanggal_publikasi));}}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                @endforeach
                                @else
                                <p class="text-center fs-4">No Posts Found</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Floating Widget -->
        </div>
    </div>
    <!-- Footer -->
    @include('partials.artikel-footer')
    <!-- End of Footer -->

    <!-- Javascript -->
    <script src="{{asset('/js/navbar.js')}}"></script>
    <script src="{{asset('/js/baca-artikel.js')}}"></script>
    <script>

        function submitForm(rating, slug) {

        var hiddenInput = document.createElement("input");
        hiddenInput.setAttribute("type", "hidden");
        hiddenInput.setAttribute("name", "rating");
        hiddenInput.setAttribute("value", rating);

        document.getElementById("ratingForm").appendChild(hiddenInput);
            $.ajax({
            type: "POST",
            url: "{{ url('/portal-edukasi/rating/') }}/" + slug,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            },
            data: {
                rating: rating,
            },
            success: function (response) {
                // Handle the success response, if needed
                // console.log(response);
                document.getElementById('suksesRate').style.visibility = 'visible';
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error("AJAX Error:", textStatus, errorThrown);
            },
        });
    } 
    $(document).ready(function() {
    // Get the initial slug from the URL or set it to a default value
        var initialSlug = window.location.pathname.split('/').pop();
        
        // Call the 'show' function with the initial slug
        show(initialSlug);
        console.log(initialSlug);
    });
    function show(slug) {
        $.get("{{ url('/portal-edukasi/komentar/') }}/" + slug, {}, function(data, status) {
            $("#commentsSection").html(data);
        });
    }


    function submitKomentar(slug) {
    var komentar = $('#textarea-komentar').val();
    $.ajax({
        type: "POST",
        url: "{{ url('/portal-edukasi/komentar/') }}/" + slug,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
        },
        data: {
            komentar: komentar,
        },
        success: function (response) {
            document.getElementById('suksesRate').style.visibility = 'visible';

            // Call the 'show' function with the provided slug
            show(slug);

            // Optional: Clear the form after submission
            $('#komenForm')[0].reset();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
        },
    });
    return false; // Prevent the default form submission
    }
  
    </script>

</body>