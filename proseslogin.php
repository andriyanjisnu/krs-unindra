<?php
require('koneksi.php');
include "substitusi.php";
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `user` WHERE username='$username'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_fetch_array($result);
	$encrypt_password = $rows['password'];
	$obj = new substitusi($encrypt_password); 
	$strDecrypt = "";
	for($a = 0; $a < count($obj->decrypt($encrypt_password)); $a++){
		$strDecrypt .= $obj->decrypt($encrypt_password)[$a];
	}
	
		if($rows['user_group'] == "admin" && $strDecrypt == $password){
			header("location:dashboard.html");
		}elseif($rows['user_group'] == "dosen"){
			header("location:home_dosen.php");
		}elseif($rows['user_group'] == "mahasiswa"){
			header("location:home_mahasiswa.php");
		}else{
			echo "<script>eval(\"parent.location='index.html '\");
			alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');</script>";
		}
}
?>