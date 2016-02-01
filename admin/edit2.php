<?php
include('config.php'); //untuk memanggil config.php
?>
 
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!--untuk memanggil font Montserrat-->
<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css"> <!--untuk memanggil font Lobster-->
<meta charset="UTF-8"> <!--untuk mengenali semua jenis tulisan-->

<title>FineBook Edit</title> 
<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    font-family : Lobster;
    color: white;
    font-size: 100px;
    margin: 75px ;
    margin-left: 500px;
}

.edit-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto; /*untuk berada di tengah-tengah*/
    margin-bottom:20px ;
     
}


.edit-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.edit-block input {
    width: 100%;
    height: 42px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.edit-block input:active, .edit-block input:focus {
    border: 1px solid #ff656c;
}

.edit-block #tombol {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.edit-block #tombol:hover {
    background: #ff7b81;
}

</style>
</head>
 
<body>

<?php //MULAI PHP
$KD_PEMBELI = $_GET['id2']; //deklarasi variabel $KD_TOKO untuk menangkap 'id' yang dikirmkan dari view.php dengan method post
 
$query = mysql_query("select * from pembeli where kd_pembeli='$KD_PEMBELI' ") or die(mysql_error()); //deklarasi variabel $query untuk mengakses database
 
$data = mysql_fetch_array($query); //untuk menangkap data hasil perintah query berupa array 
?>
 
<form name="update_data" action="update2.php" method="post">
    <input type="hidden" name="kode_pembeli" value="<?php echo $KD_PEMBELI; ?>" /> <!--membawa nilai dari kode toko di database-->
    <div class="logo">FineBook</div>
    <div class="edit-block">
        <h1>Edit Data</h1>
            <input type="text" placeholder="Nama" name="nama" value="<?php echo $data['nama']; ?>"/><!--membawa nilai dari nama toko di database-->
            <input type="text" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat']; ?>"/>
            <input type="text" placeholder="kode Pos" name="kd_pos" value="<?php echo $data['kd_pos']; ?>"/> <!--membawa nilai dari alamat di database-->
            <input type="text" placeholder="Email" name="email" value="<?php echo $data['email']; ?>"/>
            <input type="text" placeholder="No. HP" name="no_hp" value="<?php echo $data['no_hp']; ?>"/> <!--membawa nilai dari Stok buku di database-->
            <button id="tombol">Edit</button>
    </div>
</form>
</div>
</body>
</html>
 