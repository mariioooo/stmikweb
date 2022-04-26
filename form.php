<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simas</title>
</head>
<body>
<header>
	<h3>Form baru</h3>
</header>
<form action="prosesdaftar.php" method="post">
	<fieldset>
		<p>
			<label for="nim">Nim :</label>
			<input type="text" name="nim" placeholder="nim" />
		</p>
		<p>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" placeholder="namalengkap" />
		</p>
		<p>
			<label for="jeniskelamin">Jenis kelamin :</label>
			<label><input type="radio" name="jeniskelamin" value="laki-laki">Laki-laki</label>
			<label><input type="radio" name="jeniskelamin" value="perempuan">Perempuan</label>
		</p>
		<p>
			<label for="tlh">Tahun lahir :</label>
			<input type="text" name="tlh" placeholder="tahunlahir" />
		</p>
		<p>
			<label for="tgllahir">Tanggal lahir :</label>
			<input type="text" name="tgllahir" />
		</p>
		<p>
			<label for="agama">Agama :</label>
			<select name="agama">
				<option>Kristen Prostestan</option>
				<option>Katolik</option>
				<option>Islam</option>
				<option>Hindu</option>
				<option>Buddha</option>
				<option>Kong Hu Cu</option>
				<option>Atheis</option>
			</select>
		</p>
		<p>
			<label for="alamat">Alamat :</label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="namaayah">Nama ayah :</label>
			<input type="text" name="namaayah" />
		</p>
		<p>
			<label for="pekerjaanayah">Pekerjaan ayah :</label>
			<input type="text" name="pekerjaanayah" />
		</p>
		<p>
			<label for="namaibu">Nama ibu :</label>
			<input type="text" name="namaibu" />
		</p>
		<p>
			<label for="pekerjaanibu">Pekerjaan ibu :</label>
			<input type="text" name="pekerjaanibu" />
		</p>
		<p>
			<label for="alamatortu">Alamat Orang tua :</label>
			<textarea name="alamatortu"></textarea>
		</p>
		<p>
			<label for="asalsekolah">Asal sekolah :</label>
			<input type="text" name="asalsekolah" />
		</p>
		<p>
			<label for="tahunmasuk">Tahun masuk :</label>
			<input type="text" name="tahunmasuk" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
	</fieldset>
</form>
</body>
</html>