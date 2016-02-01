<?php
	include ("config.php");
	$kode_toko = $_POST ['kd_toko'];
	$nama_toko = $_POST ['nama_toko'];
	$alamat = $_POST ['alamat'];
	$kd_pos = $_POST ['kd_pos'];
	$no_telp = $_POST ['no_telp'];
	
	$lokasi = mysql_query("insert into lokasi values ('$kode_toko ','$nama_toko', '$alamat', '$kd_pos', '$no_telp')") or die(mysql_error());
	
	
	if ($lokasi){
		header("location:view.php?message=success");
	}
?>