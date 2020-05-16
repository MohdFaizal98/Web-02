<?php
//buat koneksi dengan MySQL
$link=mysql_connect('localhost','root','');
  
//jika koneksi gagal, langsung keluar dari PHP
if (!$link)
{
   die("Koneksi dengan MySQL gagal");
}
  
//gunakan database universitas
$result=mysql_query('universitas');
if (!$result)
{
   die("Database mahasiswa gagal digunakan");
}
  
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query('SELECT * FROM mahasiswa_ilkom');
$row=mysql_fetch_row($result);
echo "$row[0] $row[1] $row[2] $row[3] $row[4]";
?>