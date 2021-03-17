<?php

$datapemain = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint German",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan",


]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>latihan 3c</title>
</head>

<body>
    <?php
    echo  "<h3 style='font-weight:bold'> Daftar Pemain Bola terkenal dan clubnya </h3> <br> <table>";
    foreach ($datapemain as $namapemain => $club) {
        echo "<tr>
                <th style = text-align:left> $namapemain </th>
                <td> : $club </td>
            </tr>";
    }
    echo "</table>";
    ?>
</body>

</html>