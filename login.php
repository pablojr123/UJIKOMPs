<?php 

session_start();

if(isset($_SESSION['nik']))
{
    if(isset($_SESSION['admin']))
    {
        header('Location: admin.php');
        
    }else if(isset($_SESSION['user']))
    {
        header('Localtion: user.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peduli Diri-Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#nik").keypress(function (e) {
                var keyCode = e.keyCode || e.which;
    
                //Regex for Valid Characters i.e. Numbers.
                var regex = /^[0-9]+$/;
    
                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#nik_err").show();
                }
                return isValid;
            });
        });
        $( document ).ready(function() {
                $( "#txtOnly" ).keypress(function(e) {
                    var key = e.keyCode;
                    if (key >= 48 && key <= 57) {
                        e.preventDefault();
                        $("#txt_err").show();
                    }
                });
            });
    </script>
</head>

<body style="background-color: #5D5FEF;">

    <div class="container" style="margin-top: 200px">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">LOGIN</h1>
                                        <center>
                                            <img src="icons/profile.svg" alt="">
                                        </center>
                                        <p>Silahkan Masukan Data Diri Anda</p>
                                    </div>
                                    <form class="user" method="post" action="process_login.php">
                                        <div class="form-group">
                                            <input name="nik" required type="text" class="form-control form-control-user"
                                                id="nik" aria-describedby="emailHelp"
                                                placeholder="Masukan NIK Anda..." style="border: 3px solid #5D5FEF; border-radius: 100px;">
                                                <span id="nik_err" style="color: green; display:none; font-size: 15px;">Hanya Angka yang diizinkan</span>
                                        </div>
                                        <div class="form-group">
                                            <input name="nama_lengkap" required type="text" class="form-control form-control-user"
                                                id="txtOnly" placeholder="Masukan Nama Lengkap Anda" style="border: 3px solid #5D5FEF; border-radius: 100px;">
                                                <span id="txt_err" style="color: green; display:none; font-size: 15px;">Hanya Huruf yang diizinkan</span>
                                        </div>    
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                           <i class="fa fa-spinner" ></i>Login
                                        </button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Belum punya akun?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <img src="" alt="">

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>