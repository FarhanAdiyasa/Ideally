<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Font Awesomes Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/keranjang/style-konfirmasi.css') }}" rel="stylesheet">


    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Header -->
    <div class="over-light">
        <div class="bg-light rounded-5" style="width: 100%; height: 100%;"></div>
    </div>
    <div class="over-line">
        <svg xmlns="http://www.w3.org/2000/svg" width="626" height="5" viewBox="0 0 626 6" fill="none">
            <path d="M626 3.00006L-2.28882e-05 3.00001" stroke="#999999" stroke-width="5" stroke-dasharray="10 5" />
        </svg>
    </div>
    <section id="header-nav">
        <div class="container">
            <div class="row g-3 text-white">
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="bg-grey rounded-5 p-2 px-5" style="width: fit-content;">1</div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="bg-grey rounded-5 p-2 px-5" style="width: fit-content;">2</div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="bg-tosca rounded-5 p-2 px-5" style="width: fit-content;">3</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-grey rounded-5 p-2 d-flex justify-content-center">Keranjang</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-grey rounded-5 p-2 d-flex justify-content-center">Pembayaran</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-tosca rounded-5 p-2 d-flex justify-content-center">Konfirmasi</div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container mt-4">
            <div class="row g-4">
                <div class="col-sm-8">
                    <div class="bg-light rounded-4 p-4 pt-5" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <div class="text-center mb-4">
                            <h4 class="fw-bolder mb-4">Terima Kasih<br>Atas Pemesanan Anda!</h4>
                            <p>Nomor Pesanan Anda Adalah <span
                                    class="order_id bg-secondary py-1 px-3 fw-bold text-white rounded-4"
                                    style="font-size: 14px">#{{ $order->nomor_order }}</span></p>
                        </div>
                        <div class="border-top border-4 px-4 py-3">
                            <div class="row g-5">
                                <div class="col-sm-6">
                                    <div class="border-bottom border-3 mb-1">
                                        <p class="mb-1 fw-bold" style="font-size: 13px">Alamat Pengiriman</p>
                                    </div>
                                    <div class="mb-2">
                                        <p class="name mb-0" style="font-size: 10px">{{ $user->firstname }}</p>
                                        <p class="phone mb-0" style="font-size: 10px">{{ $user->telephone_number }}</p>
                                    </div>
                                    <div class="mb-2 pe-5">
                                        <p class="mb-0" style="font-size: 10px; text-align: justify; line-height: 14px">
                                            Perum Desa Permata Kemang Blok A2, Desa Tegal, Kecamatan Kemang, Kabupaten
                                            Pacitan</p>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="border-bottom border-3 mb-1">
                                        <p class="mb-1 fw-bold" style="font-size: 13px">Metode Pembayaran</p>
                                    </div>
                                    <div class="mb-2">
                                        @if ($data['bank'] == 'bni')
                                        <img src="{{ asset('img/konfirmasi/2560px-BNI_logo.svg.png') }}" width="50" alt="">
                                        <span class="ps-1" style="font-size: 11px">Virtual Account BNI</span>
                                        @elseif ($data['bank'] == 'bri')
                                        <img src="{{ asset('img\konfirmasi\Logo-Bank-BRI.png') }}" width="50" alt="">
                                        <span class="ps-1" style="font-size: 11px">Virtual Account BRI</span>
                                        @elseif ($data['bank'] == 'bca')
                                        <img src="{{ asset('img\konfirmasi\Bank_Central_Asia.svg.webp') }}" width="50" alt="">
                                        <span class="ps-1" style="font-size: 11px">Virtual Account BCA</span>
                                        @elseif ($data['bank'] == 'mandiri')
                                        <img src="{{ asset('img\konfirmasi\Bank_Mandiri_logo_2016.svg.png') }}" width="50" alt="">
                                        <span class="ps-1" style="font-size: 11px">Virtual Account Mandiri Bill</span>
                                        @elseif ($data['bank'] == 'permata')
                                        <img src="{{ asset('img\konfirmasi\Permata_Bank_Logo.png') }}" width="50" alt="">
                                        <span class="ps-1" style="font-size: 11px">Virtual Account Permata</span>
                                        @elseif ($data['bank'] == 'cimb')
                                        <img src="{{ asset('img\konfirmasi\CIMB-Logo.png') }}" width="50" alt="">
                                        <span class="ps-1" style="font-size: 11px">Virtual Account CIMB</span>
                                        @endif
                                    </div>
                                    <div class="border-bottom border-3 mb-1 mt-4">
                                        <p class="mb-1 fw-bold" style="font-size: 13px">Status Pembayaran</p>
                                    </div>
                                    <div class="mb-2">
                                        <img src="{{ asset('img/konfirmasi/1360989.webp') }}" width="25" alt="">
                                        <span class="ps-1" style="font-size: 11px">Menunggu Pembayaran</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top border-4 px-4 py-3">
                            <div class="border-bottom border-3 mb-1">
                                <p class="mb-1 fw-bold" style="font-size: 13px">Petunjuk Pembayaran</p>
                            </div>
                            <p class="mb-3" style="font-size: 11px">Silahkan melanjutkan pembayaran dengan Virtual
                                Account dibawah.</p>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    @if ($data['bank'] == 'bni')
                                    <img src="{{ asset('img/konfirmasi/2560px-BNI_logo.svg.png') }}" width="100" alt="">
                                    <p class="mb-0" style="font-size: 11px">Virtual Account BNI</p>
                                    @elseif ($data['bank'] == 'bri')
                                    <img src="{{ asset('img\konfirmasi\Logo-Bank-BRI.png') }}" width="100" alt="">
                                    <p class="mb-0" style="font-size: 11px">Virtual Account BRI</p>
                                    @elseif ($data['bank'] == 'bca')
                                    <img src="{{ asset('img\konfirmasi\Bank_Central_Asia.svg.webp') }}" width="100" alt="">
                                    <p class="mb-0" style="font-size: 11px">Virtual Account BCA</p>
                                    @elseif ($data['bank'] == 'mandiri')
                                    <img src="{{ asset('img\konfirmasi\Bank_Mandiri_logo_2016.svg.png') }}" width="100" alt="">
                                    <p class="mb-0" style="font-size: 11px">Virtual Account Mandiri Bill</p>
                                    @elseif ($data['bank'] == 'permata')
                                    <img src="{{ asset('img\konfirmasi\Permata_Bank_Logo.png') }}" width="100" alt="">
                                    <p class="mb-0" style="font-size: 11px">Virtual Account Permata</p>
                                    @elseif ($data['bank'] == 'cimb')
                                    <img src="{{ asset('img\konfirmasi\CIMB-Logo.png') }}" width="100" alt="">
                                    <p class="mb-0" style="font-size: 11px">Virtual Account CIMB</p>
                                    @endif
                                </div>
                                <div class="col-sm-7 d-flex flex-column justify-content-center align-items-start">
                                    @if ($data['bank'] == 'mandiri')
                                    <h5 class="fw-bold mb-1" style="color: #06C195">{{ $data['bill_key'] }}<span><i
                                                class="fs-7 bi bi-copy ps-3"></i></span></h5>
                                    @else
                                    <h5 class="fw-bold mb-1" style="color: #06C195">{{ $data['va_number'] }}<span><i
                                                class="fs-7 bi bi-copy ps-3"></i></span></h5>
                                    @endif
                                    <p class="mb-0" style="font-size: 11px">Expired time: {{ $data['expiry_time'] }}</p>
                                </div>
                            </div>
                            <p class="mb-3" style="font-size: 11px; text-align: justify; line-height: 14px">Dalam 24 jam
                                kami tidak menerima konfirmasi pembayaran maka kami anggap order pembelian Anda batal.
                                Harap untuk segera membayar dan melakukan konfirmasi</p>
                        </div>
                        <div class="border-top border-4 text-center py-3">
                            <a href="{{ route('konfirmasi.status', ['order_id' => $order->nomor_order]) }}" class="btn bg-tosca rounded-5 text-white" style="padding: 0; padding-left: 10rem; padding-right: 10rem;">Konfirmasi</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <div class="border-bottom border-3 mb-2 text-center">
                            <p class="mb-2 fw-bold">Ringkasan Produk</p>
                        </div>
                        <div class="border-bottom border-2">
                            @foreach ($order->nurseris as $deflo)
                            <div class="border-bottom border-2 d-flex justify-content-between mt-2">
                                <p class="mb-2" style="font-size: 12px;">{{ $deflo->nama_lokal }}</p>
                                <p class="mb-2" style="font-size: 12px;"></p>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Total Produk</p>
                            <p class="mb-1 fw-bold" style="font-size: 12px;">{{ number_format($order->total_harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Biaya Pengiriman</p>
                            <p class="mb-1 fw-bold" style="font-size: 12px;">{{ number_format($order->biaya_ongkir, 0, ',', '.') }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Biaya Penanganan</p>
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Gratis</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Biaya Platform</p>
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Gratis</p>
                        </div>
                        <div class="border-top border-3 d-flex justify-content-between mt-3 pt-2">
                            <p class="mb-1 fw-bold" style="font-size: 12px;">Total Pembayaran</p>
                            <p class="mb-1 fw-bold" style="font-size: 12px;">{{ number_format($order->grand_total, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>