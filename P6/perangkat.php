<?php 

function pangkat ($angka, $pangkat) {
    $bilangan = $angka;
    for ($i=0; $i <($pangkat-1); $i++) { 
       $bilangan = $bilangan * $angka;  
    }
    return $bilangan;

    
   
} 
echo "5 pangkat 4" . " = " . pangkat (5, 4)
 ?>