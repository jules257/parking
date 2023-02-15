<?php
require('connexion.php');
//MODIFICATION 
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$nom_propriete=$_POST['nom_propriete'];
$prenom_propriete=$_POST['prenom_propriete'];
$adresse_propriete=$_POST['adresse_propriete'];
$telephone_propriete=$_POST['telephone_propriete'];


	
	$prep=$pdo->prepare("UPDATE propriete set nom_propriete=?,prenom_propriete=?,adresse_propriete=?,telephone_propriete=? where id_propriete=? ");
	$param=array($nom_propriete,$prenom_propriete,$adresse_propriete,$telephone_propriete,$id);
	$prep->execute($param);
		header('location:propriete.php');
}
?>