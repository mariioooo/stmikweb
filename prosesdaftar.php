<?php
include("konfig.php");

//cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

	//ambil data dari formulir
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$tlh = $_POST['tlh'];
	$tgllahir = $_POST['tgllahir'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$namaayah = $_POST['namaayah'];
	$pekerjaanayah = $_POST['pekerjaanayah'];
	$namaibu = $_POST['namaibu'];
	$pekerjaanibu = $_POST['pekerjaanibu'];
	$alamatortu = $_POST['alamatortu'];
	$asalsekolah = $_POST['asalsekolah'];
	$tahunmasuk = $_POST['tahunmasuk'];

	//buat query
	$sql = "INSERT INTO datamhs (nim, nama, jeniskelamin, tlh, tgllahir, agama, alamat, namaayah, pekerjaanayah, namaibu, pekerjaanibu, alamatortu, asalsekolah, tahunmasuk) VALUE
($nim', '$nama', '$jeniskelamin', '$tlh', '$tgllahir', '$agama', '$alamat', '$namaayah', '$pekerjaanayah', '$namaibu', '$pekerjaanibu', '$alamatortu', '$asalsekolah', '$tahunmasuk')";
	$query = mysqli_query($db, $sql);

	//apakah query berhasil disimpan
	if ( $query) {
		//kalau berhasil akan dialihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=berhasil');
	}else{
		//kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: index.php?status=gagal');
	}
}else{
	die("dilarang bossss");
}
?>