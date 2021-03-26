<!DOCTYPE html>
 <html>
 <head>
 	<title>Add User</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<link rel="stylesheet" href="http://localhost/mes_cours/liagegda/suivistock/public/css/style.css">
 </head>
 <body>
 <br><br>
 	<div class="container">
		 <form action="http://localhost/mes_cours/liagegda/suivistock/src/controller/UserCtrl.php" 
			  	method="post">
				<div class="alert alert alert-primary" role="alert">
					<h3 class="text-primary text-center">WELCOME TO SUIVI STOCK</h3>
				</div>
			<hr>
		  		<div class="form-group">
					<label for="email">Email</label>
					<input type="email" 
					class="form-control" 
					id="email" 
					name="email" 
					required>
		 		 </div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" 
						class="form-control" 
						id="password" 
						name="password"
						required>
				</div>
				<br>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<button type="submit" 
						class="btn btn-primary"
						name="connexion">Connexion</button>
		</form>
    </div>	
 </body>
 </html>

 <?php
    if (isset($_GET['erreur'])){
        echo '<div class="h2 text-center red-text container col-md-6">Email ou Mot de Passe incorrect !</div>';
    }
?>
