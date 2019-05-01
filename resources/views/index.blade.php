    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>TTD | Tanya Tentang Duit</title>
	<link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://qiscus-sdk.s3-ap-southeast-1.amazonaws.com/web/v2.6.5/qiscus-sdk.2.6.5.css">
	<style>
	body{
		padding: 0;
		margin: 0;
		font-family: 'Montserrat', sans-serif;
	}
</style>
</head>
<body>
	<!-- Navbar -->
	<nav id="navbar" class="white" style="position: relative;z-index: 99">
		<div class="nav-wrapper container" style="width: 85%">
			<a href="{{ url('/') }}" class="brand-logo black-text"><b>TTD</b></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#apa_itu_ttd" class="black-text">Apa itu TTD?</a></li>
				<li><a href="#cara_penggunaan" class="black-text">Cara Penggunaan</a></li>
				<li><a href="#kelebihan" class="black-text">Kelebihan</a></li>
				<li><a href="#our_team" class="black-text">Tim Kami</a></li>
				@if (session('username'))
				<li><a href="{{ route('logout') }}" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Logout</a></li>
				@else
				<li>
					<a href="#modal1" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4;">Daftar</a>
					<a href="#modal2" class="waves-effect waves-light btn modal-trigger" style="background-color: #6dc02d;">Login</a>
				</li>
				@endif
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
		<li><a href="#apa_itu_ttd">Apa itu TTD?</a></li>
		<li><a href="#cara_penggunaan">Cata Penggunaan</a></li>
		<li><a href="#kelebihan">Kelebihan</a></li>
		<li><a href="#our_team">Tim Kami</a></li>
		@if (session('username'))
		<li><a href="{{ route('logout') }}" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Logout</a></li>
		@else
		<li>
			<a href="#modal1" class="waves-effect waves-light btn modal-trigger" style="background-color: #03a6f4">Daftar</a>
			<a href="#modal2" class="waves-effect waves-light btn modal-trigger" style="background-color: #6dc02d;">Login</a>
		</li>
		@endif
	</ul>

	<!-- slideshow -->
	{{-- <div id="beranda" class="slideshow" style="width: 100%;height: 90.5vh"></div> --}}
		<div id="beranda" class="container-fluid row">
			<div class="col s12" style="padding: 0; margin: 0">
				<img src="{{ asset('assets/img/slider.png') }}" alt="Banner" title="Banner" style="width: 100%;max-height: 90.5vh">
			</div>
		</div>

	<!-- Apa itu TTD -->
	<div id="apa_itu_ttd" class="container valign-wrapper" style="width: 90%;height: 90vh; padding-top: 64px;display: block">
		<div class="row">
			<div class="col m6 s12">
				<img src="{{ asset('assets/img/apa itu.png') }}" alt="apa itu TTD?" title="apa itu TTD?" width="100%">
			</div>
			<div class="col m6 s12">
				<p class="tengah">
					<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">APA ITU TTD?</h4>
					<div style="width: 15%;">
						<hr style="width: 100%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
					</div>
					<p>
						TTD (Tanya Tentang Duit) merupakan salah satu upaya sekaligus solusi bagi kaum millennial untuk meningkatkan pengetahuan dan pemahaman tentang Literasi Finansial atau pengetahuan mengenai keuangan.
					</p>
					<p>
						<span class="row">
							<span class="col s12 valign-wrapper" style="margin-top: 15px">
								<img src="{{ asset('assets/img/icon-line.png') }}" alt="Icon Line" width="26px"> <span style="color: #03a6f4;padding-left: 4px">Line</span>
							</span>
							<span class="col s12 valign-wrapper" style="margin-top: 15px">
								<img src="{{ asset('assets/img/icon-messenger.png') }}" alt="Icon Messenger" width="26px"> <span style="color: #03a6f4;padding-left: 4px">Facebook Messenger</span>
							</span>
							<span class="col s12 valign-wrapper" style="margin-top: 15px">
								<img src="{{ asset('assets/img/icon-telegram.png') }}" alt="Icon Telegram" width="26px"> <span style="color: #03a6f4;padding-left: 4px">Telegram</span>
							</span>
							<span class="col s12 valign-wrapper" style="margin-top: 15px">
								<img src="{{ asset('assets/img/icon-web.png') }}" alt="Icon web" width="26px"> <span style="color: #03a6f4;padding-left: 4px">Website</span>
							</span>
						</span>
					</p>
				</p>
			</div>
			<div class="col s12 center" style="margin-top: 20px; margin-bottom: 20px;">
				<a href="{{ asset('assets/apk/TanyaTentangDuit.apk') }}" class="btn btn-primary" style="background-color: #03a6f4;"><i class="material-icons left">android</i>Download Apk</a>
			</div>
		</div>
	</div>

	<!-- Bagaimana menggunakannya -->
	<div id="cara_penggunaan" class="container-fluid center" style="width: 90; padding-top: 64px">
		<h4 style="font-weight: bold; font-size: 25pt;" class="grey-text text-darken-2">Cara Penggunaannya</h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row" style="padding-top: 5%">
			<div class="col m6 s12">
				<img src="{{ asset('assets/img/alur.png') }}" alt="Alur TTD" width="100%">
			</div>
			<div class="col m6 s12">
				<img src="{{ asset('assets/img/ttd_demo.gif') }}" class="center" alt="TTD Demo" title="TTD Demo" width="65%">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col m12">
					<img src="{{ asset('assets/img/alur2.jpg') }}" alt="Alur TTD" width="100%">
				</div>
			</div>
		</div>
	</div>

	<!-- Kelebihan -->
	<div id="kelebihan" class="container center" style="width: 80%;padding-top: 64px">
		<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2">Kelebihan dan Keunggulan</h4>
		<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
		<div class="row">
			<div class="col l4 m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;height: 219px">
						<img src="{{ asset('assets/img/time.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Pelayanan 24 Jam</span>
					</div>
				</div>
			</div>
			<div class="col l4 m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;height: 219px">
						<img src="{{ asset('assets/img/cepat.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Respon Cepat</span>
					</div>
				</div>
			</div>
			<div class="col l4 m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;height: 219px">
						<img src="{{ asset('assets/img/interaksi.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Kemudahan Interaksi</span>
					</div>
				</div>
			</div>
			<div class="col l4 m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;height: 219px">
						<img src="{{ asset('assets/img/detail.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Jawaban yang Detail</span>
					</div>
				</div>
			</div>
			<div class="col l4 m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;height: 219px">
						<img src="{{ asset('assets/img/platform.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Compatible di Semua Operating System</span>
					</div>
				</div>
			</div>
			<div class="col l4 m6 s12">
				<div class="card hoverable" style="border-radius: 10px;">
					<div class="card-image" style="padding-left: 60px;padding-right: 60px;height: 219px">
						<img src="{{ asset('assets/img/nabung.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title grey-text text-darken-2" style="font-weight: 500; font-size: 16pt">Pengetahuan Mengenai Financial Literacy</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tim Kami -->
	<div id="our_team" class="container-fluid center" style="background-color: #03a6f4;padding-top: 20px">
		<h4 style="font-weight: bold; font-size: 25pt" class="white-text">Tim Kami</h4>
		<hr style="width: 10%;height: 10px;background-color: white;border-radius: 50px;border:none;">
		<div class="row container">
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;height: 189px">
						<img src="{{ asset('assets/img/ka_fandy.png') }}">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Fandy Septiana</span>
					</div>
				</div>
			</div>
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;height: 189px">
						<img src="{{ asset('assets/img/ilham.png') }}" title="Muhamad Ilham Sihabudin" alt="Muhamad Ilham Sihabudin">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Muhamad Ilham Sihabudin</span>
					</div>
				</div>
			</div>
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;height: 189px">
						<img src="{{ asset('assets/img/reta.png') }}" title="Siti Syahda Rana Areta" alt="Siti Syahda Rana Areta">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Siti Syahda Rana Areta</span>
					</div>
				</div>
			</div>
			<div class="col m3 s6">
				<div class="card transparent" style="box-shadow: none">
					<div class="card-image" style="padding: 20px;height: 189px">
						<img src="{{ asset('assets/img/tedi.png') }}" title="Tedi Alamsyah" alt="Tedi Alamsyah">
					</div>
					<div class="card-content white-text" style="height: 125px;">
						<span class="card-title white-text" style="font-weight: 500; font-size: 14pt">Tedi Alamsyah</span>
					</div>
				</div>
			</div>
		</div>
		<footer>
		<div class="footer-copyright valign-wrapper" style="background-color: #0b7cb3;height: 50px">
			<div class="container center white-text">
				© 2018 Copyright SMK WIKRAMA Bogor
			</div>
		</div>
	</footer>
	</div>
	

	{{-- Modal Daftar --}}
	<div id="modal1" class="modal modal-fixed-footer">
		<form id="val-form" action="{{ route('daftar.store') }}" method="POST">
			{{csrf_field()}}
			<div class="modal-content">
				<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2 center">DAFTAR</h4>
				<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
				<div class="row">
					<div class="input-field col s12">
						<input id="nama_lengkap" name="nama_lengkap" type="text" class="validate" required>
						<label for="nama_lengkap">Nama Lengkap</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="email" name="email" type="email" class="validate" required>
						<label for="email">Email</label>
					</div>
					<div class="input-field col s12 m6">
						<input id="no_hp" name="no_hp" type="number" data-length="13" class="validate" required>
						<label for="no_hp">No Handphone</label>
					</div>
					<p class="col s12">Jenis Kelamin</p>
					<div class="col m6 s12">
						<label>
							<input class="with-gap" name="jk" type="radio" value="Laki-Laki" checked/>
							<span>Laki-Laki</span>
						</label>
					</div>
					<div class="col m6 s12">
						<label>
							<input class="with-gap" name="jk" type="radio" value="Perempuan"/>
							<span>Perempuan</span>
						</label>
					</div>
					<p class="col s12">Tempat Tinggal</p>
					<div class="input-field col s12 m6">
						<select id="provinsi" name="id_provinsi" required>
							<option value="" disabled selected>Choose your option</option>
							@foreach($provinsi as $row)
							<option value="{{ $row->id }}">{{ $row->name }}</option>
							@endforeach
						</select>
						<label>Provinsi</label>
					</div>
					<div class="input-field col s12 m6">
						<select id="show_kota" name="id_kota" required>
							<option value="" disabled selected>Choose your option</option>
							<option value="">-</option>
						</select>
						<label>Kota</label>
					</div>
					<div class="input-field col s12">
						<input id="tgl_lahir" type="date" name="tgl_lahir" class="validate" max="2010-12-31" required>
						<label for="tgl_lahir">Tanggal Lahir</label>
					</div>
					<div class="input-field col s12">
						<input id="password" type="password" name="password" class="validate" required>
						<label for="password">Password</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
				<button id="val-button" type="submit" class="btn waves-effect btn-primary" style="background-color: #03a6f4">Daftar</button>
			</div>
		</form>
	</div>

	<!-- Modal Login -->
	<div id="modal2" class="modal">
		<form id="val-form" action="{{ route('login.user') }}" method="POST">
			{{ csrf_field() }}
			<div class="modal-content">
				<h4 style="font-weight: bold; font-size: 25pt" class="grey-text text-darken-2 center">LOGIN</h4>
				<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
				<div class="row">
					<div class="input-field col s12">
						<input id="log_email" name="log_email" type="email" class="validate" required>
						<label for="log_email">Email</label>
					</div>
					<div class="input-field col s12">
						<input id="password" name="password" type="password" class="validate" required>
						<label for="password">Password</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button id="val-button" type="submit" class="btn col s12" style="background-color: #03a6f4">Login</button>
			</div>
		</form>
	</div>

	{{-- Chatbot Web --}}
	@if (session('username'))
	<div id="qiscus-widget" style="position: absolute"></div>
	@endif

	<script src="https://qiscus-sdk.s3-ap-southeast-1.amazonaws.com/web/v2.6.5/qiscus-sdk.2.6.5.js"></script>
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
	<script src="{{ asset('assets/js/vegas.min.js') }}"></script>
	<script>
		@if (session('message'))
			alert('{{ session('message') }}')
		@endif
		
		@if (session('username'))
		var e = null,
		t = null,
		r = null,
		n = null
		for (
			var s = null,
			a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
			c = 0;
			c < 5;
			c++
			)
			s += a.charAt(Math.floor(Math.random() * a.length));
		var o = Date.now(),
		i = {
			user_id: s + "@wallstreetenglish.co.id",
			user_key: o,
			user_name: "WSE Guest - " + o,
			avatar:
			"http://imgbox.com/nBk8jJqW"
		};
		e = i.user_id,
		t = i.user_key,
		r = i.user_name,
		n = i.avatar;
		QiscusSDK.core.init({
			AppId: 'ttd-hreuyv0hatzfirimn',
			options: {
				avatar: 'https://imgbox.com/nBk8jJqW',
				loginSuccessCallback: function() {
      // Do something after successfully login
      QiscusSDK.core.UI.chatTarget("ranaaretasitisyahda@gmail.com");
  }
}
});
		QiscusSDK.core.setUser(e, t, r, n);
		QiscusSDK.render();
		@endif

		$(document).ready(function(){
			$('.sidenav').sidenav();
			$('.modal').modal();
			$('input#no_hp').characterCounter();

			$('select').formSelect();

			if ($(this).scrollTop() > 0) {
				$('#navbar').css("position","fixed");
				$('.slideshow').css("padding-top","64px");
			} else {
				$('#navbar').css("position","relative");
				$('.slideshow').css("padding-top","0");
			}

		});

		//select provisi $ kota
		$('#provinsi').change(function() {
			var provinsi_id = $(this).val();

			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				type: 'POST',
				url: '{{ route('show_kota') }}',
				data: 'provinsi_id='+provinsi_id,
				success: function (response) {
					$('#show_kota').html(response);
					$('select').formSelect();
				}
			});
		});

		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 0) {
					$('#navbar').css("position","fixed");
					$('.slideshow').css("padding-top","64px");
				} else {
					$('#navbar').css("position","relative");
					$('.slideshow').css("padding-top","0");
				}
			});
		});

		$(".slideshow").vegas({
			slides: [
			{ src: "{{ asset('assets/img/slider.png') }}" },
			{ src: "{{ asset('assets/img/slider.jpg') }}" },
			{ src: "{{ asset('assets/img/slider.png') }}" },
			],
			transition: ['fade'],
		});

		//Smooth Scroll
		$(function(){
			$('a[href^="#"]').on('click', function(e){
				$target = $(this.hash);
				$jarak = 0;
				$('html, body').stop().animate(
				{
					'scrollTop' : $target.offset().top - $jarak
				},
				    1000, //durasi dalam milisekon
				    'swing', //efek transisi (opsi : swing / linear)
				    function(){
				    	window.location.hash = target;
				    }
				    );
			});
		});
		
		//form validation
		$('#val-form').on('submit', function () {
	        $('#val-button').attr('disabled', 'true');
	    });
	</script>
</body>
</html>