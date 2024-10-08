<div class="modal-header">
    <h5 class="modal-title">This action is not reversible.</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="{{ route('artikels.post') }}" method="post">
    <div class="modal-body">
        @csrf
        <input type="hidden" name="status" value="{{$status}}">
        <input type="hidden" name="id_artikel" value="{{$artikel->id_artikel}}">
        <h5 class="text-center">Are you sure you want to post {{ $artikel->judul_artikel }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes, Delete Project</button>
    </div>
</form>