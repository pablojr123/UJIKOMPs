<?php session_start();

include "koneksi.php";

if(!isset($_SESSION['admin']))
{
  header('Location: login.php');
  exit;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <title>CATATAN</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="icons/logo.svg" alt="">Peduli Diri</a>
      <a class="navbar-brand" href="#"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data_user.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">Table Data</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" style="background-color: white; border-radius: 7px; color: black" href="logout.php">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="jumbotron" style="background-color: white;">
      <h1 class="display-4"> <img src="icons/profile.svg" alt=""><?= $_SESSION['username']?></h1>
        <p class="lead">Catatan Perjalanan</p>
        <hr class="my-4">
      </div>
      <div class="box-tanggal">
        <label for="tanggal" style="font-weight: bold; margin: 10px;">
            Cetak data catatan perjalanan
        </label>
        <a class="nav-link" style="background-color: #5D5FEF; border-radius: 7px; float: right; color: white;" href="cetak.php">CETAK</a>
      </div>
      <div class="table-catatan">
        <table id="example" class="display">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NIK</th>
                <th scope="col">TANGGAL</th>
                <th scope="col">WAKTU</th>
                <th scope="col">TUJUAN</th>
                <th scope="col">SUHU TUBUH</th>
                <th scope="col">AKSI</th>
            </tr>
            </thead>
            <tbody>
             <?php 
             $select="SELECT * FROM catatan_perjalanan";
             $execute = mysqli_query($koneksi, $select);
             $nomer=0;
             while ($hasil = mysqli_fetch_array ($execute)):
                     $id_catatan  = stripslashes($hasil['id_catatan']);
                     $nik       = stripslashes ($hasil['nik']);
                     $tanggal         = stripslashes ($hasil['tanggal']);
                     $waktu         = stripslashes ($hasil['waktu']);
                     $tujuan         = stripslashes ($hasil['lokasi']);
                     $suhu         = stripslashes ($hasil['suhu']);
                 
             
                 $nomer++;
             ?>
              <tr>
                <th scope="row"><?= $nomer ?></th>
                <td><?= $nik ?></td>
                <td><?= $tanggal ?></td>
                <td><?= $waktu ?></td>
                <td><?= $tujuan ?></td>
                <td><?= $suhu ?></td>
                <td><a href="hapus_process.php?id=<?= $id_catatan ?>"><img src="icons/hapus.png" alt=""></a></td>
              </tr>
              <?php endwhile;?>
            </tbody>
          </table>
        </div>
        <footer id="sticky-footer" class="footer flex-shrink-0 py-4 text-white-50" style="margin-top: 300px">
          <center>
            <small>?? 2000 - Company, Inc. All rights reserved. Address Address</small>
          </center>
        </footer>
      </body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="http://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
      <script src="http://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
      <script>       
              $(document).ready( function () {
                   $('#example').DataTable();
                  });
      </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

  

