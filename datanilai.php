<?php
	include_once("koneksi/conn.php");
	
		$p1 = $_POST['p1'];
		$p2 = $_POST['p2'];
		$sort = $_POST['sort'];
		$limit = $_POST['limit'];
		
?>
<div id="table">
    <div class="portlet" >
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Nilai Kinerja Karyawan </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->NIK</th>
                
				<th width="102" scope="col">Nama Karyawan</th>
                <th width="102" scope="col">Jabatan</th>
				<th width="102" scope="col">Bagian</th>
				<th width="102" scope="col">Nilai Akhir (Lebih <font color="red">besar</font> lebih baik)</th>
				<th width="102" scope="col">Menu</th>
<?php
	
	$rs=$koneksi->Execute("select PERHITUNGAN.NIK, KARYAWAN.NAMA, JABATAN.NAMA_JABATAN, BAGIAN.NAMA_BAGIAN, PERHITUNGAN.NILAI_VECTOR,  PERIODE.TANGGAL_MULAI, PERIODE.TANGGAL_AKHIR from PERHITUNGAN join KARYAWAN on PERHITUNGAN.NIK=KARYAWAN.NIK join BAGIAN on KARYAWAN.ID_BAGIAN=BAGIAN.ID_BAGIAN join JABATAN on KARYAWAN.ID_JABATAN=JABATAN.ID_JABATAN JOIN PERIODE ON PERIODE.ID_PERIODE=PERHITUNGAN.ID_PERIODE  where PERHITUNGAN.ID_PERIODE=(SELECT MAX(ID_PERIODE) FROM PERIODE) AND PERHITUNGAN.NILAI_VECTOR between '$p1' and  '$p2' GROUP BY 1 ORDER BY 5 $sort Limit $limit");
//-------------SELECT 1---------------------
	/*$str = "SELECT MAX( TEKNIK_SKILL ) , MAX( PERSONALITY ) , MAX( ABSENSI ) , MIN( SANKSI )  FROM kriteria";
	$query = mysql_query($str) or die(mysql_error());
	$max = mysql_fetch_array($query);*/
//------------SELECT 2-------------------------
/*$str1 = "select B_TEKNIK_SKILL, B_PERSONALITY, B_ABSENSI, B_SANKSI from bobot where ID_BOBOT = (select max(ID_BOBOT) from bobot)";
	$query1 = mysql_query($str1) or die(mysql_error());
	$bobot = mysql_fetch_array($query1);*/
	
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$NIK = $rs->fields[0];
			$nama = $rs->fields[1];
			$jabatan = $rs->fields[2];
			$bagian = $rs->fields[3];
			$nilai = $rs->fields[4];
			
			/*$p1 = $c1/$max[0];
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
			$v = $w1 + $w2 + $w3 + $w4;*/
			echo"<tr>";
				echo"<td style='vertical-align:middle;'>$NIK</td>";
				echo"<td style='vertical-align:middle;'>$nama</td>";
				echo"<td style='vertical-align:middle;'>$jabatan</td>";
				echo"<td style='vertical-align:middle;'>$bagian</td>";
				
				echo"<td style='vertical-align:middle;'>$nilai</td>";
				echo "<td style='vertical-align:middle;'><a href=\"Javascript:rekomendasi('$NIK','$nama','$jabatan','$bagian');\" class=\"button_grey_round\" title=\"Ubah Bobot\"><span><font color=\"black\">Beri&nbsp;Rekomendasi</font></span></a></td>";
				/*if ($sts = '0'){
				echo"<td>Tidak Aktif</td>";
				}
				elseif($sts = '1'){
				echo"<td>Aktif</td>";
				}*/
				//echo"<td><a href=\"Javascript:par('$idbag','$namabag');\" class=\"edit_icon\" title=\"Edit\"></a>";
				//echo $ket1;
				//echo "</td>";
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
	  </div>
<?php
	echo "[split]";
	echo "<a href=\"test_tcpdf.php?p1=$p1&p2=$p2&sort=$sort&limit=$limit \" class=\"button_grey\"><span>Cetak&nbsp;Dokumen</span></a>";
?>
<!--/table-->