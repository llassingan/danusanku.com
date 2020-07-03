<?php
    include 'connect.php';
    $result = $mysqli->query("DELETE FROM `mahasiswa` WHERE `nim` = ".$_GET['nim']."");
    if($result == false){
        echo $mysqli->connect_errno."-".$mysqli->connect_error;
        exit();
    }
    else{
        header('Location: tampil.php');
    }
?>