<?php
	include "koneksi.php";
	mysql_query("delete from solusi where idsolusi='$_GET[id]'");
	header("location:?p=viewsolusi");
?>