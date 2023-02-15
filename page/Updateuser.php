<?php
require('connexion.php');
//MODIFICATION 
if(isset($_POST['modify']))	

{
	$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$role=$_POST['role'];


	
	$prep=$pdo->prepare("UPDATE user set username=?,password=?,email=?,role=? where id_user=?");
	$param=array($username,$password,$email,$role,$id);
	$prep->execute($param);
		header('location:user.php');
}
?>