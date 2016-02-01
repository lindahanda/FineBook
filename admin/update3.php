<?php
include('config.php');
 
//tangkap data dari form
$kode_buku = $_POST['kode_buku'];
$judul = $_POST ['judul'];
$penerbit = $_POST ['penerbit'];
$tahun = $_POST ['tahun'];
$kategori = $_POST ['kategori'];
$harga = $_POST ['harga'];
 
//update data di database sesuai KD_TOKO
$query = mysql_query("update buku set kd_buku='$kode_buku', nama_buku='$judul', penerbit='$penerbit', tahun_terbit='$tahun', kategori='$kategori', harga='$harga' where kd_buku='$kode_buku' ") or die(mysql_error());
 
if ($query) {
    header('location:view3.php?message=success');
}
 