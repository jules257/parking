<?php
session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');


$cherchA=$pdo->query("SELECT* FROM chauffeur");


?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion chauffeur</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="chauffeur.php" class="" >



	<?php
			if($_SESSION['role']=='admin'){
		?>
	
		
		

<h1 align="center"><a href="Newchauffeur.php"><span ></span>nouveau chauffeur </a></h1>
			<?php }
			?>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des chauffeurs</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>nom chauffeur</th>
		
 <th>prenom chauffeur</th>
		<th>adresse chauffeur</th>
		<th>>telephone chauffeur</th>
		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
			<td><?php echo $result['nom_chauffeur']?>
				
			</td>
		<td><?php echo $result['prenom_chauffeur']?>
		</td>
		<td><?php echo $result['adresse_chauffeur']?>
		</td>
		<td><?php echo $result['telephone_chauffeur']?>
		</td>
		<?php
			if($_SESSION['role']=='admin'){
		?>
	
		
		<td>
			<a href="Editchauffeur.php?id=<?php echo $result['id_chauffeur']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deletechauffeur.php?ids=<?php echo $result['id_chauffeur']?>"class="btn btn-danger">
  supprimer</a></td>
<!-- condition session -->
  <?php
}
?>
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