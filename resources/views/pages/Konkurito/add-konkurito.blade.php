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
        <h1>Tambah Produk Konkurito</h1>
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
  <form method="post" action="{{ route('konkuritos.save')}} " enctype="multipart/form-data" id="agrForm">
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
            <label>Nama Produk</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="nama_produk" id="nama_produk" value="{{old('nama_produk')}}">
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
            <label>Jenis Produk</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <select class="form-control select2" style="width: 100%;" name="jenis">
              <option value="Roster" @selected(old('jenis') == 'Roster' )>Roster</option>
              <option value="Paving" @selected(old('jenis') == 'Paving' )>Paving</option>
              <option value="U-Ditch" @selected(old('jenis') == 'U-Ditch' )>U-Ditch</option>
              <option value="Box Culvert" @selected(old('jenis') == 'Box Culvert')>Box Culvert</option>
              <option value="Buis Beton" @selected(old('jenis') == 'Buis Beton')>Buis Beton</option>
              <option value="Panel Pagar" @selected(old('jenis') == 'Panel Pagar')>Panel Pagar</option>
              <option value="Tiang Pagar" @selected(old('jenis') == 'Tiang Pagar' )>Tiang Pagar</option>
              <option value="Sitecast" @selected(old('jenis') == 'Sitecast')>Sitecast</option>
          </select>
              @error('jenis')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Satuan Produk</label>
            <select class="form-control select2" style="width: 100%;" name="satuan">
              <option value="unit" @selected(old('satuan') == 'unit')>unit</option>
              <option value="m" @selected(old('satuan') == 'm')>m</option>
              <option value="m2" @selected(old('satuan') == 'm2')>m2</option>
            </select>
                 @error('satuan')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Garansi Produk</label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="garansi">
                <option value="30 hari" @selected(old('garansi') == '30 hari')>30 hari</option>
                <option value="60 hari" @selected(old('garansi') == '60 hari')>60 hari</option>
                <option value="90 hari" @selected(old('garansi') == '90 hari')>90 hari</option>
                <option value="180 hari" @selected(old('garansi') == '180 hari')>180 hari</option>
                <option value="360 hari" @selected(old('garansi') == '360 hari')>360 hari</option>
            </select>            
                   @error('garansi')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Warna Produk 1</label>
                <select class="form-control select2" style="width: 100%;" name="warna_1">
                  <option value="Natural" @selected(old('warna_1') == 'Natural')>Natural 🟫</option>
                  <option value="Merah" @selected(old('warna_1') == 'Merah')>Merah 🟥</option>
                  <option value="Hitam" @selected(old('warna_1') == 'Hitam')>Hitam ⬛️</option>
                  <option value="Kuning" @selected(old('warna_1') == 'Kuning')>Kuning 🟨</option>
                  <option value="Hijau" @selected(old('warna_1') == 'Hijau')>Hijau 🟩</option>
                  <option value="Putih" @selected(old('warna_1') == 'Putih')>Putih ⬜️</option>
                  <option value="Terracota" @selected(old('warna_1') == 'Terracota')>Terracota 🟥</option>
              </select> 
                   @error('warna_1')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          <!-- /.form-group -->
          </div>
      </div>
      <div class="col-12 col-sm-6">
        <div class="form-group">
          <label>Warna Produk 2</label>
              <select class="form-control select2" style="width: 100%;" name="warna_2">
                <option value="Tidak Ada" @selected(old('warna_2') == 'Tidak Ada')>✖️ Tidak ada</option>
                <option value="Natural" @selected(old('warna_2') == 'Natural')>Natural 🟫</option>
                <option value="Merah" @selected(old('warna_2') == 'Merah')>Merah 🟥</option>
                <option value="Hitam" @selected(old('warna_2') == 'Hitam')>Hitam ⬛️</option>
                <option value="Kuning" @selected(old('warna_2') == 'Kuning')>Kuning 🟨</option>
                <option value="Hijau" @selected(old('warna_2') == 'Hijau')>Hijau 🟩</option>
                <option value="Putih" @selected(old('warna_2') == 'Putih')>Putih ⬜️</option>
                <option value="Terracota" @selected(old('warna_2') == 'Terracota')>Terracota 🟥</option>
            </select> 
                 @error('warna_2')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        <!-- /.form-group -->
        </div>
      </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Spesifikasi Produk</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Panjang Produk (cm)</label>
              <input type="number" class="form-control" placeholder="Masukkan Panjang Dalam Bentuk Angka" name="panjang" value="{{old('panjang')}}">
                 @error('panjang')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Lebar Produk (cm)</label>
              <input type="number" class="form-control" placeholder="Masukkan Lebar Dalam Bentuk Angka" name="lebar" value="{{old('lebar')}}">
                 @error('lebar')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Diameter Produk (cm)</label>
              <input type="number" class="form-control" placeholder="Masukkan Diameter Dalam Bentuk Angka" name="diameter" value="{{old('diameter')}}">
                 @error('diameter')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Tinggi Produk (cm)</label>
              <input type="number" class="form-control" placeholder="Masukkan Tinggi Dalam Bentuk Angka" name="tinggi" value="{{old('tinggi')}}">
                 @error('tinggi')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Tebal Produk (cm)</label>
              <input type="number" class="form-control" placeholder="Masukkan Tebal Dalam Bentuk Angka" name="tebal" value="{{old('tebal')}}">
                 @error('tebal')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Berat (gr)</label>
              <input type="number" class="form-control" placeholder="Placeholder text" name="berat" value="{{old('berat')}}">
                 @error('berat')
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
            <label>Gambar Produk</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <label for="imageInput">Klik / Drag & Drop Dari : </label>
            <input type="file" class="form-control" name="photos[]" id="imageInput" multiple/>
          </div>
          @error('photos')
          <small class="text-danger">{{ $message }}</small>
          @enderror
          <!-- /.form-group -->
        </div>
        <div class="col-12 my-3">
          <div style="display: flex; flex-wrap: wrap;">
            <table class="mt-3 col-12">
              <tr id="imagePreviewContainer">
                <td id="1" style="padding: 1rem; width: <?= 100 / 5 ?>%;" class="img-prv"><img alt="" class="previewer"></td>
                <td id="2" style="padding: 1rem; width: <?= 100 / 5 ?>%;" class="img-prv"><img alt="" class="previewer"></td>
                <td id="3" style="padding: 1rem; width: <?= 100 / 5 ?>%;" class="img-prv"><img alt="" class="previewer"></td>
                <td id="4" style="padding: 1rem; width: <?= 100 / 5 ?>%;" class="img-prv"><img alt="" class="previewer"></td>
                <td id="5" style="padding: 1rem; width: <?= 100 / 5 ?>%;" class="img-prv"><img alt="" class="previewer"></td>
            </tr>            
            </table>
            <small class="text-danger" id="error-img" style="visibility: hidden">Hanya Bisa 6 Gambar</small>
          </div> 
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Detail Produk</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <textarea class="form-control" id="" rows="3" placeholder="Detail Produk" name="deskripsi_singkat">{{old('deskripsi_singkat')}}</textarea>
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
            <label>Video Produk</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input class="form-control"  id=""  placeholder="Masukkan Url Youtube" name="video"  value="{{old('video')}}"/>
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
            <label>Stok Produk</label>
              <input type="number" class="form-control" placeholder="Masukkan Stok Dalam Bentuk Angka" name="stok" value="{{old('stok')}}">
                 @error('stok')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Armada Minimum</label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="armada_minimum">
                <option value="Motor" @selected(old('armada_minimum')=='Motor')>Motor</option>
                <option value="Kargo Mobil" @selected(old('armada_minimum')=='Kargo Mobil')>Kargo Mobil</option>
                <option value="Mobil Pick Up" @selected(old('armada_minimum')=='Mobil Pick Up')>Mobil Pick Up</option>
                <option value="Truk Engkel" @selected(old('armada_minimum')=='Truk Engkel')>Truk Engkel</option>
                <option value="Truk Fuso" @selected(old('armada_minimum')=='Truk Fuso')>Truk Fuso</option>
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_jual_projek_ideally" value="{{old('harga_jual_projek_ideally')}}">
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
        <label>Harga Business To Individu :</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <p>1+ Units</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
         
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2I_1_unit" value="{{old('harga_b2I_1_unit')}}">
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
            <p>11+ Units</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2I_11_unit" value="{{old('harga_b2I_11_unit')}}">
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
        <label>Harga Business To Business :</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <p>1+ Units</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2B_1_unit" value="{{old('harga_b2B_1_unit')}}">
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
            <p>11+ Units</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2B_11_unit" value="{{old('harga_b2B_11_unit')}}">
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
        <label>Harga Business To Company :</label>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <p>1+ Units:</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2C_1_unit" value="{{old('harga_b2C_1_unit')}}">
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
            <p>11+ Units:</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2C_11_unit" value="{{old('harga_b2C_11_unit')}}">
            </div>
               @error('harga_b2C_11_unit')
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

