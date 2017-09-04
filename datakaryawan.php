<?php
	include_once("koneksi/conn.php");
	$sts = $_POST['sts'];
	if($sts == 'simpankar')
	{
		$IDKar = $_POST['IDKar'];
		$NamaKar = $_POST['NamaKar'];
		$JK = $_POST['JK'];
		$AlamatKar = $_POST['AlamatKar'];
		//$EmailKar = $_POST['EmailKar'];
		$TelpKar = $_POST['TelpKar'];
		$BagianKar = $_POST['BagianKar'];
		$JabKar = $_POST['JabKar'];
		//$StatKar = $_POST['StatKar'];
		$save = "insert into KARYAWAN (NIK,ID_JABATAN,ID_BAGIAN,NAMA,ALAMAT,JK,TELP,TGL_MASUK,STS_KAR) values('$IDKar','$JabKar','$BagianKar','$NamaKar','$AlamatKar','$JK','$TelpKar',(select now()),'1')";
		$koneksi->Execute($save);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'ubahkar')
	{
		$IDKar = $_POST['IDKar'];
		$NamaKar = $_POST['NamaKar'];
		$JK = $_POST['JK'];
		$AlamatKar = $_POST['AlamatKar'];
		//$EmailKar = $_POST['EmailKar'];
		$TelpKar = $_POST['TelpKar'];
		$BagianKar = $_POST['BagianKar'];
		$JabKar = $_POST['JabKar'];
		//$StatKar = $_POST['StatKar'];
		$update = "update KARYAWAN set NIK='$IDKar', ID_JABATAN='$JabKar', ID_BAGIAN='$BagianKar', NAMA='$NamaKar', ALAMAT='$AlamatKar', JK='$JK', TELP='$TelpKar' where NIK='$IDKar'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'delbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		//$namabag = $_POST['namabag'];
		$update = "update KARYAWAN set STS_KAR=0 where NIK='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'Onbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		//$namabag = $_POST['namabag'];
		$update = "update KARYAWAN set STS_KAR=1 where NIK='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
?>
    <div class="portlet" >
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Karyawan Yang Telah Terdaftar </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="120" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->NIK</th>
                <th width="120" scope="col">Jabatan</th>
                <th width="90" scope="col">Bagian</th>
				<th width="90" scope="col">Nama Karyawan</th>
				<th width="90" scope="col">Alamat</th>
				<th width="90" scope="col">Jenis Kelamin</th>
				
				<th width="90" scope="col">No. Telp</th>
				<th width="90" scope="col">Tanggal Masuk</th>
				<th width="90" scope="col">Status Aktif</th>
				<th width="90" scope="col">Menu</th>
               <?php
	$rs=$koneksi->Execute("select k.NIK, j.ID_JABATAN, b.ID_BAGIAN, k.NAMA, k.ALAMAT,k.JK, k.TELP, k.TGL_MASUK, k.STS_KAR, j.NAMA_JABATAN, b.NAMA_BAGIAN from KARYAWAN k join JABATAN j on k.ID_JABATAN=j.ID_JABATAN join BAGIAN b on k.ID_BAGIAN=b.ID_BAGIAN order by 1");
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$IDKar = $rs->fields[0];
			$JabKar = $rs->fields[1];
			$BagianKar = $rs->fields[2];
			$NamaKar = $rs->fields[3];
			$AlamatKar = $rs->fields[4];
			$JK = $rs->fields[5];
			$TelpKar = $rs->fields[6];
			$TGL = $rs->fields[7];
			$StatKar = $rs->fields[8];
			$namaJab = $rs->fields[9];
			$namabag = $rs->fields[10];
			if ($StatKar == 0)
			{
			$ket = "Tidak Aktif";
			$ket1 = "<a href=\"Javascript:Onkar('$IDKar');\" class=\"approve_icon\" title=\"Aktifkan\"></a>";
			}
			else
			{
			$ket = "Aktif";
			$ket1 = "<a href=\"Javascript:delkar('$IDKar');\" class=\"delete_icon\" title=\"Non Aktifkan\"></a>";
			}
			
			echo"<tr>";
				echo"<td>$IDKar</td>";
				echo"<td>$namaJab</td>";
				echo"<td>$namabag</td>";
				echo"<td>$NamaKar</td>";
				echo"<td>$AlamatKar</td>";
				echo"<td>$JK</td>";
				
				echo"<td>$TelpKar</td>";
				echo"<td>$TGL</td>";
				echo"<td>$ket</td>";
				
				echo"<td><a href=\"Javascript:par6('$IDKar','$NamaKar','$AlamatKar','$JK','$TelpKar','$BagianKar','$JabKar');\" class=\"edit_icon\" title=\"Edit\"></a>$ket1</td>";
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