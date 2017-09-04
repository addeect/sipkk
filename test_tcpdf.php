<?php
set_time_limit(0);
ob_start(); 
require_once('tcpdf/examples/lang/eng.php');
include_once('tcpdf/tcpdf.php');
include_once("koneksi/conn.php");

$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$sort = $_GET['sort'];
$limit = $_GET['limit'];
echo "Tanggal : ". date("d/m/Y") . "<br>";
echo "Perihal : Nilai Akhir Kinerja Karyawan<br>";
if($sort=='DESC')
{
	$k1 = 'teratas';
}
else if($sort=='ASC')
{
	$k1 = 'terbawah';
}
echo " <p>Berikut daftar nilai $limit karyawan $k1 : </p><br><br>";

$i=0;
$rs = $koneksi->Execute("select PERHITUNGAN.NIK, KARYAWAN.NAMA, JABATAN.NAMA_JABATAN, BAGIAN.NAMA_BAGIAN, PERHITUNGAN.NILAI_VECTOR,  PERIODE.TANGGAL_MULAI, PERIODE.TANGGAL_AKHIR from PERHITUNGAN join KARYAWAN on PERHITUNGAN.NIK=KARYAWAN.NIK join BAGIAN on KARYAWAN.ID_BAGIAN=BAGIAN.ID_BAGIAN join JABATAN on KARYAWAN.ID_JABATAN=JABATAN.ID_JABATAN JOIN PERIODE ON PERIODE.ID_PERIODE=PERHITUNGAN.ID_PERIODE  where PERHITUNGAN.ID_PERIODE=(SELECT MAX(ID_PERIODE) FROM PERIODE) AND PERHITUNGAN.NILAI_VECTOR between '$p1' and  '$p2' GROUP BY 1 ORDER BY 5 $sort Limit $limit");
	echo "<table border=1 cellpadding=1 cellspacing=1>";
		
			echo "<tr bgcolor=\"#A3C2FF\">";	
				echo "<th > NIK </th>";
				echo "<th > Nama Karyawan </th>";	
				echo "<th > Jabatan</th>";
				echo "<th > Bagian</th>";
				echo "<th > Nilai Akhir (V)</th>";
			echo "</tr>";	
			
		
		if ($rs->RecordCount() > 0){			
		
			while(!$rs->EOF){
				$nik = $rs->fields[0];
				$nama = $rs->fields[1];
				$jabatan = $rs->fields[2];			
				$bagian = $rs->fields[3];
				$nilai = $rs->fields[4];
				
				if($i%2 == 0){
				$color = "\"#DBDBDB\"";
				}
				else{
				$color = "\"#FFFFFF\"";
				}
				
				echo "<tr bgcolor=$color>";	
					echo "<td > $nik </td>";
					echo "<td > $nama</td>";
					echo "<td > $jabatan</td>";
					echo "<td > $bagian</td>";
					echo "<td > $nilai</td>";
										
				echo "</tr>";
			$rs->MoveNext(); 	
			$i++;
			}
		}	
			
		
	echo "</table><br><hr>";
	
	$str = "SELECT B_TEKNIK_SKILL, B_PERSONALITY, B_ABSENSI, B_SANKSI FROM BOBOT WHERE ID_BOBOT = (SELECT MAX(ID_BOBOT) FROM BOBOT)";
	$query = mysql_query($str) or die(mysql_error());
	$data = mysql_fetch_array($query);
echo "<br><p>Nilai akhir diperoleh dari perhitungan nilai setiap kriteria yang diolah menggunakan metode Simple Additive Weighting dengan nilai bobot setiap kriteria sebagai berikut :</p><br>";
echo "<p>Teknik/Skill : $data[0]   Personality : $data[1]   Absensi : $data[2]   Sanksi : $data[3]</p>";
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
	$t2 = "Daftar Nilai Karyawan Periode $max[0] s/d $max[1]";
	$t1 = "   PT. UMBRA PRASIA";
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