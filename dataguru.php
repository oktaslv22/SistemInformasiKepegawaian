<?php
include "navbar.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><b>Data Pegawai SMA YP Unila</b></span>
    <a href = "download.php" class="btn btn-dark">Unduh</a>
  </div>
</nav>
<table class="table table-light table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Fungsi</th>
                <th>Status</th>
        </thead> 
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="db_okta";
    $koneksi = mysqli_connect($servername,$username,$password,$db);
    if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
    $kueri = "SELECT * FROM data_guru";
    $hasil_kueri = mysqli_query($koneksi,$kueri);
    $no=1;
?>
        
    <?php while($data=mysqli_fetch_array($hasil_kueri)) : ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nip_guru']; ?></td>
        <td><?php echo $data['nama_guru']; ?></td>
        <td><?php echo $data['ttl_guru']; ?></td>
        <td><?php echo $data['jk_guru']; ?></td>
        <td><?php echo $data['fungsi_guru']; ?></td>
        <td><?php echo $data['status_guru']; ?></td>
        </tr>
        <?php endwhile; ?>
        </table>