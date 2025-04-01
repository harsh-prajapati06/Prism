<!DOCTYPE html>
@php
  $setting = getSetting();
  $routes = ['admin.login'];
  $curruntRoute = Route::currentRouteName();
@endphp
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $setting->name ?? '' }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="{{URL::asset('public/assets/img/favicon.png')}}" rel="icon">-->
  <link href="{{ env('IMAGE_SHOW_PATH') . 'logo/' . $setting->logo }}" rel="icon">
  <link href="{{URL::asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{URL::asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('assets/admin/css/style.css')}}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
</head>

<body>
  @if(!in_array($curruntRoute, $routes))
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
  @endif
  @include('admin.layouts.message')
  @yield('content')
  @if(!in_array($curruntRoute, $routes))
    @include('admin.layouts.footer')
  @endif
  <!-- Vendor JS Files -->
  <script src="{{URL::asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/quill/quill.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{URL::asset('assets/admin/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{URL::asset('assets/toastr_message/js/toastr.min.js')}}"></script>


  <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.editorConfig = function (config) {
      config.extraPlugins = 'confighelper';
    };
    CKEDITOR.replace('editor1');

  </script>

  <!-- Template Main JS File -->
  <script src="{{URL::asset('assets/admin/js/main.js')}}"></script>
</body>

</html>