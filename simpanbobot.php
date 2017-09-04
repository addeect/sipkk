<?php
	include_once("koneksi/conn.php");
	
	$b1 = $_POST['teknik1'];
	$b2 = $_POST['personality1'];
	$b3 = $_POST['absensi1'];
	$b4 = $_POST['sanksi1'];
	
	$bo1 = $b1/100;$bo2 = $b2/100;$bo3 = $b3/100;$bo4 = $b4/100;
	
		$update = "insert into BOBOT (B_TEKNIK_SKILL,B_PERSONALITY,B_ABSENSI,B_SANKSI) values('$bo1','$bo2','$bo3','$bo4')";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	
	header ("Location: perhitungan.php");
	
?>

