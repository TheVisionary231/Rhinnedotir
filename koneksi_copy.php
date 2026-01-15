<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "astral";

$conn = mysqli_connect($host, $user, $password, $database);

// Cek Koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>