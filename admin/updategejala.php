<?php

include "koneksi.php";
	$sqlgejala = mysql_query("select * from gejala where idgejala='$_GET[id]'");
	$rgejala = mysql_fetch_array($sqlgejala); ?>
<form name="form1" method="post" action="editgejala.php"  >
  <p>&nbsp;</p>
  <table width="50%" border="1" cellspacing="1" cellpadding="1">
    <tr>
      <td height="30" colspan="2"><div align="center">Updae Gejala </div></td>
    </tr>
    <tr>
      <td width="23%">Kode Gejala 
      <input name="hiddenField" type="hidden" value="<?php echo "$rgejala[id_gejala]"; ?>"></td>
      <td width="77%"><label>
      <input name="kode_gejala"  type="text" id="kode_gejala" value="<?php echo "$rgejala[kode_gejala]"; ?>" readonly="" >
      </label></td>
    </tr>
    <tr>
      <td>Nama Gejala </td>
      <td><label>
        <textarea name="nama_gejala" id="nama_gejala"><?php echo "$rgejala[nama_gejala]"; ?></textarea>
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
