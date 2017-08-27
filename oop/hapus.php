<?php
include 'database.php';
$db=new database();
$db->delete($_GET['id']);
header("location:crud-tampildata.php");
?>
