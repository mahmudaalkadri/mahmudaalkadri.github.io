<?php 
session_start();
// Koneksi ke Database
require 'config.php';

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;

}

// Menangkap parameter id pada link hapus
$id = $_GET["id"];

// Query untuk Hapus Data Barang berdasarkan Kode Barang
// $hapus = mysqli_query($conn, "DELETE FROM gejala WHERE id_gejala = '$id'");
// return mysqli_affected_rows($conn);
// Pesan data berhasil dihapus
if (hapususer($id) > 0) {
		echo"
			<script>
				alert('Data User Berhasil Dihapus!');
				window.location.href='akun.php';
			</script>";
	}else {
		echo"
			<script>
				alert('Data User Gagal Dihapus!');
				window.location.href='akun.php';
			</script>";
	}
?>