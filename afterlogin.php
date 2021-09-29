<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wNIPth=device-wNIPth, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light " style = "background-color: #ffbd54;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="logoyp.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
            <b>Sistem Informasi Kepegawaian</b></a></div></nav><br>

<a href="index.php" class = "btn btn-dark">Kembali ke Halaman Utama</a>
<a href="tambahdata.php" class = "btn btn-dark">Input Data</a><br><br>

    <span class="navbar-brand mb-0 h1"><b>Data Pegawai</b></span>
  </div>
</nav>

<table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Fungsi</th>
                <th>Status</th>
                <th colspan="2"><center>Aksi</th>
        </thead> 
<?php
    include "koneksi.php";
    $kueri = "SELECT * FROM data_guru";
    $hasil_kueri = mysqli_query($koneksi,$kueri);
    $no=1;
?>
        
    <?php while($data=mysqli_fetch_array($hasil_kueri)) {?>
    <tbody>
      <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nip_guru']; ?></td>
      <td><?php echo $data['nama_guru']; ?></td>
      <td><?php echo $data['ttl_guru']; ?></td>
      <td><?php echo $data['jk_guru']; ?></td>
      <td><?php echo $data['fungsi_guru']; ?></td>
      <td><?php echo $data['status_guru']; ?></td>
      <td>
      <a href='ubahdata.php?id_guru=<?php echo $data['id_guru']; ?>' class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
      <a href='hapusdata.php?id_guru=<?php echo $data['id_guru']; ?>' class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
      </td>
      </tr>
      <?php
  }
  ?> 
  </tbody>
  </table>
