<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tampil Data Barang</title>
</head>
<body>

<h2 align="center">DATA BARANG</h2>

<a href="input.php">Tambah Data Barang</a>
<br><br>

<table align="center" border="1" cellpadding="8" cellspacing="0" width="800">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Diskon</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php
include "koneksi.php";

$no = 1;

$tampil = mysqli_query($koneksi, "SELECT * FROM t_barang");

while ($data = mysqli_fetch_assoc($tampil)) {
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['kode_barang']; ?></td>
    <td><?php echo $data['nama_barang']; ?></td>
    <td><?php echo $data['satuan']; ?></td>
    <td><?php echo $data['harga_beli']; ?></td>
    <td><?php echo $data['harga_jual']; ?></td>
    <td><?php echo $data['diskon']; ?></td>
    <td><?php echo $data['stok']; ?></td>
    <td>
        <a href="edit.php?kode_barang=<?= $data['kode_barang'] ?>">Edit</a> |
        <a href="delete.php?kode_barang=<?= $data['kode_barang'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>
