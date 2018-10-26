<?php
	include "koneksi.php";
	
	mysql_query("delete from komentar where idkomentar='$_GET[id]'");
	
	header("location:?p=komentar");
?>