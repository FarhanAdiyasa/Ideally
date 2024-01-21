@extends('layouts/admin')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Order Details</h1>
        <nav>
        </nav>
    </div><!-- End Page Title -->

    <style>
        /* Add this style to your existing CSS or in a style tag in your HTML file */
.modal-content {
    background-color: #f8f9fa; /* Set the background color */
}

/* Style for the rating form */
.modal-body form {
    background-color: #e9ecef; /* Set the background color */
    padding: 15px; /* Add padding for better appearance */
    border-radius: 5px; /* Optional: Add border-radius for rounded corners */
}

/* Style for the rating form elements */
.modal-body form label,
.modal-body form input, 
.modal-body form textarea,
.modal-body form button {
    vertical-align: top;
    margin-bottom: 10px; /* Add margin between elements */
}   
    </style>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title d-flex justify-content">

                        </h5>
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Status Pesanan</th>
                                    <th scope="col">Ongkir</th>
                                    <th scope="col">Biaya Lainnya</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Rincian Pesanan</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $i=1;
                                @endphp
                                @forelse($orders as $order)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $order->nomor_order }}</td>
                                        <td>{{ $order->users->firstname }}</td>
                                        <td>{{ $order->status_pembayaran }}</td>
                                        <td>{{ $order->status_pesanan }}</td>
                                        <td>{{ $order->biaya_ongkir }}</td>
                                        <td>{{ $order->biaya_lainnya }}</td>
                                        <td>{{ $order->total_harga }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModal{{$order->id}}">
                                                View Details
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="orderModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel{{$order->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="orderModalLabel{{$order->id}}">Order Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Display product details from different brands -->
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Brand</th>
                                                                        <th scope="col">Product Name</th>
                                                                        <th scope="col">Aksi</th>
                                                                        <th scope="col">Aksi</th>
                                                                        <!-- Add more columns as needed -->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach(['batunesias', 'konkuritos', 'everlastings', 'shineages', 'agrigards', 'deflos'] as $brand)
                                                                        @foreach($$brand as $product)
                                                                            <tr>
                                                                                <td>{{ $brand }}</td>
                                                                                <td>{{ $product->slug }}</td>
                                                                                <td>{{ $product->id_batu }}</td>
                                                                                <td>
                                                                                <!-- Button trigger modal -->
                                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ratingModal{{$brand}}{{$product->id}}" data-brand="{{ $brand }}" data-product-id="{{ $product->id }}">
                                                                                    Rate
                                                                                </button>


                                                                                <!-- Rating Modal -->
                                                                                <div class="modal fade" id="ratingModal{{$brand}}{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="ratingModalLabel{{$brand}}{{$product->id}}" aria-hidden="true">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="ratingModalLabel{{$brand}}{{$product->id}}">Rate {{$product->slug}} from {{$brand}}</h5>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <!-- Rating Form -->
                                                                                                <form  action="{{ route('testimoni.store') }}" method="post" >
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="brand" value="{{ $brand }}">
                                                                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                                                    <input type="hidden" name="id_users" value="{{ $order->user_id }}">
                                                                                                    <input type="hidden" name="id_orders" value="{{ $order->id_order }}">
                                                                                                    <label for="Rating">Rating:</label>
                                                                                                    <input type="number" name="Rating" min="1" max="5" required>
                                                                                                    <label for="Deskripsi">Description:</label>
                                                                                                    <textarea name="Deskripsi" rows="3" required></textarea>
                                                                                                    <button type="submit" class="btn btn-primary">Submit Rating</button>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- End Rating Modal -->
                                                                            </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endforeach
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">
                                            No Record Found!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection
