<?php
include"sesion.php";
include "koneksi.php";
$sql= mysql_query("select * from member where username='$_SESSION[namamember]'");
$r = mysql_fetch_array($sql);
echo "<form id='form1' name='form1' method='post' action='updatestatusaksi.php?mod=stat'>
  <table width='50%' border='0'>
    <tr>
      <td width='80'><input type='hidden' name='username' id='username' value='$r[username]'/>";
	  
	  echo"</td>
      <td><label>
        <textarea name='status' id='status' cols='50' rows='3'></textarea>
      </label></td>
    </tr>
    <tr>
      <td width='80'>&nbsp;</td>
      <td><label>
        <input type='submit' name='button' id='button' value='Update Status' />
      </label></td>
    </tr>
  </table>
</form>";
?>
