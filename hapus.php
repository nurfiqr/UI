<?php
include("config.php");
if(isset($_GET['nis'])){
	//ambil nis dari query string
	$nis = $_GET['nis'];
	//buat query hapus
	$query = mysql_query("SELECT*FROM siswa ORDER BY nis") or die (mysql_error($db));
	//apakah query update berhasil?
	if (query) {
		//kalau berhasil, alihkan ke halaman index2.php dengan status=sukses
		header('location:index2.php?status=sukses');
	}else{
		//kalau gagal, alihkan ke halaman index2.php dengan status=gagal
		header('Location:index2.php?status=gagal')
	}
}else{
	die("Akses dilarang ....");
}
?>