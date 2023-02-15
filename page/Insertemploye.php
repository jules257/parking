<?php


require('connexion.php');
if(isset($_POST['send'])){
	$nom_employe=htmlspecialchars($_POST['nom_employe']);
	$prenom_employe=htmlspecialchars($_POST['prenom_employe']);
$matricule_employe=htmlspecialchars($_POST['matricule_employe']);
$fonction_employe=htmlspecialchars($_POST['fonction_employe']);

//Insert
	
$prep=$pdo->prepare("INSERT INTO employe(nom_employe,prenom_employe,matricule_employe,fonction_employe) values(?,?,?,?)");
 $param=array($nom_employe,$prenom_employe,$matricule_employe,$fonction_employe);
 $prep->execute($param);

 header('location:newemploye.php');
 


}

	


?>