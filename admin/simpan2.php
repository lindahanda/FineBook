<?php
	include ("config.php");
	
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$kd_pos = $_POST ['kd_pos'];
	$email = $_POST ['email'];
	$no_hp = $_POST ['no_hp'];
	
	$pembeli = mysql_query("insert into pembeli values ('','$nama', '$alamat', '$kd_pos', '$email', '$no_hp')") or die(mysql_error());
	
	
	if ($pembeli){
		header("location:view2.php?message=success");
	}

?>