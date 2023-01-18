<?php 
	
	include "koneksi.php";


	$sql = mysqli_query($konek, "SELECT * FROM tb_lampu");
	$data = mysqli_fetch_array($sql);
	$stop = $data['stop'];
	$play = $data['play'];
	$stop1 = $stop.','.$play;
	echo $stop1;	


 ?>