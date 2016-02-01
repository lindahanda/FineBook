<?php
	
	require_once "core/init.php";

	unset($_SESSION['user']); //hanya akan menghapus yang dituliskan didalam fungsi.
	session_destroy(); //menghapus semua data yang berhubungan dengan user tertentu(ynag digunakan pada saat itu)

	header("Location:login.php");

?>