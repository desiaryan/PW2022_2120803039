<?php 

$mahasiswa = ["M. Andre Ghazali", "2120803042", "Sistem Informasi", "andreghazali0803@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>BIO SAYA</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?= $mhs; ?></li>
      <?php endforeach ?>
</ul>
  
</body>
</html>