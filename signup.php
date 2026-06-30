<?php
session_start();
include 'koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$queryl = "INSERT INTO user (name, email, password) VALUES ($name, $email, $password)";
$resultl = $koneksi->query($queryl);

header("Location:index.php");
?>