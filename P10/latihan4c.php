<?php 

$asean = [
  "Indonesia" => "D.K.I Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "Bandar Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "Manila",
  "Myanmar" => "Naypyidaw"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Array Associative</title>
</head>
<body>
  <h1>Daftar Negara ASEAN dan ibukotanya</h1>
  <?php foreach ($asean as $nrp => $nama) : ?>
    <li><?php echo "$nrp : $nama" ?></li>
  <?php endforeach ?>
</body>
</html>