<?php 
    $panjang;
    $lebar;
    function luas_persegi_panjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        return $luas;
    } 
    echo "</br>";
    echo "Rumus : Panjang * Lebar";
    echo "</br>";
    echo "</br>";
    echo "2 cm * 4 cm = " . luas_persegi_panjang(2, 4) . " cm";
?>