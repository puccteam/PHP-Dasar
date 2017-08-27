<?php
mysql_connect("localhost","root","");
mysql_select_db("project");
include 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader("Book1.xls");
$baris=$data->rowcount();
//echo"<table border=1>
    //<tr><th>No</th><th>Nama Barang</th><th>Harga</th></tr>";
for($i=2;$i<=$baris;$i++)
{
    $namabarang= str_replace("'", "", $data->val($i,2));
    $harga=$data->val($i,3);
    //echo "<tr>
       // <td>".($i-1)."</td>
       // <td>".$namabarang."</td>
       // <td>".$harga."</td>
        //</tr>";
    mysql_query("insert into barang set nama_barang='$namabarang',harga='$harga'");
}
//echo "</table>";
?>
