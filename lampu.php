<?php

include "koneksi.php";


 $stat = $_GET['stat'];
 if ($stat == "ON")
 {


 	mysqli_query($konek, "UPDATE tb_lampu SET lampu=0");

 	echo "ON";
 }
 else 
 	{


 	mysqli_query($konek, "UPDATE tb_lampu SET lampu=1");

 	echo "OFF";
 }
 
?>