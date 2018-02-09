<?php
	
	// mengecek apakah tombol edit telah diklik
	if (isset($_POST['submit'])) {
	  // buat koneksi dengan database
		include("koneksi.php");

	  // membuat variabel untuk menampung data dari form edit

		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir= $_POST['tanggal_lahir'];
		$alamat= $_POST['alamat'];
		$fakultas= $_POST['fakultas'];
		$kelas= $_POST['kelas'];
		$password= $_POST['password'];
		$tahun_angkatan= $_POST['tahun_angkatan'];
		$mahasiswa= $_POST['mahasiswa'];

		//buat dan jalankan query UPDATE
		$sql  = mysqli_query($con,"UPDATE mahasiswa a INNER JOIN user b ON (a.npm=b.username) 
								   SET 
										a.nama='$nama',a.jenis_kelamin='$jenis_kelamin',a.tempat_lahir='$tempat_lahir',a.tanggal_lahir='$tanggal_lahir',a.alamat='$alamat',a.fakultas='$fakultas',a.kelas='$kelas',a.password='$password',a.tahun_angkatan='$tahun_angkatan',a.waktu_aktif=now(),
										b.username='$npm',b.password='$password',b.waktu_aktif=now(),b.user_group='$mahasiswa'
								   WHERE 
										a.npm='$npm' AND b.username='$npm'");

		if( $sql ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: m_all.php');
		} else {
			// kalau gagal tampilkan pesan
			die("Gagal menyimpan perubahan...");
		}
	}
?>