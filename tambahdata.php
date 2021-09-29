<?php
require "fungsitambah.php";


if (isset($_POST['submit'])) {
    tambah($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH DATA</title>
</head>

<body>
    <div align="center">
        <h1>INPUT DATA PEGAWAI</h1><br>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>NIP</td>
                    <td><input type="int" min="1" name="nip_guru"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text"  name="nama_guru"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="ttl_guru"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                    <input type="radio" class="btn-check" name="jk_guru" value="Perempuan" id="#">
                        <label class="btn btn-outline-primary" for="btnradio1">Perempuan</label>
                    <input type="radio" class="btn-check" name="jk_guru" value="Laki - Laki" id="#">
                        <label class="btn btn-outline-primary" for="btnradio2">Laki - Laki</label></td>
                </tr>
                <tr>
                    <td>Fungsi</td>
                    <td><input type="text" name="fungsi_guru"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status_guru"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button>
                    <a href = "afterlogin.php">Kembali</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>