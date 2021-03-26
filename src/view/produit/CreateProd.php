<?php 
	include_once '../../../header.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Add Product</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<link rel="stylesheet" href="http://localhost/mes_cours/liagegda/suivistock/public/css/style.css">
 	
 </head>
 <body>
 	<div class="col-3">
				<a href="http://localhost/mes_cours/liagegda/suivistock/src/view/produit/ReadProd.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">List Product &emsp; <i class="fa fa-list-alt" aria-hidden="true"></i></button></a>
	</div>
 	<div class="container">
		<form action="../../model/produit/CreateProdDB.php" 
			  method="post">
			
				<div class="alert alert alert-primary" role="alert">
				<h4 class="text-primary text-center">Add Product</h4>
			</div>
		<hr>
		
		  <div class="form-group">
		    <label for="ref">Ref</label>
		    <input type="text" 
		    	   class="form-control" 
		    	   id="ref" 
		    	   name="ref" 
		    	   aria-describedby="ref" 
		    	   value="<?php if(isset($_GET['ref']))
		                           echo($_GET['ref']); ?>"
		           required>
		  </div>
		  <div class="form-group">
		    <label for="nom">NOM</label>
		    <input type="text" 
		    	   class="form-control" 
		    	   id="nom" 
		    	   name="nom" 
		    	   aria-describedby="nom" 
		    	   value="<?php if(isset($_GET['nom']))
		                           echo($_GET['nom']); ?>"
		           required>
		  </div>
		  <div class="form-group">
		    <label for="qtStock">Qte Stock</label>
		    <input type="number" 
		    	   class="form-control" 
		    	   id="qtStock"
				   min="0"
		    	   name="qtStock"  
		    	   aria-describedby="qtStock" 
		    	   value="<?php if(isset($_GET['qtStock']))
		                           echo($_GET['qtStock']); ?>"
		           required>
		  </div>
		  <div class="form-group">
			  ID USER
		    <select name="id" id="id">
			<option value="" disabled> -- Choisir --</option>
			<option value="<?=$row['id']?>"></option>
			</select>
		  </div>
		 
		  <button type="submit" 
		  		  class="btn btn-primary"
		  		  name="ajout">Create</button>
		</form>
	</div>
	
 </body>
 </html>
<?php 
	include_once '../../../footer.php';
 ?>