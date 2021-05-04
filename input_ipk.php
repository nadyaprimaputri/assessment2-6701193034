<?php 
$conn = mysqli_connect("localhost", "root", "", "ass2web");
?>

<html>
<head>
  <title>ASSESSMENT 2 WEB</title>
 </head> 
<body>
   <center> <h1> FORM IPK MAHASISWA</h1>
  <br><h3>TAMBAH DATA IPK MAHASISWA</h3>
 
  <table border="5"> 
  <form method="post" action="data_ipk.php">

  <tr> 
  <td><label>Semester</label> </td>
  <td> : </td>
  <td>  <input type="number" name="semester" id="semester"></td>
  </tr>

    <tr> 
  <td><label>IPK</label> </td>
  <td> : </td>
  <td>  <input type="text" name="ipk" id="ipk"></td>
  </tr>

    <td><input type="submit" name="submit" value="submit"></td>
 

  </form>
  </table></center>
</body>
</html>