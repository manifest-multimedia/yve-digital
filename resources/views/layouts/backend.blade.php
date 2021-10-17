
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('page-title')</title>
	<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/styles.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	
	@livewireScripts
	@livewireStyles
	

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>


<body>

	@yield('sidebar')

	<div class="mobile-menu">
		<i class="fa fa-bars mobilebars" aria-hidden="true"></i>
	</div>

	@yield('content')

	</div>	<!--/.main-->
	
	
	<script src="{{asset('backend/js/jquery-1.11.1.min.js')}}" defer></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}" defer></script>
	<script src="{{asset('backend/js/chart.min.js')}}" defer></script>
	<script src="{{asset('backend/js/chart-data.js')}}" defer></script>
	<script src="{{asset('js/easypiechart.js')}}" defer></script>
	<script src="{{asset('js/easypiechart-data.js')}}" defer></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}" defer></script>
	<script src="{{asset('backend/js/custom.js')}}" defer></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.js" defer></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
	<script src="{{ mix('js/app.js') }}" defer></script>

	<script defer>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});

			var chart2 = document.getElementById("line-chart_1").getContext("2d");
			window.myLine = new Chart(chart2).Line(lineChart_1Data, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});
		};

		var dashboardgreenswiper = new Swiper('.dashboard-green-slider .swiper-container', {
			direction: 'vertical',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
		});
	</script>



</body>
</html>