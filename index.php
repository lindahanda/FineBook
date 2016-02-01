<?php
    require_once "core/init.php";
    require_once "view/header.php"; //buat ngeload file lain (header.php)


    /*$super_user = $login = false;
    
    //Mengecek sudah ada session sebelumnya ada atau tidak
    if(isset($_SESSION['user'])){
        
        $login = true; //dengan fungsi ini akan mengecek jika sudah login maka akan mengubah variabel true bernilai benar
        
        if(cek_status($_SESSION['user']) == 1){//mengecek level dari user. jika nilai 1 maka variabel super_user bernilai true
            $super_user = true;
        }

    }
    */

    //jika ADA maka melakukan semua yang ada dibawah ini

    $articles = tampilkan_buku();

        if(isset($_GET['cari'])){//buat fungsi mencari dengan parameter get dari input cari
        
        $cari = $_GET['cari'];
        $articles = hasil_cari_buku($cari);
    
    }


?>
<div class="container">

    <div class="search">
        <form action="" method="get">
            <input type="search" name="cari" placeholder="Cari buku...">
        </form>
    </div>

    <div class="clear"></div>


        <?php while($row = mysqli_fetch_assoc($articles)): ?>
            <!– fetch_assoc (dengan metode ini kita menaruh semua data di dalam array asosiatif) ->
            
            <div id="bungkus">

                <div id="kiri">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1667.1864686824397!2d106.83335110951187!3d-6.360382446240049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec3d87368e6b%3A0xa363243f32052053!2sUniversitas+Indonesia%2C+Jl.+Margonda!5e0!3m2!1sid!2sid!4v1454220245549" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                <div id="kanan">
                    <div class="each_article">

                       <table>

                            <tr>

                                <div id="gambar_perbuku">
                                    <td rowspan="5"><a href="single.php?id=<?php echo $row['kd_buku']; ?>"><img id="thumbnail_buku" src="img/cover.jpg"></a></td>
                                </div>

                                <td><h4>Nama Buku:</h4><?php echo  $row['nama_buku'] ?></td>
                            
                            </tr>

                            <tr>
                                <td> <h4>Penerbit:</h4> <?php echo  $row['penerbit'] ?> </td>
                            </tr>

                            <tr>
                                <td> <h4>Tahun:</h4> <?php echo  $row['tahun_terbit'] ?> </td>
                            </tr>

                            <tr>
                                <td> <h4>Kategori:</h4> <?php echo  $row['kategori'] ?> </td>
                            </tr>

                            <tr>
                                <td> <h4>Harga:</h4> <?php echo  $row['harga'] ?> </td>
                            </tr>

                       </table>

                        <?php if($login)://fungsi yang mengecek jika login bernilai true maka bisa edit dan delete ?>

                            <h5>
                                <a href="">Edit</a>

                                <?php //if($super_user): //fungsi mengecek jika super user bernilai true maka bisa delete ?>
                                    <a href="">Delete</a>
                                <?php //endif; ?>

                            </h5>

                        <?php endif; ?>

                    </div>
                </div>
            </div>

            <?php endwhile; ?>

    <div class="clear"></div>
</div>

            <?php 
    require_once "view/footer.php"; //buat ngeload file lain (footer.php)
?>