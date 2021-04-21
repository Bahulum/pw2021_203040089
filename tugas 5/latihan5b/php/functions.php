<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040089");
    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data["Gambar"]);
    $nama = htmlspecialchars($data["Nama_barang"]);
    $merk = htmlspecialchars($data["Merk"]);
    $harga = htmlspecialchars($data["Harga"]);
    $stock = htmlspecialchars($data["Stok"]);

    $query = "INSERT INTO sembako
                    VALUES
                    ('','$gambar','$nama','$merk','$harga','$stock')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
