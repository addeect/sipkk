function simpanbag()
{
	//var idbag = document.getElementById("idbag").value;
	var namabag = document.getElementById("namabag").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "databagian.php";
	var params = "namabag="+namabag+"&sts=simpanbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	//document.getElementById("idbag").value = "";
	document.getElementById("namabag").value = "";
	
}

function par(idbag,namabag){
	document.getElementById("idbag").value=idbag;
	document.getElementById("namabag").value=namabag;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "databagian.php";
	var params = "idbag="+idbag+"&namabag="+namabag;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idbag").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	document.getElementById("simpanbag").disabled = true;
	document.getElementById("ubahbag").disabled = false;
	//document.getElementById("idbag").disabled = true;
}

function ubahbag()
{
	
	var idbag = document.getElementById("idbag").value;
	var namabag = document.getElementById("namabag").value;
	
	alert("Ubah menjadi bagian "+namabag+"?");
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "databagian.php";
	var params = "idbag="+idbag+"&namabag="+namabag+"&sts=ubahbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idbag").value = "";
	document.getElementById("namabag").value = "";
	document.getElementById("simpanbag").disabled = false;
	document.getElementById("ubahbag").disabled = true;
	//document.getElementById("idbag").disabled = false;
}

function delbag(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "databagian.php";
	var params = "idbag="+idbag+"&sts=delbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}

function Onbag(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "databagian.php";
	var params = "idbag="+idbag+"&sts=Onbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}


//--------------------------------------------------------------------------------
function simpanjab()
{
	//var idjab = document.getElementById("idjab").value;
	var namajab = document.getElementById("namajab").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url1 = "datajabatan.php";
	var params1 = "namajab="+namajab+"&sts=simpanjab";
	xmlhttp.open("POST", url1, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params1);
	
	//document.getElementById("idjab").value = "";
	document.getElementById("namajab").value = "";
	
}
function parJab(idbag,namabag){
	document.getElementById("idjab").value=idbag;
	document.getElementById("namajab").value=namabag;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datajabatan.php";
	var params = "idjab="+idjab+"&namajab="+namajab;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idjab").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	document.getElementById("simpanbag").disabled = true;
	document.getElementById("ubahbag").disabled = false;
	//document.getElementById("idbag").disabled = true;
}

function ubahjab()
{
	
	var idjab = document.getElementById("idjab").value;
	var namajab = document.getElementById("namajab").value;
	
	alert("Ubah menjadi jabatan "+namajab+"?");
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datajabatan.php";
	var params = "idjab="+idjab+"&namajab="+namajab+"&sts=ubahjab";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idjab").value = "";
	document.getElementById("namajab").value = "";
	document.getElementById("simpanbag").disabled = false;
	document.getElementById("ubahbag").disabled = true;
	//document.getElementById("idbag").disabled = false;
}

function deljab(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datajabatan.php";
	var params = "idbag="+idbag+"&sts=delbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}

function Onjab(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datajabatan.php";
	var params = "idbag="+idbag+"&sts=Onbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}
//--------------------------------------------------------------------------------
function simpanuser()
{
	var iduser = document.getElementById("idpengguna").value;
	var idkaryawan = document.getElementById("idkaryawan").value;
	var password = document.getElementById("password").value;
	var password1 = document.getElementById("password1").value;
	var jnspengguna = document.getElementById("jnspengguna").value;
	if(password==password1)
	{
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		var url1 = "datapengguna.php";
		var params1 = "iduser="+iduser+"&idkaryawan="+idkaryawan+"&password="+password+"&jnspengguna="+jnspengguna+"&sts=simpanuser";
		xmlhttp.open("POST", url1, true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				var data = xmlhttp.responseText;
				var explode = data.split('[split]');
				document.getElementById("loadcombo1").innerHTML=explode[1];
				document.getElementById("table").innerHTML=explode[0];
			}
		}
		xmlhttp.send(params1);
	
	document.getElementById("idpengguna").value = "";
	document.getElementById("idkaryawan").value = "";
	document.getElementById("password").value = "";
	document.getElementById("password1").value = "";
	document.getElementById("jnspengguna").value = "";
	}
	else{
	alert("Password tidak sama !");
	}
}

function par2(iduser,idkaryawan,jnspengguna){
	document.getElementById("idpengguna").value=iduser;
	document.getElementById("idkaryawan").value=idkaryawan;
	document.getElementById("jnspengguna").value=jnspengguna;
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url1 = "datapengguna.php";
	var params1 = "iduser="+iduser+"&idkaryawan="+idkaryawan+"&jnspengguna="+jnspengguna;
	xmlhttp.open("POST", url1, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idpengguna").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params1);
	document.getElementById("simpanuser").disabled = true;
	document.getElementById("ubahuser").disabled = false;
	document.getElementById("idpengguna").disabled = true;
	document.getElementById("password").disabled = true;
}

function ubahuser()
{
	
	var iduser = document.getElementById("idpengguna").value;
	var idkaryawan = document.getElementById("idkaryawan").value;
	
	var jnspengguna = document.getElementById("jnspengguna").value;
	
	alert(iduser);
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url1 = "datapengguna.php"
	var params1 = "iduser="+iduser+"&idkaryawan="+idkaryawan+"&jnspengguna="+jnspengguna+"&sts=ubahuser";
	xmlhttp.open("POST", url1, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params1);
	
	document.getElementById("idpengguna").value = "";
	document.getElementById("idkaryawan").value = "";
	document.getElementById("jnspengguna").value = "";
	document.getElementById("simpanuser").disabled = false;
	document.getElementById("ubahuser").disabled = true;
	document.getElementById("idpengguna").disabled = false;
	document.getElementById("password").disabled = false;
}
function deluser(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datapengguna.php";
	var params = "idbag="+idbag+"&sts=delbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var data = xmlhttp.responseText;
			var explode = data.split('[split]');
			document.getElementById("loadcombo1").innerHTML=explode[1];
			document.getElementById("table").innerHTML=explode[0];
		}
	}
	xmlhttp.send(params);
	
}

function Onuser(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datapengguna.php";
	var params = "idbag="+idbag+"&sts=Onbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var data = xmlhttp.responseText;
			var explode = data.split('[split]');
			document.getElementById("loadcombo1").innerHTML=explode[1];
			document.getElementById("table").innerHTML=explode[0];
		}
	}
	xmlhttp.send(params);
	
}
//--------------------------------------------------------------------------------
function simpanmed()
{
	var idmed = document.getElementById("idmed").value;
	var namamed = document.getElementById("namamed").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datamedia.php";
	var params = "idmed="+idmed+"&namamed="+namamed+"&sts=simpanmed";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idmed").value = "";
	document.getElementById("namamed").value = "";
	
}

function par3(idmed,namamed){
	document.getElementById("idmed").value=idmed;
	document.getElementById("namamed").value=namamed;
	
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datamedia.php";
	var params = "idmed="+idmed+"&namamed="+namamed;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idmed").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}

function ubahmed()
{
	
	var idmed = document.getElementById("idmed").value;
	var namamed = document.getElementById("namamed").value;
	
	alert(idmed+" "+namamed);
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datamedia.php";
	var params = "idmed="+idmed+"&namamed="+namamed+"&sts=ubahmed";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idmed").value = "";
	document.getElementById("namamed").value = "";
	
}
//----------------------------------------Batas Awal Data Kriteria-------------------------------------

function simpankriteria()
{
	var idkriteria = document.getElementById("idkriteria").value;
	var namakriteria = document.getElementById("namakriteria").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datakriteriakaryawan.php";
	var params = "idkriteria="+idkriteria+"&namakriteria="+namakriteria+"&sts=simpankriteria";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idkriteria").value = "";
	document.getElementById("namakriteria").value = "";
	
}

function par4(idkriteria,namakriteria){
	document.getElementById("idkriteria").value=idkriteria;
	document.getElementById("namakriteria").value=namakriteria;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datakriteriakaryawan.php";
	var params = "idkriteria="+idkriteria+"&namakriteria="+namakriteria;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idkriteria").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}

function ubahkriteria()
{
	
	var idkriteria = document.getElementById("idkriteria").value;
	var namakriteria = document.getElementById("namakriteria").value;
	
	alert(idkriteria+" "+namakriteria);
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datakriteriakaryawan.php";
	var params = "idkriteria="+idkriteria+"&namakriteria="+namakriteria+"&sts=ubahkriteria";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idkriteria").value = "";
	document.getElementById("namakriteria").value = "";
	
}


//----------------------------------------Batas Akhir Data Kriteria-------------------------------------
function simpankar()
{
	var IDKar = document.getElementById("IDKar").value;
	var NamaKar = document.getElementById("NamaKar").value;
	var JK = document.getElementById("JK").value;
	var AlamatKar = document.getElementById("AlamatKar").value;
	//var EmailKar = document.getElementById("EmailKar").value;
	var TelpKar = document.getElementById("TelpKar").value;
	var BagianKar = document.getElementById("BagianKar").value;
	var JabatanKar = document.getElementById("JabKar").value;
	//var StatKar = document.getElementById("StatKar").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datakaryawan.php";
	var params = "IDKar="+IDKar+"&NamaKar="+NamaKar+"&JK="+JK+"&AlamatKar="+AlamatKar+"&TelpKar="+TelpKar+"&BagianKar="+BagianKar+"&JabKar="+JabatanKar+"&sts=simpankar";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("IDKar").value = "";
	document.getElementById("NamaKar").value = "";
	document.getElementById("JK").value = "";
	document.getElementById("AlamatKar").value = "";
	//document.getElementById("EmailKar").value = "";
	document.getElementById("TelpKar").value = "";
	document.getElementById("BagianKar").value = "";
	document.getElementById("JabKar").value = "";
	document.getElementById("StatKar").value = "";
}

function par6(idkar,namakar,alamatkar,jk,telpkar,bagiankar,jabkar){
	document.getElementById("IDKar").value = idkar;
	document.getElementById("NamaKar").value = namakar;
	document.getElementById("JK").value = jk;
	document.getElementById("AlamatKar").value = alamatkar;
	//document.getElementById("EmailKar").value = emailkar;
	document.getElementById("TelpKar").value = telpkar;
	document.getElementById("BagianKar").value = bagiankar;
	document.getElementById("JabKar").value = jabkar;
	//document.getElementById("StatKar").value = statkar;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url2 = "datakaryawan.php";
	var params2 = "IDKar="+idkar+"&NamaKar="+namakar+"&JK="+jk+"&AlamatKar="+alamatkar+"&TelpKar="+telpkar+"&BagianKar="+bagiankar+"&JabKar="+jabkar;
	xmlhttp.open("POST", url2, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("IDKar").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params2);
	document.getElementById("IDKar").disabled = true;
	document.getElementById("simpankar").disabled = true;
	document.getElementById("ubahkar").disabled = false;
	document.getElementById("IDKar").disabled = true;
}

function ubahkar()
{
	var IDKar = document.getElementById("IDKar").value;
	var NamaKar = document.getElementById("NamaKar").value;
	var JK = document.getElementById("JK").value;
	var AlamatKar = document.getElementById("AlamatKar").value;
	//var EmailKar = document.getElementById("EmailKar").value;
	var TelpKar = document.getElementById("TelpKar").value;
	var BagianKar = document.getElementById("BagianKar").value;
	var JabatanKar = document.getElementById("JabKar").value;
	
	alert("Ubah data karyawan berhasil");
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url2 = "datakaryawan.php";
	var params2 = "IDKar="+IDKar+"&NamaKar="+NamaKar+"&JK="+JK+"&AlamatKar="+AlamatKar+"&TelpKar="+TelpKar+"&BagianKar="+BagianKar+"&JabKar="+JabatanKar+"&sts=ubahkar";
	xmlhttp.open("POST", url2, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params2);
	
	document.getElementById("IDKar").value = "";
	document.getElementById("NamaKar").value = "";
	document.getElementById("JK").value = "";
	document.getElementById("AlamatKar").value = "";
	//document.getElementById("EmailKar").value = emailkar;
	document.getElementById("TelpKar").value = "";
	document.getElementById("BagianKar").value = "";
	document.getElementById("JabKar").value = "";
	//document.getElementById("StatKar").value = statkar;
	document.getElementById("simpankar").disabled = false;
	document.getElementById("ubahkar").disabled = true;
	document.getElementById("IDKar").disabled = false;
}

function delkar(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datakaryawan.php";
	var params = "idbag="+idbag+"&sts=delbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}

function Onkar(idbag)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datakaryawan.php";
	var params = "idbag="+idbag+"&sts=Onbag";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}

//--------------------------------------------------------------------------------
function simpankebkar()
{
	var idkebkar = document.getElementById("idkebkar").value;
	var idjab = document.getElementById("idjab").value;
	var idbag = document.getElementById("idbag").value;
	var jumlah = document.getElementById("jumlah").value;
	var datepicker = document.getElementById("datepicker").value;
	
	alert(idkebkar+" "+idjab+" "+idbag+" "+jumlah+" "+datepicker);
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url2 = "datakebutuhan_karyawan.php";
	var params2 = "idkebkar="+idkebkar+"&idjab="+idjab+"&idbag="+idbag+"&jumlah="+jumlah+"&datepicker="+datepicker+"&sts=simpankebkar";
	xmlhttp.open("POST", url2, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params2);
	
	document.getElementById("idkebkar").value = "";
	document.getElementById("idjab").value = "";
	document.getElementById("idbag").value = "";
	document.getElementById("jumlah").value = "";
	document.getElementById("datepicker").value = "";
	
}

function par5(idkebkar,idjab,idbag,jumlah,datepicker){
	document.getElementById("idkebkar").value=idkebkar;
	document.getElementById("idjab").value=idjab;
	document.getElementById("idbag").value=idbag;
	document.getElementById("jumlah").value=jumlah;
	document.getElementById("datepicker").value=datepicker;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url2 = "datakebutuhan_karyawan.php";
	var params2 = "idkebkar="+idkebkar+"&idjab="+idjab+"&idbag="+idbag+"&jumlah="+jumlah+"&datepicker="+datepicker;
	xmlhttp.open("POST", url2, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idkebkar").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params2);
	document.getElementById("simpankebkar").disabled = true;
	document.getElementById("ubahkebkar").disabled = false;
	document.getElementById("idkebkar").disabled = true;
}

function ubahkebkar()
{
	
	var idkebkar = document.getElementById("idkebkar").value;
	var idjab = document.getElementById("idjab").value;
	var idbag = document.getElementById("idbag").value;
	var jumlah = document.getElementById("jumlah").value;
	var datepicker = document.getElementById("datepicker").value;
	
	alert(idkebkar+" "+idjab+" "+idbag+" "+jumlah+" "+datepicker);
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url2 = "datakebutuhan_karyawan.php"
	var params2 = "idkebkar="+idkebkar+"&idjab="+idjab+"&idbag="+idbag+"&jumlah="+jumlah+"&datepicker="+datepicker+"&sts=ubahkebkar";
	xmlhttp.open("POST", url2, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params2);
	
	document.getElementById("idkebkar").value = "";
	document.getElementById("idjab").value = "";
	document.getElementById("idbag").value = "";
	document.getElementById("jumlah").value = "";
	document.getElementById("datepicker").value = "";
	document.getElementById("simpankebkar").disabled = false;
	document.getElementById("ubahkebkar").disabled = true;
	document.getElementById("idkebkar").disabled = false;
}


//-------------------------Pilihan Kriteria Jabatan-----------------------------
function setdata(idjab,namajab1){
$.colorbox({inline: true, width:800 , height:550,  href: "#inline_example1", onClosed:function(){window.location.reload();}});
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datapilihankriteria.php";
	var params = "idjab="+idjab+"&namajab1="+namajab1;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}

function simpankriteria1()
{
	var idjab = document.getElementById("idjab1").value;
	var idkriteria = document.getElementById("idkriteria").value;
	var namajab1 = document.getElementById("namajab1").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "tambahpilihankriteria.php";
	var params = "idjab="+idjab+"&idkriteria="+idkriteria+"&namajab1="+namajab1+"&sts=simpankriteria1";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idjab1").value = "";
	document.getElementById("idkriteria").value = "";
	document.getElementById("namajab1").value = "";
}

function hapus(idjab,idkriteria,namajab1)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "prosespilihankriteria.php";
	var params = "idjab="+idjab+"&idkriteria="+idkriteria+"&namajab1="+namajab1+"&sts=hapuskriteria1";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}

//----------------Pilihan Buat Lowongan------------------------------
function simpanlow()
{
	var idlow = document.getElementById("idlow").value;
	var namalow = document.getElementById("namalow").value;
	var idkebkar = document.getElementById("idkebkar").value;
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datalowongan.php";
	var params = "idlow="+idlow+"&namalow="+namalow+"&idkebkar="+idkebkar+"&sts=simpanlow";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
			window.location.reload();
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idlow").value = "";
	document.getElementById("namalow").value = "";
	document.getElementById("idkebkar").value = "belum pilih";
	
}
//----------------Lihat laporan Lengkap
function lihatdata1(idbag,namabag,namajab,idlow){
	$.colorbox({inline: true, width:800 , height:550,  href: "#inline_example1"});
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "dataperiklanan.php";
	var params = "idbag="+idbag+"&namabag="+namabag+"&namajab="+namajab+"&idlow="+idlow;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}
function lihatdata2(idbag,namabag,namajab,idlow){
	//$.colorbox({inline: true, width:800 , height:550,  href: "#inline_example1", onClosed:function(){window.location.reload();}});
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "test_tcpdf.php";
	var params = "idbag="+idbag+"&namabag="+namabag+"&namajab="+namajab+"&idlow="+idlow;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	window.open("test_tcpdf.php");
}


//-------------------------Pilihan Upload Iklan-----------------------------
function setmedlow(idlow,namalow1){
$.colorbox({inline: true, width:800 , height:550,  href: "#inline_example1", onClosed:function()
	{
		window.location.reload();
	}});
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datapilihanmedia.php";
	var params = "idlow="+idlow+"&namalow1="+namalow1;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}

function simpanmedia1()
{
	var idlow = document.getElementById("idlow1").value;
	var namalow1 = document.getElementById("namalow1").value;
	var idmed = document.getElementById("idmed").value;
	var tglmulai = document.getElementById("tglmulai").value;
	var tglselesai = document.getElementById("tglselesai").value;
	var biaya = document.getElementById("biaya").value;
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "tambahpilihanmedia.php";
	var params = "idlow="+idlow+"&namalow1="+namalow1+"&idmed="+idmed+"&tglmulai="+tglmulai+"&tglselesai="+tglselesai+"&biaya="+biaya+"&sts=simpanmedia1";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("idlow1").value = "";
	document.getElementById("idmed").value = "";
	document.getElementById("namalow1").value = "";
	document.getElementById("tglmulai").value = "";
	document.getElementById("tglselesai").value = "";
	document.getElementById("biaya").value = "";
}

function hapusmed(idlow,idmed,namalow1)
{
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "prosespilihanmedia.php";
	var params = "idlow="+idlow+"&idmed="+idmed+"&namalow1="+namalow1+"&sts=hapusmedia1";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
}
//-----------------SetDataUbahBOBOT-------------
function setdataUbah(b1,b2,b3,b4){
$.colorbox({inline: true, width:800 , height:350,  href: "#inline_example1", onClosed:function(){window.location.reload();}});
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "databobot.php";
	var params = "teknik="+b1+"&personality="+b2+"&absensi="+b3+"&sanksi="+b4;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}

function ubahbobot()
{
	var teknik = document.getElementById("teknik1").value;
	var personality = document.getElementById("personality1").value;
	var absensi = document.getElementById("absensi1").value;
	var sanksi = document.getElementById("sanksi1").value;

	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "simpanbobot.php";
	var params = "teknik="+teknik+"&personality="+personality+"&absensi="+absensi+"&sanksi="+sanksi;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	
}

function rekomendasi(b1,b2,b3,b4){
$.colorbox({inline: true, width:800 , height:550,  href: "#inline_example1", onClosed:function(){window.location.reload();}});
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datarekomendasi.php";
	var params = "NIK="+b1+"&nama="+b2+"&jabatan="+b3+"&bagian="+b4;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("inline_example1").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
}

function search()
{
	
	var p1 = document.getElementById("search1").value;
	var p2 = document.getElementById("search2").value;
	var sort = document.getElementById("sort").value;
	var limit = document.getElementById("limit").value;
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datanilai.php";
	var params = "p1="+p1+"&p2="+p2+"&sort="+sort+"&limit="+limit;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			var data = xmlhttp.responseText;
			var explode = data.split('[split]');
			document.getElementById("table").innerHTML=explode[0];
			//document.getElementById("SCTglMuat").innerHTML=explode[1];
			document.getElementById("cetak").innerHTML=explode[1];
			
		}
	}
	xmlhttp.send(params);
}

//-------------------------PROSES2.JS--------------------------
function parnilai(nik,nama,teknik_skill,personality,absensi,sanksi){
	document.getElementById("nik2").value=nik;
	document.getElementById("nama").value=nama;
	document.getElementById("teknik_skill").value=teknik_skill;
	document.getElementById("personality").value=personality;
	document.getElementById("absensi").value=absensi;
	document.getElementById("sanksi").value=sanksi;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datanilai1.php";
	var params = "nik="+nik+"&nama="+nama+"&teknik_skill="+teknik_skill+"&personality="+personality+"&absensi="+absensi+"&sanksi="+sanksi;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("idbag").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	document.getElementById("teknik_skill").disabled = false;
	document.getElementById("personality").disabled = false;
	document.getElementById("absensi").disabled = false;
	document.getElementById("sanksi").disabled = false;
	document.getElementById("isinilai").disabled = false;
}

function isinilai()
{
	var nik = document.getElementById("nik").value;
	var nama = document.getElementById("nama").value;
	var teknik_skill = document.getElementById("teknik_skill").value;
	var personality = document.getElementById("personality").value;
	var absensi = document.getElementById("absensi").value;
	var sanksi = document.getElementById("sanksi").value;
	
	alert("Isi nilai karyawan "+nama+" dengan NIK "+nik+" ?");
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "datanilai1.php";
	var params = "nik="+nik+"&teknik_skill="+teknik_skill+"&personality="+personality+"&absensi="+absensi+"&sanksi="+sanksi+"&sts=isinilai";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var data = xmlhttp.responseText;
			var explode = data.split('[split]');
			document.getElementById("loadcombo").innerHTML=explode[1];
			document.getElementById("table").innerHTML=explode[0];
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("nik").value = "";
	document.getElementById("nama").value = "";
	document.getElementById("teknik_skill").value = "";
	document.getElementById("personality").value = "";
	document.getElementById("absensi").value = "";
	document.getElementById("sanksi").value = "";
	document.getElementById("teknik_skill").disabled = true;
	document.getElementById("personality").disabled = true;
	document.getElementById("absensi").disabled = true;
	document.getElementById("sanksi").disabled = true;
	document.getElementById("isinilai").disabled = true;
}

function combo1(nik){
//$.colorbox({inline: true, width:800 , height:550,  href: "#inline_example1", onClosed:function(){window.location.reload();}});
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "combo1a.php";
	var params = "nik="+nik;
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
		
			document.getElementById("combo2").innerHTML=xmlhttp.responseText;
			
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("teknik_skill").disabled = false;
	document.getElementById("personality").disabled = false;
	document.getElementById("absensi").disabled = false;
	document.getElementById("sanksi").disabled = false;
	document.getElementById("isinilai").disabled = false;
}

function simpanper()
{
	var datepicker = document.getElementById("datepicker").value;
	var datepicker2 = document.getElementById("datepicker2").value;
	
	alert(datepicker+" sampai "+datepicker2+"\nApakah anda yakin membuat periode baru ?");
		
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "dataperiode.php";
	var params = "datepicker="+datepicker+"&datepicker2="+datepicker2+"&sts=simpanper";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("table").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.send(params);
	
	document.getElementById("datepicker").value = "";
	document.getElementById("datepicker2").value = "";
	
}

//-----------------Lihat Detil------------------------
function lihatDetil(){
	//document.getElementById("idbag").value=idbag;
	//document.getElementById("namabag").value=namabag;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "detilperhitungan.php";
	var params = "";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var data = xmlhttp.responseText;
			var explode = data.split('[split]');
			document.getElementById("table").innerHTML=explode[0];
			//document.getElementById("SCTglMuat").innerHTML=explode[1];
			document.getElementById("detil").innerHTML=explode[1];
		}
	}
	xmlhttp.send(params);
	//document.getElementById("simpanbag").disabled = true;
	//document.getElementById("ubahbag").disabled = false;
	//document.getElementById("idbag").disabled = true;
}
function tutupDetil(){
	//document.getElementById("idbag").value=idbag;
	//document.getElementById("namabag").value=namabag;
	
	
	if(window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest();
	}
	else
	{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "hasilperhitungan.php";
	var params = "";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var data = xmlhttp.responseText;
			var explode = data.split('[split]');
			document.getElementById("table").innerHTML=explode[0];
			//document.getElementById("SCTglMuat").innerHTML=explode[1];
			document.getElementById("detil").innerHTML=explode[1];
		}
	}
	xmlhttp.send(params);
	//document.getElementById("simpanbag").disabled = true;
	//document.getElementById("ubahbag").disabled = false;
	//document.getElementById("idbag").disabled = true;
}