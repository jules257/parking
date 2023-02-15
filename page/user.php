<?php
// session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');

$cherchA=$pdo->query("SELECT* FROM user");


?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion utilisateur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="user.php" class="" >





<h1 align="center"><a href="Newuser.php"><span ></span>nouveau utilisateur </a></h1>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des utilisateurs</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>username</th>
		
 <th>password</th>
		<th>email</th>
		<th>role</th>
		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
			<td><?php echo $result['username']?>
				
			</td>
		<td><?php echo $result['password']?>
		</td>
		<td><?php echo $result['email']?>
		</td>
		<td><?php echo $result['role']?>
		</td>
		
		<td>
			<a href="Edituser.php?id=<?php echo $result['id_user']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deleteuser.php?ids=<?php echo $result['id_user']?>"class="btn btn-danger">
  supprimer</a></td>
<?php
}
?>	
</tr>


		
	</tbody>
</table>
    <div>
                 
                </div>

</div>
</div>
</div>
<style >
	.container{
		margin-top: 90px;
	}
	
	input{
		outline: none;
	}
</style>	
</body>
</html>