<?php
require('connexion.php');
//SUPPRESSION DES INFORMATIONS
if(isset($_GET['ids'])){
	$id=$_GET['ids'];
	
	$cherch=$pdo->query("DELETE FROM propriete WHERE id_propriete='$id'");
	header('location:propriete.php');
}
?>