<?php
    $conn = mysqli_connect("localhost", "root", "", "ass2web")    
?>

<?php
  session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];   
   $sqli = "SELECT * FROM registrasi WHERE username = '$username'";
   $query = $conn->query($sqli);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username belum terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:index.php');
     }
   }
?>
 