<?php
$koneksi = new mysqli("localhost", "root", "", "meeting");

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>