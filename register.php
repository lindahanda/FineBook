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
            
            $email    = $_POST['email'];
            $pass     = $_POST['password'];
            $nama     = $_POST['nama'];
            $alamat   = $_POST['alamat'];
            $pos      = $_POST['pos'];
            $no_hp    = $_POST['no_hp'];
            

            if(!empty(trim($email)) && !empty(trim($pass)) && !empty(trim($nama)) && !empty(trim($alamat)) && !empty(trim($pos)) && !empty(trim($no_hp)) ){

                if(!register_email_cek($email)){ //mengecek apakah email sudah dipakai atau belum
                
                        if(register_user_finebook($email, $pass, $nama, $alamat, $pos, $no_hp)){//jika hasil bernilai true akan mengarahkan ke halaman index
                        
                        $_SESSION['user'] = $email; //set session setelah berhasil login

                        header('Location: index.php'); //akan menuju halaman index
                        }else{
                            $error = 'Ada masalah saat daftar';     
                        }

                }else{
                    $error = "Username yang didaftarkan sudah ada, pilih nama lain";
                }

                
            }else{
                
                $error = 'nama atau password harus diisi!'; 
            }
            
        }

?>

    <div class="container">
        <div id="bungkus_register">
        <form action="" method="post">
            
            <h2>REGISTER</h2>
            <div class="isian">

            <label for="email">Email</label>
            <input type="email" name="email" value="" placeholder="Email">
            <br>
            

            <label for="password">Password</label>
            
            <input type="password" name="password" value="" placeholder="Password">
            <br>

            <label for="nama">Nama</label>
            <input type="text" name="nama" value="" placeholder="Nama">

            <br>

            <label for="Alamat">Alamat</label>
            <textarea name="alamat" rows="4" cols="50"></textarea>

            <br>

            <label for="pos">Kode Pos</label>
            <input type="text" name="pos" value="" placeholder="Kode Pos">

            <br>

            <label for="no_hp">No Handphone</label>
            <input type="text" name="no_hp" value="" placeholder="No Handphone">

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