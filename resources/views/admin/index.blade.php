<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TTD | Admin Login</title>
	<link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<style>
	body{
		overflow-y: hidden;
		padding: 0;
		margin: 0;
		font-family: 'Montserrat', sans-serif;
	}
</style>
</head>
<body bgcolor="#03a6f4">
	<div class="row">
		<div class="col l4 m6 s12 white center" style="height: 100vh;padding-top: 8%">
			<h4 style="font-weight: bold; font-size: 35pt" class="grey-text text-darken-2">TTD</h4>
			<hr style="width: 10%;height: 10px;background-color: #03a6f4;border-radius: 50px;border:none;">
			
			<div class="container">
				<form action="{{ route('login.admin') }}" method="POST">
					{{ csrf_field() }}
					<div class="row">
						<div class="input-field col s12">
							<input id="username" name="username" type="text" class="validate" required>
							<label for="username">Username</label>
						</div>
						<div class="input-field col s12">
							<input id="password" name="password" type="password" class="validate" required>
							<label for="password">Password</label>
						</div>
						<div class="input-field col s12">
							<button type="submit" class="btn col s12" style="background-color: #03a6f4">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div

	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
	<script>
		@if (session('message'))
			alert('{{ session('message') }}')
		@endif
	</script>
</body>
</html>