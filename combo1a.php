 <?php
include_once("koneksi/conn.php");

$nik = $_POST['nik'];
$tampil=mysql_query("SELECT NAMA FROM KARYAWAN WHERE NIK= '$nik' ORDER BY 1");


while($w=mysql_fetch_array($tampil))
{
echo "<input type='text' id='nama' value='$w[0]' disabled />";        
}
?>
