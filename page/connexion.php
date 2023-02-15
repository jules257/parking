<?php
try{
			$pdo=new PDO("mysql:host=localhost;dbname=parking","root","",[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
				
		}
		catch(exception $e){
			echo"connection echoue".$e ->getmessage();	
				}






?>