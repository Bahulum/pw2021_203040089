<?php

require 'functions.php';

$sembako = query("SELECT * FROM sembako");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>latihan 5d</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <br>
    <div class="add">
      <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <br>
  </div>
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
      </tbody>
    </table>
  </div>
</body>

</html>