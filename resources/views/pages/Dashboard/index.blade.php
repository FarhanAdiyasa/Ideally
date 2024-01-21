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
                              <h3>150</h3>

                              <p>New Orders</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>53<sup style="font-size: 20px">%</sup></h3>

                              <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>44</h3>

                              <p>User Registrations</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                      <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                          <!-- Custom tabs (Charts with tabs)-->
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Sales
                              </h3>
                              <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Line</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                  </li>
                                </ul>
                              </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                              <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                                  <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                  <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                              </div>
                            </div><!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                          <!-- Map card -->
                          <div class="card bg-gradient-primary">
                            <div class="card-header border-0">
                              <h3 class="card-title">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                Visitors
                              </h3>
                              <!-- card tools -->
                              <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                              </div>
                              <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                              
                            </div>
                            <!-- /.card-body-->
                            <div class="card-footer bg-transparent">
                              <div class="row">
                                <div class="col-4 text-center">
                              
                              </div>
                              <!-- /.row -->
                            </div>
                          </div>
                          <!-- /.card -->
                          <!-- /.card -->
                        </section>
                        <!-- right col -->
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

<script>
  // Ambil referensi ke elemen canvas
  var ctx = document.getElementById('revenue-chart-canvas').getContext('2d');
  
  // Data untuk line chart
  var data = {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'], // Label sumbu x
      datasets: [{
          label: 'Monthly Revenue',
          borderColor: 'rgb(75, 192, 192)',
          data: [1000, 1200, 800, 1500, 2000], // Data sumbu y
          fill: false
      }]
  };
  
  // Konfigurasi line chart
  var options = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          x: {
              type: 'category', // Jenis sumbu x
              position: 'bottom',
              grid: {
                  display: false
              }
          },
          y: {
              position: 'left',
              grid: {
                  display: true
              }
          }
      }
  };
  
  // Inisialisasi line chart
  var revenueChart = new Chart(ctx, {
      type: 'line',
      data: data,
      options: options
  });
  </script>
  
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