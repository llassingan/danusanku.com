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
        <link rel="stylesheet" href="../css/listitem.css">
        <link rel="stylesheet" href="../css/bootstrap-social.css">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
        
    <title>Daftar Produk - Danusanku</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="./profile.php"><span class="fa fa-address-card fa-lg mr-1"></span>Profile</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
        <div id="box" class="col-12" style="margin:150px 0px 150px 0px;">
            <h1>Daftar Danusan <?php echo $_SESSION['org']?></h1>
            <div class="table-responsive" > 
            <table class="table table-hover" id="tablee">
                <thead class= "thead thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Status</th>
                    <th scope="col" >Hapus</th>
                    <th scope="col" >Edit</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                <?php
                    $data = $mysqli->query("SELECT * FROM `transaksi` where `user` = '".$_SESSION['username']."' ");
                    $no=0;
                    while ($d = $data->fetch_array()){
                        
                        $no++;
                        ?>
                  <tr>
                    <th> <?php echo $no; ?></th>
                    <td><?php echo $d['produk']; ?></td>
                    <td><?php echo $d['kuantitas']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                    <td>
                        <?php if ($d['status'] != 'Selesai') {?>
                        <a href="../controller/deleting.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah Anda Yakin?')" ><i class="fa fa-trash-o"></i></a>
                    </td>
                    <td>
                        <a href="./edit.php?id=<?php echo $d['id']; ?>" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    </td>
                        <?php } else{?>
                            <a href="#" type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>
                    </td>
                    <td>
                        <a href="#" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                    </td>
                        <?php
                  }
                    ?>   
                </tr>
                  <?php
                  }
                    ?> 
                </tbody>
                
              </table>
              </div>
              <a href="./buy.php" type="button" class="btn btn-primary mt-2" >Beli Produk</a>
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
                        <li><a href="./profile.php">Profile</a></li>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#tablee').DataTable();
        } );
      </script>
</body>

</html>