<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Dashboard | Yatima</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      
      <div class="logo">
        <a href="./" class="simple-text logo-normal">
          Yatima
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'dashboard' == request()->path() ? 'active': ''}}">
            <a href="./dashboard">
              {{-- <i class="now-ui-icons design_app"></i> --}}
              <i class="fas fa-chart-line"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{'searchorg' == request()->path() ? 'active': ''}}">
            <a href="./searchorg">
              {{-- <i class="now-ui-icons education_atom"></i> --}}
              <i class="fas fa-building"></i>
              <p>Organizations</p>
            </a>
          </li>
          <li class="{{'admin_campaigns' == request()->path() ? 'active': ''}}">
            <a href="./admin_campaigns">
              {{-- <i class="now-ui-icons education_atom"></i> --}}
              <i class="fas fa-hand-holding-usd"></i>
              <p>Fundraise Campaigns</p>
            </a>
          </li>
          <li class="{{'abouts' == request()->path() ? 'active': ''}}">
            <a href="./abouts">
              {{-- <i class="now-ui-icons ui-1_bell-53"></i> --}}
              <i class="fab fa-ello"></i>
              <p>About Us</p>
            </a>
          </li>
          <li class="{{'searchuser' == request()->path() ? 'active': ''}}">
            <a href="/searchuser">
              <i class="now-ui-icons users_single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="{{'users' == request()->path() ? 'active': ''}}">
            <a href="./users">
              {{-- <i class="now-ui-icons design_bullet-list-67"></i> --}}
              <i class="fas fa-user-lock"></i>
              <p>User Approval</p>
            </a>
          </li>
          <li class="{{'adminprofile/{ Auth::user()->id }' == request()->path() ? 'active': ''}}">
            <a href="./adminprofile/{{ Auth::user()->id }}">
              {{-- <i class="now-ui-icons text_caps-small"></i> --}}
              <i class="fas fa-id-card"></i>
              <p>Admin Profile</p>
            </a>
          </li>
          <li class="{{'reports' == request()->path() ? 'active': ''}}">
            <a href="./reports">
              {{-- <i class="now-ui-icons arrows-1_cloud-download-93"></i> --}}
              <i class="fas fa-registered"></i>
              <p>Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            @yield('heading')
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            @yield('search')
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      
      @yield('content')
      
    </div>
  </div>
</div>
</div>
<footer class="footer">
  <div class="container-fluid">
    
    @yield('scripts')
    <div class="copyright" id="copyright">
      &copy;
      <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script>
      Yatima Donation System
    </div>
  </div>
</footer>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
</body>

</html>