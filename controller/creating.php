<?php
    include '../model/connect.php';

    $user = $_POST['user'];
    $produk = $_POST['produk'];
    $kuantitas = $_POST['kuantitas'];

    $result = $mysqli->query("INSERT INTO `transaksi`(`user`, `produk`, `kuantitas`, `status`) VALUES ('".$user."','".$produk."','".$kuantitas."','Pending')");
    if (!$result) {
        echo("Error description: ". $mysqli -> error);
        exit();
    }else{
        header('Location: ../view/listitem.php');
    }


?>