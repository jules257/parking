<?php
session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');


$cherchA=$pdo->query("SELECT* FROM employe");


?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion employe</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="employe.php" class="" >




	<?php
			if($_SESSION['role']=='admin'){
		?>

<h1 align="center"><a href="Newemploye.php"><span ></span>nouveau employe </a></h1>
			<?php
		}?>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des employes</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>nom employe</th>
		
 <th>prenom employe</th>
		<th>matricule employe</th>
		<th>>fonction employe</th>
		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
			<td><?php echo $result['nom_employe']?>
				
			</td>
		<td><?php echo $result['prenom_employe']?>
		</td>
		<td><?php echo $result['matricule_employe']?>
		</td>
		<td><?php echo $result['fonction_employe']?>
		</td>
		
	<?php
			if($_SESSION['role']=='admin'){
		?>
		<td>
			<a href="Editemploye.php?id=<?php echo $result['id_employe']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deleteemploye.php?ids=<?php echo $result['id_employe']?>"class="btn btn-danger">
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