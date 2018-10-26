<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistem Pakar</title>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
body{
		background-color: #00FF00;
		
	}
<!--
.style3 {color: #00FF00;}
.style4 {
	font-color : #0000FF;
	font-size: 24px;
	font-weight: bold;
}
.style6 {font-size: 24px}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div align="center" class="style4">
  <div align="left">
    <blockquote>
      <p class="style6"> APLIKASI SISTEM PAKAR MENDIAGNOSA PENYAKIT FELINE INFECTIOUS PERITONITIS (FIP) </p>
      <h1 class="style6"> RADANG SELAPUT RONGGA PERUT & DADA KUCING</h1>
    </blockquote>
  </div>
</div>
<td></td>
<td><div align="center" class="style4">
  <div align="left">
    <blockquote><img src="gambar/headerr.png" width="700" height="175" /> </blockquote>
  </div>
</div>
  <?php

	include "menu.php";
?></td>
<p><marquee></marquee>
  <?php
	if($_GET["p"] == "admin"){
		include "login admin.php";
	}else if($_GET["p"] == "adminarea"){
		include "adminarea.php";
	}else if($_GET["p"] == "logout"){
		include "logout.php";
	}else if($_GET["p"] == "datamember"){
		include "datamember.php";
	}else if($_GET["p"] == "memedit"){
		include "memedit.php";
	}else if($_GET["p"] == "memdel"){
		include "memdel.php";
	}else if($_GET["p"] == "datakategori"){
		include "datakategori.php";
	}else if($_GET["p"] == "katadd"){
		include "katadd.php";
	}else if($_GET["p"] == "katdel"){
		include "katdel.php";
	}else if($_GET["p"] == "katedit"){
		include "katedit.php";
	}else if($_GET["p"] == "datareferensi"){
		include "datareferensi.php";
	}else if($_GET["p"] == "refadd"){
		include "refadd.php";
	}else if($_GET["p"] == "refedit"){
		include "refedit.php";
	}else if($_GET["p"] == "refdel"){
		include "refdel.php";
	}else if($_GET["p"] == "kategori"){
		include "kategori.php";
	}else if($_GET["p"] == "referensikategori"){
		include "referensikategori.php";
	}else if($_GET["p"] == "referensidetail"){
		include "referensidetail.php";
	}else if($_GET["p"] == "datagejala"){
		include "datagejala.php";
	}else if($_GET["p"] == "gejadd"){
		include "gejadd.php";
	}else if($_GET["p"] == "gejedit"){
		include "gejedit.php";
	}else if($_GET["p"] == "gejdel"){
		include "gejdel.php";
	}else if($_GET["p"] == "register"){
		include "register.php";
	}else if($_GET["p"] == "login"){
		include "login.php";
	}else if($_GET["p"] == "konsultasi"){
		include "konsultasi.php";
	}else if($_GET["rule1"] == "rule"){
		include "rule.php";
	}else if($_GET["p"] == "profil"){
		include "profil.php";
	}else if($_GET["p"] == "memberarea"){
		include "memberarea.php";
	}else if($_GET["p"] == "memberedit"){
		include "memberedit.php";
	}else if($_GET["p"] == "memberdel"){
		include "memberdel.php";
	}else if($_GET["p"] == "komentar"){
		include "komentar.php";
	}else if($_GET["p"] == "komadd"){
		include "komadd.php";
	}else if($_GET["p"] == "komentaradmin"){
		include "komentaradmin.php";
	}else if($_GET["p"] == "komdel"){
		include "komdel.php";
	}else{
		include "beranda.php";
	}
?>
</p>


<div align="left">
    <address class="style3">
    <p>©Rudi Andrita Virgo, 2016   </p>
    </address>
</div>
</body>
</html>