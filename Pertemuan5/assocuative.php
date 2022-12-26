<?php 

$mahasiswa = [
    "001" => "Ahmad",
    "002" => "Budi",
    "003" => "Chika",
    "004" => "Dhini",
    "005" => "Erwim"];
    // Untuk memasukkan value, kita harus membuat key yang mereprestasikan valuenya.
    // tanda "=>" dapat diartikan sebagai merujuk
    // "key" => "Value"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    }
    <?php endforeach ?>
    
</body>
</html>