<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div align="left">
  <p>
    <?php
include"sesion.php";
	include "koneksi.php";
	$sqldsn = mysql_query("select * from member where username='$_SESSION[namamember]'");
	$rdsn = mysql_fetch_array($sqldsn);?></p>
  <table width="71%" border="0.2" align="left" cellpadding="1" cellspacing="1">
    <tr>
      <td height="15%" colspan="2"><?php echo"<a href='?p=ubahprofil&id=$rdsn[id_member]'>Edit Profil </a>"; ?></td>
    </tr>
    <tr>
      <td width="22%" height="15%">Username</td>
      <td height="15%"> : <?php echo "$rdsn[username]"; ?></td>
    </tr>
    <tr>
      <td width="22%" height="15%">Password</td>
      <td height="15%"> : <?php echo "$rdsn[password]"; ?></td>
    </tr>
    <tr>
      <td width="22%" height="15%">Nama Lengkap </td>
      <td height="15%">: <?php echo "$rdsn[nama_lengkap]"; ?></td>
    </tr>
    <tr>
      <td width="22%" height="15%">Jenis Kelamin</td>
      <td height="15%">: <?php echo "$rdsn[jenis_kelamin]"; ?></td>
    </tr>
    <tr>
      <td width="22%" height="15%">Alamat</td>
      <td height="15%">: <?php echo "$rdsn[alamat]"; ?></td>
    </tr>
    <tr>
      <td width="22%" height="15%">Umur</td>
      <td height="15%">: <?php echo "$rdsn[umur]"; ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
</body>
</html>
