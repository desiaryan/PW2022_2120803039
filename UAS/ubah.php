<?php
require 'functions.php';


$id = $_GET["id"];


$serial_bumi = query("SELECT * FROM serial_bumi WHERE Id = $id")[0];

if (isset($_POST["submit"])) {


  if (ubah($_POST) > 0) {
    echo "
  <script>
    alert('data berhasil diubah!');
    document.location.href = 'index.php';
  </script>  
  ";
  } else {
    echo "
  <script>
    alert('data gagal diubah!');
    document.location.href = 'index.php';
  </script>  
  ";
  }

}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Ubah data serial_bumi</title>
  <link rel="stylesheet" href="uas.css">
</head>

<body>

  <h1>Ubah data serial_bumi</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?= $serial_bumi["Id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $serial_bumi["Gambar"]; ?>">
    <ul>
      <li>
        <label for="Nama">Nama : </label>
        <input type="text" name="Nama" Id="Nama" required value="<?= $serial_bumi["Nama"]; ?>">
      </li>
      <li>
        <label for="Merk">Merk : </label>
        <input type="text" name="Merk" Id="Merk" required value="<?= $serial_bumi["Merk"]; ?>">
      </li>
      <li>
        <label for="Jenis">Jenis : </label>
        <input type="text" name="Jenis" Id="Jenis" required value="<?= $serial_bumi["Jenis"]; ?>">
      </li>
      <li>
        <label for="Harga">Harga : </label>
        <input type="text" name="Harga" Id="Harga" required value="<?= $serial_bumi["Harga"]; ?>">
      </li>
      <li>
        <label for="Gambar">Gambar : </label> <br>
        <img src="jpeg/<?= $serial_bumi['Gambar']; ?>" width="45"> <br>
        <input type="file" name="Gambar" Id="Gambar">
      </li>
      <li>
        <button type="Submit" name="Submit">Ubah Data!</button>
      </li>
    </ul>

  </form>
</body>

</html