<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{asset('assets/images/HIMTI.png')}}" type="image/ico" />

    <title>Admin Himti</title>

    <!-- Bootstrap -->
    <link href="{{asset ('dasmin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset ('dasmin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset ('dasmin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset ('dasmin/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset ('dasmin/vendors/bootstrap-progressbar/css/bootstrap-progressbar.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset ('dasmin/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset ('dasmin/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset ('dasmin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/dashboard" class="site_title"> <span>Admin Himti</span></a>
                </div>

                <div class="clearfix">
                </div>
                <div class="input-group">

                </div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset('assets/images/HIMTI.png')}}" alt="..." class="img-circle profile_img" style="">
                    </div>
                    <div class="profile_info">

                <span> <b>Welcome,</b> </span>
                @auth
                    <h2>{{ Auth()->user()->name }}</h2> @endauth
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            @include('dashboard.layout.sidebar')
          </div>
        </div>

        @include('dashboard.layout.navbar')
            <div class="">
                <div class="title_right">



        <!-- page content -->

        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_content">

                  @yield('content')
                </div>


            </div>
                </div>
              </div>
            </div>

                <!-- /page content -->

                <!-- footer content -->
                <!-- /footer content -->
            </div>
            @include('dashboard.layout.footer')
</div>

    <!-- jQuery -->
    <script src="{{asset ('dasmin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset ('dasmin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset ('dasmin/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset ('dasmin/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset ('dasmin/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset ('dasmin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset ('dasmin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset ('dasmin/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset ('dasmin/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset ('dasmin/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset ('dasmin/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset ('dasmin/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset ('dasmin/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset ('dasmin/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset ('dasmin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset ('dasmin/build/js/custom.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
</html>
