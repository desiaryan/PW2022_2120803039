<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root","", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fecth) mahasiswa dari object result
// mysqli_fecth_row() // mengembalikan array numerik
// mysqli_fecth_assoc() // mengembalikan array associative
// mysqli_fecth_array() // mengembalikan keduanya
// mysqli_fecth_object() // 

// while( $mhs = mysqli_fecth_assoc($result)) {
//    var_dump($mhs["nama"]);
// }


?>
<!DOCTYPE html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table boorder="1" cellpadding="10" cellspacing="0">


        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">delete</a>
            </td>
            <td><img src="img/desi.jpg<?php= $row["gambar"];  ?>"
            width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>

        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>


</body>
</html>