<?php include('config.php') ?>

<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<meta charset="UTF-8">

<title>FineBook View</title>
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
    margin-bottom: 10px auto;
    color: white;
    font-size: 100px;
}

h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.tabel{
    width: 1000px;
    padding: 20px ;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin:0 auto;
    margin-top: 100px;
}
.tombol {
    width: 20%;
    height: 40px;
    background: #ff656c;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
    margin-top: 25px;
    margin-left: 550px;
}

.tombol2 {
    background: #ff656c;
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

</style>
</head>

<body>

<div class="logo">FineBook</div>
<div class="tabel">

    <h1>DATA BUKU</h1>
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr> <!--mulai membuat judul kolom-->
            <th><center>No</center></th>
            <th><center>Kode Buku</center></th>
            <th width="250px"><center>Judul Buku</center></th>
            <th width="325px"><center>Penerbit</center></th>
            <th><center>Tahun Terbit</center></th>
            <th width="200px"><center>Kategori</center></th>
            <th><center>Harga</center></th>
            <th width="200px"><center>Opsi</center></th>
        </tr>
    </thead>
    <tbody>

    <?php
    $query = mysql_query("select * from buku"); //query untuk memilih data yang akan ditampilkan 
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) { //mulai perulangan untuk mencetak semua data yang ada dalam tabel lokasi
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kd_buku']; ?></td>
            <td><?php echo $data['nama_buku']; ?></td>
            <td><?php echo $data['penerbit']; ?></td>
            <td><?php echo $data['tahun_terbit']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['harga']; ?></td>

            <td><center>
                <a href="edit3.php?id3=<?php echo $data['kd_buku']; ?>"><button class="tombol2">Edit</button></a> <!--membuat tombol edit untuk menuju edit.php dengan membawa nilai dari 'id'-->
                <a href="delete3.php?id3=<?php echo $data['kd_buku']; ?>"><button class="tombol2">Hapus</button></a> 
           </center></td>
        </tr>
    <?php
        $no++; 
    }
    ?>
    </tbody>
</table>

</div>

<div class="row">
   <div class="col-md-1">
       <a href="input.php"><button class="tombol">Tambah Data</button></a>
   </div>
   <div class="col-md-6">    
       <a href="laporan2.php"><button class="tombol">Laporan</button></a>
   </div>
</div>

</html>