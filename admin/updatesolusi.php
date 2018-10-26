<?php

include "koneksi.php";
	$sqlsolusi = mysql_query("select * from solusi where idsolusi='$_GET[id]'");
	$rsolusi = mysql_fetch_array($sqlsolusi); ?>
<form name="form1" method="post" action="editsolusi.php"  >
  <p>&nbsp;</p>
  <table width="50%" border="1" cellspacing="1" cellpadding="1">
    <tr>
      <td height="30" colspan="2"><div align="center">Update Solusi</div></td>
    </tr>
    <tr>
      <td width="23%">Kode Solusi 
      <input name="hiddenField" type="hidden" value="<?php echo "$rsolusi[idsolusi]"; ?>"></td>
      <td width="77%"><label>
      <input name="kode_solusi" readonly=""  type="text" id="kode_solusi" value="<?php echo "$rsolusi[kode_solusi]"; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Solusi </td>
      <td><label>
        <textarea name="nama_solusi" id="nama_solusi"><?php echo "$rsolusi[nama_solusi]"; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
      <input name="update" type="submit" id="edit" value="UPDATE" />
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
