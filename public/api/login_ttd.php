<?php 
 require_once 'koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	
 	$base = base64_encode($password);

 	$sql = "SELECT * FROM pendaftarans WHERE email = '$email' AND password = '$base'";
 	$query = mysqli_query($konek, $sql);
 	$row = mysqli_num_rows($query);
 	if ($row > 0) {
 		while ($fetch = mysqli_fetch_object($query)) {
 			$data = array("kode" => 1, "pesan" => "data Ada", "result" => array(
 					array("nama" => $fetch->nama_lengkap, "email" => $fetch->email)
 			));
 			echo json_encode($data);
 		}
 	}else{
 		echo json_encode(array("kode" => 0, "pesan" => "Data user tidak ada"));
 	}
 }
 else
 {
 	 echo json_encode(array('kode' =>0, 'pesan' => 'request tidak valid'));
 }

 ?>