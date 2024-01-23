<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Font Awesomes Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/pesanan/style-daftar-pesanan.css') }}">

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
</head>

<body>

    <!-- Header -->
    <div class="over-light">
        <div class="bg-light rounded-5" style="width: 100%; height: 100%;"></div>
    </div>
    <section id="header-nav">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="bg-tosca rounded-5 p-2 px-5 text-white" style="width: fit-content;">
                <h3 class="m-0">Daftar Pesanan</h3>
            </div>
        </div>
    </section>

    <!-- Sub Header -->
    <section id="sub-header">
        <div class="container mt-4">
            <a href="{{ route('pesanan.dikemas') }}" class="{{ $page == 'dikemas' ? 'bg-tosca' : 'bg-grey' }} btn text-white rounded-5 px-3">Sedang Dikemas</a>
            <a href="{{ route('pesanan.dikirim') }}" class="{{ $page == 'dikirim' ? 'bg-tosca' : 'bg-grey' }} btn text-white rounded-5 px-3">Dikirim</a>
            <a href="{{ route('pesanan.selesai') }}" class="{{ $page == 'selesai' ? 'bg-tosca' : 'bg-grey' }} btn text-white rounded-5 px-3">Selesai</a>
        </div>
    </section>

    @php
    $rowcount = 0;
    @endphp

    <!-- Main Content -->
    <section id="content">
        <div class="container mt-4">
            <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                <div class="row g-5">
                    @foreach ($orders as $order)
                    <!-- 2+ Produk -->
                    <div class="col-sm-6">
                        <div class="card-pesanan">
                            <div>
                                <div
                                    class="border-top border-bottom border-3 d-flex justify-content-between align-items-center px-1 py-2">
                                    <div class="nomor-pesanan">
                                        <p class="m-0 fw-bold" style="font-size: 14px;">Pesanan <span
                                                class="bg-grey text-white p-2 rounded-5"
                                                style="font-size: 12px;">#{{ $order->nomor_order }}</span></p>
                                    </div>
                                    <a href="{{ route('pesanan.rincian', ['id_order' => $order->id_order]) }}" class="btn bg-tosca rounded-5 fw-bold text-white"
                                        style="font-size: 12px;">{{ $order->status_pesanan == 'Selesai' ? 'Nilai Pesanan' : 'Lihat Pesanan'}}</a>
                                </div>

                                @php
                                $rowcount = 0;
                                $rowcount += $order->nurseris()->count();
                                $rowcount += $order->batunesias()->count();
                                $rowcount += $order->everlas_things()->count();
                                $rowcount += $order->agrigards()->count();
                                $rowcount += $order->konkuritos()->count();
                                $rowcount += $order->shineages()->count();
                                @endphp

                                <div class="border-bottom border-1 d-flex align-items-center py-2">
                                    <div class="text-center" style="font-size: 12px; width: 50px;">01</div>
                                    @if ($order->nurseris()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->nurseris()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->nurseris()->first()->nama_lokal }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->nurseris()->first()->pivot->quantity }} item</p>
                                    @elseif ($order->batunesias()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->batunesias()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->batunesias()->first()->nama_produk }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->batunesias()->first()->pivot->quantity }} item</p>
                                    @elseif ($order->agrigards()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->agrigards()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->agrigards()->first()->nama_produk }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->agrigards()->first()->pivot->quantity }} item</p>
                                    @elseif ($order->everlas_things()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->everlas_things()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->everlas_things()->first()->nama_produk }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->everlas_things()->first()->pivot->quantity }} item</p>
                                    @endif
                                </div>

                                @if ($rowcount >= 2)
                                <div class="border-bottom border-1 d-flex align-items-center py-2">
                                    <div class="text-center" style="font-size: 12px; width: 50px;">02</div>
                                    @if ($order->everlas_things()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->everlas_things()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->everlas_things()->first()->nama_produk }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->everlas_things()->first()->pivot->quantity }} item</p>
                                    @elseif ($order->agrigards()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->agrigards()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->agrigards()->first()->nama_produk }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->agrigards()->first()->pivot->quantity }} item</p>
                                    @elseif ($order->batunesias()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->batunesias()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->batunesias()->first()->nama_produk }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->batunesias()->first()->pivot->quantity }} item</p>
                                    @elseif ($order->nurseris()->exists())
                                    <div class="img-container">
                                        <img src="{{ $order->nurseris()->first()->gambar_1 }}" alt="">
                                    </div>
                                    <div style="width: 200px;">
                                        <p class="m-0 ps-2" style="font-size: 12px;">{{ $order->nurseris()->first()->nama_lokal }}</p>
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">{{ $order->nurseris()->first()->pivot->quantity }} item</p>
                                    @endif
                                </div>
                                @endif
                                @if ($rowcount > 2)
                                <div class="d-flex align-items-center py-2">
                                    <div class="text-center text-white" style="font-size: 12px; width: 50px;">03</div>
                                    <div class="img-container">
                                        <img src="assets/img/contoh-produk.jpg" alt="">
                                    </div>
                                    <p class="m-0 px-2" style="font-size: 12px;">Dan lain-lain</p>
                                </div>
                                @endif
                            </div>
                            
                            <div
                                class="border-top border-bottom border-3 d-flex justify-content-between align-items-center px-4 py-1">
                                <p class="m-0 fw-bold" style="font-size: 12px;">Total Pesanan</p>
                                <p class="m-0 fw-bold">{{ number_format($order->grand_total, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- CTA -->
                    <div class="col-sm-6">
                        <div class="card-pesanan">
                            <div class="rounded-4 h-100 text-center"
                                style="background-color: lightgray; padding: 6rem;">
                                <p class="mb-1 text-center" style="font-size: 12px;">Anda masih <br> memiliki kebutuhan
                                    lain?</p>
                                <a href="" class="btn bg-tosca rounded-5 text-white" style="font-size: 12px;">Buat
                                    Pesanan Lain</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="cta mt-5 text-center">
                    <p class="m-0" style="font-size: 14px;">Ada keluhan pertanyaan? <span>
                            <a href="" class="btn bg-tosca rounded-5 text-white" style="font-size: 12px;">Hubungi
                                kami</a>
                        </span></p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>