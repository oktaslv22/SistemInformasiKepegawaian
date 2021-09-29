<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM UBAH DATA</title>
</head>

<body>
<?php 
                                        include "koneksi.php";
                                        $id = $_GET['id_guru'];
                                        $data = mysqli_query($koneksi,"select * from data_guru where id_guru='$id'");
                                        while($row = mysqli_fetch_array($data)){
                                            ?>
    <form method="post" action="fungsiubah.php" enctype="multipart/form-data">
    <div align="center">
        <h1>Ubah Data Pegawai</h1><br>
            <table>
                <tr>
                <input hidden type="text"  value="<?php echo $row['id_guru'];?>" name="id_guru">
                    <td>NIP</td>
                    <td><input readonly type="text"  value="<?php echo $row['nip_guru'];?>" name="nip_guru"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_guru" value="<?php echo $row['nama_guru'];?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="ttl_guru" value="<?php echo $row['ttl_guru'];?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" class="btn-check" name="jk_guru" id="btnradio1" value="Perempuan" <?php if($row['jk_guru']=="Perempuan") echo 'checked';?>>
                        <label class="btn btn-outline-primary" for="btnradio1">Perempuan</label>

                        <input type="radio" class="btn-check" name="jk_guru" id="btnradio2" value="Laki - Laki" <?php if($row['jk_guru']=="Laki - Laki") echo 'checked';?>>
                        <label class="btn btn-outline-primary" for="btnradio2">Laki - Laki</label></td>
                </tr>
                <tr>
                    <td>Fungsi</td>
                    <td><input type="text" name="fungsi_guru" value="<?php echo $row['fungsi_guru'];?>"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status_guru" value="<?php echo $row['status_guru'];?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan = "2"><button type="submit" name="submit">Simpan Perubahan</button>
                    <a href = "afterlogin.php">Kembali</a></td>
                </tr>
            </table>
        </form>
<?php }

?>
    </div>
</body>

</html>