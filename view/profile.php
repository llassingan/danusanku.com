<?php
    session_start();
    if($_SESSION['status'] != "login"){
      header("location: login.php?pesan=belum_login");
    }
    include '../model/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
            <!-- Required meta tags always come first -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/profile.css">
            <link rel="stylesheet" href="../css/bootstrap-social.css">
            <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
            
        <title>Profile - Danusanku</title>
 
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="./show.php"><img src="../img/logowhite.png" alt="" height="45" width="60"></a>
            <div class="collapse navbar-collapse" id="Navbar">
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./show.php"> <span class="fa fa-home fa-lg mr-1"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listitem.php"><span class="fa fa-list fa-lg mr-1"></span>Menu</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./profile.php"><span class="fa fa-address-card fa-lg mr-1"></span>Profile</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div id="kiri" class="col-12 col-sm-6 justify-content-center" style="float:left; margin-top: 150px">
                <object data="your-svg-image.svg" type="image/svg+xml"> 
                    <img class="img-fluid" src="../img/logo.png">
                </object>
            </div>
            <div id="kanan" class="col-12 col-sm-6  " style="float:right; margin-top: 150px">
                <h1 style="text-align: center; font-size: 4em">Selamat Datang <b><?php echo $_SESSION['nama'] ?></b>!</h1>
                <div class="row mt-4" id="tombolnya">
                    <div class="d-flex col-12 col-sm-4 justify-content-center mt-2">
                        <a href="./buy.php" class="btn btn-outline-primary btn-xl" type="button">Beli Danusan</a>
                    </div>
                    <div class="d-flex col-12 col-sm-4 justify-content-center mt-2">
                        <a href="../controller/logout.php" class="btn btn-outline-secondary btn-xl" type="button">Log Out</a>
                    </div>
                    <div class="d-flex col-12 col-sm-4 justify-content-center mt-2">
                        <a href="./listitem.php" class="btn btn-outline-primary btn-xl" type="button">Daftar Danusan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
    <div class="container">
        <div class="row">             
            <div class="col-4 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="./show.html">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="./login.html">Login</a></li>
                </ul>
            </div>
            <div class="col-7 col-sm-5">
                <h5>Alamat Kami</h5>
                <address>
                    Jalan Telekomunikasi, No. 1<br>
                    Dayeuhkolot, Bandung<br>
                    INDONESIA<br>
                    <i class="fa fa-phone fa-lg"></i> : +87757154939<br>
                    <i class="fa fa-envelope fa-lg"></i> : <a href="mailto:almanik.balingga3@gmail.com">kontak@danusanku.com</a>
                 </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center">
                <div class="text-center r">
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                    <a class="btn btn-social-icon " href="mailto:almanik.balingga3@gmail.com"><i class="fa fa-envelope-o fa-lg"></i></a>
                </div>
            </div>
       </div>
       <div class="row justify-content-center mt-2">             
            <div class="col-auto">
                <h6>© Copyright 2020 @Danusanku</h6>
            </div>
       </div>
        </div>
    </footer>

<script src="../script/jquery.slim.min.js"></script>
<script src="../script/popper.min.js"></script>
<script src="../script/bootstrap.min.js"></script>
</body>
</html>