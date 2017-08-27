<?php
$gender=$_POST['gender'];
//echo $gender;
if($gender=='l')
{
    echo "kamu laki laki";
}
elseif($gender=='w')
{
    echo "kamu perempuan";
}
else
{
    echo "kamu bukan laki laki dan perempuan";
}
?>
