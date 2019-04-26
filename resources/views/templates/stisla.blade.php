<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('dist/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/modules/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/modules/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{asset('dist/modules/weather-icon/css/weather-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/dist/modules/weather-icon/css/weather-icons-wind.min.css')}}">
  <!-- CSS Libraries -->
  <link href="{{ asset('dist/css/dropify.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('dist/modules/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <!-- Template CSS -->
  <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
  <script src="{{ asset('dist/js/sw.js') }}"></script>  
  <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>
  <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600|Source+Sans+Pro" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('dist/modules/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
  <style>
    .poppins
    {
      font-family: "Poppins", sans-serif;
    }

    .source-sans
    {
      font-family: 'Source Sans Pro', sans-serif;
    }

    .article-title
    {
      font-family: "Poppins", sans-serif;
      color: #44486B !important;
      font-weight: 700;
      line-height: 41px;
    }

    .article-content
    {
      font-family: "Source Sans Pro", sans-serif;
      color: #44486B !important;
      font-weight: 400;
      line-height: 24px;
      font-size: 18px;
    }

    .text-name{
      color: #44486B;
      font-weight: bold;
    }
  </style>
</head>

<body class="sidebar-mini">
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg bg-info"></div>
      <nav class="navbar navbar-expand-lg main-navbar" id="navbar1">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
          </ul>
          <div class="search-element">
            <!-- <input class="form-control" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn" type="submit"><i class="fas fa-search"></i></button> -->
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="{{ asset('dist/img/avatar/avatar-2.png') }}" class="rounded-circle dropdown-item-img">
                  
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="{{ asset('dist/img/avatar/avatar-2.png') }}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="{{ asset('dist/img/avatar/avatar-3.png') }}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="{{ asset('dist/img/avatar/avatar-4.png') }}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="{{ asset('dist/img/avatar/avatar-5.png') }}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{ url('trainer/profile') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
               <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="fas fa-sign-out-alt"> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/admin')}}">NGENDONGIN</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('admin')}}">NG</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ url('/admin') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="{{ url('admin/data') }}"><i class="fas fa-fax"></i><span>Data Kamar</span></a></li>
            <li><a class="nav-link" href="{{ url('admin/fitur') }}"><i class="fas fa-play"></i> <span>Fitur</span></a></li>
            <li><a class="nav-link" href="{{ url('admin/berita') }}"><i class="fas fa-newspaper"></i> <span>Berita</span></a></li>
            <li><a class="nav-link" href="{{ url('transaksi/tampil') }}"><i class="fas fa-money-bill"></i> <span>Transaksi</span></a></li>
            <li><a class="nav-link" href="{{ url('transaksi/') }}"><i class="fas fa-briefcase"></i> <span>Pesan Kamar</span></a></li>
            <li><a class="nav-link" href="{{ url('laporan/tampil') }}"><i class="fas fa-list"></i> <span>Laporan</span></a></li>

            <li><a class="nav-link" href="{{ url('/pelanggan') }}"><i class="fas fa-users"></i> <span>Pelanggan</span></a></li>
            <!-- <li><a class="nav-link" href="{{ url('admin/email') }}"><i class="fas fa-mail-bulk"></i> <span>Email</span></a></li> -->
            </li>
            <!-- <li><a class="nav-link" href="{{ url('trainer/pdf') }}"><i class="fas fa-file"></i> <span>PDF</span></a></li> -->
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('header')

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <footer class="main-footer" id="footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/"></a>
        </div>
        <div class="footer-right">
          v2.0.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('dist/modules/popper.js') }}"></script>
  <script src="{{ asset('dist/modules/tooltip.js') }}"></script>
  <script src="{{ asset('dist/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('dist/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('dist/modules/moment.min.js') }}"></script>
  <script src="{{ asset('dist/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="{{ asset('dist/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('dist/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('dist/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
  <script src="{{ asset('dist/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('dist/js/page/features-post-create.js') }}"></script>
  <script src="{{ asset('dist/js/dropify.min.js') }}"></script>
   <script src="{{ asset('dist/modules/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('dist/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('dist/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('dist/modules/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('dist/js/page/modules-datatables.js') }}"></script>
  <script src="https://vjs.zencdn.net/7.3.0/video.js"></script>
  <!-- Template JS File -->
  <script src="{{ asset('dist/js/scripts.js') }}"></script>
  <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="{[asset('dist/js/stisla.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('dist/modules/dropzonejs/min/dropzone.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('dist/js/page/components-multiple-upload.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="//cdn.kik.com/app/2.0.1/app.min.js"></script>
  <script src="{{asset('dist/js/page/modules-sweetalert.js')}}"></script>
  @include('component.swal_alert')  
  @yield('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.drop').dropify();
      $('.datatable').DataTable();
    });
  </script>
   <script>
      $(document).ready(function(){
          $('#fitur').select2();
       });
    </script>
    
</body>
</html>