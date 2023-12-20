@extends('layouts/admin')
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
        <h1>Edit Produk dedikasiFlora</h1>
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
  <form method="post" action="{{ route('dedikasiFloras.update', $dedikasiFlora->id_nurseri)}} " enctype="multipart/form-data" id="agrForm">
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
              <label>Nama Latin</label>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="form-group">
                <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="nama_latin" id="nama_latin" value="{{old('nama_latin', $dedikasiFlora->nama_latin)}}">
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
              <label>Nama Lokal</label>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="form-group">
                <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="nama_lokal" id="nama_lokal" value="{{old('nama_lokal', $dedikasiFlora->nama_lokal)}}">
                @error('nama_lokal')
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
        <!-- /.row -->
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Spesifikasi Produk</label>
                <input type="text" class="form-control" placeholder="Placeholder text" name="spesifikasi" value="{{old('spesifikasi', $dedikasiFlora->spesifikasi)}}">
                   @error('spesifikasi')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Satuan Produk</label>
              <div class="select2-purple">
                  <select class="form-control select2" style="width: 100%;" name="satuan">
                    <option value="plb" @selected(old('satuan') == 'plb' || $dedikasiFlora->satuan == 'plb')>plb</option>
                    <option value="btg" @selected(old('satuan') == 'btg' || $dedikasiFlora->satuan == 'btg')>btg</option>
                    <option value="m2" @selected(old('satuan') == 'm2' || $dedikasiFlora->satuan == 'm2')>m2</option>
                    <option value="mata" @selected(old('satuan') == 'mata' || $dedikasiFlora->satuan == 'mata')>mata</option>
                    <option value="rumpun" @selected(old('satuan') == 'rumpun' || $dedikasiFlora->satuan == 'rumpun')>rumpun</option>
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
              <label>Diameter Tajuk</label>
                <input type="text" class="form-control" placeholder="Placeholder text" name="diameter_tajuk" value="{{old('diameter_tajuk', $dedikasiFlora->diameter_tajuk)}}">
                   @error('diameter_tajuk')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Strata</label>
              <div class="select2-purple">
                <select class="form-control select2" style="width: 100%;" name="strata">
                  <option value="Rumput" @selected(old('strata') == 'Rumput'|| $dedikasiFlora->strata == 'Rumput')>Rumput</option>
                  <option value="Penutup Tanah" @selected(old('strata') == 'Penutup Tanah'|| $dedikasiFlora->strata == 'Penutup Tanah')>Penutup Tanah</option>
                  <option value="Semak" @selected(old('strata') == 'Semak'|| $dedikasiFlora->strata == 'Semak')>Semak</option>
                  <option value="Pohon Kecil" @selected(old('strata') == 'Pohon Kecil'|| $dedikasiFlora->strata == 'Pohon Kecil')>Pohon Kecil</option>
                  <option value="Pohon Sedang" @selected(old('strata') == 'Pohon Sedang'|| $dedikasiFlora->strata == 'Pohon Sedang')>Pohon Sedang</option>
                  <option value="Pohon Besar" @selected(old('strata') == 'Pohon Besar'|| $dedikasiFlora->strata == 'Pohon Besar')>Pohon Besar</option>
                  <option value="Tanaman Air" @selected(old('strata') == 'Tanaman Air'|| $dedikasiFlora->strata == 'Tanaman Air')>Tanaman Air</option>
                  <option value="Merambat Menjuntai" @selected(old('strata') == 'Merambat Menjuntai'|| $dedikasiFlora->strata == 'Merambat Menjuntai')>Merambat Menjuntai</option>
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
              <label>Warna Daun</label>
                <select class="form-control select2" style="width: 100%;" name="warna_daun_1">
                  <option value="Hijau" @selected(old('warna_daun_1') == 'Hijau'|| $warna_daun_1 == 'Hijau')>🟩 Hijau</option>
                  <option value="Jingga" @selected(old('warna_daun_1') == 'Jingga'|| $warna_daun_1 == 'Jingga')>🟧 Jingga</option>
                  <option value="Putih" @selected(old('warna_daun_1') == 'Putih'|| $warna_daun_1 == 'Putih')>⬜️ Putih</option>
                </select>
                <div class="div py-1"></div>
                <select class="form-control select2" style="width: 100%;" name="warna_daun_2">
                  <option value="Tidak Ada" @selected(old('warna_daun_2') == 'Tidak Ada'|| $warna_daun_2 == 'Tidak Ada')>✖️ Tidak ada</option>
                  <option value="Hijau" @selected(old('warna_daun_2') == 'Hijau'|| $warna_daun_2 == 'Hijau')>🟩 Hijau</option>
                  <option value="Jingga" @selected(old('warna_daun_2') == 'Jingga'|| $warna_daun_2 == 'Jingga')>🟧 Jingga</option>
                  <option value="Putih" @selected(old('warna_daun_2') == 'Putih'|| $warna_daun_2 == 'Putih')>⬜️ Putih</option>
                </select>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Warna Bunga</label>
                  <select class="form-control select2" style="width: 100%;" name="warna_bunga_1">
                    <option value="Merah" @selected(old('warna_bunga_1') == 'Merah'|| $warna_bunga_1 == 'Hijau')>🟥 Merah</option>
                    <option value="Kuning" @selected(old('warna_bunga_1') == 'Kuning'|| $warna_bunga_1 == 'Kuning')>🟨 Kuning</option>
                    <option value="Hijau" @selected(old('warna_bunga_1') == 'Hijau'|| $warna_bunga_1 == 'Hijau')>🟩 Hijau</option>
                    <option value="Jingga" @selected(old('warna_bunga_1') == 'Jingga'|| $warna_bunga_1 == 'Jingga')>🟧 Jingga</option>
                    <option value="Biru" @selected(old('warna_bunga_1') == 'Biru'|| $warna_bunga_1 == 'Biru')>🟦 Biru</option>
                    <option value="Ungu" @selected(old('warna_bunga_1') == 'Ungu'|| $warna_bunga_1 == 'Ungu')>🟪 Ungu</option>
                    <option value="Putih" @selected(old('warna_bunga_1') == 'Putih'|| $warna_bunga_1 == 'Putih')>⬜️ Putih</option>
                    <option value="Hitam" @selected(old('warna_bunga_1') == 'Hitam'|| $warna_bunga_1 == 'Hitam')>⬛️ Hitam</option>
                    <option value="Cokelat" @selected(old('warna_bunga_1') == 'Cokelat'|| $warna_bunga_1 == 'Cokelat')>🟫 Cokelat</option>
                    <option value="Pink" @selected(old('warna_bunga_1') == 'Pink'|| $warna_bunga_1 == 'Pink')>💟 Pink</option>
                </select>
                <div class="div py-1"></div>
                <select class="form-control select2" style="width: 100%;" name="warna_bunga_2">
                  <option value="Tidak Ada" @selected(old('warna_bunga_2') == 'Tidak Ada'|| $warna_bunga_1 == 'Tidak Ada')>✖️ Tidak ada</option>
                  <option value="Merah" @selected(old('warna_bunga_2') == 'Merah'|| $warna_bunga_1 == 'Merah')>🟥 Merah</option>
                  <option value="Kuning" @selected(old('warna_bunga_2') == 'Kuning'|| $warna_bunga_1 == 'Kuning')>🟨 Kuning</option>
                  <option value="Hijau" @selected(old('warna_bunga_2') == 'Hijau'|| $warna_bunga_1 == 'Hijau')>🟩 Hijau</option>
                  <option value="Jingga" @selected(old('warna_bunga_2') == 'Jingga'|| $warna_bunga_1 == 'Jingga')>🟧 Jingga</option>
                  <option value="Biru" @selected(old('warna_bunga_2') == 'Biru'|| $warna_bunga_1 == 'Biru')>🟦 Biru</option>
                  <option value="Ungu" @selected(old('warna_bunga_2') == 'Ungu'|| $warna_bunga_1 == 'Ungu')>🟪 Ungu</option>
                  <option value="Putih" @selected(old('warna_bunga_2') == 'Putih'|| $warna_bunga_1 == 'Putih')>⬜️ Putih</option>
                  <option value="Hitam" @selected(old('warna_bunga_2') == 'Hitam'|| $warna_bunga_1 == 'Hitam')>⬛️ Hitam</option>
                  <option value="Cokelat" @selected(old('warna_bunga_2') == 'Cokelat'|| $warna_bunga_1 == 'Cokelat')>🟫 Cokelat</option>
                  <option value="Pink" @selected(old('warna_bunga_2') == 'Pink'|| $warna_bunga_1 == 'Pink')>💟 Pink</option>
              </select>   
            <!-- /.form-group -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Penyiraman</label>
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
              <label>Penyinaran</label>
              <div class="select2-purple">
                <select class="form-control select2" style="width: 100%;" name="penyinaran">
                  <option value="Extra Intensif" @selected(old('penyinaran') == 'Extra Intensif')>🍖 Extra Intensif</option>
                  <option value="Intensif" @selected(old('penyinaran') == 'Intensif')>🥩 Intensif</option>
                  <option value="Semi Intensif" @selected(old('penyinaran') == 'Semi Intensif')>🍗 Semi Intensif</option>
                  <option value="Ekstensif" @selected(old('penyinaran') == 'Ekstensif')>🦴 Ekstensif</option>
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
              <label>Pemupukan</label>
              <div class="select2-purple">
                <select class="form-control select2" style="width: 100%;" name="pemupukan">
                  <option value="Penuh" @selected(old('pemupukan') == 'Penuh')>☀️ Penuh</option>
                  <option value="Toleran Naungan" @selected(old('pemupukan') == 'Toleran Naungan')>⛅️ Toleran Naungan</option>
                  <option value="Naungan" @selected(old('pemupukan') == 'Naungan')>☁️ Naungan</option>
                </select>
                  @error('pemupukan')
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
            <input type="hidden" name="existing_images" id="existing_images"/>
              <div style="display: flex; flex-wrap: wrap;">
                <table class="mt-3 col-12">
                  <tr id="imagePreviewContainer" >
                    <td id="1" style="padding:1rem; width: 25%;" class="img-prv"> <img src="{{ asset('storage/' . $dedikasiFlora->gambar_1) }}" alt="" class="previewer"></td>
                    <td id="2" style="padding:1rem; width: 25%;" class="img-prv"> <img @if(!empty($dedikasiFlora->gambar_2)) src="{{ asset('storage/' . $dedikasiFlora->gambar_2) }}" @endif alt="" class="previewer"></td>
                    <td id="3" style="padding:1rem; width: 25%;" class="img-prv"> <img @if(!empty($dedikasiFlora->gambar_3)) src="{{ asset('storage/' . $dedikasiFlora->gambar_3) }}" @endif alt="" class="previewer"></td>
                    <td id="4" style="padding:1rem; width: 25%;" class="img-prv"> <img @if(!empty($dedikasiFlora->gambar_4)) src="{{ asset('storage/' . $dedikasiFlora->gambar_4) }}" @endif alt="" class="previewer"></td>
                  </tr>
                </table>  
                <small class="text-danger" id="error-img" style="visibility: hidden">Hanya Bisa 4 Gambar</small>
            </div> 
          </div>
          @error('photos')
          <small class="text-danger">{{ $message }}</small>
          @enderror
          <!-- /.form-group -->
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
            <textarea class="form-control" id="" rows="3" placeholder="Detail Produk" name="deskripsi_singkat">{{ old('deskripsi_singkat', $dedikasiFlora->deskripsi_singkat) }}</textarea>
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
              <input class="form-control"  id=""  placeholder="Masukkan Url Youtube" name="video" value="{{old('video', $dedikasiFlora->video)}}">
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
              <input type="number" class="form-control" placeholder="Masukkan Stok Dalam Bentuk Angka" name="stok" value="{{old('stok', $dedikasiFlora->stok)}}">
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
                  <option value="Motor" @selected(old('armada_minimum')=='Motor' || $dedikasiFlora->armada_minimum == 'Motor')>Motor</option>
                  <option value="Kargo Mobil" @selected(old('armada_minimum')=='Kargo Mobil'|| $dedikasiFlora->armada_minimum == 'Kargo Mobil')>Kargo Mobil</option>
                  <option value="Mobil Pick Up" @selected(old('armada_minimum')=='Mobil Pick Up' || $dedikasiFlora->armada_minimum == 'Mobil Pick Up')>Mobil Pick Up</option>
                  <option value="Truk Engkel" @selected(old('armada_minimum')=='Truk Engkel' || $dedikasiFlora->armada_minimum == 'Truk Engkel')>Truk Engkel</option>
                  <option value="Truk Fuso" @selected(old('armada_minimum')=='Truk Fuso' || $dedikasiFlora->armada_minimum == 'Truk Fuso')>Truk Fuso</option>
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_jual_projek_ideally" value="{{old('harga_jual_projek_ideally',  number_format($dedikasiFlora->harga_jual_projek_ideally, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2I_1_unit" value="{{old('harga_b2I_1_unit',  number_format($dedikasiFlora->harga_b2I_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2I_11_unit" value="{{old('harga_b2I_11_unit', number_format($dedikasiFlora->harga_b2I_11_unit, 0, ',', '.'))}}">
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
            <p>31+ Units</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2I_31_unit" value="{{old('harga_b2I_31_unit',  number_format($dedikasiFlora->harga_b2I_31_unit, 0, ',', '.'))}}">
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
            <p>1+ Units</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2B_1_unit" value="{{old('harga_b2B_1_unit',  number_format($dedikasiFlora->harga_b2B_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2B_11_unit" value="{{old('harga_b2B_11_unit',  number_format($dedikasiFlora->harga_b2B_11_unit, 0, ',', '.'))}}">
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
            <p>31+ Units</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2B_31_unit" value="{{old('harga_b2B_31_unit',  number_format($dedikasiFlora->harga_b2B_31_unit, 0, ',', '.'))}}">
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
            <p>1+ Units:</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2C_1_unit" value="{{old('harga_b2C_1_unit',  number_format($dedikasiFlora->harga_b2C_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2C_11_unit" value="{{old('harga_b2C_11_unit',  number_format($dedikasiFlora->harga_b2C_11_unit, 0, ',', '.'))}}">
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
            <p>31+ Units:</p>
           
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_b2C_31_unit" value="{{old('harga_b2C_31_unit', number_format($dedikasiFlora->harga_b2C_31_unit, 0, ',', '.'))}}">
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
  <button class="btn btn-dark mx-5" type="reset">Cancel</button>
  <button class="btn btn-dark mx-3" type="button" onclick="submitForm('1')">Submit And Post</button>
  <button class="btn btn-success mx-3" type="button" onclick="submitForm('0')">Submit</button>
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

