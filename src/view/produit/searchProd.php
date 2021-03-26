<?php 
	include_once '../../../header.php';
  include_once '../../model/produit/ReadProdDB.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Read user</title>
	<link rel="stylesheet" href="public/css/style.css">
    <script src=""></script>
</head>
<body>
	<div class="container">
      <div class="row mb-3">
      <div class="col-3">
        <a href="http://localhost/mes_cours/liagegda/suivistock/src/view/produit/CreateProd.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Prod&emsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button></a>
      </div>
      <div class="col-3">
		<a href="http://localhost/mes_cours/liagegda/suivistock/src/view/produit/ReadProd.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">List Product &emsp; <i class="fa fa-list-alt" aria-hidden="true"></i></button></a>
	</div>
      <div class="col-2">
        <div class="input-group input-group-lg">
          <div class="input-group-pretend"> 
          <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                            <input type="text" class="form-control bg-grey border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2"
                                name="search" id="search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <a href="http://localhost/mes_cours/liagegda/suivistock/src/view/produit/searchProd.php">
                                    <i class="fas fa-search fa-sm"></i> 
                                </a>
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
			<h4 class="text-primary text-center">Search Prod</h4>
		</div>
        <br>
		<div id="result"></div>
</body>
</html>
<script>
$(document).ready(function(){
    $('#search').keyup(function(){
        var txt = $(this).val();
        if(txt != ''){
            $.ajax({
                url:"http://localhost/mes_cours/liagegda/suivistock/src/model/produit/searchProdDB.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data)
                {
                    $('#result').html(data);
                }
            });  
        }else{
            $('#result').html('');  
            $.ajax({
                url:"http://localhost/mes_cours/liagegda/suivistock/src/model/produit/searchProdDB.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data)
                {
                    $('#result').html(data);
                }
            }); 
        }
    });
});
</script>
<?php 
	include_once '../../../footer.php';
 ?>