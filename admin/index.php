<?php include "sesion.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistem Pakar</title>
	<style>
	body{
		background-color: #00FF00;
		
	}
	/* Animasi + Prefix untuk browser */
	@-webkit-keyframes color {
	    0% { background-color: #f1c40f; }
	    32% { background-color: #e74c3c; }
	    55% { background-color: #9b59b6; }
	    76% { background-color: #16a085; }
	    100% { background-color: #2ecc71;}
	}
	@-moz-keyframes color {
	     0% { background-color: #f1c40f; }
	    32% { background-color: #e74c3c; }
	    55% { background-color: #9b59b6; }
	    76% { background-color: #16a085; }
	    100% { background-color: #2ecc71; }
	}
	@keyframes color {
	  0% { background-color: #f1c40f; }
	    32% { background-color: #e74c3c; }
	    55% { background-color: #9b59b6; }
	    76% { background-color: #16a085; }
	    100% { background-color: #2ecc71; }
	}
	h1{
	   margin: 0;
	        text-transform: uppercase;
	                font-family: "Bookman Old Style", sans-serif;
	                color: #000000;
	                font-size: medium;
	                text-align: center;
	                line-height: 23px;
	               letter-spacing: 0.1em
	}
	p{
		text-align: center;
		color: #000000;
	}
	a{
		text-decoration: none;
		color: #000000;
	}
    </style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<td></td>
<td></td>
<td></td>
<img src="../gambar/headerr.png" width="950" height="175" /></p>
<p>
  <?php
	include "menu.php";
?>
</p>
<p><marquee></marquee>
</p>


<?php
	if($_GET["p"] == "logout"){
		include "logout.php";
	}else if($_GET["p"] == "datamember"){
		include "datamember.php";
	}else if($_GET["p"] == "datagejala"){
		include "tampilgejala.php";
		}else if($_GET["p"] == "tambahgejala"){
		include "tambahgejala.php";
		}else if($_GET["p"] == "deletestatus"){
		include "deletestatus.php";
		}else if($_GET["p"] == "deletekomen"){
		include "deletekomen.php";
		}else if($_GET["p"] == "viewsolusi"){
		include "datasolusi.php";
		}else if($_GET["p"] == "solusibaru"){
		include "solusibaru.php";
		}else if($_GET["p"] == "hapussolusi"){
		include "hapussolusi.php";
		}else if($_GET["p"] == "editsolusi"){
		include "updatesolusi.php";
		}else if($_GET["p"] == "updategejala"){
		include "updategejala.php";
			}else if($_GET["p"] == "komentar"){
		include "forum.php";
		}else if($_GET["p"] == "hapusmember"){
		include "hapusmember.php";
		}else if($_GET["p"] == "deletegejala"){
		include "deletegejala.php";
	}else{
		include "beranda.php";
	}
?>

<address>
©Rudi Andrita, 2016
</address>
</body>
</html>