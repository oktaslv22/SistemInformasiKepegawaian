<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" and $password == "") {
    header('Location: afterlogin.php');
    exit;
} else {
    echo "Password yang Anda masukkan Salah, Silahkan coba lagi.<br>";
    echo "<a href = 'login.php'>Kembali</a>";
}

?>