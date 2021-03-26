<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
if (isset($_GET['id'])) {
 //include_once "../bd.php";
  function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

  $id = validate($_GET['id']);

  $sql = "SELECT * FROM user WHERE id=$id";
  $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      header("Location: ReadUserDB.php");
    }

  }else if(isset($_POST['update'])){
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
      $id = validate($_POST['id']);

      //echo $nom.'<br> '.$prenom. '<br> '.$email.'<br> '.$password.'<br> '.$etat;

      $sql = "UPDATE user
              SET nom='$nom', prenom= '$prenom', email='$email', password ='$password', etat ='$etat'
              WHERE id=$id ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../../view/user/ReadUser.php?success=successfully updated");
        }else {
            header("Location: ../../view/user/UpdateUser.php?error=unknown error occurred&$user_data");
        }
}else {
  header("Location: ReadUserDB.php");
}
?>