<?php
    
    //fungsi konek ke database

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'tutorial';
    $db2  = 'finebook';

    $link  = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());
    $konek = mysqli_connect($host, $user, $pass, $db2) or die(mysqli_error());
?>
