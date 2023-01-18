 <?php 
session_start();
require 'config.php';

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;

}

$user = mysqli_query($conn,"SELECT * FROM user");


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
 			<h2>Form User</h2>
 			<center>
 			
 			<div class="col-md-11">
 			<table class="table table-bordered border-dark align-middle text-center table-hover" border="1" cellpadding="10" cellspacing="0" style="margin-top: 10px">
 				<thead class="table-info border-dark">
 				<tr>
 					<th>NO.</th>
 					<th>NAMA</th>
 					<th>USERNAME</th>
 					<th>PASSWORD</th>
 					<th>AKSES</th>
 					<th>AKSI</th>
 				</tr>
 				</thead>
 			<?php $no=1; ?>
 			<?php while ($tampil = mysqli_fetch_array ($user)) {  ?>
 				<tr>
 					<td><?php echo $no; ?></td>
 					<?php $gambar = "img".$tampil ["nama"];?>
 					<td><?php echo $tampil ["nama"]; ?></td>
 					<td><?php echo $tampil ["username"]; ?></td>
 					<td><?php echo $tampil ["password"]; ?></td>
 					<td><?php echo $tampil ["akses"]; ?></td>
 					<td>
 						<a href="edit_user.php?id=<?php echo $tampil["id_user"] ?>" onclick="return confirm ('Apakah Anda Yakin Mau Mengubah Data Ini');";><i class="bi bi-pencil-square fs-4 text-success" ></i></a> ||
 						<a href="hapus_user.php?id=<?php echo $tampil["id_user"] ?>" onclick="return confirm ('Apakah Anda Yakin Mau Menghapus Data Ini');";><i class="bi bi-trash fs-4 text-danger"></i></a>
 					</td>
 				</tr>
 			<?php $no++; } ?>
 				<tr>
 					<td colspan="6" align="center">					
 						<a href="registrasi.php"><button type="submit" class="btn btn-outline-primary tombol" name="tambah">REGISTRASI</button></a>
 					</td>
 				</tr>
 			</table>
 			</div>
 			</center>
 		</div> 		
 	</div>
 </body>
 </html>