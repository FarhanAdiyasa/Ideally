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
    <!-- <link rel="stylesheet" href="{{ asset('css/keranjang/style.css') }}" rel="stylesheet"> -->


    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h3>Pembayaran</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                @if (isset($va))
                    <h3>Bank: {{ $bank }}</h3>
                    <h3>VA Numbers: {{ $va }}</h3>
                @else
                <h5>Detail Produk</h5>

                <form action="{{ route('store.bayar') }}" method="post">
                    @csrf
                    <input type="hidden" name="order" value="24018995">
                    <input type="hidden" name="grossAmount" value="{{ session('total') }}">
                    <select class="form-select" name="bank" aria-label="Default select example">
                        <option value="bca">BCA</option>
                        <option value="bri">BRI</option>
                        <option value="bni">BNI</option>
                        <option value="cimb">CIMB</option>
                    </select>
                    <input type="submit" value="Create Order" class="btn btn-primary">
                </form>
                @endif
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>
</body>

</html>