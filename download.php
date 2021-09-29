<?php
require('fpdf/fpdf.php');
require("connection.php");

class Index
{

    public function getDatUser()
    {
        $connect = new Database; // Instance Class Database
        $pdf = new FPDF();
        $pdf->AddPage('L','A4',0);
        $pdf->SetFont('Arial', '', 7); // mengatur font

        $pdf->Cell(190, 7, 'Daftar Data Pegawai', 0, 1);
        $pdf->Ln(); // Berpindah baris

        $heading = array(
            'id_guru' => 'No.',
            'nip_guru' => 'NIP',
            'nama_guru' => 'Nama',
            'ttl_guru' => 'Tanggal Lahir',
            'jk_guru' => 'Jenis Kelamin',
            'fungsi_guru' => 'Fungsi',
            'status_guru' => 'Status'
        );
        $header = mysqli_query($connect->getMySQL(), "SHOW columns FROM data_guru");

        foreach ($header as $item) {
            $pdf->Cell(40, 10, $heading[$item['Field']], 1);
        }

        $rsl  = mysqli_query($connect->getMySQL(), "SELECT *  FROM data_guru ");

        foreach ($rsl as $row) {
            $pdf->Ln();
            foreach ($row as $column)
                $pdf->Cell(40, 10, $column, 1);
        }
        $pdf->Output();
    }
}

$index = new Index();
$index->getDatUser();