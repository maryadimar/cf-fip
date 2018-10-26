<?php
	error_reporting(1);$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "db_fip";
	
	$kon = mysql_connect($host, $user, $pass);
	$kondb = mysql_select_db($db, $kon);
	
	/*if($kon){
		echo "Terkoneksi dengan Mysql Server";
		if($kondb){
			echo "Database $db bisa diakses";	
		}else{
			echo "$db tidak ada";	
		}	
	}else{
		echo "Tidak terkoneksi";	
	}*/
?>