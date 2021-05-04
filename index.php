
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

   <!DOCTYPE html>
<html>
<head>
  <title>ASSESSMENT 2 WEB</title> 
  
<body>
<div align='center'>
   Selamat Datang <b><?php echo $username;?></b> <br><br><br><br>

   Silahkan input IPK anda <a href="input_ipk.php">disini</a><br>  <br>  
   <a href="logout.php"><b>Logout</b></a><br> <br>  <br>  
</div>
