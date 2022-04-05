<?php 

include('koneksi.php');


if(isset($_POST['submit']))
{
    if($_POST['nik'] == "" && $_POST['nama_lengkap'] == "")
    {
        echo "<script>alert('Register Gagal Silakan Coba Lagi')</script>";
        header('Location: register.php');
        exit;
    }else{
        $nik = htmlspecialchars($_POST['nik']);
        $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);

        $query = "INSERT INTO user VALUES('$nik', '$nama_lengkap', 'user')";
        $execute = mysqli_query($koneksi, $query);

        if($execute)
        {
            echo "<script>alert('Register Berhasil Silakan Login')</script>";
        }else
        {
            echo "<script>alert('Register Gagal Silakan Coba Lagi')</script>";
            header('Location: register.php');
            exit;
        }
    }
}
?>