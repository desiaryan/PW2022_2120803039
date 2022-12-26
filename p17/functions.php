<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}


function tambah($_data) {
  global $conn;
  $nrp = htmlspecialchars($_data["nrp"]);
  $nama = htmlspecialchars($_data["nama"]);
  $email = htmlspecialchars($_data["email"]);
  $jurusan = htmlspecialchars($_data["jurusan"]);


  $gambar = upload();
  if( !$gambar ) {
    return false;
  }

  $query = "INSERT INTO mahasiswa
              VALUES
              ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
              ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function upload() {
  
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpname = $_FILES['gambar']['tmp_name'];


  if( $error === 4 ) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
          return false;
  }

$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
$ekstensiGambar = explode('.', $namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
  echo "<script>
          alert('yang anda upload bukan gambar!');
          </script>";
          return false;
}


if( $ukuranFile > 1000000 ) {
  echo "<script>
          alert('ukuran gambar terlalu besar!');
          </script>";
        return false;
}

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpname, 'img/' . $namaFileBaru);

  return $namaFileBaru;
}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

  return mysqli_affected_rows($conn);
}


function ubah($_data) {
  global $conn;

  $id = $_data["id"];
  $nrp = htmlspecialchars($_data["nrp"]);
  $nama = htmlspecialchars($_data["nama"]);
  $email = htmlspecialchars($_data["email"]);
  $jurusan = htmlspecialchars($_data["jurusan"]);
  $gambarLama = htmlspecialchars($_data["gambarLama"]);


  if( $FILES['gambar']['error'] === 4 ) {
    $gambar = $gambarLama;
  } else {
  $gambar = upload();
  }

  $query = "UPDATE mahasiswa SET
              nrp = '$nrp',
              nama  = '$nama',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id
              ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * FROM mahasiswa
            WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' 
            ";
  return query($query);
}
?>