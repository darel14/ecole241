<?php 
try{
	$bdd = new PDO("mysql:host=mysql-darel.alwaysdata.net;dbname=darel_db","darel","developpeur241",
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} 
catch(PDOException $e){
	
	die('Erreur: '.$e->getMessage());
} 
 ?>