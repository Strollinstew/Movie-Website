<?php
session_start();
include 'koneksi.php';

$userId = $_SESSION['idUser'];
$movieId = intval($_POST['movieId']);
$star = intval($_POST['stars']);
$review = $_POST['review'];

$queryt = "INSERT INTO review (idUser, idMovie, star, description) VALUES ($userId, $movieId, $star, '$review')";
$resultt = $koneksi->query($queryt);

header('Location:seeMore.php?id='.$movieId)
?>