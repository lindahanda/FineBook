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

    <h1>DATA PEMBELI</h1>
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr> <!--mulai membuat judul kolom-->
            <th><center>Kode Pembeli</center></th>
            <th width="250px"><center>Nama</center></th>
            <th width="325px"><center>Alamat</center></th>
            <th><center>Kode Pos</center></th>
            <th><center>Email</center></th>
            <th><center>No. HP</center></th>
            <th width="200px"><center>Opsi</center></th>
        </tr>
    </thead>
    <tbody>

    <?php
    $query = mysql_query("select * from pembeli"); //query untuk memilih data yang akan ditampilkan 
 
    /*$no = 1;*/
    while ($data = mysql_fetch_array($query)) { //mulai perulangan untuk mencetak semua data yang ada dalam tabel lokasi
    ?>
        <tr>
            <td><?php echo $data['kd_pembeli']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['kd_pos']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><center>
                <a href="edit2.php?id2=<?php echo $data['kd_pembeli']; ?>"><button class="tombol2">Edit</button></a> <!--membuat tombol edit untuk menuju edit.php dengan membawa nilai dari 'id'-->
                <a href="delete2.php?id2=<?php echo $data['kd_pembeli']; ?>"><button class="tombol2">Hapus</button></a> 
           </center></td>
        </tr>
    <?php
       /* $no++; */
    }
    ?>
    </tbody>
</table>

</div>

   <a href="input.php"><button class="tombol">Tambah Data</button></a>

</body>

</html>