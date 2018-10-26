<?php 
include "koneksi.php";
$solusi1 = mysql_fetch_array(mysql_query("SELECT * FROM solusi WHERE kode_solusi = 'S006'"));
					
					
					$nama_solusi1 = $solusi1['nama_solusi'];
					
			
					
					echo "<h1 align='left'>Solusi </h1><h4>$nama_solusi1 </h4>";	 ?>