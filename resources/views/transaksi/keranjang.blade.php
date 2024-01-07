<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Keranjang</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css') }}">

    <!-- Font Awesomes Icons -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/keranjang/style.css') }}">

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
                                @if(session('batunesia'))
                                    @foreach(session('batunesia') as $id => $item)
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Batunesia</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="removeAllBatunesia">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="" class="d-block w-50">
                                        </a>
                                    </td>                                    
                                </tr>
                                <tr data-id="{{ $item['produk']->id_batu }}">
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
                                        <input class="form-control quantity" min="1" type="text" value="{{ $item['quantity'] }}" readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item['produk']->satuan }}</td>
                                    <td class="harga">{{ $item['produk']->harga_b2C_1_unit }}</td>
                                    <td class="total">{{ $item['quantity'] * $item['produk']->harga_b2C_1_unit }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="hapus_batunesia" data-id="{{ $item['produk']->id_batu }}">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="" class="d-block w-50">
                                        </a>
                                    </td>                                                                                                                                                                           
                                </tr>
                                    @endforeach
                                @endif

                            <!--everlasthings-->
                            @if(session('everlasthings'))
                                @foreach(session('everlasthings') as $id => $item2)
                                <tr class="border-brand">
                                    <th colspan="5" style="text-align: center;">Everlasthings</th>
                                    <th class="total-brand">Total</th>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="removeAllEverlasthings">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="" class="d-block w-50">
                                        </a>
                                    </td>                                    
                                </tr>
                                <tr data-id="{{ $id }}">
                                <tr class="border-bottom baris-produk">
                                    <td class="d-flex align-items-center" style="height: 52px;">{{ $loop->index + 1 }}</td>
                                    <td class="detail">
                                        <div class="row g-1">
                                            <div class="col-3">
                                                <div class="img-container">
                                                    <img src="{{ $item2['produk']->gambar_1 }}" alt="{{ $item2['produk']->nama_produk }}">
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex align-items-center">{{ $item2['produk']->nama_produk }}</div>
                                        </div>
                                    </td>
                                    <td class="jumlah">
                                        <!-- Tambahkan tombol untuk mengatur jumlah produk -->
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-down"></i></span>
                                        <input class="form-control quantity" min="1" type="text" value="{{ $item2['quantity'] }}" readonly>
                                        <span class="p-1"><i class="fa-solid fa-circle-chevron-up"></i></span>
                                    </td>
                                    <td class="unit">{{ $item2['produk']->satuan }}</td>
                                    <td class="harga">{{ $item2['produk']->harga_b2C_1_unit }}</td>
                                    <td class="total">{{ $item2['quantity'] * $item2['produk']->harga_b2C_1_unit }}</td>
                                    <td class="d-flex align-items-center justify-content-center">
                                        <a href="#" class="hapus_everlasthings" data-id="{{ $item2['produk']->id_everlas_things }}">
                                            <img src="{{ asset('img/keranjang/Delete Icon.png') }}" alt="" class="d-block w-50">
                                        </a>
                                    </td>                                                                                                                                                                           
                                </tr>
                                @endforeach
                                @endif
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
                        let formattedCount = ('0' + count).slice(-2); // Format nomor urut menjadi dua digit dengan '0' di depan jika perlu
                        $(this).find('td:first').text(formattedCount); // Mengatur nomor urut dengan format 01, 02, dst.
                        count++;
                    }
                });
            });



            recalculateTotal();

            // Fungsi untuk menambah jumlah
            $('.fa-circle-chevron-up').on('click', function () {
                var inputQuantity = $(this).closest('.jumlah').find('.quantity');
                var currentValue = parseInt(inputQuantity.val());
                inputQuantity.val(currentValue + 1);
                updateQuantity(inputQuantity);
                recalculateTotal();
            });

            // Fungsi untuk mengurangi jumlah
            $('.fa-circle-chevron-down').on('click', function () {
                var inputQuantity = $(this).closest('.jumlah').find('.quantity');
                var currentValue = parseInt(inputQuantity.val());
                if (currentValue > 1) {
                    inputQuantity.val(currentValue - 1);
                    updateQuantity(inputQuantity);
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

            // Fungsi untuk mengupdate kuantitas menggunakan AJAX
            function updateQuantity(inputQuantity) {
                var batunesia = inputQuantity.closest('tr').find('.hapus_batunesia').attr("data-id");
                var everlasthings = inputQuantity.closest('tr').find('.hapus_everlasthings').attr("data-id");
                var quantity = inputQuantity.val();
                console.log(batunesia);

                $.ajax({
                    url: '{{ route('updateBatunesia') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: quantity,
                        id_batu: batunesia
                        
                    },
                    success: function (response) {
                        console.log("Sukses update Batunesia:", response);
                        $.ajax({
                            url: '{{ route('updateEverlasthings') }}',
                            method: "patch",
                            data: {
                                _token: '{{ csrf_token() }}',
                                quantity: quantity,
                                id_everlas_things: everlasthings
                            },
                            success: function (response) {
                                console.log("Sukses update Everlasthings:", response);
                                window.location.reload();
                            },
                            error: function (xhr, status, error) {
                                console.log(error);
                                alert("Gagal memperbarui jumlah produk.");
                            }
                        });
                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                        alert("Gagal memperbarui jumlah produk.");
                    }
                });
            }



            $(".hapus_batunesia").click(function (e) {
                e.preventDefault();
                
                var ele = $(this);
                var dataId = ele.data("id"); // Mengambil data-id dari tombol
                console.log("Nilai data-id:", dataId);
                
                if (confirm("Yakin ingin menghapus produk Batunesia?")) {
                    $.ajax({
                        url: '/removeBatunesia', // Sesuaikan dengan route yang benar
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            id: dataId // Mengirim ID yang akan dihapus
                        },
                        success: function (response) {
                            window.location.reload();
                        },
                        error: function (xhr, status, error) {
                            console.error(error);
                            alert("Gagal menghapus produk Batunesia.");
                        }
                    });
                }
            });



            $(".removeAllBatunesia").click(function (e) {
                e.preventDefault();

                if (confirm("Yakin ingin menghapus semua produk Batunesia?")) {
                    $.ajax({
                        url: '/removeAllBatunesia?', // Menambahkan cache buster
                        type: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function (response) {
                            window.location.reload();
                        },
                        error: function (xhr, status, error) {
                            console.log(error);
                            alert("Gagal menghapus Seluruh Batunesia.");
                        }
                    });
                }
            });



            $(".hapus_everlasthings").click(function (e) {
                e.preventDefault();
                
                var ele = $(this);
                var dataId = ele.data("id"); // Mengambil data-id dari tombol
                console.log("Nilai data-id:", dataId);
                
                if (confirm("Yakin ingin menghapus produk Everlasthings?")) {
                    $.ajax({
                        url: '/removeEverlasthings', // Sesuaikan dengan route yang benar
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}', 
                            id: dataId // Mengirim ID yang akan dihapus
                        },
                        success: function (response) {
                            window.location.reload();
                        },
                        error: function (xhr, status, error) {
                            console.error(error);
                            alert("Gagal menghapus produk Everlasthings.");
                        }
                    });
                }
            });

            $(".removeAllEverlasthings").click(function (e) {
                e.preventDefault();

                if (confirm("Yakin ingin menghapus semua produk everlasthings?")) {
                    $.ajax({
                        url: '/removeAllEverlasthings?', // Menambahkan cache buster
                        type: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function (response) {
                            window.location.reload();
                        },
                        error: function (xhr, status, error) {
                            console.log(error);
                            alert("Gagal menghapus Seluruh Batunesia.");
                        }
                    });
                }
            });
        });

    </script>
</body>

</html>

