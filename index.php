<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi mahasiswa</title>
</head>
<body style="text-align: center;">
<h3 style="height: 150px;">SISTEM INFORMASI MAHASISWA STMIK</h3>
<nav>
<?php if (isset($_GET['status'])): ?>
<p>
<?php
if ($_GET['status'] == 'berhasil'){
	echo "pengisian mahasiswa baru berhasil!!!";
}else{
	echo "pendaftaran gagal!!!";
}
?>
</p>
<?php endif; ?>
	<a href="list.php">klik untuk lanjut</a>
</nav>
</body>
</html>