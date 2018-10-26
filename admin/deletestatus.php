<?php
	include "koneksi.php";
	mysql_query("delete from status where idstatus='$_GET[id]'");
	mysql_query("delete from komentar where idstatus='$_GET[id]'");
	
	header("location:?p=komentar");
?>