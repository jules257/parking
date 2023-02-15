


<!DOCTYPE html>
<html>
<head>
	<title>nouvel utilisateur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      
</head>

<body>



	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> nouveau utilisateur :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertuser.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="">username:</label>
		 	 <input  type="" name="username" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">password:</label>
		 	 <input  type="" name="password" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">email:</label>
		 	 <input  type="mail" name="email" class="form-control" required/>
		 	
		 </div>
		 
		<button type="submit" name="send" class="btn btn-success">
                           
                            Enregistrer
                        </button>
		 <h4><a href="login.php">retour à l'authentification</a></h4>

						
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
