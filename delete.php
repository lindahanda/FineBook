<?php
    require_once "core/init.php";


    //proteksi file
    //jadi jika tidak ada session user belum login, tidak bisa mengakses delete.php di url
    if(!$_SESSION['user']){
    	header('Location: login.php');//jika ada maka langsung redirect ke index.php
    }

    if (isset($_GET['id'])){
        
        if(hapus_data($_GET['id'])){
          header('location: index.php');  
        } 
        else echo "Gagal menghapus data";
        
    }


?>
