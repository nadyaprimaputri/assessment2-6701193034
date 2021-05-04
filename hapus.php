<?php 
$koneksi = new mysqli("localhost", "root", "", "ass2web");
  
$semester = $_GET['semester'];

$sql = "DELETE FROM data_ipk WHERE semester='$semester'";
$result = $koneksi->query($sql); 
echo "<script> alert('Data Sudah Terhapus');</script>";
echo "<script> location='data_ipk.php'; </script>";
 
?>