
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

   <!-- Bootstrap, Font Awesome, Aminate, Owl Carausel, Normalize CSS -->
    <link href="{{asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet" type="text/css"/>    
    <link href="{{asset('assets/frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/frontend/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/frontend/css/normalize.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/frontend/css/slicknav.min.css')}}" rel="stylesheet" type="text/css"/>
    
	<!-- Site CSS -->
	 
    <link href="{{asset('assets/frontend/css/main.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet" type="text/css"/>   
	
    <!-- Modernizr JS -->
    <script src="{{asset('assets/frontend/js/modernizr-3.5.0.min.js')}}"></script>
	
	<!--favincon-->
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/frontend/images/favicon/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/frontend/images/favicon/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/frontend/images/favicon/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/frontend/images/favicon/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/frontend/images/favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/frontend/images/favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/frontend/images/favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/frontend/images/favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/frontend/images/favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/frontend/images/favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/frontend/images/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/frontend/images/favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/frontend/images/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('assets/frontend/images/favicon/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{asset('assets/frontend/images/favicon/ms-icon-144x144.png')}}">
	<meta name="theme-color" content="#ffffff">
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">	
	<!--Poprup-->
    <link href="{{asset('assets/frontend/css/popup.css')}}" rel="stylesheet">
     <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>      
    <script src="{{asset('assets/frontend/js/jquery.bpopup.min.js')}}"></script>
    <script>
    $( document ).ready(function() {
        $('#popup_this').bPopup();
    });
    </script>
   @stack('css')
</head>
<body>
	<div class="spinner-cover">
		<div class="spinner-inner">
			<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
			</div>
		</div>
	</div>
	<div class="spinner-cover">
		<div class="spinner-inner">
			<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
			</div>
		</div>
	</div>
	<div id="wrapper">
{{-- sidebar-wrapper --}}
              @include('layouts.frontend.partial.sidewrapper')
{{-- sidebar-wrapper end--}}
		<div id="page-content-wrapper">
            {{-- header --}}
              @include('layouts.frontend.partial.header')
            {{-- header end --}}
            {{-- navbar --}}
              @include('layouts.frontend.partial.navbar')
            {{-- navbar end --}}
			<div class="container-fluid">
				<div class="container">
					<div class="primary margin-15">
					<div class="row">
						<div class="col-md-8">
						{{-- content --}}
						@yield('content')
						{{-- content end--}}
						</div>
						{{-- sidebar --}}
              @include('layouts.frontend.partial.sidebar')
						{{-- sidebar end--}}
					</div>
					</div> <!--.primary-->
					
				</div>
			</div>
			{{-- infobar --}}
              @include('layouts.frontend.partial.infobar')
						{{-- infobar end--}}
			
            {{-- footer --}}
              @include('layouts.frontend.partial.footer')
            {{-- footer end--}}
		</div> <!--page-content-wrapper-->

		<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery.slicknav.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/masonry.pkgd.min.js')}}"></script>
		<!-- Main -->
		<script src="{{asset('assets/frontend/js/main.js')}}"></script>
		<script src="{{asset('assets/frontend/js/smart-sticky.js')}}"></script>
		<script src="{{asset('assets/frontend/js/theia-sticky-sidebar.js')}}"></script>
	</div> <!--#wrapper-->
</body>
</html>