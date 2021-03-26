<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
if(isset($_GET['id'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
  }

  $id = validate($_GET['id']);

  $sql = "DELETE FROM user
          WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      header("Location: ../../view/user/ReadUser.php?success=successfully deleted");
   }else {
      header("Location: ../../view/user/ReadUser.php?error=unknown error occurred&$user_data");
   }

}else {
  header("Location: ../../view/user/ReadUser.php");
}