<?php
include "koneksi.php";
    $id = $_POST['id_guru'];
    $nip = $_POST['nip_guru'];
    $nama = $_POST['nama_guru'];
    $ttl = $_POST['ttl_guru'];
    $jk = $_POST['jk_guru'];
    $fungsi = $_POST['fungsi_guru'];
    $status = $_POST['status_guru'];
    mysqli_query($koneksi,"update `data_guru` set nama_guru='$nama',ttl_guru='$ttl',jk_guru='$jk',fungsi_guru='$fungsi',status_guru='$status' where `id_guru` ='$id'");
        header("location:afterlogin.php");
        ?>