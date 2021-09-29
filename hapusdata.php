<?php
require "koneksi.php";
$id = $_GET['id_guru'];
$query = "delete from data_guru where id_guru='$id'";
mysqli_query($koneksi, $query);
if($query){ 
  header("location: afterlogin.php?pesan=hapus"); 
}else{
  echo "Data gagal dihapus. <a href='afterlogin.php'>Kembali</a>";
}
?>