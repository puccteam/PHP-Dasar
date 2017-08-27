<?php
$emailtujuan="nuris@localhost";
$subject=$_POST['subject'];
$pesan=$_POST['pesan'];
$dari="from: ".$_POST['email']."";
mail($emailtujuan,$subject,$pesan,$dari);
echo "email sedang dikirim";
?>
