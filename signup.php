<?php
session_start();
include 'koneksi.php';

$names = $_POST['name'];
$emails = $_POST['email'];
$passwords = $_POST['password'];

$queryf = "INSERT INTO user (name, email, password) VALUES ('$names', '$emails', '$passwords')";
$resultf = $koneksi->query($queryf);

header("Location:index.php");
?>