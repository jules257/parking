<?php
//MODIFICATION DES DONNEES DE L UTILISATION
require('connexion.php');
if(isset($_POST['modify']))
	{
		$id=$_POST['id'];
		
	
		$id_voiture=$_POST['voiture'];
		$id_employe=$_POST['employe'];
		$date=$_POST['date'];
	

	
	$prep=$pdo->prepare("UPDATE empvoiture set id_voiture=?,id_employe=?,date=?
	where id_empvoiture=?");
	$param=array($id_voiture,$id_employe,$date,$id);
	$prep->execute($param);
		header('location:empvoiture.php');

	}
?>