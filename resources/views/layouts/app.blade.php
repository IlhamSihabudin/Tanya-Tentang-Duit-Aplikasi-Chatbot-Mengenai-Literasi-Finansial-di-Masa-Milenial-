<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<style>
		body{
			padding: 0;
			margin: 0;
			font-family: 'Montserrat', sans-serif;
		}
	</style>
</head>
<body>
	@yield('content')


	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/materialize.min.js') }}"></script>
	<script src="{{ asset('assets/js/vegas.min.js') }}"></script>
	<script>
		//
	</script>
</body>
</html>