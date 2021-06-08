<?php 
session_start();
include 'bdd.php';
// initialisation des variables
$username = $_POST['username'];
$password = $_POST['password'];
// verification des identifiants entré par l'utilisateur et ceux present en bdd
$connexion = $bdd->prepare("SELECT * FROM connexion WHERE username = :username AND password= :password ");
$connexion->execute(array(':username' => $username , ':password' => $password));
$resultat = $connexion->fetch();

if ($resultat) {
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['username'] = $username;
    header('Location:acceuil.php');

}

if(password_verify($password, $connexion['password'])) {
    header('Location:acceuil.php');
}

elseif(empty($username)) {
    echo "Remplisser le champ username.";
}elseif(empty($password)) {
    echo "Remplisser le champ password.";
}elseif(empty($username) && empty($password)) {
    echo "Remplisser les champs.";
}elseif($username != $resultat) {
    echo"Erreur d'identifiant.";
}elseif($password != $resultat) {
    echo "Erreur d'identifiant.";
} elseif(password_verify($password, $connexion['password'])) {
  echo 'Ok';
} 