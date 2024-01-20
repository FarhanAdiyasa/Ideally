@extends('layouts/admin')
@section('content')
<div id="app">
    <div class="main-wrapper">
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h3>List user</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-warning">{{ session('error') }}</div>
                    @endif

                    <table id="products-table" class="table table-hover table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Nama user</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div class="row">
                                                <div>
                                                     {{ $user->firstname }} {{ $user->lastname }}
                                                </div>
                                        </div>
                                    </td>
                                    <td>
                                       {{$user->email}}
                                    </td>
                                    <td>
                                           {{ $user->telephone_number}}
                                    </td>     
                                    <td>
                                        {{ $user->role }}
                                 </td>         
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick="deletes({{$user->user_id}})" data-toggle="modal" data-target=".modal-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
                                          </svg>
                                        </button>                                      
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        No record found!
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

@endsection
@section('scripts_all')
<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    function deletes(id) {
        $.get("{{ url('/promote-user/') }}/" + id, {}, function (data, status) {
            $("#delete-modal").html(data);
        })
        .fail(function (xhr, textStatus, errorThrown) {
            console.error("Error: " + errorThrown);
        });
    }

    $(document).ready(function() {
        $('#products-table').DataTable();
    }); 

    function store(articleId) {
    // Submit the form
    $("#statForm" + articleId).submit();
}



</script>
@endsection
