<?php

echo "Masukkan Nilai A : ";
$nilaiA = trim(fgets(STDIN));

echo "Masukkan Nilai B : ";
$nilaiB = trim(fgets(STDIN));

$sisimiringC = sqrt (($nilaiA*$nilaiA) + ($nilaiB*$nilaiB));

echo "Jadi Luas Sisi Miring C : $sisimiringC cm2";


?>