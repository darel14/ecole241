<?php 
session_start();
include '../bdd.php';
$nom = $_SESSION['username'];
$message = $_POST['message'];

$req = $bdd->prepare('INSERT INTO administrateur (nom,message) VALUE(?,?)');
$req->execute(array(
$_SESSION['username'],
$_POST['message'],

 ));

header('location: admin-contact.php');
?>