<?php
for($i=1;$i<=20;$i++)
{
    echo "ini adalah baris ke-".$i.'<br>';
}
?>
Pilih Tanggal
<select name='bulan'>
    <?php
    for($tanggal=1;$tanggal<=31;$tanggal++)
    {
        echo "<option value='$tanggal'>$tanggal</option>";
    }
    ?>
</select>
Pilih Bulan
<select name='bulan'>
    <?php
    $bulan=1;
    while($bulan<=12)
    {
        echo "<option value='$bulan'>Bulan $bulan</option>";
        $bulan++;
    }
    ?>
</select>