<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "lmimhx00581tyudv_portaldb";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
