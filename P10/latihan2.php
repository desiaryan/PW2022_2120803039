<?php 

$mahasiswa = [
["M. Andre Ghazali", "2120803042", "Sistem Informasi", "andreghazali0803@gmail.com"],
["Budi", "65413", "Teknik Informatika", "budi@gmail.com"],
["Angga", "789654", "Ilmu Komputer", "angga@gmail.com"],
["Rio", "896546", "Teknik Jaringan", "rio@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>BIO SAYA</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
   <li><?= $mhs[0]; ?></li>
   <li><?= $mhs[1]; ?></li>
   <li><?= $mhs[2]; ?></li>
   <li><?= $mhs[3]; ?></li>

</ul>
<?php endforeach; ?>
  
</body>
</html>