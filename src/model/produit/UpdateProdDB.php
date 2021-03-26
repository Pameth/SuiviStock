<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
if (isset($_GET['ref'])) {
 //include_once "../bd.php";
  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

  $ref = validate($_GET['ref']);

  $sql = "SELECT * FROM produit WHERE ref='$ref'";
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      header("Location: ReadProdDB.php");
    }

  }else if(isset($_POST['update'])){
    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  $ref = validate($_POST['ref']);
  $nom = validate($_POST['nom']);
  $qtStock = validate($_POST['qtStock']);
  $id = validate($_POST['id']);

  //echo $nom.'<br> '.$prenom. '<br> '.$email.'<br> '.$password.'<br> '.$etat;

  $sql = "UPDATE produit
          SET ref= '$ref', nom= '$nom', qtStock=$qtStock
          WHERE produit.ref='$ref' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../../view/produit/ReadProd.php?success=successfully updated");
    }else {
        header("Location: ../../view/produit/UpdateProd.php?error=unknown error occurred&$user_data");
    }
}else {
header("Location: ReadProdDB.php");
}
?>