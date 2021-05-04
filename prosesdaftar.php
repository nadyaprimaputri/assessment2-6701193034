<!DOCTYPE html>
<html>
<head>
	<title>	ASSESSMENT 2 WEB</title>
</head>
<body>

<?php
   require_once("koneksi.php");
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];
   $sqli = "SELECT * FROM registrasi WHERE email = '$email'";
   $query = $conn->query($sqli);
   if($query->num_rows != 0) {
     echo "<div align='center'>Email yang digunakan sudah terdaftar! <a href='registrasi.php'>Back</a></div>";
   } else {
     if(!$email || !$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='registrasi.php'>Back</a>";
     } else {
       $data = "INSERT INTO registrasi VALUES ('$email', '$username', '$password', '$confirm_password')";
       $simpan = $conn->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
 </div></b>
</body>
</html>