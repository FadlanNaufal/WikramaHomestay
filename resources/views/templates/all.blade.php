<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <link href="{{ asset('dist/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('dist/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/css/dropify.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('dist/css/argon.css?v=1.0.0') }}" rel="stylesheet">
  <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" href="{{ asset('dist/css/croppie.css') }}" />
  <script src="{{ asset('js/sw.js') }}"></script>
  
  <style>
    .star-rating {
      line-height:32px;
      font-size:1.25em;
    }

    .star-rating .fa-star{color: #e5df2b;}
    .bg-blue
    {
      background: #1272EF !important;
    }

    .dataTables_wrapper .dataTables_filter input{
      margin-right: 20px;
      border:1px solid #b8b9ba;
      border-radius: 5px;
      outline: none;
      padding: 5px !important;
      color: #8898aa;
      font-size: 15px;
      transition: box-shadow .15s ease;
      box-shadow :0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
    }

    .dataTables_length{
      margin-left: 20px;
    }

    .dataTables_info{
      margin-left: 20px;
    }

    table.dataTable.no-footer{
      border: none !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current{
      background: #1272EF;
      border: none;
      color: white !important;
      text-align: center !important;
      margin-bottom: 10px;
      padding: 4px 15px !important;
      border-radius: 3px;
      box-shadow :0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02) !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
      background: #1272EF;
      border: none;
      color: white !important;
      text-align: center !important;
    }

    .dataTables_paginate .paging_simple_numbers{
      margin-bottom: 10px;
      margin-right: 10px;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button
    {
      border-radius: 3px;
      padding: 4px 15px !important;
      transition: .3s !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
      background: transparent;
      color: #333 !important;
      border:none;
      padding: 4px 15px !important;
      box-shadow :0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02) !important;
    }

    .btn-blue
    {
      background: #1272EF !important;
      color: white;
    }

    .page-item.active .page-link
    {
      border-color: #1272EF;
      background-color: #1272EF;
    }

    .dropdown-item.active, .dropdown-item:active
    {
      background-color: #1272EF;
    }

  </style>
</head>
<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <br>
        <img src="{{ asset('dist/img/4vm5.png') }}">
      </a>
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./dist/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{ url('profile') }}" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./dist/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('trainner') }}">
              <i class="ni ni-tv-2"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('trainner/article') }}">
              <i class="ni ni-collection"></i> Artikel
            </a>
          </li>
        </ul>
        
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Materi Ajar</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('trainner/video') }}">
              <i class="ni ni-button-play"></i> Video
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('trainner/audio') }}">
              <i class="ni ni-note-03"></i> Audio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('trainner/pdf') }}">
              <i class="ni ni-archive-2"></i> Modul PDF
            </a>
          </li>
        </ul>

        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Lainnya</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-trophy"></i> Score
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-money-coins"></i> Reedem
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('trainner/follower') }}">
              <i class="fas fa-users"></i> Followers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-chat-round"></i> Tanya Jawab
            </a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">@yield('title')</a>
        <!-- Form -->
        @if(false)
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        @endif
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Hai</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="{{ url('trainner/profile') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-blue pb-8 pt-5 pt-md-8">
      @yield('content_up')
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        @yield('content')
    </div>
  </div>
  <script src="{{ asset('dist/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('dist/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('dist/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('dist/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ asset('dist/js/argon.js?v=1.0.0') }}"></script>
  <script src="{{ asset('dist/js/dropify.min.js') }}"></script>
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  <script src="https://vjs.zencdn.net/7.3.0/video.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="{{ asset('dist/js/croppie.js') }}"></script>
  @include('component.swal_alert')
  <script>
      $(document).ready(function(){
        $('.datatable').DataTable();
        $('.drop').dropify();
        // CKEDITOR.replace( 'konten' );

        $('.rounded-circle').click(function(){
          $('#file_trig').trigger('click');
        });

        $('#file_trig').change(function(){
            readURL(this);
        });

        function readURL(input) {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('.rounded-circle').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        var uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'circle'
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

      });
  </script>
</body>

</html>