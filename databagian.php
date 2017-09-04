<?php
	include_once("koneksi/conn.php");
	$sts = $_POST['sts'];
	if($sts == 'simpanbag')
	{
		//$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		$namabag = $_POST['namabag'];
		$save = "insert into BAGIAN (NAMA_BAGIAN,TGL_ENTRI_BAG,STS_BAG) values('$namabag',(select now()),1)";
		$koneksi->Execute($save);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'ubahbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		$namabag = $_POST['namabag'];
		$update = "update BAGIAN set NAMA_BAGIAN='$namabag' where ID_BAGIAN='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'delbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		//$namabag = $_POST['namabag'];
		$update = "update BAGIAN set STS_BAG=0 where ID_BAGIAN='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
	else if($sts == 'Onbag')
	{
		$idbag = $_POST['idbag'];
		//$nama_obat = $_POST['nama_obat'];
		//$namabag = $_POST['namabag'];
		$update = "update BAGIAN set STS_BAG=1 where ID_BAGIAN='$idbag'";
		$koneksi->Execute($update);
		$result = $koneksi->Affected_Rows();
	}
?>
<div class="portlet" >
<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Bagian Yang Telah Terdaftar </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->ID Bagian</th>
                <th width="136" scope="col">Nama Bagian</th>
				<th width="102" scope="col">Tanggal Entry</th>
                <th width="102" scope="col">Status Aktif</th>
				<th width="102" scope="col">Menu</th>
<?php
	$rs=$koneksi->Execute("select * from BAGIAN order by 1");
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$idbag = $rs->fields[0];
			$namabag = $rs->fields[1];
			$tglentri = $rs->fields[2];
			$sts = $rs->fields[3];
			if ($sts == 0)
			{
			$ket = "Tidak Aktif";
			$ket1 = "<a href=\"Javascript:Onbag('$idbag');\" class=\"approve_icon\" title=\"Aktifkan\"></a>";
			}
			else
			{
			$ket = "Aktif";
			$ket1 = "<a href=\"Javascript:delbag('$idbag');\" class=\"delete_icon\" title=\"Non Aktifkan\"></a>";
			}
			echo"<tr>";
				echo"<td>$idbag</td>";
				echo"<td>$namabag</td>";
				echo"<td>$tglentri</td>";
				echo"<td>$ket</td>";
				/*if ($sts = '0'){
				echo"<td>Tidak Aktif</td>";
				}
				elseif($sts = '1'){
				echo"<td>Aktif</td>";
				}*/
				echo"<td><a href=\"Javascript:par('$idbag','$namabag');\" class=\"edit_icon\" title=\"Edit\"></a>";
				echo $ket1;
				echo "</td>";
			echo"</tr>";
		$rs->MoveNext();
		}
	}
?>
<!--/table-->