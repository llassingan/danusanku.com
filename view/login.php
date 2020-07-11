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
        <link rel="stylesheet" href="../css/login.css">
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
                    <a class="nav-link" href="./show.php"> <span class="fa fa-home fa-lg mr-1"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listitem.php"><span class="fa fa-list fa-lg mr-1"></span>Menu</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./login.php"><span class="fa fa-sign-in fa-lg mr-1"></span>Login</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>
    
    <div class="simple-login-container">
    
        
        <h2>Login </h2>
        <form action="../controller/logging_in.php" method="POST">
            <?php
            if (isset($_GET['pesan'])) {
                if($_GET['pesan'] == "belum_login"){
                    echo "<div class='alert alert-danger' style='margin-top: 3px'><div class='header'><b><i class='fa fa-exclamation-circle'></i> ERROR</b> Anda Belum Login!</div></div>";
                }elseif($_GET['pesan'] == "logout"){
                    echo "<div class='alert alert-danger' style='margin-top: 3px'><div class='header'><b><i class='fa fa-exclamation-circle'></i> Berhasil</b> Anda Berhasil Logout!</div></div>";
                }elseif($_GET['pesan'] == "loginfailed"){
                     echo "<div class='alert alert-danger' style='margin-top: 3px'><div class='header'><b><i class='fa fa-exclamation-circle'></i> ERROR</b> Username atau password salah!</div></div>";
                }
            }

        ?>
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
            <label  class="col-12 col-form-label"></label>
            <div class="d-flex col-md-12 form-group ">
                <button type="submit" class=" btn btn-block  thisbtnlogin">Masuk</button>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-6 ">
                <a href="#">Lupa Password?</a>
            </div>
            <div class="col-md-6 regist">
                <a href="./signup.php">Belum Punya Akun?</a>
            </div>
        </div>
        </form>
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