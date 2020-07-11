<?php
session_start();
include '../model/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$d = $mysqli->query("SELECT * FROM user where `username` = '".$username."' and `password` = '".$password."'");

$cek = mysqli_num_rows($d);
echo $cek;

if ($cek > 0) {
    $_SESSION['username'] = $username;
    while ($row = $d->fetch_array()){
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['org'] = $row['org'];
    }
    $_SESSION['status'] = "login";
    header('Location: ../view/profile.php');
}else{
    header('Location: ../view/login.php?pesan=loginfailed');
};

?>