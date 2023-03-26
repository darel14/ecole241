<?php
$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');

$requet= $bdd->prepare('INSERT INTO info (username,message) VALUE (?,?)');
$requet->execute(array($_POST['pseudo'], $_POST['commentaire']));

header('Location:commentaire.php');

?>