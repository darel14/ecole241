<?php session_start(); 
$bdd = new PDO('mysql:host=localhost;dbname=anime', 'root', '');

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
        <div class="container">
        <div id="banner">
            <img src="isset/baki.jpg" class="picture">
        </div>
        </div>
    </head>

    <body>
    
        <div class="first">
            <h1>Bienvenue sur Anime.blog MR <?php echo $_SESSION['username'] ?></h1>
            <p class="text1">Bon retour parmi nous mr <?php echo $_SESSION['username'] ?> voici nos suggestions de visionnage pour la semaine.</p>
         </div>
         <div id="general">
        <div id="gallerie">
            <a href="#" class="lien"><img src="isset/megalo.jpg" class="picture1"></a>

            <a href="#" class="lien"><img src="isset/promise.png" class="picture2" ></a>

            <a href="#" class="lien"><img src="isset/nanatsu.jpg" class="picture3" ></a>
        </div>
        <div class="gallerie-titre">
            
            <p class="megalo-box">Megalo box</p>

            <p class="promise">Promise neverland</p>

            <p class="nanatsu">Nanatsu no tansai</p>


        </div>
        <br/>
        
        <div id="gallerie2">
            <a href="#" class="lien"><img src="isset/tensei.jpg" class="picture4"></a>

            <a href="#" class="lien"><img src="isset/black.jpg" class="picture5" ></a>

            <a href="#" class="lien"><img src="isset/jujutsu.jpeg" class="picture6" ></a>
        </div>
        
        <div class="gallerie-titre2">
            
            <p class="tensei">Tensei shita</p>

            <p class="kabbadi">kabaddi</p>

            <p class="jujutsu">Jujutsu</p>


        </div>
    </div>
<div class="footer">
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