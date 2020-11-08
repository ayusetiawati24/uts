<?php

echo "Masukkan jam kerja : ";
$jam_kerja = trim(fgets(STDIN));

if ($jam_kerja>48) {
    $jam_lembur=$jam_kerja-48;
    $upah=$jam_lembur*80000;
    $gaji_pokok=2400000;
    $total=$upah+$gaji_pokok;

    
    echo "Jam Lembur anda : $jam_lembur jam \n"; 
    echo "Upah lembur : Rp.$upah\n";
    echo "Jumlah Gaji Pokok : Rp.$gaji_pokok\n";
    echo "Total Gaji  : Rp.$total";

}else{
    echo "Jumlah Gaji Pokok : ". $jam_kerja*50000; 
}

?>