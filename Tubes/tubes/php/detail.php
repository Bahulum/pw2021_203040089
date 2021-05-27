<?php
if (!isset($_GET['id'])) {
    header("localhost: ../index.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];
$sembako = query("SELECT * FROM sembako WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../asset/img/<?= $sembako["Gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <h4>keterangan</h4>
            <p>Nama barang : <?= $sembako["Nama_barang"]; ?></p>
            <p>Merk : <?= $sembako["Merk"]; ?></p>
            <p>Harga : <?= $sembako["Harga"]; ?></p>
            <p>Stok : <?= $sembako["Stok"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>