@extends('layouts/admin')
@section('head-src')
<link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
@section('content')
<section class="content-header">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Produk Agrigard</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Advanced Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="container-fluid">
  <!-- SELECT2 EXAMPLE -->
  <form method="post" action="{{ route('artikels.save')}} " enctype="multipart/form-data" id="agrForm">
    @csrf
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Informasi Produk</h3>

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
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="judul_artikel" id="judul_artikel" value="{{old('judul_artikel')}}">
              @error('judul_artikel')
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
            <label>Penulis Artikel</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" name="penulis_artikel">
                <option value="Alaska" selected="selected">Alabama</option>
                <option value="Alaska">Alaska</option>
                <option value="Alaska">California</option>
                <option value="Alaska">Delaware</option>
                <option value="Alaska">Tennessee</option>
                <option value="Alaska">Texas</option>
                <option value="Alaska">Washington</option>
              </select>
              @error('penulis_artikel')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Gambar Artikel</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
              <label class="col-sm-3 col-form-label">Profile Pic</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="gambar_artikel" @error('gambar_artikel') is-invalid @enderror id="selectimage">
              </div>
              @error('gambar_artikel')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <img id="preview" src="#" alt="your image" class="mt-3" height="300" width="470" style="display:none;"/>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Keterangan Gambar</label>
              <input type="text" class="form-control" placeholder="Placeholder text" name="keterangan_gambar_artikel" value="{{old('keterangan_gambar_artikel')}}">
                 @error('keterangan_gambar_artikel')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Keywords Artikel</label>
            <div class="select2-purple">
                <input type="text" class="form-control" placeholder="Placeholder text" name="keywords" value="{{old('keywords')}}">
                   @error('keywords')
              <small class="text-danger">{{ $message }}</small>
              @enderror
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
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Desain-Taman" name="kategori_artikel[]" value="Desain-Taman" @if (is_array(old('kategori_artikel')) && in_array('Desain-Taman', old('kategori_artikel'))) checked @endif>
                <label class="form-check-label" for="Desain-Taman">Desain Taman</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Konstruksi-Taman" name="kategori_artikel[]" value="Konstruksi-Taman" @if (is_array(old('kategori_artikel')) && in_array('Konstruksi-Taman', old('kategori_artikel'))) checked @endif>
                <label class="form-check-label" for="Konstruksi-Taman">Konstruksi Taman</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Tanaman" name="kategori_artikel[]" value="Tanaman" @if (is_array(old('kategori_artikel')) && in_array('Tanaman', old('kategori_artikel'))) checked @endif>
                <label class="form-check-label" for="Tanaman">Tanaman</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Material" name="kategori_artikel[]" value="Material" @if (is_array(old('kategori_artikel')) && in_array('Material', old('kategori_artikel'))) checked @endif>
                <label class="form-check-label" for="Material">Material</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Pemeliharaan-Taman" name="kategori_artikel[]" value="Pemeliharaan-Taman" @if (is_array(old('kategori_artikel')) && in_array('Pemeliharaan-Taman', old('kategori_artikel'))) checked @endif>
                <label class="form-check-label" for="Pemeliharaan-Taman">Pemeliharaan Taman</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Lainnya" name="kategori_artikel[]" value="Lainnya" @if (is_array(old('kategori_artikel')) && in_array('Lainnya', old('kategori_artikel'))) checked @endif>
                <label class="form-check-label" for="Lainnya">Lainnya</label>
            </div>  
            @error('kategori_artikel[]')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>        
          <!-- /.form-group -->
        </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Deskripsi Produk</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Deskripsi Artikel</label>
                      <input type="text" class="form-control" placeholder="Placeholder text" name="deskripsi_artikel" value="{{old('deskripsi_artikel')}}">
                         @error('deskripsi_artikel')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Description:</label>
                    <textarea name="isi_artikel" id="isi_artikel" cols="30" rows="10"></textarea>
                    @error('isi_artikel')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
          </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Deskripsi Produk</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="author_sendiri" name="author" value="sendiri" 
                           @if (old('author') == 'sendiri' || !old('author')) checked @endif>
                    <label class="form-check-label" for="author_sendiri">Artikel Saya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="author_lain" name="author" value="lain"
                           @if (old('author') == 'lain') checked @endif>
                    <label class="form-check-label" for="author_lain">Bukan Artikel Saya</label>
                </div>
                @error('author')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>        
            </div>
          </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.row -->
</div>  
<input type="text" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" style="display:none;">
<div class="m-3 d-flex justify-content-end">
  <button class="btn btn-dark mx-5" type="reset">Cancel</button>
  <button class="btn btn-dark mx-3" type="button" onclick="submitForm('1')">Save And Post</button>
  <button class="btn btn-success mx-3" type="button" onclick="submitForm('0')">Save</button>
</div>
    
</form>
</section>
@endsection

@section('scripts_all')
<script src="{{asset("lte/plugins/summernote/summernote-bs4.min.js")}}"></script>
<script>
    $('#isi_artikel').summernote({
        placeholder: 'description...',
        tabsize:2,
        height:300
    });
    
</script>
<script>
  selectImage.onchange = evt => {
      preview = document.getElementById('preview');
      preview.style.display = 'block';
      const [file] = selectImage.files
      if (file) {
          preview.src = URL.createObjectURL(file)
      }
  }
  document.addEventListener('DOMContentLoaded', function () {
        var radioButtons = document.getElementsByName('tipe_potongan');

        radioButtons.forEach(function (radioButton) {
            radioButton.addEventListener('change', function () {
              Ctipe_potongan(this.value);
            });
        });
        var checkedRadioButton = document.querySelector('input[name="tipe_potongan"]:checked');
        Ctipe_potongan(checkedRadioButton.value);
    });

        const Ctipe_potongan = (value)=>{
            var container = document.getElementById('persenan');
            var maks = document.getElementById('desk-promo');
            
            if(value == "persentase"){
                  container.innerHTML = '<div class="col-md-3">' +
              '<div class="form-group">' +
              '<label id="desk-promo">Persentase Promo</label>' +
              '</div>' +
              '</div>' +
              '<div class="col-md-3">' +
              '<div class="form-group">' +
              '<div class="harga-input">' +
              '<input data-unify="TextField" placeholder="Masukkan Persentase" type="numeric"  class="css-3017qm px-2" name="persentase_promo" value="{{old("persentase_promo")}}">' +
              '<div class="rp">%</div>' +
              '</div>' +
              '@error("persentase_promo")' +
              '<small class="text-danger">{{ $message }}</small>' +
              '@enderror' +
              '</div>' +
              '</div>';
              maks.innerHTML = 'Maksimal Promo';
              }else{
                  container.innerHTML ="";
                  maks.innerHTML = 'Nominal Promo';
              }
        }
</script>
@endsection