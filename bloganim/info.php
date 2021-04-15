<?php 
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=anime', 'root','');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="contact.css"/>
        <title>Contact</title>
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

    <body>
    <div class="general">
        <h1>Contactez nous !</h1>
        <div class="formulaire">
            <form action="info_post.php" method="POST">
                <label for="pseudo" class="pseudo1">Pseudo :</label> <input type="text" name="username" class="pseudo"/>
                <label for="email" class="mail1">email :</label> <input type="text" name="email" class="mail"/>
                <label for="message" class="message1">message :</label> <input type="text" name="message" class="message"/>
                <input type="submit" value="Envoyez" />

            </form>
        </div>
    </div>


    <div class="footer">
    <footer>
        <h4>Copyright by Darel</h5>
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