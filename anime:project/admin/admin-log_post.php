<?php 
session_start();
include '../bdd.php';
// initialisation des variables
$username = $_POST['username'];
$password = $_POST['password'];
// verification des identifiants entré par l'utilisateur et ceux present en bdd
$connexion = $bdd->prepare("SELECT * FROM administrator WHERE username = :username AND password= :password ");
$connexion->execute(array(':username' => $username , ':password' => $password));
$resultat = $connexion->fetch();
if ($resultat) {
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['username'] = $username;
    header('Location:dashboard.php');
} else{
    echo 'echec';
}
