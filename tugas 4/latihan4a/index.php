<?php
//melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

//memilih database
mysqli_select_db($conn, "pw_tubes_203040089");

//melakukan query dari database
$result = mysqli_query($conn, "SELECT * FROM sembako")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan 4a</title>
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
                while ($row = mysqli_fetch_assoc($result)) :
                ?>
                    <tr>
                        <td><?= $nomer++; ?></td>
                        <td><img src="asset/img/<?= $row["Gambar"]; ?>"></td>
                        <td><?= $row["Nama barang"] ?></td>
                        <td><b><?= $row["Merk"] ?></b></td>
                        <td><?= $row["Harga"] ?></td>
                        <td><?= $row["Stok"] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>