<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>TTD | Tanya Tentang Duit</title>
	<link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
	<style>
	body{
		padding: 0;
		margin: 0;
		font-family: 'Montserrat', sans-serif;
	}
</style>
</head>
    <h2>Terima Kasih Sudah Mendaftar Pada Website Kami</h2>
    <p>
        Berikut akun anda
    </p>
    <p>
        Email : {{ $email }}
    </p>
    <p>
        Password : {{ $password }}
    </p>

	<img src="http://tanyatentangduit.xyz/assets/img/barcode.png" alt="Gambar Barcode">

<body>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script>
		//
	</script>
</body>
</html>
