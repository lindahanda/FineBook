<?php 
/*
function tampilkan(){//menampilkan semua artikel blog di index
    
    $query = "SELECT * FROM blog"; //perintah query mengakses ke database
    return result($query);
    
}

function tampilkan_per_id($id){//menampilkan persatuan artikel
    
    $query = "SELECT * FROM blog WHERE id=$id"; //perintah query mengakses ke database
    return result($query);
    
}
*/

//FINEBOOK
function tampilkan_per_id_buku($id){//menampilkan persatuan artikel
    
    $query = "SELECT * FROM buku WHERE kd_buku = '$id'"; //perintah query mengakses ke database
    return result2($query);
    
}

function tampilkan_buku(){
    $query = "SELECT * FROM buku"; //perintah query mengakses ke database
    return result2($query);
}

function hasil_cari($cari){
    
    $query = "SELECT * FROM blog WHERE judul LIKE '%$cari%'"; //perintah query mengakses ke database
    return result($query);
    
}

function hasil_cari_buku($cari){
    
    $query = "SELECT * FROM buku WHERE nama_buku LIKE '%$cari%'"; //perintah query mengakses ke database
    return result2($query);
    
}

/*
function escape($data){//refactor untuk DDL, function keamanan data
    
    global $link;
    return mysqli_real_escape_string($link,$data);
    
}
*/

function escape2($data){//refactor untuk DDL, function keamanan data
    
    global $konek;
    return mysqli_real_escape_string($konek,$data);
    
}
/*
function result($query){//refactor untuk DDL
    
    global $link;//untuk memakai variabel diluar linkungan ini ($link) harus menggunakan global
    if ($result = mysqli_query($link, $query) or die('Gagal menampilkan data')){
        return $result;
    }
    
}
*/

function result2($query){//refactor untuk DDL
    
    global $konek;//untuk memakai variabel diluar linkungan ini ($link) harus menggunakan global
    if ($result = mysqli_query($konek, $query) or die('Gagal menampilkan data')){
        return $result;
    }
    
}


/*
function tambah_data($judul, $konten, $tag){//fungsi menambah penulisan
    
    
    $judul  = escape($judul);
    $konten = escape($konten);
    
    $query = "INSERT INTO blog (judul, isi, tag) VALUES ('$judul','$konten','$tag')";
    return run($query);
    
}

function hapus_data($id){//menghapus data
    
    $query = "DELETE from blog WHERE id=$id ";
    return run($query);
}

function edit_data($judul, $konten, $tag, $id){//mengupdate penulisan
    
    $query = "UPDATE blog SET judul='$judul', isi='$konten', tag='$tag' WHERE id=$id ";
    return run($query);
    
}


function run($query){//refactor untuk DML
    
    global $link;
    
    if (mysqli_query($link, $query)) return true;
    else return false;    
        
}
*/

function run2($query){//refactor untuk DML
    
    global $konek;
    
    if (mysqli_query($konek, $query)) return true;
    else return false;    
        
}

/*
function excerpt($string){//memotong isi saat berada di index, jadi isi dari artikel ga ditampilkan semua
    $string = substr($string,0,40);
    return $string . "...";
}
*/
?>
