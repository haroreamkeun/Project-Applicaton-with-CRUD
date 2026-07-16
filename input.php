<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {

    $simpan = mysqli_query($koneksi, "INSERT INTO t_barang
    (kode_barang, nama_barang, satuan, harga_beli, harga_jual, diskon, stok)
    VALUES (
        '{$_POST['kode_barang']}',
        '{$_POST['nama_barang']}',
        '{$_POST['satuan']}',
        '{$_POST['harga_beli']}',
        '{$_POST['harga_jual']}',
        '{$_POST['diskon']}',
        '{$_POST['stok']}'
    )");

    if ($simpan) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal Simpan!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Input Barang</title>
</head>

<body>

<h2 align="center">Form Input Barang</h2>

<form method="POST" action="input.php">

<table align="center" width="500" cellpadding="5">

<tr>
    <td>Kode Barang</td>
    <td>:
        <input type="text" name="kode_barang" required>
    </td>
</tr>

<tr>
    <td>Nama Barang</td>
    <td>:
        <input type="text" name="nama_barang" required>
    </td>
</tr>

<tr>
    <td>Satuan</td>
    <td>:
        <input type="text" name="satuan" required>
    </td>
</tr>

<tr>
    <td>Harga Beli</td>
    <td>:
        <input type="number" name="harga_beli" required>
    </td>
</tr>

<tr>
    <td>Harga Jual</td>
    <td>:
        <input type="number" name="harga_jual" required>
    </td>
</tr>

<tr>
    <td>Diskon</td>
    <td>:
        <input type="number" name="diskon" required>
    </td>
</tr>

<tr>
    <td>Stok</td>
    <td>:
        <input type="number" name="stok" required>
    </td>
</tr>

<tr>
    <td>
        <a href="index.php">Kembali</a>
    </td>
    <td>
        <input type="reset" value="Reset">
        <input type="submit" name="simpan" value="Simpan">
    </td>
</tr>

</table>

</form>

</body>
</html>