<?php
$hoby=$_POST['hobi'];
switch($hoby)
{
    case "membaca";
        echo "hoby anda adalah membaca";
        break;
    case "menulis";
        echo "hoby anda adalah menulis";
        break;
    case "mendengarkan";
        echo "hoby anda mendengarkan";
        break;
    default:
        echo "hoby saya selain yang diatas";
}
?>
