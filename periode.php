<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.html");
}
if($_SESSION['sess_role'] == 'Staff IT')
{
	
	echo '<script language="javascript">';
	echo 'alert("Anda Tidak Memiliki Otorisasi")';
	echo ' </script>';
	header ("Location: 404.php");
}
else if($_SESSION['sess_role'] == 'Supervisor')
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
	
	  <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
	  <script src="js/jquery-1.10.2.js"></script>
	  <script src="js/jquery-ui-1.10.4.custom.js"></script>
	<script>
		  $(function() {
			$( "#datepicker" ).datepicker({dateFormat: 'dd/mm/yy'});
		  });
	</script>
	<script>
		  $(function() {
			$( "#datepicker2" ).datepicker({dateFormat: 'dd/mm/yy'});
		  });
	</script>
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
	<div class="grid_8" id="logo">Halaman Membuat Periode Baru</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span>NIK-<?php echo $_SESSION["sess_nik"] ?>.<?php echo $_SESSION["sess_bag"] ?>&nbsp;|   Selamat Datang <a href="#"><?php echo $_SESSION["sess_username"] ?></a> - Anda login sebagai <a href="#"><?php echo $_SESSION["sess_role"] ?></a>  |    <a href="logout.php">Keluar</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="#" class="main "><span class="outer"><span class="inner dashboard">Beranda</span></span></a></li>
        <li class="item mid" id="two"><a href="#" class="main current"><span class="outer"><span class="inner reports">Periode</span></span></a></li>             
    <li class="item mid" id="eight"><a href="perhitungan.php" class="main "><span class="outer"><span class="inner settings">Perhitungan</span></span></a></li>
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
                      <li><a href="#" class="current"><span>Periode</span></a></li>                         
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
    <h1 class="content_edit">Membuat Periode Baru</h1>
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
		<td height="30px" width="100px" style="vertical-align:middle;">Tanggal Dimulai</td>
		<td height="30px" width="20px" style="vertical-align:middle;">:</td>
		<td height="30px" style="vertical-align:middle;" colspan="2"><input type="text" id="datepicker"></td>
	</tr>
	<tr>
		<td height="30px" width="100px" style="vertical-align:middle;">Tanggal Berakhir</td>
		<td height="30px" width="20px" style="vertical-align:middle;">:</td>
		<td height="30px" style="vertical-align:middle;" colspan="2"><input type="text" id="datepicker2"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="button" id="simpanper" name="simpanper" value="Simpan" onclick="simpanper();" ></td>
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
    <div class="portlet">
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> Daftar Periode Yang Telah Terdaftar </div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="134" scope="col"><!--input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /-->ID Periode</th>
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
