<?php include('config.php');?>
<html>
	<head><title>Data Siswa</title></head>
	<body>
		<header><h3><Daftar Siswa></h3></header>
		<nav><a href="v_form.php"><button>Tambah Baru</button></a></nav>
		<br>
		<table border="1" cellpadding="8">
			<thead>
				<tr>
					<th>NIS</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>No Telepon</th>
					<th>Kelas</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query=mysql_query("SELECT*FROM siswa ORDER BY nis");
					echo "<tr>";
					echo "<td>".$siswa['nis']."</td>";
					echo "<td>".$siswa['nama_lengkap']."</td>";
					echo "<td>".$siswa['alamat']."</td>";
					echo "<td>".$siswa['jenis_kelamin']."</td>";
					echo "<td>".$siswa['no_telepon']."</td>";
					echo "<td>".$siswa['kelas']."</td>";
					echo "<td>";
					echo "<a href='v_form.php?nis=".$siswa['nis']."'>Edit</a>|";
					echo "<a href='hapus.php?nis=".$siswa['nis']."'>Hapus</a>|";
					echo "</td>";
					echo "</tr>";
				?>
			</tbody>
		</table>
		<p>Total:
		</p>
	</body>
	</html>