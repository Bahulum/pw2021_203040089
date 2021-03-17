<?php
$database = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => 100,
        "gol" => 76,
        "assist" => 30
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => 120,
        "gol" => 80,
        "assist" => 12
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => 87,
        "gol" => 12,
        "assist" => 48
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => 90,
        "gol" => 103,
        "assist" => 8
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => 109,
        "gol" => 56,
        "assist" => 15

    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => 63,
        "gol" => 30,
        "assist" => 70

    ],
    [
        "nama" => "Ziatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => 100,
        "gol" => 10,
        "assist" => 12

    ]

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan 3d</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Club</th>
            <th>Main</th>
            <th>Gol</th>
            <th>Assist</th>
        </thead>
        <tbody>
            <?php
            $nomer = 1;
            $jumlahMain = 0;
            $jumlahGol = 0;
            $jumlahAssist = 0;
            foreach ($database as $data) {
                $jumlahMain += $data["main"];
                $jumlahGol += $data["gol"];
                $jumlahAssist += $data["assist"];
            ?>
                <tr>
                    <td><?= $nomer++; ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td><?= $data["club"] ?></td>
                    <td><?= $data["main"] ?></td>
                    <td><?= $data["gol"] ?></td>
                    <td><?= $data["assist"] ?></td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td>#</td>
                <td colspan="2" style="text-align: center;"><b>Jumlah</b></td>
                <td><?php echo $jumlahMain ?></td>
                <td><?php echo $jumlahGol ?></td>
                <td><?php echo $jumlahAssist ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>