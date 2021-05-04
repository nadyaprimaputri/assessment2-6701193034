<?php
  session_start();
  if(isset($_SESSION['email'])) {
  header('location:index.php'); }
?> 
<!DOCTYPE html>
<html>
<head>
  <title>ASSESSMENT 2 WEB</title>
</head>
<body>
<div align='center' class="isi">
  <form action="prosesdaftar.php" method="post">
  <table border="1">
  <tbody class="x">
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Email   </td><td> : <input class="x" name="email" type="Email"></td></tr>
  <tr><td>Username</td><td> : <input class="x" name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input class="x" name="password" type="password"></td></tr>
  <tr><td>Konfirmasi Password</td><td> : <input class="x" name="confirm_password" type="password"></td></tr>
  <tr><td colspan="2" align="right">
    <input value="Daftar" type="submit" class="submit"> 
   <input value="Batal" type="reset" class=".submit; reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form><br> 
       
</div>
</body>
</html>