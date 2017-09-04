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
                      <li><a href="karyawan.php"><span>Master Karyawan</span></a></li>
					  <!--li><a href="kriteriakaryawan.php"><span>Master Kriteria Karyawan</span></a></li>
                      <li><a href="media.php"><span>Master Media</span></a></li-->
                      <li><a href="#" class="current" ><span>Master Pengguna</span></a></li>
                           
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
    <h1 class="dashboard">Data Pengguna</h1>
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
		<td width="200px" height="30px" style="vertical-align:middle;">ID Pengguna</td>
		<td width="20px" style="vertical-align:middle;">:</td>
		<td colspan="2" style="vertical-align:middle;"><input type="text" id="idpengguna"></td>
	</tr>
	<tr>
		<td width="120px" height="30px" style="vertical-align:middle;">ID Karyawan / Nama Karyawan</td>
		<td style="vertical-align:middle;">:</td>
		<td colspan="2" style="vertical-align:middle;">
		<div id="loadcombo1">
			<?php
				$tampil=mysql_query("SELECT KARYAWAN.NIK 'nik', KARYAWAN.NAMA 'nama' FROM KARYAWAN WHERE KARYAWAN.NIK NOT IN (SELECT PENGGUNA.NIK FROM PENGGUNA) AND KARYAWAN.ID_JABATAN IN (2,5,6)");
				echo "<select name='idkaryawan' id='idkaryawan' onChange='combo3(this.value);'>";
				
				while($w=mysql_fetch_array($tampil))
				{
					echo "<option value=$w[nik] >$w[nik] / $w[nama]</option>";        
				}
				echo "<option value='belum pilih' selected>- Pilih Karyawan -</option>";
				echo "</select>";
			?>
		</td>
	</tr>
	<tr>
		<td width="120px" height="30px" style="vertical-align:middle;">Password</td>
		<td style="vertical-align:middle;">:</td>
		<td colspan="2" style="vertical-align:middle;"><input type="password" id="password"></td>
	</tr>
	<tr>
		<td width="120px" height="30px" style="vertical-align:middle;">Ulangi Password</td>
		<td style="vertical-align:middle;">:</td>
		<td colspan="2" style="vertical-align:middle;"><input type="password" id="password1"></td>
	</tr>
	<tr>
		<td width="120px" height="30px" style="vertical-align:middle;">Jenis Pengguna</td>
		<td style="vertical-align:middle;">:</td>
		<td style="vertical-align:middle;" colspan="2">
		<select name="jnspengguna" id="jnspengguna">
				<option value="1">Staff IT</option>
				<option value="2">Supervisor</option>
				<option value="3">Manager</option>
			</select></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="button" id="simpanuser" name="simpanuser" value="Simpan" onclick="simpanuser();" ></td>
	</tr>
			</table>
        </div>      
      <!--THIS IS A PORTLET-->
        
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
       
      <!--THIS IS A PORTLET--> 
                             
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
	

<div id="table">
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
