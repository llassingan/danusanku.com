<?php
    session_start();
    if($_SESSION['status'] != "login"){
      header("location: ../view/login.php?pesan=belum_login");
    }
    include '../model/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <link rel="icon" type="image/x-icon" href="../img/logowhite.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap-social.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        
    <title>Edit - Danusanku</title>
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
                <li class="nav-item ">
                    <a class="nav-link" href="./show.php"> <span class="fa fa-home fa-lg mr-1"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listitem.php"><span class="fa fa-list fa-lg mr-1"></span>Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php"><span class="fa fa-address-card fa-lg mr-1"></span>Profile</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
    
        <div class="row row-content" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="col-12" >
           <h3>Edit Produk</h3>
        </div>
        
         <div class="col-12 col-md-9">
            <form method="POST" action="../controller/editing.php">
             <div class="form-group row">
                    <?php $data = $mysqli->query("SELECT * FROM `transaksi` where `id` = '".$_GET['id']."' ");
                    $d = $data->fetch_array(); ?>
                 <label for="produk" class="col-md-2 col-form-label">Produk</label>
                 <div class="col-md-6">
                      <input type="text" class="form-control" name="produk" value="<?php echo $d['produk']; ?>" disabled>
                 </div>
             </div>
             <div class="form-group row">
                 <label for="kuantitas" class="col-md-2 col-form-label">Kuantitas</label>
                 <div class="col-md-3">
                     <input type="number" class="form-control" name="kuantitas" placeholder="Jumlah Produk" value="<?php echo $d['kuantitas']?>">
                 </div>
             </div>
             <input type="number" class="form-control" name="id" value="<?php echo $_GET['id'] ?>" hidden>
            
             <div class="form-group row">
                 <div class="offset-md-2 col-md-10">
                     <button type="submit" class="btn btn-primary">Edit Produk</button>
                     
                 </div>
             </div>
            </form>
         </div>
        
                <div class="col-12 col-md">
                </div>
        
    </div>
</div>
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./show.php">Home</a></li>
                        <li><a href="./listitem.php">Menu</a></li>
                        <li><a href="./login.php">Login</a></li>
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