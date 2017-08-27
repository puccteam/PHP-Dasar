<?php
mysql_connect('localhost','root','');
mysql_select_db('project');
$batas=8;
$halaman=$_GET['halaman'];
if($halaman=='')
{
    $posisi=0;
    $halaman=1;
}
else{
    $posisi=($halaman-1)*$batas;
}
?>

<table border="1">
    <tr><th>No</th><th>Nama Barang</th><th>Harga</th></tr>
    <?php
    $no=$posisi+1;
    $tampil=  mysql_query("select * from barang LIMIT $posisi,$batas");
    while ($r=  mysql_fetch_array($tampil))
    {
        echo "<tr>
            <td>$no</td>
            <td>$r[nama_barang]</td>
            <td>$r[harga]</td>
            </tr>";
        $no++;
    }
    ?>
</table>
Halaman = 
<?php
$jmldata=  mysql_query("select * from barang");
$jmldata=  mysql_num_rows($jmldata);
$jml_halaman=  ceil($jmldata/8);

for($i=1;$i<=$jml_halaman;$i++)
{
    if($i!=$jml_halaman)
    {
        echo "<a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a> | ";
    }
    else
    {
        echo "<a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a>";
    }
}
?>