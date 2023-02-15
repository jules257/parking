<?php
require('menu.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>nouvel propriete</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>

<body>



	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> nouveau propriete :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertpropriete.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="">nom propriete:</label>
		 	 <input  type="" name="nom_propriete" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">prenom propriete:</label>
		 	 <input  type="" name="prenom_propriete" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">adresse propriete:</label>
		 	 <input  type="" name="adresse_propriete" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">telephone propriete:</label>
		 	 <input  type="" name="telephone_propriete" class="form-control" required/>
		 	
		 </div>
		 
		<button type="submit" name="send" class="btn btn-success">
                           
                            Enregistrer
                        </button>
</form>
</div>
</div>
</div>
</div>
<style>
	.container{
		margin-top: 90px;
	}

</style>
</body>
</html>
