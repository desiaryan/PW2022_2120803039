<!DOCTYPE html>
<html>

<head>
    <title>POST</title>
</head>

<body>

    <h1> Selamat Datang, <?= $_POST["nama"] ?>!</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Anda Yakin Ingin Keluar</th>
            </tr>
        </thead>
    </table>
    <button type="Log Out" name="Log Out">Log Out</button>

</body>

</html>
<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);
header("Location: login.php");
exit;

?>