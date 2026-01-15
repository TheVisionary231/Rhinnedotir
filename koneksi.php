<?php
$host = "localhost";
$user = "root"; // sesuaikan dengan username database Anda
$pass = "";     // sesuaikan dengan password database Anda
$db   = "mon3tr";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Mengatur mode error ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>