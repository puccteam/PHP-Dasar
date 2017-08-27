<?php
include 'koneksi.php';
mysql_query("delete from barang where barang_id=$_GET[id]");
header("location:tampildata.php");
?>
