<?php 

session_start();

include('koneksi.php');


$nik  = htmlspecialchars($_SESSION['nik']);
$tanggal = htmlspecialchars($_POST['tanggal']);
$waktu = htmlspecialchars($_POST['waktu']);
$suhu = htmlspecialchars($_POST['lokasi']);
$lokasi = htmlspecialchars($_POST['suhu']);

    $query = "INSERT INTO catatan_perjalanan VALUES ('', '$nik', '$tanggal', '$waktu', '$lokasi', '$suhu')";
    $execute = mysqli_query($koneksi, $query);

if($execute)
{
    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>SUCCESS!</strong> Menambahkan Data.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    header('location: form.php');
    exit;
}else
{
    $_SESSION['failed'] = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>FAILED!</strong> Menambahkan Data.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    header('location: form.php');
}


?>