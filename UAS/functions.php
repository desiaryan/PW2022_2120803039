<?php
$conn = mysqli_connect("localhost", "root", "", "uas web");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($_data)
{
  global $conn;
  $Nama = htmlspecialchars($_data["Nama"]);
  $Merk = htmlspecialchars($_data["Merk"]);
  $Jenis = htmlspecialchars($_data["Jenis"]);
  $Harga = htmlspecialchars($_data["Harga"]);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO showroom
              VALUES
              ('', '$Nama', '$Merk', '$Jenis', '$Harga', '$gambar')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload()
{

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpname = $_FILES['gambar']['tmp_name'];

  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('yang anda upload bukan gambar!');
          </script>";
    return false;
  }

  if ($ukuranFile > 1000000) {
    echo "<script>
          alert('ukuran gambar terlalu besar!');
          </script>";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpname, 'jpeg/' . $namaFileBaru);

  return $namaFileBaru;
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM showroom WHERE Id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($_data)
{
  global $conn;

  $id = $_data["id"];
  $Nama = htmlspecialchars($_data["Nama"]);
  $Merk = htmlspecialchars($_data["Merk"]);
  $Jenis = htmlspecialchars($_data["Jenis"]);
  $Harga = htmlspecialchars($_data["Harga"]);
  $gambarLama = htmlspecialchars($_data["gambarLama"]);

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  $query = "UPDATE showroom SET
              Nama = '$Nama',
              Merk  = '$Merk',
              Jenis = '$Jenis',
              Harga = '$Harga',
              Gambar = '$gambar'
            WHERE id = $id
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM showroom
            WHERE
            Nama LIKE '%$keyword%' OR
            Merk LIKE '%$keyword%' OR
            Jenis LIKE '%$keyword%' OR
            Harga LIKE '%$keyword%' 
            ";
  return query($query);
}

?>