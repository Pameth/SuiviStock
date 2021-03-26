<?php 
  include_once '../../../header.php';
  include_once '../../model/produit/UpdateProdDB.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
  <title> Update User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="http://localhost/mes_cours/liagegda/suivistock/public/css/style.css">
  
 </head>
 <body>
  <div class="col-3">
        <a href="http://localhost/mes_cours/liagegda/suivistock/src/view/produit/ReadProd.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">List Produit &emsp; <i class="fa fa-list-alt" aria-hidden="true"></i></button></a>
  </div>
  <div class="container">
    <form action="../../model/produit/UpdateProdDB.php" method="post">
      
          <div class="alert alert alert-primary" role="alert">
        <h4 class="text-primary text-center">Update Produit</h4>
      </div>
    <hr>
      <div class="form-group">
        <label for="nom">Ref</label>
        <input type="text" 
             class="form-control" 
             id="ref" 
             name="ref" 
             aria-describedby="ref" 
             value="<?=$row['ref'] ?>"
               required>
      </div>
      <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" 
             class="form-control" 
             id="nom"
             name="nom"  
             aria-describedby="nom" 
             value="<?=$row['nom'] ?>"
               required>
      </div>
      <div class="form-group">
        <label for="qtStock">Qte Stock</label>
        <input type="number" 
              class="form-control"
             id="qtStock" 
             min="0"
             name="qtStock" 
             value="<?=$row['qtStock'] ?>"
             required>
             </div>
            <input type="number" 
                   name="id"
                   value="<?=$row['id']?>"
                   hidden >
      <button type="submit" 
            class="btn btn-primary"
            name="update">Update</button>
    </form>
  </div>
  
 </body>
 </html>
<?php 
  include_once '../../../footer.php';
 ?>