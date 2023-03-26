<?php session_start(); 
include 'logout_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html" charset='utf-8'/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="acceuil.css"/>
    </head>

    <body>
        <?php
                include 'menu.php';
            ?>
        <div class="container">
        <div id="banner">
                <img src="isset/baki.jpg" class="picture">
        </div>
        </div>
    
        <div class="text_intro">
            <h1>Bienvenue sur Anime.blog MR <?php echo $_SESSION['username'] ?></h1>
            <p class="text1">Bon retour parmi nous mr <?php echo $_SESSION['username'] ?> voici nos suggestions de visionnage pour la semaine.</p>
        </div>
        <div id="general">
            <div class="gallerie">
                <div class="gallerie-titre">
                    <a href="#" class="lien"><img src="isset/megalo.jpg" class="picture1"></a>
                    <p class="anime_title">Megalo box</p>
                </div>
                <div class="gallerie-titre">
                    <a href="#" class="lien"><img src="isset/promised.png" class="picture2" ></a>
                    <p class="anime_title">Promise neverland</p>
                </div>
                <div class="gallerie-titre">
                    <a href="#" class="lien"><img src="isset/sv.jpg" class="picture3" ></a>
                    <p class="anime_title">Bleach</p>
                </div>
            </div>

            <div class="gallerie">

                <div class="gallerie-titre2">
                    <a href="#" class="lien_2"><img src="isset/tensei.jpg" class="picture4"></a>
                    <p class="anime_title">Tensei shitara</p>
                </div> 

                <div class="gallerie-titre2">
                    <a href="#" class="lien_2"><img src="isset/black.png" class="picture5" ></a>
                    <p class="anime_title">Black clover</p>
                </div>

                <div class="gallerie-titre2">
                    <a href="#" class="lien_2"><img src="isset/jujutsu.jpeg" class="picture6" ></a>
                    <p class="anime_title">Jujutsu</p>
                </div>

            </div>
        </div>
    <?php
        include 'footer.php';
    ?>
    </body>
</html>