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
  //include_once "../bd.php";
  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }
  
  $nom = validate($_POST['nom']);
  $prenom = validate($_POST['prenom']);
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $etat = validate($_POST['etat']);

  //echo $nom.'<br> '.$prenom. '<br> '.$email.'<br> '.$password.'<br> '.$etat;
  $user_data = ' nom= '.$nom.'prenom = '.$prenom. 'email = '.$email. 'password = '.$password;

   $sql = "INSERT INTO user(nom, prenom, email, password, etat) 
               VALUES('$nom', '$prenom', '$email', '$password', '$etat')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
          header("Location: ../../view/user/ReadUser.php?success=successfully created");
       }else {
          header("Location: ../../view/user/CreateUser.php?error=unknown error occurred&$user_data");
       }
}

