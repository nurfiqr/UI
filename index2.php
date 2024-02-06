<?php
include'config.php';
echo "<h2>Data Siswa</h2>
<form method=POST action=v_form.php>
<input type=submit value='Tambah Siswa'></form>
<table border=1 width=700 cellspacing=0 cellpadding=0>
<tr><td align=center>No</td>
	<td align=center >NIS</td>
	<td align=center>Nama Lengkap</td>
		<td align=center>Alamat</td>
		<td align=center>Jenis Kelamin</td>
		<td align=center>No Telepon</td>
		<td align=center>Kelas</td>
		<td align=center>Tindakan</td>
</tr>";
$tampil=mysql_query("SELECT*FROM siswa ORDER BY nis");

if($tampil == FALSE){
	die(mysql_error());
}

	$no=1;
	while ($r=mysql_fetch_array($tampil)){
		echo "<tr><td>$no</td>
			<td>$r[nis]</td>
			<td>$r[nama]</td>
			<td>$r[alamat]</td>
			<td>$r[jenis_kelamin]</td>
			<td>$r[no_telepon]</td>
			<td>$r[kelas]</td>
			<td><a href=edit.php?id=$r[nis]>Edit</a> |
			<a href=hapus.php?id=$r[nis]>Hapus </a>
			</td></tr>";
			$no++;
		}
	echo "</table>";
	echo"<p>Total: <?php echo mysql_num_rows($query) ?> </p>";?>