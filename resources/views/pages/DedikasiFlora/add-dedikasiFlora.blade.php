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
        <h1>Tambah Produk Dedikasi Flora</h1>
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
  <form method="post" action="{{ route('dedikasiFloras.save')}} " enctype="multipart/form-data" id="agrForm">
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
            <label>Nama Latin <span class="wajib">Wajib</span> </label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input id="default" type="text" class="form-control" placeholder="Masukkan Nama Latin" name="nama_latin" id="nama_latin" value="{{old('nama_latin')}}">
              @error('nama_latin')
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
            <label>Nama Lokal <span class="wajib">Wajib</span> </label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input id="default2" type="text" class="form-control" placeholder="Masukkan Nama Lokal" name="nama_lokal" id="nama_lokal" value="{{old('nama_lokal')}}">
              @error('nama_lokal')
              <small class="text-danger">{{ $message }}</small>
              @enderror
              <div class="float-right d-none d-sm-block">
                <span id="characterCount2">0</span>/70
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
            <label>Spesifikasi Produk <span class="wajib">Wajib</span> </label>
              <input type="text" class="form-control" placeholder="Masukkan Spesifikasi" name="spesifikasi" value="{{old('spesifikasi')}}">
                 @error('spesifikasi')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Satuan Produk <span class="wajib">Wajib</span> </label>
            <div class="select2-purple">
                <select class="form-control select2" style="width: 100%;" name="satuan">
                  <option value="plb" @selected(old('satuan') == 'plb')>plb</option>
                  <option value="btg" @selected(old('satuan') == 'btg')>btg</option>
                  <option value="m2" @selected(old('satuan') == 'm2')>m2</option>
                  <option value="mata" @selected(old('satuan') == 'mata')>mata</option>
                  <option value="rumpun" @selected(old('satuan') == 'rumpun')>rumpun</option>
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
      <!-- /.row -->
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
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Diameter Tajuk <span class="wajib">Wajib</span></label>
              <input type="text" class="form-control" placeholder="Masukkan Diameter Tajuk" name="diameter_tajuk" value="{{old('diameter_tajuk')}}">
                 @error('diameter_tajuk')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Strata <span class="wajib">Wajib</span> </label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="strata">
                <option value="Rumput" @selected(old('strata') == 'Rumput')>Rumput</option>
                <option value="Penutup Tanah" @selected(old('strata') == 'Penutup Tanah')>Penutup Tanah</option>
                <option value="Semak" @selected(old('strata') == 'Semak')>Semak</option>
                <option value="Pohon Kecil" @selected(old('strata') == 'Pohon Kecil')>Pohon Kecil</option>
                <option value="Pohon Sedang" @selected(old('strata') == 'Pohon Sedang')>Pohon Sedang</option>
                <option value="Pohon Besar" @selected(old('strata') == 'Pohon Besar')>Pohon Besar</option>
                <option value="Tanaman Air" @selected(old('strata') == 'Tanaman Air')>Tanaman Air</option>
                <option value="Merambat Menjuntai" @selected(old('strata') == 'Merambat Menjuntai')>Merambat Menjuntai</option>
              </select>
                   @error('strata')
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
            <label>Warna Daun <span class="wajib">Wajib</span> </label>
              <select class="form-control select2" style="width: 100%;" name="warna_daun_1">
                <option value="Hijau" @selected(old('warna_daun_1') == 'Hijau')>🟩 Hijau</option>
                <option value="Jingga" @selected(old('warna_daun_1') == 'Jingga')>🟧 Jingga</option>
                <option value="Putih" @selected(old('warna_daun_1') == 'Putih')>⬜️ Putih</option>
              </select>
              <div class="div py-1"></div>
              <select class="form-control select2" style="width: 100%;" name="warna_daun_2">
                <option value="Tidak Ada" @selected(old('warna_daun_2') == 'Tidak Ada')>✖️ Tidak ada</option>
                <option value="Hijau" @selected(old('warna_daun_2') == 'Hijau')>🟩 Hijau</option>
                <option value="Jingga" @selected(old('warna_daun_2') == 'Jingga')>🟧 Jingga</option>
                <option value="Putih" @selected(old('warna_daun_2') == 'Putih')>⬜️ Putih</option>
              </select>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Warna Bunga <span class="wajib">Wajib</span> </label>
                <select class="form-control select2" style="width: 100%;" name="warna_bunga_1">
                  <option value="Merah" @selected(old('warna_bunga_1') == 'Merah')>🟥 Merah</option>
                  <option value="Kuning" @selected(old('warna_bunga_1') == 'Kuning')>🟨 Kuning</option>
                  <option value="Hijau" @selected(old('warna_bunga_1') == 'Hijau')>🟩 Hijau</option>
                  <option value="Jingga" @selected(old('warna_bunga_1') == 'Jingga')>🟧 Jingga</option>
                  <option value="Biru" @selected(old('warna_bunga_1') == 'Biru')>🟦 Biru</option>
                  <option value="Ungu" @selected(old('warna_bunga_1') == 'Ungu')>🟪 Ungu</option>
                  <option value="Putih" @selected(old('warna_bunga_1') == 'Putih')>⬜️ Putih</option>
                  <option value="Hitam" @selected(old('warna_bunga_1') == 'Hitam')>⬛️ Hitam</option>
                  <option value="Cokelat" @selected(old('warna_bunga_1') == 'Cokelat')>🟫 Cokelat</option>
                  <option value="Pink" @selected(old('warna_bunga_1') == 'Pink')>💟 Pink</option>
              </select>
              <div class="div py-1"></div>
              <select class="form-control select2" style="width: 100%;" name="warna_bunga_2">
                <option value="Tidak Ada" @selected(old('warna_bunga_2') == 'Tidak Ada')>✖️ Tidak ada</option>
                <option value="Merah" @selected(old('warna_bunga_2') == 'Merah')>🟥 Merah</option>
                <option value="Kuning" @selected(old('warna_bunga_2') == 'Kuning')>🟨 Kuning</option>
                <option value="Hijau" @selected(old('warna_bunga_2') == 'Hijau')>🟩 Hijau</option>
                <option value="Jingga" @selected(old('warna_bunga_2') == 'Jingga')>🟧 Jingga</option>
                <option value="Biru" @selected(old('warna_bunga_2') == 'Biru')>🟦 Biru</option>
                <option value="Ungu" @selected(old('warna_bunga_2') == 'Ungu')>🟪 Ungu</option>
                <option value="Putih" @selected(old('warna_bunga_2') == 'Putih')>⬜️ Putih</option>
                <option value="Hitam" @selected(old('warna_bunga_2') == 'Hitam')>⬛️ Hitam</option>
                <option value="Cokelat" @selected(old('warna_bunga_2') == 'Cokelat')>🟫 Cokelat</option>
                <option value="Pink" @selected(old('warna_bunga_2') == 'Pink')>💟 Pink</option>
            </select>   
          <!-- /.form-group -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Penyiraman <span class="wajib">Wajib</span> </label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="penyiraman">
                <option value="Basah" @selected(old('penyiraman') == 'Basah')>🌊 Basah</option>
                <option value="Intensif" @selected(old('penyiraman') == 'Intensif')>💦 Intensif</option>
                <option value="Semi Intensif" @selected(old('penyiraman') == 'Semi Intensif')>💧 Semi Intensif</option>
                <option value="Ekstensif" @selected(old('penyiraman') == 'Ekstensif')>🌫 Ekstensif</option>
              </select>                           
                @error('penyiraman')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Penyinaran <span class="wajib">Wajib</span> </label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="penyinaran">
                <option value="Penuh" @selected(old('penyinaran') == 'Penuh')>☀️ Penuh</option>
                <option value="Toleran Naungan" @selected(old('penyinaran') == 'Toleran Naungan')>⛅️ Toleran Naungan</option>
                <option value="Naungan" @selected(old('penyinaran') == 'Naungan')>☁️ Naungan</option>
              </select>                           
                @error('penyinaran')
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
            <label>Pemupukan <span class="wajib">Wajib</span></label>
            <div class="select2-purple">
              <select class="form-control select2" style="width: 100%;" name="pemupukan">
                <option value="Extra Intensif" @selected(old('pemupukan') == 'Extra Intensif')>🍖 Extra Intensif</option>
                <option value="Intensif" @selected(old('pemupukan') == 'Intensif')>🥩 Intensif</option>
                <option value="Semi Intensif" @selected(old('pemupukan') == 'Semi Intensif')>🍗 Semi Intensif</option>
                <option value="Ekstensif" @selected(old('pemupukan') == 'Ekstensif')>🦴 Ekstensif</option>
              </select>
                @error('pemupukan')
              <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </div>
          <!-- /.form-group -->
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Berat (gr) <span class="wajib">Wajib</span></label>
              <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan berat" name="berat_gram" value="{{old('berat_gram')}}">
                 @error('berat_gram')
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
              <div style="display: flex; flex-wrap: wrap;">
                <table class="mt-3 col-12">
                  <tr id="imagePreviewContainer" >
                    <td id="1" style="padding:1rem; width: 25%;" class="img-prv"><img alt="" class="previewer"></td>
                    <td id="2" style="padding:1rem; width: 25%;" class="img-prv"><img alt="" class="previewer"></td>
                    <td id="3" style="padding:1rem; width: 25%;" class="img-prv"><img alt="" class="previewer"></td>
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
            <textarea class="form-control" id="" rows="3" placeholder="Masukkan Detail Produk" name="deskripsi_singkat">{{old('deskripsi_singkat')}}</textarea>
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
            <p>Video produk dalam bentuk link youtube</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input class="form-control"  id=""  placeholder="Masukkan Video Produk" name="video"/>
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
              <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Stok Produk" name="stok" value="{{old('stok')}}">
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
            <label>Harga Jual Projek Ideally :</label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
         
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_jual_projek_ideally" value="{{old('harga_jual_projek_ideally')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2I_1_unit" value="{{old('harga_b2I_1_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2I_11_unit" value="{{old('harga_b2I_11_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2I_31_unit" value="{{old('harga_b2I_31_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2B_1_unit" value="{{old('harga_b2B_1_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2B_11_unit" value="{{old('harga_b2B_11_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2B_31_unit" value="{{old('harga_b2B_31_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2C_1_unit" value="{{old('harga_b2C_1_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2C_11_unit" value="{{old('harga_b2C_11_unit')}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_b2C_31_unit" value="{{old('harga_b2C_31_unit')}}">
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

