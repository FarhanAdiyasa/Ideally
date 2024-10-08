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
        <h1>Edit Produk Agrigard</h1>
      </div>
      <!-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Advanced Form</li>
        </ol>
      </div> -->
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="container-fluid">
  <!-- SELECT2 EXAMPLE -->
  <form method="post" action="{{ route('daftar-produk.update', $agrigard->id_agrigard)}} " enctype="multipart/form-data" id="agrForm">
    @method('PUT')
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
            <label>Nama Produk <span class="wajib">Wajib</span></label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="nama_produk" id="nama_produk" value="{{old('nama_produk', $agrigard->nama_produk)}}">
              @error('nama_produk')
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
            <label>Kategori Produk <span class="wajib">Wajib</span></label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <select class="form-control select2" style="width: 100%;" name="kategori">
                <option value="Pot Plastik" @selected(old('kategori') == 'Pot Plastik' || $agrigard->kategori == 'Pot Plastik')>Pot Plastik</option>
                <option value="Pot Terracota" @selected(old('kategori') == 'Pot Terracota' || $agrigard->kategori == 'Pot Terracota')>Pot Terracota</option>
                <option value="Benih Tanaman" @selected(old('kategori') == 'Benih Tanaman' || $agrigard->kategori == 'Benih Tanaman')>Benih Tanaman</option>
                <option value="Media Tanam" @selected(old('kategori') == 'Media Tanam' || $agrigard->kategori == 'Media Tanam')>Media Tanam</option>
                <option value="Wadah Tanam" @selected(old('kategori') == 'Wadah Tanam' || $agrigard->kategori == 'Wadah Tanam')>Wadah Tanam</option>
                <option value="Obat dan Nutrisi" @selected(old('kategori') == 'Obat dan Nutrisi' || $agrigard->kategori == 'Obat dan Nutrisi')>Obat dan Nutrisi</option>
                <option value="Alat Kerja" @selected(old('kategori') == 'Alat Kerja' || $agrigard->kategori == 'Alat Kerja')>Alat Kerja</option>
                <option value="Lainnya" @selected(old('kategori') == 'Lainnya' || $agrigard->kategori == 'Lainnya')>Lainnya</option>
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
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Spesifikasi Produk <span class="wajib">Wajib</span></label>
              <input type="text" class="form-control" placeholder="Masukkan Spesifikasi" name="spesifikasi" value="{{old('spesifikasi', $agrigard->spesifikasi)}}">
                 @error('spesifikasi')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Satuan Produk <span class="wajib">Wajib</span></label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="satuan">
                <option value="pcs" @selected(old('satuan') == 'pcs' || $agrigard->satuan == 'pcs')>pcs</option>
                <option value="botol" @selected(old('satuan') == 'botol' || $agrigard->satuan == 'botol')>botol</option>
                <option value="lusin" @selected(old('satuan') == 'lusin' || $agrigard->satuan == 'lusin')>lusin</option>
                <option value="ikat" @selected(old('satuan') == 'ikat' || $agrigard->satuan == 'ikat')>ikat</option>
                <option value="karung" @selected(old('satuan') == 'karung' || $agrigard->satuan == 'karung')>karung</option>
                <option value="pack" @selected(old('satuan') == 'pack' || $agrigard->satuan == 'pack')>pack</option>
                <option value="meter" @selected(old('satuan') == 'meter' || $agrigard->satuan == 'meter')>meter</option>
            </select>            
                   @error('satuan')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row"> 
        <div class="col-12 col-sm-6">
        <div class="form-group">
          <label>Berat (gr) <span class="wajib">Wajib</span></label>
            <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Placeholder text" name="berat_gram" value="{{old('berat_gram', $agrigard->berat_gram)}}">
               @error('berat_gram')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <!-- /.form-group -->
      </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer">
      Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
      the plugin.
    </div> --}}
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
        <div class="col-md-3">
          <div class="form-group">
            <label>Gambar Produk <span class="wajib">Wajib</span></label>
            <p>Hanya file dengan format JPEG, PNG, dan JPG yang diterima. Ukuran maksimum file adalah 2 MB. Input gambar akan dihapus jika ada input yang tidak valid dalam formulir ini. Input maksimal 3 gambar</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <label for="imageInput">Klik / Drag & Drop Dari : </label>
            <input type="file" class="form-control" name="photos[]" id="imageInput" multiple/>
            <input type="hidden" name="existing_images" id="existing_images"/>
              <div style="display: flex; flex-wrap: wrap;">
                <table class="mt-3 col-12">
                  <tr id="imagePreviewContainer" >
                    <td id="1" style="padding:1rem; width: 25%;" class="img-prv"> <img src="{{ asset('storage/' . $agrigard->gambar_1) }}" alt="" class="previewer"></td>
                    <td id="2" style="padding:1rem; width: 25%;" class="img-prv"> <img @if(!empty($agrigard->gambar_2)) src="{{ asset('storage/' . $agrigard->gambar_2) }}" @endif alt="" class="previewer"></td>
                    <td id="3" style="padding:1rem; width: 25%;" class="img-prv"> <img @if(!empty($agrigard->gambar_3)) src="{{ asset('storage/' . $agrigard->gambar_3) }}" @endif alt="" class="previewer"></td>
                  </tr>
                </table>  
                <small class="text-danger" id="error-img" style="visibility: hidden">Hanya Bisa 4 Gambar</small>
            </div> 
          </div>
          @error('photos')
          <small class="text-danger">{{ $message }}</small>
          @enderror
          @for ($i = 0; $i < count($errors->get('photos.*')); $i++)
            @error("photos.$i")
                <small class="text-danger">{{ $message }}</small>
            @enderror
          @endfor
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Detail Produk <span class="wajib">Wajib</span></label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <textarea class="form-control" id="" rows="3" placeholder="Detail Produk" name="deskripsi_singkat">{{ old('deskripsi_singkat', $agrigard->deskripsi_singkat) }}</textarea>
                 @error('deskripsi_singkat')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Video Produk </label>
            <p>Video produk dalam bentuk link youtube</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input class="form-control"  id=""  placeholder="Masukkan Url Youtube" name="video" value="{{old('video', $agrigard->video)}}">
                 @error('video')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Stok Produk <span class="wajib">Wajib</span></label>
              <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Stok Dalam Bentuk Angka" name="stok" value="{{old('stok', $agrigard->stok)}}">
                 @error('stok')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Armada Minimum <span class="wajib">Wajib</span></label>
            <div class="select2-purple">
                <select class="form-control select2" style="width: 100%;" name="armada_minimum">
                  <option value="Motor" @selected(old('armada_minimum')=='Motor' || $agrigard->armada_minimum == 'Motor')>Motor</option>
                  <option value="Kargo Mobil" @selected(old('armada_minimum')=='Kargo Mobil'|| $agrigard->armada_minimum == 'Kargo Mobil')>Kargo Mobil</option>
                  <option value="Mobil Pick Up" @selected(old('armada_minimum')=='Mobil Pick Up' || $agrigard->armada_minimum == 'Mobil Pick Up')>Mobil Pick Up</option>
                  <option value="Truk Engkel" @selected(old('armada_minimum')=='Truk Engkel' || $agrigard->armada_minimum == 'Truk Engkel')>Truk Engkel</option>
                  <option value="Truk Fuso" @selected(old('armada_minimum')=='Truk Fuso' || $agrigard->armada_minimum == 'Truk Fuso')>Truk Fuso</option>
              </select>
                   @error('armada_minimum')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
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
      <h3 class="card-title">Harga Produk</h3>

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
            <p>Harga Jual Projek Ideally </p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
         
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" oninput="validateInput(this)"  class="css-3017qm rupiah" name="harga_jual_projek_ideally" value="{{old('harga_jual_projek_ideally',  number_format($agrigard->harga_jual_projek_ideally, 0, ',', '.'))}}">
            </div>
               @error('harga_jual_projek_ideally')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <label>Harga Business To Ideally :</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <p>1+ Units <span class="wajib">Wajib</span></p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
         
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_1_unit" value="{{old('harga_b2I_1_unit',  number_format($agrigard->harga_b2I_1_unit, 0, ',', '.'))}}">
            </div>
            
               @error('harga_b2I_1_unit')
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
            <p>11+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_11_unit" value="{{old('harga_b2I_11_unit', number_format($agrigard->harga_b2I_11_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2I_11_unit')
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
            <p>31+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_31_unit" value="{{old('harga_b2I_31_unit',  number_format($agrigard->harga_b2I_31_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2I_31_unit')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <label>Harga Business To Business :</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <p>1+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_1_unit" value="{{old('harga_b2B_1_unit',  number_format($agrigard->harga_b2B_1_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2B_1_unit')
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
            <p>11+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_11_unit" value="{{old('harga_b2B_11_unit',  number_format($agrigard->harga_b2B_11_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2B_11_unit')
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
            <p>31+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_31_unit" value="{{old('harga_b2B_31_unit',  number_format($agrigard->harga_b2B_31_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2B_31_unit')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <label>Harga Business To Company :</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <p>1+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_1_unit" value="{{old('harga_b2C_1_unit',  number_format($agrigard->harga_b2C_1_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2C_1_unit')
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
            <p>11+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_11_unit" value="{{old('harga_b2C_11_unit',  number_format($agrigard->harga_b2C_11_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2C_11_unit')
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
            <p>31+ Units <span class="wajib">Wajib</span></p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_31_unit" value="{{old('harga_b2C_31_unit', number_format($agrigard->harga_b2C_31_unit, 0, ',', '.'))}}">
            </div>
               @error('harga_b2C_31_unit')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
    <!-- /.card-body -->
  </div>
  <!-- /.row -->
</div>  
<input type="text" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" style="display:none;">
<div class="m-3 d-flex justify-content-end">
  <button class="btn btn-dark mx-5" type="reset">Batal</button>
  <button class="btn btn-dark mx-3" type="button" onclick="submitForm('1')">Simpan Dan Terbitkan</button>
  <button class="btn btn-success mx-3" type="button" onclick="submitForm('0')">Simpan</button>
</div>

</form>
</section>

@endsection
@section('scripts_all')
<script>imgStyling()</script>
<script>
    addExistingImagesToPhotos()
</script>
@endsection

