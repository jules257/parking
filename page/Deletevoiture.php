<?php
require('connexion.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$pdo->query("DELETE FROM voiture WHERE id_voiture='$id'");
	header('location:voiture.php');
}
?>