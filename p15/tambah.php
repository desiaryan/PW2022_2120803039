<?php 
require 'functions.php';


if ( isset($_POST["submit"]) ) {


if( tambah($_POST) > 0 ) {
  echo "
  <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
  </script>  
  ";
} else {
  echo "
  <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
  </script>  
  ";
}
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>
<body>

  <h1>Tambah data mahasiswa</h1>

  <form action="" method="post">
    <ul>
      <li>
        <label for="nama">nama : </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="nrp">nrp : </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li>
      <label for="email">email : </label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
      <label for="jurusan">jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
      <label for="gambar">gambar : </label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>

  </form>
</body>
</html>