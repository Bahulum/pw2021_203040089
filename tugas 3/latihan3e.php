<?php
$database = [
    [
        "gambar" => "kecapmanis.jpg",
        "nama" => "Kecap manis",
        "merk" => "Bango",
        "harga" => "20.000",
        "stok" => 90,
        "berat" => "550 ml",
    ],
    [
        "gambar" => "susukental.jpg",
        "nama" => "Susu kental manis kaleng",
        "merk" => "Frisian Flag",
        "harga" => "10.500",
        "stok" => 484,
        "berat" => "370 gr",
    ],
    [
        "gambar" => "minyaksania.jpg",
        "nama" => "Minyak goreng",
        "merk" => "sania",
        "harga" => "27.000",
        "stok" => 12,
        "berat" => "2 L",
    ],
    [
        "gambar" => "bumbukaldu.jpg",
        "nama" => "Bumbu kaldu ayam",
        "merk" => "Royco",
        "harga" => "8.500",
        "stok" => 1201,
        "berat" => "230 gr",
    ],
    [
        "gambar" => "minyakgoreng.jpg",
        "nama" => "Minyak Goreng",
        "merk" => "Rose Brand",
        "harga" => "28.500",
        "stok" => 473,
        "berat" => "2 L",
    ],
    [
        "gambar" => "beras.jpg",
        "nama" => "Beras",
        "merk" => "Nanas Madu",
        "harga" => "53.000",
        "stok" => 830,
        "berat" => "5 kg",
    ],
    [
        "gambar" => "mieinstan.jpg",
        "nama" => "Mie Goreng instan",
        "merk" => "indomie",
        "harga" => "2.500",
        "stok" => 1168,
        "berat" => "75 gr",
    ],
    [
        "gambar" => "tepungterigu.jpg",
        "nama" => "Tepung Terigu",
        "merk" => "Segitiga Biru",
        "harga" => "11.000",
        "stok" => 756,
        "berat" => "1 kg",
    ],
    [
        "gambar" => "tehcelup.jpg",
        "nama" => "Teh Celup",
        "merk" => "Sosro",
        "harga" => "5.700",
        "stok" => 1265,
        "berat" => "2 gr",
    ],
    [
        "gambar" => "susukaleng.jpg",
        "nama" => "Susu kaleng",
        "merk" => "Bear Brand ",
        "harga" => "10.000",
        "stok" => 304,
        "berat" => "189 ml",
    ]

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan 3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <table class="table table-hover table-bordered border-primary">
        <caption>Toko Sembako</caption>
        <thead class="table-primary" style="text-align: center;">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Merk</th>
            <th>Berat (l/ml/Kg/gr) </th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>
        <tbody>
            <?php
            $nomer = 1;
            foreach ($database as $data) {
            ?>
                <tr>
                    <td style="text-align: center;"><?= $nomer++; ?></td>
                    <td><img src="img/<?= $data["gambar"]; ?>"></td>
                    <td><?= $data["nama"] ?></td>
                    <td><b><?= $data["merk"] ?></b></td>
                    <td><?= $data["berat"] ?></td>
                    <td>Rp. <?= $data["harga"] ?></td>
                    <td><?= $data["stok"] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>