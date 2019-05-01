<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TTD | Tanya Tentang Duit</title>
	<link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"> --}}
	<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/dataTables.materialize.css') }}">
	{{-- <link rel="stylesheet" href="https://cdnjs.com/libraries/Chart.js"> --}}
	<style>
	body{
		padding: 0;
		margin: 0;
		background-color: #eee;
		font-family: 'Montserrat', sans-serif;
	}
</style>

</head>
<body bgcolor="#fff">
	<nav id="navbar" class="white" style="position: fixed;z-index: 99">
		<div class="nav-wrapper container" style="width: 85%">
			<a href="{{ url('/admin/home') }}" class="brand-logo black-text"><b>TTD</b></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				
				<li>
					<a href="{{ route('logout.admin') }}" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	
	
	<div id="grafik" class="container center" style="width: 95%;padding-top: 70px">
		<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">GRAFIK</h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row">
			<div class="col m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					
					<div class="header" style="padding: 10px">
						<h5 class="grey-text">Kategori usia & jenis kelamin</h5>
					</div>
					<div class="body">
						{{-- <canvas id="bar_chart" height="10" style="padding: 10px"></canvas> --}}
						<div class="row">
							<div class="col s12">
								<div id="bar_chart" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
							</div>
						</div>
					</div>



				</div>
			</div>
			<div class="col m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="header" style="padding: 10px">
						<h5 class="grey-text">Provinsi</h5>
					</div>
					<div class="body">
						{{-- <canvas id="pie_provinsi" height="150" style="padding: 20px"></canvas> --}}
						<div class="row">
							<div class="col s12">
								<div id="pie_provinsi" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="card hoverable col m12" style="border-radius: 10px;padding: 20px">
			<table id="user_list" class="striped highlight" >
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>No Hp</th>
					</tr>
				</thead>

				<tbody>
					@foreach($datas as $row)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $row->nama_lengkap }}</td>
						<td>{{ $row->email }}</td>
						<td>{{ $row->no_hp }}</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>


</div>




<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.materialize.js') }}"></script>
{{-- <script src="{{ asset('assets/chartjs/Chart.bundle.js') }}"></script> --}}

{{-- <script src="{{ asset('assets/charts/chartjs.js') }}"></script> --}}

{{-- New Chart --}}
<script type="text/javascript" src="{{ asset('assets/js/canvasjs.min.js') }}"></script>

<script type="text/javascript">
	var table = $('#user_list').DataTable();
    $('select').formSelect();

	window.onload = function() {
		//Chart Provinsi
		var chart = new CanvasJS.Chart("pie_provinsi", {
			exportEnabled: false,
			animationEnabled: true,
			legend:{
				cursor: "pointer",
				itemclick: explodePie
			},
			data: [{
				type: "pie",
				showInLegend: true,
				toolTipContent: "{name}: <strong>{y}%</strong>",
				indexLabel: "{name} - {y}%",
				dataPoints: [
				@for ($i = 0; $i < count($count_provinsi) ; $i++)
				{ y: {{ $count_provinsi[$i] }}, name: "{{ $nama_provinsi[$i]->provinsi }}"},
				@endfor
				]
			}]
		});
		chart.render();

		var chart = new CanvasJS.Chart("bar_chart", {
			animationEnabled: true,
			axisY: {
				title: "Jumlah Laki-Laki",
				titleFontColor: "#4F81BC",
				lineColor: "#4F81BC",
				labelFontColor: "#4F81BC",
				tickColor: "#4F81BC"
			},
			axisY2: {
				title: "Jumlah Perempuan",
				titleFontColor: "#C0504E",
				lineColor: "#C0504E",
				labelFontColor: "#C0504E",
				tickColor: "#C0504E"
			},
			toolTip: {
				shared: true
			},
			legend: {
				cursor:"pointer",
				itemclick: toggleDataSeries
			},
			data: [{
				type: "column",
				name: "Laki-Laki",
				legendText: "Laki-Laki",
				showInLegend: true, 
				dataPoints:[
				{ label: "Anak-anak", y: {{ $anak_l }} },
				{ label: "Remaja", y: {{ $remaja_l }} },
				{ label: "Dewasa", y: {{ $dewasa_l}} },
				]
			},
			{
				type: "column",	
				name: "Perempuan",
				legendText: "perempuan",
				axisYType: "secondary",
				showInLegend: true,
				dataPoints:[
				{ label: "Anak-anak", y: {{ $anak_p }} },
				{ label: "Remaja", y: {{ $remaja_p }} },
				{ label: "Dewasa", y: {{ $dewasa_p}} },
				]
			}]
		});
		chart.render();

		function toggleDataSeries(e) {
			if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			}
			else {
				e.dataSeries.visible = true;
			}
			chart.render();
		}
	}

	function explodePie (e) {
		if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
			e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
		} else {
			e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
		}
		e.chart.render();	
	}
      // Pie
      // $(function () {
    // // new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line'));
    // new Chart(document.getElementById("bar_chart").getContext("2d"), getChartJs('bar'));
    // // new Chart(document.getElementById("radar_chart").getContext("2d"), getChartJs('radar'));
    // // new Chart(document.getElementById("pie_umur").getContext("2d"), getChartJs('pie_umur'));
    // new Chart(document.getElementById("pie_provinsi").getContext("2d"), getChartJs('pie_provinsi'));
    // // new Chart(document.getElementById("pie_provinsi").getContext("2d"), getChartJs('pie_provinsi'));
// });

//       function getChartJs(type) {
//       	var config = null;
//       	if (type === 'bar') {
//       		config = {
//       			type: 'bar',
//       			data: {
//       				labels: ["Anak-anak", "Remaja", "Dewasa"],
//       				datasets: [{
//       					label: "Pria",
//       					data: [{{ $anak_l }}, {{ $remaja_l }}, {{ $dewasa_l}}],
//       					backgroundColor: 'rgba(0, 188, 212, 0.8)'
//       				}, {
//       					label: "Wanita",
//       					data: [{{ $anak_p }}, {{ $remaja_p }}, {{ $dewasa_p}}],
//       					backgroundColor: 'rgba(233, 30, 99, 0.8)'
//       				}]
//       			},
//       			options: {
//       				responsive: true,
//       				legend: false
//       			}
//       		}
//       	}


//       	else if (type === 'pie_provinsi') {
//       		config = {
//       			type: 'pie',
//       			data: {
//       				datasets: [{
//       					data: [
//       					@foreach ($count_provinsi as $key)
//       		'{{ $key }}',
//       		@endforeach
//       		],
//       		backgroundColor: [
//       		@foreach ($count_provinsi as $element)
//       		"rgb({{ rand(0, 255) }}, {{ rand(0, 255) }}, {{ rand(0, 255) }})",
//       		@endforeach
//       		],
//       	}],
//       	labels: [
{{-- //       	@foreach ($nama_provinsi as $row) --}}
{{-- //       		"{{ $row->provinsi }}", --}}
{{-- //       		@endforeach --}}
//       		]
//       	},
//       	options: {
//       		responsive: true,
//       		legend: false
//       	}
//       }
//   }

//   return config;
// }
</script>

</body>
</html>