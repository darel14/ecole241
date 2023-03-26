<?php
include '../bdd.php';

if(isset($_GET['id'])&& !empty($_GET['id'])){
    $supcommente = $_GET['id'];
    $deleteCommente = $bdd->prepare('DELETE FROM commente WHERE id =:id');
    $deleteCommente->execute(["id" => $supcommente]);
    if($deleteCommente->rowCount()>0){
        echo "supprimé" ;
    }else{
        echo "aucun commentaire trouvé";
    }
}else{
    echo "aucun identifant";
}
?>