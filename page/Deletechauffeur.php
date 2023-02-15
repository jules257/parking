<?php
require('connexion.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$pdo->query("DELETE FROM chauffeur WHERE id_chauffeur='$id'");
	header('location:chauffeur.php');
}
?>