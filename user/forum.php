<?php include "koneksi.php";
include "sesion.php";
$sqldsn = mysql_query("select * from member where username='$_SESSION[namamember]'");
	$rdsn = mysql_fetch_array($sqldsn);?>
    

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td><?php  echo "Selamat Datang di forum  <b>$rdsn[nama_lengkap]</b> "; ?></td>
  </tr>
  <tr>
    <td><?php include"poststatus.php"; ?>
    <?php include"status.php"; ?></td>
  </tr>
</table>
</body>
</html>