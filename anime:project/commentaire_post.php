<?php
session_start();
include 'bdd.php';
/*
$commente = $_POST('commentaire');

if(empty($commente)) {
    
}
*/
$requet= $bdd->prepare('INSERT INTO commente (pseudo,commentaire) VALUE (?,?)');
$requet->execute(array($_SESSION['username'], $_POST['commentaire']));

header('Location:commentaire.php');
?>