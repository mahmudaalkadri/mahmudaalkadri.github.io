<?php  
include "koneksi.php";
mysqli_query($konek, "UPDATE tb_lampu SET speaker=1");
header("Location: login.php");
exit;

?>