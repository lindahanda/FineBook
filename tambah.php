<?php
    require_once "core/init.php";
    require_once "view/header.php"; //buat ngeload file lain (header.php)
    $error = '';


    if(isset($_POST['submit'])){
        
        $judul  = $_POST['judul'];
        $konten = $_POST['konten'];
        $tag    = $_POST['tag'];
        
        if(!empty(trim($judul)) && !empty(trim($konten))){
            if(tambah_data($judul, $konten, $tag)){
                header('Location: index.php'); //akan menuju halaman index
            }else{
                $error = 'Ada masalah saat menambah data';     
            }
            
        }else{
            $error = 'Judul dan konten harus diisi!'; 
        }
        
    }

?>

    <?php 
    require_once "view/footer.php"; //buat ngeload file lain (footer.php)
?>
