<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #0000FF}
-->
</style>
<form name="form1" method="post" action="" enctype="multipart/form-data" >
  <table width="75%" border="2" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td colspan="2"   bgcolor="#FFFFFF"><div align="center" class="style2"><span class="style2"><marquee>FORM REGISTRASI MEMBER</marquee></span></div></td>
      </tr>
      <tr>
        <td width="35%" height="30">User Name</td>
        <td width="70%" height="30">
        <input type="text" name="username" id="username" /></td>
      </tr>
      <tr>
        <td width="35%" height="30">Password</td>
        <td width="70%" height="30">
        <input type="text" name="password" id="password" /></td>
      </tr>
       <tr>
        <td width="35%" height="30"><span class="style1"><span class="style2">Nama Member</span>ember</span></td>
        <td width="70%" height="30">
        <input type="text" name="namamember" id="namamember" /></td>
      </tr>
      <tr>
      <td width="35%">Jenis Kelamin</td>
      <td><input type="radio" name="jenis_kelamin" id="radio" value="L" />
        <label for="jenis_kelamin">Laki-Laki
          <input type="radio" name="jenis_kelamin" id="radio2" value="P" />
          Perempuan</label></td>
    </tr>
      <tr>
        <td width="35%" height="30"><span class="style2">Alamat</span></td>
        <td width="70%" height="30">
     	<textarea name="alamat" id="alamat" cols="45" rows="5"></textarea></td>
      </tr><tr>
        <td width="35%" height="30">Umur</td>
        <td width="70%" height="30">
        <input type="text" name="umur" id="umur" /></td>
	  </tr>
      <tr>
        <td height="30"><input type="submit" name="register" id="register" value="REGISTER" />
        <input name="reset" type="reset" id="reset" value="RESET" /></td>
        <td height="30">&nbsp;</td>
      </tr>
  </table>
</form>
<?php
if($_POST["register"]){
include "koneksi.php";
$vusername =$_POST['username'];
$vpassword =$_POST['password'];
$vnama_member =$_POST['namamember'];
$vjk =$_POST['jenis_kelamin'];
$valamat =$_POST['alamat'];
$vumur =$_POST['umur'];
  
  mysql_query("insert into member (username, password, nama_lengkap,jenis_kelamin,alamat,umur) values ('$vusername', '$vpassword', '$vnama_member', '$vjk', '$valamat', '$vumur')");
  ?>
  <script language="javascript">alert("selamat bergabung jadi member");</script> <?php
  }
  
   ?>

