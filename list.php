<?php include("konfig.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simas</title>
</head>
<body>
<header>
	<h3>Mahasiswa yang terdaftar</h3>
</header>
<nav>
	<a href="form.php">[+] tambah</a>
</nav>
<br>
<table border="1">
	<tabel>
		<tr>
			<th>no</th>
			<th>nim</th>
			<th>nama</th>
			<th>jenis kelamin</th>
			<th>tahun lahir</th>
			<th>tanggal lahir</th>
			<th>agama</th>
			<th>alamat</th>
			<th>nama ayah</th>
			<th>pekerjaan ayah</th>
			<th>nama ibu</th>
			<th>pekerjaan ibu</th>
			<th>alamat ortu</th>
			<th>asal sekolah</th>
			<th>tahun masuk</th>
			<th>tindakan</th>
		</tr>
	</tabel>
	<tbody>
		<?php
		$sql = "select*from datamhs";
		$query = mysqli_query($db, $sql);
        $no++;
		while ($mhs = mysqli_fetch_array($query)) {
		
		echo "<tr>"; 

		echo "<td>" .$mhs['id']."</td>";
		echo "<td>" .$mhs['nim']."</td>";
		echo "<td>" .$mhs['nama']."</td>";
		echo "<td>" .$mhs['jeniskelamin']."</td>";
		echo "<td>" .$mhs['tlh']."</td>";
		echo "<td>" .$mhs['tgllahir']."</td>";
		echo "<td>" .$mhs['agama']."</td>";
		echo "<td>" .$mhs['alamat']."</td>";
		echo "<td>" .$mhs['namaayah']."</td>";
		echo "<td>" .$mhs['pekerjaanayah']."</td>";
		echo "<td>" .$mhs['namaibu']."</td>";
		echo "<td>" .$mhs['pekerjaanibu']."</td>";
		echo "<td>" .$mhs['alamatortu']."</td>";
		echo "<td>" .$mhs['asalsekolah']."</td>";
		echo "<td>" .$mhs['tahunmasuk']."</td>";

		echo "<td>";
		echo "<a href='form-edit.php?id=".$mhs['id']."'>Edit</a> ";
		echo "<a href='hapus.php?id=".$mhs['id']."'>Hapus</a> ";
		echo "</td>";

		echo "</tr>";

	    }
		?>
	</tbody>
</table>
<p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>