<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "RicoOrlandoLimardi_Latihan_Backend_19_05_2026";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>