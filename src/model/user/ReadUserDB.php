<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
    //include_once "../bd.php";
  $sql = "SELECT * FROM user ORDER BY id ASC";
  $result = mysqli_query($conn, $sql);



