<?php
include "sesion.php";
$sqlkom=mysql_query("select * from komentar where idstatus = '$r[idstatus]' order by tanggalkomentar asc");
while ($rkom =mysql_fetch_array($sqlkom)){
	$sqlus= mysql_query("select * from member where username = '$rkom[username]'");
	$rus= mysql_fetch_array($sqlus);
	
 	echo " <table border= '0' widht='600' cellpadding='5' cellspacing='5'>
			<tr>
				<td width='80'>&nbsp;</td>
				<td width='60'>";
				
			
			echo "</td> 
			<td><b>$rkom[username]</b><br>$rkom[komentar]<br><i>pada $rkom[tanggalkomentar] WIB</i> </td>
			</td>
			</table>";
			
}
$sqluser = mysql_query("select * from member where username='$_SESSION[namamember]'");
$ruser = mysql_fetch_array($sqluser);
echo"<form id='form1' name='form1' method='post' action='kirimkomentar.php?mod=kom'>
  <table width='50%' border='0'>
    <tr>
      <td width='80'><input type='hidden' name='username' id='username' value = '$ruser[username]' />
      <input type='hidden' name='idstatus' id='idstatus' value = '$r[idstatus]'/></td>
      <td width='60'>";
	   
	  echo"</td>
      <td><label>
        <textarea name='komentar' id='komentar' cols='50' rows='3'></textarea>
      </label></td>
    </tr>
    <tr>
      <td width='80'>&nbsp;</td>
      <td width='60'>&nbsp;</td>
      <td><label>
      <input type='submit' name='button' id='button' value='kirim komentar' />
      </label></td>
    </tr>
  </table>
</form>";
?>
