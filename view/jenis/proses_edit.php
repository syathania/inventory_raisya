<?php
// Ambil data dari form
$id = $_GET['id']; // ID jenis yang ingin diupdate
$nama_jenis = $_POST['nama_jenis']; // Nama jenis baru

include '../../config/koneksi.php';

// Query update
$query = mysqli_query($conn, "UPDATE jenis SET
    id_jenis='$id_jenis'
WHERE nama_jenis='$nama_jenis'");

// Javascript feedback
if ($query) {
    echo "<script>alert('Data berhasil diedit');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
    echo "<script>window.location.href='view_tambah.php';</script>";
}
?>
