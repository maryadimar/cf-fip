<?php 
include "sesion.php";
include "koneksi.php";
$x = nl2br($_POST['komentar']);
mysql_query("insert into komentar (username,idstatus,komentar,tanggalkomentar) value ('$_POST[username]','$_POST[idstatus]','$x',NOW())");

if($_GET['mod']=="kom"){
header("location:index.php?p=komentar");
}else{
header("location:index.php?p=komentar");
}

?>
