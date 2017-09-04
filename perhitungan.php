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
else if($_SESSION['sess_role'] == 'Staff IT')
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
<link type="text/css" href="css/colorbox.css" rel="stylesheet" /> 
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
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
	<div class="grid_8" id="logo">Halaman Perhitungan</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><!--?php
		$rs=$koneksi->Execute("select count(status_kebutuhan) from kebutuhan_karyawan where status_kebutuhan='b'");
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$notif = $rs->fields[0];
				if($notif == 0 )
				{
					echo"<font color=\"grey\">( 0 )</font>";
				}
				else
				{
				echo"(&nbsp; <a class=\"mail\" href=\"notifikasi.php\" title=\"Ada $notif permintaan karyawan baru !!\">$notif</a>)";
				}
			
				
		$rs->MoveNext();
		}
	}
?-->
NIK-<?php echo $_SESSION["sess_nik"] ?>.<?php echo $_SESSION["sess_bag"] ?>&nbsp;|   Selamat Datang <a href="#"><?php echo $_SESSION["sess_username"] ?></a> - Anda login sebagai <a href="#"><?php echo $_SESSION["sess_role"] ?></a>  |    <a href="logout.php">Keluar</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="#" class="main "><span class="outer"><span class="inner dashboard">Beranda</span></span></a></li>
        <li class="item mid" id="two"><a href="periode.php" class="main "><span class="outer"><span class="inner reports">Periode</span></span></a></li>             
    <li class="item mid" id="eight"><a href="#" class="main current"><span class="outer"><span class="inner settings">Perhitungan</span></span></a></li>
	<li class="item last" id="four"><a href="perhitungan0.php" class="main"><span class="outer"><span class="inner content">Laporan</span></span></a>
	</ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="#" class="current"><span>Lihat Penilaian</span></a></li>
                      <!--li><a href="jabatan.php" ><span>Bobot</span></a></li-->
                      
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
    <h1 class="dashboard">Hasil Penilaian Kinerja Karyawan</h1>
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
	<h2>Periode Penilaian<?php $str2 = "select TANGGAL_MULAI, TANGGAL_AKHIR from PERIODE where ID_PERIODE = (select max(ID_PERIODE) from PERIODE)";
	$query2 = mysql_query($str2) or die(mysql_error());
	$periode = mysql_fetch_array($query2); echo " $periode[0] s/d $periode[1]";?></h2>
		<?php $str2 = "select B_TEKNIK_SKILL, B_PERSONALITY, B_ABSENSI, B_SANKSI from BOBOT where ID_BOBOT = (select max(ID_BOBOT) from BOBOT)";
	$query2 = mysql_query($str2) or die(mysql_error());
	$bobot1 = mysql_fetch_array($query2);
$b1 = $bobot1[0]*100;
$b2 = $bobot1[1]*100;
$b3 = $bobot1[2]*100;
$b4 = $bobot1[3]*100;
            echo "<table>
				<tr>
		<td>Teknik/Skill</td>
		<td>:</td>
		<td><input type=\"number\" id=\"teknik\" readonly value=\"$b1\"/></td><td>&nbsp;%&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Personality</td>
		<td>:</td>
		<td ><input type=\"number\" id=\"personality\" readonly value=\"$b2\"/></td>
		<td>&nbsp;%&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td ><!--input type=\"button\" id=\"ubah_bobot\" name=\"ubah_bobot\" value=\"Ubah Bobot\" onclick=\"ubahbobot();\" --></td>
		</tr>
		<tr>
		<td>Absensi</td>
		<td>:</td>
		<td><input type=\"number\" id=\"absensi\" readonly value=\"$b3\"/></td><td>&nbsp;%&nbsp;&nbsp;&nbsp;</td>
		<td>Sanksi</td>
		<td>:</td>
		<td><input type=\"number\" id=\"sanksi\" readonly value=\"$b4\"/></td><td>&nbsp;%</td>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td colspan=\"2\"><a href=\"Javascript:setdataUbah('$b1','$b2','$b3','$b4');\" class=\"button_grey_round\" title=\"Ubah Bobot\"><span><font color=\"black\">Ubah&nbsp;Bobot</font></span></a></td><td colspan=\"3\"><a href=\"simpanperhitungan.php\" class=\"button_ok\"><span>Simpan&nbsp;Perhitungan</span></a></td></tr>
	</tr>
	
	
			</table>"; ?>
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
	
<div id="detil"><a href="Javascript:lihatDetil();" class="button"><span>Lihat Detil</span></a></div>
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
				
				<th width="102" scope="col">Teknik/Skill (Lebih <font color="red">besar</font> lebih baik)</th>
				<th width="102" scope="col">Personality (Lebih <font color="red">besar</font> lebih baik)</th>
                <th width="102" scope="col">Absensi (Lebih <font color="red">besar</font> lebih baik)</th>
				<th width="102" scope="col">Sanksi (Lebih <font color="red">kecil</font> lebih baik)</th>
				<th width="102" scope="col">Nilai Akhir (Lebih <font color="red">besar</font> lebih baik)</th>
<?php
	
	$rs=$koneksi->Execute("select KRITERIA.NIK, KRITERIA.TEKNIK_SKILL, KRITERIA.PERSONALITY, KRITERIA.ABSENSI, KRITERIA.SANKSI, KARYAWAN.NAMA, BAGIAN.NAMA_BAGIAN, JABATAN.NAMA_JABATAN from KRITERIA join KARYAWAN on KRITERIA.NIK=KARYAWAN.NIK join BAGIAN on KARYAWAN.ID_BAGIAN=BAGIAN.ID_BAGIAN join JABATAN on KARYAWAN.ID_JABATAN=JABATAN.ID_JABATAN Where KRITERIA.ID_PERIODE=(SELECT MAX(ID_PERIODE) FROM PERIODE) order by 1");
//-------------SELECT 1---------------------
	$str = "SELECT MAX( TEKNIK_SKILL ) , MAX( PERSONALITY ) , MAX( ABSENSI ) , MIN( SANKSI )  FROM KRITERIA";
	$query = mysql_query($str) or die(mysql_error());
	$max = mysql_fetch_array($query);
//------------SELECT 2-------------------------
$str1 = "select B_TEKNIK_SKILL, B_PERSONALITY, B_ABSENSI, B_SANKSI from BOBOT where ID_BOBOT = (select max(ID_BOBOT) from BOBOT)";
	$query1 = mysql_query($str1) or die(mysql_error());
	$bobot = mysql_fetch_array($query1);
	
	if ($rs->RecordCount() > 0)
	{
		while(!$rs->EOF)
		{
			$NIK = $rs->fields[0];
			$c1 = $rs->fields[1];
			$c2 = $rs->fields[2];
			$c3 = $rs->fields[3];
			$c4 = $rs->fields[4];
			$nama = $rs->fields[5];
			$bagian = $rs->fields[6];
			$jabatan = $rs->fields[7];
			
			$p1 = $c1/$max[0];
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
			$v = $w1 + $w2 + $w3 + $w4;
			echo"<tr>";
				echo"<td>$NIK</td>";
				echo"<td>$nama</td>";
				echo"<td>$jabatan</td>";
				echo"<td>$bagian</td>";
				echo"<td>$c1</td>";
				echo"<td>$c2</td>";
				echo"<td>$c3</td>";
				echo"<td>$c4</td>";
				echo"<td>$v</td>";
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
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="Halaman Ubah Bobot Penilaian" style='padding:10px; background:#fff;'>
			
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
