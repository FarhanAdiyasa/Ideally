<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6990JVL0LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6990JVL0LN');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Ideally</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('/lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('/lte/plugins/dropzone/min/dropzone.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/lte/dist/css/adminlte.min.css')}} ">
  <link rel="stylesheet" href="{{asset('/css/style.css')}} ">

  <!-- Custom Style -->
  <link rel="stylesheet" href="{{asset('/lte/dist/css/admin-style.css')}} ">

  <!-- Additional Style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">


@yield('head-src')


    <!-- CDN Bootstrap CSS -->

  {{-- Dropzone --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.js"></script>
  
  
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed sidebar-open" id="body">
<div class="wrapper">
  <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('/lte/dist/img/logo-ideally.png')}}" alt="Logo Ideally" height="60" width="200">
    </div>

  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav" style="padding-left: 20px;">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto" style="padding-right: 20px;">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item logout">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-solid fa-right-from-bracket"></i>
          </a>
        </li>
      </ul>
    </nav>
  <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4 sidebar-fixed">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{asset('/lte/dist/img/logo-ideally.png')}}" alt="Logo Ideally" style="opacity: .8" width="50%">
        <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset(auth()->user()->profile_picture)}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <p class="d-block">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('dashboard') }}" class="nav-link @if($active == 'Dashboard') active @else  @endif">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                  <i class="right fas "></i>
                </p>
              </a>
            </li>

            <li class="nav-header">Produk</li>
            <li class="nav-item">
              <a href="{{ route('dedikasiFloras') }}" class="nav-link @if($active == 'DedikasiFlora') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-leaf"></i>
                <p>
                  Dedikasi Flora
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('batunesias') }}" class="nav-link @if($active == 'batunesia') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-box-open"></i>
                <p>
                  Batunesia
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('konkuritos') }}" class="nav-link @if($active == 'konkurito') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-box-open "></i>
                <p>
                  Konkurito
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('everlasThings') }}" class="nav-link @if($active == 'everlas') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-chair "></i>
                <p>
                  Everlas Thing
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('daftar-produk') }}" class="nav-link @if($active == 'agrigard') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-box-open"></i>
                <p>
                  Agrigard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('shineages') }}" class="nav-link @if($active == 'shineage') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-box-open"></i>
                <p>
                  Shineage
                </p>
              </a>
            </li>
            <li class="nav-header">Edukasi</li>
            <li class="nav-item">
              <a href="{{ route('artikels') }}" class="nav-link @if($active == 'artikel') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-newspaper"></i>
                <p>
                  Artikel
                </p>
              </a>
            </li>
            <li class="nav-header">Promo</li>
            <li class="nav-item">
              <a href="{{ route('daftar-promo') }}" class="nav-link @if($active == 'promo') active @else  @endif">
                <i class="nav-icon fa fa-solid fa-percent"></i>
                <p>
                  Promo
                </p>
              </a>
            </li>
            {{-- <li class="nav-header">User</li>
            <li class="nav-item">
              <a href="{{ route('daftar-user') }}" class="nav-link">
                <i class="nav-icon fa fa-solid fa-users"></i>
                <p>
                  User
                </p>
              </a>
            </li> --}}
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

  
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js')}}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
<script src="{{ asset('js/jquery.mask.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{ asset('lte/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ asset('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('lte/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- ChartJS -->
  <script src="{{ asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{ asset('lte/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{ asset('lte/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('lte/dist/js/demo.js')}}"></script> -->

{{-- <!-- Additional JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
    $('.my-colorpicker3').colorpicker()

    $('.my-colorpicker3').on('colorpickerChange', function(event) {
      $('.my-colorpicker3 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })


 
</script>
<script src="{{ asset('js/admin_side.js')}}"></script>
<script>
 
  document.addEventListener('DOMContentLoaded', function() {
    var logoutButton = document.getElementById('logoutButton');
    if(logoutButton){
      logoutButton.addEventListener('click', function(event) {
      event.preventDefault();

      $('#logoutModal').modal('show');
    });
    }
   
  });
</script>

@yield('scripts_all')

</body>
</html>
