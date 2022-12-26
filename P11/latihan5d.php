<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>

<body>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukan Angka: <input type="number" name="fname">
        <input type="submit" value="Tampilkan!">
    </form>

    <div class="margin">
        <?php  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fname'];
            for ($i = $name; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $j . " ";
                }
                echo "<br/>";
            }
        }
        ?>
    </div>
</body>

</html>