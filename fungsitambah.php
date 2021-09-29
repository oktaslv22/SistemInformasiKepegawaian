<?php

require "koneksi.php";

function tambah($data)
{
    global $koneksi;
    $nip = $_POST['nip_guru'];
    $nama = $_POST['nama_guru'];
    $ttl = $_POST['ttl_guru'];
    $jk = $_POST['jk_guru'];
    $fungsi = $_POST['fungsi_guru'];
    $status = $_POST['status_guru'];
    $query = "insert into data_guru values (NULL,'$nip', '$nama', '$ttl', '$jk', '$fungsi', '$status')";
    if (mysqli_query($koneksi, $query)) {
        echo "New Record created Successfully";
    } else {
        echo "Data gagal ditambah. <a href='afterlogin.php'>Kembali</a>";
    }
}

?>