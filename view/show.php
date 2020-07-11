
<?php
include '../model/connect.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
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
            <a class="navbar-brand" href="#"><img src="../img/logowhite.png" alt="" height="45" width="60"></a>
            <div class="collapse navbar-collapse" id="Navbar">
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./show.html"> <span class="fa fa-home fa-lg mr-1"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./listitem.php"><span class="fa fa-list fa-lg mr-1"></span>Menu</a>
                </li>
                
                <?php
                   if($_SESSION['status'] != "login"){
                        echo "<li class='nav-item'><a class='nav-link' href='./login.php'><span class='fa fa-sign-in fa-lg mr-1'></span>Login</a></li>";
                    }    
                    else{
                            echo "<li class='nav-item'><a class='nav-link' href='./profile.php'><span class='fa fa-address-card fa-lg mr-1'></span>Profile</a></li>";
                        }
                    ?>
                

            </ul>
        </div>
        </div>
    </nav>
    <!-- I,m using css styling -->
    <header class="jumbo">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-8">
                    <h1>Danusanku</h1>
                    <p>Cara baru berdanus. Kami menyediakan sistem danus yang mudah, cepat, dan pastinya akan membuat kebutuhan keuangan organisasi Anda terpenuhi! </p>
                </div>
                
                <div class="d-flex col-12 col-sm-4 justify-content-center">
                    <div class="container">
                    <div class="row justify-content-center mb-3">
                        <img src="../img/logowhite.png" class="img-fluid" alt="Logo" height="200" width="200">
                    </div>
                    <div class="row justify-content-center" id="danuskuy">
                        <a href="#thisform" type="button" class="btn btn-sm btn-outline-primary">Mari Bergabung</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Untuk Anda yang Terlanjur Berorganisasi</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img src="../img/logo.png" class="d-flex mr-3 img-thumbnail align-self-center" alt="" height="110" width="110">
                    <div class="media-body">
                        <h2 class="mt-0">Gorengan <span class="badge badge-danger">HOT</span></h2>
                        <p class="d-none d-sm-block">Jumlahnya banyak, rasanya kadang enak kadang standar (tapi lebih sering standar) dan harus dijual habis dalam sehari (Lifetimenya cuma sehari) Cocok untuk anda yang baru masuk organisasi</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>Anda Harus Jadi Selebgram</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                    
                    <div class="media-body">
                        <h2>Metode Paid Promote<span class="badge badge-danger">NEW</span></h2>
                        <p class="d-none d-sm-block">Jenis danusan ini akna meramaikan konten Instagram anda dengan berbagai promosi produk dari customer anda yang kadang berisi produk MLM (Multi Level Marketing). Namun, Anda tetap harus memposting konten tersebut karena sudah terikat kontrak (yang terbilang murah)</p>
                    </div>
                    <img src="../img/logo.png" class="d-flex mr-3 img-thumbnail align-self-center" alt="" height="110" width="110">
                </div>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Apa Kata Mereka?</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <div class="media">
                    <img src="../img/logo.png" class="d-flex mr-3 img-thumbnail align-self-center" alt="" height="110" width="110">
                    <div class="media-body">
                        <h2 class="mt-0">Covidpunten Lee-Buran</h2>
                        <h4>Divisi Danus</h4>
                        <p class="d-none d-sm-block">Kami sudah berusaha sebaik mungkin untuk mendatangkan vendor gorengan berkualitas yang bisa datang tepat waktu pukul 06.30 pagi agar teman teman tidak terlambat kuliah karena harus mengambil (dan kadang membungkus) danus.</p>
                    </div>
                </div> 
                
            </div>
        </div>

        <div class="col-sm-8 offset-md-2 mb-3 mt-3">
            <div class="card" id="thisform"> 
                <h3 class="card-header bg-primary text-white">Tertarik Mengembangkan Project Ini?</h3>
                <div class="card-body">
                    <div class="col-12 col-md">
                        <div class="form-group row">
                            <label for="firstname" class="col-md-3 col-form-label">Mari Bekerja Sama!</label>
                            <div class="col-md-8">
                                <div class="input-group mb-3">
                                    <input name="mail"type="mail" class="form-control" placeholder="Tulis E-mailmu.." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <a href="mailto:almanik.balingga3@gmail.com" class="btn btn-outline-primary" type="button" id="button-addon2">Kirim</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="../script/jquery.slim.min.js"></script>
    <script src="../script/popper.min.js"></script>
    <script src="../script/bootstrap.min.js"></script>
</body>

</html>