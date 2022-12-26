<!DOCTYPE html>
<head>
  <title>Document</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h1>Masukan Angka: <input type="text" name="fname"></h1>
    <h2><input type="Submit" value="Tampilkan"></h2>
  </form>
  </div>
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fname"];
    for ($i = $name; $i >= 1; $i--) {
      for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
      }
      echo "<br />";
    }
  }
  ?>
  </div>
</body>

</html>