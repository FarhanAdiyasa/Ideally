@extends('layouts/admin')
@section('head-src')
<link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
@endsection
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
        <h1>Edit Artikel</h1>
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
  <form method="post" action="{{ route('artikels.update', $artikel->id_artikel)}} " enctype="multipart/form-data" id="agrForm">
    @method("PUT")
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
            <label>Judul Artikel <span class="wajib">Wajib</span></label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input id="default" type="text" class="form-control" placeholder="Placeholder text" name="judul_artikel" id="judul_artikel" value="{{old('judul_artikel', $artikel->judul_artikel)}}">
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
            <label>Gambar Artikel <span class="wajib">Wajib</span></label>
            <p>Hanya file dengan format JPEG, PNG, dan JPG yang diterima. Ukuran maksimum file adalah 2 MB. Input gambar akan dihapus jika ada input yang tidak valid dalam formulir ini.</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <label class="col-sm-9 col-form-label">Klik / Letakkan Gambar Ke : </label>
              <div class="col-sm-9">
                <input type="file" class="form-control" name="gambar_artikel" @error('gambar_artikel') is-invalid @enderror id="selectimage">
              </div>
              @error('gambar_artikel')
              <small class="text-danger">{{ $message }}</small>
              @enderror
              <img id="preview" src="{{ asset('storage/' . $artikel->gambar_artikel) }}"  alt="{{$artikel->keterangan_gambar_artikel}}" class="mt-3" height="300" width="470"/>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Keterangan Gambar</label>
              <input type="text" class="form-control" placeholder="Masukkan keterangan gambar" name="keterangan_gambar_artikel" value="{{old('keterangan_gambar_artikel', $artikel->keterangan_gambar_artikel)}}">
                 @error('keterangan_gambar_artikel')
              <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label>Kata Kunci Artikel <span class="ket-field">Digunakan untuk pencarian artikel</span></label>
            <div class="select2-purple">
                <input type="text" class="form-control"  placeholder="Masukkan kata kunci. Contoh: taman, pupuk, teknologi." name="keywords" value="{{old('keywords', $artikel->keywords)}}">
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
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            @foreach ($categories as $category)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="{{ $category->nama_kategori_artikel }}" name="kategori_artikel[]" value="{{ $category->id_kategori_artikel }}"
                    @if ((is_array(old('kategori_artikel')) && in_array($category->id_kategori_artikel, old('kategori_artikel'))) ||
                        (is_array($artikel->kategori_artikel->pluck('id_kategori_artikel')->toArray()) && in_array($category->id_kategori_artikel, $artikel->kategori_artikel->pluck('id_kategori_artikel')->toArray())))
                        checked
                    @endif>
                <label class="form-check-label" for="{{ $category->nama_kategori_artikel }}">{{ $category->nama_kategori_artikel }}</label>
            </div>
            @endforeach           
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
</div>  
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Deskripsi Artikel</h3>

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
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label>Deskripsi Artikel <span class="wajib">Wajib</span></label>
                    <p>Pastikan diisi dengan beberapa <strong>paragraf dari artikel</strong> atau <strong>cuplikan informasi penting</strong> yang dapat menarik perhatian pembaca. Informasi ini akan ditampilkan saat pelanggan melihat pratinjau artikel.</p>
                  </div>
                </div>
                <div class="col-7">
                  <textarea class="form-control" id="" rows="5" placeholder="Isi Deskripsi Artikel Disini" name="deskripsi_artikel">{{old('deskripsi_artikel', $artikel->deskripsi_artikel)}}</textarea>
                  @error('deskripsi_artikel')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Isi Artikel:</label>
                    <textarea name="isi_artikel" id="isi_artikel" cols="30" rows="10">{!! $artikel->isi_artikel !!}</textarea>
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
      <h3 class="card-title">Penulis Artikel</h3>

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
                          @if (old('author') == 'sendiri' || $artikel->penulis_artikel == auth()->user()->firstname.' '.auth()->user()->lastname) checked @endif>
                    <label class="form-check-label" for="author_sendiri">Artikel Saya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="author_lain" name="author" value="lain"
                          @if (old('author') == 'lain' ||  $artikel->penulis_artikel != auth()->user()->firstname.' '.auth()->user()->lastname) checked @endif>
                    <label class="form-check-label" for="author_lain">Bukan Artikel Saya</label>
                </div>
                @error('author')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>        
            </div>
          </div>
          <div class="row" id="cekAuthor">
            {{-- <div class="col-12 col-sm-6">
              <div class="form-group">
                <label> Gambar</label>
                  <textarea type="text" class="form-control" placeholder="Placeholder text" name="keterangan_gambar_artikel" rows="5" >{{old('keterangan_gambar_artikel')}}</textarea>
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
            </div> --}}
            <!-- /.col -->
          </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Sumber Artikel</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <p>Isi dengan sumber artikel. Gunakkan (+) untuk menambahkan field, dan (-) untuk mengurangi.</p>
          @foreach ($sumbers as $sumber)
            <div id="inputFormRow">
              <div class="input-group mb-3">
                  <input type="text" name="sumber[]" class="form-control m-input" placeholder="Enter sourcec" autocomplete="off" value="{{$sumber->sumber_artikel}}">
                  <div class="input-group-append">
                      <button id="removeRow" type="button" class="btn btn-danger">-</button>
                  </div>
              </div>
          </div>

            @endforeach
         
            <div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info">+</button>
        </div>
    </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.row -->
</div>  
<input type="text" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" style="display:none;">
<div class="m-3 d-flex justify-content-end">
  <button class="btn btn-dark mx-5" type="reset" onclick="refreshPage();">Batal</button>
  <button class="btn btn-dark mx-3" type="button" onclick="submitForm('1')">Simpan Dan Terbitkan</button>
  <button class="btn btn-success mx-3" type="button" onclick="submitForm('0')">Simpan</button>
</div>
</form>
</section>
@endsection

@section('scripts_all')
<script src="{{asset("lte/plugins/summernote/summernote-bs4.min.js")}}"></script>
<script>
  function refreshPage() {
        document.getElementById('agrForm').reset();  // Reset form, jika diperlukan
        location.reload();  // Reload halaman
    }
    $('#isi_artikel').summernote({
        placeholder: 'description...',
        tabsize:2,
        height:300
    });
    
</script>
<script>
  let selectImage = document.getElementById('selectimage');
  selectImage.onchange = evt => {
      preview = document.getElementById('preview');
      preview.style.display = 'block';
      const [file] = selectImage.files
      if (file) {
          preview.src = URL.createObjectURL(file)
      }
    }
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
        var radioButtons = document.getElementsByName('author');

        radioButtons.forEach(function (radioButton) {
            radioButton.addEventListener('change', function () {
              Ctipe_potongan(this.value);
            });
        });
        var checkedRadioButton = document.querySelector('input[name="author"]:checked');
        Ctipe_potongan(checkedRadioButton.value);
    });

        const Ctipe_potongan = (value)=>{
            var container = document.getElementById('cekAuthor');
                if (value == "lain") {
                  
                    container.innerHTML = `
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Nama Penulis Artikel</label>
                          <div class="select2-purple">
                              <input type="text" class="form-control" placeholder="Placeholder text" name="penulis_artikel" value="{{ old('penulis_artikel', $artikel->penulis_artikel) }}">
                              @error('penulis_artikel')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Profesi Penulis Artikel</label>
                          <div class="select2-purple">
                              <input type="text" class="form-control" placeholder="Placeholder text" name="profesi_penulis_artikel" value="{{ old('profesi_penulis_artikel', $artikel->profesi_penulis_artikel) }}">
                              @error('profesi_penulis_artikel')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Deskripsi Singkat Penulis Artikel</label>
                          <textarea type="text" class="form-control" placeholder="Placeholder text" name="deskripsi_singkat_penulis_artikel" rows="5">{{ old('deskripsi_singkat_penulis_artikel', $artikel->deskripsi_singkat_penulis_artikel) }}</textarea>
                          @error('deskripsi_singkat_penulis_artikel')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>`;
                } else {
                    container.innerHTML = "";
                }

        }
</script>
<script type="text/javascript">
  // add row
  $("#addRow").click(function () {
      var html = '';
      html += '<div id="inputFormRow">';
      html += '<div class="input-group mb-3">';
      html += '<input type="text" name="sumber[]" class="form-control m-input" placeholder="Masukkan sumber artikel" autocomplete="off">';
      html += '<div class="input-group-append">';
      html += '<button id="removeRow" type="button" class="btn btn-danger">-</button>';
      html += '</div>';
      html += '</div>';

      $('#newRow').append(html);
  });

  // remove row
  $(document).on('click', '#removeRow', function () {
      $(this).closest('#inputFormRow').remove();
  });
</script>
@endsection