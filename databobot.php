<?php
	include_once("koneksi/conn.php");
	
	$b1 = $_POST['teknik'];
	$b2 = $_POST['personality'];
	$b3 = $_POST['absensi'];
	$b4 = $_POST['sanksi'];
	
	echo "<h1 class=\"dashboard\">Ubah Bobot Perhitungan</h1>
	<div class=\"portlet-header fixed\"><img src=\"images/icons/user.gif\" width=\"16\" height=\"16\" alt=\"Ubah Bobot\" /> Halaman Ubah Bobot</div>
		<div class=\"portlet-content nopadding\">
	<form method=\"post\" action=\"simpanbobot.php\">
	<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"box-table-a\" summary=\"Employee Pay Sheet\">
				<tr>
		<td>Teknik/Skill</td>
		<td>:</td>
		<td><input type=\"number\" name=\"teknik1\"  value=\"$b1\"  /></td><td>&nbsp;%&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Personality</td>
		<td>:</td>
		<td ><input type=\"number\" name=\"personality1\"  value=\"$b2\"  /></td>
		<td>&nbsp;%&nbsp;&nbsp;&nbsp;&nbsp;</td>
		
		</tr>
		<tr>
		<td>Absensi</td>
		<td>:</td>
		<td><input type=\"number\" name=\"absensi1\"  value=\"$b3\"  /></td><td>&nbsp;%&nbsp;&nbsp;&nbsp;</td>
		<td>Sanksi</td>
		<td>:</td>
		<td><input type=\"number\" name=\"sanksi1\"  value=\"$b4\" /></td><td>&nbsp;%</td>
	<tr><td colspan=\"8\">&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td colspan=\"5\"><input type=\"submit\" id=\"ubah_bobot\" name=\"ubah_bobot\" value=\"Ubah Bobot\" /></td></tr>
	</tr>
	
	
			</table>
			</form>";
	
?>

