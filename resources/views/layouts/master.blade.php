

@include('partials.headcontent')

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Konta!</span></a>
            </div>

            <div class="clearfix"></div>
              <!-- menu profile quick info -->
              @include('partials.profile')
            <!-- /menu profile quick info -->
              <!-- side menu -->
              @include('partials.sidebar')
              <!-- end side menu -->

            <!-- /menu footer buttons -->
           @include('partials.footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('partials/topnav')
        <!-- /top navigation -->

        <!-- page content -->
       

        @yield('content')
          <!-- top tiles -->
          
       
        <!-- footer content -->
        <footer>

          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!--forntawesome-->
    <script src="https://kit.fontawesome.com/5b4cf9fcd0.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="/css/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/css/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/css/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/css/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/css/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/css/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/css/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/css/vendors/skycons/skycons.js"></script>

    <!-- Flot -->
    <script src="/css/vendors/Flot/jquery.flot.js"></script>
    <script src="/css/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/css/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/css/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/css/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/css/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/css/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/css/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/css/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/css/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/css/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/css/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/css/vendors/moment/min/moment.min.js"></script>
    <script src="/css/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/css/build/js/custom.min.js"></script>
	
  </body>
</html>
