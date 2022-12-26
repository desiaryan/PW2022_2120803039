<?php 
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ) {
// cek username & password
if( $_POST["username"] == "admin" && $_POST["password"]== "123" ) {
// jika benar, redirect ke halaman admin
  header("Location: admin.php");
  exit;
} else {
// jika salah, tampilkan pesan kesalahan
  $error = true;
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style type="text/css">
    body {
      background-color: blue;
    }

    h1 {
      text-align: center;
    }

    .gojo {
      position: fixed;
      width: 550px;
      height: px;
      border: 8px solid blue;
      text-align: center;
      background-color: white;
      left: 50%;
      margin-left: -279px;
    }

    .deku {
      margin-bottom: 40px;
      margin-top: 40px;
      margin-left: 50px;
      margin-right: 50px;
      word-spacing: 1cm;
    }

  </style>
</head>
<body>
  <h1>Login Admin</h1>

  <div class="gojo">

  
  
  <form action="" method="post">
    <div class="deku">
    <label for="username">Username :</label>
    <input type="text" name="username" id="username">
    </div>
    <div class="deku">
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
    </div>
    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">Username / Password salah!</p>
    <?php endif; ?>
    <div class="sasuke">
    <button type="submit" name="submit">Login</button>
    </div>


  </form>
  </div>

</body>
</html>