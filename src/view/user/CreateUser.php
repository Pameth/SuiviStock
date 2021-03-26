<?php 
	include_once '../../../header.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Add User</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<link rel="stylesheet" href="http://localhost/mes_cours/liagegda/suivistock/public/css/style.css">
 	
 </head>
 <body>
 	<div class="col-3">
				<a href="http://localhost/mes_cours/liagegda/suivistock/src/view/user/ReadUser.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Liste User &emsp; <i class="fa fa-list-alt" aria-hidden="true"></i></button></a>
	</div>
 	<div class="container">
		<form action="../../model/user/CreateUserDB.php" 
			  method="post">
				<div class="alert alert alert-primary" role="alert">
				<h4 class="text-primary text-center">Add User</h4>
			</div>
		<hr>
		  <div class="form-group">
		    <label for="nom">Nom</label>
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
		    <label for="prenom">Prenom</label>
		    <input type="text" 
		    	   class="form-control" 
		    	   id="prenom"
		    	   name="prenom"  
		    	   aria-describedby="prenom" 
		    	   value="<?php if(isset($_GET['prenom']))
		                           echo($_GET['prenom']); ?>"
		           required>
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" 
		    	   class="form-control" 
		    	   id="email" 
		    	   name="email" 
		    	   value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           required>
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" 
		    	   class="form-control" 
		    	   id="password" 
		    	   name="password" 
		    	   value="<?php if(isset($_GET['password']))
		                           echo($_GET['password']); ?>"
		           required>
		  </div>
		  <div class="form-group">
		    <label for="etat">Etat</label>
		    <input type="number" 
		    	   id="etat" 
		    	   max="1" 
		    	   min="0"
		    	   name="etat" 
		    	   value="<?php if(isset($_GET['etat']))
		                           echo($_GET['etat']); ?>"
		           required>
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