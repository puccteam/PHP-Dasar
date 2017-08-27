<form action="pencarian.php" method="post">
    <input type="text" name="keyword" placeholder="masukan kata kunci">
    <select name="field">
        <option value="nama_barang">Nama Barang</option>
        <option value="harga">Harga Barang</option>
    </select>
    <button type="submit">Cari Data</button>
</form>
<table border="1">
    <tr><th>NO</th><th>Nama Barang</th><th>Harga</th><th colspan="2">Operasi</th></tr>
    <?php
    include 'koneksi.php';
    
    $query=  mysql_query("select * from barang");
    $no=1;
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

<a href="form-input.php">input data</a>
