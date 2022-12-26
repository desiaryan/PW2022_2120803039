<?php

$panjang;
$lebar;

function luas_persegi_panjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}

echo "</br>";
echo "Rumus : Panjang * Lebar";
echo "</br>";
echo "</br>";
echo "10 cm * 7 cm = " . luas_persegi_panjang(10, 7) . " cm";

?>