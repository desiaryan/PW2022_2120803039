<?php 

$mahasiswa = 
[
    [
    "nama" => "Dheni Aditia",
    "nim" => "2120803047",
    "jurusan" => "SI",
    "email" => "dheni@gmail.com",
    "gambar" => "gambar1.jpg"
    ],
    [
    "nama" => "Mgs Zaky",
    "nim" => "2120803048",
    "jurusan" => "TI",
    "email" => "lofy@gmail.com",
    "gambar" => "gambar2.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NIM :<?= $mhs["nim"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>