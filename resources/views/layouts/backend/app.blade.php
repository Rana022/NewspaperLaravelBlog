<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
 
    <!-- Styles -->
   <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/backend/img/favicon.ico')}}' />
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  @stack('css')
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
        {{-- navbar --}}
      @include('layouts.backend.partial.navbar')
        {{-- navbar end --}}
        {{-- sidebar --}}
      @include('layouts.backend.partial.sidebar')
        {{-- sidebar end --}}
      
      <!-- Main Content -->
      @yield('content')
      <!-- Main Content -->
      
      {{-- footer --}}
      @include('layouts.backend.partial.footer')
      {{-- footer end --}}
     
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('assets/backend/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('assets/backend/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/backend/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('assets/backend/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('assets/backend/js/custom.js')}}"></script>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
         <script>
        @if($errors->any())
          @foreach($errors->all() as $error)
             toastr.error('{{$error}}', 'error',{
                 progressBar: true,
                 closeButton: true,
             });
             @endforeach
        @endif
        </script>
  @stack('js')
</body>
</html>
