<?php
include("config.php");
	if(isset($_GET['nis'])){
		$title = "edit";
		$url = 'proses-edit.php';
		$id = $_GET['nis'];
		//buat query untuk ambil data dari database 
		$sql = "SELECT*FROM t_siswa WHERE nis = $id";
		$query = mysql_query($db, $sql);
		$siswa = mysql_fetch_assoc($query);
		//jika data yang diedit tidak ditemukan
		if (mysql_num_rows($query) < 1){
			die("data tidak ditemukan ....");
		}
		//url jika edit data
		}else{
			$title = "Add";
			//url jika ditambah
			$url = 'proses_pendaftaran.php';
		}
	}
	?>