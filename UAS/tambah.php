<?php
require 'functions.php';


if (isset($_POST["submit"])) {


  if (tambah($_POST) > 0) {
    echo "
  <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'admin.php';
  </script>  
  ";
  } else {
    echo "
  <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'admin.php';
  </script>  
  ";
  }

}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Document</title>
  <link rel="stylesheet" href="uas.css">
</head>

<body>

  <h1>Tambah data Showroom Honda</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="Nama">nama : </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="Merk">merk : </label>
        <input type="text" name="merk" id="merk" required>
      </li>
      <li>
        <label for="Jenis">jenis : </label>
        <input type="text" name="jenis" id="jenis" required>
      </li>
      <li>
        <label for="Harga">harga : </label>
        <input type="text" name="harga" id="harga" required>
      </li>
      <li>
        <label for="Gambar">gambar : </label>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data Showroom!</button>
      </li>
    </ul>

  </form>
</body>

</html>