<?php 
 $angka= $_GET['angka']='10';
 for ($i=$angka; $i >= 1; $i--) { 
    for ($j=1; $j <=$i; $j++) { 
        echo $j;
    }
    echo "<br>";
 }

 if (isset ($_GET['angka'])) {
    $angka = "Angka Tidak Diset di Method Get";
    echo $angka;
 }