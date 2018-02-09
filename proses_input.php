<?php
require('koneksi.php');
include "substitusi.php";
session_start();	

 if (isset($_POST['submit'])) {
  
  $npm=$_POST['npm'];
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir= $_POST['tanggal_lahir'];
  $alamat= $_POST['alamat'];
  $fakultas= $_POST['fakultas'];
  $kelas= $_POST['kelas'];
  $password= $_POST['password'];
  $obj = new substitusi($password);
  $strEncrypt = "";
  for($a = 0; $a < count($obj->encrypt()); $a++){
	$strEncrypt .= $obj->encrypt()[$a];
  }
  $tahun_angkatan= $_POST['tahun_angkatan'];
  $mahasiswa= $_POST['mahasiswa'];
  
  
  $cek = mysqli_num_rows(mysqli_query($con,"SELECT * FROM mahasiswa WHERE npm='$npm'"));
	if($cek>0){
	  echo "<script>window.alert('npm yang anda masukan sudah ada')</script>";
	}else{
	  $sql = mysqli_query($con,"INSERT INTO mahasiswa (npm,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat,fakultas,kelas,password,tahun_angkatan,waktu_aktif) VALUES ('$npm', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$fakultas', '$kelas', '$strEncrypt', '$tahun_angkatan', now())");
	  if($sql){
		  $sql1 = mysqli_query($con, "INSERT INTO user (username,password,waktu_aktif,user_group) VALUES ('$npm', '$strEncrypt', now(), '$mahasiswa')");
		  session_unset();
          session_destroy();
		  echo "<script>window.location = 'm_all.php'</script>";
	  }
	  else {
			echo "Upss Something wrong..";
		}
		
	  $con->close();
	}

} 
?>