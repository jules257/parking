<?php
session_start();
// require('menu2.php');
require('connexion.php');


$cherchA=$pdo->query("SELECT* FROM parking");

require('menu.php');



?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion parking</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	

	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="parking.php" class="" >




	<?php
			if($_SESSION['role']=='admin'){
		?>

<h2 align="center"><a href="Newparking.php"><span ></span>nouveau agent </a></h2>
			<?php
		}?>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des agent</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>nom parking</th>
		
 <th>capacite parking</th>
		<th>route</th>
		<th>>quartier</th>
		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
			<td><?php echo $result['nom_parking']?>
				
			</td>
		<td><?php echo $result['capacite_parking']?>
		</td>
		<td><?php echo $result['route']?>
		</td>
		<td><?php echo $result['quartier']?>
		</td>

		
	<?php
			if($_SESSION['role']=='admin'){
		?>
		
		<td>
			<a href="Editparking.php?id=<?php echo $result['id_parking']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deleteparking.php?ids=<?php echo $result['id_parking']?>"class="btn btn-danger">
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