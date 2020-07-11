<?php
    include '../model/connect.php';
    $id = $_POST['id'];
    $user = $_POST['user'];
    $produk = $_POST['produk'];
    $kuantitas = $_POST['kuantitas'];
    $status = $_POST['status'];

    $result = $mysqli->query("UPDATE `transaksi` SET `user`= '".$user."', `produk` = '".$produk."', `kuantitas` = '".$kuantitas."', `status` = '".$status."' WHERE 'id' = '".$id."'");
    if (!$result) {
        echo("Error description: ". $mysqli -> error);
        exit();
    }else{
        header('Location: ../view/listitem.php');
    }


?>