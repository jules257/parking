<?php
//MODIFICATION DES DONNEES DE L UTILISATION
require('connexion.php');
if(isset($_POST['modify']))
	{
		$id=$_POST['id'];
		$immatriculation_voiture=$_POST['immatriculation_voiture'];
		$nom_voiture=$_POST['nom_voiture'];
		$marque_voiture=$_POST['marque_voiture'];
        $puissance_voiture=$_POST['puissance_voiture'];
        $couleur_voiture=$_POST['couleur_voiture'];
		$place_voiture=$_POST['place_voiture'];
	
		$id_propriete=$_POST['propriete'];
		$id_chauffeur=$_POST['chauffeur'];
		$id_parking=$_POST['parking'];
	

	
	$prep=$pdo->prepare("UPDATE voiture set immatriculation_voiture=?,nom_voiture=?,marque_voiture=?,puissance_voiture=?,couleur_voiture=?,place_voiture=?,id_propriete=?,id_chauffeur=?,id_parking=?
	where id_voiture=?");
	$param=array($immatriculation_voiture,$nom_voiture,$marque_voiture,$puissance_voiture,$couleur_voiture,$place_voiture,$id_propriete,$id_chauffeur,$id_parking,$id);
	$prep->execute($param);
		header('location:voiture.php');

	}
?>