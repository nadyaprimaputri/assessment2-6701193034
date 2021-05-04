<?php 
$conn = mysqli_connect("localhost", "root", "", "ass2web")
?> 

<!DOCTYPE html>
<html>
<head>
	<title>	ASSESSMENT 2 WEB</title>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$password = null;
$conn = mysql_connect($host, $user, $password);
mysql_select_db('ass2web');
$semester = $_GET['semester'];
$query = "SELECT * from data_ipk WHERE id='$id'";
$eksekusi = mysql_query($query);
$data = mysql_fetch_array($eksekusi);
?>

<!DOCTYPE html>
<html>
<head> 
  <title>ASSESSMENT 2 WEB</title>
</head>
<body>
  <form method="POST" name ="Update" action="update.php?id=<?php echo $data['id'];?>">
  <table align="center">
    <tr> <td> 
      <table>
        <tr>
         <h3><center> UPDATE DATA IPK </center></h3>
        </tr><br>

  <tr>
   <td>Semester</td>
   <td>:</td>
    <td><input type="number" name="semester" id="semester"  value="<?php echo $data['semester'];?>"></td>
  </tr>

    <tr>
    <td>IPK</td>
    <td>:</td>
    <td><input type="float" name="ipk" id="ipk" value="<?php echo $data['ipk'];?>"></td>
  </tr>
    
    <tr>
    <td colspan="2"><input type="submit" name="submit" value="UPDATE" class="update"></td>
    </tr>

  </form>
</body>
</html>