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
else if($_SESSION['sess_role'] == 'Manager')
{
	
	echo '<script language="javascript">';
	echo 'alert("Anda Tidak Memiliki Otorisasi")';
	echo ' </script>';
	header ("Location: 404.php");
}
?>

<?php
	include_once("koneksi/conn.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/ui.datepicker.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pack.js"></script>
	<script type="text/javascript" src="js/proses1.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script id="source" language="javascript" type="text/javascript" src="js/graphs.js"></script>

</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
      	<div id="colorchanger">
        	<a href="dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<!--LOGO-->
	<div class="grid_8" id="logo">Back Office - Data Administrasi</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span>NIK-<?php echo $_SESSION["sess_nik"] ?>.<?php echo $_SESSION["sess_bag"] ?>&nbsp;|   Selamat Datang <a href="#"><?php echo $_SESSION["sess_username"] ?></a> - Anda login sebagai <a href="#"><?php echo $_SESSION["sess_role"] ?></a>  |    <a href="logout.php">Keluar</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="#" class="main"><span class="outer"><span class="inner dashboard">Beranda</span></span></a></li>
        <!--li class="item middle" id="two"><a href="lowongan.php" class="main"><span class="outer"><span class="inner content">Lowongan</span></span></a></li>
        <li class="item middle" id="three"><a href="periklanan.php"><span class="outer"><span class="inner reports png">Info Periklanan</span></span></a></li>
        <li class="item middle" id="four"><a href="pendaftaran.php" class="main"><span class="outer"><span class="inner users">Info Pendaftaran</span></span></a></li-->        
		<li class="item last" id="eight"><a href="#" class="main current"><span class="outer"><span class="inner settings">Data Master</span></span></a></li>             
    </ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="bagian.php"><span>Master Bagian</span></a></li>
                      <li><a href="jabatan.php" ><span>Master Jabatan</span></a></li>
                      <li><a href="#" class="current"><span>Master Karyawan</span></a></li>
					  <!--li><a href="kriteriakaryawan.php"><span>Master Kriteria Karyawan</span></a></li>
                      <li><a href="media.php"><span>Master Media</span></a></li-->
                      <li><a href="pengguna.php"><span>Master Pengguna</span></a></li>
                           
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>
<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Data Karyawan</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <!--div class="grid_6" id="eventbox"><a href="#" class="inline_calendar">You don't have any events for today! Yay!</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
		<div class="portlet">
            <table>
			
			<tr>
				<td height="30px" width="150px" style="vertical-align:middle;">Nomor Induk Karyawan</td>
				<td width="20px" style="vertical-align:middle;">:</td>
				<td colspan="2" style="vertical-align:middle;"><input type="text" id="IDKar"></td>
				
			</tr>
			<tr>
				<td height="30px" style="vertical-align:middle;">Nama Karyawan</td>
				<td style="vertical-align:middle;">:</td>
				<td colspan="2" style="vertical-align:middle;"><input type="text" id="NamaKar"></td>
			</tr>
				<tr>
				<td height="30px" style="vertical-align:middle;">No. Telp</td>
				<td style="vertical-align:middle;">:</td>
				<td colspan="2" style="vertical-align:middle;"><input type="text" id="TelpKar"></td>	
			</tr>

			<tr>
				<td height="30px" style="vertical-align:middle;">Alamat</td>
				<td style="vertical-align:middle;">:</td>
				<td colspan="2" rowspan="1" style="vertical-align:middle;">
				<textarea name="AlamatKar" id="AlamatKar" rows="6" cols="35" style="resize: vertical"></textarea></td>
			</tr>
			<tr>
				<td height="30px" style="padding-top: 8px">Jenis Kelamin</td>
				<td valign="top">:</td>
				<td colspan="2"><select id="JK"><option value="L">Laki-laki</option><option value="P">Perempuan</option></select></td>
			</tr>
			<tr><td></td><td>
				<td rowspan="2"><input type="button" id="simpankar" name="simpankar" value="Simpan" onclick="simpankar();" />&nbsp;&nbsp;
					<input type="button" name="ubahkar" id="ubahkar" value="Ubah" onclick="ubahkar();" disabled /></td>
			</tr>
			</table>
        </div>      
      <!--THIS IS A PORTLET-->
        
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
       <div class="portlet">
	   <table>
			<tr>
				<td width="100px" height="30px" style="vertical-align:middle;">Nama Bagian</td>
				<td width="20px" style="vertical-align:middle;">:</td>
				<td colspan="2" style="vertical-align:middle;">
				<!--form id="BagianKar" name="BagianKar" method="post" action=""--> 
				
					<?php
							echo "<select name='BagianKar' id='BagianKar'>";
							$tampil=mysql_query("SELECT ID_BAGIAN, NAMA_BAGIAN FROM BAGIAN ORDER BY 1");
							

							while($w=mysql_fetch_array($tampil))
							{
								echo "<option value=$w[ID_BAGIAN] >$w[NAMA_BAGIAN]</option>";        
							}
							echo "<option value='belum pilih' selected>- Pilih Bagian -</option>";
							 echo "</select>";
						?> 
				<!--/form-->
				</td>
			</tr>
			<tr>
				<td style="vertical-align:middle;">Jabatan</td>
				<td style="vertical-align:middle;">:</td>
				<td style="vertical-align:middle;" colspan="2">
				<!--form id="JabKar" name="JabKar" method="post" action=""--> 
					<?php
							echo "<select name='JabKar' id='JabKar'>";
							$tampil=mysql_query("SELECT ID_JABATAN, NAMA_JABATAN FROM JABATAN ORDER BY 1");
							

							while($w=mysql_fetch_array($tampil))
							{
								echo "<option value=$w[ID_JABATAN] >$w[NAMA_JABATAN]</option>";        
							}
							echo "<option value='belum pilih' selected>- Pilih Jabatan -</option>";
							 echo "</select>";
						?>
				<!--/form-->
				</td>
			</tr>
	   </table>
	   </div>
      <!--THIS IS A PORTLET--> 
                             
	</div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
	
<div id="table">
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
	  </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Back Office by <a href="../index.htm">PT. Umbra Prasia</a></div>
<!-- FOOTER END -->
</body>
</html>