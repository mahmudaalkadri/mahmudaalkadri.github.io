<?php
include"koneksi.php";
$sql = mysqli_query($konek, "SELECT  *  FROM tb_lampu");
$data = mysqli_fetch_array($sql);

$lampu = $data['lampu'];

$speaker = $data['speaker'];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kontrol Barang Elektronik</title>
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
  if (nilai==true) nilai="PLAY";
  else nilai= "STOP"; 
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


</script>

    </head>
  <body>
    <div class="container" style="text-align: center; padding-top: 30px;">
    <h2> KONTROL LAMPU DAN SPEAKER </h2>
</div>
<div class="container" style="display: flex; justify-content: center; padding-top: 30px">
<div class="card text-black  mb-3" style="width: 20rem; margin-right: 20px; ">
  <div class="card-header" style="font-size: 35px; text-align: center; background-color: black ; color: white ;">LAMPU</div>
  <div class="card-body">
    <div class="form-check form-switch" style="font-size: 50px">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="ubahstatus(this.checked)" <?php  if ($lampu==1) ?> >
  <label class="form-check-label" for="flexSwitchCheckDefault">  <span id="status"><?php  if ($lampu==1) echo "ON"; else echo "OFF" ?> </span> </label>
</div>
  </div> 
</div>
<div class="card text-black  mb-3" style="width: 20rem;">
  <div class="card-header" style="font-size: 35px; text-align: center; background-color: blue ; color: white ;">SPEAKER</div>
  <div class="card-body">
    <div class="form-check form-switch" style="font-size: 50px">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="ubahspeaker(this.checked)" <?php  if ($speaker==1) ?> >
  <label class="form-check-label" for="flexSwitchCheckDefault">  <span id="ubah"><?php  if ($speaker==1) echo "PLAY"; else echo "STOP" ?> </span> </label>
</div>
  </div>
</div>
  </head>
  </div>
  </div>
</div>

  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>