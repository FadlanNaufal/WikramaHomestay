<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/dropify.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
  <link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" href="{{ asset('assets/owl/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/owl/assets/owl.theme.default.min.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600|Source+Sans+Pro" rel="stylesheet">
  <script src="{{ asset('js/sw.js') }}"></script>

  <style>
    .img-beranda{
      width: 100%;
    }

    .content-article
    {
      font-family: 'Source Sans Pro', sans-serif;
      color: #000;
      font-size: 18px;
      line-height: 26px;
    }

    .title-article
    {
      font-family: 'Poppins', sans-serif;
    }

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

    .text-pop
    {
     font-family: 'Poppins', sans-serif !important;
     color: white !important; 
    }

    .link-tay
    {
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 16px;
      line-height: 26px;
      transition: .3s;
      padding: 5px;
    }

    .link-tay:hover
    {
      /*border-radius: 3px;
      transform: scale(1.2) !important;
      color: #1272EF;
      background: white;*/
    }

    .nav-pills .nav-link.active, .nav-pills .show > .nav-link
    {
      background: #1272EF;
    }

    .nav-pills .nav-link
    {
      color: #1272EF;
    }

  </style>
</head>
<body class="bg-secondary">
  <nav class="navbar navbar-horizontal navbar-fixed navbar-expand-lg navbar-dark bg-blue">
      <div class="container">
          <a class="navbar-brand text-pop" href="#">
            Naik Kelas
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-default">
              <div class="navbar-collapse-header">
                  <div class="row">
                      <div class="col-6 collapse-brand">
                          <a href="../../index.html">
                              <img src="../../assets/img/brand/blue.png">
                          </a>
                      </div>
                      <div class="col-6 collapse-close">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                              <span></span>
                              <span></span>
                          </button>
                      </div>
                  </div>
              </div>
              
              <ul class="navbar-nav ml-lg-auto">
                  <li class="nav-item">
                      <a class="nav-link nav-link-icon" href="{{ url('student') }}">
                          <span class="link-tay">Beranda</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link nav-link-icon" href="{{ url('student/trainner') }}">
                          <span class="link-tay">Trainner</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link nav-link-icon" href="#">
                          <span class="link-tay">Artikel</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link nav-link-icon" href="#">
                          <span class="link-tay">Top Up</span>
                      </a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="link-tay">Profile</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Logout</a>
                      </div>
                  </li>
              </ul>
              
          </div>
      </div>
  </nav>

  <div class="container-fluid">
    <div class="mt-6">
      @yield('content')
    </div>
  </div>

  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <script src="{{ asset('assets/js/argon.js?v=1.0.0') }}"></script>
  <script src="{{ asset('assets/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/owl/owl.carousel.min.js') }}"></script>
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  <script src="https://vjs.zencdn.net/7.3.0/video.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  @include('component.swal_alert')
  <script>
      $('.datatable').DataTable();
      $('.drop').dropify();
      CKEDITOR.replace( 'konten' );
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:5
              }
          }
      })
  </script>
</body>

</html>