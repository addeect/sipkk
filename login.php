<?php
include_once("koneksi/conn.php");
ob_start();
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 
// $conn = mysql_connect('localhost', 'root', '');
// mysql_select_db('login', $conn);
 
$username = mysql_real_escape_string($username);
$query = "SELECT KARYAWAN.ID_BAGIAN 'Bagian', KARYAWAN.NAMA 'Nama' , KARYAWAN.NIK 'NIK', PENGGUNA.PASSWORD 'Password' , PENGGUNA.JENIS_PENGGUNA 'Role' FROM KARYAWAN join PENGGUNA on KARYAWAN.NIK=PENGGUNA.NIK WHERE PENGGUNA.USERNAME = '$username' AND PENGGUNA.PASSWORD = \"$password\" AND PENGGUNA.STS_USER='1'";
 
$result = mysql_query($query);
//$loggedinuser = $result->fields[0];
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$num_rows = mysql_num_rows($result);
if($num_rows > 0) // User not found. So, redirect to login_form again.

			{
				session_start();
				$_SESSION['login'] = "1";
				if($userData['Role'] == 1)
				{
					$_SESSION['sess_username'] = $userData['Nama'];
					$_SESSION['sess_nik'] = $userData['NIK'];
					$_SESSION['sess_bag'] = $userData['Bagian'];
					$_SESSION['sess_role'] = 'Staff IT';
					header ("Location: bagian.php");
				}
				else if($userData['Role'] == 2)
				{
					$_SESSION['sess_username'] = $userData['Nama'];
					$_SESSION['sess_nik'] = $userData['NIK'];
					$_SESSION['sess_bag'] = $userData['Bagian'];
					$_SESSION['sess_role'] = 'Supervisor';
					header ("Location: inputnilai.php");
				}
				else if($userData['Role'] == 3)
				{
					$_SESSION['sess_username'] = $userData['Nama'];
					$_SESSION['sess_nik'] = $userData['NIK'];
					$_SESSION['sess_bag'] = $userData['Bagian'];
					$_SESSION['sess_role'] = 'Manager';
					header ("Location: perhitungan.php");
				}
			}
			else
			{
				//$errorMessage = "Invalid Login";
				session_start();
				$_SESSION['login'] = '';
				header ("Location: index.html");
				
			}
// {
    // header('Location: login.html');
// }
 // else{ // Redirect to home page after successful login.
	// session_regenerate_id();
	// $_SESSION['sess_user_id'] = $userData['id'];
	// $_SESSION['sess_username'] = $userData['username'];
	// session_write_close();
	// header('Location: home.php');
// }
// $userData = mysql_fetch_array($result, MYSQL_ASSOC);
// $hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
 
// if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
// {
    // header('Location: login.html');
// }else{ // Redirect to home page after successful login.
	// session_regenerate_id();
	// $_SESSION['sess_user_id'] = $userData['id'];
	// $_SESSION['sess_username'] = $userData['username'];
	// session_write_close();
	// header('Location: home.php');
// }
?>