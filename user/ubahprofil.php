<?php
include "sesion.php";
include "koneksi.php";
$sqluser = mysql_query("select * from member where id_member='$_GET[id]'");
$ruser = mysql_fetch_array($sqluser); ?>
	
<form name="form1" method="post" action="" enctype="multipart/form-data" >
  <table width="100%" border="0" cellspacing="1" cellpadding="1" bordercolordark="#666666"="">
    <tr>
      <td colspan="2"><p>      EDIT PROFIL      <br />
      </p></td>
    </tr>
    <tr>
      <td width="11%">Username      </td>
      <td width="89%"><label>
        <input name="username" type="text" id="username" value="<?php echo "$ruser[username]"; ?>" readonly="readonly">
        <input name="id_member" type="hidden" id="id_member" value="<?php echo "$ruser[id_member]";?>" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input name="password" type="password" id="password" value="<?php echo "$ruser[password]"; ?>">
      </label></td>
    </tr>
    <tr>
      <td>Nama Lengkap </td>
      <td><label>
        <input name="nama_member" type="text" id="nama_member" value="<?php echo "$ruser[nama_lengkap]"; ?>">
      </label></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
	  <?php
      	if($ruser['jenis_kelamin'] == 'L'){
		  $l = "checked";  $p = "";
	  	}else if($ruser['jenis_kelamin'] == 'P'){
		  $l = "";  $p = "checked";
	  	}else{
		  $l = "";  $p = "";
	  	}
	  ?>
      <td>
        <input name="jenis_kelamin" type="radio" value="L" <?php echo "$l";?>/>
        Laki Laki 
        <input name="jenis_kelamin" type="radio" value="P" <?php echo "$p";?>/>
      Perempuan</td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td><label>
        <textarea name="alamat" id="alamat"><?php echo "$ruser[alamat]"; ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Umur</td>
      <td><label>
        <input name="umur" type="text" id="umur" value="<?php echo "$ruser[umur]"; ?>">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="ubah" type="submit" id="ubah" value="EDIT" /></td>
    </tr>
  </table>
  
</form>
<?php
  if($_POST["ubah"]){
	include "koneksi.php";
		
	mysql_query("update member set username='$_POST[username]',password='$_POST[password]',nama_lengkap='$_POST[nama_member]',jenis_kelamin='$_POST[jenis_kelamin]', alamat='$_POST[alamat]', umur='$_POST[umur]' where id_member='$_POST[id_member]'");


echo"<meta http-equiv=Refresh content=1;url=index.php?p=profil>"; 
}
else{
	
}

?>

