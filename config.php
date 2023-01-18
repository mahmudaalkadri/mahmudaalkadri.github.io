<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'kontrol';

$web_host='http://localhost/kontrol/';

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

function registrasi($data) {
	global $conn;

	$nama = stripcslashes($data["nama"]);
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$akses = $data["akses"];

	//Cek username sudah ada atau belum

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username Sudah Terdaftar!');
				window.location.href='registrasi.php';
			</script>";
		return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo"
			<script>
				alert('Registrasi Gagal, Password Tidak Sesuai!');
				window.location.href='registrasi.php';
			</script>";
		return false;
	}

	//Tambahkan userbaru ke databse
	mysqli_query($conn, "INSERT INTO user VALUES ('','$nama','$username', '$password','$akses')");

	return mysqli_affected_rows($conn);

}

function ubahgejala($data){
	global $conn;

	$id = $data["id"];
	$nama = stripcslashes($data["nama"]);
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$akses = $data["akses"];

	if ($password !== $password2) {
		echo"
			<script>
				alert('Password Tidak Sesuai!');
				window.location.href='edit_user.php';
			</script>";
		return false;
	}

	$query = "UPDATE user SET
		nama = '$nama',
		username = '$username',
		password = '$password',
		akses = '$akses'
		WHERE id_user = $id";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapususer($id) {
	global $conn;
	
	mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
	return mysqli_affected_rows($conn);
}