<?php
include_once "adodb/adodb.inc.php";
$koneksi = NewADOConnection("mysql");
$koneksi->Connect("localhost", "qualityg_prpl3", "project7","qualityg_prpl3");

	if(! $koneksi){
	echo "GAGAL";
	}
global $koneksi;
define('ROWS_PER_PAGE', 5);

?>