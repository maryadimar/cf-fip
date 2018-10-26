<?php
include "koneksi.php";


mysql_query("update solusi set nama_solusi='$_POST[nama_solusi]' where kode_solusi='$_POST[kode_solusi]' ");

echo "<b>Data sedang proses update..<br>silahkan tunggu.!";
echo"<meta http-equiv=Refresh content=1;url=index.php?p=viewsolusi>"; 
?>