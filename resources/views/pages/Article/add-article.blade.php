@extends('layouts/admin')
          @section('content')
          <section class="content-header">
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif --}}
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif

            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Tambah Artikel</h1>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
          <section class="content">
            <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <form method="post" action="{{ route('daftar-artikel.save')}} " enctype="multipart/form-data"
                id="agrForm">
                @csrf
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Informasi Artikel</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>

                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Judul Artikel</label>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima
                            deleniti
                            quae ducimus repudiandae sit!</p>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-9">
                        <div class="form-group">
                          <input id="default" type="text" class="form-control" placeholder="Placeholder text"
                            name="judul_artikel" id="judul_artikel" value="{{old('judul_artikel')}}">
                          @error('judul_artikel')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          <div class="float-right d-none d-sm-block">
                            <span id="characterCount">0</span>/25
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Deskripsi Artikel</label>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima
                            deleniti
                            quae ducimus repudiandae sit!</p>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-9">
                        <div class="form-group">
                          <input id="default" type="text" class="form-control" placeholder="Placeholder text"
                            name="deskripsi_artikel" id="deskripsi_artikel" value="{{old('deskripsi_artikel')}}">
                          @error('deskripsi_artikel')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                          <div class="float-right d-none d-sm-block">
                            <span id="characterCount">0</span>/70
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Kategori Artikel</label>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima
                            deleniti
                            quae ducimus repudiandae sit!</p>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-9">
                        <div class="form-group">
                          <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                            style="width: 100%;" name="kategori">
                            <option value="Alaska" selected="selected">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Alaska">California</option>
                            <option value="Alaska">Delaware</option>
                            <option value="Alaska">Tennessee</option>
                            <option value="Alaska">Texas</option>
                            <option value="Alaska">Washington</option>
                          </select>
                          @error('kategori')
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-body -->

                </div>
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Isi Artikel</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>

                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <textarea id="summernote" name="isi_artikel">
                      Tambahkan <em>isi</em> <u>Artikel</u> <strong>disini</strong>
                    </textarea>
                  </div>
                  <!-- /.card-body -->
                </div>

                <input type="text" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control"
                  style="display:none;">
                <div class="m-3 d-flex justify-content-end">
                  <button class="btn btn-dark mx-5" type="reset">Cancel</button>
                  <button class="btn btn-dark mx-3" type="button" onclick="submitForm('1')">Save And Post</button>
                  <button class="btn btn-success mx-3" type="button" onclick="submitForm('0')">Save</button>
                </div>

              </form>
          </section>
          @endsection
@section('scripts')
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection