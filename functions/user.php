<?php 

    function register_user($nama, $pass){

        $nama = escape($nama);
        $pass = escape($pass);

        //fungsi HASH
        //md5 akan mengconvert enkripsi isi pass menjadi string yang acak
        $pass = md5($pass);
        
        $query = "INSERT INTO users (username, password, status) VALUES ('{$nama}','{$pass}', 0)";
        return run($query);

    }

    //FINEBOOK
    function register_user_finebook($email, $pass, $nama, $alamat, $pos, $no_hp){

        $email = escape2($email);
        $pass = escape2($pass);

        //fungsi HASH
        //md5 akan mengconvert enkripsi isi pass menjadi string yang acak
        $pass = md5($pass);
        
        $query = "INSERT INTO pembeli (email, password, nama, alamat, kd_pos, no_hp) VALUES ('{$email}','{$pass}', '{$nama}','{$alamat}','{$pos}','{$no_hp}' )";
        return run2($query);

    }

    function register_user_cek($nama){

        $nama = escape($nama);
          
        $query = "SELECT * FROM users WHERE username = '{$nama}'";
        
        global $link;

        if ($result = mysqli_query($link, $query)){
            if(mysqli_num_rows($result) != 0 ) return true;
                else return false;
        }

    }

    //FINEBOOK
    function register_email_cek($email){

        $email = escape2($email);
          
        $query = "SELECT * FROM pembeli WHERE email = '{$email}'";
        
        global $konek;

        if ($result = mysqli_query($konek, $query)){
            if(mysqli_num_rows($result) != 0 ) return true;
                else return false;
        }

    }


    function cek_data($nama, $pass){
        
        
        $nama = escape($nama);
        $pass = escape($pass);

        //fungsi HASH
        //md5 akan mengconvert enkripsi isi pass menjadi string yang acak
        $pass = md5($pass);
        
        
        $query = "SELECT * FROM users WHERE username = '{$nama}' AND password = '{$pass}'";
        
        global $link;

        if ($result = mysqli_query($link, $query)){
            if(mysqli_num_rows($result) != 0 ) return true;
                else return false;
        }
        
    }

    //FINEBOOK
    function cek_data2($email, $pass){
        
        
        $email = escape2($email);
        $pass = escape2($pass);

        //fungsi HASH
        //md5 akan mengconvert enkripsi isi pass menjadi string yang acak
        $pass = md5($pass);
        
        
        $query = "SELECT * FROM pembeli WHERE email = '{$email}' AND password = '{$pass}'";
        
        global $konek;

        if ($result = mysqli_query($konek, $query)){
            if(mysqli_num_rows($result) != 0 ) return true;
                else return false;
        }
        
    }

    function cek_status($username){

        $nama = escape($username);
        
        $query = "SELECT status FROM users WHERE username = '{$nama}'";
        
        global $link;

        if ($result = mysqli_query($link, $query)){
            while($row = mysqli_fetch_assoc($result)){//mengeluarkan datanya dari databasenya
                $status = $row['status'];
            } 

            return $status;//jadi return ini mengeluarkan nilainya dari database (0/1)

        }

    }

?>
