<?php

$id = $_GET["id"];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uas web';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$bk = "SELECT * FROM showroom Where id = '$id'";

$nama = $conn->query($bk);

$row = $nama->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Daftar Harga di showroom</title>
    <link rel="stylesheet" href="uas.css">
    <style>
        .header {
            background-color: #afeeee;
            text-align: center;
            padding: 20px;
        }

        nav {
            overflow: hidden;
            background-color: #6495ed;
        }

        nav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: pink;
            color: black;
        }

        p {
            text-align: center;
            font-size: medium;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        .image {
            text-align: center;
        }

        .isi {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
            font-weight: bold;
            padding-bottom: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="header">Daftar Harga di showroom</h1>
        <nav>
            <a href="user.php">Home</a>
        </nav>
    </header>
    <article>

        <p>showroom</p>
        <br />

        <div class="jpeg">
            <jpeg src="jpeg/<?= $row['gambar']; ?>" alt="" width="250">
        </div>

        <h1 class="nama"><?= $row['Nama']; ?></h1>
        <p><?= $row['Jenis']; ?></p>

        <p><?= $row['Harga']; ?></p>



    </article>

</body>

</html>