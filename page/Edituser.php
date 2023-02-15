
<?php
// session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');

if(isset($_GET['id'])){
	$id=$_GET['id'];
		
		$cherchA=$pdo->query("SELECT * FROM user where id_user='$id'");
		$result=$cherchA->fetch();
		$username=$result['username'];
		$password=$result['password'];
		$email=$result['email'];
		$role=$result['role'];
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit utilisateur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       
</head>
<body>

	
<?php

$cherchA=$pdo->query("SELECT* FROM user");
?>
<div class="container">
	<div class="panel panel-info margetop60">
                <div class="panel-heading">Edition user :</div>
                <div class="panel-body">
		
<form method="POST" action="Updateuser.php" class="form" enctype="multipart/form-data">
<div class="form-group">
 <label for="id_chauffeur">id user: <?php echo $id?></label>
 <input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>"/>
                        </div>

                        <div class="form-group">
		 	<label for="">username:</label>
		 	 <input  type="" name="username" class="form-control"value="<?php echo @$username?>" required/>
		 	
		 </div>

		
		 <div class="form-group">
		 	<label for="">password:</label>
		 	 <input  type="" name="password" class="form-control"value="<?php echo @$password?>" required/>
		 	
		 </div>
		 	
		 
		<div class="form-group">
		 	<label for="">email:</label>
		 	 <input  type="" name="email" class="form-control" value="<?php echo @$email?>"required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">role:</label>
		 	 <input  type="" name="role" class="form-control" value="<?php echo @$role?>"required/>
		 	
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

