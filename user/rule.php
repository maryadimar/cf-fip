<?php
include "sesion.php";
?><head>
<title> Filine Infectious Peritonitis </title>
    </head>
    <body 
        
 <marquee><ul><div align="left">
      <p align="left"><font face='Comic san MS' color="#000000">Hasil Konsultasi Anda : <?php echo "$namamember";?></p>
      <p align="center">&nbsp;</p>
    </div></ul></marquee>
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
    <td colspan="3" align="center" bgcolor="#CCCCCC"><strong> Gejala Yang Anda Miliki Ialah :</strong></td>
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


    $gejala01=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G001'"));
    $gejala02=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G002'"));
    $gejala03=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G003'"));
    $gejala04=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G004'"));
    $gejala05=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G005'"));
    $gejala06=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G006'"));
    $gejala07=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G007'"));
    $gejala08=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G008'"));
    $gejala09=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G009'"));
    $gejala10=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G010'"));
    $gejala11=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G011'"));
    $gejala12=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G012'"));
    $gejala13=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G013'"));
    $gejala14=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G014'"));
    $gejala15=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G015'"));
	$gejala16=mysql_num_rows(mysql_query("SELECT * FROM konsultasi where  kode_gejala='G016'"));
    
    
//RULE 1
        if(($gejala01 > 0)&&($gejala02 > 0)&&($gejala03 > 0)&&($gejala04 > 0))
        {
            $cfm111 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G001'"));
            $cfm112 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G002'"));
            $cfm113 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G003'"));
            $cfm114 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G004'"));
           
            
            $nilai11 = $cfm111['cf'];
            $nilai12 = $cfm112['cf'];
            $nilai13 = $cfm113['cf'];
            $nilai14 = $cfm114['cf'];
            
            
            $min = min($nilai11,$nilai12,$nilai13,$nilai14);
            $hasil1 = $min*0.85;
            
            echo "<br><h3>Kemungkinan yang di derita  : WED  </h3>";
            echo "Dengan Nilai Kepastian : $hasil1";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil1','WED')");
        }
        
//RULE 2
        if(($gejala02 > 0)&&($gejala03 > 0)&&($gejala04 > 0)&&($gejala05 > 0))
        {    
            $cfm122 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G002'"));
            $cfm123 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G003'"));
            $cfm124 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G004'"));
            $cfm125 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G005'"));
            
            $nilai22 = $cfm122['cf'];
            $nilai23 = $cfm123['cf'];
            $nilai24 = $cfm124['cf'];
			$nilai25 = $cfm125['cf'];
            
            
            $min = min($nilai22,$nilai23,$nilai24,$nilai25);
            $hasil2 = $min*0.80;
            
            echo "<br><h3>Kemungkinan yang di derita  :  WED  </h3>";
            echo "Dengan Nilai Kepastian : $hasil2";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil2','WED')");
        }
            
//RULE 3            
        if(($gejala01 > 0)&&($gejala03 > 0)&&($gejala04 > 0))
        {    
            $cfm131 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G001'"));
            $cfm133 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G003'"));
            $cfm134 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G004'"));
            
            
            $nilai31 = $cfm131['cf'];
            $nilai33 = $cfm133['cf'];
            $nilai34 = $cfm134['cf'];
            
            
            $min = min($nilai31,$nilai33,$nilai34);
            $hasil3 = $min*0.70;
            
            echo "<br><h3>Kemungkinan yang di derita  :  WED </h3>";
            echo "Dengan Nilai Kepastian : $hasil3";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil3','WED')");                
        }
        
//RULE 4
        if(($gejala05 > 0)&&($gejala07 > 0))
        {
            $cfm145 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G005'"));
            $cfm147 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G007'"));
            
                    
            $nilai45 = $cfm145['cf'];
            $nilai47 = $cfm147['cf'];
            
            
            $min = min($nilai45,$nilai47);
            $hasil4 = $min*0.65;
            
            echo "<br><h3>Kemungkinan yang di derita  : DRY  </h3>";
            echo "Dengan Nilai Kepastian : $hasil4";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil4','DRY')");
        }
        
//RULE 5        
        if(($gejala05 > 0)&&($gejala06 > 0)&&($gejala07 > 0))
        {    
            $cfm155 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G005'"));
            $cfm157 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G006'"));
            $cfm156 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G007'"));
                     
            
            $nilai55 = $cfm155['cf'];
            $nilai56 = $cfm156['cf'];
            $nilai57 = $cfm157['cf'];
        
            $min = min($nilai55,$nilai56,$nilai57);
            $hasil5 = $min*0.55;
            
            echo "<br><h3>Kemungkinan yang di derita  : DRY </h3>";
            echo "Dengan Nilai Kepastian : $hasil5";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil5','DRY')");    
        }
        
//RULE 6
        if(($gejala08 > 0)&&($gejala09 > 0)&&($gejala10 > 0)&&($gejala11 > 0)&&($gejala12 > 0))
        {    
            $cfm168  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G008'"));
            $cfm169  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G009'"));
            $cfm1610 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G010'"));
			$cfm1611 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G011'"));
            $cfm1612 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G012'"));
            
            $nilai68 = $cfm168['cf'];
            $nilai69 = $cfm169['cf'];
            $nilai610 = $cfm1610['cf'];
			$nilai611 = $cfm1611['cf'];
			$nilai612 = $cfm1612['cf'];
                        
            $min = min($nilai68,$nilai69,$nilai610,$nilai611,$nilai612);
            $hasil6 = $min*0.69;
            
            echo "<br><h3>Kemungkinan yang di derita  : Non Spesipic  </h3>";
            echo "Dengan Nilai Kepastian : $hasil6";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil6','Non Spesipic')");
        }
        
//RULE 7
        if(($gejala08 > 0)&&($gejala011 > 0)&&($gejala012 >0 ))
        {    
            $cfm218  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G008'"));
            $cfm2112 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G011'"));
            $cfm2111 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G012'"));            
            
            $nilai18  = $cfm218['cf'];
            $nilai111 = $cfm2111['cf'];
            $nilai112 = $cfm2112['cf'];            
        
            $min = min($nilai18,$nilai111,$nilai112);
            $hasil7 = $min*0.50;
            
            echo "<br><h3>Kemungkinan yang di derita  : Non Spesipic  </h3>";
            echo "Dengan Nilai Kepastian : $hasil7";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil7','Non Spesipic')");
        }
            
//RULE 8            
        if(($gejala09 > 0)&&($gejala010 > 0)&&($gejala011 > 0)&&($gejala012 > 0))
        {
            $cfm2210 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G09'"));
            $cfm229  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G0010'"));
			$cfm2211 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G011'"));
			$cfm2212 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G012'"));
        
            $nilai29 = $cfm229['cf'];
            $nilai210 = $cfm2210['cf'];
			$nilai211 = $cfm2211['cf'];
			$nilai212 = $cfm2212['cf'];
            
            $min = min($nilai29,$nilai210,$nilai211,$nilai212);
            $hasil8 = $min*0.45;
            
            echo "<br><h3>Kemungkinan yang di derita  : Non Spesipic </h3>";
            echo "Dengan Nilai Kepastian : $hasil8";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil8','Non Spesipic')");            
        }
        
//RULE 9
        if(($gejala08 > 0)&&($gejala09 > 0)&&($gejala11 > 0))
        {
            $cfm238  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G008'"));
			$cfm2311 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G009'"));
            $cfm239  = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G011'"));
            
            $nilai38  = $cfm238['cf'];
            $nilai39  = $cfm239['cf'];
			$nilai311 = $cfm2311['cf'];
            
            $min = min($nilai38,$nilai39,$nilai311);
            $hasil9 = $min*0.30;
            
            echo "<br><h3>Kemungkinan yang di derita  : Non Spesipic  </h3>";
            echo "Dengan Nilai Kepastian : $hasil9";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil9','Non Spesipic')");
        }
        
//RULE 10
 if(($gejala13 > 0)&&($gejala14 > 0)&&($gejala15 > 0))
        {
            $cfm3213 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G013'"));
            $cfm3214 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G014'"));
        	$cfm3215 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G015'"));
        
            $nilai3213 = $cfm3213['cf'];
            $nilai3214 = $cfm3214['cf'];
			$nilai3215 = $cfm3215['cf'];
            
            $min = min($nilai3213,$nilai3214,$nilai3215);
            $hasil11= $min*0.76;
            
            echo "<br><h3>Kemungkinan yang di derita  : Spesific  </h3>";
            echo "Dengan Nilai Kepastian : $hasil10";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil10','Spesific')");    
        }
       
        
//RULE 11
 if(($gejala13 > 0)&&($gejala16 > 0))
        {
            $cfm3113 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G013'"));
            $cfm3116 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G016'"));
            
            $nilai3113 = $cfm3113['cf'];
            $nilai3116 = $cfm3116['cf'];
            
            $min = min($nilai3113,$nilai3116);
            $hasil11= $min*0.45;
            
            echo "<br><h3>Kemungkinan yang di derita  : Spesific </h3>";
            echo "Dengan Nilai Kepastian : $hasil11";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil11','Spesific')");
        }
       

//RULE 12
        if(($gejala13 > 0)&&($gejala14 > 0)&&($gejala15 > 0))
        {
            $cfm3313 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G013'"));
            $cfm3315 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G014'"));
        	$cfm3314 = mysql_fetch_array(mysql_query("SELECT * FROM konsultasi where kode_gejala='G015'"));
        
            $nilai3313 = $cfm3313['cf'];
            $nilai3314 = $cfm3314['cf'];
			$nilai3315 = $cfm3315['cf'];
            
            $min = min($nilai3313,$nilai3314,$nilai3315);
            $hasil12= $min*0.52;
            
            echo "<br><h3>Kemungkinan yang di derita  : Spesific  </h3>";
            echo "Dengan Nilai Kepastian : $hasil12";
            
            mysql_query("insert into konsulsimpan (username,tglkonsul,cf,nama_penyakit)values('$username',NOW(),'$hasil12','Spesific'')");    
        }

        
        $h1=$hasil1;
        $h2=$hasil2;
        $h3=$hasil3;
        $h4=$hasil4;
        $h5=$hasil5;
        $h6=$hasil6;
        $h7=$hasil7;
        $h8=$hasil8;
        $h9=$hasil9;
        $h10=$hasil10;
        $h11=$hasil11;
        $h12=$hasil12;
        
        $akhir = max($h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$h10,$h11,$h12);
        
        if($akhir==0){
            echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Tidak Menderita Feline Infectious Peritonitis </h4>";
        }else{
                if($akhir == $h1){
                    $num_h11 = number_format($h1, 2, '.', '');
                    $per_h11 = $num_h11*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita WED $per_h11%</h4>";
                    include "solusi1.php";
                
                    
                } else if($akhir == $h2){
                    $num_h12 = number_format($h2, 2, '.', '');
                    $per_h12 = $num_h12*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda  Menderita WED $per_h12%</h4>";
                        include "solusi1.php";
                    
                } else if($akhir == $h3){
                    $num_h13 = number_format($h3, 2, '.', '');
                    $per_h13 = $num_h13*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita WED $per_h13%</h4>";
                    
                        include "solusi1.php";
                                
                } else if($akhir == $h4){
                    $num_h14 = number_format($h4, 2, '.', '');
                    $per_h14 = $num_h14*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita DRY $per_h14%</h4>";
                    
                            include "solusi1.php";    
                    
                } else if($akhir == $h5){
                    $num_h15 = number_format($h5, 2, '.', '');
                    $per_h15 = $num_h15*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita DRY $per_h15%</h4>";
                    
                            include "solusi1.php";    
                
                    
                } else if($akhir == $h6){
                    $num_h16 = number_format($h6, 2, '.', '');
                    $per_h16= $num_h16*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Non Spesipic $per_h16%</h4>";
                        
                            include "solusi1.php";    
                    }
                    else if($akhir == $h7){
                    $num_h17 = number_format($h7, 2, '.', '');
                    $per_h17 = $num_h17*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Non Spesipic $per_h17%</h4>";
                    
                
                            include "solusi2.php";    
                    }        
                    else if($akhir == $h8){
                    $num_h21 = number_format($h8, 2, '.', '');
                    $per_h21 = $num_h21*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Non Spesipic $per_h21%</h4>";
                    
                        
                            include "solusi2.php";    
                    }        
                    else if($akhir == $h9){
                    $num_h22 = number_format($h9, 2, '.', '');
                    $per_h22 = $num_h22*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Non Spesipic $per_h22%</h4>";
                    include "solusi2.php";    
                                
                    }
                    else if($akhir == $h10){
                    $num_h23 = number_format($h10, 2, '.', '');
                    $per_h23 = $num_h23*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Spesipic $per_h23%</h4>";
                    include "solusi3.php";    
                        
                    }    
                    else if($akhir == $h11){
                    $num_h24 = number_format($h11, 2, '.', '');
                    $per_h24 = $num_h24*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Spesipic $per_h24%</h4>";
                    include "solusi3.php";    
                    
                            
                    }
                    else if($akhir == $h12){
                    $num_h25 = number_format($h12, 2, '.', '');
                    $per_h25 = $num_h25*100;
                    echo "<h1 align='center'>Kesimpulan </h1><h4 align='center'>Anda Menderita Spesipic $per_h25%</h4>";
                    include "solusi3.php";    
                    
                            
                    }
                    
                    
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
	  <p align="right"> <?php $tgl=date('l, d-m-Y'); echo "$tgl" ;?>
	  </p>
	  <p align="right" class="style3">Desnita Fatma.</p>
	</form>
	<p>&nbsp;</p>
	<form id="form1" name="form1" method="post" action="">
	  <div align="right"></div>
	</form>
	<p>&nbsp;</p>	
    </body>
</html>  