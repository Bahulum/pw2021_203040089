<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}
require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>My Store</title>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fs-md-5 fw-bold" href="#">ULUM Store</a>
    </div>
  </nav>
  <div class="container" class="ubah">
    <br>

    <h3>Tambah Data Barang</h3>
    <form action="" method="post">
      <input type="hidden" name="id" id="id" value="<?= $smb['id']; ?>">

      <div class="mb-3">
        <label for="Gambar" class="form-label">Gambar</label>
        <input type="text" class="form-control" id="Gambar" aria-describedby="Gambar" name="Gambar">
      </div>

      <div class="mb-3">
        <label for="Nama barang" class="form-label">Nama barang</label><br>
        <input type="text" class="form-control" name="Nama barang" id="Nama barang" aria-describedby="Nama barang">
      </div>

      <div class="mb-3">
        <label for="Merk" class="form-label">Merk</label><br>
        <input type="text" class="form-control" name="Merk" id="Merk" aria-describedby="Merk">
      </div>

      <div class="mb-3">
        <label for="Harga" class="form-label">Harga</label><br>
        <input type="text" class="form-control" name="Harga" id="Harga" aria-describedby="Harga">
      </div>

      <div class="mb-3">
        <label for="Stok" class="form-label">Stok</label><br>
        <input type="text" class="form-control" name="Stok" id="Stok" aria-describedby="Stok">
      </div>

      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
      </ul>
    </form>

  </div>

  <!-- footer -->
  <footer class="bg-dark fixed-bottom text-white">
    <div class="container">
      <div class="row">
        <div class="col p-3 text-center">
          <small>Copyright &copy; 2020 - Bahrul Ulum.</small>

        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->


  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>