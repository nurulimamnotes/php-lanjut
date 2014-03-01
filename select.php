<?php
// Menghubungkan Koneksi Database
include 'koneksi.php';

// Mulai Menampilkan Query Database
$query = "SELECT * FROM buku";
$data = mysql_query($query);
$tampilkan = mysql_fetch_array($data);

// Mulai Menampilkan Query dalam HTML
echo "<h3 style='text-align:center'>Latihan Menampilkan Database Dengan SELECT</h3>";
echo "<br />";
echo "<table>";
echo "<tr>";
echo "<td>Judul Buku</td>";
echo "<td> : </td>";
echo "<td>".$tampilkan['judul']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Pengarang</td>";
echo "<td> : </td>";
echo "<td>".$tampilkan['judul']."</td>";
echo "</tr>";
echo "</table>";
?>