<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>&nbsp;</p>
  <table width="50%" border="1" cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="2"><div align="center">Tambah Gejala </div></td>
    </tr>
    <tr>
      <td width="23%">Kode Gejala </td>
      <td width="77%"><label>
        <input name="kode_gejala" type="text" id="kode_gejala">
      </label></td>
    </tr>
    <tr>
      <td>Nama Gejala </td>
      <td><label>
        <textarea name="nama_gejala" id="nama_gejala"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="simpan" type="submit" id="simpan" value="SIMPAN">
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<?php


if($_POST["simpan"]){
include "koneksi.php";

$vkode_gejala=$_POST['kode_gejala'];
$vnama_gejala=$_POST['nama_gejala'];
	if (!empty($vkode_gejala) && !empty($vnama_gejala))
	{
	
		$cek=mysql_query("select * from gejala where kode_gejala='$vkode_gejala'");
		$valid=mysql_num_rows($cek);
		
		if ($valid){
		?>
				<script language="javascript">alert("Maaf, Kode Gejala Telah Ada!!");</script>
        	<?php
				header("location :?p=tambahgejala");
			
		}else{
			
			$insert=mysql_query("INSERT INTO gejala (kode_gejala,nama_gejala) VALUES('$vkode_gejala','$vnama_gejala')");
			if ($insert)
			{
				?>
				<script language="javascript">alert("Gejala Telah ditambahkan."); </script>
				
        		<?php
		header("location:?p=datagejala");
			}
		}
		
	}
	else
	{
		?>
				<script language="javascript">alert("Maaf data anda belum lengkap");</script>
        <?php
		header("location :?p=tambahgejala");
	}
	
	
}

?>




