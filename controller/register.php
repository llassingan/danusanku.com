<?php
include '../model/connect.php';

$user = $_POST['username'];
$email = $_POST['email'];
$data = $mysqli->query("SELECT * FROM user where `username` = '".$user."' or `email`= '".$email."' ");

$cek = mysqli_num_rows($data);
// echo $cek;

if ($cek > 0) {
    header('Location: ../view/signup.php?pesan=userexist');
}else{
    $user = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $organisasi = $_POST['organisasi'];
    $kampus = $_POST['kampus'];

    $result = $mysqli->query("INSERT INTO `user`(`username`, `nama`, `email`, `org` , `kampus`,`password`) VALUES ('".$user."','".$nama."','".$email."','".$organisasi."','".$kampus."','".$password."')");
    if (!$result) {
        echo("Error description: ". $mysqli -> error);
        exit();
    }else{
        header('Location: ../view/login.php?pesan=registersukses');
    }

};

?>