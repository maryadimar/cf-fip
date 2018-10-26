<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include "sesion.php";

include "koneksi.php";

$hapus = "delete from konsultasi";
if (isset($hapus) && !empty($hapus)) 
{ 
echo "<!--" . $hapus . "-->";
$proses = mysql_query($hapus) 
or 
die("Invalid query: " . mysql_error());
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<h3 align="left" class="style7">Selamat Datang : <?php echo "$namamember";?></h3>
<h3 align="left" class="style7">Pilihlah Pertanyaan Sesuai dengan Gejala-Gejala Yang Dialami  :</h3>
<form action="pkonsul.php" method="post">
  <table class="table table-striped" bgcolor="#FFFFFF" border="1">
    <tr>
      <td align="center" width="30"><b>No</b></td>
      <td align="center"><b>Pertanyaan</b></td>
      <td align="center" width="50"><b>Pilih Berapa Besar Karakter Yang anda Miliki</b></td>
    </tr>
    <?php 
								include "koneksi.php";
								$no=1;
								$hasil=mysql_query("select * from gejala order by kode_gejala asc");							
								$rt = mysql_num_rows($hasil);                            
while($row=mysql_fetch_array($hasil))
					{
				echo "<tr>";
				echo "<td align='center'>$no</td>";
				echo "<td><input type='checkbox' value='".$row['kode_gejala']."' name='gejala".$no."'/>Apakah Mengalami ".$row[nama_gejala]." ?</br></td>";
				echo "<td>  
					  <label for='cf'></label>
					  <select name='cf".$no."' id='cf'>  	
						<option value='0'>PILIH BERDASARKAN YANG DIMILIKI</option>
						<option value='0.1'>PASTI TIDAK</option>
						<option value='0.2'>HAMPIR TIDAK PASTI</option>
						<option value='0.3'>KEMUNGKINAN BESAR TIDAK</option>
						<option value='0.4'>MUNGKIN TIDAK</option>
						<option value='0.5'>KEMUNGKINAN KECIL</option>
						<option value='0.6'>MUNGKIN</option>
						<option value='0.7'>KEMUNGKINAN BESAR</option>
						<option value='0.8'>HAMPIR PASTI</option>
						<option value='1'>PASTI</option>
					  </select>
				</td>";
				/*echo "<td><input type='text' name='cf".$no."'></td>";*/
				$no++;
				echo"</tr>";
						}
				?>
  </table>
  <div align="center">
    <input type="submit" class="btn btn-success" name="periksa" id="periksa" value="Periksa Konsultasi" />
    <input name="reset" type="reset" class="btn btn-warning" value="Ulangi" />
  </div>
</form>
</body>
</html>
