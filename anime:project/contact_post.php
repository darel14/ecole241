<?php 
session_start();
include 'bdd.php';

$requet = $bdd->prepare('INSERT INTO contact (username,email,message) VALUE(?,?)');
$requet->execute(array($_POST['username'], $_POST['email']), $_POST['message']);

header('location: contact.php');



?>