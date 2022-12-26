<?php
session_start();
if (isset($_COOKIE['login'])) {
  if ($_COOKIE['login'] == 'true') {
    $_SESSION['login'] = true;
  }
}

require 'functions.php';
$showroom = query("SELECT * FROM showroom");


if (isset($_POST["cari"])) {
  $showroom = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Harga di showroom</h1>

  <a href="tambah.php">Tambah data di showroom</a>
  <br><br>

  <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placehorder="silahkan masukkan teks...." autocomplate="off">
    <button type="submit" name="cari">Cari</button>

  </form>

  <br>
  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Merk</th>
      <th>Jenis</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($showroom as $row): ?>
    <tr>
      <td>
        <?= $i; ?>
      </td>
      <td>
        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
    return confirm('yakin?');">hapus</a>
      </td>
      <td><img src="jpeg/<?= $row["Gambar"]; ?>" width="100"></td>
      <td>
        <?= $row["Nama"]; ?>
      </td>
      <td>
        <?= $row["Merk"]; ?>
      </td>
      <td>
        <?= $row["Jenis"]; ?>
      </td>
      <td>
        <?= $row["Harga"]; ?>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>