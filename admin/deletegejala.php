<?php
	include "koneksi.php";
	mysql_query("delete from gejala where idgejala=$_GET[id]");
	header("location:?p=datagejala");
?>