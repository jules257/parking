<?php


require('connexion.php');
if(isset($_POST['send'])){
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
$email=htmlspecialchars($_POST['email']);


//Insert
	
$prep=$pdo->prepare("INSERT INTO user(username,password,email) values(?,?,?)");
 $param=array($username,$password,$email);
 $prep->execute($param);

 header('location:user.php');
 


}

	


?>