<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = $mysqli->query("SELECT * FROM mahasiswa where `username` = '".$username."' and `password` = '".$password."'");


$cek = mysqli_num_rows($data);
echo $cek;

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header('Location: tampil.php');
}else{
    header('Location: login.php?pesan=login_salah');
};

?>