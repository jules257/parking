<?php

require('connexion.php');



if(isset($_POST['send'])){
    $immatriculation_voiture=htmlspecialchars($_POST['immatriculation_voiture']);
    $nom_voiture=htmlspecialchars($_POST['nom_voiture']);
	$marque_voiture=htmlspecialchars($_POST['marque_voiture']);
    
    
	$puissance_voiture=htmlspecialchars($_POST['puissance_voiture']);
	$couleur_voiture=htmlspecialchars($_POST['couleur_voiture']);
	$place_voiture=htmlspecialchars($_POST['place_voiture']);
	$id_propriete=htmlspecialchars($_POST['propriete']);
	$id_chauffeur=htmlspecialchars($_POST['chauffeur']);
	$id_parking=htmlspecialchars($_POST['parking']);
	
	//INSERTION DES DONNEES DE L UTILISATEUR

	$prep=$pdo->prepare("INSERT INTO voiture(immatriculation_voiture,nom_voiture,marque_voiture,puissance_voiture,couleur_voiture,place_voiture,id_propriete,id_chauffeur,id_parking) values(?,?,?,?,?,?,?,?,?)");
	$param=array($immatriculation_voiture,$nom_voiture,$marque_voiture,$puissance_voiture,$couleur_voiture,$place_voiture,$id_propriete,$id_chauffeur,$id_parking);
	$prep->execute($param);
	header('location:voiture.php');
}
?>