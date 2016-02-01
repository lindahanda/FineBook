<?php
	include ("config.php");
	$kode_buku = $_POST ['kd_buku'];
	$judul = $_POST ['judul_buku'];
	$penerbit = $_POST ['penerbit'];
	$tahun = $_POST ['tahun'];
	$kategori = $_POST ['kategori'];
	$harga = $_POST ['harga'];
	
	$buku = mysql_query("insert into buku values ('$kode_buku','$judul', '$penerbit', '$tahun', '$kategori', '$harga')") or die(mysql_error());
	
	
	if ($buku){
		header("location:view3.php?message=success");
	}

?>