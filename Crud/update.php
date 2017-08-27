<?php
include 'koneksi.php';
$nama_barang=   $_POST['nama_barang'];
$harga      =   $_POST['harga'];
$id         =   $_POST['id'];
mysql_query("update barang set nama_barang='$nama_barang',harga='$harga' where barang_id='$id'");
header("location:tampildata.php");
?>
