<?php
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Periksa jika password dan konfirmasi password sama
    if ($password === $confirm_password) {
        // Enkripsi password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk memasukkan data ke database
        $sql = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registrasi berhasil!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Password dan konfirmasi password tidak cocok!";
    }
}

$conn->close();
?>
