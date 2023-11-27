<?php
$host = "localhost";
$nama = "root";
$password = "";
$database = "db-apotek";

// Membuat koneksi
$conn = new mysqli($host, $nama, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
