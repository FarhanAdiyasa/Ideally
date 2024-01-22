<div class="modal-header">
    <h5 class="modal-title">Konfirmasi Hapus</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="{{ route('daftar-produk.destroy', $agrigard->id_agrigard) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Apakah anda yakin ingin menghapus {{ $agrigard->nama_produk }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Ya, Saya Yakin</button>
    </div>
</form>