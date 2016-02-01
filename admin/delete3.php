<?php
include('config.php'); //memanggil config.php untuk konfigurasi ke database
 
$KD_BUKU = $_GET['id3']; //untuk menangkap nilai 'id' dari view.php
 
$query = mysql_query("delete from buku where kd_buku='$KD_BUKU'") or die(mysql_error()); //query untuk akses database
 
if ($query) { //jika query bernilai true maka pesan sukses akan dikirim ke view.php
    header('location:view3.php?message=delete');
}
?>