<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $sembako = query("SELECT * FROM sembako 
  WHERE 
  Nama_barang LIKE '%$keyword' OR 
  Merk  LIKE '%$keyword' ");
} else {
  $sembako = query("SELECT * FROM sembako");
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
  <!-- navbar -->
  <nav class="navbar navbar-light fixed-top bg-light">
    <div class="container">
      <a class="navbar-brand fs-md-5 fw-bold" href="../index.php">ULUM Store</a>
      <div class="add">
        <a href="tambah.php" style="text-decoration: none; color: black;">Tambah Data</a>
      </div>
      <br>
      <form action="" method="GET">
        <input type="text" name="keyword" id="keyword" autofocus placeholder="Masukan keyword" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
      </form><br>
    </div>
  </nav><br><br><br>
  <!-- akhir navbar -->
  <div class="container">
    <table class="table table-hover table-bordered border-primary">
      <thead class="table-primary" style="text-align: center;">
        <th>#</th>
        <th>opsi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Stock</th>
      </thead>
      <tbody style="text-align: center;">
        <?php if (empty($sembako)) : ?>
          <tr>
            <td colspan="7">
              <h1>Data tidak ditemukan</h1>
            </td>
          </tr>
        <?php else : ?>
          <?php $i = 1; ?>
          <?php foreach ($sembako as $smb) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td>
                <a href="ubah.php?id=<?= $smb['id'] ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $smb['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
              </td>
              <td><img src="../asset/img/<?= $smb["Gambar"]; ?>" alt=""></td>
              <td><?= $smb["Nama_barang"]; ?> </td>
              <td><?= $smb["Merk"]; ?> </td>
              <td><?= $smb["Harga"]; ?> </td>
              <td><?= $smb["Stok"]; ?> </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>


  <div class="container">
    <div class="logout">
      <button><a href="logout.php" style="text-decoration: none; color: black;">logout</a></button>
      <br>
      <br>
    </div>
  </div>


  <!-- footer -->
  <footer class="bg-dark text-white">
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
  <script>
    const carousel = document.querySelectorAll('.carousel');
    M.carousel.init(carousel, {
      interval: 3000
    });
  </script>

</body>

</html>