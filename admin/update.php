<?php
include('config.php');
 
//tangkap data dari form
$kode_toko = $_POST['kode_toko'];
$nama_toko = $_POST ['nama_toko'];
$alamat = $_POST ['alamat'];
$kd_pos = $_POST ['kd_pos'];
$no_telp = $_POST ['no_telp'];
 
//update data di database sesuai KD_TOKO
$query = mysql_query("update lokasi set kd_toko='$kode_toko', nama_toko='$nama_toko', alamat='$alamat', kd_pos='$kd_pos', no_telp='$no_telp' where kd_toko='$kode_toko' ") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}
 