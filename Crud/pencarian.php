<?php
    include 'koneksi.php';
    $key    =   $_POST['keyword'];
    $field  =   $_POST['field'];
    $query  =  mysql_query("select * from barang where $field like '%$key%'");
    $no=1;
?>

Jumlah Data Yang ditemukan  dengan pencarian <b><?php echo $key;?></b> adalah  
    <?php echo mysql_num_rows($query);?> data
<table border="1">
    <tr><th>NO</th><th>Nama Barang</th><th>Harga</th><th colspan="2">Operasi</th></tr>
    <?php
    while ($r=  mysql_fetch_array($query))
    {
        echo "<tr>
            <td>$no</td>
            <td>".  strtoupper($r[nama_barang])."</td>
            <td>$r[harga]</td>
            <td><a href='form-edit.php?id=$r[barang_id]'>edit</a></td>
            <td><a href='hapus.php?id=$r[barang_id]'>hapus</a></td>
            </tr>";
        $no++;
    }
    ?>
</table>