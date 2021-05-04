<?php
  session_start();
  if(isset($_SESSION['email'])) {
  header('location:index.php'); }
?> 
<html>
<head>
<title>ASSESSMENT 2 WEB</title>
</head>
<body>
<h2>Data yang ada: </h2> 

<?php
if (isset($_GET['id'])) {
echo "<a href=index.php>Kembali</a><br><br>";
}
?>

<b>Nama:</b> <br><br>

<?php

$Query = mysql_query("SELECT * FROM biodata");
if (!isset($_GET['id'])) {

                while ($biodata = mysql_fetch_array($Query))
                {
                echo "<a href='index.php?id=$Biodata[Id]'>" . $biodata['Nama'] . "<br>";
                }

} else {
$Query = mysql_query("SELECT * FROM biodata WHERE id=$_GET[id]");
                $biodata = mysql_fetch_array($Query);
                    echo "Nama: " . $biodata['nama'] . "<br>";
                    echo "NIM: " . $biodata['nim'] . "<br>";
                    echo "Kelas: " . $biodata['kelas'] . "<br>";
                    echo "Foto: " . $biodata['foto'] . "<br><br>";
}
?>
</body>
</html>