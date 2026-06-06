<?php
$koneksi = new mysqli("localhost", "root", "", "movie");

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

?>