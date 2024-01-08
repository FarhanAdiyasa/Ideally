<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth/assets/css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('auth/assets/css/login/style.css') }} ">

    <!-- Bootstrap JS -->
    <script src="{{ asset('auth/assets/js/bootstrap.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Title -->
    <section id="title" class="w-100 d-flex justify-content-center align-items-center pt-5 mt-5">
        <div class="bg-tosca text-white rounded-5 overlay-title">
            <h1>Masuk</h1>
        </div>
    </section>
    <!-- End Title -->

    <!-- Content -->
    <section id="content">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="modal show" tabindex="-1" style="display: block;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-5">
                        <div class="modal-header" style="border-bottom: none; justify-content: center;">
                            <h5 class="modal-title px-3 py-1 rounded-5" style="color: #06C195; font-weight: 700; border: 2px solid #06C195">Oops! Terjadi Kesalahan..</h5>
                        </div>
                        <div class="modal-body text-center">
                            <p class="fw-bold mb-1">{{ Session::get('error') }}</p>
                            <p class="mb-1">Yuk bergabung menjadi bagian <span style="color: #06C195; font-weight: 700;">Ideally Indonesia!</span></p>
                        </div>
                        <div class="modal-footer" style="border-top: none;">
                            <a href="" class="btn rounded-5 text-white me-3">Daftar Sekarang</a>
                            <button type="button" class="btn-dua rounded-5" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            $(document).ready(function() {
                $('.modal').modal('show');
            });
            </script>
            @endif

            <div class="bg-light rounded-4" style="padding: 2.5rem; padding-top: 4.5rem;">
                <div class="row g-4">
                    <div class="col-sm-6" style="height: cover;">
                        <div class="card text-white" style="border: none;">
                            <img src="{{ asset('auth/assets/img/LOGIN_SECTION.png') }} " alt=""
                                class="card-img rounded-3 w-100">
                            <div class="card-img-overlay">
                                <p class="hashtag">#</p>
                                <p class="card-text">Your<br> Landscape<br> Solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 ps-4">
                        <h5 class="title fw-bold" style="color: #727272;">Halo, Selamat Datang!</h5>
                        <div class="row mt-3">
                            <div class="col-sm-2" style="padding-top: 4.5rem;">
                                <div class="rounded-circle mt-2 bg-tosca text-white text-center"><i
                                        class="bi bi-person-fill p-1"></i></div>
                                <div class="rounded-circle mt-2 bg-tosca text-white text-center"><i
                                        class="bi bi-lock-fill p-1"></i></div>
                            </div>
                            <div class="col-sm-9 ps-0" style="height: fit-content;">
                                <div class="with-google text-center mb-2">
                                    <p class="label_login">Masuk dengan</p>
                                    <a href="{{ url('/auth/redirect') }}">
                                        <img src="assets/img/google_logo.png" class="d-block m-auto p-1"
                                            style="width: 35%;" alt="">
                                    </a>
                                    <p class="label_login">atau</p>
                                </div>
                                <form ction="/auth/login" method="POST" class="d-flex flex-column">
                                    @csrf
                                    <div>
                                        <input class="form-control mt-2" type="text" placeholder="E-mail"
                                            aria-label="input email" name="email">
                                        <input class="form-control mt-2" type="text" placeholder="Kata Sandi"
                                            aria-label="input password" name="password">
                                        <div class="forgot d-flex justify-content-center">
                                            <a href="{{ route('forget.password') }}" class="forgot-link">Lupa Kata
                                                Sandi?</a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Ingat Kata Sandi
                                            </label>
                                        </div>
                                        <button class="btn rounded-5 text-white" style="width: 120px;"
                                            type="submit">Masuk</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </section>
    <!-- End Content -->
</body>

</html>