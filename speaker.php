<?php

include "koneksi.php";


 $stat = $_GET['stat'];
 if ($stat == "ON")
 {


   mysqli_query($konek, "UPDATE tb_lampu SET speaker=1");

   echo "ON";
 }
 else 
   {


   mysqli_query($konek, "UPDATE tb_lampu SET speaker=0");

   echo "OFF";
 }

?>