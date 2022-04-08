<?php 

include 'koneksi.php';

$hapus = $_GET['id'];

var_dump($hapus);

$query = "DELETE FROM catatan_perjalanan WHERE id_catatan='$hapus'";
$execute = mysqli_query($koneksi, $query);

if($execute)
{
    header('Location: admin.php');
    exit;
}else
{
    echo "errror";
}

?>