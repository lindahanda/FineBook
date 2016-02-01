<?php
    require_once "core/init.php";
    require_once "view/header.php"; //buat ngeload file lain (header.php)
    

    //proteksi file
    //jadi jika tidak ada session user belum login, tidak bisa mengakses edit.php di url
    if(!$_SESSION['user']){
        header('Location: login.php');//jika ada maka langsung redirect ke index.php
    }


    $error = '';
    
    $id    = $_GET['id'];


    if(isset($_GET['id'])){
        
        $article = tampilkan_per_id($id);
        
        while($row = mysqli_fetch_assoc($article)){
            
            $judul_awal  = $row['judul'];
            $konten_awal = $row['isi'];
            $tag_awal    = $row['tag'];
                      
        }
        
    }


    if(isset($_POST['submit'])){
        
        $judul  = $_POST['judul'];
        $konten = $_POST['konten'];
        $tag    = $_POST['tag'];
        
        if(!empty(trim($judul)) && !empty(trim($konten))){
            
            if(edit_data($judul, $konten, $tag, $id)){
                header('Location: index.php'); //akan menuju halaman index
            }else{
                $error = 'Ada masalah saat menambah data';     
            }
            
        }else{
            $error = 'Judul dan konten harus diisi!'; 
        }
        
    }

?>


    <form action="" method="post">

        <label for="judul">Judul</label>
        <br>
        <input type="text" name="judul" value="<?php echo $judul_awal; ?>">
        <br>
        <br>

        <label for="konten">Isi</label>
        <br>
        <textarea name="konten" rows="8" cols="40"><?php echo $konten_awal; ?></textarea>
        <br>
        <br>
        <label for="tag">Tag</label>
        <br>
        <input type="text" name="tag" value="<?php echo $tag_awal; ?>">
        <br>
        <br>

        <div id="error">
            <?=$error ?>
        </div>
        <br>

        <input type="submit" name="submit" value="submit">

    </form>


    <?php 
    require_once "view/footer.php"; //buat ngeload file lain (footer.php)
?>
