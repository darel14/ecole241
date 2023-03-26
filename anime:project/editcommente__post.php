<?php
include 'bdd.php';

if(isset($_GET['id'])&& !empty($_GET['id'])){
    $maj = $bdd->prepare('UPDATE commente SET commentaire = ? WHERE id = ?');
    $maj->execute(array($_GET['message'],$_GET['id']));
    if($maj->rowCount()>0){
        header('Location:commentaire.php');
    }else{
        echo "echec de maj !";
    }
}else{
    echo "aucun identifant";
}
?>