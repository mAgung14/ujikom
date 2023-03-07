<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>AMRS | Singaparna</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet" />
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet" />
    <link href="css/lib/font-awesome.min.css" rel="stylesheet" />
    <link href="css/lib/themify-icons.css" rel="stylesheet" />
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet" />
    <link href="css/lib/bootstrap.min.css" rel="stylesheet" />
    <link href="css/lib/helper.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="../../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/lib/helper.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
      <div class="nano">
        <div class="nano-content">
          <ul>
            <div class="logo">
              <a href="index.html">
                <span>AMRS</span></a>
            </div>
            <li class="label">{{ auth()->user()->level }}</li>

            @if (auth()->user()->level == 'admin')
                <li><a href="{{ url('/home') }}"><i class="ti-home"></i> Dashboard </a></li>
                <li><a href="{{ url('/mekanik') }}"><i class="ti-user"></i> mekanik</a></li>
                <li><a href="{{ url('/member') }}"><i class="ti-user"></i> Member</a></li>
                <li><a href="{{ url('/kerusakan') }}"><i class="ti-layout-grid2-alt"></i> kerusakan</a></li>
                <li><a href="{{ url('/jeniskerusakan') }}"><i class="ti-layout-grid2-alt"></i>Jenis kerusakan</a></li>
                 <li><a href="{{ url('/logout') }}" ><i class="ti-close"></i> Logout</a></li>

            @elseif (auth()->user()->level == 'member')
            <li><a href="{{ url('/mekanik') }}"><i class="ti-user"></i> mekanik</a></li>
            <li><a href="{{ url('/member') }}"><i class="ti-user"></i> Member</a></li>
            <li><a href="{{ url('/kerusakan') }}"><i class="ti-layout-grid2-alt"></i> kerusakan</a></li>
            <li><a href="{{ url('/jeniskerusakan') }}"><i class="ti-layout-grid2-alt"></i>Jenis kerusakan</a></li>
            <li><a href="{{ url('/logout') }}" ><i class="ti-close"></i> Logout</a></li>
            @endif
</ul>
          </ul>
        </div>
      </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="float-left">
              <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <form class="d-flex" role="search">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
              <div class="page-header">
                <div class="page-title">

                </div>
              </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
              <div class="page-header">
                <div class="page-title">

                </div>
              </div>
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <section id="main-content">
            <div class="row">
              {{-- <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-money color-success border-success"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Total Profit</div>
                      <div class="stat-digit">1,012</div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-user color-primary border-primary"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">New Customer</div>
                      <div class="stat-digit">961</div>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-layout-grid2 color-pink border-pink"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Active Projects</div>
                      <div class="stat-digit">770</div>
                    </div>
                  </div>
                </div>
              </div>--}}
              {{-- <div class="col-lg-3">
                <div class="card">
                  <div class="stat-widget-one">
                    <div class="stat-icon dib">
                      <i class="ti-link color-danger border-danger"></i>
                    </div>
                    <div class="stat-content dib">
                      <div class="stat-text">Referral</div>
                      <div class="stat-digit">2,781</div>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
            {{-- content --}}
            <section class="content">
              @yield('content')
            </section>

            <!-- footer -->

          </section>
        </div>
      </div>
    </div>

    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
     <!-- jquery vendor -->
     <script src="js/lib/jquery.min.js"></script>
     <script src="js/lib/jquery.nanoscroller.min.js"></script>
     <!-- nano scroller -->
     <script src="js/lib/menubar/sidebar.js"></script>
     <script src="js/lib/preloader/pace.min.js"></script>
     <!-- sidebar -->

     <!-- bootstrap -->


     <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
     <!-- scripit init-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
