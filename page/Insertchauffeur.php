<?php


require('connexion.php');
if(isset($_POST['send'])){
	$nom_chauffeur=htmlspecialchars($_POST['nom_chauffeur']);
	$prenom_chauffeur=htmlspecialchars($_POST['prenom_chauffeur']);
$adresse_chauffeur=htmlspecialchars($_POST['adresse_chauffeur']);
$telephone_chauffeur=htmlspecialchars($_POST['telephone_chauffeur']);

//Insert
	
$prep=$pdo->prepare("INSERT INTO chauffeur(nom_chauffeur,prenom_chauffeur,adresse_chauffeur,telephone_chauffeur) values(?,?,?,?)");
 $param=array($nom_chauffeur,$prenom_chauffeur,$adresse_chauffeur,$telephone_chauffeur);
 $prep->execute($param);

 header('location:newchauffeur.php');
 


}

	


?>