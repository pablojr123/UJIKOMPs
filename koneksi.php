<?php 
$koneksi = mysqli_connect("localhost","root","","peduli_diri");
 
// mengecek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>