<?php
session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');


$cherchA=$pdo->query("SELECT* FROM propriete");


?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion propriete</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="propriete.php" class="" >




	<?php
			if($_SESSION['role']=='admin'){
		?>

<h1 align="center"><a href="Newpropriete.php"><span ></span>nouveau propriete </a></h1>
			<?php
		}?>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des proprietes</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>nom chauffeu</th>
		
 <th>prenom propriete</th>
		<th>adresse propriete</th>
		<th>telephone propriete</th>
		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
			<td><?php echo $result['nom_propriete']?>
				
			</td>
		<td><?php echo $result['prenom_propriete']?>
		</td>
		<td><?php echo $result['adresse_propriete']?>
		</td>
		<td><?php echo $result['telephone_propriete']?>
		</td>
		
	<?php
			if($_SESSION['role']=='admin'){
		?>
		<td>
			<a href="Editpropriete.php?id=<?php echo $result['id_propriete']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deletepropriete.php?ids=<?php echo $result['id_propriete']?>"class="btn btn-danger">
  supprimer</a></td>
			<?php
		}?>
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