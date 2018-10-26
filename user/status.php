<?php 
include "sesion.php";
include"koneksi.php";
$sql= mysql_query("select * from status  order by tanggalpos desc");

while ($r =mysql_fetch_array($sql)){
		echo " <table border= '0' widht='600' cellpadding='5' cellspacing='5'>
			<tr>
				<td>";
				
						echo "</td> 
			<td><b>$r[username] </b><br>$r[status]<br><i>pada $r[tanggalpos] WIB </i></td>
			</td>
			<tr>
			<td>&nbsp;</td>
			<td>";
	
			$sqlk = mysql_query("select * from komentar where idstatus='$r[idstatus]'");
			$rk=mysql_num_rows($sqlk);
			echo "<b>$rk</b> Komentar</td></tr>
			</table>";
			include "komentar.php";
}
?>
