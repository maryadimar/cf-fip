<?php
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="1" cellpadding="1" bgcolor="">
      <tr bgcolor="#FFFFFF">
        <td width="3%"><div align="center"><strong>No</strong></div></td>
        <td width="10%"><div align="center"><strong>Kode Solusi </strong></div></td>
        <td width="78%" bgcolor=""><div align="center"><strong>Gambaran Solusi </strong></div></td>
        <td width="9%"><div align="center"><strong>Aksi</strong></div></td>
      </tr>
      <?php
  $no=1;
$query="SELECT*FROM solusi";
 $rsolusi=mysql_query($query) or die ('ERROR');
  while($data=mysql_fetch_array($rsolusi))
  {
 $vkode_solusi = $data['kode_solusi'];
 $vnama_solusi = $data['nama_solusi'];
 $vidsolusi=$data['idsolusi'];
 
  
  ?>
      <tr>
        <td bgcolor="#FFFFFF"><?php echo "$no"; $no++ ?></td>
        <td bgcolor="#FFFFFF"><?php  echo "$vkode_solusi";?></td>
        <td bgcolor="#FFFFFF"><?php  echo "$vnama_solusi"; ?></td>
        <td><table width="100%" border="1" cellspacing="1" cellpadding="1">
          <tr bgcolor="#99CCFF">
            <td bgcolor="#FFFFFF"><div align="center"><?php echo" <a href='?p=hapussolusi&id=$vidsolusi'>Delete</a> ";?></div></td>
            <td bgcolor="#FFFFFF"><div align="center"><?php echo" <a href='?p=editsolusi&id=$vidsolusi'>Update</a> ";?></div></td>
          </tr>
        </table></td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="4"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div align="center"><?php echo" <a href='?p=solusibaru'>Tambah Solusi</a>"; ?></div></td>
            </tr>
          </table>
        </div></td>
      </tr>
    </table>
        <div align="center"></div></td>
  </tr>
</table>
</body>
</html>