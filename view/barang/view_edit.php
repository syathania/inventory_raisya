<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Tambah Barang Baru</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Barang Baru</h1>
        <?php 
             include '../../config/koneksi.php';
             $id=$_GET['id'];
             $query=mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
             $result=mysqli_fetch_array($query);

        ?>
        
        <form action="proses_tambah.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">id barang</label>
                <input type="text" class="form-control" name="id" id="exampleInputEmaill">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">nama barang</label>
                <input type="text" class="form-control" name="nis" id="exampleInputEPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">id jenis</label>
                <input type="text" class="form-control" name="nama" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">harga</label>
                <input type="text" class="form-control" name="id_kelas" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">stok</label>
                <input type="text" class="form-control" name="alamat" id="exampleInputPassword1">
            </div>
            <button type="sumbit" class="btn btn-primary">Sumbit</button>
        </form>
    </div>
</body>
</html>
