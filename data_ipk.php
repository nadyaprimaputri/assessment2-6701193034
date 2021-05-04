<?php
        $conn = mysqli_connect("localhost", "root", "", "ass2web")
        
?>

<!DOCTYPE html>
<html>
<head>
    <title> ASSESSMENT 2 WEB</title>
    
</head>
</head>
<body>
    <center>
    <main id="content">
    <table align="left">
        <table align="left">
                <tr>
                    <td>
                            <td> <img src="Nadya.jpg" width="250" height="300"> </td>
                    </td>
                    <td>
                        <table>

                            <font size="20">
                            <tr>
                                <td>Nama </td>
                                <td> : </td>
                                <td> Nadya Prima Putri</td>
                            </tr>
                            <tr>
                                <td> NIM </td>
                                <td> : </td>
                                <td> 6701193034</td>
                            </tr>
                            <tr>
                                <td>Kelas </td>
                                <td> : </td>
                                <td> D3SI 43-01 </td>
                            </tr>

                            </font>
                               
                        </table>
                   </td>
                </tr>
                </table>

</body>
</html>



<?php 
$conn = mysqli_connect("localhost", "root", "", "ass2web");
?>

<!DOCTYPE html>
<html>
<head>
	<title>	ASSESSMENT 2 WEB</title>
</head>
<body>
    <h1>INDEKS PRESTASI</h1>

    <table border="1">  
    <form action="" method="POST">
    <tr>
        <th>ID</th>
        <th>Semester</th> 
        <th>IPK</th>
        <th>Action</th>
    </tr>

<?php
require ("koneksi.php"); 
$sql = "SELECT * FROM data_ipk semester order by semester asc";
$result = mysqli_query($conn, $sql); 
$i = 0;
if ($result){

while ($row=mysqli_fetch_row($result)){ ?> 
    <tr><td><?php $i++;
    echo $i ?></td>
        <td><?php echo $row[0]; ?></td> 
        <td><?php echo $row[1]; ?></td> 

        <td><a href='hapus.php?semester=<?php echo $row[0];?>'>Hapus</a>||
            <a href='edit_ipk.php?semester=<?php echo $row[0];?>'>Edit</a></td>
    </tr>
    <?php
        };
    } else {
        echo "tidak ada data";
    } 
    mysqli_close($conn);
    ?>

</table><br><br><br><br><br>
    <center><a href="input_ipk.php"> TAMBAH DATA</a></center>
    <left> <a href="logout.php">LOGOUT</a> </left>
</body> 
</html>

<?php 
if (isset($_POST['submit'])) { 
$id = $_POST['id'];
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];

 if(empty($semester && $ipk)){
        echo "<script> alert('Data Gagal Ditambahkan');</script>";
    }else{
        $sql = "INSERT INTO data_ipk (semester, ipk) VALUES ('$semester','$ipk')";

$result = $conn->query($sqli);
echo "<script> alert('Data berhasil ditambahkan');</script>";
echo "<script> location='data_ipk.php'; </script>";

    } 
}
 ?>