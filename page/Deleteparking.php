<?php
require('connexion.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$pdo->query("DELETE FROM parking WHERE id_parking='$id'");
	header('location:parking.php');
}
?>