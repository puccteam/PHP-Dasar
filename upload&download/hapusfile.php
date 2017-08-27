<?php
include 'koneksi.php';
$namafile=$_GET['namafile'];
$hapus=unlink("filetampungan/$namafile");
if($hapus){
    mysql_query("delete from download where nama_file='$namafile'");
    echo "file sudah dihapus";
}
 else {
echo "gagal menghapus file";    
}
?>
