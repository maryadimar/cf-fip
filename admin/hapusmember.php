<?php
include "koneksi.php";
mysql_query("delete from member where username='$_GET[username]'");
	mysql_query("delete from komentar where username='$_GET[username]'");
	mysql_query("delete from status where username='$_GET[username]'");
header("location:?p=datamember");

?>