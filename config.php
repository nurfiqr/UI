<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$nama_database = "db_siswa";
$db = mysql_connect($SERVER, $USER, $PASSWORD,$nama_database);
if (!$db) {
	die("Gagal terhubung dengan database: ".mysql_connect_error());
}
?>