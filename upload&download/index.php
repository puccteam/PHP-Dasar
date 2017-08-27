<a href="form.php">upload</a>
<table border="1">
    <tr><th>No</th><th>Nama File</th><th>Size</th><th>Download</th><th>Hapus</th></tr>
    <?php
    include 'koneksi.php';
    $no=1;
    $sql=  mysql_query("select * from download");
    while($r=  mysql_fetch_array($sql))
    {
        echo "<tr>
            <td>$no</td>
            <td>$r[nama_file]</td>
            <td>$r[ukuran]</td>
            <td><a href='filetampungan/$r[nama_file]'>Download</a></td>
            <td><a href='hapusfile.php?namafile=$r[nama_file]'>Hapus</a></td>
            </tr>";
        $no++;
    }
    ?>
</table>
