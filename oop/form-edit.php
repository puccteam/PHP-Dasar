<?php
include 'database.php';
$db=new database();
$record=$db->get_one($_GET['id']);
?>
<form action="simpan.php?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <table border="1">
        <tr><td>nama barang</td><td><input type="text" value="<?php echo $record['nama_barang']?>" name="nama_barang" placeholder="nama barang"></td></tr>
         <tr><td>harga</td><td> <input type="text" value="<?php echo $record['harga']?>" name="harga" placeholder="harga barang"></td></tr>
         <tr><td colspan="2"><button type="submit">Simpan data</button></td></tr>
    </table>  
</form>