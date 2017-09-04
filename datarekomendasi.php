<?php
	include_once("koneksi/conn.php");
	
	$b1 = $_POST['NIK'];
	$b2 = $_POST['nama'];
	$b3 = $_POST['jabatan'];
	$b4 = $_POST['bagian'];
	
	echo "<h1 class=\"dashboard\">Rekomendasi Manajemen</h1>
	<div class=\"portlet-header fixed\"><img src=\"images/icons/user.gif\" width=\"16\" height=\"16\" alt=\"Ubah Bobot\" />Data Karyawan</div>
		<div class=\"portlet-content nopadding\">
	<form method=\"get\" action=\"test_tcpdf1.php\" name='formRek'>
	<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"box-table-a\" summary=\"Employee Pay Sheet\">
				<tr>
		<td>NIK</td>
		<td>:</td>
		<td ><input type='text' name='nik'/ value='$b1' readonly ></td>
		
		</tr>
		<tr>
		<td>Nama</td>
		<td>:</td>
		<td ><input type='text' name='nama'/ value='$b2' readonly ></td>
		</tr>
		<tr>
		<td>Posisi</td>
		<td>:</td>
		<td ><input type='text' name='posisi'/ value='$b3&nbsp;$b4' readonly ></td>
		</tr>
		<tr>
		<td>Rekomendasi</td>
		<td>:</td>
		<td><input type=\"radio\" name=\"r1\" value=\"1\" checked>Penghargaan
<br>
<input type=\"radio\" name=\"r1\" value=\"0\">Peringatan</td>
		</tr>
	<tr><td colspan='4'><input type='submit' value='Cetak Rekomendasi' /></td></tr>
	
	
	
			</table>
			</form>";
	
?>

