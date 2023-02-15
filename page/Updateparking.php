<?php
require('connexion.php');
//MODIFICATION 
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$nom_parking=$_POST['nom_parking'];
$capacite_parking=$_POST['capacite_parking'];
$route=$_POST['route'];
$quartier=$_POST['quartier'];


	
	$prep=$pdo->prepare("UPDATE parking set nom_parking=?,capacite_parking=?,route=?,quartier=? where id_parking=? ");
	$param=array($nom_parking,$capacite_parking,$route,$quartier,$id);
	$prep->execute($param);
		header('location:parking.php');
}
?>