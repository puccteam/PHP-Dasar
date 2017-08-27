<?php
include 'database.php';
$db=new database();
?>
<a href="form-input.php">input</a>
<table border="1">
    <tr><th>No</th><th>Nama Barang</th><th>Harga</th><th colspan="2">Operasi</th></tr>
    <?php
    $no=1;
    $data=$db->tampildata();
    foreach ($data as $r)
    {
        echo "<tr>
            <td>$no</td>
            <td>$r[nama_barang]</td>
            <td>$r[harga]</td>
            <td><a href='form-edit.php?id=$r[barang_id]'>Edit</a></td>
            <td><a href='hapus.php?id=$r[barang_id]'>Hapus</a></td>
            </tr>";
        $no++;
    }
    ?>
</table>