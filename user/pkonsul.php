<?php
include "koneksi.php";


for($i=1; $i<=21; $i++){
	$vgejala = $_POST['gejala'.$i];
	$vcf = $_POST['cf'.$i];
	
	if(!empty($vgejala)&&!empty($vcf)){	
	$query="INSERT INTO konsultasi (kode_gejala,cf) VALUES ('$vgejala','$vcf')";
		mysql_query($query)
		or die(mysql_error());
		echo "<meta http-equiv=Refresh content=1;url=index.php?p=rule>";
	}
	else if(empty($vkdgjl)||empty($vcf)){
		echo"<meta http-equiv=Refresh content=2;url=index.php?p=home>";
	}
}

?>