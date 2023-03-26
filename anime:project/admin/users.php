<?php session_start(); 
include '../bdd.php';
?>
<!DOCTYPE html>
<html lang="fr">
<?php 
    include "navbar.php";
?>

    <body>
         <div class="first">
            <h1>Soyez le bienvenue sur le DASHBOARD mr <?php echo $_SESSION['username'] ?></h1>
        <div class="menu2">
            <ul class="tab"> 
                <a href="http://localhost/bloganime/admin/dashboard.php" class="a2"><li class="li1">Commentaires</li></a>
                <a href="#" class="a2"><li class="li2">Utilisateurs</li></a>
            </ul>
            </div>
            <p class="text1">Voici les Utilisateurs ayans actuellement un compte.</p>
         </div>
         <br>
         <?php 
         $com = $bdd->query("SELECT username,email,id FROM connexion ORDER BY id");
         
         while($reponse = $com->fetch()) {
            echo '<p class="retour"><strong> <br>'.htmlspecialchars($reponse['username']). '</strong> :' .htmlspecialchars($reponse["email"]) .'<a href="supprimer_admin.php?id='.$reponse["id"].'"><button style="background-color:rgb(10, 130, 146);color:white">Supprimer</button></a></p>';
         }

         ?>
    </body>
</html>