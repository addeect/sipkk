<?php
	session_start();
	include_once("koneksi/conn.php");
	$sts = $_POST['sts'];
	if($sts == 'isinilai')
	{
		$nik = $_POST['nik'];
		$teknik_skill = $_POST['teknik_skill'];
		$personality = $_POST['personality'];
		$absensi = $_POST['absensi'];
		$sanksi = $_POST['sanksi'];
		$update = "insert into KRITERIA (ID_PERIODE, NIK, TEKNIK_SKILL, PERSONALITY, ABSENSI, SANKSI) values((select max(ID_PERIODE) from PERIODE),'$nik', '$teknik_skill', '$personality', '$absensi', '$sanksi')";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
		//header("Location: inputnilai.php");
	}
?>

<div class="portlet" >
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Bagian Yang Telah Terdaftar </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->NIK</th>
                <th width="136" scope="col">Nama Karyawan</th>
				<th width="102" scope="col">Nilai Teknik & Skill</th>
                <th width="102" scope="col">Nilai Personality</th>
				<th width="102" scope="col">Nilai Absensi</th>
				<th width="102" scope="col">Nilai Sanksi</th>
<?php
	$rs=$koneksi->Execute("select KARYAWAN.NIK, KARYAWAN.NAMA, KRITERIA.TEKNIK_SKILL, KRITERIA.PERSONALITY, KRITERIA.ABSENSI, KRITERIA.SANKSI from KARYAWAN join KRITERIA on KARYAWAN.NIK=KRITERIA.NIK join PERIODE on PERIODE.ID_PERIODE=KRITERIA.ID_PERIODE where PERIODE.ID_PERIODE=(select max(ID_PERIODE) from PERIODE) order by 1");
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$nik = $rs->fields[0];
			$nama = $rs->fields[1];
			$teknik_skill = $rs->fields[2];
			$personality = $rs->fields[3];
			$absensi = $rs->fields[4];
			$sanksi = $rs->fields[5];
			echo"<tr>";
				echo"<td>$nik</td>";
				echo"<td>$nama</td>";
				echo"<td>$teknik_skill</td>";
				echo"<td>$personality</td>";
				echo"<td>$absensi</td>";
				echo"<td>$sanksi</td>";
			echo"</tr>";
		$rs->MoveNext();
		}
	}
?>
              </tr>
            </thead>
          </table>
        </form>
		</div>
      </div>
<?php
	echo "[split]";
	$idbag = $_SESSION['sess_bag'];
	$tampil=mysql_query("SELECT KARYAWAN.NIK 'nik' FROM KARYAWAN WHERE KARYAWAN.NIK NOT IN (select KRITERIA.NIK from KRITERIA where KRITERIA.ID_PERIODE=(SELECT MAX(ID_PERIODE) FROM PERIODE)) AND KARYAWAN.ID_JABATAN='1' AND KARYAWAN.ID_BAGIAN='$idbag'");
	echo "<select name='nik' id='nik' onChange='combo1(this.value);'>";
	
	while($w=mysql_fetch_array($tampil))
	{
		echo "<option value=$w[nik] >$w[nik]</option>";        
	}
	echo "<option value='belum pilih' selected>- Pilih Karyawan -</option>";
	echo "</select>";

?>  
<!--/table-->