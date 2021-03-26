<?php 
	include_once '../../../header.php';
  include_once '../../model/user/ReadUserDB.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Read user</title>
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>
	<div class="container">
      <div class="row mb-3">
      <div class="col-3">
        <a href="http://localhost/mes_cours/liagegda/suivistock/src/view/user/CreateUser.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User&emsp; <i class="fa fa-user" aria-hidden="true"></i></button></a>
      </div>
      <div class="col-9">
        <div class="input-group input-group-lg">
          <div class="input-group-pretend"> 
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  <input type="text" class="form-control bg-white border-1 big"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
          </div> 
        </div>
    </div>
    </div>
     <div class="container">
     <div class="box">
		<div class="alert alert alert-primary" role="alert">
			<h4 class="text-primary text-center">Liste User</h4>
		</div>
				<!-- Button trigger modal -->
		<?php if (mysqli_num_rows($result)) { ?>
		<!-- Forms -->
		<!-- Tables-->
	
        <table class="table">
  <thead>
    <tr>
      <th scope="col" class="align-middle">#</th>
      <th scope="col" class="align-middle">Nom</th>
      <th scope="col" class="align-middle">Prenom</th>
      <th scope="col" class="align-middle">Email</th>
      <th scope="col" class="align-middle">Etat</th>
      <th scope="col-2" class="align-middle"> Actions </th>
    </tr>
  </thead>
  <tbody>
    <?php 
    while ($rows = mysqli_fetch_assoc($result)) {
      ?>
    <tr>
        <th scope="row" class="align-middle"><?=$rows['id']?></th>
        <td class="align-middle"><?=$rows['nom']?></td>
        <td class="align-middle"><?=$rows['prenom']?></td>
        <td class="align-middle"><?=$rows['email']?></td>
        <td class="align-middle"><?=$rows['etat']?></td>
        <td class="align-middle">
          <a href="UpdateUser.php?id=<?=$rows['id']?>" 
             class="btn btn-success">Update</a>
          <a href="http://localhost/mes_cours/liagegda/suivistock/src/model/user/DeleteUserDB.php?id=<?=$rows['id']?>" 
             class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 <?php } ?>
     </div>
   </div>
	<!-- Tables-->
		<!-- Modal -->
		<!--div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
</div>
	</div>
	</body>
</html>

<?php 
	include_once '../../../footer.php';
 ?>