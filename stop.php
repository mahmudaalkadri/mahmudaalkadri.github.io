<?php  

include "koneksi.php";


 $stat = $_GET['stat'];
 if ($stat == "ON")
 {


 	mysqli_query($konek, "UPDATE tb_lampu SET stop=1");
    mysqli_query($konek, "UPDATE tb_lampu SET play=0");

 	echo "ON";
 }
 else 
 	{


 	mysqli_query($konek, "UPDATE tb_lampu SET stop=0");

 	echo "OFF";
 }
?>