<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}
require 'functions.php';

$id = $_GET['id'];
$smb = query("SELECT * FROM sembako WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Form Ubah Data Barang</h3>
<form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $smb['id']; ?>">
    <ul>
        <li>
            <label for="Gambar">Gambar :</label><br>
            <input type="text" name="Gambar" id="Gambar" required value="<?= $smb['Gambar']; ?>"><br><br>
        </li>
        <li>
            <label for="Nama barang">Nama barang :</label><br>
            <input type="text" name="Nama barang" id="Nama barang" required value="<?= $smb['Nama_barang']; ?>"><br><br>
        </li>
        <li>
            <label for="Merk">Merk :</label><br>
            <input type="text" name="Merk" id="Merk" required value="<?= $smb['Merk']; ?>"><br><br>
        </li>
        <li>
            <label for="Harga">Harga :</label><br>
            <input type="text" name="Harga" id="Harga" required value="<?= $smb['Harga']; ?>"><br><br>
        </li>
        <li>
            <label for="Stok">Stok :</label><br>
            <input type="text" name="Stok" id="Stok" required value="<?= $smb['Stok']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>