
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
	
	
	<script src="{{asset('backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}" ></script>
	<script src="{{asset('js/easypiechart.js')}}" ></script>
	<script src="{{asset('js/easypiechart-data.js')}}" ></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}" ></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.js" ></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js" ></script>
	<script src="{{asset('backend/js/custom.js')}}" ></script>
	<script src="{{ mix('js/app.js') }}" defer></script>
	
	<script src="{{asset('backend/js/chart.min.js')}}"></script>
	<script src="{{asset('backend/js/chart-data.js')}}"></script>
	
	<script>

var lineChart_2Data = {
		labels : ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday", "Sunday"],
		datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : [randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2()]
			},
			{
				label: "My Second dataset",
				fillColor : "rgba(48, 164, 255, 0.2)",
				strokeColor : "rgba(48, 164, 255, 1)",
				pointColor : "rgba(48, 164, 255, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(48, 164, 255, 1)",
				data : [randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2(),randomScalingFactor_2()]
			}
		]

	}

		window.onload = function () {
			var chart2 = document.getElementById("line-chart_2").getContext("2d");
			window.myLine = new Chart(chart2).Line(lineChart_2Data, {
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
	

	{{-- <script>
		document.addEventListener('DOMContentLoaded', () => {
		  var chart2 = document.getElementById("line-chart_2").getContext("2d");
		  window.myLine = new Chart(chart2).Line(lineChart_2Data, {
			  responsive: true,
			  scaleLineColor: "rgba(0,0,0,.2)",
			  scaleGridLineColor: "rgba(0,0,0,.05)",
			  scaleFontColor: "#c5c7cc"
		  });
	  });

	  var dashboardgreenswiper = new Swiper('.dashboard-green-slider .swiper-container', {
		  direction: 'vertical',
		  pagination: {
			  el: '.swiper-pagination',
			  clickable: true,
		  },
	  });
  </script> --}}

	{{-- <script defer>
		  document.addEventListener('DOMContentLoaded', () => {
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
		});

		var dashboardgreenswiper = new Swiper('.dashboard-green-slider .swiper-container', {
			direction: 'vertical',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
		});
	</script> --}}



</body>
</html>