<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ideally - Portal Edukasi</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
    <!--Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/baca-artikel-style.css" rel="stylesheet">
    <link href="css/navbar-style.css" rel="stylesheet">
    <link href="css/header-artikel-style.css" rel="stylesheet">
    <link href="css/footer-style.css" rel="stylesheet">

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
                    <div class="additional-text-container rounded-pill d-inline-block"
                        style="background-color: #727272; color: white;">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon" src="./icons/rate-category.svg" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category" style="font-size: 12px; font-weight: 700;">4.7</span>
                        </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                        style="background-color: #727272; color: white;">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon" src="./icons/comment-category.svg" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category" style="font-size: 12px; font-weight: 700;">1,586</span>
                        </div>
                    </div>
                </div>
                <h2 style="color: black; font-size: 28px; font-weight: 700;">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Morbi non risus at nibh fringilla dapibus.</h2>

                <div class="d-flex" style="padding-top: 20px;">
                    <div class="additional-text-container rounded-pill d-inline-block">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="./icons/rate-category.svg" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2" style="font-size: 14px; font-weight: 700;">Fabian
                                Khalaf S</span>
                        </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block"
                        style="background-color: #06C195; color: white;">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="./icons/rate-category.svg" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2" style="font-size: 14px; font-weight: 700;">20 Okt
                                2023</span>
                        </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="./icons/comment-category.svg"
                                alt="Rate Icon" style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2"
                                style="font-size: 14px; font-weight: 700;">1,586</span>
                        </div>
                    </div>
                    <div class="additional-text-container rounded-pill d-inline-block">
                        <div class="keterangan-additional-text-container">
                            <img class="info-card-category-icon-title2" src="./icons/rate-category.svg" alt="Rate Icon"
                                style="width: 12px; height: 12px;">
                            <span class="info-card-category-title2"
                                style="font-size: 14px; font-weight: 700;">4.7</span>
                        </div>
                    </div>
                </div>
                <!-- End of Title -->

                <!-- Body Article -->
                <div class="body-article">
                    <img src="./img/img_body-article.png" alt="Gambar Artikel" width="100%">

                    <div class="keterangan-gambar-article">
                        Vestibulum semper ex id urna vulputate viverra. Vivamus ac risus maximus, volutpat velit non,
                        mattis dolor.</div>

                    <hr class="hr-body-article">

                    <div class="isi-article">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porta sagittis velit, non
                            ultricies mauris cursus et.
                            Proin efficitur egestas dui, non tristique est tincidunt ut. In dictum velit neque, sit amet
                            scelerisque purus volutpat
                            quis. In mattis interdum efficitur.
                        </p>

                        <p>
                            Morbi efficitur metus ex, vel <span class="highlighted-text">elementum
                                massa</span> vulputate eget. Donec vel sollicitudin metus.
                            Ut at purus quis mi
                            vulputate mollis. Ut massa dui, <span class="highlighted-text">tincidunt</span> ut libero
                            at, interdum pretium risus.
                        </p>

                        <p>
                            Nam euismod finibus ante a venenatis. Donec iaculis ligula eros, at vestibulum tortor
                            vestibulum id. Aliquam eget velit
                            eget dolor tempus mollis. Vivamus quis luctus mi. Praesent nisl lacus, accumsan ac tristique
                            at, sollicitudin sit amet
                            lectus. Vestibulum ac elementum nisi. Nunc auctor sodales turpis aliquam ultrices. Nulla
                            facilisi. Nullam et mollis ex.
                            Aliquam et malesuada arcu. Duis vitae ligula justo. Sed sit amet luctus quam.
                        </p>

                        <h5 class="sub-header-content-article">Vestibulum semper</h5>

                        <p>
                            Ex id urna vulputate viverra. Vivamus ac risus maximus, volutpat velit non, mattis
                            dolor.
                            <span class="highlighted-text">Pellentesque</span> malesuada, lectus
                            vitae congue dignissim, nunc neque sagittis nibh, eu consectetur ligula est posuere
                            dolor.
                            Aenean vel nulla et tellus
                            pellentesque tempus ut eu enim.
                        </p>

                        <p>
                            Pellentesque ullamcorper sodales nibh, sit amet vehicula leo placerat viverra.
                            Praesent
                            tempor dui nulla, id aliquam
                            ligula pulvinar vel. Morbi lobortis, lectus eu ultricies rhoncus, justo nisl
                            condimentum
                            diam, in interdum orci felis eu
                            enim. Quisque sit amet sodales nulla, id condimentum sem. Ut id mattis dolor.
                        </p>

                        <p>
                            Mauris dapibus quam magna, sit amet posuere tortor fermentum vel. Aenean vel finibus
                            erat,
                            in volutpat arcu. Nullam at
                            arcu eleifend felis dictum pharetra ac condimentum lorem. <span
                                class="highlighted-text">Curabitur pellentesque</span>
                            cursus
                            sapien, venenatis venenatis
                            dolor tincidunt eleifend. Sed ornare lacus eu lorem tempor, a tincidunt urna rutrum.
                            Cras
                            dignissim ligula in semper
                            porta.
                        </p>

                        <img src="./img/img-isi-artikel.png" alt="Gambar Content Artikel" style="width: 100%;">
                        <div class="keterangan-gambar-article">
                            Vestibulum semper ex id urna vulputate viverra. Vivamus ac risus maximus, volutpat velit
                            non,
                            mattis dolor.</div>

                        <hr class="hr-body-article" style="padding-bottom: 20px;">

                        <p>
                            Integer dapibus risus in nibh cursus, semper facilisis massa mattis. Ut venenatis est eget
                            nunc ultricies, ut vehicula
                            sem lacinia. Phasellus rhoncus tempus orci, vitae ultricies leo <span
                                class="highlighted-text">maximus eget</span>. Nam nec
                            sagittis nisi, nec consectetur
                            erat. Vestibulum sed faucibus felis.
                        </p>
                        <h5 class="sub-header-content-article">Quisque sollicitudin</h5>
                        <p>
                            Nisl sit amet mauris volutpat rutrum. Curabitur aliquam molestie leo sed varius. Maecenas
                            vel felis sed dui vestibulum
                            fermentum.
                        </p>

                        <p>
                            Quisque bibendum ac purus nec ornare. Class aptent taciti sociosqu ad litora torquent
                            per
                            conubia nostra, per inceptos
                            himenaeos. Donec vel viverra magna. Vestibulum feugiat sem ipsum, vel sodales ipsum
                            tempor
                            in. Ut enim est, congue eget
                            porta vitae, tincidunt <span class="highlighted-text">facilisis purus</span>. Morbi
                            nulla
                            tortor, fringilla sed nisl et, mattis
                            mollis urna. Quisque quis odio
                            vel orci faucibus ullamcorper sed id mi. In accumsan mi vitae enim interdum sagittis.
                        </p>
                    </div>

                </div>
                <!-- End of Body Article -->

                <!-- Source -->
                <div class="source">
                    <h5 style="font-weight: 700; color: #06C195;">Source</h5>
                    <ol style="font-style: italic; font-size: 14px;">
                        <li>Nur Ilman, Luthfi. 2023. Judul artikel acuan. IPB University: Bogor.</li>
                        <li>Nur Ilman, Luthfi. 2023. Judul artikel acuan. IPB University: Bogor.</li>
                        <li>Nur Ilman, Luthfi. 2023. Judul artikel acuan. IPB University: Bogor.</li>
                        <li>Nur Ilman, Luthfi. 2023. Judul artikel acuan. IPB University: Bogor.</li>
                        <li>Nur Ilman, Luthfi. 2023. Judul artikel acuan. IPB University: Bogor.</li>
                        <li>Nur Ilman, Luthfi. 2023. Judul artikel acuan. IPB University: Bogor.</li>
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
                                    <img src="./img/img-penulis.png" class="rounded-circle" alt="...">
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
                    <div class="rating">
                        <input type="radio" name="rating" value="5" id="5">
                        <label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4">
                        <label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3">
                        <label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2">
                        <label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1">
                        <label for="1">☆</label>
                    </div>
                </div>
                <hr class="hr-custom">
                <!-- End of Rating -->

                <!-- Artikel Terkait -->
                <div class="artikel-terkait">
                    <h4
                        style="color: black; font-size: 20px; font-weight: 700; padding-top: 20px; margin-bottom: -35px;">
                        Artikel Terkait</h4>
                    <div id="carousel-artikel-terkait" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="cards-wrapper">
                                    <div class="card border-0" style="width: 18rem;">
                                        <div class="gambar-card-artikel-terkait">
                                            <img src="./img/placeholder-category-card.png"
                                                class="card-img-top rounded-5 gambar-only-card-artikel-terkait"
                                                alt="..."
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: 700;">Llorem
                                                ipsum dolor sit
                                                amet, consectetur
                                                adipiscing
                                                elit.
                                            </h5>
                                            <p class="card-text">Fabian Khalaf
                                                S</p>

                                            <div class="d-flex">
                                                <div class="additional-text-container rounded-pill d-inline-block">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/rate-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">4.7</span>
                                                    </div>
                                                </div>
                                                <div class="additional-text-container rounded-pill d-inline-block"
                                                    style="background-color: #06C195; color: white;">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/comment-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">1,586</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0" style="width: 18rem;">
                                        <div class="gambar-card-artikel-terkait">
                                            <img src="./img/placeholder-category-card.png"
                                                class="card-img-top rounded-5 gambar-only-card-artikel-terkait"
                                                alt="..."
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit
                                                amet, consectetur
                                                adipiscing
                                                elit.
                                            </h5>
                                            <p class="card-text">Fabian Khalaf
                                                S</p>

                                            <div class="d-flex">
                                                <div class="additional-text-container rounded-pill d-inline-block">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/rate-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">4.7</span>
                                                    </div>
                                                </div>
                                                <div class="additional-text-container rounded-pill d-inline-block"
                                                    style="background-color: #06C195; color: white;">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/comment-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">1,586</span>
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
                                        <div class="gambar-card-artikel-terkait">
                                            <img src="./img/placeholder-category-card.png"
                                                class="card-img-top rounded-5 gambar-only-card-artikel-terkait"
                                                alt="..."
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: 700;">Llorem
                                                ipsum dolor sit
                                                amet, consectetur
                                                adipiscing
                                                elit.
                                            </h5>
                                            <p class="card-text">Fabian Khalaf
                                                S</p>

                                            <div class="d-flex">
                                                <div class="additional-text-container rounded-pill d-inline-block">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/rate-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">4.7</span>
                                                    </div>
                                                </div>
                                                <div class="additional-text-container rounded-pill d-inline-block"
                                                    style="background-color: #06C195; color: white;">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/comment-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">1,586</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0" style="width: 18rem;">
                                        <div class="gambar-card-artikel-terkait">
                                            <img src="./img/placeholder-category-card.png"
                                                class="card-img-top rounded-5 gambar-only-card-artikel-terkait"
                                                alt="..."
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: 700;">Llorem ipsum dolor sit
                                                amet, consectetur
                                                adipiscing
                                                elit.
                                            </h5>
                                            <p class="card-text">Fabian Khalaf
                                                S</p>

                                            <div class="d-flex">
                                                <div class="additional-text-container rounded-pill d-inline-block">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/rate-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">4.7</span>
                                                    </div>
                                                </div>
                                                <div class="additional-text-container rounded-pill d-inline-block"
                                                    style="background-color: #06C195; color: white;">
                                                    <div class="keterangan-additional-text-container">
                                                        <img class="info-card-category-icon"
                                                            src="./icons/comment-category.svg" alt="Rate Icon"
                                                            style="width: 12px; height: 12px;">
                                                        <span class="info-card-category"
                                                            style="font-size: 12px; font-weight: 700;">1,586</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <h4 style="color: black; font-size: 20px; font-weight: 700;">Komentar</h4>
                    <div class="container-lg-10">
                        <div class="row align-items-center">

                            <div class="col-2">
                                <div class="avatar">
                                    <img src="./img/img-penulis.png" class="rounded-circle" alt="...">
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
                                    <img src="./img/img-penulis.png" class="rounded-circle" alt="...">
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
                    </div>

                    <div class="add-comment">
                        <h5 style="font-weight: 700; color: #06C195;">Tambahkan Komentar</h5>
                        <div class="row align-items-center" style="padding-top: 20px;">

                            <div class="col-3">
                                <div class="avatar">
                                    <img src="./img/img-penulis.png" class="rounded-circle" alt="...">
                                </div>
                            </div>

                            <div class="col-5 nama-akun-komentar">
                                <h3 class="mb-0">Azis Machpudin</h3>
                                <p class="text-muted">CPO Ideally Indonesia</p>
                            </div>
                            <div class="mb-4"></div>

                        </div>

                        <div class="textbox-komentar">
                            <textarea class="input-textbox-komentar" type="text" placeholder="Tambahkan Komentar Anda!"
                                id="textarea-komentar"></textarea>
                            <div class="submit-btn">
                                <button class="btn rounded-circle" style="background-color: #06C195; color: white;">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
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
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus
                                        at nibh
                                        fringilla dapibus.
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus
                                        at nibh
                                        fringilla dapibus.
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non risus
                                        at nibh
                                        fringilla dapibus.
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                            </div>
                            <div class="card-text" id="category-populer">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Ini isi artikel Terpopuler
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Ini isi artikel Terpopuler
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Ini isi artikel Terpopuler
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                            </div>
                            <div class="card-text" id="category-acak">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Ini isi artikel Acak
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Ini isi artikel Acak
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                                <!-- Konten floating widget -->
                                <div class="mb-3 content-widget-floating">
                                    <div style="padding-bottom: 13px;">
                                        Ini isi artikel Acak
                                    </div>
                                    <div class="additional-text-container rounded-pill d-inline-block"
                                        style="background-color: #06C195; color: white;">
                                        <div class="keterangan-additional-text-container d-flex">
                                            <img class="info-card-category-icon-widget" src="./icons/rate-category.svg"
                                                alt="Rate Icon" style="width: 16px; height: 16px;">
                                            <p class="info-card-category-widget tes"
                                                style="font-size: 14px; font-weight: 700;">20
                                                Okt 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr-floating-widget">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of Floating Widget -->
        </div>
    </div>
    <!-- Footer -->
    <div class="image-footer-container">
        <img src="./img/Background-Footer.png" style="width: 100%;" alt="Foto Footer">


        <div class="btn-overlay-footer">
            <div class="d-flex justify-content-center">
                <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Desain
                    Taman</button>
                <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Konstruksi</button>
                <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Pemeliharaan
                    Taman</button>
                <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Tanaman</button>
                <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Material</button>
                <button type="button" class="btn rounded-pill m-2" style="font-size: 14px;">Lainnya</button>
            </div>
        </div>

        <div class="text-overlay-footer">
            <p class="Hashtag">#</p>
            <p class="Semuabisatahu">SemuaBisaTahu</p>
        </div>
    </div>
    <footer
        style="background-color: #303030; color: white; height: 243px; display: flex; justify-content: center; align-items: center;  bottom: 0; width: 100%;">
        <div class="container text-center">
            <p><span style="font-weight: 700;"><span style="text-decoration: underline;">&copy;</span> PT
                    Lanskap
                    Indonesia
                    Ideal</span> 2023.</p>
            <a href="https://www.instagram.com/ideally.indonesia/" target="_blank"
                class="more-information btn rounded-pill">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="more-information btn rounded-pill" target="_blank">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="https://id.linkedin.com/company/ideally-indonesia" target="_blank"
                class="more-information btn rounded-pill">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="more-information btn rounded-pill">
                <i class="fab fa-whatsapp"></i>
                <p class="information-text">Informasi Lebih Lanjut</p>
            </a>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Javascript -->
    <script src="js/navbar.js"></script>
    <script src="js/baca-artikel.js"></script>

</body>