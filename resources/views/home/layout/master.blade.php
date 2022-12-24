<!doctype html>
<html lang="zxx" class="theme-light">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- All CSS Link -->
	<link rel="stylesheet" href="public/home/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/home/css/animate.min.css">
	<link rel="stylesheet" href="public/home/css/meanmenu.css">
	<link rel="stylesheet" href="public/home/css/boxicons.min.css">
	<link rel="stylesheet" href="public/home/css/magnific-popup.min.css">
	<link rel="stylesheet" href="public/home/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/home/css/flaticon.css">
	<link rel="stylesheet" href="public/home/css/odometer.min.css">
	<link rel="stylesheet" href="public/home/css/slick.min.css">
	<link rel="stylesheet" href="public/home/css/style.css">
	<link rel="stylesheet" href="public/home/css/responsive.css">
	<link rel="stylesheet" href="public/home/css/dark-color/dark-style.css">
	<title>RamiTank - IT Startup & Digital Business Services HTML Template</title>
	<link rel="icon" type="image/png" href="public/home/img/favicon.png">
</head>

<body>
	
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!-- End Preloader Area -->

@include('home.layout.header')

@yield('content')

@include('home.layout.footer')

	<div class="go-top"><i data-feather="arrow-up"></i></div>

	<!-- Dark/Light Toggle -->
	<div class="dark-version">
		<label id="switch" class="switch">
			<input type="checkbox" onchange="toggleTheme()" id="slider">
			<span class="slider round"></span>
		</label>
	</div>
	
	<!-- All JS Link -->
	<script src="public/home/js/jquery.min.js"></script>
	<script src="public/home/js/bootstrap.bundle.min.js"></script>
	<script src="public/home/js/meanmenu.min.js"></script>
	<script src="public/home/js/wow.min.js"></script>
	<script src="public/home/js/magnific-popup.min.js"></script>
	<script src="public/home/js/appear.min.js"></script>
	<script src="public/home/js/odometer.min.js"></script>
	<script src="public/home/js/slick.min.js"></script>
	<script src="public/home/js/imagesloaded.pkgd.min.js"></script>
	<script src="public/home/js/isotope.pkgd.min.js"></script>
	<script src="public/home/js/owl.carousel.min.js"></script>
	<script src="public/home/js/feather.min.js"></script>
	<script src="public/home/js/form-validator.min.js"></script>
	<script src="public/home/js/contact-form-script.js"></script>
	<script src="public/home/js/main.js"></script>
</body>

</html>