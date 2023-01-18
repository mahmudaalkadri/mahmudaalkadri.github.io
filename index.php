<?php 
session_start();
require 'config.php';

if ( !isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;

}

include"koneksi.php";
$sql = mysqli_query($konek, "SELECT  *  FROM tb_lampu");
$data = mysqli_fetch_array($sql);

$lampu = $data['lampu'];
$speaker = $data['speaker'];

$play = $data['play'];
$stop = $data['stop'];

$selanjutya = $data['next'];
$sebelumnya = $data['prev'];
  ?>



<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap-icons.css">
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<script type="text/javascript">
  
  function ubahstatus(value)
  {
    if (value==true) value="ON";
    else value= "OFF"; 
    document.getElementById('status').innerHTML = value;

    var xmlhttp = new  XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
	     document.getElementById('status').innerHTML = xmlhttp.responseText;   
	    }
  	}
	  xmlhttp.open("GET", "lampu.php?stat=" + value, true );

	  xmlhttp.send(); 
  }

  function ubahspeaker(nilai)
  {
    if (nilai==true) nilai="ON";
    else nilai= "OFF"; 
    document.getElementById('ubah').innerHTML = nilai;

    var xmlhttp = new  XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
     document.getElementById('ubah').innerHTML = xmlhttp.responseText;   
    }
  }
  xmlhttp.open("GET", "speaker.php?stat=" + nilai, true );

  xmlhttp.send(); 
  }

  function ubahstop(nil)
  {
    if (nil==true) nil="ON";
    else nil= "OFF"; 
    document.getElementById('ubahstop').innerHTML = nil;

    var xmlhttp = new  XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
	     document.getElementById('ubahstop').innerHTML = xmlhttp.responseText;   
	    }
  	}
	  xmlhttp.open("GET", "stop.php?stat=" + nil, true );

	  xmlhttp.send(); 
  }

    function ubahplay(val)
  {
    if (val==true) val="ON";
    else val= "OFF"; 
    document.getElementById('ubahplay').innerHTML = val;

    var xmlhttp = new  XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
	     document.getElementById('ubahplay').innerHTML = xmlhttp.responseText;   
	    }
  	}
	  xmlhttp.open("GET", "play.php?stat=" + val, true );

	  xmlhttp.send(); 
  }

  function sebelumnya(nilaiprev)
  {
    if (nilaiprev==true) nilaiprev="ON";
    else nilaiprev= "OFF"; 
    document.getElementById('prev').innerHTML = nilaiprev;

    var xmlhttp = new  XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
	     document.getElementById('prev').innerHTML = xmlhttp.responseText;   
	    }
  	}
	  xmlhttp.open("GET", "sebelumnya.php?stat=" + nilaiprev, true );

	  xmlhttp.send(); 
  }

  function selanjutnya(nilainext)
  {
    if (nilainext==true) nilainext="ON";
    else nilainext= "OFF"; 
    document.getElementById('next').innerHTML = nilainext;

    var xmlhttp = new  XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
	     document.getElementById('next').innerHTML = xmlhttp.responseText;   
	    }
  	}
	  xmlhttp.open("GET", "selanjutnya.php?statnext=" + nilainext, true );

	  xmlhttp.send(); 
  }
</script>


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
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
 			
<!-- 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
	  	  <div class="collapse navbar-collapse pilmenu" id="navbarNav">
	      <ul class="navbar-nav fw-bold">
	        <li class="nav-item">
	          <a class="nav-link active fs-5" href="home.php">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active fs-5" href="akun.php">Akun</a>
	        </li>
	      </ul>
	    </div>
	</nav> -->

	 <div class="isi" style="margin-top: 0; height: 75vh">
 		
	 	<div class="side">
	 		<ul type = square>
	 			<h2>Menu :</h2>
	 			<li><a href="index.php" style="color: red;">Home</li></a>
	 			<li><a href="akun.php">Akun</li></a>
	 	</div>

 		<div class="main" style="min-height: 90vh;">
 			<h2><div class="tw-bold">KONTROL BARANG ELEKTRONIK </div></h2>

		<div class="container d-flex justify-content-between rounded" style="padding-top: 5px; padding-bottom: 0px ; border-top-style: solid; border-bottom-style: solid; border-width:3px; ">

			 	<div>
			 		<label style="cursor: pointer;" for="lampu"><i class="bi bi-lightbulb border border-3 rounded-circle border-dark" style="font-size: 35px; margin-right: 10px; padding: 8px"></i></label>
			 			<label class="card-header" style="font-size: 35px; text-align: center; background-color: black ; color: white ; cursor: pointer; " for="lampu" style="">LAMPU</label>
			 	</div>

			    <div class="form-check form-switch" style="font-size: 50px">
			    	<?php  if ($lampu==1) { ?>
						<input class="form-check-input" type="checkbox" id="lampu" checked="" onchange="ubahstatus(this.checked)">
						<?php }; ?> 
						<?php  if ($lampu==0) { ?>
						<input class="form-check-input" type="checkbox" id="lampu" onchange="ubahstatus(this.checked)">
						<?php }; ?>
					  <label class="form-check-label" for="lampu">  <span id="status"><?php  if ($lampu==1) echo "ON"; else echo "OFF" ?> </span> </label>
				</div>


		</div> 
		<br>
		<div style="padding-top: 5px; padding-bottom: 5px ; border-top-style: solid; border-bottom-style: solid; border-width:3px;">
		<div class="container d-flex justify-content-between" >		
			  
			<div>
			  	<label style="cursor: pointer;" for="speaker"><i class="bi bi-speaker border border-3 rounded-circle border-dark" style="font-size: 35px; margin-right: 10px; padding: 8px; cursor: pointer;"></i></label>
			  		<label class="card-header" style="font-size: 35px; text-align: center; background-color: blue ; color: white ; cursor: pointer;" for="speaker" >SPEAKER</label>
			</div>

			<div class="form-check form-switch" style="font-size: 50px">
				   <?php  if ($speaker==1) { ?>
				   <input class="form-check-input" type="checkbox" id="speaker" checked="" onchange="ubahspeaker(this.checked)">
				   <?php }; ?> 
				   <?php  if ($speaker==0) { ?>
				   <input class="form-check-input" type="checkbox" id="speaker" onchange="ubahspeaker(this.checked)">
				   <?php }; ?> 
			  <label class="form-check-label" for="speaker">  <span id="ubah"><?php  if ($speaker==1) echo "ON"; else echo "OFF" ?> </span> </label>
			</div>

		</div>

			<div style="padding-left: 15px; padding-top: 8px">
				<label class="btn btn-primary" data-bs-toggle="collapse" href="#menuspeaker" role="button" aria-expanded="false" aria-controls="collapseExample" >MENU SPEAKER</label>
			</div>
		</div>

		</head>

		<div class="play-stop text-center" style="font-size:90px;">

		<div class="container" style="display: flex; justify-content: center; padding-top: 30px">
	 
			</head>
		  </div>

		  <div class="collapse" id="menuspeaker">

		  	<i class="bi bi-arrow-left-square-fill"></i>
		  		<input class="form-check-input" style="position: absolute;left: 585px; opacity: 0; cursor: pointer;" type="checkbox" name="sebelumnya" id="sebelumnya" onchange="sebelumnya(this.checked)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<b>SEBELUMNYA</b>">
				<label class="form-check-label" for="sebelumnya" hidden>  <span id="prev"><?php  if ($sebelumnya==1) echo "ON"; else echo "OFF" ?> </span> </label>

				<i class="bi bi-play-fill"></i>
				<input class="form-check-input" style="position: absolute;left: 685px; opacity: 0; cursor: pointer;" type="checkbox" name="play" id="play" onchange="ubahplay(this.checked)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<b>PLAY</b>">
				<label class="form-check-label" for="play" hidden>  <span id="ubahplay"><?php  if ($play==1) echo "ON"; else echo "OFF" ?> </span> </label>

				<i class="bi bi-stop-circle"></i>
				<input class="form-check-input" style="position: absolute;left: 815px; opacity: 0; cursor: pointer;" type="checkbox" name="stop" id="stop" onchange="ubahstop(this.checked)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<b>STOP</b>">
				<label class="form-check-label" for="stop" hidden>  <span id="ubahstop"><?php  if ($stop==1) echo "ON"; else echo "OFF" ?> </span> </label>

				<i class="bi bi-arrow-right-square-fill"></i>
				<input class="form-check-input" style="position: absolute;left: 925px; opacity: 0; cursor: pointer;" type="checkbox" name="selanjutnya" id="selanjutnya" onchange="selanjutnya(this.checked)" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<b>SELANJUTNYA</b>">
				<label class="form-check-label" for="selanjutnya" hidden>  <span id="next"><?php  if ($selanjutnya==1) echo "ON"; else echo "OFF" ?> </span> </label>
		  </div>

		  		
		</div>

		</div>	
 		</div> 		
 	</div>


		

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})
	</script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>