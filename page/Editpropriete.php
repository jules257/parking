
<?php
// session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchA=$pdo->query("SELECT * FROM propriete where id_propriete='$id'");
		$result=$cherchA->fetch();
		$nom_propriete=$result['nom_propriete'];
		$prenom_propriete=$result['prenom_propriete'];
		$adresse_propriete=$result['adresse_propriete'];
		$telephone_propriete=$result['telephone_propriete'];
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit propriete</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       
</head>
<body>

	
<?php

$cherchA=$pdo->query("SELECT* FROM propriete");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition propriete :</div>
                <div class="panel-body">
		
<form method="POST" action="Updatepropriete.php" class="form" enctype="multipart/form-data">
<div class="form-group">
 <label for="id_propriete">id propriete: <?php echo $id?></label>
 <input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>"/>
                        </div>

		
		 <div class="form-group">
		 	<label for="">nom propriete:</label>
		 	 <input  type="" name="nom_propriete" class="form-control"value="<?php echo @$nom_propriete?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">prenom propriete:</label>
		 	 <input  type="" name="prenom_propriete" class="form-control"value="<?php echo @$prenom_propriete?>" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">adresse propriete:</label>
		 	 <input  type="" name="adresse_propriete" class="form-control" value="<?php echo @$adresse_propriete?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">telephone propriete:</label>
		 	 <input  type="" name="telephone_propriete" class="form-control" value="<?php echo @$telephone_propriete?>"required/>
		 	
		 </div>
		
		<button type="submit" name="modify" class="btn btn-success">
                           
                            modifier
                        </button>
</div>		
</form>
</div>
</div>
</div>
<style >
	.container{
		margin-top: 90px;
	}

</style>


</body>


</html>

