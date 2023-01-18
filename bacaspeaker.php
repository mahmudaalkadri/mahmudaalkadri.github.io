<?php 
	
	include "koneksi.php";


	$sql = mysqli_query($konek, "SELECT * FROM tb_lampu");
	$data = mysqli_fetch_array($sql);
	$speaker = $data['speaker'];

	echo $speaker;	


 ?>
