<div class="modal-header">
    <h5 class="modal-title">This action is not reversible.</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="{{ route('daftar-user.update', $user->user_id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('PUT')
        <h5 class="text-center">Change {{ $user->firstname }} Role From  {{ $user->role }} To:</h5>
        <div class="form-group">
            <label>Role</label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="role">
                <option value="b2i"  @selected($user->role == 'b2i')>b2i</option>
                <option value="b2b" @selected($user->role == 'b2b')>b2b</option>
                <option value="b2c" @selected($user->role == 'b2c')>b2c</option>
            </select>          
            </div>
          </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Submits</button>
    </div>
</form>