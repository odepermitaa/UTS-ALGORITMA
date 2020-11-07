<?php

echo "Masukkan bilangan : ";
$bil = trim(fgets(STDIN));

for ($y = 1; $y <= $bil; $y++){
    for ($z = 1; $z <= $y; $z++){
        echo "$z";
    }
    echo "\n";
}





?>