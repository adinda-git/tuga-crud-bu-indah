<?php
$host = "localhost";  // Sesuaikan dengan host database Anda
$user = "root";       // Username default untuk MySQL (jika pakai XAMPP)
$pass = "";           // Kosongkan jika tidak ada password
$db   = "hotel_reservasi"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
