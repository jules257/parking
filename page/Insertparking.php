<?php
// $id_parkin="";
// $id="";
// $nom_a="";
// $prenom_a="";
// $telephone_a="";
// $email_a="";
// $code_a="";





require('connexion.php');
if(isset($_POST['send'])){
	$nom_parking=htmlspecialchars($_POST['nom_parking']);
	$capacite_parking=htmlspecialchars($_POST['capacite_parking']);
$route=htmlspecialchars($_POST['route']);
$quartier=htmlspecialchars($_POST['quartier']);

//Insert
	
$prep=$pdo->prepare("INSERT INTO parking(nom_parking,capacite_parking,route,quartier) values(?,?,?,?)");
 $param=array($nom_parking,$capacite_parking,$route,$quartier);
 $prep->execute($param);

 header('location:newparking.php');
 


}

	


?>