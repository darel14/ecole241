<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');

$req = $bdd->prepare('INSERT INTO info (username,email,message) VALUE(?,?)');
$req->execute(array($_POST['username'], $_POST['email'], $_POST['message']));

header('location: info.php');
?>