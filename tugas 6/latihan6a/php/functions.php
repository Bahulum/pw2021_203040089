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

    $nama = htmlspecialchars($data["Nama_barang"]);
    $merk = htmlspecialchars($data["Merk"]);
    $harga = htmlspecialchars($data["Harga"]);
    $stock = htmlspecialchars($data["Stok"]);
    $gambar = htmlspecialchars($data["Gambar"]);

    $query = "INSERT INTO sembako
                    VALUES
                    ('','$gambar','$nama','$merk','$harga','$stock')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM sembako WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['Gambar']);
    $nama = htmlspecialchars($data['Nama_barang']);
    $merk = htmlspecialchars($data['Merk']);
    $harga = htmlspecialchars($data['Harga']);
    $stock = htmlspecialchars($data['Stok']);

    $query = "UPDATE sembako SET
        Gambar = '$gambar',
        Nama_barang = '$nama',
        Merk = '$merk',
        Harga = '$harga',
        Stok = '$stock'
        WHERE id = '$id'
        ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
