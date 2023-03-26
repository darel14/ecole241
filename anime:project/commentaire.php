<?php 
session_start();
include 'logout_session.php';
include 'bdd.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html" charset='utf-8'/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="acceuil.css">
        <?php
            include 'menu.php';
        ?>
    </head>

    <body id="corps">
        <div class="flex">
            <div class="flex_2">
                <div class="corps2">   
                    <h1>Espace commentaire</h1>
                    <p class="retour">Laisser nous un commentaire mr <?php echo $_SESSION['username'] ?></p>
                    <form action="commentaire_post.php" method="POST">
                        <label for="commentaire" class="contact">commentaire :</label> <input type="text" name="commentaire" id="commentaire" class="contact1" required="required"/>
                        <label class="buton"><input type="submit" value="Envoyez"/></label>
                    </form>
                </div>
                <?php 
                //affichage des dernier messages disponible en bdd
                $request = $bdd->query('SELECT pseudo,commentaire,id,DATE_FORMAT(date, "%d/%m/%Y %Hh%imin%ss") AS date  FROM commente ORDER BY id DESC');
                while($donnees = $request->fetch()) {
                    echo '<p class="retour"><strong> <br>' .htmlspecialchars($donnees['pseudo']). '</strong> :' .htmlspecialchars($donnees['commentaire']) . '</strong> :<b>' .htmlspecialchars($donnees['date']) . '</b><a href="editcomment_input.php?id='.$donnees["id"].'"><button style="background-color:rgb(224, 7, 7);color:white;" id="update">Modifier</button></a></p>';
                }
                $request->closeCursor();
                

                $requet = $bdd->query('SELECT nom,message FROM administrateur ORDER BY id DESC');

                while($reponse = $requet->fetch()) {
                    echo '<p class="retour"><strong> <br>' .htmlspecialchars($reponse['nom']). '</strong> :' .htmlspecialchars($reponse['message']) . '</p>';

                }
                ?>
            </div>    
                <?php
                include 'footer.php';
                ?>

        </div>   
         <script src="js/commente.js"></script>
    </body>
</html>