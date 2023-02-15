<?php
require('connexion.php');
//MODIFICATION 
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$nom_chauffeur=$_POST['nom_chauffeur'];
$prenom_chauffeur=$_POST['prenom_chauffeur'];
$adresse_chauffeur=$_POST['adresse_chauffeur'];
$telephone_chauffeur=$_POST['telephone_chauffeur'];


	
	$prep=$pdo->prepare("UPDATE chauffeur set nom_chauffeur=?,prenom_chauffeur=?,adresse_chauffeur=?,telephone_chauffeur=? where id_chauffeur=? ");
	$param=array($nom_chauffeur,$prenom_chauffeur,$adresse_chauffeur,$telephone_chauffeur,$id);
	$prep->execute($param);
		header('location:chauffeur.php');
}
?>