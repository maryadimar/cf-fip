
<style type="text/css">
<!--
.style2 {color: #0000FF}
-->
</style>

<form name="form1" method="post" action="" enctype="multipart/form-data">
  <div align="center"><img src="gambar/baruu.gif" width="125" height="70" />  </div>
  <table width="60%" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#00FF00">
    <tr>
      <td height="50" colspan="2" align="center" bordercolor="#000000" bgcolor="#00FF00">
        <span class="style2">LOGIN MEMBER</span>
        <span class="style2">
      </marquee>
      <input type="hidden" name="link" id="link" value="<?php echo"$link"; ?>"/>
      </span></td>
    </tr>
    <tr>
      <td width="45%" align="right" bordercolor="#000000" bgcolor="#00FF00"><span class="style2">Username</span> </td>
      <td bordercolor="#000000" bgcolor="#00FF00"><label for="username"></label>
      <input name="username" type="text" id="username"></td>
    </tr>
    <tr>
      <td width="45%" align="right" bordercolor="#000000" bgcolor="#00FF00"><span class="style2">Password</span> </td>
      <td bordercolor="#000000" bgcolor="#00FF00"><label for="password"></label>
      <input type="password" name="password" id="password"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bordercolor="#000000" bgcolor="#00FF00"><input type="submit" name="login" id="button" value="LOGIN"></td>
    </tr>
  </table>
</form>

<?php
	if($_POST['login']){
		include "koneksi.php";
		$login = mysql_query("select * from member where username='$_POST[username]' and password='$_POST[password]'");
		$ketemu = mysql_num_rows($login);
		$r = mysql_fetch_array($login);
		if($ketemu > 0){
			session_start();
			$_SESSION['namamember'] = $r['username'];
			$_SESSION['passmember'] = $r['password'];
			?>
            <script language="javascript"> alert ('selamat anda berhasil login'); document.location='user/index.php'</script><?php
		}else{
			header("location:?p=login");
		}	
	}
?>