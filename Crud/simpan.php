<?php
include 'koneksi.php';
$nama_barang=   $_POST['nama_barang'];
$harga      =   $_POST['harga'];
mysql_query("insert into barang set nama_barang='$nama_barang',harga='$harga'");
header("location:tampildata.php");
?>
