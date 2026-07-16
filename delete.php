<?php
include"koneksi.php";
$delete=mysqli_query($koneksi,"DELETE FROM t_barang WHERE
kode_barang='$_GET[kode_barang]'");
if($delete){
header("location:index.php");
}else{
echo"Gagal Menghapus";
}
?>