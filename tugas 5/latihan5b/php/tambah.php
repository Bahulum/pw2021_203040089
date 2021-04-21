<h3>Form Tambah Data Barang</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="Gambar">Gambar :</label><br>
            <input type="text" name="Gambar" id="Gambar" required><br><br>
        </li>
        <li>
            <label for="Nama barang">Nama barang :</label><br>
            <input type="text" name="Nama barang" id="Nama barang" required><br><br>
        </li>
        <li>
            <label for="Merk">Merk :</label><br>
            <input type="text" name="Merk" id="Merk" required><br><br>
        </li>
        <li>
            <label for="Harga">Harga :</label><br>
            <input type="text" name="Harga" id="Harga" required><br><br>
        </li>
        <li>
            <label for="Stok">Stok :</label><br>
            <input type="text" name="Stok" id="Stok" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>