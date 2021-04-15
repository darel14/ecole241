<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');


$requet = $bdd->prepare('INSERT INTO contact (username,email,message) VALUE(?,?)');
$requet->execute(array($_POST['username'], $_POST['email']), $_POST['message']);

header('location: contact.php');



?>