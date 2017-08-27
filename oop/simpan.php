<?php
include 'database.php';
$db=new database();

$action=$_GET['action'];
if($action=='insert')
{
    $db->insert($_POST['nama_barang'], $_POST['harga']);
    header("location:crud-tampildata.php");
}
elseif($action=='update')
{
    $db->update($_POST['nama_barang'], $_POST['harga'],$_POST['id']);
    header("location:crud-tampildata.php");
}
?>
