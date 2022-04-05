<?php 

session_start();

include 'koneksi.php';


$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];


$login = mysqli_query($koneksi,"SELECT * FROM user WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");

$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $nama_lengkap;
        $_SESSION['admin'] = "admin";
        $_SESSION['nik'] = $data['nik'];
		header("location: admin.php");

	}else if($data['level']=="user"){
		$_SESSION['username'] = $nama_lengkap;
        $_SESSION['user'] = "user";
        $_SESSION['nik'] = $data['nik'];
		header("location: dashboard.php");
	}else{
		header("location:login.php");
	}	
}else{
	header("location:login.php");
}

?>