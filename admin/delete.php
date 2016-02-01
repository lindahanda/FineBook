<?php
include('config.php'); //memanggil config.php untuk konfigurasi ke database
 
$KD_TOKO = $_GET['id']; //untuk menangkap nilai 'id' dari view.php
 
$query = mysql_query("delete from lokasi where kd_toko='$KD_TOKO'") or die(mysql_error()); //query untuk akses database
 
if ($query) { //jika query bernilai true maka pesan sukses akan dikirim ke view.php
    header('location:view.php?message=delete');
}
?>