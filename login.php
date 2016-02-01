<?php
    require_once "core/init.php";
    require_once "view/header.php"; //buat ngeload file lain (header.php)
    
    
    //Mengecek sudah ada session sebelumnya ada atau tidak
    if(isset($_SESSION['user'])){
        header('Location: index.php');//jika ada maka langsung redirect ke index.php
    }else{

    //jika belum maka melakukan semua yang ada dibawah ini

        $error = '';

        if(isset($_POST['submit'])){
            
            $email     = $_POST['email'];
            $pass     = $_POST['password'];

            if(!empty(trim($email)) && !empty(trim($pass))){
                
                if(cek_data2($email,$pass)){//jika hasil bernilai true akan mengarahkan ke halaman index
                    
                    $_SESSION['user'] = $email; //set session setelah berhasil login

                    header('Location: index.php'); //akan menuju halaman index
                }else{
                    $error = 'Password atau Username salah';     
                }
                
            }else{
                
                $error = 'email atau password harus diisi!'; 
            }
            
        }

?>

    <div class="container">
        <div id="bungkus_login">
        <form action="" method="post">

            <h2>LOGIN</h2>
            <div class="isian">
                
                <label for="email">Email</label>
                
                <input type="text" name="email" value="" placeholder="Email">
                
                <br>

                <label for="password">Password</label>
                
                <input type="password" name="password" value="" placeholder="Password">
                
                

                <br>
                <div id="error">
                    <?=$error ?>
                </div>
                
                <br>
                <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>
    </div>

<?php 
    require_once "view/footer.php"; //buat ngeload file lain (footer.php)
?>

<?php 
    } //batas else
?>