<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="scrf-token" content="{{ csrf_token() }}" />
  <title>Ideally | Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container mt-5">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Register</h2>
        <form action="/auth/create" method="POST">
          @csrf
          <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
          </div>
          <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
          </div>
         
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ session('email') }}" required>
          </div>
         
          <div class="mb-3">
            <label for="" class="form-label">No Handphone</label>
            <input type="text" class="form-control" id="telephone_number" name="telephone_number" required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" required>
          </div>
          <div class="mb-3">
              <label class="form-label">Jenis Kelamin</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                  <label class="form-check-label" for="male">
                      Laki-laki
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                  <label class="form-check-label" for="female">
                      Perempuan
                  </label>
              </div>
          </div>

          <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="profesi" name="profesi" required>
          </div>
          <label for="">Alamat Pengiriman:</label>
          <br />
          <div class="mb-3">
            <label class="form-label">Provinsi</label>
            <select class="select2-data-array browser-default" id="select2-provinsi" name="provinsi"></select>
          </div>
          <div class="mb-3">
            <label class="form-label">Kabupaten</label>
            <select class="select2-data-array browser-default" id="select2-kabupaten" name="kabupaten"></select>
          </div>
          <div class="mb-3">
            <label class="form-label">Kecamatan</label>
            <select class="select2-data-array browser-default" id="select2-kecamatan" name="kecamatan"></select>
          </div>
          <div class="mb-3">
            <label class="form-label">Kelurahan</label>
            <select class="select2-data-array browser-default" id="select2-kelurahan" name="kelurahan"></select>
          </div> 
          <div class="mb-3">
            <label for="address" class="form-label">address</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          
          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        var urlProvinsi = "https://ibnux.github.io/data-indonesia/provinsi.json";
        var urlKabupaten = "https://ibnux.github.io/data-indonesia/kabupaten/";
        var urlKecamatan = "https://ibnux.github.io/data-indonesia/kecamatan/";
        var urlKelurahan = "https://ibnux.github.io/data-indonesia/kelurahan/";

        function clearOptions(id) {
            console.log("on clearOptions :" + id);

            //$('#' + id).val(null);
            $('#' + id).empty().trigger('change');
        }

        console.log('Load Provinsi...');
        $.getJSON(urlProvinsi, function (res) {

            res = $.map(res, function (obj) {
                obj.text = obj.nama
                return obj;
            });

            data = [{
                id: "",
                nama: "- Pilih Provinsi -",
                text: "- Pilih Provinsi -"
            }].concat(res);

            //implemen data ke select provinsi
            $("#select2-provinsi").select2({
                dropdownAutoWidth: true,
                width: '100%',
                data: data
            })
        });

        var selectProv = $('#select2-provinsi');
        $(selectProv).change(function () {
            var value = $(selectProv).val();
            clearOptions('select2-kabupaten');

            if (value) {
                console.log("on change selectProv");

                var text = $('#select2-provinsi :selected').text();
                console.log("value = " + value + " / " + "text = " + text);

                console.log('Load Kabupaten di '+text+'...')
                $.getJSON(urlKabupaten + value + ".json", function(res) {

                    res = $.map(res, function (obj) {
                        obj.text = obj.nama
                        return obj;
                    });

                    data = [{
                        id: "",
                        nama: "- Pilih Kabupaten -",
                        text: "- Pilih Kabupaten -"
                    }].concat(res);

                    //implemen data ke select provinsi
                    $("#select2-kabupaten").select2({
                        dropdownAutoWidth: true,
                        width: '100%',
                        data: data
                    })
                })
            }
        });

        var selectKab = $('#select2-kabupaten');
        $(selectKab).change(function () {
            var value = $(selectKab).val();
            clearOptions('select2-kecamatan');

            if (value) {
                console.log("on change selectKab");

                var text = $('#select2-kabupaten :selected').text();
                console.log("value = " + value + " / " + "text = " + text);

                console.log('Load Kecamatan di '+text+'...')
                $.getJSON(urlKecamatan + value + ".json", function(res) {

                    res = $.map(res, function (obj) {
                        obj.text = obj.nama
                        return obj;
                    });

                    data = [{
                        id: "",
                        nama: "- Pilih Kecamatan -",
                        text: "- Pilih Kecamatan -"
                    }].concat(res);

                    //implemen data ke select provinsi
                    $("#select2-kecamatan").select2({
                        dropdownAutoWidth: true,
                        width: '100%',
                        data: data
                    })
                })
            }
        });

        var selectKec = $('#select2-kecamatan');
        $(selectKec).change(function () {
            var value = $(selectKec).val();
            clearOptions('select2-kelurahan');

            if (value) {
                console.log("on change selectKec");

                var text = $('#select2-kecamatan :selected').text();
                console.log("value = " + value + " / " + "text = " + text);

                console.log('Load Kelurahan di '+text+'...')
                $.getJSON(urlKelurahan + value + ".json", function(res) {

                    res = $.map(res, function (obj) {
                        obj.text = obj.nama
                        return obj;
                    });

                    data = [{
                        id: "",
                        nama: "- Pilih Kelurahan -",
                        text: "- Pilih Kelurahan -"
                    }].concat(res);

                    //implemen data ke select provinsi
                    $("#select2-kelurahan").select2({
                        dropdownAutoWidth: true,
                        width: '100%',
                        data: data
                    })
                })
            }
        });

        var selectKel = $('#select2-kelurahan');
        $(selectKel).change(function () {
            var value = $(selectKel).val();

            if (value) {
                console.log("on change selectKel");

                var text = $('#select2-kelurahan :selected').text();
                console.log("value = " + value + " / " + "text = " + text);
            }
        });
    </script>
</html>
