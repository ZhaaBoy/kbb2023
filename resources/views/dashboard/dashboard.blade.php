@extends('dashboard.dasmin')
@section('content')
    @include('sweetalert::alert')

    <!-- page content -->
    <div class="right_col" role="main">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn bg-gradient-primary shadow-sm text-white"><i
                class="fas fa-download fa-sm text-white"></i> Generate Report</a>
    </div>
    <!-- Content Row -->

    <div class="tile_count">
        <div class="col-md-2 col-sm-4  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i>Anggota</span>
          <div class="count">{{$anggota}}</div>
          <span class="count_bottom"><i class="green">4% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
          <span class="count_top"><i class="fa fa-clock-o"></i>Acara</span>
          <div class="count">{{$acara}}</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
          <span class="count_top"><i class="fa fa-clock-o"></i>Jadwal Sharing</span>
          <div class="count">{{$sharing}}</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Artikel</span>
          <div class="count">{{$artikel}}</div>
          <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Admin</span>
          <div class="count">{{$admin}}</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Kategori</span>
          <div class="count">{{$artikel}}</div>
          <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                <div class="demo-container" style="height:280px">
                  <div id="chart_plot_02" class="demo-placeholder"></div>
                </div>
                <div class="tiles">
                  <div class="col-md-4 tile">

                    <span class="sparkline11 graph" style="height: 160px;">
                         <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                    </span>
                  </div>
                  <div class="col-md-4 tile">

                    <span class="sparkline22 graph" style="height: 160px;">
                          <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                    </span>
                  </div>
                  <div class="col-md-4 tile">

                    <span class="sparkline11 graph" style="height: 160px;">
                           <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                    </span>
                  </div>
                </div>

              </div>



            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

@endsection
