<?php

session_start();
?>

<div class="navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-nav">
			<li><a href="chauffeur.php">chauffeur</a></li>
			<li><a href="employe.php">employe</a></li>
			<li><a href="parking.php">parking</a></li>
			<li><a href="propriete.php">propriete</a></li>
			<li><a href="voiture.php">voiture</a></li>
			<li><a href="empvoiture.php">parametre</a></li>
			
	<?php
			if($_SESSION['role']=='admin'){
		?>
			<li><a href="user.php">utilisateur</a></li>
			<?php
		}?>
			<li><a href="login.php">login</a></li>
		</ul>
	</div>