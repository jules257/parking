<?php
session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');


$cherchA=$pdo->query("SELECT* FROM voiture INNER JOIN propriete ON propriete.id_propriete=voiture.id_propriete INNER JOIN chauffeur ON chauffeur.id_chauffeur=voiture.id_chauffeur INNER JOIN parking ON parking.id_parking=voiture.id_parking");



?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion voiture</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="voiture.php" class="" >





	<?php
			if($_SESSION['role']=='admin'){
		?>
<h1 align="center"><a href="Newvoiture.php"><span ></span>nouveau voiture </a></h1>
			<?php
		}?>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des voitures</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
		<th>immatriculation voiture</th>
		
 <th>nom voiture</th>
		<th>marque voiture</th>
		<th>puissance voiture</th>
        <th>couleur voiture</th>
		
 <th>place voiture</th>
		<th>propriete</th>
		<th>>chauffeur</th>
		<th>parking</th>

		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
			<td><?php echo $result['immatriculation_voiture']?>
				
			</td>
		<td><?php echo $result['nom_voiture']?>
		</td>
		<td><?php echo $result['marque_voiture']?>
		</td>
		<td><?php echo $result['puissance_voiture']?>
		</td>

        	<td><?php echo $result['couleur_voiture']?>
				
                </td>
            <td><?php echo $result['place_voiture']?>
            </td>
            <td><?php echo $result['nom_propriete'].' '.$result['prenom_propriete']?>
            </td>
            <td><?php echo $result['nom_chauffeur'].' '.$result['prenom_chauffeur']?>
            </td>
            <td><?php echo $result['nom_parking']?></td>
		
	<?php
			if($_SESSION['role']=='admin'){
		?>
		<td>
			<a href="Editvoiture.php?id=<?php echo $result['id_voiture']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deletevoiture.php?ids=<?php echo $result['id_voiture']?>"class="btn btn-danger">
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