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
    <link rel="stylesheet" href="{{ asset('css/keranjang/style-pembayaran.css') }}" rel="stylesheet">


    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom select with image -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
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
                    <div class="bg-tosca rounded-5 p-2 px-5" style="width: fit-content;">2</div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="bg-grey rounded-5 p-2 px-5" style="width: fit-content;">3</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-grey rounded-5 p-2 d-flex justify-content-center">Keranjang</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-tosca rounded-5 p-2 d-flex justify-content-center">Pembayaran</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-grey rounded-5 p-2 d-flex justify-content-center">Konfirmasi</div>
                </div>
            </div>
        </div>
    </section>
    @php
    $total_qty = 0;
    @endphp
    <section id="content">
        <div class="container mt-4">
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row g-4">
                <div class="col-sm-6">
                    <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <div class="border-bottom border-3 d-flex justify-content-between px-5 py-2 mb-2">
                            <p class="mb-2 fw-bold" style="font-size: 14px">Ringkasan Produk</p>
                            <p class="mb-2 fw-bold" style="font-size: 14px">Total (Rp)</p>
                        </div>

                        <!-- DEDIKASI FLORA -->
                        @if (session()->has('cart_deflo'))
                        @foreach (session('cart_deflo', []) as $item)
                        <div class="border-bottom border-3 d-flex justify-content-between px-5 pt-2">
                            <p class="mb-2 fw-bold" style="font-size: 12px">{{ $item['produk']->nama_lokal }} (
                                {{ $item['quantity'] }} )</p>
                            <p class="mb-2 fw-bold harga" style="font-size: 12px">
                                {{ number_format((int)($item['produk']->harga_b2C_1_unit * $item['quantity']), 0, ',', '.') }}
                            </p>
                        </div>
                        @php
                        $total_qty += $item['quantity'];
                        @endphp
                        @endforeach
                        @endif

                        <!-- BATUNESIA -->
                        @if (session()->has('cart_batunesia'))
                        @foreach (session('cart_batunesia', []) as $item)
                        <div class="border-bottom border-3 d-flex justify-content-between px-5 pt-2">
                            <p class="mb-2 fw-bold" style="font-size: 12px">{{ $item['produk']->nama_produk }} (
                                {{ $item['quantity'] }} )</p>
                            <p class="mb-2 fw-bold harga" style="font-size: 12px">
                                {{ number_format((int)($item['produk']->harga_b2C_1_unit * $item['quantity']), 0, ',', '.') }}
                            </p>
                        </div>
                        @php
                        $total_qty += $item['quantity'];
                        @endphp
                        @endforeach
                        @endif

                        <!-- EVERLAS THINGS -->
                        @if (session()->has('cart_everlas'))
                        @foreach (session('cart_everlas', []) as $item)
                        <div class="border-bottom border-3 d-flex justify-content-between px-5 pt-2">
                            <p class="mb-2 fw-bold" style="font-size: 12px">{{ $item['produk']->nama_produk }} (
                                {{ $item['quantity'] }} )</p>
                            <p class="mb-2 fw-bold harga" style="font-size: 12px">
                                {{ number_format((int)($item['produk']->harga_b2C_1_unit * $item['quantity']), 0, ',', '.') }}
                            </p>
                        </div>
                        @php
                        $total_qty += $item['quantity'];
                        @endphp
                        @endforeach
                        @endif

                        <!-- AGRIGARD -->
                        @if (session()->has('cart_agrigard'))
                        @foreach (session('cart_agrigard', []) as $item)
                        <div class="border-bottom border-3 d-flex justify-content-between px-5 pt-2">
                            <p class="mb-2 fw-bold" style="font-size: 12px">{{ $item['produk']->nama_produk }} (
                                {{ $item['quantity'] }} )</p>
                            <p class="mb-2 fw-bold harga" style="font-size: 12px">
                                {{ number_format((int)($item['produk']->harga_b2C_1_unit * $item['quantity']), 0, ',', '.') }}
                            </p>
                        </div>
                        @php
                        $total_qty += $item['quantity'];
                        @endphp
                        @endforeach
                        @endif

                        <div class="border-bottom border-3 d-flex justify-content-between px-5 pt-2">
                            <p class="mb-2 fw-bold" style="font-size: 12px">Total Produk</p>
                            <p id="total_produk" class="mb-2 fw-bold" style="font-size: 12px"></p>
                        </div>
                        <div class="border-bottom border-3 px-5 py-2 mt-4">
                            <p class="mb-2 fw-bold" style="font-size: 14px">Catatan Penting</p>
                        </div>
                        <div class="px-5 mt-2">
                            <p class="mb-2" style="font-size: 11px"><span class="fw-bold">Jaminan Garansi</span> hanya
                                berlaku pada produk tertentu palin sedikit 30 hari sejak pembayaran.</p>
                            <p class="mb-2" style="font-size: 11px"><span class="fw-bold">Waktu Estimasi</span> di
                                lokasi pelanggan yaitu 7 (Tujuh) hari kerja untuk pulau Jawa-Bali-Madura sejak
                                konfirmasi pembayaran.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <form action="{{ route('store.bayar') }}" method="post">
                            @csrf
                            <div class="border-bottom border-3 d-flex justify-content-between px-5 py-2 mb-2">
                                <p class="mb-2 fw-bold" style="font-size: 14px">Detail Pembayaran</p>
                                <p class="mb-2 fw-bold" style="font-size: 14px">Total (Rp)</p>
                            </div>
                            <div class="px-5">
                                <div class="d-flex justify-content-between mt-2">
                                    <p class="mb-1 fw-bold" style="font-size: 12px;">Total Produk</p>
                                    <input type="text" name="total_harga" id="total_produk2"
                                                class="border-0 p-0 mb-1 fw-bold text-end" style="font-size: 12px;" readonly>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1 fw-bold" style="font-size: 12px;">Biaya Pengiriman</p>
                                    <input type="text" name="biaya_pengiriman" id="biaya_pengiriman"
                                                class="border-0 p-0 mb-1 fw-bold text-end" style="font-size: 12px;"
                                                value="{{ number_format((int)session('ongkir'), 0, ',', '.') }}"
                                                readonly>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1 fw-bold" style="font-size: 12px;">Biaya Penanganan</p>
                                    <p class="mb-1 fw-bold" style="font-size: 12px;">Gratis</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-1 fw-bold" style="font-size: 12px;">Biaya Platform</p>
                                    <p class="mb-1 fw-bold" style="font-size: 12px;">Gratis</p>
                                </div>
                            </div>
                            <div
                                class="border-top border-bottom border-3 d-flex justify-content-between mt-3 py-2 px-5">
                                <p class="m-0 fw-bold" style="font-size: 13px;">Total Pembayaran</p>
                                <input type="text" name="gross_amount" id="gross_amount" class="border-0 m-0 fw-bold p-0 text-end w-50" style="font-size: 13px;" readonly>
                            </div>
                            <div class="border-bottom border-3 mt-2 py-3 px-5">
                                <p class="m-0 fw-bold">Metode Pembayaran</p>
                            </div>
                            <div class="px-5 py-2">
                                <p class="mb-1 fw-bold" style="font-size: 12px;">Platform Pembayaran</p>
                                <select name="bank" id="select_bank" class="form-control border" required>
                                    <option value="">Pilih Bank</option>
                                    <option value="bca" data-img_src="{{ asset('img\konfirmasi\Bank_Central_Asia.svg.webp') }}">
                                        Virtual Account BCA</option>
                                    <option value="bni" data-img_src="{{ asset('img\konfirmasi\2560px-BNI_logo.svg.png') }}">
                                        Virtual Account BNI</option>
                                    <option value="bri" data-img_src="{{ asset('img\konfirmasi\Logo-Bank-BRI.png') }}">Virtual
                                        Account BRI</option>
                                    <option value="mandiri"
                                        data-img_src="{{ asset('img\konfirmasi\Bank_Mandiri_logo_2016.svg.png') }}">Mandiri Bill
                                    </option>
                                    <option value="permata" data-img_src="{{ asset('img\konfirmasi\Permata_Bank_Logo.png') }}">
                                        Permata VA</option>
                                    <option value="cimb" data-img_src="{{ asset('img\konfirmasi\CIMB-Logo.png') }}">
                                        Virtual Account CIMB</option>
                                </select>
                            </div>
                            <div class="border-top border-3 mt-3 px-5">
                                <div class="form-check d-flex justify-content-between align-items-center mt-1">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="acceptCheck" required>
                                    <label class="form-check-label" for="acceptCheck" style="font-size: 11px;">
                                        Pembeli menyetujui ringkasan produk, detail, dan metode pembayaran di atas.
                                    </label>
                                </div>
                            </div>
                            <div class="text-center my-2">
                                <input type="submit" value="Lanjut Pembayaran" style="padding: 0; padding-left: 6rem; padding-right: 6rem;" class="btn bg-tosca rounded-5 text-white"></input>\
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        function formatCurrency(amount) {
            var formattedAmount = amount.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&.');
            return formattedAmount;
        }

        function updateTotalProduk() {
            var hargaElements = document.getElementsByClassName('harga');
            var totalProduk = 0;
            for (var i = 0; i < hargaElements.length; i++) {
                totalProduk += parseFloat(hargaElements[i].innerText.replace(/\./g, '').replace(',', '.'));
            }
            document.getElementById('total_produk').innerText = formatCurrency(totalProduk);
            document.getElementById('total_produk2').value = formatCurrency(totalProduk);
        }

        function updateTotalBayar() {
            var totalProduk = parseFloat(document.getElementById('total_produk2').value.replace(/\./g, '')
                .replace(',', '.'));
            var biayaPengiriman = parseFloat(document.getElementById('biaya_pengiriman').value.replace(
                /\./g, '').replace(',', '.'));
            var totalBayar = totalProduk + biayaPengiriman;
            document.getElementById('gross_amount').value = formatCurrency(totalBayar);
        }

        updateTotalProduk();
        updateTotalBayar();
    });
    </script>
    <!-- scripts select option -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj){
                var data = $(obj.element).data();
                var text = $(obj.element).text();
                if(data && data['img_src']){
                    img_src = data['img_src'];
                    template = $("<div class=\"d-flex align-items-center px-2\"><img src=\"" + img_src + "\" style=\"width: 30%; height: auto;\"/><p style=\"padding-left: 10px; margin: 0; font-size: 13px;\">" + text + "</p></div>");
                    return template;
                }
            }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#select_bank').select2(options);
        $('.select2-container--default .select2-selection--single').css({'height': '40px'});
    </script>

</body>

</html>