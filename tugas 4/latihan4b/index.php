<?php
require 'php/functions.php';

$sembako = query("SELECT * FROM sembako")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan 4b</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-hover table-bordered border-primary">
            <thead class="table-primary" style="text-align: center;">
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
            </thead>
            <tbody>
                <?php
                $nomer = 1;
                foreach ($sembako as $smb) :
                ?>
                    <tr>
                        <td><?= $nomer++; ?></td>
                        <td><img src="asset/img/<?= $smb["Gambar"]; ?>"></td>
                        <td><?= $smb["Nama barang"] ?></td>
                        <td><b><?= $smb["Merk"] ?></b></td>
                        <td><?= $smb["Harga"] ?></td>
                        <td><?= $smb["Stok"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>