<?php

echo "Masukkan Jumlah Jam Kerja : ";
$j = trim(fgets(STDIN));
 
if ($j <= 48) {
    $g = 50000 * $j;
    echo "Jumlah Jam Kerja Kamu : $j\n";

    echo "Gaji Pokok Kamu : Rp.$g";

}else {
    $l = $j - 48;
    $j = $j - $l;
    $g1 = $j * 50000;
    $g2 = $l * 80000;
    $g = $g1 + $g2;

    echo "Jumlah Jam Lembur Kamu : $l jam\n";
    echo "Gaji Pokok Kamu : Rp$g1\n";
    echo "Gaji Lembur Kamu : Rp.$g2\n";
    echo "Total Gaji Kamu : Rp.$g\n";
}

?>