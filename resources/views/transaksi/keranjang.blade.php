<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6990JVL0LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6990JVL0LN');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Font Awesomes Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/keranjang/style.css') }}" rel="stylesheet">


    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
                    <div class="bg-tosca rounded-5 p-2 px-5" style="width: fit-content;">1</div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="bg-grey rounded-5 p-2 px-5" style="width: fit-content;">2</div>
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <div class="bg-grey rounded-5 p-2 px-5" style="width: fit-content;">3</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-tosca rounded-5 p-2 d-flex justify-content-center">Keranjang</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-grey rounded-5 p-2 d-flex justify-content-center">Pembayaran</div>
                </div>
                <div class="col-sm-4">
                    <div class="bg-grey rounded-5 p-2 d-flex justify-content-center">Konfirmasi</div>
                </div>
            </div>
        </div>
    </section>

    @php
    $berat_deflo = 0;
    $berat_agrigard = 0;
    $berat_everlas = 0;
    $berat_batunesia = 0;
    $armada = [];
    @endphp

    <section id="content">
        <div class="container mt-4">
            <div class="row g-4">
                @if(empty(session('cart_deflo')) && empty(session('cart_agrigard')) &&
                empty(session('cart_batunesia')))
                <div class="col-sm-12">
                    <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <div class="text-center p-3">
                            <h3 class="text-danger">Oops!</h3>
                            <h1 class="text-secondary opacity-50" style="font-size: 50px;"><i
                                    class="bi bi-cart-x-fill"></i></h1>
                            <p>Cart is empty</p>
                            <div class="mt-3">
                                <a href="javascript:history.go(-1)" class="btn btn-bayar bg-tosca rounded-5">Lihat
                                    Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-sm-9">
                    <div class="bg-light rounded-4 p-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <table class="table table-borderless table-cart">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Detail Produk</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Total (Rp)</th>
                                    <th scope="col" class="d-none">Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ( session()->has('cart_deflo') )
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Dedikasi Flora</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img
                                                src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                @foreach ( session('cart_deflo', []) as $item )
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;"></td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ $item['produk']->gambar_1 }}"
                                                        alt="{{ $item['produk']->nama_produk }}">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">{{ $item['produk']->nama_lokal
                                                        }}</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <!-- Tambahkan tombol untuk mengatur jumlah produk -->
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="{{ $item['quantity'] }}"
                                            readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item['produk']->satuan }}</td>
                                    <td class="harga">
                                        {{ number_format((int)$item['produk']->harga_b2C_1_unit, 0, ',', '.') }}</td>
                                    <td class="total">{{ $item['quantity'] * $item['produk']->harga_b2C_1_unit }}
                                    </td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        {{-- <form action="{{ route('hapusDariKeranjang', ['id_batu' => $key]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            style="border: none; background: none; padding: 0; margin: 0; outline: none;">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="Hapus Produk"
                                                class="d-block w-50" style="border: none;">
                                        </button>
                                        </form> --}}

                                    </td>
                                </tr>
                                @php
                                $berat_deflo += $item['produk']->berat_gram * $item['quantity'];
                                $armada[] = $item['produk']->armada_minimum;
                                @endphp
                                @endforeach
                                @endif

                                @if (session()->has('cart_agrigard'))
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Agrigard</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img
                                                src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                @foreach (session('cart_agrigard', []) as $item)
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;"></td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ $item['produk']->gambar_1 }}"
                                                        alt="{{ $item['produk']->nama_produk }}">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">{{ $item['produk']->nama_produk
                                                        }}</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <!-- Tambahkan tombol untuk mengatur jumlah produk -->
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="{{ $item['quantity'] }}"
                                            readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item['produk']->satuan }}</td>
                                    <td class="harga">
                                        {{ number_format((int)$item['produk']->harga_b2C_1_unit, 0, ',', '.') }}</td>
                                    <td class="total">{{ $item['quantity'] * $item['produk']->harga_b2C_1_unit }}
                                    </td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        {{-- <form action="{{ route('hapusDariKeranjang', ['id_batu' => $key]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            style="border: none; background: none; padding: 0; margin: 0; outline: none;">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="Hapus Produk"
                                                class="d-block w-50" style="border: none;">
                                        </button>
                                        </form> --}}

                                    </td>
                                </tr>
                                @php
                                $berat_agrigard += $item['produk']->berat_gram * $item['quantity'];
                                $armada[] = $item['produk']->armada_minimum;
                                @endphp
                                @endforeach
                                @endif

                                @if (session()->has('cart_batunesia'))
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Batunesia</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img
                                                src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                @foreach (session('cart_batunesia', []) as $item)
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;"></td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ $item['produk']->gambar_1 }}"
                                                        alt="{{ $item['produk']->nama_produk }}">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">{{ $item['produk']->nama_produk
                                                        }}</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <!-- Tambahkan tombol untuk mengatur jumlah produk -->
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="{{ $item['quantity'] }}"
                                            readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item['produk']->satuan }}</td>
                                    <td class="harga">
                                        {{ number_format((int)$item['produk']->harga_b2C_1_unit, 0, ',', '.') }}</td>
                                    <td class="total">{{ $item['quantity'] * $item['produk']->harga_b2C_1_unit }}
                                    </td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        {{-- <form action="{{ route('hapusDariKeranjang', ['id_batu' => $key]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            style="border: none; background: none; padding: 0; margin: 0; outline: none;">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="Hapus Produk"
                                                class="d-block w-50" style="border: none;">
                                        </button>
                                        </form> --}}

                                    </td>
                                </tr>
                                @php
                                $berat_batunesia += $item['produk']->berat_gram * $item['quantity'];
                                $armada[] = $item['produk']->armada_minimum;
                                @endphp
                                @endforeach
                                @endif

                                @if (session()->has('cart_everlas'))
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Everlas Thing</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img
                                                src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                @foreach (session('cart_everlas', []) as $item)
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;"></td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ $item['produk']->gambar_1 }}"
                                                        alt="{{ $item['produk']->nama_produk }}">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">{{ $item['produk']->nama_produk
                                                        }}</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <!-- Tambahkan tombol untuk mengatur jumlah produk -->
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="{{ $item['quantity'] }}"
                                            readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item['produk']->satuan }}</td>
                                    <td class="harga">
                                        {{ number_format((int)$item['produk']->harga_b2C_1_unit, 0, ',', '.') }}</td>
                                    <td class="total">{{ $item['quantity'] * $item['produk']->harga_b2C_1_unit }}
                                    </td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        {{-- <form action="{{ route('hapusDariKeranjang', ['id_batu' => $key]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            style="border: none; background: none; padding: 0; margin: 0; outline: none;">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="Hapus Produk"
                                                class="d-block w-50" style="border: none;">
                                        </button>
                                        </form> --}}

                                    </td>
                                </tr>
                                @php
                                $berat_everlas += $item['produk']->berat_gram * $item['quantity'];
                                $armada[] = $item['produk']->armada_minimum;
                                @endphp
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="text-center mt-2">
                            <a href="javascript:history.go(-1)" class="btn btn-bayar bg-tosca rounded-5">Lihat Produk
                                Lainnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bg-light rounded-4 p-2 py-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);">
                        <table class="table table-borderless table-bayar">
                            <thead>
                                <tr>
                                    <th colspan="2">Ringkasan Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="total-produk">Total Produk (<span></span>)</td>
                                    <td id="total-harga"></td>
                                </tr>
                                @if (isset($ongkir))
                                @foreach ($ongkir[0]['costs'] as $costs)
                                @if ($costs['service'] == 'REG' )
                                <tr>
                                    <td>Biaya Kirim (JNE REG)</td>
                                    <td class="text-end" id="ongkir">
                                        {{ number_format($costs['cost'][0]['value'], 0, '.', '.') }}
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <table class="table table-borderless table-bayar">
                            <thead>
                                <tr>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-end" id="total"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="responseContainer"></div>
                        <div class="d-flex flex-column align-items-center">
                            @if (isset($ongkir))
                            <div class="mt-3">
                                <a href="" class="btn btn-bayar bg-tosca rounded-5">Lanjut ke Pembayaran</a>
                            </div>
                            @else
                            <div class="mt-3">
                                <form action="{{ route('calculate.ongkir') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="79" name="origin" id="origin" class="form-control">
                                    <input type="hidden" value="153" name="destination" id="destination"
                                        class="form-control">
                                    <input type="hidden" value="{{ $berat_agrigard+$berat_deflo+$berat_batunesia+$berat_everlas }}" name="weight"
                                        id="weight" class="form-control">
                                    <input type="hidden" value="jne" name="courier" id="courier" class="form-control">
                                    <input type="submit" value="Cek Ongkir" name="btnCek" id="btnCek"
                                        class="btn btn-bayar bg-tosca rounded-5">
                                </form>
                            </div>
                            @endif
                            <div class="mt-4">
                                <p class="text-center m-0" style="font-size: 10px;">Dukungan Pembayaran</p>
                                <img src="{{ asset('img/keranjang/image 41.png') }}" alt="" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function() {
        function hitungTotal() {
            var totalHarga = parseInt($('#total-harga').text().replace(/\D/g, '')); // Ambil nilai total harga
            var ongkirElement = $('#ongkir');

            if (ongkirElement.length > 0) {
                var ongkir = parseInt(ongkirElement.text().replace(/\D/g, '')); // Ambil nilai ongkir
                var total = totalHarga + ongkir; // Jumlahkan total harga dengan ongkir
                $('#total').text(total.toLocaleString('id-ID')); // Tampilkan hasil penjumlahan di 'total'
            } else {
                $('#total').text(totalHarga.toLocaleString('id-ID')); // Tampilkan total harga saja
            }
        }

        function recalculateTotal() {
            $('.table tbody tr').each(function() {
                var jumlah = parseInt($(this).find('.quantity').val());
                var harga = parseFloat($(this).find('.harga').text().replace(/\./g, '').replace(',',
                    '.'));

                var total = jumlah * harga;
                $(this).find('.total').text(total.toLocaleString('id-ID'));
            });

            $('.total-brand').each(function() {
                var totalHargaMerek = 0;
                var $currentBrand = $(this).closest('tr');
                var $brandRows = $currentBrand.nextUntil('tr:has(th)');

                $brandRows.each(function() {
                    var jumlah = parseInt($(this).find('.quantity').val());
                    var harga = parseFloat($(this).find('.harga').text().replace(/\./g, '')
                        .replace(',', '.'));

                    var total = jumlah * harga;
                    totalHargaMerek += total;
                });

                $(this).text(totalHargaMerek.toLocaleString('id-ID'));
            });

            var totalProduk = $('.table tbody tr.baris-produk').length;
            $('#total-produk span').text(totalProduk);

            var totalHarga = 0;
            $('.harga').each(function() {
                var jumlah = parseInt($(this).closest('tr').find('.quantity').val());
                var harga = parseFloat($(this).text().replace(/\./g, '').replace(',', '.'));

                var subtotal = jumlah * harga;
                totalHarga += subtotal;
            });

            $('#total-harga').text(totalHarga.toLocaleString('id-ID'));
        }

        // Panggil fungsi hitungTotal() saat halaman dimuat atau saat ada perubahan pada nilai total harga atau ongkir
        $(window).on('load', function() {
            hitungTotal();
        });

        // Fungsi untuk menjalankan hitungTotal() ketika nilai total harga atau ongkir berubah
        $('#total-harga, #ongkir').on('DOMSubtreeModified', function() {
            hitungTotal();
        });

        // Mengatur nomor urut untuk setiap merek produk
        $('.table-cart tbody').each(function() {
            let count = 1;
            $(this).find('tr').each(function() {
                // Cek jika ini adalah baris merek produk baru
                if ($(this).find('th').length > 0) {
                    count = 1; // Reset nomor urut
                } else {
                    $(this).find('td:first').text(('0' + count).slice(-
                        2)); // Mengatur nomor urut dengan format 01, 02, dst.
                    count++;
                }
            });
        });

        recalculateTotal();

        // Fungsi untuk menambahkan jumlah
        $('.fa-circle-chevron-up').on('click', function() {
            var inputQuantity = $(this).closest('.jumlah').find('.quantity');
            var currentValue = parseInt(inputQuantity.val());
            inputQuantity.val(currentValue + 1);
            recalculateTotal();
        });

        // Fungsi untuk mengurangi jumlah
        $('.fa-circle-chevron-down').on('click', function() {
            var inputQuantity = $(this).closest('.jumlah').find('.quantity');
            var currentValue = parseInt(inputQuantity.val());
            if (currentValue > 1) { // Menambahkan kondisi jika nilai lebih besar dari 1
                inputQuantity.val(currentValue - 1);
                recalculateTotal();
            }
        });
    });
    </script>
</body>

</html>