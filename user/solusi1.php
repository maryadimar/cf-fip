<?php 
include "koneksi.php";
$solusi1 = mysql_fetch_array(mysql_query("SELECT * FROM solusi WHERE kode_solusi = 'S001'"));
					$solusi2 = mysql_fetch_array(mysql_query("SELECT * FROM solusi WHERE kode_solusi = 'S002'"));
					
					$nama_solusi1 = $solusi1['nama_solusi'];
					$nama_solusi2 = $solusi2['nama_solusi'];
			
					
					echo "<h1 align='left'>Solusi </h1><h4>$nama_solusi1 </h4><h4>$nama_solusi2 </h4>";	 ?>