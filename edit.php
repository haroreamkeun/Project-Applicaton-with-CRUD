```php
<?php
include "koneksi.php";

if (isset($_POST['update'])) {

    $update = mysqli_query($koneksi, "UPDATE t_barang SET
        kode_barang = '{$_POST['kode_barang']}',
        nama_barang = '{$_POST['nama_barang']}',
        satuan = '{$_POST['satuan']}',
        harga_beli = '{$_POST['harga_beli']}',
        harga_jual = '{$_POST['harga_jual']}',
        diskon = '{$_POST['diskon']}'
        WHERE kode_barang = '{$_POST['kode_barang_tmp']}'
    ");

    if ($update) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal Memperbaharui";
    }
}

$tampil = mysqli_query(
    $koneksi,
    "SELECT * FROM t_barang WHERE kode_barang = '{$_GET['kode_barang']}'"
);

$data = mysqli_fetch_array($tampil);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form Edit Barang</title>
</head>

<body>

<h2 align="center">Form Edit Barang</h2>

<form method="POST" action="edit.php">

    <table align="center" width="500">

        <tr>
            <td>Kode Barang</td>
            <td>:
                <input
                    type="text"
                    name="kode_barang"
                    value="<?php echo $data['kode_barang']; ?>"
                    required
                >

                <input
                    type="hidden"
                    name="kode_barang_tmp"
                    value="<?php echo $data['kode_barang']; ?>"
                >
            </td>
        </tr>

        <tr>
            <td>Nama Barang</td>
            <td>:
                <input
                    type="text"
                    name="nama_barang"
                    value="<?php echo $data['nama_barang']; ?>"
                    required
                >
            </td>
        </tr>

        <tr>
            <td>Satuan</td>
            <td>:
                <input
                    type="text"
                    name="satuan"
                    value="<?php echo $data['satuan']; ?>"
                    required
                >
            </td>
        </tr>

        <tr>
            <td>Harga Beli</td>
            <td>:
                <input
                    type="number"
                    name="harga_beli"
                    value="<?php echo $data['harga_beli']; ?>"
                    required
                >
            </td>
        </tr>

        <tr>
            <td>Harga Jual</td>
            <td>:
                <input
                    type="number"
                    name="harga_jual"
                    value="<?php echo $data['harga_jual']; ?>"
                    required
                >
            </td>
        </tr>

        <tr>
            <td>Diskon</td>
            <td>:
                <input
                    type="number"
                    name="diskon"
                    value="<?php echo $data['diskon']; ?>"
                    required
                >
            </td>
        </tr>

        <tr>
            <td>
                <a href="index.php">Kembali</a>
            </td>
            <td>
                <input type="reset" name="reset" value="Reset">
                <input type="submit" name="update" value="Update">
            </td>
        </tr>

    </table>

</form>

</body>
</html>
```
