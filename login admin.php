<style type="text/css">
<!--
.style2 {color: #0000FF}
-->
</style>
<div align="center"><img src="gambar/baruu.gif" width="125" height="70" />
</div>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="60%" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#00FF00">
    <tr>
      <td height="50" colspan="2" align="center" bgcolor="#00FF00"><span class="style2">
        
        LOGIN ADMINISTRATOR
        
      </span></td>
    </tr>
    <tr>
      <td width="45%" align="right"><span class="style2">Username</span> </td>
      <td><label for="username"></label>
      <input name="username" type="text" id="username"></td>
    </tr>
    <tr>
      <td width="45%" align="right"><span class="style2">Password </span></td>
      <td><label for="password"></label>
      <input type="password" name="password" id="password"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="loginadmin" id="button" value="LOGIN"></td>
    </tr>
  </table>
</form>

<?php
	if($_POST['loginadmin']){
		include "koneksi.php";
		$login = mysql_query("select * from admin where username='$_POST[username]' and password='$_POST[password]'");
		$ketemu = mysql_num_rows($login);
		$r = mysql_fetch_array($login);
		if($ketemu > 0){
			session_start();
			$_SESSION['namaadmin'] = $r['username'];
			$_SESSION['passadmin'] = $r['password'];
			?>
            <script language="javascript"> alert ('selamat anda berhasil login'); document.location='admin/index.php'</script><?php
		}else{
			header("location:?p=admin");
		}	
	}
?>
