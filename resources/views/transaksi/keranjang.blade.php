<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css') }}">

    <!-- Font Awesomes Icons -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/keranjang/style.css') }}" rel="stylesheet">
    

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JQuery -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
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

    <section id="content">
        <div class="container mt-4">
            <div class="row g-4">
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
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Batunesia</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                @foreach($keranjang as $item)
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;">{{ $loop->index + 1 }}</td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ $item['produk']->gambar_1 }}" alt="{{ $item['produk']->nama_produk }}">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">{{ $item['produk']->nama_produk }}</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <!-- Tambahkan tombol untuk mengatur jumlah produk -->
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="{{ $item['quantity'] }}" readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item['produk']->satuan }}</td>
                                    <td class="harga">{{ $item['produk']->getAttributes()['harga_b2I_31+_unit'] }}</td>
                                    <td class="total">{{ $item['quantity'] * $item['produk']->getAttributes()['harga_b2I_31+_unit'] }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        {{-- <form action="{{ route('hapusDariKeranjang', ['id_batu' => $key]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border: none; background: none; padding: 0; margin: 0; outline: none;">
                                                <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="Hapus Produk" class="d-block w-50" style="border: none;">
                                            </button>
                                        </form> --}}
                                                                                                                  
                                    </td>
                                </tr>
                            @endforeach

                                {{-- <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Dedikasi Flora</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;">No</td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ asset('img/keranjang/contoh-produk.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">Beringin Korea</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="3" readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">Pohon</td>
                                    <td class="harga">200000</td>
                                    <td class="total">Total</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>

                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;">No</td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ asset('img/keranjang/contoh-produk.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">Beringin Korea</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="3" readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">Pohon</td>
                                    <td class="harga">500000</td>
                                    <td class="total">Total</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>

                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Everlas Things</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr>
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;">No</td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ asset('img/keranjang/contoh-produk.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">Beringin Korea</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" type="text" value="3" readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">Pohon</td>
                                    <td class="harga">200000</td>
                                    <td class="total">Total</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('') }}"><img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt=""
                                                class="d-block w-50"></a>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
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
                                    <td id="total-produk">Total Produk (<span>123</span>)</td>
                                    <td id="total-harga">123.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex flex-column align-items-center">
                            <div class="mt-3">
                                <a href="{{ asset('') }}" class="btn btn-bayar bg-tosca rounded-5">Lanjutkan Pembayaran</a>
                            </div>
                            <div class="mt-4">
                                <p class="text-center m-0" style="font-size: 10px;">Dukungan Pembayaran</p>
                                <img src="{{ asset('img/keranjang/image 41.png') }}" alt="" class="d-block w-100">
                            </div>
                            <div class="mt-5">
                                <p class="text-center border-bottom border-3"
                                    style="font-size: 11px; font-weight: 700;">Keuntungan Untuk Anda</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Mengatur nomor urut untuk setiap merek produk
            $('.table-cart tbody').each(function () {
                let count = 1;
                $(this).find('tr').each(function () {
                    // Cek jika ini adalah baris merek produk baru
                    if ($(this).find('th').length > 0) {
                        count = 1; // Reset nomor urut
                    } else {
                        $(this).find('td:first').text(('0' + count).slice(-2)); // Mengatur nomor urut dengan format 01, 02, dst.
                        count++;
                    }
                });
            });

            recalculateTotal();

            // Fungsi untuk menambahkan jumlah
            $('.fa-circle-chevron-up').on('click', function () {
                var inputQuantity = $(this).closest('.jumlah').find('.quantity');
                var currentValue = parseInt(inputQuantity.val());
                inputQuantity.val(currentValue + 1);
                recalculateTotal();
            });

            // Fungsi untuk mengurangi jumlah
            $('.fa-circle-chevron-down').on('click', function () {
                var inputQuantity = $(this).closest('.jumlah').find('.quantity');
                var currentValue = parseInt(inputQuantity.val());
                if (currentValue > 1) { // Menambahkan kondisi jika nilai lebih besar dari 1
                    inputQuantity.val(currentValue - 1);
                    recalculateTotal();
                }
            });

            // Fungsi untuk menghitung ulang total saat nilai diubah
            function recalculateTotal() {
                $('.table tbody tr').each(function () {
                    var jumlah = parseInt($(this).find('.quantity').val()); // Mengambil nilai dari input dengan kelas 'quantity'
                    var harga = parseInt($(this).find('.harga').text().replace(',', ''));

                    var total = jumlah * harga;
                    $(this).find('.total').text(total.toLocaleString('id-ID')); // Menampilkan total dengan pemisah ribuan
                });

                $('.total-brand').each(function () {
                    var totalHargaMerek = 0;
                    var $currentBrand = $(this).closest('tr'); // Ambil baris merek saat ini
                    var $brandRows = $currentBrand.nextUntil('tr:has(th)'); // Ambil semua baris produk dalam merek

                    $brandRows.each(function () {
                        var jumlah = parseInt($(this).find('.quantity').val()); // Mengambil nilai dari input dengan kelas 'quantity'
                        var harga = parseInt($(this).find('.harga').text().replace(',', ''));

                        var total = jumlah * harga;
                        totalHargaMerek += total; // Jumlahkan total harga produk dalam satu merek
                    });

                    $(this).text(totalHargaMerek.toLocaleString('id-ID')); // Tampilkan total harga merek dengan pemisah ribuan
                });

                var totalProduk = $('.table tbody tr.baris-produk').length;
                $('#total-produk span').text(totalProduk); // Memperbarui jumlah total produk

                // Menghitung total harga dari semua merek
                var totalHarga = 0;
                $('.harga').each(function () {
                    var jumlah = parseInt($(this).closest('tr').find('.quantity').val());
                    var harga = parseInt($(this).text().replace(',', ''));

                    var subtotal = jumlah * harga;
                    totalHarga += subtotal; // Menambahkan subtotal ke total harga
                });

                $('#total-harga').text(totalHarga.toLocaleString('id-ID'));
            }
        });

    </script>
</body>

</html>