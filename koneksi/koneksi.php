<?php
$server   = "localhost:3306";
$username = "root";
$password = "";
$database = "arsip_surat";

$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>