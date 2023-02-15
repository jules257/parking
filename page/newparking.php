<?php
require('menu.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>nouvel agent</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>

<body>



	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> nouveau parking :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertparking.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="">nom parking:</label>
		 	 <input  type="" name="nom_parking" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">capacite parking:</label>
		 	 <input  type="" name="capacite_parking" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">route:</label>
		 	 <input  type="" name="route" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">quartier:</label>
		 	 <input  type="" name="quartier" class="form-control" required/>
		 	
		 </div>
		 
		<button type="submit" name="send" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
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
