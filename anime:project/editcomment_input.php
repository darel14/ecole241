<?php
session_start();
include 'bdd.php';
$data = $_GET['id'];
$comme = $bdd->query("SELECT commentaire FROM commente WHERE id= $data ");
$recupe = $comme->fetch();
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="edit.css">
            <title>edit_comment</title>
        </head>

        <body>
            <div id="contain">
                <h1>Apportez votre modification</h1>
                    <form action="editcommente__post.php" method="GET">
                    <input type="text" name="message" value="<?php echo $recupe['commentaire'] ?>"  class="message" required="required"/>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <input type="submit" value="Send" class="modifie">
                    </form>
                </div>        
        </body>
    </html>