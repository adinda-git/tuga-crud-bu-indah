<?php
include 'config.php';

// Menghitung rata-rata lama menginap
$sql_avg = "SELECT AVG(DATEDIFF(check_out, check_in)) AS avg_stay FROM reservasi";
$result_avg = mysqli_query($conn, $sql_avg);
$avg_stay = mysqli_fetch_assoc($result_avg)['avg_stay'];

// Menampilkan daftar reservasi
$sql = "SELECT * FROM reservasi ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$no = 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Kamar Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Reservasi</h2>
    <p><strong>Rata-rata Lama Menginap:</strong> <?= number_format($avg_stay, 2) ?> hari</p>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Reservasi</a>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Tipe Kamar</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_pelanggan'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['no_hp'] ?></td>
                    <td><?= $row['tipe_kamar'] ?></td>
                    <td><?= $row['check_in'] ?></td>
                    <td><?= $row['check_out'] ?></td>
                    <td>
                        <a href='edit.php?id=<?= $row['id'] ?>' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='hapus.php?id=<?= $row['id'] ?>' class='btn btn-danger btn-sm' onclick='return confirm("Yakin ingin menghapus?")'>Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>

