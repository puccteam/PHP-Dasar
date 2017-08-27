<?php
include 'koneksi.php';

$lokasi_file=$_FILES['file']['tmp_name'];
$nama_file  =$_FILES['file']['name'];
$size_file  =$_FILES['file']['size'];
$folder     ="filetampungan/$nama_file";
mysql_query("insert into download set nama_file='$nama_file',ukuran='$size_file'");
$upload=move_uploaded_file($lokasi_file,$folder);
if($upload){
    //echo "upload berhasil";
    header("location:index.php");
}
?>
