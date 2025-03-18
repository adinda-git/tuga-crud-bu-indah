<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $sql = "INSERT INTO reservasi (nama_pelanggan, email, no_hp, tipe_kamar, check_in, check_out) 
            VALUES ('$nama', '$email', '$no_hp', '$tipe_kamar', '$check_in', '$check_out')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan reservasi!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Reservasi</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tipe Kamar</label>
            <select name="tipe_kamar" class="form-control">
                <option value="Standard">Standard</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Suite">Suite</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Check-in</label>
            <input type="date" name="check_in" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Check-out</label>
            <input type="date" name="check_out" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
