[22.11, 11/12/2022] Andre G: Functions
[22.12, 11/12/2022] Andre G: <?php 
require 'functions.php';


$id = $_GET["id"];


$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if ( isset($_POST["submit"]) ) {


if( ubah($_POST) > 0 ) {
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
  <title>Ubah data mahasiswa</title>
</head>
<body>

  <h1>Ubah data mahasiswa</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
    <ul>
      <li>
        <label for="nama">nama : </label>
        <input type="text" name="nama" id="nama" required
        value="<?= $mhs["nama"]; ?>">
      </li>
      <li>
        <label for="nrp">nrp : </label>
        <input type="text" name="nrp" id="nrp" required
        value="<?= $mhs["nrp"]; ?>">
      </li>
      <li>
      <label for="email">email : </label>
        <input type="text" name="email" id="email" required
        value="<?= $mhs["email"]; ?>">
      </li>
      <li>
      <label for="jurusan">jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required
        value="<?= $mhs["jurusan"]; ?>">
      </li>
      <li>
      <label for="gambar">gambar : </label> <br>
      <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>

  </form>
</body>
</html