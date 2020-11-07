<?php

echo "Masukkan jari-jari : ";
$jari = trim(fgets(STDIN));

echo "masukkan tinggi tabung : ";
$tg = trim(fgets(STDIN));

$phi = 3.14;

$volume = $phi * $jari * $jari * $tg ;

echo "Volume tabung kamu adalah : $volume cm3";

?>
