<?php 
include "sesion.php";
include"koneksi.php";

$sql= mysql_query("select * from status where username='$_GET[username]' order by tanggalpos desc");
while ($r =mysql_fetch_array($sql)){
		echo " <table border= '0' widht='600' cellpadding='5' cellspacing='5'>
			<tr>
				<td>";
				
			echo "</td> 
			<td><b>$rkom[username]   </b><br>$r[status]<br> <i>pada $r[tanggalpos] WIB </i> </td>
			</td>
			</table>";
			include "listkomentar.php";
}
?>
