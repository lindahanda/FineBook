<?php     

	$login = false;
    //Mengecek sudah ada session sebelumnya ada atau tidak
    if(isset($_SESSION['user'])){
        $login = true; //dengan fungsi ini akan mengecek jika sudah login maka akan mengubah variabel true bernilai benar
    } 
    

    if(isset($_GET['cari'])){//buat fungsi mencari dengan parameter get dari input cari
        
        $cari = $_GET['cari'];
        $articles = hasil_cari_buku($cari);
    
    }
?>


<head>
    <title>FINEBOOKs - Find Your Books</title>
    <link rel="stylesheet" href="view/style.css">
</head>


<div class="container">

    <img id="logo" src="img/logo72.png">
    
    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if($login): //jika variabel login true maka yang tampil adalah logout & tambah artikel?>
            <li><a href="tambah.php">Profile Pembeli</a></li>

            <ul>
                <li><a href="logout.php">Logout</a></li>
            	<?php else: //jika variabel login false maka yang tampil adalah login> ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <?php endif; ?>
            </ul>

        </ul>
    </div>
    
</div>