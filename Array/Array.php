<?php

// array biasa
$mahasiswa=array('Lukman','wahyu','rizky','ind);

// asociative array
$buahan=array('jambu'=>3000,'Apel'=>5000,'nenas'=>5000);

// Menampilkan array dengan foreach
foreach ($buahan as $nama=>$harga)
{
    echo 'buah'.$nama.' harganya '.$harga.'<br>';
}

// Menampilkan array dengan for
for($i=0;$i<=3;$i++)
{
    echo $mahasiswa[$i].'<br>';
}

?>
