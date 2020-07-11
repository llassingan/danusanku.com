<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
    session_start();
    if($_SESSION['status'] == "login"){
      header("location: ../view/profile.php");
    }
    include '../model/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <script src="../script/jquery.slim.min.js"></script>
        <script src="../script/popper.min.js"></script>
        <script src="../script/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/signup.css">
        <link rel="stylesheet" href="../css/bootstrap-social.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        
    <title>Danusanku</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="../img/logowhite.png" alt="" height="45" width="60"></a>
            <div class="collapse navbar-collapse" id="Navbar">
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="./show.html"> <span class="fa fa-home fa-lg mr-1"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><span class="fa fa-list fa-lg mr-1"></span>Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.html"><span class="fa fa-sign-in fa-lg mr-1"></span>Login</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>
    

    <div class="simple-login-container">
        <h2>Daftar</h2>
        <form action="../controller/register.php" method="POST">
        <div class="row">
            <label for="username" class="col-12 col-form-label">Username</label>
            <div class="col-md-12 form-group">
                <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
            </div>
        </div>
        <div class="row">
            <label for="password" class="col-12 col-form-label">Password</label>
            <div class="col-md-12 form-group">
                <input type="password" placeholder="Masukkan Password" name="password" class="form-control">
            </div>
        </div>
        <div class="row">
            <label for="email" class="col-12 col-form-label">Nama Lengkap</label>
            <div class="col-md-12 form-group">
                <input type="text" placeholder="Masukkan Nama" name="nama" class="form-control">
            </div>
        </div>
        <div class="row">
            <label for="email" class="col-12 col-form-label">E-mail</label>
            <div class="col-md-12 form-group">
                <input type="email" placeholder="Masukkan E-mail" name="email" class="form-control">
            </div>
        </div>
        <div class="row">
            <label for="organisasi" class="col-12 col-form-label">Organisasi</label>
            <div class="col-md-12 form-group">
                <input type="text" placeholder="Masukkan Organisasi" name="organisasi" class="form-control">
            </div>
        </div>
        <div class="row">
            <label for="kampus" class="col-12 col-form-label">Kampus</label>
            <div class="col-md-12 form-group">
                <input type="text" placeholder="Masukkan Kampus" name="kampus" class="form-control">
            </div>
        </div>
        <div class="row">
            <label  class="col-12 col-form-label"></label>
            <div class="d-flex col-md-12 form-group justify-content-center">
                <button type="submit" class=" btn btn-block  thisbtnlogin">Daftar</button>
            </div>
        </div>
    </form>
        <div class="row">
            <div class="col-md-12 ">
                <a href="./login.html">Sudah Punya Akun?</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            
           <div class="row justify-content-center mt-2">             
                <div class="col-auto">
                    <h6>© Copyright 2020 @Danusanku</h6>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
</body>

</html>