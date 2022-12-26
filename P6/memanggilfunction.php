<?php 

function luas_dua_kubus($a, $b) {

  $luas_a = $a * $a * $a;
  $luas_b = $b * $b * $b;

  $total = $luas_a + $luas_b;

  return $total;

}

echo luas_dua_kubus (9,4);
?>