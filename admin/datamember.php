<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include "koneksi.php";
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td>No</td>
      <td>Username</td>
      <td>Password</td>
      <td>Nama</td>
      <td>Jenis kelamin</td>
      <td>Alamat</td>
      <td>Umur</td>
      <td>Aksi</td>
    </tr>
    <?php 
	
	$no=1; 
	$query=mysql_query("SELECT*FROM member");
	
	while($member=mysql_fetch_array($query))
	{
	$vusername=$member['username'];
	$vpass=$member['password'];
	$vnama=$member['nama_lengkap'];
	$vjk=$member['jenis_kelamin'];
	$valamat=$member['alamat'];
	$vumur=$member['umur'];
	$vid=$member['id_member'];
	
	?>
    <tr>
      <td><?php echo " $no "; $no++ ?></td>
      <td><?php echo " $vusername ";?></td>
      <td><?php echo " $vpass ";?></td>
      <td><?php echo " $vnama ";?></td>
      <td><?php echo " $vjk ";?></td>
      <td><?php echo " $valamat ";?></td>
      <td><?php echo " $vumur ";?></td>
      <td><?php  echo"<a href='?p=hapusmember&username=$vusername'>Hapus</a>"; ?></td>
    </tr>
    <?php } ?>
  </table>
</form>
</body>
</html>
