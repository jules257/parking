<?php
session_start();


require_once("connexion.php");
if(isset($_POST['enregistrer'])){
  $username=$_POST['username'];
$password=$_POST['password'];
$cherchA=$pdo->prepare("SELECT * FROM user WHERE username=? AND password=?");
$param=array($username,$password);
$cherchA->execute($param);
$info=$cherchA->rowcount();

if($info==1){


 $row=$cherchA->fetch();
 $_SESSION['id_user']=$row['id_user'];

 $_SESSION['email']=$row['email'];
 $_SESSION['password']=$row['password'];
 $_SESSION['username']=$row['username'];
$_SESSION['role']=$row['role'];

header("location:parking.php");  
      
 }
  else
  {
  echo"<script>alert('incorrect or you can call the administration please!!');</script>";
        }
       
      

}
    





?>

<!DOCTYPE HTML>
<html> 
<head>
	<title>login</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,minimum-scale=0.25">
   
    </head>

        <style>
  .card{
    background:#64e9ca1a; #83aa87
    margin-top:40px;
     margin-right:30px;
      height: 500px;
      width: 350px;
      margin-right:60px;
  
}
input{
      background:white;
    margin-top:50px;
    font-size: 20px;
    border-radius: 2px;
    font-family: none;
    border:none;
    border-bottom:5px;
    outline: none;

  }
  placeholder{
    border-radius: 2px;

  }
  /* body{
    background:url(Desert.jpg);
    display: flex;
  } */
  button{
    /* margin-top: 30px; */
    background:white;
    margin-top:50px;
    font-size: 20px;
    border-radius: 2px;
    font-family: none;
    border:none;
    border-bottom:5px;
    outline: none;
  }
  .contain{
    margin-left: 500px;
  }
  
  




</style>





<body>
  
    
      <form method="POST" action="">
        <div class="contain">
        

        <div  class="card" align="center">
  <h2 align="center" style="font-size:reds"> authentification</h2>
<table align="center">
  <tr>
    <td>
      <input type="text" name="username" minlength="3" placeholder="username.." required >
      
    </td>
    
  </tr>
  <tr>
    <td>
      <input type="password" name="password" minlength="3" placeholder="password.." required>
    </td>
    <td>
           <button type="submit" name="enregistrer" value="envoyer" class="btn btn-primary"> 
        login</button>
    </td>
  </tr>
<!--  
  <tr>
   
 
  </tr> -->
  <tr>
    <td>
       <div class="card-footer text-muted" style="color:white;">
   <p></p>
    <a href="Newuser.php"class="btn btn-primary">
 
    créer votre compte</a>
    
  </div>
    </td>
  </tr>
     

 
</table>
 </div>
</div>
</form>
     
 
      
    
    
  
  
</body>
</html>

  
 






