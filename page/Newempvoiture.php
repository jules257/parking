<?php



require('connexion.php');
require('menu.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>nouvel voiture</title>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible" content="IE=edge">
	

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      
</head>

<body>



	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> emp_voiture :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertempvoiture.php" enctype="multipart/form-data"class="form">
	
		
		
		
	
         <?php
      //APPEL DE ID ETRANGER
      $cherchA=$pdo->query("SELECT * FROM voiture");
      ?>
      
<div class="form-group">
    <label for="">voiture:</label>

    <select name="voiture"class="form-control" id="id_voiture">
      <?php
      foreach($cherchA as $result)
      {
      ?>
      <option value="<?php echo $result['id_voiture'];?>">
<?php echo $result['nom_voiture'].' '.$result['marque_voiture'];?>
            
          </option>
          <?php
        }
          ?>
          

        </select>
        </div>   

               <?php
      //APPEL DE ID ETRANGER
      $cherchA=$pdo->query("SELECT * FROM employe");
      ?>
      
<div class="form-group">
    <label for="">employe:</label>

    <select name="employe"class="form-control" id="id_employe">
      <?php
      foreach($cherchA as $result)
      {
      ?>
      <option value="<?php echo $result['id_employe'];?>">
<?php echo $result['nom_employe'].' '.$result['prenom_employe'];?>
            
          </option>
          <?php
        }
          ?>
          

        </select>
        </div> 

           	 <div class="form-group">
		 	<label for="">date :</label>
		 	 <input  type="date" name="date" class="form-control" required/>
		 	
		 </div>
		
		 
		<button type="submit" name="send" class="btn btn-success">
                           
                            Enregistrer
                        </button>
</form>
</div>
</div>
</div>

</div>
<style>
	.container{
		margin-top: 90px;
	}

</style>
</body>
</html>
