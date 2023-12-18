<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konkurito</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('konkurito/assets/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('konkurito/assets/css/detail/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="{{ asset ('konkurito/assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Logo -->
        <section id="logo">
            <div class="row">
                <div class="col-sm-3 p-0 bg-light">
                    <div class="align-corner">
                        <div class="img-logo">
                            <img src="{{ asset ('konkurito/assets/img/LOGO.png') }}" alt="" style="width: 55%;">
                        </div>
                        <div class="deskripsi">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo -->

        <!-- Details -->
        <section id="details">
            <div class="row">
                <div class="col-sm-9 p-0 bg-secondary">
                    <div class="img-details">
                        <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-3 bg-light">
                    <div class="row">
                        <div class="col-12">
                            <div class="description-box">
                                <div class="title">
                                    <p>Produk Name Lorem, ipsum dolor.</p>
                                    <hr class="title-line">
                                </div>
                                <div class="deskripsi">
                                    <p>{{ $konkuritoDetail->deskripsi_singkat }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="description-box">
                                <div class="title">
                                    <p>Dimensi</p>
                                    <hr class="title-line">
                                </div>
                                <table class="table table-borderless table-details mt-3">
                                    <tr>
                                        <th>Satuan</th>
                                        <th class="bold">m2</th>
                                    </tr>
                                    <tr>
                                        <th>Lebar (cm)</th>
                                        <th class="bold">10.5</th>
                                    </tr>
                                    <tr>
                                        <th>Panjang (cm)</th>
                                        <th class="bold">12</th>
                                    </tr>
                                    <tr>
                                        <th>Diameter (cm)</th>
                                        <th class="bold">14</th>
                                    </tr>
                                    <tr>
                                        <th>Tinggi (cm)</th>
                                        <th class="bold">23</th>
                                    </tr>
                                    <tr>
                                        <th>Tebal (cm)</th>
                                        <th class="bold">10</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-secondary">
                    <div class="row">
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI3_2-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI1_1-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI2_1-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-6 other-img">
                            <div class="img-container">
                                <img src="{{ asset ('konkurito/assets/img/ILUSTRASI5_1-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-light">
                    <div class="row">
                        <div class="col-12">
                            <div class="description-box">
                                <div class="title">
                                    <p>Daftar Harga</p>
                                    <hr class="title-line">
                                </div>
                                <table class="table table-borderless table-harga mt-4">
                                    <tr>
                                        <th>1-10 satuan</th>
                                        <th class="bold">Rp 75,000</th>
                                    </tr>
                                    <tr>
                                        <th>11-30 satuan</th>
                                        <th class="bold">Rp 70,000</th>
                                    </tr>
                                    <tr>
                                        <th>31+ satuan</th>
                                        <th class="bold">Rp 65,000</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-blue">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center px-4">
                            <div class="text-white text-start">
                                <p>pembelian</p>
                            </div>
                            <div class="total-item d-flex justify-content-center">
                                <button class="btn text-white" onclick="decrease()" id="kurang">
                                    <span><i class="bi bi-caret-left-square-fill"></i></span>
                                </button>
                                <div class="input-qty">
                                    <input type="text" class="form-control text-center" id="quantity" value="1"
                                        onchange="calculateTotal()">
                                </div>
                                <button class="btn text-white" onclick="increase()">
                                    <span><i class="bi bi-caret-right-square-fill"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 bg-yellow">
                    <div class="row">
                        <div class="col-12 d-flex flex-column justify-content-center px-4">
                            <div class="text-start">
                                <p>total harga</p>
                            </div>
                            <div class="total-harga">
                                <input type="text" class="form-control fw-bold text-center text-white bg-dark"
                                    id="summaryPrice" value="75000" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        const summaryPriceInput = document.getElementById('summaryPrice');
        let summaryPriceValue = summaryPriceInput.value;
        summaryPriceInput.value = numeral(summaryPriceValue).format('0,0');

        let count = parseInt(document.getElementById('quantity').value);
        const decreaseBtn = document.getElementById('kurang');

        function increase() {
            count++;
            document.getElementById('quantity').value = count;
            calculateTotal();
            checkCount();
        }

        function decrease() {
            if (count > 1) {
                count--;
                document.getElementById('quantity').value = count;
            }
            calculateTotal();
            checkCount();
        }

        function checkCount() {
            if (count === 1) {
                decreaseBtn.disabled = true;
            } else {
                decreaseBtn.disabled = false;
            }
        }

        function calculateTotal() {
            const quantityInput = document.getElementById('quantity');
            const summaryPriceInput = document.getElementById('summaryPrice');
            const quantity = parseInt(quantityInput.value);
            let price = 0;

            if (quantity >= 1 && quantity <= 10) {
                price = 75000;
            } else if (quantity >= 11 && quantity <= 30) {
                price = 70000;
            } else if (quantity > 30) {
                price = 65000;
            }

            const totalPrice = price * quantity;
            summaryPriceInput.value = numeral(totalPrice).format('0,0');;
        }
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>