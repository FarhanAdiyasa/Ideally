@extends('layouts/admin')
@section('content')
<div id="app">
    <div class="main-wrapper">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h3>Daftar EverlasThing</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
                    @endif

                    <p>
                        <a href="{{ route('everlasThings.tambah') }}" class="btn btn-primary">Tambah EverlasThing</a>
                    </p>
                    <table id="products-table" class="table table-hover table-bordered text-center">
                        <thead>
                            <tr>
                                 <th>No</th>
                                <th>Info everlasThing</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                                $no = 1 
                            @endphp
                            @forelse ($everlasThings as $everlasThing)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-4"><img src="{{  asset('storage/' . $everlasThing->gambar_1)}}" width="56" height="56" alt="Product Image"></div>
                                            <div class="col-8">
                                                <div>
                                                     {{ $everlasThing->nama_produk }}
                                                </div>
                                                <div>
                                                    seri : {{ $everlasThing->seri }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        @foreach ($everlasThing->harga_ranges as $hargaRange)
                                             <div>{{ $hargaRange }}</div>
                                        @endforeach
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <div>
                                            Stok: {{ $everlasThing->stok }}
                                       </div>
                                       <div>
                                          Terjual : {{ $everlasThing->item_terjual }}
                                       </div>
                                    </td style="vertical-align: middle;">
                                    <td style="vertical-align: middle;">
                                        {{ $everlasThing->tanggal_publikasi == null ? 'Tidak Aktif' : 'Aktif' }} 
                                        <div class="form-check form-switch">
                                            <form method="post" id="statForm{{ $everlasThing->id_everlas_things }}" action="{{ route('everlasThings.status')}}">
                                                @csrf
                                                <input type="hidden" name="everlasThing_id" id="everlasThing_id{{ $everlasThing->id_everlas_things }}" value="{{ $everlasThing->id_everlas_things }}">
                                                <input type="hidden" name="status" id="status{{ $everlasThing->id_everlas_things }}" value="{{ $everlasThing->tanggal_publikasi == null ? 'true' : 'false' }}">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked{{ $everlasThing->id_everlas_things }}" onchange="store({{ $everlasThing->id_everlas_things }})" @if ($everlasThing->tanggal_publikasi !== null) checked @endif>
                                            </form>
                                        </div>
                                    </td>                                      
                                    <td style="vertical-align: middle;">
                                        <button type="button" class="btn btn-primary" onclick="show({{$everlasThing->id_everlas_things}})" data-toggle="modal" data-target=".bd-example-modal-lg"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                          </svg>
                                        </button>
                                        <button type="button" class="btn btn-primary" onclick="deletes({{$everlasThing->id_everlas_things}})" data-toggle="modal" data-target=".modal-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                          </svg>
                                        </button>
                                        <a href="{{ route('everlasThings.edit', ['id' => $everlasThing->id_everlas_things]) }}" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </a>                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        Tidak ada data!
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Warning Modal -->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="delete-modal">
           
        </div>
    </div>
</div>
        <!-- End Delete Modal --> 


  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="modal-content">

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts_all')
<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    function show(id) {
        $.get("{{ url('/daftar-everlasThing/') }}/" + id, {}, function (data, status) {
            $("#modal-content").html(data);
        })
        .fail(function (xhr, textStatus, errorThrown) {
            console.error("Error: " + errorThrown);
        });
    }
    function deletes(id) {
    $.get("{{ url('/delete-everlasThing') }}/" + id, {}, function (data, status) {
        $("#delete-modal").html(data);
    })
    .fail(function (xhr, textStatus, errorThrown) {
        console.error("Error: " + errorThrown);
    });
}

    $(document).ready(function() {
        $('#products-table').DataTable({
            "iDisplayLength": 10,
        "bLengthChange": false
        });
    });  
    function store(id) {
    $("#statForm" + id).submit();

    }
    $(document).ready(function() {
        $('.delete').click(function() {
            var id = $(this).data('id');
            $('#id').val(id);
        });
    });
</script>
@endsection
