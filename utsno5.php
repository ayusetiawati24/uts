<?php

$nilai = [
    ["Susi", 92],
    ["Andi", 80],
    ["Toto", 75],
    ["Made", 65],
    ["Dewi", 60],
];
    
for($i=0; $i<count($nilai); $i++){
    if($nilai[$i][1] >= 75){
        echo $nilai[$i][0]." Dinyatakan Lulus\n";
    } else if($nilai[$i][1] >= 65){
        echo $nilai[$i][0]." Dinyatakan Remidial\n";
    } else {
        echo $nilai[$i][0]." Dinyatakan Tidak Lulus\n";
    }
}


?>