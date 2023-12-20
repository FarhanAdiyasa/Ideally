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
        <h1>Edit Produk shineage</h1>
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
  <form method="post" action="{{ route('shineages.update', $shineage->id_shineage)}} " enctype="multipart/form-data" id="agrForm">
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
              <label>Nama Produk</label>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="form-group">
                <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="nama_produk" id="nama_produk" value="{{old('nama_produk', $shineage->nama_produk)}}">
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
              <label>Seri Shineage</label>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="form-group">
                <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="seri" id="seri" value="{{old('seri', $shineage->seri)}}">
                @error('seri')
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
              <label>Jenis</label>
              <select class="form-control select2" style="width: 100%;" name="jenis">
                <option value="Neon Box" @selected(old('jenis') == 'Neon Box' || $shineage->jenis == 'Neon Box')>Neon Box</option>
                <option value="Letter Sign" @selected(old('jenis') == 'Letter Sign' || $shineage->jenis == 'Letter Sign')>Letter Sign</option>
                <option value="Produk Akrilik" @selected(old('jenis') == 'Produk Akrilik' || $shineage->jenis == 'Produk Akrilik')>Produk Akrilik</option>
                <option value="Kelistrikan" @selected(old('jenis') == 'Kelistrikan' || $shineage->jenis == 'Kelistrikan')>Kelistrikan</option>
                <option value="Neon Flex" @selected(old('jenis') == 'Neon Flex' || $shineage->jenis == 'Neon Flex')>Neon Flex</option>
                <option value="Info Sign" @selected(old('jenis') == 'Info Sign' || $shineage->jenis == 'Info Sign')>Info Sign</option>
            </select>            
                @error('jenis')
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
                  <option value="30 hari" @selected(old('garansi') == '30 hari' || $shineage->garansi == '30 hari')>30 hari</option>
                  <option value="60 hari" @selected(old('garansi') == '60 hari' || $shineage->garansi == '60 hari')>60 hari</option>
                  <option value="90 hari" @selected(old('garansi') == '90 hari' || $shineage->garansi == '90 hari')>90 hari</option>
                  <option value="180 hari" @selected(old('garansi') == '180 hari' || $shineage->garansi == '180 hari')>180 hari</option>
                  <option value="360 hari" @selected(old('garansi') == '360 hari' || $shineage->garansi == '360 hari')>360 hari</option>
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
              <label>Dimensi Produk</label>
                <input type="text" class="form-control" placeholder="Placeholder text" name="dimensi" value="{{old('dimensi', $shineage->dimensi)}}">
                   @error('dimensi')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Warna Produk</label>
              <select class="form-control select2" style="width: 100%;" name="warna">
                <option value="Merah" @selected(old('warna') == 'Merah' || $shineage->warna == 'Merah')>
                    🔴 Merah
                </option>
                <option value="Kuning" @selected(old('warna') == 'Kuning' || $shineage->warna == 'Kuning')>
                    🟡 Kuning
                </option>
                <option value="Hijau" @selected(old('warna') == 'Hijau' || $shineage->warna == 'Hijau')>
                    🟢 Hijau
                </option>
                <option value="Jingga" @selected(old('warna') == 'Jingga' || $shineage->warna == 'Jingga')>
                    🟠 Jingga
                </option>
                <option value="Biru" @selected(old('warna') == 'Biru' || $shineage->warna == 'Biru')>
                    🔵 Biru
                </option>
                <option value="Ungu" @selected(old('warna') == 'Ungu' || $shineage->warna == 'Ungu')>
                    🟣 Ungu
                </option>
                <option value="Putih" @selected(old('warna') == 'Putih' || $shineage->warna == 'Putih')>
                    ⚪ Putih
                </option>
                <option value="Hitam" @selected(old('warna') == 'Hitam' || $shineage->warna == 'Hitam')>
                    ⚫ Hitam
                </option>
                <option value="Cokelat" @selected(old('warna') == 'Cokelat' || $shineage->warna == 'Cokelat')>
                    🟤 Cokelat
                </option>
                <option value="Pink" @selected(old('warna') == 'Pink' || $shineage->warna == 'Pink')>
                    💖 Pink
                </option>
            </select>            
                @error('warna')
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
              <label>Material Pendukung</label>
                <input type="text" class="form-control" placeholder="Placeholder text" name="material_pendukung" value="{{old('material_pendukung', $shineage->material_pendukung)}}">
                   @error('material_pendukung')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Finishing</label>
                <input type="text" class="form-control" placeholder="Placeholder text" name="finishing" value="{{old('finishing', $shineage->finishing)}}">
                   @error('finishing')
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
                <input type="number" class="form-control" placeholder="Masukkan Panjang Dalam Bentuk Angka" name="panjang" value="{{old('panjang', $shineage->panjang)}}">
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
                <input type="number" class="form-control" placeholder="Masukkan Lebar Dalam Bentuk Angka" name="lebar" value="{{old('lebar', $shineage->lebar)}}">
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
                <input type="number" class="form-control" placeholder="Masukkan Diameter Dalam Bentuk Angka" name="diameter" value="{{old('diameter', $shineage->diameter)}}">
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
                <input type="number" class="form-control" placeholder="Masukkan Tinggi Dalam Bentuk Angka" name="tinggi" value="{{old('tinggi', $shineage->tinggi)}}">
                   @error('tinggi')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
        </div>
        
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
            <input type="hidden" name="existing_images" id="existing_images"/>
              <div style="display: flex; flex-wrap: wrap;">
                <table class="mt-3 col-12">
                  <tr id="imagePreviewContainer" >
                    <td id="1" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img src="{{ asset('storage/' . $shineage->gambar_1) }}" alt="" class="previewer"></td>
                    <td id="2" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($shineage->gambar_2)) src="{{ asset('storage/' . $shineage->gambar_2) }}" @endif alt="" class="previewer"></td>
                    <td id="3" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($shineage->gambar_3)) src="{{ asset('storage/' . $shineage->gambar_3) }}" @endif alt="" class="previewer"></td>
                    <td id="4" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($shineage->gambar_4)) src="{{ asset('storage/' . $shineage->gambar_4) }}" @endif alt="" class="previewer"></td>
                    <td id="5" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($shineage->gambar_5)) src="{{ asset('storage/' . $shineage->gambar_5) }}" @endif alt="" class="previewer"></td>
                    <td id="6" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($shineage->gambar_6)) src="{{ asset('storage/' . $shineage->gambar_6) }}" @endif alt="" class="previewer"></td>
                  </tr>
                </table>  
                <small class="text-danger" id="error-img" style="visibility: hidden">Hanya Bisa 6 Gambar</small>
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
            <textarea class="form-control" id="" rows="3" placeholder="Detail Produk" name="deskripsi_singkat">{{ old('deskripsi_singkat', $shineage->deskripsi_singkat) }}</textarea>
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
              <input class="form-control"  id=""  placeholder="Masukkan Url Youtube" name="video" value="{{old('video', $shineage->video)}}">
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
              <input type="number" class="form-control" placeholder="Masukkan Stok Dalam Bentuk Angka" name="stok" value="{{old('stok', $shineage->stok)}}">
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
                  <option value="Motor" @selected(old('armada_minimum')=='Motor' || $shineage->armada_minimum == 'Motor')>Motor</option>
                  <option value="Kargo Mobil" @selected(old('armada_minimum')=='Kargo Mobil'|| $shineage->armada_minimum == 'Kargo Mobil')>Kargo Mobil</option>
                  <option value="Mobil Pick Up" @selected(old('armada_minimum')=='Mobil Pick Up' || $shineage->armada_minimum == 'Mobil Pick Up')>Mobil Pick Up</option>
                  <option value="Truk Engkel" @selected(old('armada_minimum')=='Truk Engkel' || $shineage->armada_minimum == 'Truk Engkel')>Truk Engkel</option>
                  <option value="Truk Fuso" @selected(old('armada_minimum')=='Truk Fuso' || $shineage->armada_minimum == 'Truk Fuso')>Truk Fuso</option>
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="number"  class="css-3017qm rupiah" name="harga_jual_projek_ideally" value="{{old('harga_jual_projek_ideally',  number_format($shineage->harga_jual_projek_ideally, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_1_unit" value="{{old('harga_b2I_1_unit',  number_format($shineage->harga_b2I_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_11_unit" value="{{old('harga_b2I_11_unit', number_format($shineage->harga_b2I_11_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_1_unit" value="{{old('harga_b2B_1_unit',  number_format($shineage->harga_b2B_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_11_unit" value="{{old('harga_b2B_11_unit',  number_format($shineage->harga_b2B_11_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_1_unit" value="{{old('harga_b2C_1_unit',  number_format($shineage->harga_b2C_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_11_unit" value="{{old('harga_b2C_11_unit',  number_format($shineage->harga_b2C_11_unit, 0, ',', '.'))}}">
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

