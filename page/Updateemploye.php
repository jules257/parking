<?php
require('connexion.php');
//MODIFICATION 
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$nom_employe=$_POST['nom_employe'];
$prenom_employe=$_POST['prenom_employe'];
$matricule_employe=$_POST['matricule_employe'];
$fonction_employe=$_POST['fonction_employe'];


	
	$prep=$pdo->prepare("UPDATE employe set nom_employe=?,prenom_employe=?,matricule_employe=?,fonction_employe=? where id_employe=? ");
	$param=array($nom_employe,$prenom_employe,$matricule_employe,$fonction_employe,$id);
	$prep->execute($param);
		header('location:employe.php');
}
?>