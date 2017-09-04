<?php
	session_start();
	include_once("koneksi/conn.php");
	$sts = $_POST['sts'];
	if($sts == 'simpanuser')
	{
		$iduser = $_POST['iduser'];
		$idkaryawan = $_POST['idkaryawan'];
		$password = $_POST['password'];
		$jnspengguna = $_POST['jnspengguna'];
		$save = "insert into PENGGUNA (USERNAME,NIK,PASSWORD,JENIS_PENGGUNA,TGL_DAFTAR,STS_USER) values('$iduser','$idkaryawan','$password','$jnspengguna',(select now()),'1')";
		$koneksi->Execute($save);
		$result = $koneksi->Affected_Rows();
	}
	// else if($sts == 'ubahuser')
	// {
		// $iduser = $_POST['iduser'];
		// $idkaryawan = $_POST['idkaryawan'];
		//$password = $_POST['password'];
		// $jnspengguna = $_POST['jnspengguna'];
		// $update = "update pengguna_internal set id_pengguna_internal ='$iduser', id_karyawan ='$idkaryawan' , jenis_pengguna ='$jnspengguna'  where id_pengguna_internal='$iduser'";
		// $koneksi->Execute($update);
		// $result = $koneksi->Affected_Rows();
	// }
		else if($sts == 'delbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		//$namabag = $_POST['namabag'];
		$update = "update PENGGUNA set STS_USER=0 where USERNAME='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'Onbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		//$namabag = $_POST['namabag'];
		$update = "update PENGGUNA set STS_USER=1 where USERNAME='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
?>
<div class="portlet" >
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Pengguna Yang Telah Terdaftar </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="136" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->ID Pengguna</th>
                <th width="136" scope="col">Nama Pengguna</th>
				<th width="136" scope="col">NIK</th>
                <th width="102" scope="col">Jenis Pengguna</th>
				<th width="90" scope="col">Tanggal Daftar</th>
				<th width="90" scope="col">Status Aktif</th>
				<th width="90" scope="col">Menu</th>
               <?php
	$rs=$koneksi->Execute("select PENGGUNA.USERNAME , KARYAWAN.NAMA , KARYAWAN.NIK , PENGGUNA.JENIS_PENGGUNA, PENGGUNA.TGL_DAFTAR, PENGGUNA.STS_USER from PENGGUNA join KARYAWAN on PENGGUNA.NIK=KARYAWAN.NIK order by 1");
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$iduser = $rs->fields[0];
			$nama = $rs->fields[1];
			$idkaryawan = $rs->fields[2];
			$jnspengguna = $rs->fields[3];
			$TGL = $rs->fields[4];
			$STS = $rs->fields[5];
			if ($STS == 0)
			{
			$ket = "Tidak Aktif";
			$ket1 = "<a href=\"Javascript:Onuser('$iduser');\" class=\"approve_icon\" title=\"Aktifkan\"></a>";
			}
			else
			{
			$ket = "Aktif";
			$ket1 = "<a href=\"Javascript:deluser('$iduser');\" class=\"delete_icon\" title=\"Non Aktifkan\"></a>";
			}
			echo"<tr>";
				echo"<td>$iduser</td>";
				echo"<td>$nama</td>";
				echo"<td>$idkaryawan</td>";
				if ($jnspengguna == 1)
				{
					$role = "Staff IT";
				}
				else if ($jnspengguna == 2)
				{
					$role = "Supervisor";
				}
				else if ($jnspengguna == 3)
				{
					$role = "Manager";
				}
				echo"<td>$role</td>";
				echo"<td>$TGL</td>";
				echo"<td>$ket</td>";
				echo"<td>$ket1</td>";
				//echo"<td><a href=\"Javascript:par2('$iduser','$idkaryawan','$jnspengguna');\" class=\"edit_icon\" title=\"Edit\"></a></td>";
				
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
				$tampil=mysql_query("SELECT KARYAWAN.NIK 'nik', KARYAWAN.NAMA 'nama' FROM KARYAWAN WHERE KARYAWAN.NIK NOT IN (SELECT PENGGUNA.NIK FROM PENGGUNA) AND KARYAWAN.ID_JABATAN IN (2,5,6)");
				echo "<select name='idkaryawan' id='idkaryawan' onChange='combo3(this.value);'>";
				
				while($w=mysql_fetch_array($tampil))
				{
					echo "<option value=$w[nik] >$w[nik] / $w[nama]</option>";        
				}
				echo "<option value='belum pilih' selected>- Pilih Karyawan -</option>";
				echo "</select>";
			?>