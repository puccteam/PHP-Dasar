<?php
session_start();
if($_SESSION['status_login']=='')
{
    //echo "anda belum login";

    header("location:form.php");
}
?>
<h3>hai admin <?php echo $_SESSION['nama'];?></h3>

<a href="logout.php" title="keluar dari sistem">logout</a>