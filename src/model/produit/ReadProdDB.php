<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
  
  $sql = "SELECT * FROM produit ORDER BY ref DESC";
  $result = mysqli_query($conn, $sql);

     


