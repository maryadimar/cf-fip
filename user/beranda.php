<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<?php include "koneksi.php";
include "sesion.php";
$sqldsn = mysql_query("select * from member where username='$_SESSION[namamember]'");
	$rdsn = mysql_fetch_array($sqldsn);?> 
<span class="style1">Selamat Datang di Halaman <?php echo "$rdsn[nama_lengkap]"; ?></span>