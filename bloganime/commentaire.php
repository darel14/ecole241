<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html" charset='utf-8'/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
        
   <div class="menu">
        
        <div id="container1">
        <nav class="nav-menu">
            <ul class="menu-ul">
                <li><a href="http://localhost/bloganime/index.php" class="menu-a">Acceuil</a></li>
                <li><a href="#" class="menu-a">A propos</a></li>
                <li><a href="http://localhost/bloganime/info.php" class="menu-a">Contact</a></li>
                <li><a href="http://localhost/bloganime/commentaire.php#" class="menu-a">Commentaire</a></li>

             </ul>
        </nav>
         </div>
    </div>
    </head>

    <body id="corps">  
    <div class="corps2">   
   <h1>Espace commentaire</h1>
   <p class="retour">Laisser nous un commentaire</p>
        <form action="commentaire_post.php" method="POST">
        <label for="pseudo">pseudo</label> : <input type="text" name="pseudo" id="pseudo"/>
        <label for="commentaire">commentaire</label> : <input type="text" name="commentaire" id="commentaire"/>
        <input type="submit" value="Envoyez"/>
        </form>
    </div>
        <?php 
        //connexion a la base de donné
        $bdd = new PDO('mysql:host=localhost;dbname=anime', 'root','');
        //affichage des dernier messages disponible en bdd
        $request = $bdd->query('SELECT pseudo,commentaire FROM commente ORDER BY id LIMIT 0,10');

        while($donnees = $request->fetch()) {
            echo '<p class="retour"><strong>' .htmlspecialchars($donnees['pseudo']). '</strong> :' .htmlspecialchars($donnees['commentaire']) . '</p>';
        }

        $request->closeCursor();
        
        ?>

<div class="footer1">
    <footer>
        <h5>Copyright by Darel</h5>
    <nav id="menu-footer">
        <ul>    
            <li><a href="#">Contactez-moi !</a></li>
            <li><a href="#">a propos</a></li>
        </ul>
    </nav>

    <a href="logout.php" class="logout">Log Out</a>
    </footer>
</div>
    </body>
</html>