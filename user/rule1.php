<?php
include "sesion.php";
?><head>
<title> Sistem Pakar  </title>
<style type="text/css">
<!--
.style1 {
	color: #000099;
	font-weight: bold;
}
.style3 {
	color: #000000;
	font-weight: bold;
	font-size: large;
	font-family: "Times New Roman", Times, serif;
}
-->
</style>
<?php 
include "sesion.php";
$queru=mysql_query("select * from member where username='$_SESSION[namamember]'");
$data=mysql_fetch_array($queru); ?>
</head>
	<body 
		
 <marquee>
	<ul><div align="left">
	  <p align="left"><font face='Comic san MS' color="#000000">Hasil Konsultasi Anda : <?php echo "$namamember";?></p>
	  <p align="left">Umur : <?php echo "$data[umur]"; ?> </p>
	  <p align="left">Alamat : <?php echo "$data[alamat]"; ?></p>
	  <p align="left">&nbsp;</p>
	  <p align="left"><font face='Comic san MS' color="#000000"></p>
      
      <p align="center" class="style1"> SISTEM PAKAR MENDIAGNOSA FISSURED TONGUE</p>
	  <p align="center">&nbsp;</p>
    <div class="panel panel-default">
      <div align="center">
        <?php
	include "koneksi.php"; 
	
$gejala = mysql_query("Select * From konsultasi");
$rgejala = mysql_fetch_array($gejala);
$gjl=$_POST['kode_gejala'];

$strsql="select gejala.nama_gejala, konsultasi.kode_gejala,cf from gejala,konsultasi where gejala.kode_gejala=konsultasi.kode_gejala order by kode_gejala asc";
$hasil=mysql_query($strsql);
$rt = mysql_num_rows($hasil);

$no=1;
?>
      </div>
      <p></p>
<table class="table table-striped" width="100%" border="1" align="center">
	<tr>
    <td colspan="3" align="center" bgcolor="#CCCCCC"><strong> Gejala Yang Anda Miliki Adalah :</strong></td>
    </tr>
    </table>

  
      <div align="center">
        <?php

while($row=mysql_fetch_array($hasil))
{ 
echo "<table class='table table-striped' width='100%' border='1' align='center'>";
echo "<tr>";
echo    "<td width='5%'>$no</td>";
echo    "<td width='65%'>$row[nama_gejala]</td>";
echo    "<td width='50%'>Nilai Kepastian Gejala : $row[cf]</td>";
echo  "</tr>";
echo "</table>";
$no++;
}
echo "<h3 align='center'>Hasil Konsultasi </h3>";


	$g01=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G01'"));
	$g02=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G02'"));
	$g03=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G03'"));
	$g04=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G04'"));
	$g05=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G05'"));
	$g06=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G06'"));
	$g07=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G07'"));
	$g08=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G08'"));
	$g09=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G09'"));
	$g10=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G10'"));
	$g11=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G11'"));
	$g12=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G12'"));
	
	
	
//RULE 1 RULE 1 : IF G01 AND G02 AND G03 AND G04 THEN P01 (CF=0.85)

		if(($g01 > 0)&&($g02 > 0) && ($g03 > 0) && ($g04 > 0)){
		
			$cfp11 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G01'"));
			$cfp12 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G02'"));
			$cfp13 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G03'"));
			$cfp14 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G04'"));
			

			$nilai11 = $cfp11['cf'];
			$nilai12 = $cfp12['cf'];
			$nilai13 = $cfp13['cf'];
			$nilai14 = $cfp14['cf'];
			
			$min = min($nilai11,$nilai12,$nilai13,$nilai14);
			$hasil11 = $min*0.85;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Geographic Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil11";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil11','Geographic Tongue')");
		
		}
//RULE 2 RULE 2 : IF G02 AND G03 AND G04 AND  THEN P01 (CF=0.80)
		if(($g02 > 0) && ($g03 > 0) && ($g04 > 0)){
		
			$cfp22 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G02'"));
			$cfp23 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G03'"));
			$cfp24 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G04'"));
			

			$nilai22 = $cfp21['cf'];
			$nilai23 = $cfp23['cf'];
			$nilai24 = $cfp24['cf'];
			
			$min = min($nilai22,$nilai23,$nilai24);
			$hasil12 = $min*0.80;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Geographic Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil12";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil12','Geographic Tongue')");
		
		}
			
			
//RULE 3 RULE 3 :IF G01 AND G03 AND G04 AND THEN P01 (CF=0.70)

			if(($g01 > 0) && ($g03 > 0) && ($g04 > 0)){
		
			
			$cfp31 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G01'"));
			$cfp33 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G03'"));
			$cfp34 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G04'"));
			
		
			$nilai31 = $cfp31['cf'];
			$nilai33 = $cfp33['cf'];
			$nilai34 = $cfp34['cf'];
			
			$min = min($nilai31,$nilai33,$nilai34);
			$hasil13 = $min*0.70;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Geographic Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil13";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil13','Geographic Tongue')");
			}
			
//RULE 4 RULE 4 : IF G05 AND  G07 AND THEN P02 (CF=0.65)

		if(($g05 > 0) && ($g06 > 0) && ($g07 > 0)){
			$cfp45 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G05'"));
			$cfp46 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G06'"));
			$cfp47 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G07'"));
					
			$nilai45 = $cfp45['cf'];
			$nilai46 = $cfp46['cf'];
			$nilai47 = $cfp47['cf'];
			
			$min = min($nilai45,$nilai46,$nilai47);
			$hasil14 = $min*0.65;
			
			echo "<br><h3>Kemungkinan yang di derita  : Coated Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil14";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil14','Coated Tongue')");
		}
		
//RULE 5	RULE 5 : IF G05 AND G06 AND G07 AND THEN P02 (CF=0.55)
		if(($g05 > 0)  && ($g06 > 0)&& ($g07 > 0)){
			$cfp55 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G05'"));
			$cfp57 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G07'"));
			$cfp56 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G06'"));
					
			$nilai55 = $cfp55['cf'];
			$nilai56 = $cfp56['cf'];
			$nilai57 = $cfp57['cf'];
			
			$min = min($nilai55,$nilai56,$nilai57) = $min*0.55;
			
			echo "<br><h3>Kemungkinan yang di derita  : Coated Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil15";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil15','Coated Tongue')");
		}
		
//RULE 6 RULE 6 : IF G08 AND G09 AND G10 AND G11 AND G12 THEN P03 (CF=0.69)
		if(($g08 > 0) && ($g09 > 0)&& ($g010 > 0)&& ($g11 > 0)&& ($g12 > 0)){
			
			$cfp68  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G08'"));
			$cfp69  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G09'"));
			$cfp610 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G10'"));
			$cfp611 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G11'"));
			$cfp612 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G12'"));
					
			
			$nilai68  = $cfp68['cf'];
			$nilai69  = $cfp69['cf'];
			$nilai610 = $cfp610['cf'];
			$nilai611 = $cfp611['cf'];
			$nilai612 = $cfp612['cf'];
			
			$min = min($nilai68,$nilai69,$nilai610,$nilai611,$nilai612);
			$hasil16 = $min*0.69;
			
			echo "<br><h3>Kemungkinan yang di derita  : Hairy Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil16";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil16','Hairy Tongue')");
		}
		
		
//RULE 7 RULE 7 : IF G08 AND G11 AND G12 THEN P03 (CF=0.50)
		if(($g08 > 0)&& ($g11 > 0)&&  ($g12 > 0)){
			
			$cfp78  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G08'"));
			$cfp711 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G11'"));
			$cfp712 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G12'"));		
		
			$nilai78  = $cfp78['cf'];
			$nilai711 = $cfp711['cf'];
			$nilai712 = $cfp712['cf'];
			
			$min = min($nilai78,$nilai711,$nilai712);
			$hasil17 = $min*0.50;
			
			echo "<br><h3>Kemungkinan yang di derita  : Hairy Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil17";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil17','Hairy Tongue')");
		}
		
			
//RULE 8 RULE 8 : IF G09 AND G10 AND G11 AND G12 THEN P03 (CF=0.45)	
			if(($g09 > 0) && ($g10 > 0) && ($g11 > 0) && ($g12 > 0)){
			
			$cfp809  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G09'"));
			$cfp810 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G010'"));
			$cfp811 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G011'"));
			$cfp812 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G012'"));
								
			$nilai809  = $cfp89['cf'];
			$nilai810 = $cfp810['cf'];
			$nilai811 = $cfp811['cf'];
			$nilai812 = $cfp812['cf'];
			
			$min = min($nilai89,$nilai810,$nilai811,,$nilai812);
			$hasil18 = $min*0.45;
			
			echo "<br><h3>Kemungkinan yang di derita  : Hairy Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil18";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil18','Hairy Tongue')");
		}
		
//RULE 9 RULE 9 : IF G08 AND G08  AND G11  THEN P03 (CF=0.30)
		if(($g08 > 0) && ($g11 > 0)&& ($g09 > 0)){
		
			$cfp908  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G08'"));
			$cfp909 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G109'"));
			$cfp911 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G11'"));
								
			$nilai908  = $cfp98['cf'];
			$nilai909 = $cfp919['cf'];
			$nilai911 = $cfp911['cf'];
			
						
			$min = min($nilai98,$nilai99,$nilai911);
			$hasil19 = $min*0.60;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Hairy Tongue  </h3>";
			echo "Dengan Nilai Kepastian : $hasil19";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil19','Hairy Tongue')");
		}
		
//RULE 10 RULE 10 : IF G13 AND G14 AND G15 THEN P04 (CF=0.76)
		if(($g13 > 0) && ($g14 > 0)&& ($g15 > 0)){
		
			$cfp1013  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G13'"));
			$cfp1014  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G14'"));
			$cfp1015  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G15'"));
											
			$nilai1013  = $cfp108['cf'];
			$nilai1014 = $cfp1011['cf'];
			$nilai1015 = $cfp1011['cf'];
								
			$min = min($nilai1013,$nilai1014,$nilai1015);
			$hasil110 = $min*0.76;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Median Rhomboid Glossitis </h3>";
			echo "Dengan Nilai Kepastian : $hasil110";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil110','Median Rhomboid Glossitis')");
		}
//RULE 11  RULE 11 :IF G13 AND G16 THEN P04 (CF=0.45)
		if(($g08 > 0) && ($g12 > 0)){
		
			$cfp1113 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G13'"));
			$cfp1116 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G16'"));
								
			$nilai1113 = $cfp1113['cf'];
			$nilai1116 = $cfp1116['cf'];
						
			$min = min($nilai1113,$nilai1116);
			$hasil111 = $min*0.45;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Median Rhomboid Glossitis </h3>";
			echo "Dengan Nilai Kepastian : $hasil111";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil111','Median Rhomboid Glossitis')");
		}
		
//RULE 12 RULE 12 : IF G13 AND G15 AND G14 THEN P04 (CF=0.55)
			if(($g13 > 0)&& ($g15 > 0)&& ($g14 > 0)){
		
			$cfp1213 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G13'"));
			$cfp1214 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G14'"));
			$cfp1215 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G15'"));
								
			$nilai1213 = $cfp1213['cf'];
			$nilai1214 = $cfp1214['cf'];
			$nilai1215 = $cfp1215['cf'];
						
			$min = min($nilai1213,$nilai1214,$nilai1215);
			$hasil112 = $min*0.55;
			
			echo "<br><h3>Kemungkinan yang di derita  :  Median Rhomboid Glossitis  </h3>";
			echo "Dengan Nilai Kepastian : $hasil112";
			
			mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$hasil112','Median Rhomboid Glossitis')");
		}
		

	
		$h1=$hasil11;
		$h2=$hasil12;
		$h3=$hasil13;
		$h4=$hasil14;
		$h5=$hasil15;
		$h6=$hasil16;
		$h7=$hasil17;
		$h8=$hasil18;
		$h9=$hasil19;
		$h10=$hasil10;
		$h11=$hasil11;
		$h12=$hasil112;
		
		
		$akhir = max($h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$h10,$h11,$h12);
		
		if($akhir==0){
			echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Tidak Menderita FISSURED TONGUE</h4>";
		}else{
				if($akhir == $h1){
					$num_h11 = number_format($h1, 2, '.', '');
					$per_h11 = $num_h11*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Geographic Tongue $per_h11%</h4>";
						mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h11','Geographic Tongue')");				
				} else if($akhir == $h2){
					$num_h12 = number_format($h2, 2, '.', '');
					$per_h12 = $num_h12*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Geographic Tongue $per_h12%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h12','Geographic Tongue')");
							
				} else if($akhir == $h3){
					$num_h13 = number_format($h3, 2, '.', '');
					$per_h13 = $num_h13*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Geographic Tongue  $per_h13%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h13','Geographic Tongue')");
					
					
								
				} else if($akhir == $h4){
					$num_h14 = number_format($h4, 2, '.', '');
					$per_h14 = $num_h14*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Coated Tongue $per_h14%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h14','Coated Tongue')");
					
					} else if($akhir == $h5){
					$num_h15 = number_format($h5, 2, '.', '');
					$per_h15 = $num_h15*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Coated Tongue $per_h15%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h15','Coated Tongue')");
					
				} else if($akhir == $h6){
					$num_h16= number_format($h6, 2, '.', '');
					$per_h16 = $num_h16*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Hairy Tongue $per_h16%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h16','Hairy Tongue')");
					} else if($akhir == $h7){
					$num_h17 = number_format($h7, 2, '.', '');
					$per_h17 = $num_h17*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Hairy Tongue $per_h17%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h17','Hairy Tongue')");
					} else if($akhir == $h8){
					$num_h18 = number_format($h8, 2, '.', '');
					$per_h18 = $num_h18*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Hairy Tongue $per_h18%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h18','Hairy Tongue')");
					
						} else if($akhir == $h9){
					$num_h19 = number_format($h9, 2, '.', '');
					$per_h19 = $num_h19*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Hairy Tongue $per_h19%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h19','Hairy Tongue')");
					
					} else if($akhir == $h10){
					$num_h110 = number_format($h10, 2, '.', '');
					$per_h110 = $num_h110*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Median Rhomboid Glossitis $per_h110%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h110','Median Rhomboid Glossitis')");
					} else if($akhir == $h11){
					$num_h111 = number_format($h11, 2, '.', '');
					$per_h111 = $num_h111*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Median Rhomboid Glossitis $per_h111%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h111','Median Rhomboid Glossitis')");
					} else if($akhir == $h12){
					$num_h112 = number_format($h12, 2, '.', '');
					$per_h112 = $num_h112*100;
					echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Median Rhomboid Glossitis $per_h112%</h4>";
					mysql_query("insert into konsulrecent (username,tglkonsul,cf,nama_penyakit)values('$namamember',NOW(),'$per_h112','Median Rhomboid Glossitis')");
					
		}
	?>
        
      </div>
    </div>
					</div>
	</div>
  </div>
	</div>	
	<p>
	  <script>window.print()</script>
    </p>
	<p>&nbsp;</p>
	<form id="form2" name="form2" method="post" action="">
	</p>
	
	  <div align="right"></div>
	  
	</div>
	  <p align="right">Tanggal ==> <?php $tgl=date('l, d-m-Y'); echo "$tgl" ;?>
	  </p>
	  <p align="right" class="style3">Drg. Surya Nelis, Sp, PM.</p>
	</form>
	<p>&nbsp;</p>
	<form id="form1" name="form1" method="post" action="">
	  <div align="right"></div>
	</form>
	<p>&nbsp;</p>
	</body>
</html>    