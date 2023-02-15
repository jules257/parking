<?php


require('connexion.php');
if(isset($_POST['send'])){
	$nom_propriete=htmlspecialchars($_POST['nom_propriete']);
	$prenom_propriete=htmlspecialchars($_POST['prenom_propriete']);
$adresse_propriete=htmlspecialchars($_POST['adresse_propriete']);
$telephone_propriete=htmlspecialchars($_POST['telephone_propriete']);

//Insert
	
$prep=$pdo->prepare("INSERT INTO propriete(nom_propriete,prenom_propriete,adresse_propriete,telephone_propriete) values(?,?,?,?)");
 $param=array($nom_propriete,$prenom_propriete,$adresse_propriete,$telephone_propriete);
 $prep->execute($param);

 header('location:newpropriete.php');
 


}

	


?>