<?php
include '../bdd.php';
$delete = false;
if(isset($_GET['id'])&& !empty($_GET['id'])){
    $supcommente = $_GET['id'];
    $deleteCommente = $bdd->prepare('DELETE FROM connexion WHERE id = :id');
    $deleteCommente->execute(["id" => $supcommente]);
    if($deleteCommente->rowCount()>0){
        $delete = true ;
    }else{
        echo "aucun commentaire trouvé";
    }
}else{
    echo "aucun identifant";
}
?>

<script>

let delete = <?php $delete ?>;

if(delete = true){
    alert("cet utilisateur sera supprimé !");
}
 </script>