<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
   if (isset($_POST['ajout'])) {
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
   }
   $ref = validate($_POST['ref']);
   $nom = validate($_POST['nom']);
   $qtStock = validate($_POST['qtStock']);
   
  //echo $nom.'<br> '.$prenom. '<br> '.$email.'<br> '.$password.'<br> '.$etat;
  $user_data = ' ref= '.$ref.'nom = '.$nom;

   $sql = "INSERT INTO produit(ref, nom, qtStock) 
               VALUES('$ref', '$nom', '$qtStock')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
          header("Location: ../../view/produit/ReadProd.php?success=successfully created");
       }else {
          header("Location: ../../view/produit/CreateProd.php?error=unknown error occurred&$user_data");
       }

}

