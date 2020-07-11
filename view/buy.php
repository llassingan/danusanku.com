<?php error_reporting (E_ALL ^ E_NOTICE); ?>
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
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
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
                    <a class="nav-link" href="./profile.html"><span class="fa fa-address-card fa-lg mr-1"></span>Profile</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
    <div class="row row-content">
        <div class="col-12">
            <h3>Daftar Produk</h3>
        </div>
        <?php
        $data = $mysqli->query("SELECT * FROM `produk`");
        while ($d = $data->fetch_array()){?>
        <div class="col-12 col-sm-3 mt-2">
            <div class="card" id="thisform"> 
                <h6 class="card-header bg-primary text-white"><?php echo $d['namabrg']; ?> </h6>
                <img class="card-img-top img-fluid" src="<?php echo $d['gambar']; ?>" alt="Card image cap">
                <div class="card-body">
                    <div class="col-12 mb-1">
                        <p><?php echo $d['vendor']; ?></p> 
                    </div>
                    <div class="col-12">
                        <div class="input-group-append">
                            <a href="#formbeli" class="btn btn-primary" type="button">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
          
    </div>
    
        <div class="row row-content" id="formbeli">
        <div class="col-12" >
           <h3 >Beli Produk</h3>
           <h5>Mohon isi form pembelian dibawah</h5>
        </div>
        
         <div class="col-12 col-md-9">
            <form method="POST" action="../controller/creating.php">
             <div class="form-group row">
                 <label for="produk" class="col-md-2 col-form-label">Produk</label>
                 <div class="col-md-6">
                    <select class="form-control" name="produk">
                        <?php foreach ($data as $d ) {?>
                        <option value="<?php echo $d['namabrg']; ?>"><?php echo $d['namabrg'];  ?></option>
                        <?php } ?>
                      </select>
                 </div>
             </div>
             <div class="form-group row">
                 <label for="kuantitas" class="col-md-2 col-form-label">Kuantitas</label>
                 <div class="col-md-3">
                     <input type="number" class="form-control" name="kuantitas" placeholder="Jumlah Produk">
                 </div>
             </div>
             <input type="text" class="form-control" name="user" value="<?php echo $_SESSION['username'] ?>" hidden>
            
             <div class="form-group row">
                 <div class="offset-md-2 col-md-10">
                     <button type="submit" class="btn btn-primary">Beli Produk</button>
                     
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="../script/jquery.slim.min.js"></script>
    <script src="../script/popper.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</body>

</html>