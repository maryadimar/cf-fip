<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>&nbsp;</p>
  <table width="50%" border="1" cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="2"><div align="center">Tambah Solusi </div></td>
    </tr>
    <tr>
      <td width="23%">Kode Solusi </td>
      <td width="77%"><label>
        <input name="kode_solusi" type="text" id="kode_solusi">
      </label></td>
    </tr>
    <tr>
      <td>Nama Solusi </td>
      <td><label>
        <textarea name="nama_solusi" id="nama_solusi"></textarea>
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

$vkode_solusi=$_POST['kode_solusi'];
$vnama_solusi=$_POST['nama_solusi'];
	if (!empty($vkode_solusi) && !empty($vnama_solusi))
	{
	
		$cek=mysql_query("select * from solusi where kode_solusi='$vkode_solusi'");
		$valid=mysql_num_rows($cek);
		
		if ($valid){
		?>
				<script language="javascript">alert("Maaf, Kode Solusi Telah Ada!!");</script>
        	<?php
				header("location :?p=solusibaru");
			
		}else{
			
			$insert=mysql_query("INSERT INTO solusi (kode_solusi,nama_solusi) VALUES('$vkode_solusi','$vnama_solusi')");
			if ($insert)
			{
				?>
				<script language="javascript">alert("Solusi Telah ditambahkan."); document.location='?p=viewsolusi'</script></script>
        		<?php
		
			}
		}
		
	}
	else
	{
		?>
				<script language="javascript">alert("Maaf data anda belum lengkap");</script>
        <?php
		header("location :?p=solusibaru");
	}
	
	
}

?>




