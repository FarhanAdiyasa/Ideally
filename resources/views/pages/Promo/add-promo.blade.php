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
        <h1>Tambah Promo</h1>
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
  <form method="post" action="{{ route('daftar-promo.save')}} " enctype="multipart/form-data" id="proForm">
    @csrf
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Informasi Promo</h3>

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
            <label>Jenis Promo</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="jenis_promo_brand" name="jenis_promo" value="Brand" 
                       @if (old('jenis_promo') == 'Brand' || !old('jenis_promo')) checked @endif>
                <label class="form-check-label" for="jenis_promo_brand">Brand</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="jenis_promo_produk" name="jenis_promo" value="Produk"
                       @if (old('jenis_promo') == 'Produk') checked @endif>
                <label class="form-check-label" for="jenis_promo_produk">Produk</label>
            </div>
            @error('jenis_promo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>        
          <!-- /.form-group -->
        </div>
        <div class="col-md-5" id="product-select">


        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Kategori Produk</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="b21" name="target_promo[]" value="b21" @if (is_array(old('target_promo')) && in_array('b21', old('target_promo'))) checked @endif>
                <label class="form-check-label" for="b21">Business To Individu</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="b2c" name="target_promo[]" value="b2c" @if (is_array(old('target_promo')) && in_array('b2c', old('target_promo'))) checked @endif>
                <label class="form-check-label" for="b2c">Business To Customer</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="b2b" name="target_promo[]" value="b2b" @if (is_array(old('target_promo')) && in_array('b2b', old('target_promo'))) checked @endif>
                <label class="form-check-label" for="b2b">Business To Business</label>
            </div>  
            @error('target_promo[]')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>        
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Nama Promo</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Contoh: Diskon 17 Agustus" name="nama_promo" value="{{old('nama_promo')}}"/>
               @error('nama_promo')
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
            <div class="form-group row">
              <label for="tanggal_mulai" class="col-md-4 col-form-label text-md-right">{{ __('Mulai Tanggal') }}</label>

              <div class="col-md-6">
                  <input id="tanggal_mulai" type="datetime-local" class="form-control @error('tanggal_mulai') is-invalid @enderror" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}" required autocomplete="tanggal_mulai" autofocus>

                  @error('tanggal_mulai')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          </div>
          <!-- /.form-group -->
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <div class="form-group row">
              <label for="tanggal_selesai" class="col-md-4 col-form-label text-md-right">{{ __('Berakhir Tanggal') }}</label>

              <div class="col-md-6">
                  <input id="tanggal_selesai" type="datetime-local" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" value="{{ old('tanggal_selesai') }}" required autocomplete="tanggal_selesai">

                  @error('tanggal_selesai')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
          </div>
          <!-- /.form-group -->
        </div>
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
            <label>Tipe Promo</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group" id="pilih-tipe">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="cashback" name="tipe_promo" value="cashback" checked>
                <label class="form-check-label" for="cashback">Cashback</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="diskon" name="tipe_promo" value="diskon">
                <label class="form-check-label" for="diskon">Diskon</label>
            </div>
            @error('tipe_promo')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Tipe Potongan</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group" id="pilih-jenis">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="nominal" name="tipe_potongan" value="nominal" 
                       @if (old('tipe_potongan') == 'nominal' || !old('tipe_potongan')) checked @endif>
                <label class="form-check-label" for="nominal">Nominal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="persentase" name="tipe_potongan" value="persentase"
                       @if (old('tipe_potongan') == 'persentase') checked @endif>
                <label class="form-check-label" for="persentase">Persentase</label>
            </div>
            @error('tipe_potongan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row" id="persenan"></div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label id="desk-promo">Nominal Promo</label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="numeric"  class="css-3017qm rupiah" name="nominal_promo" value="{{old('nominal_promo')}}">
            </div>
               @error('nominal_promo')
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
            <label>Minimum Pembelian</label>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="form-group">
            <div class="harga-input">
              <div class="rp">Rp</div>
              <input data-unify="TextField" placeholder="Masukkan Harga" type="numeric"  class="css-3017qm rupiah" name="minimum_pembelian" value="{{old('minimum_pembelian')}}">
            </div>
            
               @error('minimum_pembelian')
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
            <label>Kuota Promo</label>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, odit ab eum enim illo minima deleniti quae ducimus repudiandae sit!</p>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="form-group">
              <input class="form-control"  id=""  type="number" placeholder="Masukkan Kuota Dalam Bentuk Angka" name="kuota" value="{{old('kuota')}}"/>
                 @error('kuota')
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
      <h3 class="card-title" id="brandOrproductT">Pilih Brand</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row" id="brandOrproduct">
          <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="nurseri" name="jenis_brand[]" value="nurseri" @if (old('nurseri'))checked @endif>
                <label class="form-check-label" for="nurseri">Nurseri</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="batunesia" name="jenis_brand[]" value="batunesia" @if (old('batunesia'))checked @endif>
                <label class="form-check-label" for="batunesia">Batunesia</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="konkurito" name="jenis_brand[]" value="konkurito" @if (old('konkurito'))checked @endif>
                <label class="form-check-label" for="konkurito">Konkurito</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="everlas_thing" name="jenis_brand[]" value="everlas_thing" @if (old('everlas_thing'))checked @endif>
                <label class="form-check-label" for="everlas_thing">Everlas Thing</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="shineage" name="jenis_brand[]" value="shineage" @if (old('shineage'))checked @endif>
                <label class="form-check-label" for="shineage">Shineage</label>
            </div>  
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="agrigard" name="jenis_brand[]" value="agrigard" @if (old('agrigard'))checked @endif>
                <label class="form-check-label" for="agrigard">Agrigard</label>
            </div>  
            @error('jenis_brand')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.row -->
</div>  
<input type="text" name="tanggal_publikasi" id="tanggal_publikasi" class="form-control" style="display:none;">
<div class="m-3 d-flex justify-content-end">
  <button class="btn btn-dark mx-5" type="reset">Cancel</button>
  <button class="btn btn-dark mx-3" type="button" onclick="submitPromo('1')">Save And Post</button>
  <button class="btn btn-success mx-3" type="button" onclick="submitPromo('0')">Save</button>
</div>
    
</form>
</section>
@endsection
@section('scripts_all')

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
      // Tipe Potongan
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
              '<input data-unify="TextField" placeholder="Masukkan Persentase" type="numeric"  class="css-3017qm rupiah" name="persentase_promo" value="{{old("persentase_promo")}}">' +
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

      // Rupiah
    $(document).ready(function () {
        $(".rupiah").mask("000.000.000", {
            reverse: true,
        });
    });

      // Tanggal mulai hari ini
    document.addEventListener('DOMContentLoaded', function () {
            var today = new Date();
            var formattedToday = today.toISOString().slice(0, 16); 
            document.getElementById('tanggal_mulai').min = formattedToday;
            document.getElementById('tanggal_selesai').min = formattedToday;
    });
    

   // Jenis Promo
document.addEventListener('DOMContentLoaded', function () {
  var radioButtons = document.getElementsByName('jenis_promo');
  radioButtons.forEach(function (radioButton) {
      radioButton.addEventListener('change', function () {
        Cjenis_promo(this.value)
      });
  });
  var checkedRadioButton = document.querySelector('input[name="jenis_promo"]:checked');
  Cjenis_promo(checkedRadioButton.value);
});

    const Cjenis_promo = (value)=>{
      
      var container = document.getElementById('brandOrproduct'); 
      var containerP = document.getElementById('product-select'); 
      var title = document.getElementById('brandOrproductT'); 
            if (value == "Brand") {
                  container.innerHTML = '<div class="form-group">' +
                      '<div class="form-check form-check-inline">' +
                      '<input class="form-check-input" type="checkbox" id="nurseri" name="jenis_brand[]" value="nurseri" @if (old('nurseri'))checked @endif>' +
                      '<label class="form-check-label" for="nurseri">Nurseri</label>' +
                      '</div>' +
                      '<div class="form-check form-check-inline">' +
                      '<input class="form-check-input" type="checkbox" id="batunesia" name="jenis_brand[]" value="batunesia" @if (old('batunesia'))checked @endif>' +
                      '<label class="form-check-label" for="batunesia">Batunesia</label>' +
                      '</div>' +
                      '<div class="form-check form-check-inline">' +
                      '<input class="form-check-input" type="checkbox" id="konkurito" name="jenis_brand[]" value="konkurito" @if (old('konkurito'))checked @endif>' +
                      '<label class="form-check-label" for="konkurito">Konkurito</label>' +
                      '</div>' +
                      '<div class="form-check form-check-inline">' +
                      '<input class="form-check-input" type="checkbox" id="everlas_thing" name="jenis_brand[]" value="everlas_thing" @if (old('everlas_thing'))checked @endif>' +
                      '<label class="form-check-label" for="everlas_thing">Everlas Thing</label>' +
                      '</div>' +
                      '<div class="form-check form-check-inline">' +
                      '<input class="form-check-input" type="checkbox" id="shineage" name="jenis_brand[]" value="shineage" @if (old('shineage'))checked @endif>' +
                      '<label class="form-check-label" for="shineage">Shineage</label>' +
                      '</div>' +
                      '<div class="form-check form-check-inline">' +
                      '<input class="form-check-input" type="checkbox" id="agrigard" name="jenis_brand[]" value="agrigard" @if (old('agrigard'))checked @endif>' +
                      '<label class="form-check-label" for="agrigard">Agrigard</label>' +
                      '</div>' +
                      '@error('jenis_brand')' +
                      '<div class="text-danger">{{ $message }}</div>' +
                      '@enderror' +
                      '</div>';
                      title.innerHTML = "Pilih Brand";
                      containerP.innerHTML ="";
              }else if (value == "Produk"){
                containerP.innerHTML = `<div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Pilih Brand!</label>
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group">
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="jenis_produk_agrigard" name="jenis_produk" value="agrigard" 
                                        @if (old('jenis_produk') == 'agrigard') checked @endif>
                                  <label class="form-check-label" for="jenis_produk_agrigard">agrigard</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="jenis_produk_shineage" name="jenis_produk" value="shineage"
                                        @if (old('jenis_produk') == 'shineage' || !old('jenis_produk')) checked @endif>
                                  <label class="form-check-label" for="jenis_produk_shineage">shineage</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="jenis_produk_batunesia" name="jenis_produk" value="batunesia"
                                        @if (old('jenis_produk') == 'batunesia') checked @endif>
                                  <label class="form-check-label" for="jenis_produk_batunesia">batunesia</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="jenis_produk_konkurito" name="jenis_produk" value="konkurito"
                                        @if (old('jenis_produk') == 'konkurito') checked @endif>
                                  <label class="form-check-label" for="jenis_produk_konkurito">konkurito</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="jenis_produk_everlasthing" name="jenis_produk" value="everlasthing"
                                        @if (old('jenis_produk') == 'everlasthing') checked @endif>
                                  <label class="form-check-label" for="jenis_produk_everlasthing">everlasthing</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="jenis_produk_nurseri" name="jenis_produk" value="nurseri"
                                        @if (old('jenis_produk') == 'nurseri') checked @endif>
                                  <label class="form-check-label" for="jenis_produk_nurseri">nurseri</label>
                              </div>
                              @error('jenis_produk')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                          </div>

                  </div>`;
                  loadProduk();
                  container.innerHTML = "";
                  title.innerHTML = "Pilih Product";
              }
    }



const loadProduk =  ()=> {
  console.log("value");
  var radioButtons = document.getElementsByName('jenis_produk');
  var container = document.getElementById('brandOrproduct'); 
  var title = document.getElementById('brandOrproductT'); 

  radioButtons.forEach(function (radioButton) {
      radioButton.addEventListener('change', function () {
        showBrand(this.value)
      });
  });
  var checkedRadioButton = document.querySelector('input[name="jenis_produk"]:checked');
  showBrand(checkedRadioButton.value)
};
function showBrand(brand) {
    $.get("{{ url('/tambah-promo/') }}/" + brand, {}, function(data, status) {
        $("#brandOrproduct").html(data);
    })
    .fail(function(xhr, status, error) {
        console.error("Error: " + error);
    });
}
function submitPromo(action) {
    var selectedIds = [];
    var table = $('#products-ss').DataTable();
    table.$('input[type="checkbox"]:checked').each(function() {
        var productId = $(this).val();
        selectedIds.push(productId);
    });

    $('#proForm').append('<input type="hidden" name="selected_ids" value="' + selectedIds.join(',') + '">');
    $("#tanggal_publikasi").val(action == "1" ? "true" : "false");

    $("#proForm").submit();
}

    </script>
    
@endsection

