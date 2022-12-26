<?php 
 if (isset($_GET["angka"])) {
   $a = $_GET["angka"];
   for ($i = $a; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j . " ";
   }
   echo "<br />"; 
  }  
 }