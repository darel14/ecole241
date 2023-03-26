<?php 
session_start();
include 'logout_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="contact.css"/>
        <title>Contact</title>
    </head>

    <body>
        <?php
            include 'menu.php';
        ?>
        <div class="box_titre">
                <h1>Contactez nous !</h1>
            </div>

            <div class="formulaire">
                <form action="info_post.php" method="POST">
                    <label for="email" class="mail1">Email </label> <input type="email" name="email" class="mail" id="email" required="required"/>
                    <label for="message" class="message1">Message </label> <input type="text" name="message" class="message" id="message" required="required"/>
                    <input type="submit" value="Envoyez" id="envoyer" />

                </form>
            </div>
        <?php
            include 'footer.php';
        ?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/contact.js"></script>
    </body>
</html>