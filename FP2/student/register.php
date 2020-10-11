<?php 
    session_start();
    include 'koneksi.php';
?>
<html>
    <head>
        <style>
            #register-student::before{
                content: "";
                position: fixed;
                left: 0;
                right: 0;
                z-index: -1;
                display: block;
                background-image: url(../assets/img/carousel/5.jpg);
                filter: brightness(65%);
                background-repeat: no-repeat;
                background-size:cover;
                width: 100%;
                height: 100%;
            }
        </style>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    </head>
    <body>
        <div class="container-fluid" id="register-student">
            <div class="container" style="padding-top:40px;">
                <div class="row align-items-center justify-content-start text-left">
                    <div class="col wow fadeInLeft" style="color:white;">
                        <img src="../assets/img/logo/logo_putih_pas.png" style="width:30%;">
                    </div>
                </div>
                <div class="row align-items-center justify-content-start text-left">
                    <div class="col-sm-4 wow fadeInLeft">
                        <div class="card rounded border-0" style="background-color:rgba(255,255,255,0);">
                            <div class="card-body" style="color:white;">
                                <h1 style="color:white;font-weight:276;font-size:40px;">Student Register</h1>
                                <form method="post" action="#">
                                      <div class="form-group" style="padding-top:32px;">
                                          <input type="text" class="form-control" name="name" required autofocus placeholder="Nama Lengkap Anda">
                                      </div>
                                      <div class="form-group">
                                          <input type="email" class="form-control" name="email" required autofocus placeholder="Email Anda">
                                      </div>
                                      <div class="form-group">
                                          <input type="password" class="form-control" name="password" required placeholder="Password Baru Anda">
                                      </div>
                                      <div class="form-group">
                                          <input type="submit" name="register-student" class="btn btn-primary" value="Daftar">
                                      </div>
                                      <div class="form-group">
                                          <p style="color:white;font-size:19px;">
                                             Sudah Punya Akun? Klik di <a href="login.php" class="" style="text-decoration: none; color:white;"><b>Sini</b></a><br>
                                             Mau daftar jadi employer? Klik di <a href="../company/register.php" style="text-decoration: none!important; color:white;"><b>Sini</b></a>
                                          </p>
                                      </div>
                                </form>
                                <br>
                                <a href="index.php"><img src="../assets/img/logo/logo%20putih.png" style="padding-bottom:20px;"></a>
                                <h6>Copyright &copy; 2020 Ayo Magang</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script>jQuery(document).ready(function() { new WOW().init(); });</script>
</html>