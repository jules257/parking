<?php
session_start();
// require('menu2.php');
require('connexion.php');
require('menu.php');


$cherchA=$pdo->query("SELECT* FROM empvoiture INNER JOIN voiture ON voiture.id_voiture=empvoiture.id_voiture INNER JOIN employe ON employe.id_employe=empvoiture.id_employe");



?>


<!DOCTYPE HTML>
<html lang="">
<head>
	<title> gestion empvoiture</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
       
	




</head>

<body>



	
<div class="container">
		
<form method="GET" action="empvoiture.php" class="" >





	<?php
			if($_SESSION['role']=='admin'){
		?>
<h1 align="center"><a href="Newempvoiture.php"><span ></span>nouveau empvoiture </a></h1>
			<?php
		}?>
</form>
</div>
<div class="col-md-12">	

<div class="panel panel-info">
 <div class="panel-heading">Liste des empvoitures</div>
		 <div class="panel-body">
                    <table class="table table-striped table-striped">
	<thead><tr>
	
		
 <th>voiture</th>
		<th>employe</th>
		<th>date</th>
		

		

		<th colspan="2">action</th>

		
		
	</tr>
	</thead>
	
	<tbody>
		<?php
		
            foreach($cherchA as $result){
		?>

		<tr>
		
            <td><?php echo $result['nom_voiture'].' '.$result['marque_voiture']?>
            </td>
            <td><?php echo $result['nom_employe'].' '.$result['prenom_employe']?>
            </td>
            
            
            <td><?php echo $result['date']?>
            </td>
		
	<?php
			if($_SESSION['role']=='admin'){
		?>
		<td>
			<a href="Editempvoiture.php?id=<?php echo $result['id_empvoiture']?>"class="btn btn-success">
edit</a></td>
<td><a onclick="return confirm('voulez_vous supprimer?')" href="Deleteempvoiture.php?ids=<?php echo $result['id_empvoiture']?>"class="btn btn-danger">
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