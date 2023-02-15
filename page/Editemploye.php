
<?php
// session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchA=$pdo->query("SELECT * FROM employe where id_employe='$id'");
		$result=$cherchA->fetch();
		$nom_employe=$result['nom_employe'];
		$prenom_employe=$result['prenom_employe'];
		$matricule_employe=$result['matricule_employe'];
		$fonction_employe=$result['fonction_employe'];
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit employe</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       
</head>
<body>

	
<?php

$cherchA=$pdo->query("SELECT* FROM employe");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition employe :</div>
                <div class="panel-body">
		
<form method="POST" action="Updateemploye.php" class="form" enctype="multipart/form-data">
<div class="form-group">
 <label for="id_chauffeur">id employe: <?php echo $id?></label>
 <input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>"/>
                        </div>

		
		 <div class="form-group">
		 	<label for="">nom employe:</label>
		 	 <input  type="" name="nom_employe" class="form-control"value="<?php echo @$nom_employe?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">prenom employe:</label>
		 	 <input  type="" name="prenom_employe" class="form-control"value="<?php echo @$prenom_employe?>" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">matricule employe:</label>
		 	 <input  type="" name="matricule_employe" class="form-control" value="<?php echo @$matricule_employe?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">fonction employe:</label>
		 	 <input  type="" name="fonction_employe" class="form-control" value="<?php echo @$fonction_employe?>"required/>
		 	
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

