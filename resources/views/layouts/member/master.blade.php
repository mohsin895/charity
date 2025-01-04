<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>{{$setting->title ?? "বিক্রমপুর মানব সেবা ফাউন্ডেশন"}}.</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{asset($setting->favIcon ?? "")}}">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('frontend')}}/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('frontend')}}/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('frontend')}}/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/normalize.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/style.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">
		<style>
			
		</style>
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    {{-- <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg> --}}
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		

	
		<!-- Header Area -->
	@include('layouts.member.header')
		<!-- End Header Area -->
		@yield('content')
		<!-- Slider Area -->

		
		<!-- Footer Area -->
        @include('layouts.frontend.footer')
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
		<script src="{{asset('frontend')}}/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="{{asset('frontend')}}/js/easing.js"></script>
		<!-- Color JS -->
		<script src="{{asset('frontend')}}/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="{{asset('frontend')}}/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('frontend')}}/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('frontend')}}/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('frontend')}}/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('frontend')}}/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('frontend')}}/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('frontend')}}/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('frontend')}}/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="{{asset('frontend')}}/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="{{asset('frontend')}}/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="{{asset('frontend')}}/js/main.js"></script>

		
    </body>
</html>