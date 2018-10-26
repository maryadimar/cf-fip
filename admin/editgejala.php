<?php
include "koneksi.php";


$vkode_gejala=$_POST['kode_gejala'];
$vnama_gejala=$_POST['nama_gejala'];

mysql_query("update gejala set nama_gejala='$vnama_gejala' where kode_gejala='$vkode_gejala'  ");

echo "<b>Data sedang proses update..<br>silahkan tunggu.!";
echo"<meta http-equiv=Refresh content=1;url=index.php?p=datagejala>"; 
?>