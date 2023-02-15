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
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>

<body>



	 <div class="container">
                       
             <div class="panel panel-info margetop60">
                <div class="panel-heading"> nouveau voiture :</div>
                <div class="panel-body">
		
<form method="POST" action="Insertvoiture.php" enctype="multipart/form-data"class="form">
	
		
		
		
		

			
			
		 <div class="form-group">
		 	<label for="">immatriculation voiture:</label>
		 	 <input  type="" name="immatriculation_voiture" class="form-control" required/>
		 	
		 </div>
		 	
		 <div class="form-group">
		 	<label for="">nom voiture:</label>
		 	 <input  type="" name="nom_voiture" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">marque voiture:</label>
		 	 <input  type="" name="marque_voiture" class="form-control" required/>
		 	
		 </div>
		<div class="form-group">
		 	<label for="">puissance voiture:</label>
		 	 <input  type="" name="puissance_voiture" class="form-control" required/>
		 	
		 </div>

         <div class="form-group">
		 	<label for="">couleur voiture:</label>
		 	 <input  type="" name="couleur_voiture" class="form-control" required/>
		 	
		 </div>
         <div class="form-group">
		 	<label for="">place voiture:</label>
		 	 <input  type="" name="place_voiture" class="form-control" required/>
		 	
		 </div>
         <?php
      //APPEL DE ID ETRANGER
      $cherchA=$pdo->query("SELECT * FROM propriete");
      ?>
      
<div class="form-group">
    <label for="propriete">propriete:</label>

    <select name="propriete"class="form-control" id="id_propriete">
      <?php
      foreach($cherchA as $result)
      {
      ?>
      <option value="<?php echo $result['id_propriete'];?>">
<?php echo $result['nom_propriete'].' '.$result['prenom_propriete'];?>
            
          </option>
          <?php
        }
          ?>
          

        </select>
        </div>   

               <?php
      //APPEL DE ID ETRANGER
      $cherchA=$pdo->query("SELECT * FROM chauffeur");
      ?>
      
<div class="form-group">
    <label for="">chauffeur:</label>

    <select name="chauffeur"class="form-control" id="id_chauffeur">
      <?php
      foreach($cherchA as $result)
      {
      ?>
      <option value="<?php echo $result['id_chauffeur'];?>">
<?php echo $result['nom_chauffeur'].' '.$result['prenom_chauffeur'];?>
            
          </option>
          <?php
        }
          ?>
          

        </select>
        </div> 

                   <?php
      //APPEL DE ID ETRANGER
      $cherchA=$pdo->query("SELECT * FROM parking");
      ?>
      
<div class="form-group">
    <label for="">parking:</label>

    <select name="parking"class="form-control" id="id_parking">
      <?php
      foreach($cherchA as $result)
      {
      ?>
      <option value="<?php echo $result['id_parking'];?>">
<?php echo $result['nom_parking'];?>
            
          </option>
          <?php
        }
          ?>
          

        </select>
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
