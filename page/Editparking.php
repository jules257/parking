
<?php
// session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchA=$pdo->query("SELECT * FROM parking where id_parking='$id'");
		$result=$cherchA->fetch();
		$nom_parking=$result['nom_parking'];
		$capacite_parking=$result['capacite_parking'];
		$route=$result['route'];
		$quartier=$result['quartier'];
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit parking</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       
</head>
<body>

	
<?php

$cherchA=$pdo->query("SELECT* FROM parking");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition parking :</div>
                <div class="panel-body">
		
<form method="POST" action="Updateparking.php" class="form" enctype="multipart/form-data">
<div class="form-group">
 <label for="id_parking">id parking: <?php echo $id?></label>
 <input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>"/>
                        </div>

		
		 <div class="form-group">
		 	<label for="">nom parking:</label>
		 	 <input  type="" name="nom_parking" class="form-control"value="<?php echo @$nom_parking?>" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">capacite parking:</label>
		 	 <input  type="" name="capacite_parking" class="form-control"value="<?php echo @$capacite_parking?>" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">route:</label>
		 	 <input  type="" name="route" class="form-control" value="<?php echo @$route?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">quartier:</label>
		 	 <input  type="" name="quartier" class="form-control" value="<?php echo @$quartier?>"required/>
		 	
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

