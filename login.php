<?php 

session_start();

require 'config.php';

if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		//cek username
		if (mysqli_num_rows($result) == 1){
			
			//cek password
			$row = mysqli_fetch_assoc($result);

			//Session
			if($password == $row["password"]) {
				$_SESSION["login"] = true;
				
				echo"
				<script>
					alert('Login Berhasil!');
					window.location.href='index.php';
				</script>";
				exit;
			}
		}
	
	 echo"
		<script>
			alert('Login Gagal !! Username atau Password Salah !!');
			window.location.href='login.php';
		</script>";
		exit;
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
<!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- Bootsrap Icon -->
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> -->

 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap-icons.css">
 </head>
 <body style="background-image: url(img/bg2.jpg);">



	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">Website Sistem Kontrol</a>
	  </div>
	</nav>



 	<section class="bg" style="	min-height: 600px; width: 100%;">
 		<div class="main" style="padding-bottom: 54px; padding-top: 100px" >
 			<div class="container shadow-lg" style="margin: auto; margin-top: 0px; margin-bottom: 50px; background-color: #aaaaaa; width: 450px;">
 			<div class="text-center"><img src="img/home.png" width="100"></div>
 			
 					<div class="fw-bold text-center text-danger fs-4">Website Sistem Kontrol<br></div>
 				
 					<div class="fw-bold text-center" style="padding-top: 20px;">Masukkan Username dan Password Anda</div>
 				
 				<?php if (isset($error)) : ?>
 				
 					<div class="alert alert-danger d-flex align-items-center mt-3" role="alert">
					  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
					  <div>
					  	Login Gagal <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-left: 225px;"></button><br> Data Yang Di Inputkan Salah
					  </div>
					</div>
 					<!-- <tr>
 						<br><div style="color: red; font-style: italic; font-size: 15px;">Username / Password anda salah</div> 
 					</tr> -->

 				<?php endif; ?>
 				</table>
 				<form action="" method="post">
 				<div class="row justify-content-center mt-2">
 				<div class="col-md-10">
					<div class="input-group mb-3">
 				
 						<input type="text" class="form-control" name="username" id="username" placeholder="Username..." size="70" autofocus required autocomplete="off">
 						<label for="username"><img src="img/user.png"></label>
					</div>
				
 					<div class="input-group mb-3">
 
 						<input type="password" class="form-control" name="password" id="password" placeholder="Password..." required>
 						<label for="password"><img src="img/password.png"></label>
 					</div>

 				</div>
 				</div>

 					<div class="text-center" style="padding-bottom: 20px">
						<button type="submit" name="login" class="btn btn-outline-primary tombol">LOGIN</button>
 					</div>

 				</form>
 			</div>
 		</div> 		
 	</section>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>		 

<!-- alert -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<script type="text/javascript">
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
  new bootstrap.Alert(alert)
})
</script>

<!-- modal -->

 </body>
 </html>