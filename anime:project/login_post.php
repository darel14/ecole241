<?php 
session_start();
include_once ("bdd.php");
if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$valide = false;
	$rs = $bdd->prepare("SELECT username,password FROM connexion");
			$rs->execute();


			while ($resultat = $rs->fetch()) {
					if ( $resultat['username'] == $_POST['username'] AND password_verify($_POST['password'], $resultat['password']))
					{
						$valide = true;
						$_SESSION['username'] = $_POST['username'];
						$_SESSION['id'] = $resultat['id'];
					} else{
						echo 'echec';
					}				
			}

			if ($valide == true) {
				header('location:acceuil.php');
			}
	}
 ?>