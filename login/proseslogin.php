<?php
session_start();
$username   =$_POST['username'];
$password   =  md5($_POST['password']);
mysql_connect('localhost','root','');
mysql_select_db('project');
$query=  mysql_query("select * from users where username='$username' and password='$password'");
$jumlah=  mysql_num_rows($query);
if($jumlah>0)
{
    $r=  mysql_fetch_array($query);
    $_SESSION['status_login']='sudah_login';
    $_SESSION['nama']=$r['username'];
    header("location:admin.php");
}
else{
    header("location:form.php");
}
?>
