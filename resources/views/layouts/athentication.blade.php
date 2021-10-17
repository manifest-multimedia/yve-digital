<!DOCTYPE html>
<html>
<head>
	<title>@yield('page-title')</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
	
	<div class="main-container p-1">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					
					<div class="innerpage-page-form">
						<p class="innerpage-site-title"><a href="/" class="innerpage-site-title" style="text-decoration:none"> YVE </a> </p>
						<h1 class="form-title">@yield('form-title')</h1>
						<p class="small">@yield('new') <span><a href="@yield('action-url')">@yield('new-action')</a></span></p>

						<div>
							
                            @yield('form')

							<!-- <div class="form-terms mt-5">
								<small>By signing up, I agree to the <a href="">Terms of Service</a><br>
									and <a href="#">Privacy Policy.</a></small>
								</div> -->
							</div>

							<div class="terms mt-4">

								<ul>
									<li><a href="/legal">Terms</a></li>
									<li><a href="/privacy">Privacy</a></li>
									<li><a href="https://support.yvedigital.com">Help</a></li>
								</ul>



								<div class="developer-mention">
									<small><a href='https://manifestghana.com'> Created by Manifest Multimedia </a></small>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-6 ml-auto">

						<div class="side-area" >

							<div class=" side-area-heading pr-5 pl-5 pb-4">
								<h2>Release
									Unlimited
									Music
								Everywhere.</h2>
							</div>

							<div class="side-area-logos pr-5 pl-5 pb-5 mb-5">
								<img src="{{asset('images/wlg6.png')}}" alt="Tidal Icon" class="img-fluid">
								<img src="{{asset('images/wlg5.png')}}" alt="Spotify Icon" class="img-fluid">
								<img src="{{asset('images/wlg4.png')}}" alt="Apple Music Icon" class="img-fluid">
								<img src="{{asset('images/wlg3.png')}}" alt="Deezer Icon" class="img-fluid">
								<img src="{{asset('images/wlg2.png')}}" alt="Amazon Music Icon" class="img-fluid">
								<img src="{{asset('images/wlg1.png')}}" alt="YouTube Music Icon" class="img-fluid">
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>


		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

		<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script src="{{asset('js/site.js')}}"></script>
	</body>
	</html>