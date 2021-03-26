<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
if(isset($_GET['ref'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

  $ref = validate($_GET['ref']);

  $sql = "DELETE FROM produit
         WHERE ref='$ref'";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      header("Location: ../../view/produit/ReadProd.php?success=successfully deleted");
   }else {
      header("Location: ../../view/produit/ReadProd.php?error=unknown error occurred&$user_data");
   }

}else {
  header("Location: ../../view/produit/ReadProd.php");
}