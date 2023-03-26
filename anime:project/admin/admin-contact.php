<?php 
session_start();
include '../bdd.php';
?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="admin-contact.css">
        <title>Dashboard-anime.blog</title>

        <div class="menu">
            
            <div id="container1">
                <nav class="nav-menu">
                    <ul class="menu-ul">
                        <li><a href="http://localhost/bloganime/admin/dashboard.php" class="menu-a">Dashboard</a></li>
                        <li><a href="http://localhost/bloganime/admin/admin-contact.php" class="menu-a">Contact info</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </head>

         <body>
            <h1>Vous avez reçu les messages ci-dessous via votre formulaide de contact du site anime.blog</h1>
            <?php
                $mess = $bdd->query("SELECT username,email,message FROM info");
                while($reponse = $mess->fetch()) {
                    echo '<p class="retour"><strong> <br>' .htmlspecialchars($reponse['username']). '</strong> :' .htmlspecialchars($reponse['email']) . htmlspecialchars($reponse['message']).'</p>';
                }
                ?>

                <br>
                <div class="general">
        <div class="formulaire">
            <form action="admin-contact_post.php" method="POST">
                <label for="message" class="message1">message :</label> <input type="text" name="message" class="message"/>
                <input type="submit" value="Repondre"/>

            </form>
        </div>
    </div>
        </body>
    </html>