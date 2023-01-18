<?php  
include "koneksi.php";


 $stat = $_GET['statnext'];
 if ($stat == "ON")
 {


 	mysqli_query($konek, "UPDATE tb_lampu SET next=1");
    sleep(0.5);
    mysqli_query($konek, "UPDATE tb_lampu SET next=0");


	echo "ON";
 }
 else 
 	{


 	mysqli_query($konek, "UPDATE tb_lampu SET next=0");

	echo "OFF";
 }
?>