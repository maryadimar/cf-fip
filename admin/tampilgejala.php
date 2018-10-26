<?php
include "koneksi.php";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head>

<body>
<table width="100%" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td><table width="100%" border="1" cellspacing="1" cellpadding="1" bgcolor="">
    <tr bgcolor="#FFFFFF">
      <td width="29"><strong>No</strong></td>
            <td width="90"><strong>Kode Gejala </strong></td>
            <td width="780"><div align="center"><strong>Nama Gejala </strong></div></td>
            <td width="91"><div align="center"><strong>Aksi</strong></div></td>
        </tr>
    <?php
  $no=1;
$query="SELECT*FROM gejala";
 $rgejala=mysql_query($query) or die ('ERROR');
  while($data=mysql_fetch_array($rgejala))
  {
 $vkode_gejala = $data['kode_gejala'];
 $vnama_gejala = $data['nama_gejala'];
 $vidgejala=$data['idgejala'];
 
  
  ?>
    <tr>
      <td bgcolor="#FFFFFF"><?php echo "$no"; $no++ ?></td>
            <td bgcolor="#FFFFFF"> <?php  echo "$vkode_gejala";  ?></td>
            <td bgcolor="#FFFFFF" width="780" height="10"><?php  echo "$vnama_gejala"; ?></td>
            <td bgcolor="#FFFFFF"><table width="100%" border="1" cellspacing="1" cellpadding="1" bgcolor="#99CCFF">
              <tr>
                <td bgcolor="#FFFFFF"><div align="center"><?php echo" <a href='?p=deletegejala&id=$vidgejala'>DELETE</a> ";?></div></td>
                  <td bgcolor="#FFFFFF"><div align="center"><?php echo" <a href='?p=updategejala&id=$vidgejala'>UPDATE</a> ";?></div></td>
              </tr>
              </table></td>
        </tr>
    <?php } ?>
    <tr>
      <td height="30" colspan="4"><table width="10%" border="1" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td bgcolor="#999999"><div align="center" ><?php echo" <a href='?p=tambahgejala'>Tambah Gejala</a>"; ?></div></td>
              </tr>
        </table></td>
        </tr>
    </table>      
    <p>&nbsp;</p></td></tr>
</table>
</body>
</html>
