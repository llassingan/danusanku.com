<?php
    include 'connect.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    $result = $mysqli->query("INSERT INTO `mahasiswa`(`Nama`, `Nim`, `Jurusan`, `Angkatan`) VALUES ('".$nama."','".$nim."','".$jurusan."','".$angkatan."')");
    if (!$result) {
        echo("Error description: ". $mysqli -> error);
        exit();
    }else{
        header('Location: tampil.php');
    }


?>