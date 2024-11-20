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
        <h1>Edit Produk Batunesia</h1>
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
  <form method="post" action="{{ route('batunesias.update', $batunesia->id_batu)}} " enctype="multipart/form-data" id="agrForm">
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
                <input id="default" type="text" class="form-control" placeholder="Masukkan Nama Produk" name="nama_produk" id="nama_produk" value="{{old('nama_produk', $batunesia->nama_produk)}}">
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
              <label>Jenis Produk <span class="wajib">Wajib</span></label>
              <p>Pilih jenis produk batunesia yang akan ditambahkan.</p>
              </div>
            <!-- /.form-group -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="form-group">
              <select class="form-control select2" style="width: 100%;" name="kategori">
                <option value="Batu Hampar" @selected(old('kategori', $batunesia->kategori) == 'Batu Hampar')>Batu Hampar</option>
                <option value="Batu Tempel" @selected(old('kategori', $batunesia->kategori) == 'Batu Tempel')>Batu Tempel</option>
                <option value="Batu Hias" @selected(old('kategori', $batunesia->kategori) == 'Batu Hias')>Batu Hias</option>
                <option value="Ornamen Batu" @selected(old('kategori', $batunesia->kategori) == 'Ornamen Batu')>Ornamen Batu</option>
                <option value="Pot Batu" @selected(old('kategori', $batunesia->kategori) == 'Pot Batu')>Pot Batu</option>
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
              <label>Satuan Produk <span class="wajib">Wajib</span></label>
                <select class="form-control select2" style="width: 100%;" name="satuan">
                  <option value="pcs" @selected(old('satuan', $batunesia->satuan) == 'pcs')>pcs</option>
                  <option value="karung_5_kg" @selected(old('satuan', $batunesia->satuan) == 'karung_5_kg')>karung 5 kg</option>
                  <option value="karung_10_kg" @selected(old('satuan', $batunesia->satuan) == 'karung_10_kg')>karung 10 kg</option>
                  <option value="pick_up" @selected(old('satuan', $batunesia->satuan) == 'pick_up')>pick up</option>
                  <option value="truk_engkel" @selected(old('satuan', $batunesia->satuan) == 'truk_engkel')>truk engkel</option>
                  <option value="dump_truck" @selected(old('satuan', $batunesia->satuan) == 'dump_truck')>dump truck</option>
                  <option value="m2" @selected(old('satuan', $batunesia->satuan) == 'm2')>m2</option>
                  <option value="karung_30" @selected(old('satuan', $batunesia->satuan) == 'karung_30')>karung 30</option>
                  <option value="karung_25" @selected(old('satuan', $batunesia->satuan) == 'karung_25')>karung 25</option>
                  <option value="kg" @selected(old('satuan', $batunesia->satuan) == 'kg')>kg</option>
                </select>
                   @error('satuan')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <!-- /.form-group -->
          </div>
          <div class="col-12 col-sm-6">
            <div class="form-group">
              <label>Berat (gr) <span class="wajib">Wajib</span></label>
                <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Berat(gr)" name="berat_gram" value="{{old('berat_gram', $batunesia->berat_gram)}}">
                   @error('berat')
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
              <label>Warna Produk 1 <span class="wajib">Wajib</span></label>
              <select class="form-control select2" style="width: 100%;" name="warna_1">
                <option value="Putih" @selected(old('warna_1', $batunesia->warna_1) == 'Putih')>⚪ Putih</option>
                <option value="Krem" @selected(old('warna_1', $batunesia->warna_1) == 'Krem')>🌕 Krem</option>
                <option value="Abu-abu" @selected(old('warna_1', $batunesia->warna_1) == 'Abu-abu')>🌑 Abu-abu</option>
                <option value="Cokelat" @selected(old('warna_1', $batunesia->warna_1) == 'Cokelat')>🍫 Cokelat</option>
                <option value="Hitam" @selected(old('warna_1', $batunesia->warna_1) == 'Hitam')>⚫ Hitam</option>
                <option value="Pancawarna" @selected(old('warna_1', $batunesia->warna_1) == 'Pancawarna')>🎨 Pancawarna</option>
              </select>          
                     @error('warna_1')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            <!-- /.form-group -->
            </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Warna Produk 2 <span class="wajib">Wajib</span></label>
            <select class="form-control select2" style="width: 100%;" name="warna_2">
              <option value="Tidak Ada" @selected(old('warna_2', $batunesia->warna_2) == 'Tidak Ada')>✖️ Tidak ada</option>
              <option value="Putih" @selected(old('warna_2', $batunesia->warna_2) == 'Putih')>⚪ Putih</option>
              <option value="Krem" @selected(old('warna_2', $batunesia->warna_2) == 'Krem')>🌕 Krem</option>
              <option value="Abu-abu" @selected(old('warna_2', $batunesia->warna_2) == 'Abu-abu')>🌑 Abu-abu</option>
              <option value="Cokelat" @selected(old('warna_2', $batunesia->warna_2) == 'Cokelat')>🍫 Cokelat</option>
              <option value="Hitam" @selected(old('warna_2', $batunesia->warna_2) == 'Hitam')>⚫ Hitam</option>
              <option value="Pancawarna" @selected(old('warna_2', $batunesia->warna_2) == 'Pancawarna')>🎨 Pancawarna</option>
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
                <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Panjang Dalam Bentuk Angka" name="panjang" value="{{old('panjang', $batunesia->panjang)}}">
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
                <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Lebar Dalam Bentuk Angka" name="lebar" value="{{old('lebar', $batunesia->lebar)}}">
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
                <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Diameter Dalam Bentuk Angka" name="diameter" value="{{old('diameter', $batunesia->diameter)}}">
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
                <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Tinggi Dalam Bentuk Angka" name="tinggi" value="{{old('tinggi', $batunesia->tinggi)}}">
                   @error('tinggi')
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
                    <td id="1" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img src="{{ asset('storage/' . $batunesia->gambar_1) }}" alt="" class="previewer"></td>
                    <td id="2" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($batunesia->gambar_2)) src="{{ asset('storage/' . $batunesia->gambar_2) }}" @endif alt="" class="previewer"></td>
                    <td id="3" style="padding:1rem; width: <?= 100 / 6 ?>%;" class="img-prv"> <img @if(!empty($batunesia->gambar_3)) src="{{ asset('storage/' . $batunesia->gambar_3) }}" @endif alt="" class="previewer"></td>
                  </tr>
                </table>  
                <small class="text-danger" id="error-img" style="visibility: hidden">Hanya Bisa 6 Gambar</small>
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
            <textarea class="form-control" id="" rows="3" placeholder="Masukkan Detail Produk" name="deskripsi_singkat">{{ old('deskripsi_singkat', $batunesia->deskripsi_singkat) }}</textarea>
                 @error('deskripsi_singkat')
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
            <label>Penempatan Produk <span class="wajib">Wajib</span></label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <textarea class="form-control" id="" rows="3" placeholder="Masukkan Penempatan Produk" name="penempatan">{{old('penempatan', $batunesia->penempatan)}}</textarea>
                 @error('penempatan')
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
              <input class="form-control"  id=""  placeholder="Masukkan Url Youtube" name="video" value="{{old('video', $batunesia->video)}}">
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
              <input type="text" oninput="validateInput(this)" class="form-control" placeholder="Masukkan Stok Dalam Bentuk Angka" name="stok" value="{{old('stok', $batunesia->stok)}}">
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
                  <option value="Motor" @selected(old('armada_minimum')=='Motor' || $batunesia->armada_minimum == 'Motor')>Motor</option>
                  <option value="Kargo Mobil" @selected(old('armada_minimum')=='Kargo Mobil'|| $batunesia->armada_minimum == 'Kargo Mobil')>Kargo Mobil</option>
                  <option value="Mobil Pick Up" @selected(old('armada_minimum')=='Mobil Pick Up' || $batunesia->armada_minimum == 'Mobil Pick Up')>Mobil Pick Up</option>
                  <option value="Truk Engkel" @selected(old('armada_minimum')=='Truk Engkel' || $batunesia->armada_minimum == 'Truk Engkel')>Truk Engkel</option>
                  <option value="Truk Fuso" @selected(old('armada_minimum')=='Truk Fuso' || $batunesia->armada_minimum == 'Truk Fuso')>Truk Fuso</option>
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text" class="css-3017qm rupiah" name="harga_jual_projek_ideally" value="{{old('harga_jual_projek_ideally',  number_format($batunesia->harga_jual_projek_ideally, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_1_unit" value="{{old('harga_b2I_1_unit',  number_format($batunesia->harga_b2I_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_11_unit" value="{{old('harga_b2I_11_unit', number_format($batunesia->harga_b2I_11_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2I_31_unit" value="{{old('harga_b2I_31_unit',  number_format($batunesia->harga_b2I_31_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_1_unit" value="{{old('harga_b2B_1_unit',  number_format($batunesia->harga_b2B_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_11_unit" value="{{old('harga_b2B_11_unit',  number_format($batunesia->harga_b2B_11_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2B_31_unit" value="{{old('harga_b2B_31_unit',  number_format($batunesia->harga_b2B_31_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_1_unit" value="{{old('harga_b2C_1_unit',  number_format($batunesia->harga_b2C_1_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_11_unit" value="{{old('harga_b2C_11_unit',  number_format($batunesia->harga_b2C_11_unit, 0, ',', '.'))}}">
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
              <input data-unify="TextField" placeholder="Masukkan Harga" type="text"  class="css-3017qm rupiah" name="harga_b2C_31_unit" value="{{old('harga_b2C_31_unit', number_format($batunesia->harga_b2C_31_unit, 0, ',', '.'))}}">
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

