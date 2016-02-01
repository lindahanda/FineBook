<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<meta charset="UTF-8">

<title>FineBook</title>
<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center; /* Nama : Erikas Mališauskas */
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 75px;
    font-family : Lobster;
    color: white;
    font-size: 125px;
    margin: 0 auto;
    margin-left: 450px;
}

.input-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
}

.letak{
    margin-top:125px ;
    margin-left:50px;
}

.letak2{
    margin:0 auto;
    margin-top:-370px;
}

.letak3{
    margin:0 auto;
    margin-top:-430px ;
    margin-right:50px;
}

.input-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.input-block input {
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

.input-block input:active, .input-block input:focus {
    border: 1px solid #ff656c;
}

.input-block #tombol {
    width: 100%;
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
}

.input-block #tombol:hover {
    background: #ff7b81;
}
</style>
</head>

<body>

<div class="logo">FineBook</div>
<div class="input-block letak">

    <form name="input_data" action="simpan.php" method="post"> 
        <h1>LOKASI</h1>

        <input type="text" placeholder="Nama Toko" name="nama_toko"/>
        <input type="text" placeholder="Alamat" name="alamat" />
        <input type="text" placeholder="Stok Buku" name="stbuk" />
        <button id="tombol">Simpan</button>
     </form>
     
<a href="view.php"><button id="tombol">Lihat Data</button></a>

</div>

<div class="input-block letak2">

    <form name="input_data" action="simpan2.php" method="post"> 
        <h1>PEMBELI</h1>

        <input type="text" placeholder="Nama" name="nama"/>
        <input type="text" placeholder="Alamat" name="alamat" />
        <input type="text" placeholder="Email" name="email" />
        <input type="text" placeholder="No. HP" name="no_hp" />
        <button id="tombol">Simpan</button>
     </form>
     
<a href="view.php"><button id="tombol">Lihat Data</button></a>

</div>

<div class="input-block letak3">

    <form name="input_data" action="simpan.php" method="post"> 
        <h1>BUKU</h1>

        <input type="text" placeholder="Judul Buku" name="judul_buku"/>
        <input type="text" placeholder="Penerbit" name="penerbit" />
        <input type="text" placeholder="Tahun Terbit" name="tahun" />
        <input type="text" placeholder="Kategori" name="kategori" />
        <input type="text" placeholder="Harga" name="harga" />
        <button id="tombol">Simpan</button>
     </form>
     
<a href="view.php"><button id="tombol">Lihat Data</button></a>

</div>

</body>

</html>