<?php
include 'koneksi.php';
$id=$_GET['id'];
$query=  mysql_query("select * from barang where barang_id='$id'");
$row= mysql_fetch_array($query);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['barang_id']?>">
    <input type="text" name="nama_barang" placeholder="nama barang" value="<?php echo $row['nama_barang']?>">
    <input type="text" name="harga" placeholder="harga barang" value="<?php echo $row['harga']?>">
    <button type="submit">Simpan data</button>
</form>