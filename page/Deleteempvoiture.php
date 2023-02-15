<?php
require('connexion.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$pdo->query("DELETE FROM empvoiture WHERE id_empvoiture='$id'");
	header('location:empvoiture.php');
}
?>