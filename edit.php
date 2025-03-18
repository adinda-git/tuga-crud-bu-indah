<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM reservasi WHERE id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $sql = "UPDATE reservasi SET 
            nama_pelanggan='$nama', email='$email', no_hp='$no_hp', 
            tipe_kamar='$tipe_kamar', check_in='$check_in', check_out='$check_out'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Reservasi</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="<?= $data['nama_pelanggan'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tipe Kamar</label>
            <select nam
