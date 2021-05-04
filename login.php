<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
  require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ASSESSMENT 2 WEB</title>
</head>
<body>
<form action="proseslogin.php" method="post">
<table border="0" ><h1>Masuk</h1>

                <td>Username</td> <td> : <input name="username" type="text"></td></tr>
            <tr>
                <td>Password</td> <td> : <input name="password" type="password"></td></tr>
            <tr>
            <td> <label><input type="checkbox" name="remember" value="remember"> Remember me</label> </td>
            </tr>
            
            <tr>
                <td colspan="2" align="right">
                <input value="Login" type="submit"> 
                <input value="Batal" type="reset"></td>
            </tr><br>
            <tr><td colspan="2" align="center" size="5px">Belum Punya akun ? <br>  <br>   
                <a href="registrasi.php"><b>Daftar</b></a>
                </td>
            </tr>
</table>
</form>
</body>
</html>