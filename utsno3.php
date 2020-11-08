<?php

echo "Masukkan BIlangan : ";
$bil = trim(fgets(STDIN));

for($a=$bil; $a>0; $a--){
    for($l=$bil; $l>=$a; $l--){
        echo "$l";
    } echo "\n";
}


?>