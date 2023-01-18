<?php 
session_start();
require 'config.php';
 
if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;

}
 
if (isset($_POST["registrasi"])) {
	
	if (registrasi($_POST) > 0 ) {
		echo"
			<script>
				alert('Registrasi Berhasil!!, Akun Berhasil Baru Ditambahkan!!');
				window.location.href='akun.php';
			</script>";
	}else {
		echo"
			<script>
				alert('Registrasi Gagal!!');
				window.location.href='akun.php';
			</script>";
	}
}
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form User</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap-icons.css">
 </head>
 <body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-lg">
	  <div class="container-fluid fw-bold ">
	    <a class="navbar-brand" href="index.php"><img src="img/home.png" width="30" style="margin-right: 10px">Website Sistem Kontrol</a>
	  </div>
	  	  <div class="collapse navbar-collapse pilmenu" id="navbarNav">
	      <ul class="navbar-nav ms-auto fw-bold">
	        <li class="nav-item">
	          <a class="nav-link active text-warning fs-5" href="logout.php">Logout</a>
	        </li>
	      </ul>
	    </div>
	</nav>

	 <div class="isi" style="min-height: 90vh;">
 		
	 	<div class="side">
	 		<ul type = square>
	 			<h2>Menu :</h2>
	 			<li><a href="index.php">Home</li></a>
	 			<li><a href="akun.php">Akun</li></a>
	 	</div>

 		<div class="main">
 			<h2>Form Registrasi</h2>
 			<form action="" method="post">
 			<center>
 			<table border="0">
 				<tr>
 					<td colspan="2" class="profil fs-4">Silahkan Inputkan Data Yang Dibutuhkan :</td>
 				</tr>
 				<tr>
 					<td class="label"><label for="nama">Nama</label></td>
 					<td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama.." autofocus autocomplete="off" required></td>
 				</tr>
 				<tr>
 					<td class="label"><label for="username">Username</label></td>
 					<td><input type="text" class="form-control" name="username" id="username" placeholder="Username.." autocomplete="off" required></td>
 				</tr>
 				<tr>
 					<td class="label"><label for="password">Password</label></td>
 					<td><input type="password" class="form-control" name="password" id="password" placeholder="Password.." autocomplete="off" required></td>
 				</tr>
 				<tr>
 					<td class="label"><label for="password2">Konfirmasi Password</label></td>
 					<td><input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Password.." autocomplete="off" required></td>
 				</tr>
 				<tr>
 					<td class="label"><label for="level">Akses</label></td>
 					<td>
 						<select name="akses"class="form-select form-select-sm" aria-label=".form-select-sm example">
						  <option selected value="---" ><--PILIH AKSES--></option>
						  <option value="Lampu A" >Lampu A</option>
						  <option value="Lampu B" >Lampu B</option>
						  <option value="Speaker" >Speaker</option>
						  <option value="Lampu A & B" >Lampu A & B</option>
						  <option value="Lampu A & Speaker" >Lampu A & Speaker</option>
						  <option value="Lampu B & Speaker" >Lampu B & Speaker</option>
						  <option value="Semua" >Semua</option>
						</select>
					</td>
 				</tr>
 				<tr>
 					<td colspan="2" align="center">
 						<button type="submit" name="registrasi" class="btn btn-outline-success tombol">Daftar</button>
 						<a href="akun.php " class="btn btn-outline-primary tombol">Kembali<a>
 					</td>


 				</tr>
 			</table>
 			</center>
 			</form>
 		</div> 		
 	</div>
 </body>
 </html>