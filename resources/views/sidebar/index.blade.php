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
            <li class="label">Menu</li>
  <li><a href="{{ url('/home') }}"><i class="ti-home"></i> Dashboard </a></li>
  <li><a href="{{ url('/mekanik') }}"><i class="ti-user"></i> mekanik</a></li>
  <li><a href="{{ url('/member') }}"><i class="ti-user"></i> Member</a></li>
  <li><a href="app-widget-card.html"><i class="ti-layout-grid2-alt"></i> Widget</a></li>
  <li class="label">Features</li>
  <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="ui-typography.html">Typography</a></li>
          <li><a href="ui-alerts.html">Alerts</a></li>

          <li><a href="ui-button.html">Button</a></li>
          <li><a href="ui-dropdown.html">Dropdown</a></li>

          <li><a href="ui-list-group.html">List Group</a></li>

          <li><a href="ui-progressbar.html">Progressbar</a></li>
          <li><a href="ui-tab.html">Tab</a></li>

      </ul>
  </li>
  <li><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Components <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="uc-calendar.html">Calendar</a></li>
          <li><a href="uc-carousel.html">Carousel</a></li>
          <li><a href="uc-weather.html">Weather</a></li>
          <li><a href="uc-datamap.html">Datamap</a></li>
          <li><a href="uc-todo-list.html">To do</a></li>
          <li><a href="uc-scrollable.html">Scrollable</a></li>
          <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
          <li><a href="uc-toastr.html">Toastr</a></li>
          <li><a href="uc-range-slider-basic.html">Basic Range Slider</a></li>
          <li><a href="uc-range-slider-advance.html">Advance Range Slider</a></li>
          <li><a href="uc-nestable.html">Nestable</a></li>

          <li><a href="uc-rating-bar-rating.html">Bar Rating</a></li>
          <li><a href="uc-rating-jRate.html">jRate</a></li>
      </ul>
  </li>
  <li><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="table-basic.html">Basic</a></li>

          <li><a href="table-export.html">Datatable Export</a></li>
          <li><a href="table-row-select.html">Datatable Row Select</a></li>
          <li><a href="table-jsgrid.html">Editable </a></li>
      </ul>
  </li>
  <li><a class="sidebar-sub-toggle"><i class="ti-heart"></i> Icons <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="font-themify.html">Themify</a></li>
      </ul>
  </li>
  <li><a class="sidebar-sub-toggle"><i class="ti-map"></i> Maps <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="gmaps.html">Basic</a></li>
          <li><a href="vector-map.html">Vector Map</a></li>
      </ul>
  </li>
  <li class="label">Form</li>
  <li><a href="form-basic.html"><i class="ti-view-list-alt"></i> Basic Form </a></li>
  <li class="label">Extra</li>
  <li><a class="sidebar-sub-toggle"><i class="ti-files"></i> Invoice <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="invoice.html">Basic</a></li>
          <li><a href="invoice-editable.html">Editable</a></li>
      </ul>
  </li>
  <li><a class="sidebar-sub-toggle"><i class="ti-target"></i> Pages <span
              class="sidebar-collapse-icon ti-angle-down"></span></a>
      <ul>
          <li><a href="page-login.html">Login</a></li>
          <li><a href="page-register.html">Register</a></li>
          <li><a href="page-reset-password.html">Forgot password</a></li>
      </ul>
  </li>
  <li><a href="../documentation/index.html"><i class="ti-file"></i> Documentation</a></li>
  <li><a><i class="ti-close"></i> Logout</a></li>
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
            <div class="float-right">
              <div class="dropdown dib">
                <div class="header-icon">
                  <a href="{{ url('/logout') }}">
                    <i class="ti-power-off"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </div>
            </div>
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
                    <h1>Welcome</h1>
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
            <div class="row">
              <div class="col-lg-12">
                <div class="footer">
                  <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                </div>
              </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
