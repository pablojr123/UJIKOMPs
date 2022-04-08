<?php 

include('koneksi.php');


if(isset($_POST['submit']))
{
    if($_POST['nik'] == "" && $_POST['nama_lengkap'] == "")
    {
        header('Location: register.php');
        exit;
    }else{
        $nik = htmlspecialchars($_POST['nik']);
        $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);

        $query = "INSERT INTO user VALUES('$nik', '$nama_lengkap', 'user')";
        $execute = mysqli_query($koneksi, $query);

        if($execute)
        {
            header('Location: login.php');
        }else
        {
            header('Location: login.php');
            exit;
        }
    }
}
?>