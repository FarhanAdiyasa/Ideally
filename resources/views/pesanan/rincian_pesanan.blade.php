<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Pesanan</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Font Awesomes Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/pesanan/style-rincian-pesanan.css') }}">

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
                <h3 class="m-0">Rincian Pesanan</h3>
            </div>
        </div>
    </section>

    @php
        $defloTotal = 0;
        $agrigardTotal = 0;
        $batunesiaTotal = 0;
        $everlasTotal = 0;
    @endphp

    <!-- Main Content -->
    <section id="content">
        <div class="container mt-5">
            <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                <div class="border-bottom border-3 d-flex justify-content-between align-items-center px-1 py-2">
                    <div class="nomor-pesanan">
                        <p class="m-0 fw-bold" style="font-size: 14px;">Pesanan <span
                                class="bg-grey text-white p-2 rounded-5"
                                style="font-size: 12px;">#{{ $order->nomor_order }}</span></p>
                    </div>
                    <a href="" class="btn bg-tosca rounded-5 fw-bold text-white" style="font-size: 12px;">Kembali Ke
                        Daftar Pesanan</a>
                </div>
                <table class="table table-borderless table-cart">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Detail Produk</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Unit</th>
                            <th scope="col" class="text-end">Harga (Rp)</th>
                            <th scope="col" class="text-end">Total (Rp)</th>
                            <th scope="col" class="d-none">Act</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($order->nurseris()->exists())
                        <tr class="border-brand">
                            <th colspan="5" style="text-align: center;">Dedikasi Flora</th>
                            @foreach ($order->nurseris as $item)
                            @php
                                $defloTotal += $item->pivot->quantity * $item->harga_b2C_1_unit;
                            @endphp
                            @endforeach
                            <th class="total-brand">{{ number_format($defloTotal, 0, ',', '.') }}</th>
                        </tr>
                        @foreach ($order->nurseris as $item)
                        @php
                            $subtotal = $item->pivot->quantity * $item->harga_b2C_1_unit;
                        @endphp
                        <tr class="border-bottom baris-produk">
                            <td class="number">No</td>
                            <td class="detail">
                                <div class="row g-1">
                                    <div class="col-2">
                                        <div class="img-container">
                                            <img src="{{ $item->gambar_1 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">{{ $item->nama_lokal }}</div>
                                </div>
                            </td>
                            <td class="jumlah fw-bold">{{ $item->pivot->quantity }}</td>
                            <td class="unit">{{ $item->satuan }}</td>
                            <td class="harga">{{ number_format($item->harga_b2C_1_unit, 0, ',', '.') }}</td>
                            <td class="total">{{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td class="rating-link">
                                @if ($order->status_pesanan == 'Selesai')
                                <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal"
                                    data-bs-target="#inputRatingModal_deflo_{{ $item->id_nurseri }}">
                                    <i class="bi bi-star"></i>
                                </a>

                                <!-- <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal" data-bs-target="#showRatingModal">
                                <i class="bi bi-star-fill"></i>
                            </a> -->
                                @endif
                            </td>

                            <!-- Input Rating Modal -->
                            <div class="modal fade" id="inputRatingModal_deflo_{{ $item->id_nurseri }}"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div style="width: 60%;">
                                                    <p class="m-0" style="font-size: 13px;">{{ $item->nama_lokal }}</p>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="bg-tosca rounded-4 pt-1 px-3 my-3 d-flex justify-content-center"
                                                style="width: 100%;">
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
                                            <div class="form-floating mb-3"
                                                style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Deskripsi</label>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn bg-tosca rounded-5 px-3 p-1 text-white"
                                                    style="font-size: 14px;">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                        @endif

                        @if ($order->batunesias()->exists())
                        <tr class="border-brand">
                            <th colspan="5" style="text-align: center;">Batunesia</th>
                            @foreach ($order->batunesias as $item)
                            @php
                                $batunesiaTotal += $item->pivot->quantity * $item->harga_b2C_1_unit;
                            @endphp
                            @endforeach
                            <th class="total-brand">{{ number_format($batunesiaTotal, 0, ',', '.') }}</th>
                        </tr>
                        @foreach ($order->batunesias as $item)
                        @php
                            $subtotal = $item->pivot->quantity * $item->harga_b2C_1_unit;
                        @endphp
                        <tr class="border-bottom baris-produk">
                            <td class="number">No</td>
                            <td class="detail">
                                <div class="row g-1">
                                    <div class="col-2">
                                        <div class="img-container">
                                            <img src="{{ $item->gambar_1 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">{{ $item->nama_produk }}</div>
                                </div>
                            </td>
                            <td class="jumlah fw-bold">{{ $item->pivot->quantity }}</td>
                            <td class="unit">{{ $item->satuan }}</td>
                            <td class="harga">{{ number_format($item->harga_b2C_1_unit, 0, ',', '.') }}</td>
                            <td class="total">{{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td class="rating-link">
                                @if ($order->status_pesanan == 'Selesai')
                                <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal"
                                    data-bs-target="#inputRatingModal_batu_{{ $item->id_batu }}">
                                    <i class="bi bi-star"></i>
                                </a>

                                <!-- <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal" data-bs-target="#showRatingModal">
                                <i class="bi bi-star-fill"></i>
                            </a> -->
                                @endif
                            </td>

                            <!-- Input Rating Modal -->
                            <div class="modal fade" id="inputRatingModal_batu_{{ $item->id_batu }}"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div style="width: 60%;">
                                                    <p class="m-0" style="font-size: 13px;">{{ $item->nama_produk }}</p>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="bg-tosca rounded-4 pt-1 px-3 my-3 d-flex justify-content-center"
                                                style="width: 100%;">
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
                                            <div class="form-floating mb-3"
                                                style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Deskripsi</label>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn bg-tosca rounded-5 px-3 p-1 text-white"
                                                    style="font-size: 14px;">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                        @endif

                        @if ($order->everlas_things()->exists())
                        <tr class="border-brand">
                            <th colspan="5" style="text-align: center;">Everlas Things</th>
                            @foreach ($order->everlas_things as $item)
                            @php
                                $everlasTotal += $item->pivot->quantity * $item->harga_b2C_1_unit;
                            @endphp
                            @endforeach
                            <th class="total-brand">{{ number_format($everlasTotal, 0, ',', '.') }}</th>
                        </tr>
                        @foreach ($order->everlas_things as $item)
                        @php
                            $subtotal = $item->pivot->quantity * $item->harga_b2C_1_unit;
                        @endphp
                        <tr class="border-bottom baris-produk">
                            <td class="number">No</td>
                            <td class="detail">
                                <div class="row g-1">
                                    <div class="col-2">
                                        <div class="img-container">
                                            <img src="{{ $item->gambar_1 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">{{ $item->nama_produk }}</div>
                                </div>
                            </td>
                            <td class="jumlah fw-bold">{{ $item->pivot->quantity }}</td>
                            <td class="unit">{{ $item->satuan }}</td>
                            <td class="harga">{{ number_format($item->harga_b2C_1_unit, 0, ',', '.') }}</td>
                            <td class="total">{{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td class="rating-link">
                                @if ($order->status_pesanan == 'Selesai')
                                <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal"
                                    data-bs-target="#inputRatingModal_everlas_{{ $item->id_everlas_things }}">
                                    <i class="bi bi-star"></i>
                                </a>

                                <!-- <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal" data-bs-target="#showRatingModal">
                                <i class="bi bi-star-fill"></i>
                            </a> -->
                                @endif
                            </td>

                            <!-- Input Rating Modal -->
                            <div class="modal fade" id="inputRatingModal_everlas_{{ $item->id_everlas_things }}"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div style="width: 60%;">
                                                    <p class="m-0" style="font-size: 13px;">{{ $item->nama_produk }}</p>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="bg-tosca rounded-4 pt-1 px-3 my-3 d-flex justify-content-center"
                                                style="width: 100%;">
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
                                            <div class="form-floating mb-3"
                                                style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Deskripsi</label>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn bg-tosca rounded-5 px-3 p-1 text-white"
                                                    style="font-size: 14px;">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                        @endif

                        @if ($order->agrigards()->exists())
                        <tr class="border-brand">
                            <th colspan="5" style="text-align: center;">Agrigards</th>
                            @foreach ($order->agrigards as $item)
                            @php
                                $agrigardTotal += $item->pivot->quantity * $item->harga_b2C_1_unit;
                            @endphp
                            @endforeach
                            <th class="total-brand">{{ number_format($agrigardTotal, 0, ',', '.') }}</th>
                        </tr>
                        @foreach ($order->agrigards as $item)
                        @php
                            $subtotal = $item->pivot->quantity * $item->harga_b2C_1_unit;
                        @endphp
                        <tr class="border-bottom baris-produk">
                            <td class="number">No</td>
                            <td class="detail">
                                <div class="row g-1">
                                    <div class="col-2">
                                        <div class="img-container">
                                            <img src="{{ $item->gambar_1 }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-10 d-flex align-items-center">{{ $item->nama_produk }}</div>
                                </div>
                            </td>
                            <td class="jumlah fw-bold">{{ $item->pivot->quantity }}</td>
                            <td class="unit">{{ $item->satuan }}</td>
                            <td class="harga">{{ number_format($item->harga_b2C_1_unit, 0, ',', '.') }}</td>
                            <td class="total">{{ number_format($subtotal, 0, ',', '.') }}</td>
                            <td class="rating-link">
                                @if ($order->status_pesanan == 'Selesai')
                                <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal"
                                    data-bs-target="#inputRatingModal_agrigard_{{ $item->id_agrigard }}">
                                    <i class="bi bi-star"></i>
                                </a>

                                <!-- <a href="" class="link" style="font-size: 18px;" data-bs-toggle="modal" data-bs-target="#showRatingModal">
                                <i class="bi bi-star-fill"></i>
                            </a> -->
                                @endif
                            </td>

                            <!-- Input Rating Modal -->
                            <div class="modal fade" id="inputRatingModal_agrigard_{{ $item->id_agrigard }}"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center">
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div class="img-rating">
                                                    <img src="assets/img/contoh-produk.jpg" alt="">
                                                </div>
                                                <div style="width: 60%;">
                                                    <p class="m-0" style="font-size: 13px;">{{ $item->nama_produk }}</p>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="bg-tosca rounded-4 pt-1 px-3 my-3 d-flex justify-content-center"
                                                style="width: 100%;">
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
                                            <div class="form-floating mb-3"
                                                style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Deskripsi</label>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn bg-tosca rounded-5 px-3 p-1 text-white"
                                                    style="font-size: 14px;">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                        @endif
                        <tr class="border-brand">
                            <td colspan="5" class="text-end fw-bold">Biaya Pengiriman</td>
                            <td class="text-end fw-bold">{{ number_format($order->biaya_ongkir, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="border-brand">
                            <td colspan="5" class="text-end fw-bold">Total Keseluruhan</td>
                            <td class="text-end fw-bold">{{ number_format($order->grand_total, 0, ',', '.') }}</td>
                        </tr>
                        <tr class="border-brand">
                            <td colspan="5" class="text-end fw-bold">Tanggal Pesanan dibuat</td>
                            <td class="text-end fw-bold">{{ $order->created_at }}</td>
                        </tr>
                        <tr class="border-brand">
                            <td colspan="5" class="text-end fw-bold">Tangal Pesanan dibayar</td>
                            <td class="text-end fw-bold">{{ $order->tanggal_pembayaran }}</td>
                        </tr>
                        @if ($order->status_pesanan != 'Sedang Dikemas')
                        <tr class="border-brand">
                            <td colspan="5" class="text-end fw-bold">Resi Pengiriman (JNE REG)</td>
                            <td class="text-end fw-bold">{{ $order->resi_pengiriman }}</td>
                        </tr>
                        @endif

                        @if ($order->status_pesanan == 'Dikirim')
                        <tr>
                            <td colspan="6" class="text-center">
                                <a href="{{ route('pesanan.konfirmasi', ['id_order' => $order->id_order]) }}" class="btn bg-tosca rounded-5 fw-bold text-white" style="font-size: 12px;">Pesanan Diterima</a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>

</body>

</html>