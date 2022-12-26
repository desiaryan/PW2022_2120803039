<?php 

$hari = ["Senin", "Selasa", "Rabu"];

echo "array awal : ";
print_r($hari);
echo "<hr>";

echo  "array setelah di pop : ";
$hasil = array_pop($hari);
print_r($hari);
echo "<br>elemen yang di pop : $hasil <hr>";

echo "array setelah di push : ";
$hasil = array_push($hari, "Kamis", "Jum'at");
print_r($hari);
echo "<hr>";

echo "array setelah di shift : ";
$hasil = array_shift($hari);
print_r($hari);
echo "<br>elemen yang di shift : $hasil <hr>";

echo "array setelah di unshift : ";
$hasil = array_unshift($hari, "elemen", "ditambahkan");
print_r($hari);

?>