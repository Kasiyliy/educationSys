<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Оку системасы</title>
    <link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset("plugins/jqvmap/jqvmap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("dist/css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("plugins/daterangepicker/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset("plugins/summernote/summernote-bs4.css")}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">

    @yield('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
@include('admin.parts.navbar')

<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.parts.sidebar')

    <div class="container-fluid">
        @yield("content")
    </div>
    <!-- /.control-sidebar -->
</div>


<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    toastr.options.closeButton = true;
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}");
    @endif

    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}");
    @endif

    @if(Session::has('warning'))
    toastr.info("{{Session::get('warning')}}");
    @endif

</script>

@yield('scripts')
</body>
</html>