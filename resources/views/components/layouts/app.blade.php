<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title ?? 'Tech Tronic' }}</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('home-page-assets/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!--
		CSS
		============================================= -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{asset('home-page-assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/ion.rangeSlider.css')}}" />
    <link rel="stylesheet" href="{{asset('home-page-assets/css/ion.rangeSlider.skinFlat.css')}}" />
    <link rel="stylesheet" href="{{asset('home-page-assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('home-page-assets/css/style.css')}}">
    @vite('resources/css/app.css', 'resources/js/app.js')
    @livewireStyles
</head>

<body class="bg-slate-200">
    @livewire('partials.navbar')
    <main>
        {{ $slot }}
    </main>
    @livewire('partials.footer')
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <script src="{{asset('home-page-assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('home-page-assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('home-page-assets/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('home-page-assets/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('home-page-assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('home-page-assets/js/nouislider.min.js')}}"></script>
	<script src="{{asset('home-page-assets/js/countdown.js')}}"></script>
	<script src="{{asset('home-page-assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('home-page-assets/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('home-page-assets/js/gmaps.min.js')}}"></script>
	<script src="{{asset('home-page-assets/js/main.js')}}"></script>

    @livewireScripts
</body>

</html>