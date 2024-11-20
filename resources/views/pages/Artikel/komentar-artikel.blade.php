<div class="modal-header">
    <h5 class="modal-title">Daftar Komentar Artikel {{ $komentars[0]->artikel->judul_artikel}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   Anda Yakin Ingin Menghapus Komentar Ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Ya</button>
                </div>
            </div>
        </div>
    </div>
    <table id="products-table" class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th>Isi Komentar</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($komentars as $komentar)
                @if ($komentar->status_tampil == 0)
                <tr>
                    <td>
                        {{ $komentar->isi_komentar }}
                    </td>
                    <td>
                    {{$komentar->created_at}}
                    </td>
                    <td>
                        {{ $komentar->createdBy->firstname }}
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <form method="post" id="komenForm{{ $komentar->id_komentar }}" action="{{ route('komentars.hide')}}">
                                @csrf
                                <input type="hidden" name="id_komentar" id="id_komentar{{ $komentar->id_komentar }}" value="{{ $komentar->id_komentar }}">
                                <input type="hidden" name="status" id="status{{ $komentar->id_komentar }}" value="{{ $komentar->status_tampil == 0 ? 'true' : 'false' }}">
                                <button class="btn btn-primary" onclick="store({{$komentar->id_komentar}})" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                      </svg>
                                </button>             
                            </form>
                        </div>
                    </td> 
                </tr>
                @endif
               
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
<div class="modal-footer">
    <!-- Footer content if needed -->
</div>

<script>
    function store(articleId) {
        $('#confirmationModal').modal('show');

        // Handle confirmation button click
        $('#confirmDelete').on('click', function () {
            // Submit the form
            $("#komenForm" + articleId).submit();

            // Hide the confirmation modal
            $('#confirmationModal').modal('hide');
        });
    }

    $(document).ready(function() {
        $('#products-table').DataTable({
            "iDisplayLength": 5,
            "bLengthChange": false
        });

        // Remove the confirmation button click event handler outside the store function
        // Handle confirmation button click
        $('#confirmDelete').on('click', function () {
            // Hide the confirmation modal (moved this outside the store function)
            $('#confirmationModal').modal('hide');
        });
    });
</script>
{{-- 
<div class="modal-header">
    <h5 class="modal-title">Daftar Komentar Artikel {{ $komentars[0]->artikel->judul_artikel}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <table id="products-table" class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th>Isi Komentar</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($komentars as $komentar)
                <tr>
                    <td>
                        {{ $komentar->isi_komentar }}
                    </td>
                    <td>
                       {{$komentar->created_at}}
                    </td>
                    <td>
                           {{ $komentar->createdBy->firstname }}
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <form method="post" id="komenForm{{ $komentar->id_komentar }}" action="{{ route('komentars.hide')}}">
                                @csrf
                                <input type="hidden" name="id_komentar" id="id_komentar{{ $komentar->id_komentar }}" value="{{ $komentar->id_komentar }}">
                                <input type="hidden" name="status" id="status{{ $komentar->id_komentar }}" value="{{ $komentar->status_tampil == 0 ? 'true' : 'false' }}">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked{{ $komentar->id_komentar }}" onchange="store({{ $komentar->id_komentar }})" @if ($komentar->status_tampil !== 1) checked @endif>
                            </form>
                        </div>
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
<div class="modal-footer">
    <!-- Footer content if needed -->
</div>

<script>
        function store(articleId) {
    // Submit the form
    $("#komenForm" + articleId).submit();
}
$(document).ready(function() {
        $('#products-table').DataTable({
            "iDisplayLength": 10,
        "bLengthChange": false
        });
    });  
</script> --}}
