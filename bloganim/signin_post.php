<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');

$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

$requet = $bdd->prepare('INSERT INTO connexion (username,password) VALUE(?,?)');
$requet->execute(array($_POST['username'], $_POST['password']));

header('location: login.php');



?>