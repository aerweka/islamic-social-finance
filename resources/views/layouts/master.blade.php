<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Gull - Laravel 8+ Bootstrap 4 admin template</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
	@yield('before-css')
	{{-- theme css --}}

	@if (Session::get('layout') == 'vertical')
	<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.10.1-web/css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/vendor/metisMenu.min.css') }}">
	<link id="gull-theme" rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-blue.min.css') }}">
	@endif
	<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-free-5.10.1-web/css/all.css') }}">
	<link id="gull-theme" rel="stylesheet" href="{{ asset('assets\fonts\iconsmind\iconsmind.css') }}">
	<link id="gull-theme" rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-blue.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/vendor/perfect-scrollbar.css') }}">
	{{-- page specific css --}}
	@yield('page-css')
</head>






<body class="text-left">
	@include('sweetalert::alert')
	<!-- Pre Loader Strat  -->
	<div class='loadscreen' id="preloader">

		<div class="loader spinner-bubble spinner-bubble-primary">


		</div>
	</div>
	<!-- Pre Loader end  -->

	@include('layouts.compact-vertical-sidebar.master')
	<!-- ============ Search UI Start ============= -->
	{{-- @include('layouts.search') --}}
	<!-- ============ Search UI End ============= -->

	<!-- ============ Customizer UI Start ============= -->
	@include('layouts.common.customizer')
	<!-- ============ Customizer UI Start ============= -->



	{{-- common js --}}
	<script src="{{ asset('assets/js/common-bundle-script.js') }}"></script>
	{{-- page specific javascript --}}
	@yield('page-js')

	{{-- theme javascript --}}
	{{-- <script src="{{ mix('assets/js/es5/script.js') }}"></script> --}}
	<script src="{{ asset('assets/js/script.js') }}"></script>

	<script src="{{ asset('assets/js/sidebar.compact.script.js') }}"></script>

	<script src="{{ asset('assets/js/customizer.script.js') }}"></script>

	{{-- laravel js --}}
	{{-- <script src="{{ mix('assets/js/laravel/app.js') }}"></script> --}}

	@yield('bottom-js')
</body>

</html>