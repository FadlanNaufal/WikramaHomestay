<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('dist/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/modules/fontawesome/css/all.min.css')}}">
  <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="{{ asset('dist/css/sweetalert.css') }}">
  <script src="{{ asset('dist/js/sw.js') }}"></script>  
  <script src="{{ asset('dist/modules/jquery.min.js') }}"></script>

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="{{ Route('user.dashboard') }}" class="navbar-brand sidebar-gone-hide">Ngendongin</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
          </ul>
          
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
                  <img alt="image" src="{{asset('dist/img/avatar/avatar-1.png')}}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="{{asset('dist/img/avatar/avatar-2.png')}}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="{{asset('dist/img/avatar/avatar-3.png')}}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="{{asset('dist/img/avatar/avatar-4.png')}}" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="{{asset('dist/img/avatar/avatar-5.png')}}" class="rounded-circle dropdown-item-img">
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
            <img alt="image" src="{{asset('dist/img/avatar/avatar-1.png')}}" width="30" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">{{Auth::guard('pelanggan')->user()->name}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{Route('user.dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
             <li class="nav-item">
              <a href="{{Route('transaksi')}}" class="nav-link"><i class="fas fa-money-bill"></i><span>Transaksi</span></a>
            </li>
              <li class="nav-item">
              <a href="{{Route('kamarUser')}}" class="nav-link"><i class="fas fa-home"></i><span>Lihat Kamar</span></a>
            </li>
          </ul> 
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
           @yield('content')
          </div>
        </section>

         <footer class="main-footer" id="footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By Kodein.dev
        </div>
        <div class="footer-right">
          v2.0.0
        </div>
      </footer>
      </div>
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

  <script src="{{ asset('dist/js/jscroll.min.js') }}"></script>
   <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="{{asset('dist/img/loading.gif')}}" alt="Loading..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        },5000);
    </script>

    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll-vvip').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="{{asset('dist/img/loading.gif')}}" alt="Loading..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        },5000);
    </script>
</body>
</html>