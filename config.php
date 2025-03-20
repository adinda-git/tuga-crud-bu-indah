<?php
$host = "localhost";
$user = "guest";  // Ganti dari 'root' ke 'guest'
$pass = "password_guest";  // Masukkan password user 'guest'
$db   = "hotel_reservasi";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
