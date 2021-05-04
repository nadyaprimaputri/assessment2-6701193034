<?php 
$conn = mysqli_connect("localhost", "root", "", "ass2web")
?>

<?php
include 'koneksi.php';
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];

mysqli_query($conn, "insert into data_ipk values('','$semester', '$ipk')");

header("location : index.php");

?>



$sql = "INSERT INTO data_ipk (semester,ipk) VALUES ('$semester','$ipk')";