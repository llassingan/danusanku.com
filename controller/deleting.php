<?php
    include 'connect.php';
    $result = $mysqli->query("DELETE FROM `transaksi` WHERE `id` = ".$_GET['id']."");
    if($result == false){
        echo $mysqli->connect_errno."-".$mysqli->connect_error;
        exit();
    }
    else{
        header('Location: ../view/listitem.php');
    }
?>