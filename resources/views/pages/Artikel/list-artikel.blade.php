@extends('layouts/admin')
@section('content')
<div id="app">
    <div class="main-wrapper">
        <div class="container" style="padding-top: 25px;">
            <div class="card">
                <div class="card-header">
                    <h3>Daftar Artikel</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
                    @endif
                    <p>
                        <a href="{{ route('artikels.create') }}" class="btn btn-primary">Tambah Artikel</a>
                    </p>
                    <table id="articles-table" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Judul Artikel</th>
                                <th>Pengunjung</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikels as $artikel)
                                <tr>
                                    <td style="text-align: left; vertical-align: middle;">
                                        <div class="row" >
                                                <div>
                                                     {{ $artikel->judul_artikel }}
                                                </div>
                                        </div>
                                    </td>
                                    <td style="vertical-align: middle;">
                                       {{$artikel->pengunjung}}
                                    </td>
                                    <td style="vertical-align: middle;">
                                           {{ $artikel->penulis_artikel }}
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <div class="form-check form-switch">
                                            <form method="post" id="statForm{{ $artikel->id_artikel }}" action="{{ route('artikels.post')}}">
                                                @csrf
                                                <input type="hidden" name="id_artikel" id="id_artikel{{ $artikel->id_artikel }}" value="{{ $artikel->id_artikel }}">
                                                <input type="hidden" name="status" id="status{{ $artikel->id_artikel }}" value="{{ $artikel->tanggal_publikasi == null ? 'true' : 'false' }}">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked{{ $artikel->id_artikel }}" onchange="store({{ $artikel->id_artikel }})" @if ($artikel->tanggal_publikasi !== null) checked @endif>
                                            </form>
                                        </div>
                                    </td>                
                                    <td>
                                        <a href="{{ route('artikels.preview', $artikel->slug)}}" target="_blank">
                                            <button type="button" class="btn btn-primary" onclick="" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                              </svg>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-primary" onclick="deletes({{$artikel->id_artikel}})" data-toggle="modal" data-target=".modal-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                          </svg>
                                        </button>
                                        <button type="button" class="btn btn-primary" onclick="komentars({{$artikel->id_artikel}})" data-toggle="modal" data-target="#komenModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15"/>
                                          </svg>
                                        </button>
                                        <a href="{{ route('artikels.edit', ['id' => $artikel->id_artikel]) }}" class="btn btn-primary">
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
  <div class="modal fade bd-example-modal-lg"  id="komenModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
    function deletes(id) {
        $.get("{{ url('/delete-artikel/') }}/" + id, {}, function (data, status) {
            $("#delete-modal").html(data);
        })
        .fail(function (xhr, textStatus, errorThrown) {
            console.error("Error: " + errorThrown);
        });
    }
    function komentars(id) {
        $.get("{{ url('/cek-komentar/') }}/" + id, {}, function (data, status) {
            $("#modal-content").html(data);
        })
        .fail(function (xhr, textStatus, errorThrown) {
            console.error("Error: " + errorThrown);
        });
    }
    $(document).ready(function() {
        $('#articles-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
            }
        });
    });

    function store(articleId) {
    // Submit the form
    $("#statForm" + articleId).submit();
}



</script>
@endsection
