<!DOCTYPE html>
<html>
<head>
	<title>@yield('page-title')</title>
</head>
<body>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

@yield("content")

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/bootstrap.min.js"></script>


		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

		<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="{{asset('js/site.js')}}"></script>
	</body>
	</html>