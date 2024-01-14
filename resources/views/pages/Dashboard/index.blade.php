@extends('layouts/admin')
@section('content')
    <div id="app">
        <div class="main-wrapper">
            <div class="container">
                    <div class="container-fluid" style="padding-top:20px">
                      <div class="row">
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>{{$orderHari}}</h3>

                              <p>Pesanan Hari Ini</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>{{$jmlArt}}</h3>

                              <p>Jumlah Artikel</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>{{$userCreated}}</h3>

                              <p>Total Pengguna</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-person-add"></i>
                            </div>
                            
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                          <!-- Custom tabs (Charts with tabs)-->
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Penjualan
                              </h3>
                              <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Bulan Ini</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Tahun Ini</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#rowes-chart" data-toggle="tab">5 Tahun Terakhir</a>
                                  </li>
                                </ul>
                              </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                              <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
                                  {!! $chart->container() !!}
                                </div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; ">
                                  {!! $chart2->container() !!}
                                </div>
                                <div class="chart tab-pane" id="rowes-chart" style="position: relative; ">
                                  {!! $chart3->container() !!}
                                </div>
                              </div>
                            </div><!-- /.card-body -->
                          </div>
                          
                            <div class="modal" id="harianModal" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Pilih Bulan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form-group">
                                          <input type="datepicker" class="form-control" name="datepicker" id="datepicker" />
                                      </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                          <button type="button" class="btn btn-primary">Simpan</button>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </section>
  
                      </div>
                    </div><!-- /.container-fluid -->
              </div>
        </div>
    </div>

    

<!-- Logout Warning Modal -->
<div class="modal modal-danger fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="Logout" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content" id="logout-modal">
  <div class="modal-header">
    <h5 class="modal-title">Konfirmasi Logout</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <p>Apakah kamu yakin ingin keluar?</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    <button type="button" class="btn btn-danger">Logout</button>
  </div>
</div>
</div>
</div>
<!-- End of Logout Warning Modal -->


@endsection
@section('scripts_all')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
<script src="{{ $chart2->cdn() }}"></script>

{{ $chart2->script() }}
<script src="{{ $chart3->cdn() }}"></script>

{{ $chart3->script() }}
<script>
  
  // Ambil referensi ke elemen canvas
  var ctx = document.getElementById('sales-chart-canvas').getContext('2d');
  
  // Data untuk donut chart
  var data = {
      labels: ['Product A', 'Product B', 'Product C'],
      datasets: [{
          data: [30, 45, 25], // Data persentase untuk setiap bagian
          backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)']
      }]
  };
  
  // Konfigurasi donut chart
  var options = {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
          legend: {
              position: 'bottom'
          }
      }
  };
  
  // Inisialisasi donut chart
  var salesChart = new Chart(ctx, {
      type: 'doughnut',
      data: data,
      options: options
  });
  </script>
  @endsection