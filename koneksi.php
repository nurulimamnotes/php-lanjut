<?php
// Koneksi Database
$host = "localhost";
$user = "root";
$pass = "suck-it26";
$nmdb = "perpustakaan";

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi Gagal !" . mysql_error());
// if($koneksi) echo "Koneksi Berhasil";
$db = mysql_select_db($nmdb) or die("Database tidak ada !" . mysql_error());
       
        echo "<br />";
       
//        if($db) echo 'Database berhasil dibuka :)';
?>