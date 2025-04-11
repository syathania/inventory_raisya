<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RAISYA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../jenis/index.php">jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../barang/index.php">Barang</a>
          <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container"> 
  <h1>DATA JENIS RAISYA </h1>
  <a href="view_tambah.php" class="btn btn-primary">Tambah Data Jenis Barang Baru</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID Jenis</th>
      <th scope="col">Nama Jenis</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
                include "../../config/koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM jenis");
                $no = 1;

                if (mysqli_num_rows($query) > 0) {
                    while ($result = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                    
                            <td><?php echo $result['nama_jenis']; ?></td>
                            

                            <td>
                            <a href="view_edit.php?id=<?php echo $result['id_jenis'] ?>" class="btn btn-warning">Edit</a>
                            <a href="hapus.php?id=<?php echo $result['id_jenis'] ?>" 
                            onclick="return confirm('Kamu Yakin???')" 
                            class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Data siswa tidak ditemukan</td></tr>";
                }
                ?>
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>