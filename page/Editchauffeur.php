
<?php
// session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchA=$pdo->query("SELECT * FROM chauffeur where id_chauffeur='$id'");
		$result=$cherchA->fetch();
		$nom_chauffeur=$result['nom_chauffeur'];
		$prenom_chauffeur=$result['prenom_chauffeur'];
		$adresse_chauffeur=$result['adresse_chauffeur'];
		$telephone_chauffeur=$result['telephone_chauffeur'];
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit chauffeur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       
</head>
<body>

	
<?php

$cherchA=$pdo->query("SELECT* FROM chauffeur");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition chauffeur :</div>
                <div class="panel-body">
		
<form method="POST" action="Updatechauffeur.php" class="form" enctype="multipart/form-data">
<div class="form-group">
 <label for="id_chauffeur">id chauffeur: <?php echo $id?></label>
 <input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>"/>
                        </div>

		
		 <div class="form-group">
		 	<label for="">nom chauffeur:</label>
		 	 <input  type="" name="nom_chauffeur" class="form-control"value="<?php echo @$nom_chauffeur?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">prenom chauffeur:</label>
		 	 <input  type="" name="prenom_chauffeur" class="form-control"value="<?php echo @$prenom_chauffeur?>" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">adresse chauffeur:</label>
		 	 <input  type="" name="adresse_chauffeur" class="form-control" value="<?php echo @$adresse_chauffeur?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">telephone chauffeur:</label>
		 	 <input  type="" name="telephone_chauffeur" class="form-control" value="<?php echo @$telephone_chauffeur?>"required/>
		 	
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

