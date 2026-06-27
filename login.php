<?php
session_start();
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$queryl = "SELECT * FROM user WHERE email = $email";
$resultl = $koneksi->query($queryl);

if ($resultl->num_rows > 0) {
    $user = $resultl->fetch_assoc();

    $_SESSION['$idUser'] = $user['idUser'];
    $_SESSION['$email'] = $user['email'];
    $_SESSION['$role'] = $user['role'];

    header("Location:index.php");
}
?>