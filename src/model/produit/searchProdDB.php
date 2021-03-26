<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "suivistock";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}
$output = '';
$sql = "SELECT * FROM produit WHERE nom LIKE '%".$_POST['search']."%' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   // $row = mysqli_fetch_assoc($result);
   $output .= '<h4 class="text-primary text-center">Search Prod</h4>';
   $output .= '<table class="table">
                    <tr>
                    <th scope="col" class="align-middle">Ref</th>
                    <th scope="col" class="align-middle">Nom</th>
                    <th scope="col" class="align-middle">Qte Stock</th>
                    <th scope="col" class="align-middle">ID USER</th>
                    </tr>';
    while($row = mysqli_fetch_array($result)){
        $output .= '
            <tr>
                <td class="align-middle">'.$row['ref'].'</td>
                <td class="align-middle">'.$row['nom'].'</td>
                <td class="align-middle">'.$row['qtStock'].'</td>
                <td class="align-middle">'.$row['id'].'</td>
                
            </tr>
        ';
    }
    echo $output;
  }else {
    echo 'Data Not Found';
  }
?>