<?php 
try {
    $bdd = new PDO ('mysql:host=localhost;dbname=anime', 'root', '');
}
catch (Exception $e)
{
    die('Erreur :' . $e->getMessage());
}
?>