<?php

require('connexion.php');



if(isset($_POST['send'])){

    
    
	
	$id_voiture=htmlspecialchars($_POST['voiture']);
	$id_employe=htmlspecialchars($_POST['employe']);
    $date=htmlspecialchars($_POST['date']);

	
	//INSERTION DES DONNEES DE L UTILISATEUR

	$prep=$pdo->prepare("INSERT INTO empvoiture(id_voiture,id_employe,date) values(?,?,?)");
	$param=array($id_voiture,$id_employe,$date);
	$prep->execute($param);
	header('location:empvoiture.php');
}
?>