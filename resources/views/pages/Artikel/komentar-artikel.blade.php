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
</script>
