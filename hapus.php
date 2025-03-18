<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM reservasi WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data!";
}
?>
