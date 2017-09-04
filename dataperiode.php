<?php
	include_once("koneksi/conn.php");
	$sts = $_POST['sts'];
	if($sts == 'simpanper')
	{
		$datepicker = $_POST['datepicker'];
		$datepicker2 = $_POST['datepicker2'];
		$save = "insert into PERIODE (TANGGAL_MULAI, TANGGAL_AKHIR) values('$datepicker', '$datepicker2')";
		$koneksi->Execute($save);
		$result = $koneksi->Affected_Rows();
	}
?>
<div class="portlet">
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Kebutuhan Karyawan Yang Telah Terdaftar </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="134" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->ID Kebutuhan Karyawan</th>
                <th width="136" scope="col">Tanggal Dimulai</th>
				<th width="136" scope="col">Tanggal Berakhir</th>
				<?php
				$rs=$koneksi->Execute("select * from PERIODE");
				if ($rs->RecordCount() > 0)
				{
					while(!$rs->EOF)
					{
						$idper = $rs->fields[0];
						$tglmulai = $rs->fields[1];
						$tglakhir = $rs->fields[2];
						
						echo"<tr>";
							echo"<td>$idper</td>";
							echo"<td>$tglmulai</td>";
							echo"<td>$tglakhir</td>";
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
<!--/table-->