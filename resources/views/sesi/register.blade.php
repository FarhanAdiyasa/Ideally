<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="scrf-token" content="{{ csrf_token() }}" />
  <title>Buat Akun</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/register/style.css">

  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
  <!-- Title -->
  <section id="title" class="w-100 d-flex justify-content-center align-items-center">
      <div class="bg-tosca text-white rounded-5 overlay-title">
          <h1>Daftar Akun</h1>
      </div>
  </section>
  <!-- End Title -->

  <!-- Content -->
  <section id="content">
      <div class="container">
          <div class="bg-white rounded-4" style="padding: 2.5rem; padding-top: 4.5rem;">
              <div class="row g-4">
                  <div class="col-sm-4" id="ilustrasi" style="width: 37%;">
                      <div class="card mb-5 text-white" style="border: none;">
                          <img src="assets/img/REGISTER_SECTION01.png" alt="" class="card-img w-100 rounded-3">
                          <div class="card-img-overlay">
                              <p class="hashtag">#</p>
                              <p class="card-text">Your<br> Landscape<br> Solution</p>
                          </div>
                      </div>
                      <div class="card text-white" style="border: none;">
                          <img src="assets/img/REGISTER_SECTION02.png" alt="" class="card-img w-100 rounded-3">
                          <div class="card-img-overlay">
                              <p class="hashtag semua">#</p>
                              <p class="card-text semua">Semua<br> Bisa<br> Tahu</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-8 ps-4" id="form-field" style="width: 63%;">
                      <h4 class="title">Mari bergabung menjadi bagian dari <span style="color: #06C195;">Ideally Indonesia</span></h4>
                      <!-- Form -->
                      <form action="/auth/create" method="POST">
                        @csrf
                          <table class="table table-borderless mt-4" style="height: 91%;">
                              <tr>
                                  <td class="label"><p>Nama Depan</p></td>
                                  <td><input class="form-control" type="text" name="firstname" placeholder="Nama Depan"
                                          aria-label="input firstname"></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Nama Belakang</p></td>
                                  <td><input class="form-control" type="text" name="lastname" placeholder="Nama Belakang"
                                          aria-label="input lastname"></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Tanggal Lahir</p></td>
                                  <td><input class="form-control" type="date" name="birthdate" placeholder="Tanggal Lahir"
                                          aria-label="input borthdate"></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Jenis Kelamin</p></td>
                                  <td><select class="form-select" aria-label="select gender" name="gender">
                                          <option selected>Jenis Kelamin</option>
                                          <option value="Laki-laki">Laki-laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                      </select></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Pekerjaan</p></td>
                                  <td><select class="form-select" aria-label="select gender" name="profesi">
                                          <option selected>Pekerjaan</option>
                                          <option value="Mahasiswa">Mahasiswa</option>
                                          <option value="Pekerja">Pekerja</option>
                                      </select></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Alamat Pengiriman</p></td>
                                  <td>
                                    <select class="form-select" id="select2-provinsi" name="provinsi"></select>
                                  </td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td><select class="form-select" id="select2-kabupaten" name="kabupaten"></select></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td><select class="form-select" id="select2-kecamatan" name="kecamatan"></select></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td><select class="form-select" id="select2-kelurahan" name="kelurahan"></select></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td><input class="form-control" type="text" id="select2-kelurahan" placeholder="Alamat Lengkap" name="address"
                                          aria-label="input lastname"></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>E-mail</p></td>
                                  <td><input class="form-control" type="email" value="{{ session('email') }}" name="email" placeholder="E-mail"
                                          aria-label="input email"></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Nomor Ponsel</p></td>
                                  <td><input class="form-control" type="text" placeholder="Nomor Ponsel" name="telephone_number"
                                          aria-label="input phone number"></td>
                              </tr>
                              <tr>
                                  <td class="label"><p>Kata Sandi</p></td>
                                  <td><input class="form-control" type="password" placeholder="Kata Sandi" name="password"
                                          aria-label="input password"></td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td><input class="form-control" type="password" placeholder="Kata Sandi Ulang"
                                          aria-label="input password"></td>
                              </tr>
                              <tr>
                                  <td class="label label-profile"><p>Foto Profil</p></td>
                                  <td class="d-flex">
                                      <div class="img-container rounded-3">
                                      <img src="" alt=""></div>
                                      <div class="controls w-50 ps-3">
                                          <button class="btn rounded-5 text-white w-100">Unggah</button>
                                          <button class="btn rounded-5 text-white w-100">Ganti</button>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td></td>
                                  <td class="d-flex">
                                      <button type="submit" class="btn btn-daftar rounded-5 text-white" style="width: 120px;">Daftar Akun</button>
                                  </td>
                              </tr>
                          </table>
                      </form>
                  </div>
              </div>
              <div class="d-flex justify-content-center align-items-center pt-4">
                  <a href="" class="move-link">Sudah memiliki akun? <span class="link">Klik disini untuk masuk!</span></a>
              </div>
          </div>
      </div>
  </section>
  <!-- End Content -->
  <script>
    var urlProvinsi = "https://ibnux.github.io/data-indonesia/provinsi.json";
    var urlKabupaten = "https://ibnux.github.io/data-indonesia/kabupaten/";
    var urlKecamatan = "https://ibnux.github.io/data-indonesia/kecamatan/";
    var urlKelurahan = "https://ibnux.github.io/data-indonesia/kelurahan/";
    var selectProvinsi = document.getElementById('select2-provinsi');
    var selectKabupaten = document.getElementById('select2-kabupaten');
    var selectKecamatan = document.getElementById('select2-kecamatan');
    var selectKelurahan = document.getElementById('select2-kelurahan');
  
    // Function to fetch data and populate the dropdown
    function fetchDataAndPopulate(url, targetSelect) {
      fetch(url)
        .then(response => response.json())
        .then(data => {
          // Clear existing options
          targetSelect.innerHTML = '';

          // Add default option
          var defaultOption = document.createElement('option');
          defaultOption.value = '';
          defaultOption.text = 'Pilih...';
          targetSelect.add(defaultOption);

          // Iterate through the data and create option elements
          data.forEach(item => {
            var option = document.createElement('option');
            option.value = item.id;
            option.text = item.nama;
            targetSelect.add(option);
          });
        })
        .catch(error => console.error('Error fetching data:', error));
    }

    // Fetch and populate provinsi
    fetchDataAndPopulate(urlProvinsi, selectProvinsi);

    // Event listener for changes in provinsi
    selectProvinsi.addEventListener('change', function () {
      // Clear kabupaten, kecamatan, dan kelurahan
      selectKabupaten.innerHTML = '';
      selectKecamatan.innerHTML = '';
      selectKelurahan.innerHTML = '';

      var selectedProvinsiId = this.value;
      if (selectedProvinsiId !== '') {
        var kabupatenUrl = urlKabupaten + selectedProvinsiId + ".json";
        fetchDataAndPopulate(kabupatenUrl, selectKabupaten);
      }
    });

    // Event listener for changes in kabupaten
    selectKabupaten.addEventListener('change', function () {
      // Clear kecamatan dan kelurahan
      selectKecamatan.innerHTML = '';
      selectKelurahan.innerHTML = '';

      var selectedKabupatenId = this.value;
      if (selectedKabupatenId !== '') {
        var kecamatanUrl = urlKecamatan + selectedKabupatenId + ".json";
        fetchDataAndPopulate(kecamatanUrl, selectKecamatan);
      }
    });

    // Event listener for changes in kecamatan
    selectKecamatan.addEventListener('change', function () {
      // Clear kelurahan
      selectKelurahan.innerHTML = '';

      var selectedKecamatanId = this.value;
      if (selectedKecamatanId !== '') {
        var kelurahanUrl = urlKelurahan + selectedKecamatanId + ".json";
        fetchDataAndPopulate(kelurahanUrl, selectKelurahan);
      }
    });
  </script>
</body>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
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

                //var text = $('#select2-provinsi :selected').text();
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

                // var text = $('#select2-kelurahan :selected').text();
                console.log("value = " + value + " / " + "text = " + text);
            }
        });
    </script> --}}
</html>
