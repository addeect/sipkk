<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.html");
}
if($_SESSION['sess_role'] == 'Supervisor')
{
	
	echo '<script language="javascript">';
	echo 'alert("Anda Tidak Memiliki Otorisasi")';
	echo ' </script>';
	header ("Location: 404.php");
}
else if($_SESSION['sess_role'] == 'Staff IT')
{
	
	echo '<script language="javascript">';
	echo 'alert("Anda Tidak Memiliki Otorisasi")';
	echo ' </script>';
	header ("Location: 404.php");
}
?>
<!--table-->
<?php
//ob_start();
	include_once("koneksi/conn.php");
	$rs=$koneksi->Execute("select KRITERIA.NIK, KRITERIA.TEKNIK_SKILL, KRITERIA.PERSONALITY, KRITERIA.ABSENSI, KRITERIA.SANKSI, KARYAWAN.NAMA, BAGIAN.NAMA_BAGIAN, JABATAN.NAMA_JABATAN, KRITERIA.ID_KRITERIA from KRITERIA join KARYAWAN on KRITERIA.NIK=KARYAWAN.NIK join BAGIAN on KARYAWAN.ID_BAGIAN=BAGIAN.ID_BAGIAN join JABATAN on KARYAWAN.ID_JABATAN=JABATAN.ID_JABATAN Where KRITERIA.ID_PERIODE=(SELECT MAX(ID_PERIODE) FROM PERIODE) order by 1");
//-------------SELECT 1---------------------
	$str = "SELECT MAX( TEKNIK_SKILL ) , MAX( PERSONALITY ) , MAX( ABSENSI ) , MIN( SANKSI )  FROM KRITERIA";
	$query = mysql_query($str) or die(mysql_error());
	$max = mysql_fetch_array($query);
//------------SELECT 2-------------------------
$str1 = "select B_TEKNIK_SKILL, B_PERSONALITY, B_ABSENSI, B_SANKSI, ID_BOBOT from BOBOT where ID_BOBOT = (select max(ID_BOBOT) from BOBOT)";
	$query1 = mysql_query($str1) or die(mysql_error());
	$bobot = mysql_fetch_array($query1);
	
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$NIK = $rs->fields[0];
			$c1 = $rs->fields[1];
			$c2 = $rs->fields[2];
			$c3 = $rs->fields[3];
			$c4 = $rs->fields[4];
			$nama = $rs->fields[5];
			$bagian = $rs->fields[6];
			$jabatan = $rs->fields[7];
			$kriteria = $rs->fields[8];
			
			$p1 = $c1/$max[0];
			$p2 = $c2/$max[1];
			$p3 = $c3/$max[2];
			$p4 = $max[3]/$c4;
			
			$nilaip1 = number_format($p1, 2, '.', ',');
			$nilaip2 = number_format($p2, 2, '.', ',');
			$nilaip3 = number_format($p3, 2, '.', ',');
			$nilaip4 = number_format($p4, 2, '.', ',');
			
			$w1 = $nilaip1*$bobot[0];
			$w2 = $nilaip2*$bobot[1];
			$w3 = $nilaip3*$bobot[2];
			$w4 = $nilaip4*$bobot[3];
			$v = $w1 + $w2 + $w3 + $w4;
			/*echo"<tr>";
				echo"<td>$NIK</td>";
				echo"<td>$nama</td>";
				echo"<td>$jabatan</td>";
				echo"<td>$bagian</td>";
				echo"<td>$c1</td>";
				echo"<td>$c2</td>";
				echo"<td>$c3</td>";
				echo"<td>$c4</td>";
				echo"<td>$v</td>";
				if ($sts = '0'){
				echo"<td>Tidak Aktif</td>";
				}
				elseif($sts = '1'){
				echo"<td>Aktif</td>";
				}*/
				//echo"<td><a href=\"Javascript:par('$idbag','$namabag');\" class=\"edit_icon\" title=\"Edit\"></a>";
				//echo $ket1;
				//echo "</td>";
			//echo"</tr>";
			
			//$namabag = $_POST['namabag'];
		$save = "insert into PERHITUNGAN (ID_KRITERIA,ID_PERIODE,NIK,ID_BOBOT,NILAI_VECTOR) values('$kriteria',(select max(ID_PERIODE) from PERIODE),'$NIK',(SELECT MAX(ID_BOBOT) FROM BOBOT),$v)";
		$koneksi->Execute($save);
		$result = $koneksi->Affected_Rows();
		$rs->MoveNext();
		}
	}
	//header ("Location: perhitungan0.php");
	//header('Location: perhitungan0.php');
//exit;
echo "<meta http-equiv='refresh' content='0; url=perhitungan0.php' />";
?>
<!--/table-->
\