<?php
    include '../model/connect.php';
    $id = $_POST['id'];
    $kuantitas = $_POST['kuantitas'];

    $result = $mysqli->query("UPDATE `transaksi` SET `kuantitas` = '".$kuantitas."' WHERE `id` = '".$id."'");
    if (!$result) {
        echo("Error description: ". $mysqli -> error);
        exit();
    }else{
        header('Location: ../view/listitem.php');
    }


?>