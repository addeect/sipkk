<?php
set_time_limit(0);
ob_start(); 
require_once('tcpdf/examples/lang/eng.php');
include_once('tcpdf/tcpdf.php');
include_once("koneksi/conn.php");

$nik=$_GET['nik'];
$nama=$_GET['nama'];
$posisi=$_GET['posisi'];
$rekomendasi=$_GET['r1'];
echo "<center><h1>Surat Rekomendasi</h1></center>";
echo "Tanggal : ". date("d/m/Y") . "<br>";
echo "Perihal : Rekomendasi Manajemen<br>";
if($rekomendasi==1)
{
	echo "<p align=\"justify\">	Dengan ini menyatakan bahwa karyawan dengan keterangan sebagai berikut :</p><br><p> NIK : $nik <br> Nama : $nama <br> Posisi : $posisi <br></p><p align=\"justify\">Termasuk karyawan yang berprestasi. 
	Oleh karena itu Manajemen PT. Umbra Prasia akan memberikan penghargaan sebagai Karyawan Teladan dan akan dipertimbangkan untuk promosi jabatan karyawan.</p>";
}
else if($rekomendasi==0)
{
	echo "<p align=\"justify\">	Dengan ini menyatakan bahwa karyawan dengan keterangan sebagai berikut :</p><br><p> NIK : $nik <br> Nama : $nama <br> Posisi : $posisi <br></p><p align=\"justify\">Termasuk karyawan yang berpotensi menyebabkan penurunan kualitas produk & berpotensi melakukan penyimpangan perilaku kerja. 
	Oleh karena itu Manajemen PT. Umbra Prasia akan memberikan surat peringatan pada karyawan yang bersangkutan.</p>";
}
echo "</br>";
echo "<table><tr><td> </td><td> </td><td align='center'><p >Mengetahui</p></td></tr><tr><td> </td><td> </td><td>Manajemen PT. Umbra Prasia</td></tr><tr><td></td></tr><tr><td></td></tr><tr><td> </td><td> </td><td>Manager</td></tr></table>";
$contents = trim(ob_get_contents()); 
ob_end_clean();
 

   $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 

   // set document information
   $pdf->SetCreator(PDF_CREATOR);
   $pdf->SetAuthor('Manajemen PT.Umbra Prasia');
   $pdf->SetTitle('');
   $pdf->SetSubject('');
   $pdf->SetKeywords('');

   // set default header data
   $str = "SELECT TANGGAL_MULAI 'Mulai', TANGGAL_AKHIR 'Akhir' FROM PERIODE WHERE ID_PERIODE=(SELECT MAX(ID_PERIODE))";
	$query = mysql_query($str) or die(mysql_error());
	$max = mysql_fetch_array($query);
	$t1 = "   PT. UMBRA PRASIA";
	//$t2 = "Dengan Nilai Akhir Antara $p1 s/d $p2";
	//$t =  "<img src='images\logo%20copy.png'/>";
   $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
   
   $pdf->SetHeaderData('logo.jpg', '10x10', $t1, '   Jl. Gatot Subroto, desa Tebel Gedangan-Sidoarjo 61254');

   // set header and footer fonts
   
   $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
   $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

   // set default monospaced font
   $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

   //set margins
   $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
   $pdf->SetMargins('22','23','22');
   $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
   $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

   //set auto page breaks
   $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

   //set image scale factor
   $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); 

   //set some language-dependent strings
   $pdf->setLanguageArray($l); 

   // ---------------------------------------------------------

   // set font
   $pdf->SetFont('Times', '', 11);

   // add a page
   $pdf->AddPage();

   // output the HTML content
   $pdf->writeHTML($contents, true, 0, true, 0);

   // reset pointer to the last page
   $pdf->lastPage();

   // ---------------------------------------------------------

   // Close and output PDF document
   $ftemp = sys_get_temp_dir() . '/' . 'foo.tmp';
   $file = $pdf->Output($ftemp, 'F');

   // We'll be outputting a PDF
   header('Content-type: application/pdf');
   // header('Content-length: ' . strlen($file));

   // It will be called downloaded.pdf
   $fname = "Laporan Nilai Karyawan Periode $max[0]-$max[1].pdf";
  // header('Content-Disposition: attachment; filename="'. $fname . '"');
   // The PDF source is in original.pdf

   $fp = fopen($ftemp, 'rb');
   while (!feof($fp)) {
      echo fread($fp, 512);
      ob_flush(); flush();
   }

   fclose($fp);
   @unlink($ftemp);
   exit;
   
?>