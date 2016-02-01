<?php
include "fpdf.php";
include "config.php";

class PDF extends FPDF
{
function Header()
{
    $this->image('logo150.png', 10, 10, 30);
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(80);
    // Framed title
    $this->Cell(30,30,'FINEBOOK',0,0,'C');
    $this->Ln(20);
    $this -> SetFont('Arial', 'I', 8);
	$this -> Cell(0,5, 'Jl.Margonda Raya Gg.Kapuk No.19 RT.001/02 Kel.Pondok Cina Kec.Beji Depok 16424', '0', '1', 'C', false);
    // Line break
    $this->Ln();
    $this->Cell(190,0.6,'','0','1', 'C', true);
    $this->Ln(10);
}
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->Cell(190,0.1,'','1','0', 'C', true);
    $this->SetFont('Arial','B',8);
    // Print centered page number
    $this->Cell(0,10,' '.$this->PageNo(),0,0,'C');
}

}



$pdf = new PDF();
$pdf -> SetMargins('10','10','10');
$pdf -> AddPage();
/*
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(0,5, 'FINEBOOK', '0','1', 'C', false);
$pdf -> SetFont('Arial', 'i', 8);
$pdf -> Cell(0,5, 'Semoga kita selalu berada dalam lindungan Allah SWT', '0', '1', 'C', false);
$pdf -> Ln(3);
$pdf -> Cell(190,0.6,'','0','1', 'C', true);
$pdf -> Ln(5);

$pdf -> SetFont('Arial', 'B', 9);
$pdf -> Cell(50,5, 'LAPORAN BUKU', '0','1', 'L', false);
$pdf -> Ln(3);
*/
$pdf -> SetFont('Arial', 'B', 9);
$pdf -> Cell(0,5, 'LAPORAN BUKU', '0','1', 'C', false);
$pdf -> ln();
$pdf -> SetFont('Arial', 'B', 8);
$pdf -> write(5,'Berikut adalah data buku yang sudah masuk FINEBOOK pada bulan Januari 2016 :');
$pdf -> ln(10);
$pdf -> SetFont('Arial', 'B', 8);
$pdf -> Cell(8,9,'No',1, 0,'C');
$pdf -> Cell(17,9,'Kode Buku',1, 0,'C');
$pdf -> Cell(55,9,'Judul Buku',1, 0,'C');
$pdf -> Cell(40,9,'Penerbit',1, 0,'C');
$pdf -> Cell(20,9,'Tahun Terbit',1, 0,'C');
$pdf -> Cell(37,9,'Kategori',1, 0,'C');
$pdf -> Cell(15,9,'Harga',1, 0,'C');
$pdf -> Ln(0);

$no = 0;
$query = mysql_query("select * from buku");
while ($data = mysql_fetch_array($query)) {
	$no++;
	$pdf -> Ln(10);
	$pdf -> SetFont('Arial', '', 8);
	$pdf -> Cell(8,10,$no,1, 0,'C');
	$pdf -> Cell(17,10,$data['kd_buku'],1, 0,'L');
	$pdf -> Cell(55,10,$data['nama_buku'],1, 0,'L');
	$pdf -> Cell(40,10,$data['penerbit'],1, 0,'L');
	$pdf -> Cell(20,10,$data['tahun_terbit'],1, 0,'C');
	$pdf -> Cell(37,10,$data['kategori'],1, 0,'L');
	$pdf -> Cell(15,10,$data['harga'],1, 0,'L');
}

$pdf -> Output();
?>