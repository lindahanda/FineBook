<?php
    require_once "core/init.php";
    require_once "view/header.php"; //buat ngeload file lain (header.php)
    
    $error = '';
    
    $id    = $_GET['id'];


    if(isset($_GET['id'])){
        
        $article = tampilkan_per_id_buku($id);
        
        while($row = mysqli_fetch_assoc($article)){
            
            $judul_buku_per_satuan      = $row['nama_buku'];
            $penerbit_per_satuan        = $row['penerbit'];
            $tahun_terbit_per_satuan    = $row['tahun_terbit'];
            $kategori_per_satuan        = $row['kategori'];
            $harga_per_satuan           = $row['harga'];
                      
        }
        
    }

?>

<div class="container">

    <div id="bungkus_single">

        <img id="thumbnail_buku_satuan" src="img/cover.jpg">

        <p class="judul_single">
            <?= $judul_buku_per_satuan; ?>
        </p>

        <p class="buku_single">
            Penerbit    : <?= $penerbit_per_satuan; ?>
        </p>

        <p class="buku_single">
            Tahun       :<?= $tahun_terbit_per_satuan; ?>
        </p>

        <p class="buku_single">
            Kategori    : <?= $kategori_per_satuan; ?>
        </p>

        <p class="buku_single">
            Harga       : Rp<?= $harga_per_satuan; ?>
        </p>

    </div>

</div>

    <?php 
    require_once "view/footer.php"; //buat ngeload file lain (footer.php)
?>
