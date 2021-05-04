<!DOCTYPE html>
<html>
<head>
  <title>ASSESSMENT 2 WEB</title>

<body>

<div align='center'>

<?php
	$host = "localhost";
	$user="root";
	$password = null;
  $conn = mysql_connect($host,$user,$password);
      mysql_select_db('ass2web');
  $getid = $_GET['id'];
  $semester = $_POST['semester'];  
  $ipk = $_POST['ipk'];

	$query = "UPDATE data_ipk SET semester='$semester', ipk='$ipk' WHERE semester='$getsemester'";
	
    $eksekusi = mysql_query($query);
	if($eksekusi){
		echo "Data ipk berhasil di ubah! <br /> <a href='data_ipk.php'>Lihat disini</a>";
	}else{
		echo "<font color=red>Data anggota gagal di ubah! </font><br /> <a 
        href='data_ipk.php'>Periksa kembali</a>";
	}
?>	
</div>