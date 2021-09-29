<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="db_okta";
    $koneksi = mysqli_connect($servername,$username,$password,$db);
    if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }

?>