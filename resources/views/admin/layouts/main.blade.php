<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Адмін панель</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset( 'plugins/fontawesome-free/css/all.min.css' ) }}">
  <link rel="stylesheet" href="{{ asset( 'plugins/summernote/summernote-bs4.min.css' ) }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('plugins/daterangepicker/daterangepicker.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset ('dist/img/AdminLTELogo.png') }}" alt="AdminLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  @include('admin.includes.leftsidebar')

 @yield('content')

  <footer class="main-footer">
    <strong>ЕТФК ХНТУ &copy; 2022-2023</strong>
    Всі права захищені.
    <div class="float-right d-none d-sm-inline-block">
      <b>Версія</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset ('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset ('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script src="{{ asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset ('dist/js/adminlte.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
        $(function () {
        bsCustomFileInput.init();
    });

</script>
<style>
    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "...";
    }
</style>
</body>
</html>