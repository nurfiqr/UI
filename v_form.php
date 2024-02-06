
<html>
	<head><title>Formulir Siswa</title></head>
	<body>
		<header><h3>Formulir Siswa</h3></header>
		<form action="proses_pendaftaran.php" method="POST">
			<fieldset>
				<legend><h2>Form Siswa</h2></legend>
				<div>
					<label for = 'nis'>NIS: </label><br>
					<input type="text" name="nis" value="" />
				<div>
					<label for='nama'>Nama: </label><br>
					<input type="text" name="nama_lengkap" value="" />
				</div>
				<div>
					<label for='alamat'>Alamat: </label><br>
					<textarea type="text" name="alamat" value=""></textarea>
				</div>
				<div>
					<label for="jenis_kelamin">Jenis Kelamin: </label><br>
					<td>
						<input name="jenis_kelamin" type="radio" value="Laki-laki" > Laki-laki<br />
						<input name="jenis_kelamin" type="radio" value="Perempuan" >Perempuan
				</td>
				</div><br />
				<div>
					<label for="no_telp">No Telepon: </label><br>
					<input type="text" name="no_telp" value="" />
				</div>
				<div>
					<label for="kelas">Kelas: </label><br>
					<input type="text" name="kelas" value="" />
				</div>
				<hr>
				<div>
					<input type="submit" value="Simpan" name="simpan"/>
				</div>
			</fieldset>
		</form>
	</body>
	</html>