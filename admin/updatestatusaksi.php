<?php

include "sesion.php"; 
include "koneksi.php";
$x = nl2br($_POST['status']);
mysql_query("insert into status (username,status,tanggalpos) value ('$_POST[username]','$x',NOW())");
if($_GET['mod']=="stat"){
header("location:index.php?p=komentar");
}else{
header("location:index.php?p=komentar");
}
?>
